<?php
/**
 * $Id: admin.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
define( "_AM_WFB_WARNINSTALL1", "WARNING: Directory %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_WFB_WARNINSTALL2", "WARNING: File %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_WFB_WARNINSTALL3", "WARNING: Folder %s does not exists on your server. <br />This folder is required by WF-Links." );
define( "_AM_WFB_WARNINSTALL4", "WARNING: Folder %s is not writeable. <br />This folder needs to be writeable (CHMOD 777) for WF-Links." );

define( "_AM_WFB_MODULE_NAME", "WF-Books" );

define( "_AM_WFB_BMODIFY", "Modify" );
define( "_AM_WFB_BDELETE", "Delete" );
define( "_AM_WFB_BCREATE", "Create" );
define( "_AM_WFB_BADD", "Add" );
define( "_AM_WFB_BAPPROVE", "Approve" );
define( "_AM_WFB_BIGNORE", "Ignore" );
define( "_AM_WFB_BCANCEL", "Cancel" );
define( "_AM_WFB_BSAVE", "Save" );
define( "_AM_WFB_BRESET", "Reset" );
define( "_AM_WFB_BMOVE", "Move Books" );
define( "_AM_WFB_BUPLOAD", "Upload" );
define( "_AM_WFB_BDELETEIMAGE", "Delete Selected Image" );
define( "_AM_WFB_BRETURN", "Return to where you where!" );
define( "_AM_WFB_DBERROR", "Database Access Error: Please report this error to the WF-Project Website" );
// Other Options
define( "_AM_WFB_TEXTOPTIONS", "Text Options:" );
define( "_AM_WFB_DISABLEHTML", " Disable HTML Tags" );
define( "_AM_WFB_DISABLESMILEY", " Disable Smilie Icons" );
define( "_AM_WFB_DISABLEXCODE", " Disable XOOPS Codes" );
define( "_AM_WFB_DISABLEIMAGES", " Disable Images" );
define( "_AM_WFB_DISABLEBREAK", " Use XOOPS linebreak conversion?" );
define( "_AM_WFB_UPLOADFILE", "Link Uploaded Successfully" );
define( "_AM_WFB_NOMENUITEMS", "No menu items within the menu" );
// Admin Bread crumb
define( "_AM_WFB_PREFS", "Preferences" );
define( "_AM_WFB_BUPDATE", "Module Update" );
define( "_AM_WFB_BINDEX", "Main Index" );
define( "_AM_WFB_BPERMISSIONS", "Permissions" );
// define( "_AM_WFB_BLOCKADMIN", "Blocks" );
define( "_AM_WFB_BLOCKADMIN", "Block Settings" );
define( "_AM_WFB_GOMODULE", "Go to module" );
define( "_AM_WFB_ABOUT", "About" );
// Admin Summary
define( "_AM_WFB_SCATEGORY", "Category: " );
define( "_AM_WFB_SFILES", "Books: " );
define( "_AM_WFB_SNEWFILESVAL", "Submitted: " );
define( "_AM_WFB_SMODREQUEST", "Modified: " );
define( "_AM_WFB_SREVIEWS", "Reviews: " );

// Admin Main Menu
define( "_AM_WFB_MCATEGORY", "Category Management" );
define( "_AM_WFB_MLINKS", "Book Management" );
define( "_AM_WFB_MLISTBROKEN", "List Broken Book Links" );
define( "_AM_WFB_MLISTPINGTIMES", "List Links Pingtime" );
define( "_AM_WFB_INDEXPAGE", "Index Page Management" );
define( "_AM_WFB_MCOMMENTS", "Comments" );
define( "_AM_WFB_MVOTEDATA", "Vote Data" );
define( "_AM_WFB_MUPLOADS", "Image Upload" );

// Catgeory defines
define( "_AM_WFB_CCATEGORY_CREATENEW", "Create New Category" );
define( "_AM_WFB_CCATEGORY_MODIFY", "Modify Category" );
define( "_AM_WFB_CCATEGORY_MOVE", "Move Category Books" );
define( "_AM_WFB_CCATEGORY_MODIFY_TITLE", "Category Title:" );
define( "_AM_WFB_CCATEGORY_MODIFY_FAILED", "Failed Moving Books: Cannot move to this Category" );
define( "_AM_WFB_CCATEGORY_MODIFY_FAILEDT", "Failed Moving Books: Cannot find this Category" );
define( "_AM_WFB_CCATEGORY_MODIFY_MOVED", "Books Moved and Database Updated Successfully" );
define( "_AM_WFB_CCATEGORY_CREATED", "New Category Created and Database Updated Successfully" );
define( "_AM_WFB_CCATEGORY_MODIFIED", "Selected Category Modified and Database Updated Successfully" );
define( "_AM_WFB_CCATEGORY_DELETED", "Selected Category Deleted and Database Updated Successfully" );
define( "_AM_WFB_CCATEGORY_AREUSURE", "WARNING: Are you sure you want to delete this Category and ALL its Books and Comments?" );
define( "_AM_WFB_CCATEGORY_NOEXISTS", "You must create a Category before you can add a new book" );
define( "_AM_WFB_FCATEGORY_GROUPPROMPT", "Category Access Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have access to this Category.</span></div>" );
define( "_AM_WFB_FCATEGORY_SUBGROUPPROMPT", "Category Submission Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to submit new books to this Category.</span></div>" );
define( "_AM_WFB_FCATEGORY_MODGROUPPROMPT", "Category Moderation Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to moderate this Category.</span></div>" );

define( "_AM_WFB_FCATEGORY_TITLE", "Category Title:" );
define( "_AM_WFB_FCATEGORY_WEIGHT", "Category Weight:" );
define( "_AM_WFB_FCATEGORY_SUBCATEGORY", "Set As Sub-Category:" );
define( "_AM_WFB_FCATEGORY_CIMAGE", "Select Category Image:" );
define( "_AM_WFB_FCATEGORY_DESCRIPTION", "Set Category Description:" );
define( "_AM_WFB_FCATEGORY_SUMMARY", "Set Category Summary:" );
/**
 * Index page Defines
 */
