<?php

include 'header.php';

// Begin Main page Heading etc
$cid = wfl_cleanRequestVars( $_REQUEST, 'cid', 0 );
$selectdate = wfl_cleanRequestVars( $_REQUEST, 'selectdate', '' );
$list = wfl_cleanRequestVars( $_REQUEST, 'list', '' );
$cid = intval($cid);
$catsort = $xoopsModuleConfig['sortcats'];
$mytree = new XoopsTree( $xoopsDB -> prefix( 'wfbooks_cat' ), 'cid', 'pid' );
$arr = $mytree -> getFirstChild( $cid, $catsort );

if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
    if ( false == checkgroups( $cid ) ) {
        redirect_header( "index.php", 1, _MD_WFB_MUSTREGFIRST );
        exit();
    } 
}
$xoopsOption['template_main'] = 'wfbooks_viewcat.html';
include XOOPS_ROOT_PATH . '/header.php';

global $xoopsModuleConfig;

$catarray['imageheader'] = wfl_imageheader();
$catarray['letters'] = wfl_letters();
$catarray['toolbar'] = wfl_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );

// Breadcrumb

$pathstring = '<a href="index.php">' . _MD_WFB_MAIN . '</a>&nbsp;>&nbsp;';
$pathstring .= $mytree -> getNicePathFromId( $cid, "title", "viewcat.php?op=" );
$xoopsTpl -> assign( 'category_path', $pathstring );
$xoopsTpl -> assign( 'category_id', $cid );

// Display Sub-categories for selected Category
if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
    $scount = 1;
    foreach( $arr as $ele ) {
        if ( checkgroups( $ele['cid'] ) == false ) {
            continue;
        } 
        $sub_arr = array();
        $sub_arr = $mytree -> getFirstChild( $ele['cid'], $catsort );
        $space = 0; //LVDH ori getal 0 vervangen met 1
        $chcount = 0;  //LVDH origetal 0 vervangen met 1
        $infercategories = "";
        foreach( $sub_arr as $sub_ele ) {
            // Subitem file count
            $hassubitems = wfl_getTotalItems( $sub_ele['cid'] );
            // Filter group permissions
            if ( true == checkgroups( $sub_ele['cid'] ) ) {
                // If subcategory count > 5 then finish adding subcats to $infercategories and end LVDH aangepast van 5 naar 8. Hij telt hoofdcat namelijk ook mee
                if ( $chcount > 8 ) { // 5
                    $infercategories .= "...";
                    break;
                }
                if ( $space > 0 ) $infercategories .= ", ";
                $infercategories .= "<a href='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/viewcat.php?cid=" . $sub_ele['cid'] . "'>" . $wfmyts -> htmlSpecialCharsStrip( $sub_ele['title'] ) . "</a> (" . $hassubitems['count'] . ")";
                $space++;
                $chcount++;
            }
        }
        $totallinks = wfl_getTotalItems( $ele['cid'] );
        $indicator = wfl_isnewimage( $totallinks['published'] );

// This code is copyright WF-Projects
// Using this code without our permission or removing this code voids the license agreement
        $_image = ( $ele['imgurl'] ) ? urldecode( $ele['imgurl'] ) : "";
		if ( $_image != "" && $xoopsModuleConfig['usethumbs'] ) {
                  $_thumb_image = new wfThumbsNails( $_image, $xoopsModuleConfig['catimage'], 'thumbs' );
                  if ( $_thumb_image ) {
                    $_thumb_image -> setUseThumbs( 1 );
                    $_thumb_image -> setImageType( 'gd2' );
                    $_image = $_thumb_image -> do_thumb( $xoopsModuleConfig['shotwidth'],
                    $xoopsModuleConfig['shotheight'],
                    $xoopsModuleConfig['imagequality'],
                    $xoopsModuleConfig['updatethumbs'],
                    $xoopsModuleConfig['keepaspect']
                    );
            }
        } 
		if ( empty( $_image ) || $_image == '' ) {
                  $imgurl = $indicator['image'];
                 } else {
                  $imgurl = "{$xoopsModuleConfig['catimage']}/$_image";
                 }
// End
        $xoopsTpl -> append( 'subcategories',
            array( 'title' => $wfmyts -> htmlSpecialCharsStrip( $ele['title'] ),
                'id' => $ele['cid'],
                'image' => XOOPS_URL . "/$imgurl",
                'infercategories' => $infercategories,
                'totallinks' => $totallinks['count'],
                'count' => $scount,
                'alttext' => $ele['description'] )
            );
        $scount++;
    }
}

// Show Description for Category listing
$sql = "SELECT title, description, nohtml, nosmiley, noxcodes, noimages, nobreak, imgurl FROM " . $xoopsDB -> prefix( 'wfbooks_cat' ) . " WHERE cid =" . intval( $cid );
$head_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
$html = ( $head_arr['nohtml'] ) ? 0 : 1;
$smiley = ( $head_arr['nosmiley'] ) ? 0 : 1;
$xcodes = ( $head_arr['noxcodes'] ) ? 0 : 1;
$images = ( $head_arr['noimages'] ) ? 0 : 1;
$breaks = ( $head_arr['nobreak'] ) ? 1 : 0;
$description = $wfmyts -> displayTarea( $head_arr['description'], $html, $smiley, $xcodes, $images, $breaks );
$xoopsTpl -> assign( 'description', $description );
$xoopsTpl -> assign( 'xoops_pagetitle', $head_arr['title'] );

