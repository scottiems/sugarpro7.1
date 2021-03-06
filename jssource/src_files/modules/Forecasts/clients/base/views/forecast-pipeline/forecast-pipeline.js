/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
({
    results: {},
    chart: {},
    plugins: ['Dashlet', 'Tooltip'],

    /**
     * Is the forecast Module setup??
     */
    forecastSetup: 0,

    /**
     * Is the user a forecast Admin? This is only used if forecasts is not setup
     */
    forecastAdmin: false,

    /**
     * The open state of the sidepanel
     */
    state: "open",

    /**
     * Visible state of the preview window
     */
    preview_open: false,

    events: {
        'click button.btn': 'handleTypeButtonClick'
    },

    initialize: function(options) {
        app.view.View.prototype.initialize.call(this, options);

        // check to make sure that forecast is configured
        this.forecastSetup = app.metadata.getModule('Forecasts', 'config').is_setup;
        this.forecastAdmin = (_.isUndefined(app.user.getAcls()['Forecasts'].admin));
    },

    initDashlet: function(view) {
        // set the default button state
        this.settings.set({'display_type': 'self'}, {silent: true});

        // get the current timeperiod
        if(this.forecastSetup) {
            app.api.call('GET', app.api.buildURL('TimePeriods/current'), null, {
                success: _.bind(function(o) {
                    this.settings.set({'selectedTimePeriod': o.id}, {silent: true});
                    this.layout.loadData();
                }, this),
                complete: view.options ? view.options.complete : null
            });
        }

        this.chart = nv.models.funnelChart()
            .showTitle(false)
            .tooltips(false)
            .colorData('class', {step:2})
            .fmtValueLabel(function(d) {
                return d.label;
            });
    },

    handleTypeButtonClick: function(e) {
        var $el = $(e.currentTarget),
            displayType = $el.data('type');
        if (this.settings.get('display_type') !== displayType) {
            this.settings.set({'display_type': displayType});
        }
    },

    bindDataChange: function() {
        this.settings.on('change', function(model) {
            // reload the chart
            // reload the chart
            if(this.state == 'open' && !this.preview_open) {
                this.loadData({});
            }
        }, this);

        app.events.on('preview:open', function() {
            this.preview_open = true;
        }, this);
        app.events.on('preview:close', function() {
            this.preview_open = false;
        }, this);
        app.events.on('app:toggle:sidebar', function(state) {
            this.state = state;
            if (this.state == 'open' && !this.preview_open) {
                this.chart.update();
            }
        }, this);
    },

    /**
     * {@inheritDoc}
     */
    render: function() {
        app.view.invokeParent(this, {type: 'view', name: 'view', method: 'render'});
        if(this.chart && !_.isEmpty(this.results)) {
            this.renderChart();
        }
    },
    
    renderChart: function() {
        if (this.state != 'open' || this.preview_open) {
            return;
        }

        if(this.disposed) {
            return;
        }

        // clear out the current chart before a re-render
        if (!_.isEmpty(this.chart)) {
            nv.utils.windowUnResize(this.chart.update);
            this.$("svg#" + this.cid).children().remove();
        }

        if (this.results.data.length > 0) {
            this.$('.nv-chart').toggleClass('hide', false);
            this.$('.block-footer').toggleClass('hide', true);

            d3.select('svg#' + this.cid)
                .datum(this.results)
                .transition().duration(500).call(this.chart);

            nv.utils.windowResize(this.chart.update);
            this.resizeOnPrint(this.chart);
        } else {
            this.$('.nv-chart').toggleClass('hide', true);
            this.$('.block-footer').toggleClass('hide', false);
        }
    },

    loadData: function(options) {

        var timePeriod = this.settings.get('selectedTimePeriod');
        if (!timePeriod) {
            return;
        }

        var url_base = 'Opportunities/chart/pipeline';
        if (this.settings.has('selectedTimePeriod')) {
            url_base += '/' + timePeriod;
            if (this.settings.has('display_type')) {
                url_base += '/' + this.settings.get('display_type');
            }
            var url = app.api.buildURL(url_base);
            app.api.call('GET', url, null, {
                success: _.bind(function(o) {
                    this.results = {};
                    this.results = o;
                    this.renderChart();
                }, this),
                complete: options ? options.complete : null
            });
        }
    },

    resizeOnPrint: function(chart) {

        var resizeChart = function(){
            chart.delay(0);
            chart.update();
            chart.delay(300);
        };

        if (window.matchMedia) {
            var mediaQueryList = window.matchMedia('print');
            mediaQueryList.addListener(function(mql) {
                if (mql.matches) {
                    resizeChart();
                }
            });
        } else if (window.attachEvent) {
          window.attachEvent("onbeforeprint", resizeChart);
        } else {
          window.onbeforeprint = resizeChart;
        }

        window.onafterprint = resizeChart;
    }
})