define( "_AM_WFB_IPAGE_UPDATED", "Index Page Modified and Database Updated Successfully!" );
define( "_AM_WFB_IPAGE_INFORMATION", "Index Page Information" );
define( "_AM_WFB_IPAGE_MODIFY", "Modify Index Page" );
define( "_AM_WFB_IPAGE_CIMAGE", "Select Index Image:" );
define( "_AM_WFB_IPAGE_CTITLE", "Index Title:" );
define( "_AM_WFB_IPAGE_CHEADING", "Index Heading:" );
define( "_AM_WFB_IPAGE_CHEADINGA", "Index Heading Alignment:" );
define( "_AM_WFB_IPAGE_CFOOTER", "Index Footer:" );
define( "_AM_WFB_IPAGE_CFOOTERA", "Index Footer Alignment:" );
define( "_AM_WFB_IPAGE_CLEFT", "Align Left" );
define( "_AM_WFB_IPAGE_CCENTER", "Align Center" );
define( "_AM_WFB_IPAGE_CRIGHT", "Align Right" );
/**
 * Permissions defines
 */
define( "_AM_WFB_PERM_MANAGEMENT", "Permissions Management" );
define( "_AM_WFB_PERM_PERMSNOTE", "<div><b>NOTE:</b> Please be aware that even if you&#8217ve set correct viewing permissions here, a group might not see the articles or blocks if you don&#8217t also grant that group permissions to access the module. To do that, go to <b>System admin > Groups</b>, choose the appropriate group and click the checkboxes to grant its members the access.</div>" );
define( "_AM_WFB_PERM_CPERMISSIONS", "Category Permissions" );
define( "_AM_WFB_PERM_CSELECTPERMISSIONS", "Select categories that each group is allowed to view" );
define( "_AM_WFB_PERM_CNOCATEGORY", "Cannot set permission's: No Categories's have been created yet!" );
define( "_AM_WFB_PERM_FPERMISSIONS", "Book Permissions" );
define( "_AM_WFB_PERM_FNOFILES", "Cannot set permission's: No books have been created yet!" );
define( "_AM_WFB_PERM_FSELECTPERMISSIONS", "Select the books that each group is allowed to view" );
/**
 * Upload defines
 */
