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

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/






$focus = BeanFactory::getBean('Roles', $_REQUEST['record']);

$focus->set_user_relationship($focus->id, $_REQUEST['mass']);


$header_URL = $sugar_config["site_url"] . "/index.php?action=PopupUsers&form=UsersForm&module=Users&record={$_REQUEST['record']}";
$GLOBALS['log']->debug("about to post header URL of: $header_URL");

echo "<script language=javascript>\n";
echo "<!-- //\n";
echo "  window.opener.location.reload();\n";
echo "	window.location=\"{$header_URL}\";\n";
echo "// -->\n";
echo "</script>";

?>