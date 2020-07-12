<?php
/**
 * $Id: main.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_WFB_NAME","WF-Books");

// A brief description of this module
define("_MI_WFB_DESC","Creates a books section where users can link/submit/rate various books.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFB_BNAME1","Recent WF-Books");
define("_MI_WFB_BNAME2","Top WF-Books");

// Sub menu titles
define("_MI_WFB_SMNAME1","Submit");
define("_MI_WFB_SMNAME2","Popular");
define("_MI_WFB_SMNAME3","Top Rated");
define("_MI_WFB_SMNAME4","Latest Listings");

// Names of admin menu items
define("_MI_WFB_BINDEX","Main Index");
define("_MI_WFB_INDEXPAGE","Index Page Management");
define("_MI_WFB_MCATEGORY","Category Management");
define("_MI_WFB_MLINKS","Book Management");
define("_MI_WFB_MUPLOADS","Image Upload");
define("_MI_WFB_PERMISSIONS","Permission Settings");
define("_MI_WFB_BLOCKADMIN","Block Settings");
define("_MI_WFB_MVOTEDATA","Votes");

// Title of config items
define('_MI_WFB_POPULAR', 'book Popular Count');
define('_MI_WFB_POPULARDSC', 'The number of hits before a book status will be considered as popular.');

//Display Icons
define("_MI_WFB_ICONDISPLAY","books Popular and New:");
define("_MI_WFB_DISPLAYICONDSC", "Select how to display the popular and new icons in book listing.");
define("_MI_WFB_DISPLAYICON1", "Display As Icons");
define("_MI_WFB_DISPLAYICON2", "Display As Text");
define("_MI_WFB_DISPLAYICON3", "Do Not Display");

define("_MI_WFB_DAYSNEW","books Days New:");
define("_MI_WFB_DAYSNEWDSC","The number of days a book status will be considered as new.");
define("_MI_WFB_DAYSUPDATED","books Days Updated:");
define("_MI_WFB_DAYSUPDATEDDSC","The amount of days a book status will be considered as updated.");

define('_MI_WFB_PERPAGE', 'book Listing Count:');
define('_MI_WFB_PERPAGEDSC', 'Number of books to display in each category listing.');

define('_MI_WFB_USESHOTS', 'Display Screenshot Images?');
define('_MI_WFB_USESHOTSDSC', 'Select yes to display screenshot images for each book item');
define('_MI_WFB_SHOTWIDTH', 'Image Display Width');
define('_MI_WFB_SHOTWIDTHDSC', 'Display width for screenshot image');
define('_MI_WFB_SHOTHEIGHT', 'Image Display Height');
define('_MI_WFB_SHOTHEIGHTDSC', 'Display height for screenshot image');
define('_MI_WFB_CHECKHOST', 'Disallow direct book linking? (leeching)');
define('_MI_WFB_REFERERS', 'These sites can directly link to your books <br />Separate with #');
define("_MI_WFB_ANONPOST","Anonymous User Submission:");
define("_MI_WFB_ANONPOSTDSC","Allow Anonymous users to submit or upload to your website?");
define('_MI_WFB_AUTOAPPROVE','Auto Approve Submitted books');
define('_MI_WFB_AUTOAPPROVEDSC','Select to approve submitted books without moderation.');

define('_MI_WFB_MAXFILESIZE','Upload Size (KB)');
define('_MI_WFB_MAXFILESIZEDSC','Maximum file size permitted with book uploads.');
define('_MI_WFB_IMGWIDTH','Upload Image width');
define('_MI_WFB_IMGWIDTHDSC','Maximum image width permitted when uploading image links');
define('_MI_WFB_IMGHEIGHT','Upload Image height');
define('_MI_WFB_IMGHEIGHTDSC','Maximum image height permitted when uploading image links');

define('_MI_WFB_UPLOADDIR','Upload Directory (No trailing slash)');
define('_MI_WFB_ALLOWSUBMISS','User Submissions:');
define('_MI_WFB_ALLOWSUBMISSDSC','Allow Users to Submit new books');
define('_MI_WFB_ALLOWUPLOADS','User Uploads:');
define('_MI_WFB_ALLOWUPLOADSDSC','Allow Users to upload book files directly to your website');
define('_MI_WFB_SCREENSHOTS','Screenshots Upload Directory');
define('_MI_WFB_CATEGORYIMG','Category Image Upload Directory');
define('_MI_WFB_MAINIMGDIR','Main Image Directory');
define('_MI_WFB_USETHUMBS', 'Use Thumb Nails:');
define("_MI_WFB_USETHUMBSDSC", "Supported book file types: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Books will use thumb nails for images. Set to 'No' to use orginal image if the server does not support this option.</div>");
define('_MI_WFB_DATEFORMAT', 'Timestamp:');
define('_MI_WFB_DATEFORMATDSC', 'Default Timestamp for WF-books:');
define('_MI_WFB_SHOWDISCLAIMER', 'Show Disclaimer before User Submission?');
define('_MI_WFB_SHOWDISCLAIMERDSC', 'Before a User can submit a Book show the Entry regulations?');
define('_MI_WFB_SHOWLINKDISCL', 'Show Disclaimer before User book?');
define('_MI_WFB_SHOWLINKDISCLDSC', 'Show link regulations before open a booklink?');
define('_MI_WFB_DISCLAIMER', 'Enter Submission Disclaimer Text:');
define('_MI_WFB_LINKDISCLAIMER', 'Enter book Disclaimer Text:');
define('_MI_WFB_SUBCATS', 'Sub-Categories:');
define("_MI_WFB_SUBMITART", "book Submission:");
define("_MI_WFB_SUBMITARTDSC", "Select groups that can submit new books.");
define("_MI_WFB_RATINGGROUPS", "book Ratings:");
define("_MI_WFB_RATINGGROUPSDSC", "Select groups that can rate a book.");
define("_MI_WFB_IMGUPDATE", "Update Thumbnails?");
define("_MI_WFB_IMGUPDATEDSC", "If selected Thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. <br /><br />");
define("_MI_WFB_QUALITY", "Thumb Nail Quality:");
define("_MI_WFB_QUALITYDSC", "Quality Lowest: 0 Highest: 100");
define("_MI_WFB_KEEPASPECT", "Keep Image Aspect Ratio?");
define("_MI_WFB_KEEPASPECTDSC", "");
define("_MI_WFB_ADMINPAGE", "Admin Index Books Count:");
define("_MI_WFB_AMDMINPAGEDSC", "Number of new books to display in module admin area.");
define("_MI_WFB_ARTICLESSORT", "Default book Order:");
define("_MI_WFB_ARTICLESSORTDSC", "Select the default order for the book listings.");
define("_MI_WFB_TITLE", "Title");
define("_MI_WFB_RATING", "Rating");
define("_MI_WFB_WEIGHT", "Weight");
define("_MI_WFB_POPULARITY", "Popularity");
define("_MI_WFB_SUBMITTED2", "Submission Date");
define('_MI_WFB_COPYRIGHT', 'Copyright Notice:');
define('_MI_WFB_COPYRIGHTDSC', 'Select to display a copyright notice on book page.');
// Description of each config items
define('_MI_WFB_SUBCATSDSC', 'Select Yes to display sub-categories. Selecting No will hide sub-categories from the listings');

// Text for notifications
define('_MI_WFB_GLOBAL_NOTIFY', 'Global');
define('_MI_WFB_GLOBAL_NOTIFYDSC', 'Global books notification options.');
define('_MI_WFB_CATEGORY_NOTIFY', 'Category');
define('_MI_WFB_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current book category.');
define('_MI_WFB_LINK_NOTIFY', 'Book');
define('_MI_WFB_FILE_NOTIFYDSC', 'Notification options that apply to the current book.');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFY', 'New Category');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notify me when a new book category is created.');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new book category is created.');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New book category');                              

define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFY', 'Modify Book Requested');
define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notify me of any book modification request.');
define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receive notification when any book modification request is submitted.');
define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Book Modification Requested');

define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFY', 'Broken Booklink Submitted');
define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notify me of any broken booklink report.');
define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receive notification when any broken booklink report is submitted.');
define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Broken Booklink Reported');

define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFY', 'Book Submitted');
define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notify me when any new book is submitted (awaiting approval).');
define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receive notification when any new book is submitted (awaiting approval).');
define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New book submitted');

define('_MI_WFB_GLOBAL_NEWLINK_NOTIFY', 'New Book');
define('_MI_WFB_GLOBAL_NEWLINK_NOTIFYCAP', 'Notify me when any new book is posted.');
define('_MI_WFB_GLOBAL_NEWLINK_NOTIFYDSC', 'Receive notification when any new book is posted.');
define('_MI_WFB_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New Book');

define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFY', 'Book Submitted');
define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new book is submitted (awaiting approval) to the current category.');   
define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new book is submitted (awaiting approval) to the current category.');      
define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New book submitted in category'); 

define('_MI_WFB_CATEGORY_NEWLINK_NOTIFY', 'New Book');
define('_MI_WFB_CATEGORY_NEWLINK_NOTIFYCAP', 'Notify me when a new book is posted to the current category.');   
define('_MI_WFB_CATEGORY_NEWLINK_NOTIFYDSC', 'Receive notification when a new book is posted to the current category.');      
define('_MI_WFB_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New book in category'); 

define('_MI_WFB_LINK_APPROVE_NOTIFY', 'Book Approved');
define('_MI_WFB_LINK_APPROVE_NOTIFYCAP', 'Notify me when this book is approved.');
define('_MI_WFB_LINK_APPROVE_NOTIFYDSC', 'Receive notification when this book is approved.');
define('_MI_WFB_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Book Approved');

define('_MI_WFB_AUTHOR_INFO', "Developer Information");
define('_MI_WFB_AUTHOR_NAME', "Developer");
define('_MI_WFB_AUTHOR_DEVTEAM', "Development Team");
define('_MI_WFB_AUTHOR_WEBSITE', "Developer website");
define('_MI_WFB_AUTHOR_EMAIL', "Developer email");
define('_MI_WFB_AUTHOR_CREDITS', "Credits");
define('_MI_WFB_MODULE_INFO', "Module Development Information");
define('_MI_WFB_MODULE_STATUS', "Development Status");
define('_MI_WFB_MODULE_DEMO', "Demo Site");
define('_MI_WFB_MODULE_SUPPORT', "Official support site");
define('_MI_WFB_MODULE_BUG', "Report a bug for this module");
define('_MI_WFB_MODULE_FEATURE', "Suggest a new feature for this module");
define('_MI_WFB_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_WFB_RELEASE', "Release Date: ");

define('_MI_WFB_MODULE_MAILLIST', "WF-Project Mailing Lists");
define('_MI_WFB_MODULE_MAILANNOUNCEMENTS', "Announcements Mailing List");
define('_MI_WFB_MODULE_MAILBUGS', "Bug Mailing List");
define('_MI_WFB_MODULE_MAILFEATURES', "Features Mailing List");
define('_MI_WFB_MODULE_MAILANNOUNCEMENTSDSC', "Get the latest announcements from WF-Project.");
define('_MI_WFB_MODULE_MAILBUGSDSC', "Bug Tracking and submission mailing list");
define('_MI_WFB_MODULE_MAILFEATURESDSC', "Request New Features mailing list.");

define('_MI_WFB_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFB_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_WFB_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_WFB_COPYRIGHT2', 'Copyright' );
define('_MI_WFB_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (WF-Links) and its images are copyright to the WF-Projects team.<br /><br />You have the permission to copy, edit and change WF-Links to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the WF-Projects team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_WFB_SELECTFORUM', "Select Forum:");
define('_MI_WFB_SELECTFORUMDSC', "Select the forum you have installed and will be used by WF-Books.");

define('_MI_WFB_DISPLAYFORUM1', "Newbb (all)");
define('_MI_WFB_DISPLAYFORUM2', "IPB Forum");
define('_MI_WFB_DISPLAYFORUM3', "PHPBB2 Module");

// added by McDonald
define( "_MI_WFB_COUNTRY", "Country:" );
define('_MI_WFB_EDITOR', "Editor to use (admin):");
define('_MI_WFB_EDITORCHOICE', "Select the editor to use for admin side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define('_MI_WFB_EDITORUSER', "Editor to use (user):");
define('_MI_WFB_EDITORCHOICEUSER', "Select the editor to use for user side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define("_MI_WFB_FORM_DHTML", "DHTML");
define("_MI_WFB_FORM_COMPACT", "Compact");
define("_MI_WFB_FORM_SPAW", "Spaw Editor");
define("_MI_WFB_FORM_HTMLAREA", "HtmlArea Editor");
define("_MI_WFB_FORM_FCK", "FCK Editor");
define("_MI_WFB_FORM_KOIVI", "Koivi Editor");
define("_MI_WFB_FORM_INBETWEEN", "Inbetween");
define("_MI_WFB_FORM_TINYEDITOR", "TinyEditor");
define("_MI_WFB_FORM_TINYMCE", "TinyMCE");
define("_MI_WFB_FORM_DHTMLEXT", "DHTML Extended");
define("_MI_WFB_SORTCATS", "Sort categories by:");
define("_MI_WFB_SORTCATSDSC", "Select how categories and sub-categories are sorted.");
define("_MI_WFB_KEYLENGTH", "Enter max. characters for meta keywords:");
define("_MI_WFB_KEYLENGTHDSC", "Default is 255 characters");
define("_MI_WFB_OTHERLINKS", "Show other books submitted by Submitter?");
define("_MI_WFB_OTHERLINKSDSC", "Select if other books of the submitter will be displayed.");
define("_MI_WFB_TOTALCHARS", "Set total amount of characters for description?");
define("_MI_WFB_TOTALCHARSDSC", "Set total amount of characters for description in category view.");
define("_MI_WFB_QUICKVIEW", "Show Quick View option?");
define("_MI_WFB_QUICKVIEWDSC", "This turns on/off the Quick View option.");
define('_MI_WFB_ICONS_CREDITS', "Icons by");
define("_MI_WFB_SHOWSBOOKMARKS", "Show Social Bookmarks?");
define("_MI_WFB_SHOWSBOOKMARKSDSC", "Select Yes if you want Social Bookmark icons to be displayed under article.");
define("_MI_WFB_SHOWPAGERANK", "Show Google PageRank?");
define("_MI_WFB_SHOWPAGERANKSDSC", "Select Yes if you want Google PageRank to be displayed.");
define("_MI_WFB_USERTAGDESCR", "User can submit Tags:");
define("_MI_WFB_USERTAGDSC", "Select Yes if user is allowed to submit tags.");
?>