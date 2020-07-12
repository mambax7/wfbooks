<?php
/**
 * $Id: index.php v 1.00 03 july 2004 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

include 'header.php';

$xoopsOption['template_main'] = 'wfbooks_index.html';
include XOOPS_ROOT_PATH . '/header.php';

global $xoopsModuleConfig;
$mytree = new XoopsTree( $xoopsDB -> prefix( 'wfbooks_cat' ), 'cid', 'pid' );

// Begin Main page Heading etc
$sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_indexpage' );
$head_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

$catarray['imageheader'] = wfl_imageheader( $head_arr['indeximage'], $head_arr['indexheading'] );
$catarray['indexheading'] = $wfmyts -> displayTarea( $head_arr['indexheading'] );
$catarray['indexheaderalign'] = $wfmyts -> htmlSpecialCharsStrip( $head_arr['indexheaderalign'] );
$catarray['indexfooteralign'] = $wfmyts -> htmlSpecialCharsStrip( $head_arr['indexfooteralign'] );

$html = ( $head_arr['nohtml'] ) ? 0 : 1;
$smiley = ( $head_arr['nosmiley'] ) ? 0 : 1;
$xcodes = ( $head_arr['noxcodes'] ) ? 0 : 1;
$images = ( $head_arr['noimages'] ) ? 0 : 1;
$breaks = ( $head_arr['nobreak'] ) ? 1 : 0;

$catarray['indexheader'] = $wfmyts -> displayTarea( $head_arr['indexheader'], $html, $smiley, $xcodes, $images, $breaks );
$catarray['indexfooter'] = $wfmyts -> displayTarea( $head_arr['indexfooter'], $html, $smiley, $xcodes, $images, $breaks );
$catarray['letters'] = wfl_letters();
$catarray['toolbar'] = wfl_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );

// End main page Headers
$count = 1;
$chcount = 0;
$countin = 0;

// Begin Main page linkload info
$listings = wfl_getTotalItems();

$total_cat = wfl_totalcategory();  // get total amount of categories

$catsort = $xoopsModuleConfig['sortcats'];
$sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_cat' ) . " WHERE pid = 0 ORDER BY " . $catsort;
$result = $xoopsDB -> query( $sql );
while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
    $countin++;
    $subtotallinkload = 0;
    $totallinkload = wfl_getTotalItems( $myrow['cid'], 1 );

    $indicator = wfl_isnewimage( $totallinkload['published'] );
    if ( checkgroups( $myrow['cid'] ) ) {
        $title = $wfmyts -> htmlSpecialCharsStrip( $myrow['title'] );

        $arr = array();
        $arr = $mytree -> getFirstChild( $myrow['cid'], $catsort );

        //$space = $chcount = 0; // LVDH GEDEACTIVEERD IVM bug subcat vervangen met onderstaande regels
        $space = 1; //LVDH ingevoegd
        $chcount = 1; //LVDH ingevoegd
        $subcategories = "";
        foreach( $arr as $ele ) {
            if ( true == checkgroups( $ele['cid'] ) ) {
                if ( $xoopsModuleConfig['subcats'] == 1 ) {
                    $chtitle = $wfmyts -> htmlSpecialCharsStrip( $ele['title'] );
                    if ( $chcount > 8 ) { // LVDH aangepast van 5 naar 8
                        $subcategories .= "...";
                        break;
                    } 
                    if ( $space > 0 ) {
                      $subcategories .= "<a href='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/viewcat.php?cid=" . $ele['cid'] . "'>" . $chtitle . "</a><br />";
                    }
                    $space++;
                    $chcount++;
                } 
            } 
        } 

        // This code is copyright WF-Projects
        // Using this code without our permission or removing this code voids the license agreement
        $_image = ( $myrow['imgurl'] ) ? urldecode( $myrow['imgurl'] ) : "";
		if ( $_image != "" && $xoopsModuleConfig['usethumbs'] ) {
                  $_thumb_image = new wfThumbsNails( $_image, $xoopsModuleConfig['catimage'], 'thumbs' );
                  if ( $_thumb_image ) { 
                    $_thumb_image -> setUseThumbs( 1 );
                    $_thumb_image -> setImageType( 'gd2' );
                    $_image = $_thumb_image -> do_thumb( $xoopsModuleConfig['imagequality'],
                                                         $xoopsModuleConfig['updatethumbs'],
                                                         $xoopsModuleConfig['keepaspect']);
                    }
                 }
	if ( empty( $_image ) || $_image == '' ) {
            $imgurl = $indicator['image'];
        } else {
            $imgurl = "{$xoopsModuleConfig['catimage']}/$_image";
        }
        // End

        $xoopsTpl -> append( 'categories', array( 'image' => XOOPS_URL . "/$imgurl",
                'id' => $myrow['cid'],
                'title' => $title,
                'subcategories' => $subcategories,
                'totallinks' => $totallinkload['count'],
                'count' => $count,
                'alttext' => $myrow['description'] )
            );
        $count++;
    } 
} 
switch ( $total_cat ) {
    case "1":
        $lang_thereare = _MD_WFB_THEREIS;
        break;
    default:
        $lang_thereare = _MD_WFB_THEREARE;
        break;
} 
$xoopsTpl -> assign( 'lang_thereare', sprintf( $lang_thereare, $total_cat, $listings['count'] ) );
$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );

// Screenshots display
if ( isset( $xoopsModuleConfig['screenshot'] ) && $xoopsModuleConfig['screenshot'] == 1 ) {
    $xoopsTpl -> assign( 'shots_dir', $xoopsModuleConfig['screenshots'] );
    $xoopsTpl -> assign( 'shotwidth', $xoopsModuleConfig['shotwidth'] );
    $xoopsTpl -> assign( 'shotheight', $xoopsModuleConfig['shotheight'] );
    $xoopsTpl -> assign( 'show_screenshot', true );
} 
include XOOPS_ROOT_PATH . '/footer.php';

?>
