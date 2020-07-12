<?php
/**
 * $Id: wfbooks_top.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}
/**
 * controleerBlockgroups()
 * 
 * @param integer $cid
 * @param string $permType
 * @param boolean $redirect
 * @return 
 **/
function controleerBlockgroups( $cid = 0, $permType = 'WFBookCatPerm', $redirect = false ) {
    global $xoopsUser;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );

    $module_handler = &xoops_gethandler( 'module' );
    $module = &$module_handler -> getByDirname( 'wfbooks' );

    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $module -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    unset( $module );
    return true;
} 

/**
 * Function: b_mylinks_top_show
 * Input   : $options[0] = date for the most recent links
 * 				           hits for the most popular links
 *                   $block['content'] = The optional above content
 *                   $options[1]   = How many links are displayes
 * Output  : Returns the most recent or most popular links
 */
function b_wfbooks_top_show( $options ) {
    global $xoopsDB;

    $block = array();
    $modhandler = &xoops_gethandler( 'module' );
    $wflModule = &$modhandler -> getByDirname( "wfbooks" );
    $config_handler = &xoops_gethandler( 'config' );
    $wflModuleConfig = &$config_handler -> getConfigsByCat( 0, $wflModule -> getVar( 'mid' ) );

    $wfmyts = &MyTextSanitizer :: getInstance();

    $result = $xoopsDB -> query( "SELECT lid, cid, title, date, hits FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . " WHERE published > 0 AND published <= " . time() . " AND (expired = 0 OR expired > " . time() . ") AND offline = 0 ORDER BY " . $options[0] . " DESC", $options[1], 0 );
    while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
        if ( false == controleerBlockgroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        } 
        $linkload = array();
        $title = $wfmyts -> htmlSpecialChars( $wfmyts ->stripSlashesGPC($myrow["title"]) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . "...";
            } 
        } 
        $linkload['id'] = intval($myrow['lid']);
        $linkload['cid'] = intval($myrow['cid']);
        $linkload['title'] = $title;
        if ( $options[0] == "date" ) {
            $linkload['date'] = formatTimestamp( $myrow['date'], $wflModuleConfig['dateformat'] );
        } elseif ( $options[0] == "hits" ) {
            $linkload['hits'] = $myrow['hits'];
        } 
        $linkload['dirname'] = $wflModule -> getVar( 'dirname' );
        $block['links'][] = $linkload;
    } 
    unset( $_block_check_array );
    return $block;
} 

/**
 * b_wfbooks_top_edit()
 * 
 * @param $options
 * @return 
 **/ 
function b_wfbooks_top_edit( $options ) {
    $form = "" . _MB_WFB_DISP . "&nbsp;";
    $form .= "<input type='hidden' name='options[]' value='";
    if ( $options[0] == "date" ) {
        $form .= "date'";
    } else {
        $form .= "hits'";
    } 
    $form .= " />";
    $form .= "<input type='text' name='options[]' value='" . $options[1] . "' />&nbsp;" . _MB_WFB_FILES . "";
    $form .= "&nbsp;<br />" . _MB_WFB_CHARS . "&nbsp;<input type='text' name='options[]' value='" . $options[2] . "' />&nbsp;" . _MB_WFB_LENGTH . "";
    return $form;
} 

?>
