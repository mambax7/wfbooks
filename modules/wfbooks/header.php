<?php
/**
 * $Id: header.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

include_once '../../mainfile.php';
include XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/config.php';
include XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/functions.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/class/class_thumbnail.php';
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';

if ( !file_exists( "language/" . $xoopsConfig['language'] . "/main.php" ) ) {
    include "language/" . $xoopsConfig['language'] . "/main.php";
} 

include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/class/myts_extended.php';
$wfmyts = new wflTextSanitizer(); // MyTextSanitizer object

global $xoopModuleConfig;

?>