define( "_AM_WFB_LINK_IMAGEUPLOAD", "Image successfully uploaded to server destination" );
define( "_AM_WFB_LINK_NOIMAGEEXIST", "Error: No book was selected for uploading.  Please try again!" );
define( "_AM_WFB_LINK_IMAGEEXIST", "Image already exists in upload area!" );
define( "_AM_WFB_LINK_FILEDELETED", "Book has been deleted." );
define( "_AM_WFB_LINK_FILEERRORDELETE", "Error deleting Book: Book not found on server." );
define( "_AM_WFB_LINK_NOFILEERROR", "Error deleting Book: No Book Selected For Deleting." );
define( "_AM_WFB_LINK_DELETEFILE", "WARNING: Are you sure you want to delete this Image link?" );
define( "_AM_WFB_LINK_IMAGEINFO", "Server Status" );
define( "_AM_WFB_LINK_SPHPINI", "<b>Information taken from PHP ini Link:</b>" );
define( "_AM_WFB_LINK_SAFEMODESTATUS", "Safe Mode Status: " );
define( "_AM_WFB_LINK_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_WFB_LINK_SERVERUPLOADSTATUS", "Server Uploads Status: " );
define( "_AM_WFB_LINK_MAXUPLOADSIZE", "Max Upload Size Permitted: " );
define( "_AM_WFB_LINK_MAXPOSTSIZE", "Max Post Size Permitted: " );
define( "_AM_WFB_LINK_SAFEMODEPROBLEMS", " (This May Cause Problems)" );
define( "_AM_WFB_LINK_GDLIBSTATUS", "GD Library Support: " );
define( "_AM_WFB_LINK_GDLIBVERSION", "GD Library Version: " );
define( "_AM_WFB_LINK_GDON", "<b>Enabled</b> (Thumbs Nails Available)" );
define( "_AM_WFB_LINK_GDOFF", "<b>Disabled</b> (No Thumb Nails Available)" );
define( "_AM_WFB_LINK_OFF", "<b>OFF</b>" );
define( "_AM_WFB_LINK_ON", "<b>ON</b>" );
define( "_AM_WFB_LINK_CATIMAGE", "Category Images" );
define( "_AM_WFB_LINK_SCREENSHOTS", "Screenshot Images" );
define( "_AM_WFB_LINK_MAINIMAGEDIR", "Main images" );
define( "_AM_WFB_LINK_FCATIMAGE", "Category Image Path" );
define( "_AM_WFB_LINK_FSCREENSHOTS", "Screenshot Image Path" );
define( "_AM_WFB_LINK_FMAINIMAGEDIR", "Main image Path" );
define( "_AM_WFB_LINK_FUPLOADIMAGETO", "Upload Image: " );
define( "_AM_WFB_LINK_FUPLOADPATH", "Upload Path: " );
define( "_AM_WFB_LINK_FUPLOADURL", "Upload URL: " );
define( "_AM_WFB_LINK_FOLDERSELECTION", "Select Upload Destination:" );
define( "_AM_WFB_LINK_FSHOWSELECTEDIMAGE", "Display Selected Image:" );
define( "_AM_WFB_LINK_FUPLOADIMAGE", "Upload New Image to Selected Destination:" );

