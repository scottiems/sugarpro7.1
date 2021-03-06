<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

$dictionary['teams'] = array ( 'table' => 'teams'
                                  , 'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36',)
      , array('name' =>'name', 'type' =>'varchar', 'len'=>'128', )
      , array('name' =>'date_entered', 'type' =>'datetime', 'len'=>'', )
      , array('name' =>'date_modified', 'type' =>'datetime', 'len'=>'', )
      , array('name' =>'modified_user_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'created_by', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'private', 'type' =>'bool', 'len'=>'1', 'default'=>'0')
      , array('name' =>'description', 'type' =>'text', 'len'=>'',)
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0')
                                                      )                                  , 'indices' => array (
       array('name' =>'teamspk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' =>'idx_team_del', 'type' =>'index', 'fields'=>array('name'))
                                                      )
                                  )
?>
