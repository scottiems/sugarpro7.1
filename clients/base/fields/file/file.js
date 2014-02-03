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
({fieldTag:'input[type=file]',supportedImageExtensions:{'image/jpeg':'jpg','image/png':'png','image/gif':'gif'},events:{'click [data-action=download]':'startDownload','click [data-action=delete]':'deleteFile'},fileUrl:'',plugins:['File','EllipsisInline'],_duplicateModuleId:null,duplicateFromModel:function(modelId){this._duplicateModuleId=modelId;},deleteFile:function(e){var self=this;app.alert.show('delete_file_confirmation',{level:'confirmation',messages:app.lang.get('LBL_FILE_DELETE_CONFIRM',self.module),onConfirm:function(){var data={module:self.module,id:self.model.id,field:self.name},callbacks={success:function(){self.model.set(self.name,'');self.model.save({},{showAlerts:{'process':true,'success':{messages:app.lang.get('LBL_FILE_DELETED',self.module)}},fields:[self.name]});if(self.disposed){return;}
self.render();},error:function(data){app.error.handleHttpError(data,{});}};app.api.file('delete',data,null,callbacks,{htmlJsonFormat:false});}});},_loadTemplate:function(){this._super('_loadTemplate');if(this.view.name==='merge-duplicates'){this.template=app.template.getField(this.type,'merge-duplicates-'+this.tplName,this.module,this.tplName)||app.template.empty;this.tplName='list';}},_render:function(){this.model=this.model||this.view.model;app.view.Field.prototype._render.call(this);return this;},format:function(value){var attachments=[];if(_.isArray(value)){_.each(value,function(file){var fileObj={name:file.name,url:file.uri};attachments.push(fileObj);},this);}else if(value){var isImage=this._isImage(this.model.get('file_mime_type')),forceDownload=!isImage,mimeType=isImage?'image':'',fileObj={name:value,mimeType:mimeType,url:app.api.buildFileURL({module:this.module,id:this.model.id,field:this.name},{htmlJsonFormat:false,passOAuthToken:false,cleanCache:true,forceDownload:forceDownload})};attachments.push(fileObj);}
return(this.tplName==="list")?_.first(attachments):attachments;},startDownload:function(e){var uri=this.$(e.currentTarget).data('url');app.api.fileDownload(uri,{error:function(data){app.error.handleHttpError(data,{});}},{iframe:this.$el});},bindDataChange:function(){if(!this.model){return;}
this.model.on('change:'+this.name,function(){if(_.isUndefined(this.options.viewName)||this.options.viewName!=='edit'){this.render();}else if(this.view.name==='merge-duplicates'&&this.options.viewName&&this.options.viewName==='edit'){this.render();}
this.duplicateFromModel(null);},this);this.model.on('duplicate:field',this._onDuplicate,this);this.model.on('duplicate:field:'+this.name,this._onDuplicate,this);this.model.on('data:sync:start',function(method,options){if(!_.isNull(this._duplicateModuleId)&&(method=='update'||method=='create')){options.params=options.params||{};options.params[this.name+'_duplicateModuleId']=this._duplicateModuleId;}},this);},_onDuplicate:function(model){if(model instanceof Backbone.Model){this.duplicateFromModel(model.get('id'));}},unformat:function(value){return value.split('/').pop().split('\\').pop();},_isImage:function(mimeType){return!!this.supportedImageExtensions[mimeType];}})