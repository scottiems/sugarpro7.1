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
({extendsFrom:'ButtonField',hasAccess:function(){if(this.def.acl_action=='current_user'){var su=(this.context.get('selectedUser'))||app.user.toJSON();return(su.id===app.user.get('id'))}else{return app.view.invokeParent(this,{type:'field',name:'button',method:'hasAccess'});}}})