// Extract linkload information from database
$xoopsTpl -> assign( 'show_categort_title', true );

$start = wfl_cleanRequestVars( $_REQUEST, 'start', 0 );
$orderby = ( isset( $_REQUEST['orderby'] ) && !empty( $_REQUEST['orderby'] ) ) ? wfl_convertorderbyin( $_REQUEST['orderby'] ) : wfl_convertorderbyin( $xoopsModuleConfig['linkxorder'] );

if ( $selectdate )
{
    $d = date( "j", $selectdate );
    $m = date( "m", $selectdate );
    $y = date( "Y", $selectdate );

    $stat_begin = mktime ( 0, 0, 0, $m, $d, $y );
    $stat_end = mktime ( 23, 59, 59, $m, $d, $y );

    $query = " WHERE published >= " . $stat_begin . " AND published <= " . $stat_end . "
		AND (expired = 0 OR expired > " . time() . ") 
		AND offline = 0
		AND cid > 0";

    $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_links' )
     . $query
     . " ORDER BY "
     . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'] , $start );

    $sql = "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'wfbooks_links' )
     . $query;
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql ) );

    $list_by = "selectdate=$selectdate"; // LVDH Bug opgeheven
    } elseif ( $list ) {
    $query = " WHERE title LIKE '$list%' AND (published > 0 AND published <= " . time() . ") AND (expired = 0 OR expired > " . time() . ") AND offline = 0 AND cid > 0";

    $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . $query . " ORDER BY " . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'] , $start );

    $sql = "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . $query;
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql ) );
    $list_by = "list=$list";
} else {
    $sql = "SELECT DISTINCT a.* FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . " a LEFT JOIN "
     . $xoopsDB -> prefix( 'wfbooks_altcat' ) . " b "
     . " ON b.lid = a.lid"
     . " WHERE a.published > 0 AND a.published <= " . time()
     . " AND (a.expired = 0 OR a.expired > " . time() . ") AND a.offline = 0"
     . " AND (b.cid=a.cid OR (a.cid=" . intval($cid) . " OR b.cid=" . intval($cid) . "))"
     . " ORDER BY "
     . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'] , $start );
    $xoopsTpl -> assign( 'show_categort_title', false );

    $sql2 = "SELECT count(*) FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . " a LEFT JOIN "
     . $xoopsDB -> prefix( 'wfbooks_altcat' ) . " b "
     . " ON b.lid = a.lid"
     . " WHERE a.published > 0 AND a.published <= " . time()
     . " AND (a.expired = 0 OR a.expired > " . time() . ") AND a.offline = 0"
     . " AND (b.cid=a.cid OR (a.cid=" . intval($cid) . " OR b.cid=" . intval($cid) . "))";
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql2 ) );
    $order = wfl_convertorderbyout($orderby);
    $list_by = "cid=$cid&orderby=$order";
}
$pagenav = new XoopsPageNav( $count, $xoopsModuleConfig['perpage'] , $start, 'start', $list_by );

// Show links
if ( $count > 0 ) {
    $moderate = 0;
    while ( $link_arr = $xoopsDB -> fetchArray( $result ) ) {
        $res_type = 0;
        require XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/linkloadinfo.php';
        $xoopsTpl -> append( 'link', $link );
    } 

// Show order box
    $xoopsTpl -> assign( 'show_links', false );
    if ( $count > 1 && $cid != 0 ) {
        $xoopsTpl -> assign( 'show_links', true );
        $orderbyTrans = wfl_convertorderbytrans( $orderby );
        $xoopsTpl -> assign( 'lang_cursortedby', sprintf( _MD_WFB_CURSORTBY, wfl_convertorderbytrans( $orderby ) ) );
        $orderby = wfl_convertorderbyout( $orderby );
    }

// Screenshots display
    $xoopsTpl -> assign( 'show_screenshot', false );
    if ( isset( $xoopsModuleConfig['screenshot'] ) && $xoopsModuleConfig['screenshot'] == 1 ) {
        $xoopsTpl -> assign( 'shots_dir', $xoopsModuleConfig['screenshots'] );
        $xoopsTpl -> assign( 'shotwidth', $xoopsModuleConfig['shotwidth'] );
        $xoopsTpl -> assign( 'shotheight', $xoopsModuleConfig['shotheight'] );
        $xoopsTpl -> assign( 'show_screenshot', true );
    } 

// Nav page render
    $page_nav = $pagenav -> renderNav();
    $istrue = ( isset( $page_nav ) && !empty( $page_nav ) ) ? true : false;
    $xoopsTpl -> assign( 'page_nav', $istrue );
    $xoopsTpl -> assign( 'pagenav', $page_nav );
    $xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
} 
unset( $link_arr );

include XOOPS_ROOT_PATH . '/footer.php';

?>