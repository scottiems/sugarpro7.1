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


$viewdefs['Forecasts']['base']['view']['forecast-pipeline'] = array(
    'dashlets' => array(
        array(
            'name' => 'LBL_DASHLET_PIPELINE_CHART_NAME',
            'description' => 'LBL_DASHLET_PIPELINE_CHART_DESC',
            'config' => array(
                'module' => 'Forecasts'
            ),
            'preview' => array(
                'module' => 'Forecasts'
            ),
            'filter' => array(
                'module' => array(
                    'Home',
                    'Accounts',
                    'Opportunities',
                    'RevenueLineItems'
                ),
                'view' => array(
                    'record',
                    'records'
                )
            )
        ),
    ),
    'timeperiod' => array(
        array(
            'name' => 'selectedTimePeriod',
            'label' => 'TimePeriod',
            'type' => 'enum',
        ),
    )
);
