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
({plugins:['Editable','ErrorDecoration','Tooltip','EllipsisInline'],extendsFrom:'ListView',events:{'click [data-action=more]':'toggleMoreLess','click [data-action=less]':'toggleMoreLess','click [data-mode=preview]':'togglePreview','click [data-action=copy]':'triggerCopy'},_defaultSettings:{queueFetchConcurrency:2,queueFetchTimeout:90000,queueUpdateConcurrency:4,queueUpdateTimeout:90000,relatedLinkFetchLimit:20,maxAllowAttempt:3},mergeFields:[],rowFields:{},primaryRecord:{},toggled:false,isPreviewOpen:false,relatedFieldsMap:['id_name','type_name'],fieldNameBlacklist:['date_entered','date_modified','modified_user_id','created_by','deleted'],fieldTypesBlacklist:['image','currency','email','team_list','teamset','link','id'],relatesBlacklist:['assigned_user_link','modified_user_link','created_by_link','teams','team_link','team_count_link','campaigns','campaign_link','archived_emails','email_addresses','email_addresses_primary','forecastworksheets','currencies'],relatesBlacklistForModule:{Accounts:['revenuelineitems'],Opportunities:['accounts'],Leads:['oldmeetings','oldcalls'],Prospects:['tasks'],Bugs:['project'],RevenueLineItems:['campaign_revenuelineitems']},mergeStat:null,mergeProgressModel:null,validArrayAttributes:[{type:'datetimecombo',source:'db'},{type:'datetime',source:'db'},{type:'varchar',source:'db'},{type:'enum',source:'db'},{type:'multienum',source:'db'},{type:'text',source:'db'},{type:'date',source:'db'},{type:'time',source:'db'},{type:'int',source:'db'},{type:'long',source:'db'},{type:'double',source:'db'},{type:'float',source:'db'},{type:'short',source:'db'},{dbType:'varchar',source:'db'},{dbType:'double',source:'db'},{type:'relate'},{type:'parent'}],flattenFieldTypes:['fieldset','fullname'],initialize:function(options){app.view.View.prototype.initialize.call(this,options);this._initializeMergeFields();this._initializeMergeCollection(this._prepareRecords());this.action='list';this.layout.on('mergeduplicates:save:fire',this.triggerSave,this);},_prepareRecords:function(){var records=this.checkAccessToModels(this.context.get('selectedDuplicates')),primary;primary=(this.context.has('primaryRecord'))?_.findWhere(records,{id:this.context.get('primaryRecord').id}):_.first(records);this.setPrimaryRecord(primary);return[primary].concat(_.without(records,primary));},_initializeMergeFields:function(){var meta=app.metadata.getView(this.module,'record'),fieldDefs=app.metadata.getModule(this.module).fields;this.mergeFields=_.chain(meta.panels).map(function(panel){return this.flattenFieldsets(panel.fields);},this).flatten().filter(function(field){return field.name&&this.validMergeField(fieldDefs[field.name]);},this).value();},_initializeMergeCollection:function(records){var ids=(_.pluck(records,'id'));if(this.collection){this.collection.filterDef=[];this.collection.filterDef.push({'id':{'$in':ids}});this.collection.comparator=function(model){return _.indexOf(ids,model.get('id'));};}},checkAccessToModels:function(models){var result=[];_.each(models,function(model){var hasAccess=_.every(['view','edit','delete'],function(acl){return app.acl.hasAccessToModel(acl,model);});if(hasAccess){result.push(model);}},this);return result;},triggerSave:function(){var self=this,alternativeModels=_.without(this.collection.models,this.primaryRecord),alternativeModelNames=[];_.each(alternativeModels,function(model){alternativeModelNames.push(this._getRecordTitle(model));},this);this.clearValidationErrors(this.getFieldNames());app.alert.show('merge_confirmation',{level:'confirmation',messages:app.lang.get('LBL_MERGE_DUPLICATES_CONFIRM')+' '+
alternativeModelNames.join(', ')+'. '+
app.lang.get('LBL_MERGE_DUPLICATES_PROCEED'),onConfirm:_.bind(this._savePrimary,this)});},_savePrimary:function(){var self=this,fields=this.getFieldNames().filter(function(field){return app.acl.hasAccessToModel('edit',this.primaryRecord,field);},this);this.primaryRecord.save({},{fieldsToValidate:fields,success:function(){self.primaryRecord.trigger('mergeduplicates:primary:saved');},showAlerts:true,viewed:true});},_removeMerged:function(){var self=this,models=_.without(this.collection.models,this.primaryRecord);async.forEach(models,function(model,callback){self.collection.remove(model);model.destroy({success:function(){callback.call();}});},function(){self.primaryRecord.trigger('mergeduplicates:primary:merged');});},getFieldNames:function(){var fields=[],fieldDefs=app.metadata.getModule(this.module).fields;_.each(this.mergeFields,function(mergeField){var def=fieldDefs[mergeField.name];_.each(this.relatedFieldsMap,function(relatedField){if(!_.isUndefined(def[relatedField])&&!_.isUndefined((fieldDefs[def[relatedField]].name))){fields.push(fieldDefs[def[relatedField]].name);}});fields.push(fieldDefs[def.name].name);},this);return fields;},_generateMetadata:function(fields,collection,primaryRecord){var hiddenFields=[],visibleFields=[],alternatives=collection.without(primaryRecord);_.each(fields,function(field){if(this._isSimilar(field,primaryRecord,alternatives)){hiddenFields.push(field);}else{visibleFields.push(field);}},this);return{type:'list',panels:[{fields:visibleFields},{hide:true,fields:hiddenFields}]};},_isSimilar:function(field,primary,models){return _.every(models,function(model){return(primary.get(field.name)===model.get(field.name));});},validMergeField:function(fieldDef){if(!fieldDef||fieldDef.auto_increment===true||!this._validMergeFieldName(fieldDef)||!this._validMergeFieldType(fieldDef)||this._isDuplicateMergeDisabled(fieldDef)){return false;}
if(this._isDuplicateMergeEnabled(fieldDef)){return true;}
return this._validMergeFieldAttributes(fieldDef);},_validMergeFieldName:function(defs){return!_.contains(this.fieldNameBlacklist,defs.name);},_validMergeFieldType:function(defs){return!_.contains(this.fieldTypesBlacklist,defs.type);},_isDuplicateMergeDisabled:function(defs){if(!_.isUndefined(defs.duplicate_merge)&&(defs.duplicate_merge==='disabled'||defs.duplicate_merge===false)){return true;}
return false;},_isDuplicateMergeEnabled:function(defs){if(!_.isUndefined(defs.duplicate_merge)&&(defs.duplicate_merge==='enabled'||defs.duplicate_merge===true)){return true;}
return false;},_validMergeFieldAttributes:function(defs){defs.dbType=defs.dbType||defs.type;defs.source=defs.source||'db';return _.some(this.validArrayAttributes,function(o){return _.chain(o).keys().every(function(key){return o[key]===defs[key];}).value();});},flattenFieldsets:function(defs){var fieldsetFilter=function(field){return(field.type&&_.isArray(field.fields)&&_.contains(this.flattenFieldTypes,field.type));},fields=_.reject(defs,fieldsetFilter,this),fieldsets=_.filter(defs,fieldsetFilter,this),sort=_.chain(defs).pluck('name').value()||[],sortTemp=[];while(fieldsets.length){var fieldsNames=_.chain(fieldsets).pluck('fields').flatten().pluck('name').value();sortTemp=[];_.each(sort,function(value){if(value===_.first(fieldsets).name){sortTemp=sortTemp.concat(fieldsNames);}else{sortTemp=sortTemp.concat(value);}},this);sort=sortTemp;fieldsets=_.chain(fieldsets).pluck('fields').flatten().value();fields=fields.concat(_.reject(fieldsets,fieldsetFilter));fieldsets=_.filter(fieldsets,fieldsetFilter);}
fields=_.sortBy(fields,function(value,index){var result=index,name=value;if(!_.isUndefined(value.name)){name=value.name;_.each(sort,function(valueSort,indexSort){if(valueSort==name){result=indexSort;}});}
return result;});return fields;},togglePreview:function(evt){if(this.isPreviewOpen){app.events.trigger('preview:close');}else{this.updatePreviewRecord(this.primaryRecord);}
this.isPreviewOpen=!this.isPreviewOpen;$(evt.currentTarget).toggleClass('on',this.isPreviewOpen);},updatePreviewRecord:function(model){var module=model.module||model.get('module');var previewCollection=app.data.createBeanCollection(module,[model]);app.events.trigger('preview:render',model,previewCollection,false);},toggleMoreLess:function(evt){this.toggled=!this.toggled;this.$('[data-action=less]').toggleClass('hide',!this.toggled);this.$('[data-action=more]').toggleClass('hide',this.toggled);this.$('.col .extra').toggleClass('hide',!this.toggled);},updatePrimaryTitle:function(title){this.$('[data-container=primary-title]').text(title);},_getRecordTitle:function(model){var field=app.view.createField({view:this,def:model.fields['name'],model:model}),title=field.format(model.get('name'));field.dispose();return title;},_renderHtml:function(){this.meta=this._generateMetadata(this.mergeFields,this.collection,this.primaryRecord);app.view.invokeParent(this,{type:'view',name:'list',method:'_renderHtml'});this.rowFields={};_.each(this.fields,function(field){if(field.model.id&&_.isUndefined(field.parent)&&field.type!=='datetimecombo'){this.rowFields[field.model.id]=this.rowFields[field.model.id]||[];this.rowFields[field.model.id].push(field);}},this);this.setPrimaryEditable(this.primaryRecord.id);this.setDraggable();if(this.toggled){this.toggleMoreLess();}
this._showAlertIfIdentical();},_showAlertIfIdentical:function(){if(!this.meta||!this.meta.panels){return;}
if(!this.collection.length){return;}
var self=this,visibleFields=_.first(this.meta.panels);if(_.isEmpty(visibleFields.fields)){app.alert.show('merge_confirmation_identical',{level:'confirmation',messages:app.lang.get('TPL_MERGE_DUPLICATES_IDENTICAL',this.module),onConfirm:function(){self.layout.trigger('mergeduplicates:save:fire');},onLinkClick:function(event){if($(event.currentTarget).hasClass('cancel')){if(!self.toggled){self.toggleMoreLess();}}}});}},setDraggable:function(){var self=this,mergeContainer=this.$('[data-container=merge-container]');mergeContainer.find('[data-container=primary-label]').sortable({connectWith:self.$('[data-container=primary-label]'),appendTo:mergeContainer,axis:'x',disableSelection:true,cursor:'move',placeholder:'primary-lbl-placeholder-span',start:function(event,ui){self.$('[data-container=primary-label]').addClass('primary-lbl-placeholder');},stop:_.bind(self._onStopSorting,self)});},_onStopSorting:function(event,ui){var self=this,droppedTo=ui.item.parents('[data-record-id]');self.$('[data-container=primary-label]').removeClass('primary-lbl-placeholder');if(droppedTo.length===0){self.$('[data-container=primary-label]').sortable('cancel');return;}
if(self.primaryRecord&&self.primaryRecord.id!==droppedTo.data('record-id')){var changedAttributes=self.primaryRecord.changedAttributes(self.primaryRecord.getSyncedAttributes());if(!_.isEmpty(changedAttributes)){app.alert.show('change_primary_confirmation',{level:'confirmation',messages:app.lang.get('LBL_MERGE_UNSAVED_CHANGES'),onConfirm:function(){self.primaryRecord.revertAttributes();self.setPrimaryEditable(droppedTo.data('record-id'));},onLinkClick:function(event){if($(event.currentTarget).hasClass('cancel')){self.$('[data-record-id='+self.primaryRecord.get('id')+'] '+'[data-container=primary-label]').sortable('cancel');}}});return;}
self.setPrimaryEditable(droppedTo.data('record-id'));}},checkCopyRadioButtons:function(){if(!this.primaryRecord){return;}
_.each(this.mergeFields,function(field){var model=this.primaryRecord,element=this.$('[data-field-name='+field.name+'][data-record-id='+model.id+']'),elements=this.$('[data-field-name='+field.name+'][data-record-id!='+model.id+']'),editAccess=app.acl.hasAccessToModel('edit',model,field.name);element.prop('disabled',!editAccess);if(!editAccess){elements.prop('disabled',true);return;}
_.each(elements,function(domElement){var el=$(domElement),readAccess=app.acl.hasAccessToModel('read',this.collection.get(el.data('record-id')),field.name);el.prop('disabled',!readAccess);},this);},this);},setPrimaryEditable:function(id){var oldPrimaryRecord=this.primaryRecord,newPrimaryRecord=this.collection.get(id||null);if(!_.isUndefined(newPrimaryRecord)&&newPrimaryRecord!==oldPrimaryRecord){this.setPrimaryRecord(newPrimaryRecord);}
if(!this.primaryRecord){return;}
if(oldPrimaryRecord&&oldPrimaryRecord!==this.primaryRecord){this.toggleFields(this.rowFields[oldPrimaryRecord.id],false);}
this.toggleFields(this.rowFields[this.primaryRecord.id],true);this.updatePrimaryTitle(this._getRecordTitle(this.primaryRecord));if(this.isPreviewOpen){this.updatePreviewRecord(this.primaryRecord);}
this.$('.primary-edit-mode').removeClass('primary-edit-mode');this.$('[data-record-id='+this.primaryRecord.id+']').addClass('primary-edit-mode');this.$('[data-record-id='+this.primaryRecord.id+'] input[type=radio]').attr('checked',true);this.checkCopyRadioButtons();},setPrimaryRecord:function(model){if(this.primaryRecord===model){return;}
if(this.primaryRecord instanceof Backbone.Model){this.primaryRecord.off(null,null,this);}
this.primaryRecord=model;this.primaryRecord.on('change',function(model){this.updatePrimaryTitle(this._getRecordTitle(this.primaryRecord));},this);this.primaryRecord.on('mergeduplicates:primary:saved',function(){this._mergeRelatedRecords();},this);this.primaryRecord.on('mergeduplicates:related:merged',function(){this._onRelatedMerged();},this);this.primaryRecord.on('mergeduplicates:primary:merged',function(){app.alert.dismiss('mergeduplicates_merging');this._showSuccessMessage();app.drawer.close(true,this.primaryRecord);},this);},triggerCopy:function(evt){var recordId=this.$(evt.currentTarget).data('record-id'),fieldName=this.$(evt.currentTarget).data('field-name'),fieldDefs=app.metadata.getModule(this.module).fields,model;if(_.isUndefined(this.primaryRecord)||_.isUndefined(this.primaryRecord.id)||_.isUndefined(recordId)||_.isUndefined(fieldName)||_.isUndefined(fieldDefs[fieldName])){return;}
model=this.collection.get(recordId);if(_.isUndefined(model)){return;}
if(!app.acl.hasAccessToModel('edit',this.primaryRecord,fieldName)||!app.acl.hasAccessToModel('read',model,fieldName)){return;}
if(model===this.primaryRecord){this.revert(fieldName);}else{this.copy(fieldName,model);}},copy:function(fieldName,model){this._setRelatedFields(fieldName,model);this.primaryRecord.set(fieldName,model.get(fieldName));this.primaryRecord.trigger('duplicate:field:'+fieldName,model!==this.primaryRecord?model:null);},revert:function(fieldName){var syncedAttributes=this.primaryRecord.getSyncedAttributes();this._setRelatedFields(fieldName,this.primaryRecord,true);this.primaryRecord.set(fieldName,!_.isUndefined(syncedAttributes[fieldName])?syncedAttributes[fieldName]:this.primaryRecord.get(fieldName));this.primaryRecord.trigger('duplicate:field:'+fieldName,null);},_setRelatedFields:function(fieldName,model,synced){synced=synced||false;var fieldDefs=app.metadata.getModule(this.module).fields,defs=fieldDefs[fieldName],syncedAttributes=synced?model.getSyncedAttributes():{};_.each(this.relatedFieldsMap,function(relatedField){if(_.isUndefined(defs[relatedField])||_.isUndefined(fieldDefs[defs[relatedField]].name)){return;}
this.primaryRecord.set(defs[relatedField],!_.isUndefined(syncedAttributes[defs[relatedField]])?syncedAttributes[defs[relatedField]]:model.get(defs[relatedField]));},this);},_getRelatedLinks:function(){var fieldDefs=app.metadata.getModule(this.module).fields,excludedLinks=this._getExcludedRelatedLinks();return _.filter(fieldDefs,function(field){return!_.isUndefined(field.type)&&field.type==='link'&&!_.contains(excludedLinks,field.name)&&this._isValidRelateLink(field)&&this._isValidRelateLinkType(field);},this);},_getExcludedRelatedLinks:function(){var excludedLinks=[],fieldDefs=app.metadata.getModule(this.module).fields;_.each(this.mergeFields,function(mergeField){var def=fieldDefs[mergeField.name];if(def.type==='relate'&&!_.isUndefined(def.link)){excludedLinks.push(def.link);}},this);return excludedLinks;},_isValidRelateLink:function(link){if(!link||!link.name){return false;}
if(_.contains(this.relatesBlacklist,link.name)){return false;}
if(!_.isUndefined(this.relatesBlacklistForModule[this.module])&&_.contains(this.relatesBlacklistForModule[this.module],link.name)){return false;}
if(!_.isUndefined(link.duplicate_merge)&&(link.duplicate_merge==='disabled'||link.duplicate_merge==='false'||link.duplicate_merge===false)){return false;}
return true;},_isValidRelateLinkType:function(link){if(!_.isUndefined(link.link_type)&&link.link_type==='one'){return false;}
return true;},_mergeRelatedRecords:function(){var self=this,alternativeModels=_.without(this.collection.models,this.primaryRecord),relatedLinks=_.pluck(this._getRelatedLinks(),'name'),progressView,queue,tasks=[];this.mergeStat={records:this.collection.models.length,total:0,total_errors:0,total_fetch_errors:0};this.mergeProgressModel=new Backbone.Model({isStopped:false});if(!alternativeModels||!alternativeModels.length){self.primaryRecord.trigger('mergeduplicates:related:merged');return;}
if(!relatedLinks||!_.isArray(relatedLinks)||!relatedLinks.length){self.primaryRecord.trigger('mergeduplicates:related:merged');return;}
progressView=this._getProgressView();progressView.reset();progressView.setTotalRecords(alternativeModels.length*relatedLinks.length);this.mergeProgressModel.trigger('massupdate:start');_.each(relatedLinks,function(link){_.each(alternativeModels,function(model){tasks.push({collection:self._createRelatedCollection(model,link)});});});queue=async.queue(function(task,callback){if(self.mergeProgressModel.get('isStopped')){callback.call();return;}
self._mergeRelatedCollection(task.collection,callback);},this._defaultSettings.queueFetchConcurrency||4);queue.drain=function(){self.mergeProgressModel.trigger('massupdate:end');if(!self.mergeProgressModel.get('isStopped')){self.primaryRecord.trigger('mergeduplicates:related:merged');}};queue.push(tasks,function(err){});},_onRelatedMerged:function(){var self=this;if(this.mergeStat.total_fetch_errors>0||this.mergeStat.total_errors>0){app.alert.show('final_confirmation',{level:'confirmation',messages:app.lang.get('LBL_MERGE_DUPLICATES_FAIL_PROCESS',this.module),onConfirm:function(){self._onMergeRelatedCompleted();},onCancel:function(){self.mergeProgressModel.trigger('massupdate:end');},autoClose:false});return;}
this._onMergeRelatedCompleted();},_onMergeRelatedCompleted:function(){app.alert.show('mergeduplicates_merging',{level:'process',title:app.lang.get('LBL_SAVING',this.module)});this._removeMerged();},_createRelatedCollection:function(model,link){var relatedCollection=app.data.createRelatedCollection(model,link);return _.extend(relatedCollection,{attempt:0,maxAllowAttempt:this._defaultSettings.maxAllowAttempt||3,objectName:app.data.getRelatedModule(this.primaryRecord.module,link)});},_mergeRelatedCollection:function(collection,callback,offset){if(this.mergeProgressModel.get('isStopped')){callback.call();return;}
offset=offset||0;var self=this,onCollectionMerged=function(){self.mergeProgressModel.trigger('massupdate:item:processed');callback.call();};collection.fetch({relate:true,limit:this._defaultSettings.relatedLinkFetchLimit||20,offset:offset,apiOptions:{timeout:this._defaultSettings.queueFetchTimeout,skipMetadataHash:true},success:function(data,response,options){if(!data||!data.models||!data.models.length){onCollectionMerged.call();return;}
var queue,tasks=[];_.each(data.models,function(model){tasks.push({relatedModel:self._createRelatedModel(model,collection.link.name)});});var queue=async.queue(function(task,callback){self._mergeRelatedModel(task.relatedModel,collection.link.name,callback);},self._defaultSettings.queueUpdateConcurrency||10);queue.drain=function(){if(!_.isUndefined(data.next_offset)&&data.next_offset!==-1){self._mergeRelatedCollection(collection,callback,data.next_offset);}else{onCollectionMerged.call();}};queue.push(tasks,function(err){});},error:function(){collection.attempt=collection.attempt+1;self.mergeProgressModel.trigger('massupdate:item:attempt',collection);if(collection.attempt<=collection.maxAllowAttempt){self._mergeRelatedCollection(collection,callback,offset);}else{self.mergeStat.total_fetch_errors=self.mergeStat.total_fetch_errors+1;self.mergeProgressModel.trigger('massupdate:item:fail',collection);onCollectionMerged.call();}}});},_createRelatedModel:function(model,link){var self=this,relatedModel=app.data.createRelatedBean(this.primaryRecord,model.get('id'),link);return _.extend(relatedModel,{attempt:0,maxAllowAttempt:this._defaultSettings.maxAllowAttempt||3,objectName:app.data.getRelatedModule(self.primaryRecord.module,link)});},_mergeRelatedModel:function(model,link,callback){if(this.mergeProgressModel.get('isStopped')){callback.call();return;}
var self=this;model.save(null,{showAlerts:false,relate:true,apiOptions:{timeout:this._defaultSettings.queueUpdateTimeout,skipMetadataHash:true},success:function(){self.mergeStat.total=self.mergeStat.total+1;callback.call();},error:function(error){model.attempt=model.attempt+1;self.mergeProgressModel.trigger('massupdate:item:attempt',model);if(model.attempt<=model.maxAllowAttempt){self._mergeRelatedModel(model,link,callback);}else{self.mergeStat.total_errors=self.mergeStat.total_errors+1;self.mergeProgressModel.trigger('massupdate:item:fail',model);callback.call();}}});},_getProgressView:function(){var progressView=this.layout.getComponent('merge-duplicates-progress');if(!progressView){progressView=app.view.createView({context:this.context,name:'merge-duplicates-progress',layout:this.layout,model:this.mergeProgressModel});this.layout._components.push(progressView);this.layout.$el.append(progressView.$el);}
progressView.render();return progressView;},_showSuccessMessage:function(){app.alert.show('mergerelated_final_notice',{level:'success',messages:app.lang.get('TPL_MERGE_DUPLICATES_STAT',this.module,{stat:this.mergeStat}),autoClose:true,autoCloseDelay:8000});},bindDataChange:function(){if(!this.collection){return;}
this.collection.on('reset',function(coll){if(coll.length){this.setPrimaryRecord(coll.at(0));}
if(this.disposed){return;}
this.render();},this);},_dispose:function(){if(!_.isEmpty(this.primaryRecord)){this.primaryRecord.off(null,null,this);}
this._super('_dispose');}})