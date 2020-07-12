<?php
/**
 * $Id: search.inc.php,v 1.00 2003/03/25 11:08:20 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

function controleerSearchgroups( $cid = 0, $permType = 'WFBookCatPerm', $redirect = false )
{
    global $xoopsUser;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );

    $module_handler = &xoops_gethandler( 'module' );
    $module = &$module_handler -> getByDirname( 'wfbooks' );

    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $module -> getVar( 'mid' ) ) )
    {
        if ( $redirect == false )
        {
            return false;
        } 
        else
        {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    unset( $module );
    return true;
} 

function wfbooks_search( $queryarray, $andor, $limit, $offset, $userid )
{
    global $xoopsDB, $xoopsUser;

    $sql = "SELECT cid, pid FROM " . $xoopsDB -> prefix( 'wfbooks_cat' );
    $result = $xoopsDB -> query( $sql );
    while ( $_search_group_check = $xoopsDB -> fetchArray( $result ) )
    {
        $_search_check_array[$_search_group_check['cid']] = $_search_group_check;
    } 

    $sql = "SELECT lid, cid, title, submitter, published, schrijver, isbn, description FROM " . $xoopsDB -> prefix( 'wfbooks_links' ); //LVDH invoeging schrijver en isbn
    $sql .= " WHERE published > 0 AND published <= " . time()
     . " AND ( expired = 0 OR expired > " . time() . ") AND offline = 0 AND cid > 0";

    if ( $userid != 0 )
    {
        $sql .= " AND submitter=" . $userid . " ";
    } 

    // because count() returns 1 even if a supplied variable
    // is not an array, we must check if $querryarray is really an array
    if ( is_array( $queryarray ) && $count = count( $queryarray ) )
    {
        $sql .= " AND ((title LIKE LOWER('%$queryarray[0]%') OR LOWER(description) LIKE LOWER('%$queryarray[0]%') OR LOWER(schrijver) LIKE LOWER('%$queryarray[0]%') OR LOWER(isbn) LIKE LOWER('%$queryarray[0]%') )";  //LVDH invoeging schrijver en isbn
        for( $i = 1;$i < $count;$i++ )
        {
            $sql .= " $andor ";
            $sql .= "(title LIKE LOWER('%$queryarray[$i]%') OR LOWER(description) LIKE LOWER('%$queryarray[$i]%') OR LOWER(schrijver) LIKE LOWER('%$queryarray[$i]%') OR LOWER(isbn) LIKE LOWER('%$queryarray[$i]%'))"; //LVDH Invoeging schrijver en isbn
        } 
        $sql .= ") ";
    } 
    $sql .= "ORDER BY date DESC";
    $result = $xoopsDB -> query( $sql, $limit, $offset );
    $ret = array();
    $i = 0;

    while ( $myrow = $xoopsDB -> fetchArray( $result ) )
    {
        if ( false == controleerSearchgroups( $myrow['cid'] ) )
        {
            continue;
        } 
        $ret[$i]['image'] = "images/size2.gif";
        $ret[$i]['link'] = "singlelink.php?cid=" . $myrow['cid'] . "&amp;lid=" . $myrow['lid'];
        $ret[$i]['title'] = $myrow['title'];
        $ret[$i]['time'] = $myrow['published'];
        $ret[$i]['schrijver'] = $myrow['schrijver']; //LVDH ingevoegd
		$ret[$i]['isbn'] = $myrow['isbn']; //LVDH ingevoegd
        $ret[$i]['uid'] = $myrow['submitter'];
        $i++;
    } 
    unset( $_search_check_array );
    return $ret;
} 

?>
