<?php
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (\“MSA\”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
$module_name = '<module_name>';
$viewdefs[$module_name]['base']['view']['subpanel-list'] = array(
  'panels' => 
  array(
    array(
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array(
        array(
          'name' => 'document_name',
          'label' => 'LBL_LIST_DOCUMENT_NAME',
          'enabled' => true,
          'default' => true,
        ),
        array(
          'name' => 'active_date',
          'label' => 'LBL_DOC_ACTIVE_DATE',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);
