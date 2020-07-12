<?php
/**
 * $Id: submit.php v 1.0.4 21 June 2005 John N Exp $
 * Module: WF-Books
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

include 'header.php';

include XOOPS_ROOT_PATH . '/header.php';
include XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

$mytree = new XoopsTree( $xoopsDB -> prefix( 'wfbooks_cat' ), 'cid', 'pid' );
global $wfmyts, $xoopsModuleConfig;

$cid = wfl_cleanRequestVars( $_REQUEST, 'cid', 0 );
$lid = wfl_cleanRequestVars( $_REQUEST, 'lid', 0 );
$cid = intval($cid);
$lid = intval($lid);

if ( false == checkgroups( $cid, 'WFBookSubPerm' ) ) {
    redirect_header( "index.php", 1, _MD_WFB_NOPERMISSIONTOPOST );
    exit();
} 

if ( true == checkgroups( $cid, 'WFBookSubPerm' ) ) {
    if ( wfl_cleanRequestVars( $_REQUEST, 'submit', 0 ) ) {
        if ( false == checkgroups( $cid, 'WFBookSubPerm' ) ) {
            redirect_header( "index.php", 1, _MD_WFB_NOPERMISSIONTOPOST );
            exit();
        } 

        $submitter = ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) ? $xoopsUser -> getVar( 'uid' ) : 0;
        $forumid = wfl_cleanRequestVars( $_REQUEST, 'forumid', 0 );
        $offline = wfl_cleanRequestVars( $_REQUEST, 'offline', 0 );
//        $urlrating = wfl_cleanRequestVars( $_REQUEST, 'urlrating', 6 );
        $notifypub = wfl_cleanRequestVars( $_REQUEST, 'notifypub', 0 );
        $approve = wfl_cleanRequestVars( $_REQUEST, 'approve', 0 );
        $url = $wfmyts -> addslashes( ltrim($_POST["url"]) );
        $title = $wfmyts -> addslashes( ltrim( $_REQUEST["title"] ) );
        $descriptionb = $wfmyts -> addslashes( ltrim( $_REQUEST["descriptionb"] ) );
        $keywords = $wfmyts -> addslashes( trim(substr($_POST["keywords"], 0, $xoopsModuleConfig['keywordlength']) ) );
        $item_tag = $wfmyts -> addslashes( ltrim( $_REQUEST["item_tag"] ) );
        //$googlemap = ( $_POST["googlemap"] != "http://maps.google.com" ) ? $wfmyts -> addslashes( $_POST["googlemap"] ) : '';
        //$partnerlink = ( $_POST["partnerlink"] != "http://maps.yahoo.com" ) ? $wfmyts -> addslashes( $_POST["partnerlink"] ) : '';
        //$scripties = ( $_POST["scripties"] != "http://maps.live.com" ) ? $wfmyts -> addslashes( $_POST["scripties"] ) : '';
        $schrijver = $wfmyts -> addslashes( ltrim( $_REQUEST["schrijver"] ) );
		$uitgever = $wfmyts -> addslashes( ltrim( $_REQUEST["uitgever"] ) );
		$isbn = $wfmyts -> addslashes( ltrim( $_REQUEST["isbn"] ) );
        $jaargang = $wfmyts -> addslashes( ltrim( $_REQUEST["jaargang"] ) );
		$blz = $wfmyts -> addslashes( ltrim( $_REQUEST["blz"] ) );
        $price = $wfmyts -> addslashes( ltrim( $_REQUEST["price"] ) );        
        $genre = $wfmyts -> addslashes( ltrim( $_REQUEST["genre"] ) );       
        $country = $wfmyts -> addslashes( ltrim( $_REQUEST["country"] ) );

        $date = time();
        $publishdate = 0;
        $ipaddress = $_SERVER['REMOTE_ADDR'];

        if ( $lid == 0 ) {
            $status = 0;
            $publishdate = 0;
            $message = _MD_WFB_THANKSFORINFO;
            if ( true == checkgroups( $cid, 'WFBookAutoApp' ) ) {
                $publishdate = time();
                $status = 1;
                $message = _MD_WFB_ISAPPROVED;
            } 
            $sql = "INSERT INTO " . $xoopsDB -> prefix( 'wfbooks_links' ) . "	(lid, cid, title, url, submitter, status, date, hits, rating, votes, comments, forumid, published, expired, offline, description, ipaddress, notifypub, country, keywords, item_tag, googlemap, partnerlink, scripties, uitgever, price, schrijver, genre, blz, isbn, jaargang ) ";
            $sql .= " VALUES 	('', $cid, '$title', '$url', '$submitter', '$status', '$date', 0, 0, 0, 0, '$forumid', '$publishdate', 0, '$offline', '$descriptionb', '$ipaddress', '$notifypub', '$country', '$keywords', '$item_tag', '$googlemap', '$partnerlink', '$scripties', '$uitgever', '$price', '$schrijver', '$genre', '$blz', '$isbn', '$jaargang' )";
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                $_error = $xoopsDB -> error() . " : " . $xoopsDB -> errno();
                XoopsErrorHandler_HandleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
            } 
//            $newid = $xoopsDB -> getInsertId();
            $newid = mysql_insert_id();
        
// Add item_tag to Tag-module
            if ( $lid == 0) {
                 $tagupdate = wfl_tagupdate($newid, $item_tag);
            } else {
                 $tagupdate = wfl_tagupdate($lid, $item_tag);
            }

// Notify of new link (anywhere) and new link in category
            $notification_handler = &xoops_gethandler( 'notification' );

            $tags = array();
            $tags['LINK_NAME'] = $title;
            $tags['LINK_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . intval($cid) . '&amp;lid=' . intval($newid);
            
            $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'wfbooks_cat' ) . " WHERE cid=" . intval($cid);
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $result );

            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . intval($cid);
            if ( true == checkgroups( $cid, 'WFBookAutoApp' ) ) {
                $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
                $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
                redirect_header( 'index.php', 2, _MD_WFB_ISAPPROVED );
            } else {
                $tags['WAITINGFILES_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/newlinks.php';
                $notification_handler -> triggerEvent( 'global', 0, 'link_submit', $tags );
                $notification_handler -> triggerEvent( 'category', $cid, 'link_submit', $tags );
                if ( $notifypub ) {
                    include_once XOOPS_ROOT_PATH . '/include/notification_constants.php';
                    $notification_handler -> subscribe( 'link', $newid, 'approve', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE );
                } 
                redirect_header( 'index.php', 2, _MD_WFB_THANKSFORINFO );
            } 
        } else {
            if ( true == checkgroups( $cid, 'WFBookAutoApp' ) || $approve == 1 ) {
                $updated = time();
                $sql = "UPDATE " . $xoopsDB -> prefix( 'wfbooks_links' ) . " SET cid=$cid, title='$title', url='$url', updated='$updated', offline='$offline', description='$descriptionb', ipaddress='$ipaddress', notifypub='$notifypub', urlrating='$urlrating', country='$country', keywords='$keywords', item_tag='$item_tag', googlemap='$googlemap', partnerlink='$partnerlink', scripties='$scripties', uitgever='$uitgever', price='$price', schrijver='$schrijver', genre='$genre',  blz='$blz', isbn='$isbn', jaargang='$jaargang' WHERE lid =" . $lid;
                if ( !$result = $xoopsDB -> query( $sql ) ) {
                    $_error = $xoopsDB -> error() . " : " . $xoopsDB -> errno();
                    XoopsErrorHandler_HandleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
                } 

                $notification_handler = &xoops_gethandler( 'notification' );
                $tags = array();
                $tags['LINK_NAME'] = $title;
                $tags['LINK_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid);
                $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'wfbooks_cat' ) . " WHERE cid=" . $cid;
                $result = $xoopsDB -> query( $sql );
                $row = $xoopsDB -> fetchArray( $result );
                $tags['CATEGORY_NAME'] = $row['title'];
                $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . intval($lid);

                $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
                $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
                $_message = _MD_WFB_ISAPPROVED;
            } else {
                $modifysubmitter = $xoopsUser -> uid();
                $requestid = $modifysubmitter;
                $requestdate = time();
                $updated = wfl_cleanRequestVars( $_REQUEST, 'up_dated', time() );
                $sql = "INSERT INTO " . $xoopsDB -> prefix( 'wfbooks_mod' ) . " (requestid, lid, cid, title, url, forumid, description, modifysubmitter, requestdate)";
                $sql .= " VALUES ('', $lid, $cid, '$title', '$url', '$forumid', '$descriptionb', '$urlrating' '$modifysubmitter', '$requestdate')";
                if ( !$result = $xoopsDB -> query( $sql ) ) {
                    $_error = $xoopsDB -> error() . " : " . $xoopsDB -> errno();
                    XoopsErrorHandler_HandleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
                } 

                $tags = array();
                $tags['MODIFYREPORTS_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=listModReq';
                $notification_handler = &xoops_gethandler( 'notification' );
                $notification_handler -> triggerEvent( 'global', 0, 'link_modify', $tags );

                $tags['WAITINGFILES_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=listNewlinks';
                $notification_handler -> triggerEvent( 'global', 0, 'link_submit', $tags );
                $notification_handler -> triggerEvent( 'category', $cid, 'link_submit', $tags );
                if ( $notifypub )
                {
                    include_once XOOPS_ROOT_PATH . '/include/notification_constants.php';
                    $notification_handler -> subscribe( 'link', $newid, 'approve', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE );
                } 
                $_message = _MD_WFB_THANKSFORINFO;
            } 
            redirect_header( "index.php", 2, $_message );
        } 
    } else {
        global $xoopsModuleConfig;

        $approve = wfl_cleanRequestVars( $_REQUEST, 'approve', 0 );

//Show disclaimer
        if ( $xoopsModuleConfig['showdisclaimer'] && !isset( $_GET['agree'] ) && $approve == 0 ) {
            echo "<br /><div style='text-align: center;'>" . wfl_imageheader() . "</div><br />\n";
            echo "<h4>" . _MD_WFB_DISCLAIMERAGREEMENT . "</h4>\n";
            echo "<div>" . $wfmyts -> displayTarea( $xoopsModuleConfig['disclaimer'], 1, 1, 1, 1, 1 ) . "</div>\n";
            echo "<form action='submit.php' method='post'>\n";
            echo "<div style='text-align: center;'>" . _MD_WFB_DOYOUAGREE . "</b><br /><br />\n";
            echo "<input type='button' onclick='location=\"submit.php?agree=1\"' class='formButton' value='" . _MD_WFB_AGREE . "' alt='" . _MD_WFB_AGREE . "' />\n";
            echo "&nbsp;\n";
            echo "<input type='button' onclick='location=\"index.php\"' class='formButton' value='" . _CANCEL . "' alt='" . _CANCEL . "' />\n";
            echo "</div></form>\n";
            include XOOPS_ROOT_PATH . '/footer.php';
            exit();
        } 
        echo "<br /><div style='text-align: center;'>" . wfl_imageheader() . "</div><br />\n";
        echo "<div>" . _MD_WFB_SUB_SNEWMNAMEDESC . "</div>\n<br />\n";

        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . " WHERE lid=" . intval( $lid );
        $link_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

        $lid = $link_array['lid'] ? $link_array['lid'] : 0;
        $cid = $link_array['cid'] ? $link_array['cid'] : 0;
        $title = $link_array['title'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['title'] ) : '';
        $url = $link_array['url'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['url'] ) : 'http://';
        $publisher = $link_array['publisher'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['publisher'] ) : '';
        $screenshot = $link_array['screenshot'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['screenshot'] ) : '';
        $descriptionb = $link_array['description'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['description'] ) : '';
        $published = $link_array['published'] ? $link_array['published'] : 0;
        $expired = $link_array['expired'] ? $link_array['expired'] : 0;
        $updated = $link_array['updated'] ? $link_array['updated'] : 0;
        $offline = $link_array['offline'] ? $link_array['offline'] : 0;
        $forumid = $link_array['forumid'] ? $link_array['forumid'] : 0;
        $ipaddress = $link_array['ipaddress'] ? $link_array['ipaddress'] : 0;
        $notifypub = $link_array['notifypub'] ? $link_array['notifypub'] : 0;
        $urlrating = $link_array['urlrating'] ? $link_array['urlrating'] : 1;
        $country = $link_array['country'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['country'] ) : '-';
        $keywords = $link_array['keywords'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['keywords'] ) : '';
        $item_tag = $link_array['item_tag'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['item_tag'] ) : '';
        //$googlemap = $link_array['googlemap'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['googlemap'] ) : 'http://maps.google.com';
        //$partnerlink = $link_array['partnerlink'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['partnerlink'] ) : 'http://maps.yahoo.com';
        //$scripties = $link_array['scripties'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['scripties'] ) : 'http://maps.live.com';
        $schrijver = $link_array['schrijver'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['schrijver'] ) : '';
        $uitgever = $link_array['uitgever'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['uitgever'] ) : '';
		$isbn = $link_array['isbn'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['isbn'] ) : '';
        $jaargang = $link_array['jaargang'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['jaargang'] ) : '';
		$blz = $link_array['blz'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['blz'] ) : '';
        $price = $link_array['price'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['price'] ) : '';        
        $genre = $link_array['genre'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['genre'] ) : '';
        
        

     	$sform = new XoopsThemeForm( _MD_WFB_SUBMITCATHEAD, "storyform", xoops_getenv( 'PHP_SELF' ) );
        $sform -> setExtra( 'enctype="multipart/form-data"' );
// Title form
        $sform -> addElement( new XoopsFormText( _MD_WFB_FILETITLE, 'title', 70, 255, $title ), true );
// Link url form
        $url_text = new XoopsFormText('', 'url', 70, 255, $url);
        $url_tray = new XoopsFormElementTray(_MD_WFB_DLURL, '');
        $url_tray->addElement( $url_text , true ) ;
        $url_tray->addElement( new XoopsFormLabel( "&nbsp;<img src='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/world.png' onClick=\"window.open(document.storyform.url.value,'','');return(false);\" alt='Check URL' />" ));
        $sform->addElement( $url_tray );
// Category selection menu
        $mytree = new XoopsTree( $xoopsDB -> prefix( 'wfbooks_cat' ), 'cid', 'pid' );
        $submitcats = array();
        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_cat' ) . " ORDER BY title";
        $result = $xoopsDB -> query( $sql );
        while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
            if ( true == checkgroups( $myrow['cid'], 'WFBookSubPerm' ) ) {
                $submitcats[$myrow['cid']] = $myrow['title'];
            }
        }
        ob_start();
    	$mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
    	$sform -> addElement( new XoopsFormLabel( _MD_WFB_CATEGORYC, ob_get_contents() ) );
        ob_end_clean();
// Link description form
    $editor=wfl_getWysiwygForm( _MD_WFB_DESCRIPTIONC, 'descriptionb', $descriptionb, 15, 60, '');
    $sform->addElement($editor,false);
// Keywords form
    $sform -> addElement( new XoopsFormTextArea( _MD_WFB_KEYWORDS, 'keywords', $keywords, 7, 60), false);
    $sform -> insertBreak( sprintf( _MD_WFB_KEYWORDS_NOTE ), "even" );
        
if ($xoopsModuleConfig['usercantag'] == 1) {
// Insert tags if Tag-module is installed
    if (wfl_tag_module_included()) {
    include_once XOOPS_ROOT_PATH . "/modules/tag/include/formtag.php";
    $text_tags = new XoopsFormTag("item_tag", 70, 255, $link_array['item_tag'], 0);
    $sform -> addElement( $text_tags );
    }
}
// Google Maps
   // $googlemap_text = new XoopsFormText('', 'googlemap', 70, 1024, $googlemap);
   // $googlemap_tray = new XoopsFormElementTray(_MD_WFB_LINK_GOOGLEMAP, '');
   // $googlemap_tray -> addElement( $googlemap_text , false ) ;
  //  $googlemap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/google_map.png' onClick=\"window.open(document.storyform.googlemap.value,'','');return(false);\" alt='"._MD_WFB_LINK_CHECKMAP."' />" ));
 //   $sform -> addElement( $googlemap_tray );
// Yahoo Maps
 //   $partnerlink_text = new XoopsFormText('', 'partnerlink', 70, 1024, $partnerlink);
 //   $partnerlink_tray = new XoopsFormElementTray(_MD_WFB_LINK_YAHOOMAP, '');
 //   $partnerlink_tray -> addElement( $partnerlink_text , false ) ;
//    $partnerlink_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/yahoo_map.png' onClick=\"window.open(document.storyform.partnerlink.value,'','');return(false);\" alt='"._MD_WFB_LINK_CHECKMAP."' />" ));
//    $sform -> addElement( $partnerlink_tray );
// MS Live Maps
//    $scripties_text = new XoopsFormText('', 'scripties', 70, 1024, $scripties);
//    $scripties_tray = new XoopsFormElementTray(_MD_WFB_LINK_MSLIVEMAP, '');
//    $scripties_tray -> addElement( $scripties_text , false ) ;
//    $scripties_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/mslive_map.png' onClick=\"window.open(document.storyform.scripties.value,'','');return(false);\" alt='"._MD_WFB_LINK_CHECKMAP."' />" ));
//    $sform -> addElement( $scripties_tray );
// Address forms
     $schrijver = new XoopsFormText( _MD_WFB_SCHRIJVER, 'schrijver', 70, 255, $schrijver );
    $sform -> addElement( $schrijver, false );
    $uitgever = new XoopsFormText( _MD_WFB_UITGEVER, 'uitgever', 70, 255, $uitgever );
    $sform -> addElement( $uitgever, false );
	$isbn = new XoopsFormText( _MD_WFB_ISBN, 'isbn', 20, 20, $isbn );
    $sform -> addElement( $isbn, false );
    $jaargang = new XoopsFormText( _MD_WFB_JAARGANG, 'jaargang', 20, 20, $jaargang );
    $sform -> addElement( $jaargang, false );
	$blz = new XoopsFormText( _MD_WFB_BLZ, 'blz', 12, 12, $blz );
    $sform -> addElement( $blz, false );
    $price = new XoopsFormText( _MD_WFB_PRICE, 'price', 70, 255, $price );
    $sform -> addElement( $price, false );   
    $genre = new XoopsFormText( _MD_WFB_GENRE, 'genre', 70, 255, $genre );
    $sform -> addElement( $genre, false );
    
    
// Country form
    $sform -> addElement( new XoopsFormSelectCountry( _MD_WFB_COUNTRY, 'country', $country ), false);

    $option_tray = new XoopsFormElementTray( _MD_WFB_OPTIONS, '<br />' );
        if ( !$approve ) {
            $notify_checkbox = new XoopsFormCheckBox( '', 'notifypub' );
            $notify_checkbox -> addOption( 1, _MD_WFB_NOTIFYAPPROVE );
            $option_tray -> addElement( $notify_checkbox );
        } else {
            $sform -> addElement( new XoopsFormHidden( 'notifypub', 0 ) );
        } 
        if ( true == checkgroups( $cid, 'WFBookAppPerm' ) && $lid > 0 ) {
            $approve_checkbox = new XoopsFormCheckBox( '', 'approve', $approve );
            $approve_checkbox -> addOption( 1, _MD_WFB_APPROVE );
            $option_tray -> addElement( $approve_checkbox );
        } else if ( true == checkgroups( $cid, 'WFBookAutoApp' ) ) {
            $sform -> addElement( new XoopsFormHidden( 'approve', 1 ) );
        } else {
            $sform -> addElement( new XoopsFormHidden( 'approve', 0 ) );
        } 
        $sform -> addElement( $option_tray );
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormButton( '', 'submit', _SUBMIT, 'submit' ) );
        $button_tray -> addElement( new XoopsFormHidden( 'lid', $lid ) );
        $sform -> addElement( $button_tray );
        $sform -> display();
        include XOOPS_ROOT_PATH . '/footer.php';
    } 
} else {
    redirect_header( 'index.php', 2, _MD_WFB_NOPERMISSIONTOPOST );
    exit();
} 

?>