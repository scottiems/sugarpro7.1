/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

({
    tagName: 'li',
    events: {
        'click .remove-row': 'removeClicked'
    },
    plugins: ['Tooltip'],
    initialize: function(options) {
        this.index = options.meta.index;
        options.meta = this.setMetadata(options.meta);
        app.view.Layout.prototype.initialize.call(this, options);
        this.model.on("setMode", this.setMode, this);
        this.model.on("applyDragAndDrop", this.applyDragAndDrop, this);
        this.setMode(this.model.mode);
    },
    setMetadata: function(meta) {
        meta.components = meta.components || [];
        _.each(meta.components, function(component, index){
            meta.components[index] = {
                layout: {
                    type : 'dashlet-cell',
                    index : this.index + '' + index,
                    components: component
                }
            };
        }, this);

        var addRowDashlet = {
            layout: {
                type: 'dashlet',
                index: this.index + '' + meta.components.length,
                empty: true,
                components: [
                    {
                        view: 'dashlet-row-empty',
                        context: {
                            module:'Home',
                            forceNew:true,
                            create:true
                        }
                    }
                ]
            }
        };
        meta.components.push(addRowDashlet);
        if(meta.css_class) meta.css_class += ' ';
        meta.css_class = 'span' + (meta.width || 12);
        return meta;
    },
    _placeComponent: function(comp, def, prepend) {
        var $body = this.$el.children(".dashlet-row");
        if($body.length === 0) {
            $body = $("<ul></ul>").addClass("dashlet-row");
            this.$el.append($body);
        }
        var headerTemplate = app.template.getLayout(this.name + '.header') || app.template.empty,
            $container = $("<div></div>", {'class': 'rows well well-invisible'})
                .append(headerTemplate())
                .append(comp.el),
            $el = $("<li></li>", {'class': 'row-fluid', 'data-sortable': '1'}).data('index', function() {
                return comp.index + '';
            }).append($container);

        if(prepend) {
            $body.children("li:last").before($el);
        } else {
            $body.append($el);
        }
    },
    addComponent: function(component, def) {
        if(this.prependComponent) {
            if (!component.layout) component.layout = this;
            this._components.splice(this._components.length - 1, 0, component);
            this._placeComponent(component, def, true);
            this.prependComponent = false;
        } else {
            app.view.Layout.prototype.addComponent.call(this, component, def);
        }
    },
    addRow: function(columns) {
        var span = 12 / columns,
            components = [];
        _.times(columns, function() {
            components.push({
                width: span
            });
        });
        var metadata = this.model.get("metadata");
        var position = this.index.split(''),
            component = metadata.components;
        _.each(position, function(index){
            component = component.rows ? component.rows[index] : component[index];
        }, this);
        component.rows.push(app.utils.deepCopy(components));
        this.model.set("metadata", metadata, {silent: true});
        this.model.trigger("change:layout");

        this.prependComponent = true;
        _.each(this._components, function(component){
            component.index++;
        }, this);
        this._addComponentsFromDef([{
            layout: {
                type : 'dashlet-cell',
                index: this.index + '' + (this._components.length - 1),
                components: components
            }
        }]);
        _.each(this._components, function(component, index){
            component.index = this.index + '' + index;
        }, this);
        this.render();
        this.setMode(this.model.mode);
    },
    removeClicked: function(evt) {
        var index = ($(evt.currentTarget).parents(".row-fluid:first").data("index")()).split('').pop();
        this.removeRow(index);
    },
    removeRow: function(index) {
        var metadata = this.model.get("metadata"),
            position = this.index.split(''),
            component = metadata.components;
        _.each(position, function(index){
            component = component.rows ? component.rows[index] : component[index];
        }, this);
        component.rows.splice(index, 1);
        this._components[index].dispose();
        this._components.splice(index, 1);
        _.each(this._components, function(component, index){
            component.index = this.index + '' + index;
        }, this);

        this.model.set("metadata", app.utils.deepCopy(metadata), {silent: true});
        this.model.trigger("change:layout");
        this.$el.children(".dashlet-row").children("li:eq(" + index + ")").remove();
    },
    setMode: function(type) {
        if(type === 'edit' || (this.model._previousMode === 'edit' && type === 'drag')) {
            this.$el.children(".dashlet-row").sortable("enable");
            this.$el.children(".dashlet-row").children("li").not(":last").addClass("sortable").children(".rows").removeClass("well-invisible").children(".btn-link").toggleClass("hide", false);
        } else {
            this.$el.children(".dashlet-row").sortable("disable");
            this.$el.children(".dashlet-row").children("li").not(":last").addClass("sortable").children(".rows").addClass("well-invisible").children(".btn-link").toggleClass("hide", true);
        }
    },
    applyDragAndDrop: function() {
        var self = this;
        this.$el.children(".dashlet-row").sortable({
            axis: "y",
            items: "li.sortable",
            handle: ".move",
            forcePlaceholderSize: true,
            placeholder: "placeholder",
            update: function(event, ui) {
                var sourceIndex = ui.item.first().data('index')(),
                    targetIndex = ui.item.first().next().data('index')();

                self.switchComponent(targetIndex, sourceIndex);
            }
        });
        this.setMode(this.model.mode);
    },
    switchComponent: function(target, source) {
        var metadata = this.model.get("metadata"),
            position = this.index.split(''),
            component = metadata.components,
            targetIndex = target.split('').pop(),
            sourceIndex = source.split('').pop();
        _.each(position, function(index){
            component = component.rows ? component.rows[index] : component[index];
        }, this);

        var sourceMetadata = component.rows[sourceIndex],
            sourceComponent = this._components[sourceIndex];

        if(sourceIndex > targetIndex) {
            //dragging up
            component.rows.splice(sourceIndex, 1);
            component.rows.splice(targetIndex, 0, sourceMetadata);

            this._components.splice(sourceIndex, 1);
            this._components.splice(targetIndex, 0, sourceComponent);
        } else {
            //dragging down
            component.rows.splice(targetIndex, 0, sourceMetadata);
            component.rows.splice(sourceIndex, 1);

            this._components.splice(targetIndex, 0, sourceComponent);
            this._components.splice(sourceIndex, 1);
        }

        _.each(this._components, function(component, index){
            component.index = this.index + '' + index;
        }, this);

        this.model.set("metadata", app.utils.deepCopy(metadata), {silent: true});
        this.model.trigger("change:layout");
    },
    _dispose: function() {
        this.$el.children(".dashlet-row").sortable("destroy");
        this.model.off("applyDragAndDrop", null, this);
        this.model.off("setMode", null, this);
        app.view.Layout.prototype._dispose.call(this);
    }
})