// Main Index defines
define( "_AM_WFB_MINDEX_LINKSUMMARY", "Module Admin Summary" );
define( "_AM_WFB_MINDEX_PUBLISHEDLINK", "Published Books:" );
define( "_AM_WFB_MINDEX_AUTOPUBLISHEDLINK", "Auto Published Books:" );
define( "_AM_WFB_MINDEX_AUTOEXPIRE", "Auto Expire Books:" );
define( "_AM_WFB_MINDEX_EXPIRED", "Expired Books:" );
define( "_AM_WFB_MINDEX_OFFLINELINK", "Offline Books:" );
define( "_AM_WFB_MINDEX_ID", "ID" );
define( "_AM_WFB_MINDEX_TITLE", "Book Title" );
define( "_AM_WFB_MINDEX_POSTER", "Poster" );
define( "_AM_WFB_MINDEX_ONLINE", "Status" );
define( "_AM_WFB_MINDEX_ONLINESTATUS", "Online Status" );
define( "_AM_WFB_MINDEX_PUBLISH", "Published" );
define( "_AM_WFB_MINDEX_PUBLISHED", "Published" );
define( "_AM_WFB_MINDEX_EXPIRE", "Expired" );
define( "_AM_WFB_MINDEX_NOTSET", "Date Not Set" );
define( "_AM_WFB_MINDEX_SUBMITTED", "Date Submitted" );

define( "_AM_WFB_MINDEX_ACTION", "Action" );
define( "_AM_WFB_MINDEX_NOLINKSFOUND", "NOTICE: There are no books that match this criteria" );
define( "_AM_WFB_MINDEX_PAGE", "<b>Page:<b> " );
define( '_AM_WFB_MINDEX_PAGEINFOTXT', '<ul><li>WF-books main page details.</li><li>You can easily change the image logo, heading, main index header and footer text to suit your own look</li></ul><br />Note: The Logo image choosen will be used throughout WF-books.' );
define( "_AM_WFB_MINDEX_RESPONSE", "Response Time" );
// Submitted Links
define( "_AM_WFB_SUB_SUBMITTEDFILES", "Submitted books" );
define( "_AM_WFB_SUB_FILESWAITINGINFO", "Waiting Books Information" );
define( "_AM_WFB_SUB_FILESWAITINGVALIDATION", "Books Waiting Validation: " );
define( "_AM_WFB_SUB_APPROVEWAITINGFILE", "<b>Approve</b> new book information without validation." );
define( "_AM_WFB_SUB_EDITWAITINGFILE", "<b>Edit</b> new book information and then approve." );
define( "_AM_WFB_SUB_DELETEWAITINGFILE", "<b>Delete</b> the new book information." );
define( "_AM_WFB_SUB_NOFILESWAITING", "There are no books that match this critera" );
define( "_AM_WFB_SUB_NEWFILECREATED", "New book Data Created and Database Updated Successfully" );
// Vote Information
define( "_AM_WFB_VOTE_RATINGINFOMATION", "Voting Information" );
define( "_AM_WFB_VOTE_TOTALVOTES", "Total votes: " );
define( "_AM_WFB_VOTE_REGUSERVOTES", "Registered User Votes: %s" );
define( "_AM_WFB_VOTE_ANONUSERVOTES", "Anonymous User Votes: %s" );
define( "_AM_WFB_VOTE_USER", "User" );
define( "_AM_WFB_VOTE_IP", "IP Address" );
define( "_AM_WFB_VOTE_DATE", "Submitted" );
define( "_AM_WFB_VOTE_RATING", "Rating" );
define( "_AM_WFB_VOTE_NOREGVOTES", "No Registered User Votes" );
define( "_AM_WFB_VOTE_NOUNREGVOTES", "No Unregistered User Votes" );
define( "_AM_WFB_VOTE_VOTEDELETED", "Vote data deleted." );
define( "_AM_WFB_VOTE_ID", "ID" );
define( "_AM_WFB_VOTE_FILETITLE", "Book Title" );
define( "_AM_WFB_VOTE_DISPLAYVOTES", "Voting Data Information" );
define( "_AM_WFB_VOTE_NOVOTES", "No User Votes to display" );
define( "_AM_WFB_VOTE_DELETE", "No User Votes to display" );
define( "_AM_WFB_VOTE_DELETEDSC", "<b>Deletes</b> the chosen vote information from the database." );
define( "_AM_WFB_VOTEDELETED", "Selected Vote removed database updated" );

