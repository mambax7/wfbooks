<?php
/**
 * $Id: singlelink.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

include 'header.php';

$lid = wfl_cleanRequestVars( $_REQUEST, 'lid', 0 );
$cid = wfl_cleanRequestVars( $_REQUEST, 'cid', 0 );
$lid = intval($lid);
$cid = intval($cid);

$sql2 = "SELECT count(*) FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . " a LEFT JOIN "
 . $xoopsDB -> prefix( 'wfbooks_altcat' ) . " b "
 . " ON b.lid = a.lid"
 . " WHERE a.published > 0 AND a.published <= " . time()
 . " AND (a.expired = 0 OR a.expired > " . time() . ") AND a.offline = 0"
 . " AND (b.cid=a.cid OR (a.cid=" . intval($cid) . " OR b.cid=" . intval($cid) . "))";
list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql2 ) );

if ( false == checkgroups( $cid = 0 ) && $count == 0  ) {
    redirect_header( "index.php", 1, _MD_WFB_MUSTREGFIRST );
    exit();
} 

$sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . " WHERE lid=" . intval($lid) . "
		AND (published > 0 AND published <= " . time() . ")
		AND (expired = 0 OR expired > " . time() . ")
		AND offline = 0 
		AND cid > 0
";
$result = $xoopsDB -> query( $sql );
$link_arr = $xoopsDB -> fetchArray( $result );

if ( !is_array( $link_arr ) ) {
    redirect_header( "index.php", 1, _MD_WFB_NOLINKLOAD );
    exit();
} 

$xoopsOption['template_main'] = 'wfbooks_singlelink.html';

include XOOPS_ROOT_PATH . '/header.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/sbookmarks.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/include/addressbooks.php'; //LVDH aangepast

$link['imageheader'] = wfl_imageheader();
$link['id'] = $link_arr['lid'];
$link['cid'] = $link_arr['cid'];

$link['sbmarks'] = wfbooks_sbmarks($link_arr['lid']);
$uitgever = $link_arr['uitgever'];
$price = $link_arr['price'];
$schrijver = $link_arr['schrijver'];
$genre = $link_arr['genre'];
$blz = $link_arr['blz'];
$isbn = $link_arr['isbn'];
$jaargang = $link_arr['jaargang'];
$country = wfl_countryname( $link_arr['country'] );

if ( $schrijver == '' || $uitgever == '' ) { 
  $link['addryn'] = 0;
} else {
  $link['addryn'] = 1;
  $address = wfl_address( $schrijver, $uitgever, $genre, $blz, $country );
  $link['address'] = '<b>' . _MD_WFB_ADDRESS . '</b><br />' . wfl_address( $country ) .'<b>' . _MD_WFB_SCHRIJVER . '</b>' . $schrijver . '<br /><b>' . _MD_WFB_UITGEVER . '</b>' . $uitgever . '<br /><b>' . _MD_WFB_ISBN . '</b>' . $isbn . '<br /><b>' . _MD_WFB_BLZ . '</b>' . $blz . '<br /><b>' . _MD_WFB_JAARGANG . '</b>' . $jaargang . '<br /><b>' . _MD_WFB_PRICE . '</b>' .  $price . '<br /><br /><b>' . _MD_WFB_GENRE . '</b>' . $genre;
  }

//$googlemap = $link_arr['googlemap'];
$partnerlink = $link_arr['partnerlink'];
$scripties = $link_arr['scripties'];
//if ( $link_arr['googlemap'] == true) {
//  $link['googlemap'] = '<a href="' . $googlemap . '" target="_blank"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/google_map.png" alt="' . _MD_WFB_GETMAP . '" title="' . _MD_WFB_GETMAP . '" align="absmiddle"/></a>&nbsp;';
//}
if ( $link_arr['partnerlink'] == true) {
  $link['partnerlink'] = '<a href="' . $partnerlink . '" target="_blank"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/partnerlink.png" alt="' . _MD_WFB_GETPARTNER . '" title="' . _MD_WFB_GETPARTNER . '" align="absmiddle"/></a>&nbsp;';
}
if ( $link_arr['scripties'] == true) {
  $link['scripties'] = '<a href="' . $scripties . '" target="_blank"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/scripties.png" alt="' . _MD_WFB_GETSCRIPTIE . '" title="' . _MD_WFB_GETSCRIPTIE . '" align="absmiddle"/></a>';
}

$mytree = new XoopsTree( $xoopsDB -> prefix( 'wfbooks_cat' ), 'cid', 'pid' );
$pathstring = "<a href='index.php'>" . _MD_WFB_MAIN . "</a>&nbsp;:&nbsp;";
$pathstring .= $mytree -> getNicePathFromId( $link['cid'], "title", "viewcat.php?op=" );
$link['path'] = $pathstring;

// Start of meta tags
global $xoopsTpl, $xoTheme;

$maxWords=100;
$words = array();
$words = explode(" ", wfl_html2text($link_arr['description']));
$newWords = array();
$i = 0;

while ($i < $maxWords-1 && $i < count($words)) {
if (isset($words[$i])) {
  $newWords[] = trim($words[$i]);
  }
$i++;
}
$link_meta_description = implode(' ', $newWords);

	if (is_object($xoTheme)) {
		$xoTheme->addMeta( 'meta', 'keywords', $link_arr['keywords']);
		$xoTheme->addMeta( 'meta', 'title', $link_arr['title']);
		$xoTheme -> addMeta( 'meta', 'description', $link_meta_description );
	} else {
		$xoopsTpl->assign('xoops_meta_keywords', $link_arr['keywords']);
		$xoopsTpl -> assign( 'xoops_meta_description', $link_meta_description );
	}
	$xoopsTpl->assign('xoops_pagetitle', $link_arr['title']);
// End of meta tags

$moderate = 0;
$res_type = 1;
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/include/linkloadinfo.php';

$xoopsTpl -> assign( 'show_screenshot', false );
if ( isset( $xoopsModuleConfig['screenshot'] ) && $xoopsModuleConfig['screenshot'] == 1 ) {
    $xoopsTpl -> assign( 'shots_dir', $xoopsModuleConfig['screenshots'] );
    $xoopsTpl -> assign( 'shotwidth', $xoopsModuleConfig['shotwidth'] );
    $xoopsTpl -> assign( 'shotheight', $xoopsModuleConfig['shotheight'] );
    $xoopsTpl -> assign( 'show_screenshot', true );
} 

// Increase hit-counter LVDH toegevoegd tellen singlelink kliks
    $sql = "UPDATE " . $xoopsDB -> prefix( 'wfbooks_links' ) . " SET hits=hits+1 WHERE lid=" . intval($lid); 
    $result = $xoopsDB -> queryF( $sql );
	//$link['hits'] = $link_arr['hits']+1;
	$link['hits'] = sprintf( _MD_WFB_LINKHITS, intval( $link_arr['hits'] ) ) ;

// Show other author links
$sql = "SELECT lid, cid, title, published FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . "
	WHERE submitter=" . $link_arr['submitter'] . "
	AND published > 0 AND published <= " . time() . " AND (expired = 0 OR expired > " . time() . ")
	AND offline = 0 ORDER by published DESC";
$result = $xoopsDB -> query( $sql, 10, 0 );

while ( $arr = $xoopsDB -> fetchArray( $result ) ) {
    $linkuid['title'] = $wfmyts -> htmlSpecialCharsStrip( $arr['title'] );
    $linkuid['lid'] = $arr['lid'];
    $linkuid['cid'] = $arr['cid'];
    $linkuid['published'] = formatTimestamp( $arr['published'], $xoopsModuleConfig['dateformat'] );
    $xoopsTpl -> append( 'link_uid', $linkuid );
}
if ( isset( $xoopsModuleConfig['copyright'] ) && $xoopsModuleConfig['copyright'] == 1 ) {
    $xoopsTpl -> assign( 'lang_copyright', "" . $link['title'] . " © " . _MD_WFB_COPYRIGHT . " " . date( "Y" ) . " " . XOOPS_URL );
}
if ( isset( $xoopsModuleConfig['otherlinks'] ) && $xoopsModuleConfig['otherlinks'] == 1 ) {
    $xoopsTpl -> assign( 'other_links', "" . "<b>" ._MD_WFB_OTHERBYUID . "</b>"  . $link['submitter'] . "<br />" );
}
$link['otherlinx'] = $xoopsModuleConfig['otherlinks'];
$link['showsbookmarx'] = $xoopsModuleConfig['showsbookmarks'];
$link['showpagerank'] = $xoopsModuleConfig['showpagerank'];
$xoopsTpl -> assign( 'link', $link );

$xoopsTpl -> assign( 'back' , '<a href="javascript:history.go(-1)"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/images/icon/back.png" /></a>' );
$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );

include XOOPS_ROOT_PATH . '/include/comment_view.php';
include XOOPS_ROOT_PATH . '/footer.php';

?>