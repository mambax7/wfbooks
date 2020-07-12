<?php
/**
 * $Id: index.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

include 'admin_header.php';

$mytree = new XoopsTree( $xoopsDB -> prefix( 'wfbooks_cat' ), 'cid', 'pid' );

$op = wfl_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = wfl_cleanRequestVars( $_REQUEST, 'lid', 0 );

function edit( $lid = 0 )
{
    global $xoopsDB, $wfmyts, $mytree, $imagearray, $xoopsModuleConfig, $xoopsModule;

    $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'wfbooks_links' ) . ' WHERE lid=' . $lid;
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        return false;
    } 
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
    $directory = $xoopsModuleConfig['screenshots'];
    $country = $link_array['country'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['country'] ) : '-';
    $keywords = $link_array['keywords'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['keywords'] ) : '';
    $item_tag = $link_array['item_tag'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['item_tag'] ) : '';
    //$googlemap = $link_array['googlemap'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['googlemap'] ) : 'http://maps.google.com';
    //$partnerlink = $link_array['partnerlink'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['partnerlink'] ) : 'http://maps.yahoo.com';
    $partnerlink = $link_array['partnerlink'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['partnerlink'] ) : '';
    $scripties = $link_array['scripties'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['scripties'] ) : 'http://WWW.YOUR WEBSITE.COM/uploads/wfbooks/files/'; //ADJUST THIS URL
	$schrijver = $link_array['schrijver'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['schrijver'] ) : '';
    $uitgever = $link_array['uitgever'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['uitgever'] ) : '';
	$isbn = $link_array['isbn'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['isbn'] ) : '';
	$jaargang = $link_array['jaargang'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['jaargang'] ) : '';
	$blz = $link_array['blz'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['blz'] ) : '';
    $price = $link_array['price'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['price'] ) : '';
    $genre = $link_array['genre'] ? $wfmyts -> htmlSpecialCharsStrip( $link_array['genre'] ) : '';
    
    xoops_cp_header();
    wfl_adminmenu( _AM_WFB_MLINKS );

    $_vote_data = getVoteDetails( $lid );
    if ( $lid > 0 && $_vote_data['rate'] > 0 ) {
        $_vote_data = getVoteDetails( $lid );
        $text_info = "
			<table width='100%'>
			 <tr>
			  <td width='50%' valign='top'>
			   <div><b>" . _AM_WFB_VOTE_TOTALRATE . ": </b>" . intval( $_vote_data['rate'] ) . "</div>
			   <div><b>" . _AM_WFB_VOTE_USERAVG . ": </b>" . intval( round( $_vote_data['avg_rate'], 2 ) ) . "</div>
			   <div><b>" . _AM_WFB_VOTE_MAXRATE . ": </b>" . intval( $_vote_data['min_rate'] ) . "</div>
			   <div><b>" . _AM_WFB_VOTE_MINRATE . ": </b>" . intval( $_vote_data['max_rate'] ) . "</div>
			  </td>
			  <td>		 
			   <div><b>" . _AM_WFB_VOTE_MOSTVOTEDTITLE . ": </b>" . intval( $_vote_data['max_title'] ) . "</div>
		          <div><b>" . _AM_WFB_VOTE_LEASTVOTEDTITLE . ": </b>" . intval( $_vote_data['min_title'] ) . "</div>
			   <div><b>" . _AM_WFB_VOTE_REGISTERED . ": </b>" . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . "</div>
			   <div><b>" . _AM_WFB_VOTE_NONREGISTERED . ": </b>" . intval( $_vote_data['null_ratinguser'] ) . "</div>
			  </td>
			 </tr>
			</table>";
        echo "
			<fieldset><legend style='font-weight: bold; color: #0A3760;'>" . _AM_WFB_VOTE_DISPLAYVOTES . "</legend>\n
			<div style='padding: 8px;'>$text_info</div>\n	
			<div style='padding: 8px;'><li>" . $imagearray['deleteimg'] . " " . _AM_WFB_VOTE_DELETEDSC . "</li></div>\n
			</fieldset>\n
			<br />\n";
    } 
    unset( $_vote_data );

    $caption = ( $lid ) ? _AM_WFB_LINK_MODIFYFILE : _AM_WFB_LINK_CREATENEWFILE;
    $sform = new XoopsThemeForm( $caption, "storyform", xoops_getenv( 'PHP_SELF' ) );
    $sform -> setExtra( 'enctype="multipart / form - data"' );

    if ( $lid ) {
        $sform -> addElement( new XoopsFormLabel( _AM_WFB_LINK_ID, $lid ) );
        $sform -> addElement( new XoopsFormLabel( _AM_WFB_LINK_IP, $ipaddress ) );
    }

// Link title form
    $sform -> addElement( new XoopsFormText( _AM_WFB_LINK_TITLE, 'title', 70, 255, $title ), true );

// Link url form
    $url_text = new XoopsFormText('', 'url', 70, 255, $url);
    $url_tray = new XoopsFormElementTray(_AM_WFB_LINK_DLURL, '');
    $url_tray -> addElement( $url_text, false) ; // LVDH van true naar false omgezet. ulr veprlichting ongedaan gemaakt.
    $url_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/world.png' onClick=\"window.open(document.storyform.url.value,'','');return(false);\" alt='Check URL' />" ));
    $sform -> addElement( $url_tray );

// Link publisher form
    $sform -> addElement( new XoopsFormText( _AM_WFB_LINK_PUBLISHER, 'publisher', 70, 255, $publisher ), false );

    ob_start();
    $mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
    $sform -> addElement( new XoopsFormLabel( _AM_WFB_LINK_CATEGORY, ob_get_contents() ) );
    ob_end_clean();

// Link description form
    $editor = wfl_getWysiwygForm( _AM_WFB_LINK_DESCRIPTION, 'descriptionb', $descriptionb, 15, 60, '');
    $sform -> addElement($editor,false);

// Meta keywords form
    $sform -> addElement( new XoopsFormTextArea( _AM_WFB_KEYWORDS, 'keywords', $keywords, 7, 60 ), false ) ;
    $sform -> insertBreak( sprintf( _AM_WFB_KEYWORDS_NOTE), "even" );

// Insert tags if Tag-module is installed
    if (wfl_tag_module_included()) {
    include_once XOOPS_ROOT_PATH . "/modules/tag/include/formtag.php";
    $text_tags = new XoopsFormTag("item_tag", 70, 255, $link_array['item_tag'], 0);
    $sform -> addElement( $text_tags );
    }

// Google Maps LVDH Gedeactiveerd
  //  $googlemap_text = new XoopsFormText('', 'googlemap', 70, 1024, $googlemap);
  //  $googlemap_tray = new XoopsFormElementTray(_AM_WFB_LINK_GOOGLEMAP, '');
  //  $googlemap_tray -> addElement( $googlemap_text , false ) ;
  //  $googlemap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/google_map.png' onClick=\"window.open(document.storyform.googlemap.value,'','');return(false);\" alt='"._AM_WFB_LINK_CHECKMAP."' />" ));
 //   $sform -> addElement( $googlemap_tray );
// Yahoo Maps LVDH wordt geruikt voor bestellink extern Bol.com. Hernoemd naar partnerlink
    $partnerlink_text = new XoopsFormText('', 'partnerlink', 70, 1024, $partnerlink);
    $partnerlink_tray = new XoopsFormElementTray(_AM_WFB_LINK_PARTNERLINK, '');
    $partnerlink_tray -> addElement( $partnerlink_text , false ) ;
    $partnerlink_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/partnerlink.png' onClick=\"window.open(document.storyform.partnerlink.value,'','');return(false);\" alt='"._AM_WFB_LINK_CHECKPARTNERLINK."' />" ));
    $sform -> addElement( $partnerlink_tray );
// MS Live Maps wordt gebruikt voor presentatie scripts. Hernoemd naar scripties
    $scripties_text = new XoopsFormText('', 'scripties', 70, 1024, $scripties);
    $scripties_tray = new XoopsFormElementTray(_AM_WFB_LINK_SCRIPTIESLINK, '');
    $scripties_tray -> addElement( $scripties_text , false ) ;
    $scripties_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/scripties.png' onClick=\"window.open(document.storyform.scripties.value,'','');return(false);\" alt='"._AM_WFB_LINK_CHECKSCRIPTIESLINK."' />" ));
    $sform -> addElement( $scripties_tray );

// Addressbooks
    $schrijver = new XoopsFormText( _AM_WFB_SCHRIJVER, 'schrijver', 70, 255, $schrijver );
    $sform -> addElement( $schrijver, false );
    $uitgever = new XoopsFormText( _AM_WFB_UITGEVER, 'uitgever', 70, 255, $uitgever );
    $sform -> addElement( $uitgever, false );
	$isbn = new XoopsFormText( _AM_WFB_ISBN, 'isbn', 20, 20, $isbn );
    $sform -> addElement( $isbn, false );
	$jaargang = new XoopsFormText( _AM_WFB_JAARGANG, 'jaargang', 20, 20, $jaargang );
    $sform -> addElement( $jaargang, false );
	$blz = new XoopsFormText( _AM_WFB_BLZ, 'blz', 12, 12, $blz );
    $sform -> addElement( $blz, false );
    $price = new XoopsFormText( _AM_WFB_PRICE, 'price', 70, 255, $price );
    $sform -> addElement( $price, false );
    $genre = new XoopsFormText( _AM_WFB_GENRE, 'genre', 70, 255, $genre );
    $sform -> addElement( $genre, false );
    
// Country form
    $sform -> addElement( new XoopsFormSelectCountry( _AM_WFB_COUNTRY, 'country', $country ), false);

    $graph_array = &wflLists :: getListTypeAsArray( XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['screenshots'], $type = "images" );
    $indeximage_select = new XoopsFormSelect( '', 'screenshot', $screenshot );
    $indeximage_select -> addOptionArray( $graph_array );
    $indeximage_select -> setExtra( "onchange = 'showImgSelected(\"image\", \"screenshot\", \"" . $xoopsModuleConfig['screenshots'] . "\", \"\", \"" . XOOPS_URL . "\")'" );
    $indeximage_tray = new XoopsFormElementTray( _AM_WFB_LINK_SHOTIMAGE, '&nbsp;' );
    $indeximage_tray -> addElement( $indeximage_select );
    if ( !empty( $imgurl ) ) {
        $indeximage_tray -> addElement( new XoopsFormLabel( '', " <br /><br />< img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $screenshot . "' name = 'image' id = 'image' alt = '' / > " ) );
    } else {
        $indeximage_tray -> addElement( new XoopsFormLabel( '', " <br /><br /><img src='" . XOOPS_URL . "/uploads/blank.gif' name='image' id='image' alt='' / > " ) );
    } 
    $sform -> addElement( $indeximage_tray );
    $sform -> insertBreak( sprintf( _AM_WFB_LINK_MUSTBEVALID, "<b>" . $directory . "</b>" ), "even" );

    ob_start();
    wflLists :: getforum( $xoopsModuleConfig['selectforum'], $forumid );
    $sform -> addElement( new XoopsFormLabel( _AM_WFB_LINK_DISCUSSINFORUM, ob_get_contents() ) );
    ob_end_clean();

    $publishtext = ( !$lid && !$published ) ? _AM_WFB_LINK_SETPUBLISHDATE : _AM_WFB_LINK_SETNEWPUBLISHDATE;
    if ( $published > time() ) {
        $publishtext = _AM_WFB_LINK_SETPUBDATESETS;
    } 
    $ispublished = ( $published > time() ) ? 1 : 0 ;
    $publishdates = ( $published > time() ) ? _AM_WFB_LINK_PUBLISHDATESET . formatTimestamp( $published, $xoopsModuleConfig['dateformat'] ) : _AM_WFB_LINK_SETDATETIMEPUBLISH;
    $publishdate_checkbox = new XoopsFormCheckBox( '', 'publishdateactivate', $ispublished );
    $publishdate_checkbox -> addOption( 1, $publishdates . "<br /><br />" );

    if ( $lid ) {
        $sform -> addElement( new XoopsFormHidden( 'was_published', $published ) );
        $sform -> addElement( new XoopsFormHidden( 'was_expired', $expired ) );
    } 

    $publishdate_tray = new XoopsFormElementTray( _AM_WFB_LINK_PUBLISHDATE, '' );
    $publishdate_tray -> addElement( $publishdate_checkbox );
    $publishdate_tray -> addElement( new XoopsFormDateTime( $publishtext, 'published', 15, $published ) );
    $publishdate_tray -> addElement( new XoopsFormRadioYN( _AM_WFB_LINK_CLEARPUBLISHDATE, 'clearpublish', 0, ' ' . _YES . '', ' ' . _NO . '' ) );
    $sform -> addElement( $publishdate_tray );

    $isexpired = ( $expired > time() ) ? 1: 0 ;
    $expiredates = ( $expired > time() ) ? _AM_WFB_LINK_EXPIREDATESET . formatTimestamp( $expired, $xoopsModuleConfig['dateformat'] ) : _AM_WFB_LINK_SETDATETIMEEXPIRE;
    $warning = ( $published > $expired && $expired > time() ) ? _AM_WFB_LINK_EXPIREWARNING : '';
    $expiredate_checkbox = new XoopsFormCheckBox( '', 'expiredateactivate', $isexpired );
    $expiredate_checkbox -> addOption( 1, $expiredates . " <br /> <br /> " );

    $expiredate_tray = new XoopsFormElementTray( _AM_WFB_LINK_EXPIREDATE . $warning, '' );
    $expiredate_tray -> addElement( $expiredate_checkbox );
    $expiredate_tray -> addElement( new XoopsFormDateTime( _AM_WFB_LINK_SETEXPIREDATE . " <br /> ", 'expired', 15, $expired ) );
    $expiredate_tray -> addElement( new XoopsFormRadioYN( _AM_WFB_LINK_CLEAREXPIREDATE, 'clearexpire', 0, ' ' . _YES . '', ' ' . _NO . '' ) );
    $sform -> addElement( $expiredate_tray );

    $linkstatus_radio = new XoopsFormRadioYN( _AM_WFB_LINK_FILESSTATUS, 'offline', $offline, ' ' . _YES . '', ' ' . _NO . '' );
    $sform -> addElement( $linkstatus_radio );

    $up_dated = ( $updated == 0 ) ? 0 : 1;
    $link_updated_radio = new XoopsFormRadioYN( _AM_WFB_LINK_SETASUPDATED, 'up_dated', $up_dated, ' ' . _YES . '', ' ' . _NO . '' );
    $sform -> addElement( $link_updated_radio );

    $result = $xoopsDB -> query( "SELECT COUNT( * ) FROM " . $xoopsDB -> prefix( 'wfbooks_broken' ) . " WHERE lid = " . $lid );
    list ( $broken_count ) = $xoopsDB -> fetchRow( $result );
    if ( $broken_count > 0 ) {
        $link_updated_radio = new XoopsFormRadioYN( _AM_WFB_LINK_DELEDITMESS, 'delbroken', 1, ' ' . _YES . '', ' ' . _NO . '' );
        $sform -> addElement( $editmess_radio );
    } 
    $sform -> insertBreak( _AM_WFB_LINK_CREATENEWSSTORY, "bg3" );
    $submitNews_radio = new XoopsFormRadioYN( _AM_WFB_LINK_SUBMITNEWS, 'submitnews', 0, ' ' . _YES . '', ' ' . _NO . '' );
    $sform -> addElement( $submitNews_radio );

    include_once XOOPS_ROOT_PATH . '/class/xoopstopic.php';
    $xt = new XoopsTopic( $xoopsDB -> prefix( 'topics' ) );
    ob_start();
    $xt -> makeTopicSelBox( 1, 0, "newstopicid" );
    $sform -> addElement( new XoopsFormLabel( _AM_WFB_LINK_NEWSCATEGORY, ob_get_contents() ) );
    ob_end_clean();

    $sform -> addElement( new XoopsFormText( _AM_WFB_LINK_NEWSTITLE, 'newsTitle', 50, 255, '' ), false );
    if ( $lid && $published == 0 ) {
        $approved = ( $published == 0 ) ? 0 : 1;
        $approve_checkbox = new XoopsFormCheckBox( _AM_WFB_LINK_EDITAPPROVE, "approved", 1 );
        $approve_checkbox -> addOption( 1, " " );
        $sform -> addElement( $approve_checkbox );
    } 

    if ( !$lid ) {
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormHidden( 'status', 1 ) );
        $button_tray -> addElement( new XoopsFormHidden( 'notifypub', $notifypub ) );
        $button_tray -> addElement( new XoopsFormHidden( 'op', 'save' ) );
        $button_tray -> addElement( new XoopsFormButton( '', '', _AM_WFB_BSAVE, 'submit' ) );
        $sform -> addElement( $button_tray );
    } else {
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormHidden( 'lid', $lid ) );
        $button_tray -> addElement( new XoopsFormHidden( 'status', 2 ) );
        $hidden = new XoopsFormHidden( 'op', 'save' );
        $button_tray -> addElement( $hidden );

        $butt_dup = new XoopsFormButton( '', '', _AM_WFB_BMODIFY, 'submit' );
        $butt_dup -> setExtra( 'onclick="this . form . elements . op . value = \'save\'"' );
        $button_tray -> addElement( $butt_dup );
        $butt_dupct = new XoopsFormButton( '', '', _AM_WFB_BDELETE, 'submit' );
        $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delete\'"' );
        $button_tray -> addElement( $butt_dupct );
        $butt_dupct2 = new XoopsFormButton( '', '', _AM_WFB_BCANCEL, 'submit' );
        $butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'linksConfigMenu\'"' );
        $button_tray -> addElement( $butt_dupct2 );
        $sform -> addElement( $button_tray );
    } 
    $sform -> display();
    unset( $hidden ); 
    xoops_cp_footer();
} 

function fetchURL( $url = '', $timeout = 2 )
{
    $url = urldecode( $url );
    $url_parsed = parse_url( $url );
    if ( !isset( $url_parsed["host"] ) ) {
        return '';
    } 

    $host = $url_parsed["host"];
    $host = ereg_replace( "http://", "", $host );
    $port = ( isset( $url_parsed["port"] ) ) ? $url_parsed["port"]: 80;
    // Open the socket
    $handle = @fsockopen( 'http://' . $host, $port, $errno, $errstr, $timeout );
    if ( !$handle ) {
        return null;
    } else {
        // Set read timeout
        stream_set_timeout( $handle, $timeout );
        for( $i = 0;$i < 1;$i++ ) {
            // Time the responce
            list( $usec, $sec ) = explode( " ", microtime( true ) );
            $start = ( float )$usec + ( float )$sec; 
            // send somthing
            $write = fwrite( $handle, "return ping\n" );
            if ( !$write ) {
                return '';
            } 
            fread( $handle, 1024 ); 
            // Work out if we got a responce and time it
            list( $usec, $sec ) = explode( " ", microtime( true ) );
            $laptime = ( ( float )$usec + ( float )$sec ) - $start;
            if ( $laptime > $timeout ) {
                return 'No Reply';
            } else {
                return round( $laptime, 3 );
            } 
        } 
        fclose( $handle );
    } 
} 

switch ( strtolower( $op ) )
{
    case "pingtime";
    case "is_broken";

        $_type = ( $op == "pingtime" ) ? "is_broken" : "pingtime";

        $start = wfl_cleanRequestVars( $_REQUEST, 'start', 0 );
        $ping = wfl_cleanRequestVars( $_REQUEST, 'ping', 0 );
        $cid = wfl_cleanRequestVars( $_REQUEST, 'cid', 0 );

        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'wfbooks_links' );
        if ( $cid > 0 ) {
            $sql .= " WHERE cid=" . $cid;
        } 
        $sql .= " ORDER BY lid DESC";
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        $broken_array = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
        $broken_array_count = $xoopsDB -> getRowsNum( $result );

        $heading = ( $op == "pingtime" ) ? _AM_WFB_PINGTIMES : _AM_WFB_LISTBROKEN;

        xoops_cp_header();
        wfl_adminmenu( _AM_WFB_BINDEX, '', $heading );
        echo "
			<table width='100%' cellspacing='1' cellpadding='2' border='0' class='outer'>\n
			<tr>\n
			<th style='text-align: center;'>" . _AM_WFB_MINDEX_ID . "</th>\n
			<th><b>" . _AM_WFB_MINDEX_TITLE . "</th>\n
			<th style='text-align: center;'>"._AM_WFB_MINDEX_POSTER."</th>\n
			<th style='text-align: center;'>" . _AM_WFB_MINDEX_PUBLISHED . "</th>\n
	                <th style='text-align: center;'>" . _AM_WFB_MINDEX_RESPONSE . "</th>\n
                        <th style='text-align: center;'>PR</th>\n
	                <th style='text-align: center;'>" . _AM_WFB_MINDEX_ACTION . "</th>\n
			</tr>\n
		";

        if ( $broken_array_count > 0 ) {
            while ( $published = $xoopsDB -> fetchArray( $broken_array ) ) {
                $_ping_results = fetchURL( $published['url'] );

                if ( !$_ping_results ) {
                    $_ping_results = 'No Response';
                } else {
                    $_ping_results = $_ping_results . '(s)';
                }

//    Start of Google PageRank
//    Source:http://www.sws-tech.com/scripts/googlepagerank.php
//    This code is released under the public domain
$url = $published['url'];
$ch = "6" . GoogleCH(strord("info:" . $url));
$fp = fsockopen("www.google.com", 80, $errno, $errstr, 30);
if (!$fp) {
   echo "$errstr ($errno)<br />\n";
} else {
   $out = "GET /search?client=navclient-auto&ch=". $ch .  "&features=Rank&q=info:" . $url . " HTTP/1.1\r\n";
   $out .= "Host: www.google.com\r\n";
   $out .= "Connection: Close\r\n\r\n";

   fwrite($fp, $out);
   
   while (!feof($fp)) {
	$data = fgets($fp, 128);
	$pos = strpos($data, "Rank_");
	if($pos === false){} else{
	$pagerank = substr($data, $pos + 9);
	}
   }
   fclose($fp);
}
//  End of Google PageRank

                $lid = $published['lid'];
                $cid = $published['cid'];
                $title = "<a href='../singlelink.php?cid=" . $published['cid'] . "&amp;lid=" . $published['lid'] . "'>" . $wfmyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . "</a>";;
                $maintitle = urlencode( $wfmyts -> htmlSpecialChars( trim( $published['title'] ) ) );
                $submitter = xoops_getLinkedUnameFromId( $published['submitter'] );
                $publish = formatTimestamp( $published['published'], $xoopsModuleConfig['dateformat'] );
                $status = ( $published['published'] > 0 ) ? $imagearray['online'] : "<a href='newlinks.php'>" . $imagearray['offline'] . "</a>";
                $icon = "<a href='index.php?op=edit&amp;lid=" . $lid . "'>" . $imagearray['editimg'] . "</a>&nbsp;";
                $icon .= "<a href='index.php?op=delete&amp;lid=" . $lid . "'>" . $imagearray['deleteimg'] . "</a>";
                echo "<tr style='text-align: center;'>\n
						<td class='head'><small>" . $lid . "</small></td>\n
						<td class='even' style='text-align: left;'><small>" . $title . "</small></td>\n
						<td class='even'><small>" . $submitter . "</small></td>\n
						<td class='even'><small>" . $publish . "</small></td>\n
						<td class='even'><small>" . $_ping_results . "</small></td>\n
						<td class='even'><small>" . $pagerank . "</small></td>\n
						<td class='even'>$icon</td>\n
						</tr>\n";
                unset( $published );
            } 
        } else {
            wfl_linklistfooter();
        } 
        wfl_linklistpagenav( $broken_array_count, $start, 'art', 'op=' . $op );
        xoops_cp_footer();
        break;

    case "edit":
        edit( $lid );
        break;

    case "save":
        $groups = isset( $_POST['groups'] ) ? $_POST['groups'] : array();
        $lid = ( !empty( $_POST['lid'] ) ) ? $_POST['lid'] : 0;
        $cid = ( !empty( $_POST['cid'] ) ) ? $_POST['cid'] : 0;
        $urlrating = ( !empty( $_POST['urlrating'] ) ) ? $_POST['urlrating'] : 6;
        $status = ( !empty( $_POST['status'] ) ) ? $_POST['status'] : 2;
        $url = ( $_POST["url"] != "http://" ) ? $wfmyts -> addslashes( $_POST["url"] ) : '';
        $title = $wfmyts -> addslashes( trim( $_POST["title"] ) );

// Get data from form
        $screenshot = ( $_POST["screenshot"] != "blank.gif" ) ? $wfmyts -> addslashes( $_POST["screenshot"] ) : '';
        $descriptionb = $wfmyts -> addslashes( trim( $_POST["descriptionb"] ) );
        $country = $wfmyts -> addslashes( trim( $_POST["country"] ) );
        $keywords = $wfmyts -> addslashes( trim(substr($_POST["keywords"], 0, $xoopsModuleConfig['keywordlength']) ) );
        $item_tag = $wfmyts -> addslashes( trim( $_POST["item_tag"] ) );
        //$googlemap = ( $_POST["googlemap"] != "http://maps.google.com" ) ? $wfmyts -> addslashes( $_POST["googlemap"] ) : ''; // LVDH gedeactiveerd
        //$partnerlink = ( $_POST["partnerlink"] != "http://maps.yahoo.com" ) ? $wfmyts -> addslashes( $_POST["partnerlink"] ) : '';  //LVDH gedeactiveerd
        $partnerlink = ( $_POST["partnerlink"] != "" ) ? $wfmyts -> addslashes( $_POST["partnerlink"] ) : '';  //LVDH ingevoegd en geactiveerd tbv externe partnerbestellink
        $scripties = ( $_POST["scripties"] != "http://WWW.YOURWEBSITE.COM/uploads/wfbooks/files/" ) ? $wfmyts -> addslashes( $_POST["scripties"] ) : '';  //ADJUST THE URL
        $schrijver = $wfmyts -> addslashes( trim( $_POST["schrijver"] ) );
		$uitgever = $wfmyts -> addslashes( trim( $_POST["uitgever"] ) );
		$isbn = $wfmyts -> addslashes( trim( $_POST["isbn"] ) );
		$jaargang = $wfmyts -> addslashes( trim( $_POST["jaargang"] ) );
		$blz = $wfmyts -> addslashes( trim( $_POST["blz"] ) );
        $price = $wfmyts -> addslashes( trim( $_POST["price"] ) );        
        $genre = $wfmyts -> addslashes( trim( $_POST["genre"] ) );     
        
   
        $submitter = $xoopsUser -> uid();
        $publisher = $xoopsUser -> uname();
        $forumid = ( isset( $_POST["forumid"] ) && $_POST["forumid"] > 0 ) ? intval( $_POST["forumid"] ) : 0;
        $updated = ( isset( $_POST['was_published'] ) && $_POST['was_published'] == 0 ) ? 0 : time();
        if ( $_POST['up_dated'] == 0 ) {
            $updated = 0;
            $status = 1;
        } 
        $offline = ( $_POST['offline'] == 1 ) ? 1 : 0;
        $approved = ( isset( $_POST['approved'] ) && $_POST['approved'] == 1 ) ? 1 : 0;
        $notifypub = ( isset( $_POST['notifypub'] ) && $_POST['notifypub'] == 1 );
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
        } else {
            $publishdate = $_POST['was_published'];
            $expiredate = $_POST['was_expired'];
        } 

        if ( $approved == 1 && empty( $publishdate ) ) {
            $publishdate = time();
        }
        if ( isset( $_POST['publishdateactivate'] ) ) {
            $publishdate = strtotime( $_POST['published']['date'] ) + $_POST['published']['time'];
        } 
        if ( $_POST['clearpublish'] ) {
            $result = $xoopsDB -> query( "SELECT date FROM " . $xoopsDB -> prefix( 'wfbooks_links' ) . " WHERE lid=" . $lid );
            list( $date ) = $xoopsDB -> fetchRow( $result );
            $publishdate = $date;
        } 
        if ( isset( $_POST['expiredateactivate'] ) ) {
            $expiredate = strtotime( $_POST['expired']['date'] ) + $_POST['expired']['time'];
        } 
        if ( $_POST['clearexpire'] ) {
            $expiredate = '0';
        } 

// Update or insert linkload data into database
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
            $ipaddress = $_SERVER['REMOTE_ADDR'];
            $sql = "INSERT INTO " . $xoopsDB -> prefix( 'wfbooks_links' ) . " (lid, cid, title, url, screenshot, submitter, publisher, status, date, hits, rating, votes, comments, forumid, published, expired, updated, offline, description, ipaddress, notifypub, urlrating, country, keywords, item_tag, googlemap, partnerlink, scripties, uitgever, price, schrijver, genre, blz, isbn, jaargang )";
            $sql .= " VALUES 	('', $cid, '$title', '$url', '$screenshot', '$submitter', '$publisher','$status', '$date', 0, 0, 0, 0, '$forumid', '$publishdate', 0, '$updated', '$offline', '$descriptionb', '$ipaddress', '0', '$urlrating', '$country', '$keywords', '$item_tag', '$googlemap', '$partnerlink', '$scripties', '$uitgever', '$price', '$schrijver', '$genre', '$blz', '$isbn', '$jaargang')";
           // $newid = $xoopsDB -> getInsertId();
        } else {
            $sql = "UPDATE " . $xoopsDB -> prefix( 'wfbooks_links' ) . " SET cid = $cid, title='$title', url='$url', screenshot='$screenshot', publisher='$publisher', status='$status', forumid='$forumid', published='$publishdate', expired='$expiredate', updated='$updated', offline='$offline', description='$descriptionb', urlrating='$urlrating', country='$country', keywords='$keywords', item_tag='$item_tag', googlemap='$googlemap', partnerlink='$partnerlink', scripties='$scripties', uitgever='$uitgever', price='$price', schrijver='$schrijver', genre='$genre',  blz='$blz', isbn='$isbn', jaargang='$jaargang'  WHERE lid = " . $lid;
        } 
        if ( !$result = $xoopsDB -> queryF( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        }
        
        $newid = mysql_insert_id();
        
// Add item_tag to Tag-module
        if ( !$lid ) {
        $tagupdate = wfl_tagupdate($newid, $item_tag);
        } else {
         $tagupdate = wfl_tagupdate($lid, $item_tag);
        }

// Send notifications
        if ( !$lid ) {
            $tags = array();
            $tags['LINK_NAME'] = $title;
            $tags['LINK_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $cid . '&amp;lid=' . $newid;
            $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'wfbooks_cat' ) . " WHERE cid=" . $cid;
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
        } 
        if ( $lid && $approved && $notifypub ) {
            $tags = array();
            $tags['LINK_NAME'] = $title;
            $tags['LINK_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $cid . '&amp;lid=' . $lid;
            $sql = 'SELECT title FROM ' . $xoopsDB -> prefix( 'mylinks_cat' ) . ' WHERE cid=' . $cid;
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
            $notification_handler -> triggerEvent( 'link', $lid, 'approve', $tags );
        } 
        $message = ( !$lid ) ? _AM_WFB_LINK_NEWFILEUPLOAD : _AM_WFB_LINK_FILEMODIFIEDUPDATE ;
        $message = ( $lid && !$_POST['was_published'] && $approved ) ? _AM_WFB_LINK_FILEAPPROVED : $message;
        if ( wfl_cleanRequestVars( $_REQUEST, 'delbroken', 0 ) ) {
            $sql = 'DELETE FROM ' . $xoopsDB -> prefix( 'wfbooks_broken' ) . ' WHERE lid =' . $lid;
            if ( !$result = $xoopsDB -> queryF( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
        } 
        if ( wfl_cleanRequestVars( $_REQUEST, 'submitnews', 0 ) ) {
            include_once "newstory.php";
        } 
        redirect_header( "index.php", 1, $message );
        break;

    case "delete":
        if ( wfl_cleanRequestVars( $_REQUEST, 'confirm', 0 ) ) {
            $title = wfl_cleanRequestVars( $_REQUEST, 'title', 0 );
            $sql = 'DELETE FROM ' . $xoopsDB -> prefix( 'wfbooks_links' ) . ' WHERE lid=' . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            }

            $sql = 'DELETE FROM ' . $xoopsDB -> prefix( 'wfbooks_votedata' ) . ' WHERE lid=' . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            }

            // delete comments
            xoops_comment_delete( $xoopsModule -> getVar( 'mid' ), $lid );
            redirect_header( "index.php", 1, sprintf( _AM_WFB_LINK_FILEWASDELETED, $title ) );
            exit();
        } else {
            $sql = 'SELECT lid, title, item_tag, url FROM ' . $xoopsDB -> prefix( 'wfbooks_links' ) . ' WHERE lid = ' . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 			
            list( $lid, $title ) = $xoopsDB -> fetchrow( $result );
            $item_tag = $result['item_tag'];
            xoops_cp_header();
            wfl_adminmenu( _AM_WFB_BINDEX );
            xoops_confirm( array( 'op' => 'delete', 'lid' => $lid, 'confirm' => 1, 'title' => $title ), 'index.php', _AM_WFB_LINK_REALLYDELETEDTHIS . "<br /><br>" . $title, _DELETE );

            // Remove item_tag from Tag-module
            $tagupdate = wfl_tagupdate($lid, $item_tag);

            xoops_cp_footer();
        } 
        break;

    case "delvote":
        $rid = wfl_cleanRequestVars( $_REQUEST, 'rid', 0 );
        $sql = 'DELETE FROM ' . $xoopsDB -> prefix( 'wfbooks_votedata' ) . ' WHERE ratingid=' . $rid;
        if ( !$result = $xoopsDB -> queryF( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        wfl_updaterating( $rid );
        redirect_header( "index.php", 1, _AM_WFB_VOTE_VOTEDELETED );
        break;

    case 'main':
    default:
        $start = wfl_cleanRequestVars( $_REQUEST, 'start', 0 );
        $start1 = wfl_cleanRequestVars( $_REQUEST, 'start1', 0 );
        $start2 = wfl_cleanRequestVars( $_REQUEST, 'start2', 0 );
        $start3 = wfl_cleanRequestVars( $_REQUEST, 'start3', 0 );
        $start4 = wfl_cleanRequestVars( $_REQUEST, 'start4', 0 );
        $totalcats = wfl_totalcategory();

        $result = $xoopsDB -> query( 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'wfbooks_broken' ) );
        list( $totalbrokenlinks ) = $xoopsDB -> fetchRow( $result );
        $result2 = $xoopsDB -> query( 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'wfbooks_mod' ) );
        list( $totalmodrequests ) = $xoopsDB -> fetchRow( $result2 );
        $result3 = $xoopsDB -> query( 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'wfbooks_links' ) . ' WHERE published = 0' );
        list( $totalnewlinks ) = $xoopsDB -> fetchRow( $result3 );
        $result4 = $xoopsDB -> query( 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'wfbooks_links' ) . ' WHERE published > 0' );
        list( $totallinks ) = $xoopsDB -> fetchRow( $result4 );

        xoops_cp_header();
        wfl_adminmenu( _AM_WFB_BINDEX );
        echo "
			<fieldset><legend style='font-weight: bold; color: #0A3760;'>" . _AM_WFB_MINDEX_LINKSUMMARY . "</legend>\n
			<div style='padding: 8px;'><small>\n
			<a href='category.php'>" . _AM_WFB_SCATEGORY . "</a><b>" . $totalcats . "</b> | \n
			<a href='index.php'>" . _AM_WFB_SFILES . "</a><b>" . $totallinks . "</b> | \n
			<a href='newlinks.php'>" . _AM_WFB_SNEWFILESVAL . "</a><b>" . $totalnewlinks . "</b> | \n
			<a href='modifications.php'>" . _AM_WFB_SMODREQUEST . "</a><b>" . $totalmodrequests . "</b> | \n
			<a href='brokenlink.php'>" . _AM_WFB_SBROKENSUBMIT . "</a><b>" . $totalbrokenlinks . "</b>\n
			</small></div></fieldset><br />\n
		";

        if ( $totalcats > 0 ) {
            $sform = new XoopsThemeForm( _AM_WFB_CCATEGORY_MODIFY, "category", "category.php" );
            ob_start();
            $mytree -> makeMySelBox( "title", "title" );
            $sform -> addElement( new XoopsFormLabel( _AM_WFB_CCATEGORY_MODIFY_TITLE, ob_get_contents() ) );
            ob_end_clean();
            $dup_tray = new XoopsFormElementTray( '', '' );
            $dup_tray -> addElement( new XoopsFormHidden( 'op', 'modCat' ) );
            $butt_dup = new XoopsFormButton( '', '', _AM_WFB_BMODIFY, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'modCat\'"' );
            $dup_tray -> addElement( $butt_dup );
            $butt_dupct = new XoopsFormButton( '', '', _AM_WFB_BDELETE, 'submit' );
            $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'del\'"' );
            $dup_tray -> addElement( $butt_dupct );
            $sform -> addElement( $dup_tray );
            $sform -> display();
        } 

        if ( $totallinks > 0 ) {
            $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'wfbooks_links' ) . ' WHERE published > 0  ORDER BY lid DESC' ;
            $published_array = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
            $published_array_count = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );
            wfl_linklistheader( _AM_WFB_MINDEX_PUBLISHEDLINK );
            wfl_linklistpagenavleft( $published_array_count, $start, 'art' );
            if ( $published_array_count > 0 ) {
                while ( $published = $xoopsDB -> fetchArray( $published_array ) ) {
                    wfl_linklistbody( $published );
                } 
            } else {
                wfl_linklistfooter();
            } 
            wfl_linklistpagenav( $published_array_count, $start, 'art' );           
        }
        xoops_cp_footer();
        break;
} 

?>