define( "_AM_WFB_VOTE_USERAVG", "Average User Rating" );
define( "_AM_WFB_VOTE_TOTALRATE", "Total Votes" );
define( "_AM_WFB_VOTE_MAXRATE", "Max Item Vote" );
define( "_AM_WFB_VOTE_MINRATE", "Min Item Vote" );
define( "_AM_WFB_VOTE_MOSTVOTEDTITLE", "Most Voted For" );
define( "_AM_WFB_VOTE_LEASTVOTEDTITLE", "Least Voted For" );
define( "_AM_WFB_VOTE_MOSTVOTERSUID", "Most Active Voter" );
define( "_AM_WFB_VOTE_REGISTERED", "Registered Votes" );
define( "_AM_WFB_VOTE_NONREGISTERED", "Anonymous Votes" );
// Modifications
define( "_AM_WFB_MOD_TOTMODREQUESTS", "Total Modification Requests: " );
define( "_AM_WFB_MOD_MODREQUESTS", "Modified Books" );
define( "_AM_WFB_MOD_MODREQUESTSINFO", "Modified Books Information" );
define( "_AM_WFB_MOD_MODID", "ID" );
define( "_AM_WFB_MOD_MODTITLE", "Title" );
define( "_AM_WFB_MOD_MODPOSTER", "Original Poster: " );
define( "_AM_WFB_MOD_DATE", "Submitted" );
define( "_AM_WFB_MOD_NOMODREQUEST", "There are no requests that match this critera" );
define( "_AM_WFB_MOD_TITLE", "Book Title: " );
define( "_AM_WFB_MOD_LID", "Book ID: " );
define( "_AM_WFB_MOD_CID", "Category: " );
define( "_AM_WFB_MOD_URL", "Book Url (no affiliate link!): " );
define( "_AM_WFB_MOD_PUBLISHER", "Publisher: " );
define( "_AM_WFB_MOD_FORUMID", "Forum: " );
define( "_AM_WFB_MOD_SCREENSHOT", "Screenshot Image: " );
define( "_AM_WFB_MOD_HOMEPAGE", "Home Page: " );
define( "_AM_WFB_MOD_HOMEPAGETITLE", "Home Page Title: " );
define( "_AM_WFB_MOD_SHOTIMAGE", "Screenshot Image: " );
define( "_AM_WFB_MOD_DESCRIPTION", "Description: " );
define( "_AM_WFB_MOD_MODIFYSUBMITTER", "Submitter: " );
define( "_AM_WFB_MOD_MODIFYSUBMIT", "Submitter" );
define( "_AM_WFB_MOD_PROPOSED", "Proposed book Details" );
define( "_AM_WFB_MOD_ORIGINAL", "Orginal book Details" );
define( "_AM_WFB_MOD_REQDELETED", "Modification request removed from the database" );
define( "_AM_WFB_MOD_REQUPDATED", "Selected book Modified and Database Updated Successfully" );
define( '_AM_WFB_MOD_VIEW', 'View' );
// Link management
define( "_AM_WFB_LINK_ID", "Book ID: " );
define( "_AM_WFB_LINK_IP", "Uploaders IP Address: " );
define( "_AM_WFB_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Allowed Admin Book Extensions</b>:</div>" );
define( "_AM_WFB_LINK_MODIFYFILE", "Modify Book Information" );
define( "_AM_WFB_LINK_CREATENEWFILE", "Create New Book" );
define( "_AM_WFB_LINK_TITLE", "Book Title: " );
define( "_AM_WFB_LINK_DLURL", "Link URL (no afiliate!): " );
define( "_AM_WFB_LINK_DIRCA", " Internet Content Rating: " );
define( "_AM_WFB_LINK_DESCRIPTION", "Book Description: " );
define( "_AM_WFB_LINK_CATEGORY", "Book Main Category: " );
define( "_AM_WFB_LINK_FILESSTATUS", " Set book offline?<br /><br /><span style='font-weight: normal;'>book will not be viewable to all users.</span>" );
define( "_AM_WFB_LINK_SETASUPDATED", " Set book Status as Updated?<br /><br /><span style='font-weight: normal;'>book will Display updated icon.</span>" );
define( "_AM_WFB_LINK_SHOTIMAGE", "Book Screenshot Image: " );
define( "_AM_WFB_LINK_DISCUSSINFORUM", "Add Discuss in this Forum?" );
define( "_AM_WFB_LINK_PUBLISHDATE", "Book Publish Date:" );
define( "_AM_WFB_LINK_EXPIREDATE", "Book Expire Date:" );
define( "_AM_WFB_LINK_CLEARPUBLISHDATE", "<br /><br />Remove Publish date:" );
define( "_AM_WFB_LINK_CLEAREXPIREDATE", "<br /><br />Remove Expire date:" );
define( "_AM_WFB_LINK_PUBLISHDATESET", " Publish date set: " );
define( "_AM_WFB_LINK_SETDATETIMEPUBLISH", " Set the date/time of publish" );
define( "_AM_WFB_LINK_SETDATETIMEEXPIRE", " Set the date/time of expire" );
define( "_AM_WFB_LINK_SETPUBLISHDATE", "<b>Set Publish Date: </b>" );
define( "_AM_WFB_LINK_SETNEWPUBLISHDATE", "<b>Set New Publish Date: </b><br />Published:" );
define( "_AM_WFB_LINK_SETPUBDATESETS", "<b>Publish Date Set: </b><br />Publishes On Date:" );
define( "_AM_WFB_LINK_EXPIREDATESET", " Expire date set: " );
define( "_AM_WFB_LINK_SETEXPIREDATE", "<b>Set Expire Date: </b>" );
define( "_AM_WFB_LINK_DELEDITMESS", "Delete Broken Report?<br /><br /><span style='font-weight: normal;'>When you choose <b>YES</b> the Broken Report will automatically deleted and you confirm that the book link now works again.</span>" );
define( "_AM_WFB_LINK_MUSTBEVALID", "Screenshot image must be a valid image link under %s directory (ex. shot.gif). Leave it blank if there is no image link." );
define( "_AM_WFB_LINK_EDITAPPROVE", "Approve book:" );
define( "_AM_WFB_LINK_NEWFILEUPLOAD", "New Book Created and Database Updated Successfully" );
define( "_AM_WFB_LINK_FILEMODIFIEDUPDATE", "Selected Book Modified and Database Updated Successfully" );
define( "_AM_WFB_LINK_REALLYDELETEDTHIS", "Really delete the selected book?" );
define( "_AM_WFB_LINK_FILEWASDELETED", "Book %s successfully removed from the database!" );
define( "_AM_WFB_LINK_FILEAPPROVED", "Book Approved and Database Updated Successfully" );
define( "_AM_WFB_LINK_CREATENEWSSTORY", "<b>Create News Story From book</b>" );
define( "_AM_WFB_LINK_SUBMITNEWS", "Submit New book as News item?" );
define( "_AM_WFB_LINK_NEWSCATEGORY", "Select News Category to submit News:" );
define( "_AM_WFB_LINK_NEWSTITLE", "News Title:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leave Blank to use Book Title</span></div>" );
define( "_AM_WFB_LINK_PUBLISHER", "Book Publisher Name: " );

