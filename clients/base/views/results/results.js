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
({_meta:{"buttons":[{"name":"show_more_button","type":"button","label":"Show More","class":"loading wide"}]},fallbackFieldTemplate:"detail",events:{'click [name=name]':'gotoDetail','click .icon-eye-open':'loadPreview','click [name=show_more_button]':'showMoreResults'},initialize:function(options){this.options.meta=this._meta;app.view.View.prototype.initialize.call(this,options);},_render:function(){var self=this;self.lastQuery=self.context.get('query');self.fireSearchRequest(function(collection){$('.search-query').searchahead('hide');if(collection&&collection.length){app.view.View.prototype._render.call(self);self.renderSubnav();}else{self.renderSubnav(app.lang.getAppString('LNK_SEARCH_NO_RESULTS'));}});},renderSubnav:function(overrideMessage){if(this.context.get('subnavModel')){this.context.get('subnavModel').set({'title':overrideMessage||app.utils.formatString(app.lang.get('LBL_PORTAL_SEARCH_RESULTS_TITLE'),{'query':this.lastQuery})});}},fireSearchRequest:function(cb,offset){var mlist=null,self=this,options;mlist=app.metadata.getModuleNames(true);options={showAlerts:true,query:self.lastQuery,success:function(collection){cb(collection);},module_list:mlist,error:function(error){cb(null);}};if(offset)options.offset=offset;this.collection.fetch(options);},showMoreResults:function(){var self=this,options={};options.add=true;options.showAlerts=true;options.success=function(){app.view.View.prototype._render.call(self);window.scrollTo(0,document.body.scrollHeight);};this.collection.paginate(options);},gotoDetail:function(evt){var href=this.$(evt.currentTarget).parent().parent().attr('href');window.location=href;},loadPreview:function(e){var localGGrandparent,correspondingResultId,model;localGGrandparent=this.$(e.currentTarget).parent().parent().parent();$(localGGrandparent).parent().find('li').removeClass('on');$(localGGrandparent).addClass("on");correspondingResultId=$(localGGrandparent).find('p a').attr('href').split('/')[1];model=this.collection.get(correspondingResultId);this.layout.layout.trigger("search:preview",model);}})