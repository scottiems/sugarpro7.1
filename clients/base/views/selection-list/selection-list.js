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
({extendsFrom:'FlexListView',plugins:['ListColumnEllipsis','ListRemoveLinks'],displayFirstNColumns:4,initialize:function(options){options.context.set('skipFetch',true);options.meta=options.meta||{};options.meta.selection={type:'single',label:'LBL_LINK_SELECT'};app.view.invokeParent(this,{type:'view',name:'flex-list',method:'initialize',args:[options]});this.initializeEvents();},initializeEvents:function(){this.context.on("change:selection_model",this._selectAndClose,this);this.context.on('selection-list:select',this._selectAndCloseImmediately,this);},_selectAndClose:function(context,selectionModel){if(selectionModel){this.context.unset("selection_model",{silent:true});app.drawer.close(this._getModelAttributes(selectionModel));}},_selectAndCloseImmediately:function(model){if(model){app.drawer.closeImmediately(this._getModelAttributes(model));}},_getModelAttributes:function(model){var attributes={id:model.id,value:model.get('name')};_.each(model.attributes,function(value,field){if(app.acl.hasAccessToModel('view',model,field)){attributes[field]=attributes[field]||model.get(field);}},this);return attributes;},addActions:function(){app.view.invokeParent(this,{type:'view',name:'flex-list',method:'addActions'});if(this.meta.showPreview!==false){this.rightColumns.push({type:'rowaction',css_class:'btn',tooltip:'LBL_PREVIEW',event:'list:preview:fire',icon:'icon-eye-open'});}else{this.rightColumns.push({});}}})