/**
 * Broken links defines
 */
define( "_AM_WFB_SBROKENSUBMIT", "Broken: " );
define( "_AM_WFB_BROKEN_FILE", "Broken Reports" );
define( "_AM_WFB_BROKEN_FILEIGNORED", "Broken report ignored and successfully removed from the database!" );
define( "_AM_WFB_BROKEN_NOWACK", "Acknowledged status changed and database updated!" );
define( "_AM_WFB_BROKEN_NOWCON", "Confirmed status changed and database updated!" );
define( "_AM_WFB_BROKEN_REPORTINFO", "Broken Report Information" );
define( "_AM_WFB_BROKEN_REPORTSNO", "Broken Reports Waiting:" );
define( "_AM_WFB_BROKEN_IGNOREDESC", "<b>Ignores</b> the report and only deletes the broken booklink report." );
define( "_AM_WFB_BROKEN_DELETEDESC", "<b>Deletes</b> the reported link data and broken link reports for the book." );
define( "_AM_WFB_BROKEN_EDITDESC", "<b>Edit</b> the booklink to fix the problem." );
define( "_AM_WFB_BROKEN_ACKDESC", "<b>Acknowledged</b> Set Acknowledged genre of broken file report." );
define( "_AM_WFB_BROKEN_CONFIRMDESC", "<b>Confirmed</b> Set confirmed genre of broken booklink report." );
define( "_AM_WFB_BROKEN_ACKNOWLEDGED", "Acknowledged" );
define( "_AM_WFB_BROKEN_DCONFIRMED", "Confirmed" );

