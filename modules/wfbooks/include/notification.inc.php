<?php
/* $Id: notification.inc.php,v 1.3 21 June 2005 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

function wfbooks_notify_iteminfo($category, $item_id)
{
	global $xoopsModule, $xoopsModuleConfig, $xoopsConfig;

	if (empty($xoopsModule) || $xoopsModule->getVar('dirname') != 'wfbooks') {	
		$module_handler =& xoops_gethandler('module');
		$module =& $module_handler->getByDirname('wfbooks');
		$config_handler =& xoops_gethandler('config');
		$config =& $config_handler->getConfigsByCat(0,$module->getVar('mid'));
	} else {
		$module =& $xoopsModule;
		$config =& $xoopsModuleConfig;
	}

	if ($category=='global') {
		$item['name']='';
		$item['url']='';
		return $item;
	}

	global $xoopsDB;
	if ($category=='category') {
		// Assume we have a valid category id
		$sql="SELECT title FROM " . $xoopsDB->prefix('wfbooks_cat') . " WHERE cid=".$item_id;
		if (!$result = $xoopsDB->query($sql)) {
		    return false;
		}
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = XOOPS_URL . '/modules/wfbooks/viewcat.php?cid=' . $item_id;
		return $item;
	}

	if ($category=='link') {
		// Assume we have a valid file id
		$sql="SELECT cid,title FROM ".$xoopsDB->prefix('wfbooks_links') . " WHERE lid=" . $item_id;
		if (!$result = $xoopsDB->query($sql)) {
		    return false;
		}
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = XOOPS_URL . '/modules/wfbooks/singlelink.php?cid=' . $result_array['cid'] . '&amp;lid=' . $item_id;
		return $item;
	}
}
?>