define( "_AM_WFB_BROKEN_ID", "ID" );
define( "_AM_WFB_BROKEN_TITLE", "Title" );
define( "_AM_WFB_BROKEN_REPORTER", "Reporter" );
define( "_AM_WFB_BROKEN_FILESUBMITTER", "Submitter" );
define( "_AM_WFB_BROKEN_DATESUBMITTED", "Submit Date" );
define( "_AM_WFB_BROKEN_ACTION", "Action" );
define( "_AM_WFB_BROKEN_NOFILEMATCH", "There are no Broken reports that match this critera" );
define( "_AM_WFB_BROKENFILEDELETED", "link removed from database and broken report removed" );
/**
 * About defines
 */
define( "_AM_WFB_BY", "by" );
// block defines
define( "_AM_WFB_BADMIN", "Block Administration" );
define( "_AM_WFB_BLKDESC", "Description" );
define( "_AM_WFB_TITLE", "Title" );
define( "_AM_WFB_SIDE", "Alignment" );
define( "_AM_WFB_WEIGHT", "Weight" );
define( "_AM_WFB_VISIBLE", "Visible" );
define( "_AM_WFB_ACTION", "Action" );
define( "_AM_WFB_SBLEFT", "Left" );
define( "_AM_WFB_SBRIGHT", "Right" );
define( "_AM_WFB_CBLEFT", "Center Left" );
define( "_AM_WFB_CBRIGHT", "Center Right" );
define( "_AM_WFB_CBCENTER", "Center Middle" );
define( "_AM_WFB_ACTIVERIGHTS", "Active Rights" );
define( "_AM_WFB_ACCESSRIGHTS", "Access Rights" );
// image admin icon
define( "_AM_WFB_ICO_EDIT", "Edit This Item" );
define( "_AM_WFB_ICO_DELETE", "Delete This Item" );
define( "_AM_WFB_ICO_RESOURCE", "Edit This Resource" );

define( "_AM_WFB_ICO_ONLINE", "Online" );
define( "_AM_WFB_ICO_OFFLINE", "Offline" );
define( "_AM_WFB_ICO_APPROVED", "Approved" );
define( "_AM_WFB_ICO_NOTAPPROVED", "Not Approved" );

define( "_AM_WFB_ICO_LINK", "Related book" );
define( "_AM_WFB_ICO_URL", "Add Related URL" );
define( "_AM_WFB_ICO_ADD", "Add" );
define( "_AM_WFB_ICO_APPROVE", "Approve" );
define( "_AM_WFB_ICO_STATS", "Stats" );
define( "_AM_WFB_ICO_VIEW", "View this item" );

define( "_AM_WFB_ICO_IGNORE", "Ignore" );
define( "_AM_WFB_ICO_ACK", "Broken Report Acknowledged" );
define( "_AM_WFB_ICO_REPORT", "Acknowledge Broken Report?" );
define( "_AM_WFB_ICO_CONFIRM", "Broken Report Confirmed" );
define( "_AM_WFB_ICO_CONBROKEN", "Confirm Broken Report?" );
define( "_AM_WFB_ICO_RES", "Edit Resources/Links for this Item" );
define( "_AM_WFB_MOD_URLRATING", "Interent Content Rating:" );
// Alternate category
define( "_AM_WFB_ALTCAT_CREATEF", "Add Alternate Category" );
define( "_AM_WFB_MALTCAT", "Alternate Category Management" );
define( "_AM_WFB_ALTCAT_MODIFYF", "Alternate Category Management" );
define( "_AM_WFB_ALTCAT_INFOTEXT", "<ul><li>Alternate categories can be added or removed easily via this form.</li></ul>" );
define( '_AM_WFB_ALTCAT_CREATED', 'Alternate categories was saved!' );

define( "_AM_WFB_MRESOURCES", "Resource Management" );
define( "_AM_WFB_RES_CREATED", "Resource Management" );
define( "_AM_WFB_RES_ID", "ID" );
define( "_AM_WFB_RES_DESC", "Description" );
define( "_AM_WFB_RES_NAME", "Resource Name" );
define( "_AM_WFB_RES_TYPE", "Resource Type" );
define( "_AM_WFB_RES_USER", "User" );
define( "_AM_WFB_RES_CREATEF", "Add Resource" );
define( "_AM_WFB_RES_MODIFYF", "Modify Resource" );
define( "_AM_WFB_RES_NAMEF", "Resource name:" );
define( "_AM_WFB_RES_DESCF", "Resource description:" );
define( "_AM_WFB_RES_URLF", "Resource URL:" );
define( "_AM_WFB_RES_ITEMIDF", "Resource Item ID:" );
define( "_AM_WFB_RES_INFOTEXT", "<ul><li>New resources can be added, edited or removed easily via this form.</li>
	<li>List all resources linked to a book</li>
	<li>Modify resource name and description</li></ul>
	" );
define( "_AM_WFB_LISTBROKEN", "Displays Books that are possibly broken. NB: These results may not be accurate and should be taken as a rough guide.<br /><br />Please check the link does exist first before any action taken.<br /><br />" );
define( "_AM_WFB_PINGTIMES", "Displays the first estimated round ping time to each booklink.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />" );

define( "_AM_WFB_NO_FORUM", "No forum Selected" );

define( "_AM_WFB_PERM_RATEPERMISSIONS", "Rate Permissions" );
define( "_AM_WFB_PERM_RATEPERMISSIONS_TEXT", "Select the groups that can rate a book in the selected categories." );

define( "_AM_WFB_PERM_AUTOPERMISSIONS", "Auto Approve Books" );
define( "_AM_WFB_PERM_AUTOPERMISSIONS_TEXT", "Select the groups that will have new books auto approved without admin intervention." );

define( "_AM_WFB_PERM_SPERMISSIONS", "Submitter Permissions" );
define( "_AM_WFB_PERM_SPERMISSIONS_TEXT", "Select the groups who can submit new books to selected categories." );

define( "_AM_WFB_PERM_APERMISSIONS", "Moderator Groups" );
define( "_AM_WFB_PERM_APERMISSIONS_TEXT", "Select the groups who have moderator privligages for the selected categories." );

// added by McDonald. Adjusted by Shine
define( "_AM_WFB_COUNTRY", "Country:" );
define( "_AM_WFB_KEYWORDS", "Keywords:" );
define( "_AM_WFB_KEYWORDS_NOTE", "Keywords should be seperated with a comma (keyword1, keyword2, keyword3, ..)" );
define( "_AM_WFB_CHECKURL", "Check URL" );
define( "_AM_WFB_CATTITLE", "Category" );
define( "_AM_WFB_LINK_GOOGLEMAP", "Google Maps" ); //NOT IN USE
define( "_AM_WFB_LINK_PARTNERLINK", "URL Order Book (partnerlink!)" ); // Yahoo Kaarten
define( "_AM_WFB_LINK_SCRIPTIESLINK", "Open File" ); // MS Live Kaarten
define( "_AM_WFB_LINK_CHECKPARTNERLINK", "Check partnerlink" );
define( "_AM_WFB_LINK_CHECKSCRIPTIESLINK", "Check filelink" );
define( "_AM_WFB_UITGEVER", "Book Publisher" );
define( "_AM_WFB_PRICE", "Price" );
define( "_AM_WFB_SCHRIJVER", "Writer" );
define( "_AM_WFB_GENRE", "Genre/Type" );
define( "_AM_WFB_BLZ", "Pages" );
define( "_AM_WFB_ISBN", "ISBN/EAN" );
define( "_AM_WFB_JAARGANG", "Year" );

?>