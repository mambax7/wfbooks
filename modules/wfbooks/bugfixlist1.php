Bug fix list history:

=========================================================
21.06.2005   1.0.3
=========================================================
fixed bug: Smarty error Error [Xoops]: Smarty error: [in db:wfbooks_linkload.html line 41]: syntax error: unidentified token '=' (cosmodrum).
fixed bug: SQL file seems to be for mysql 4.x (contains DEFAULT CHARSET entry), Fix for backward compat with older versions of Mysql.
fixed bug: Updated String version in Xoops_version.php to show correct module version number.
fixed bug: resource image width issue in wfbooks_singlelink.html.
fixed bug: Resource types, updating the above should now see resource types work in admin and should be usable.
fixed bug: Resource types, changed icon to match the proper icon in the admin link index.
fixed bug: Resource types will no longer be taken into account when rendering veiwcat.php. Should cut down on un-needed mysql queries
during this operation.

Updated: Added 'onUpdate' to Xoops_version.php to allow for WF-Resources tables to be added to the database.
Updated: cleaned some html in indexpage.php for 'Index Page Information'.

=========================================================
18.06.2005   1.0.2
=========================================================
fixed bug: search not working correct due to missing function.
fixed bug: found remaining non 'group' function and used correct function.

=========================================================
16.06.2005   1.0.2
=========================================================
fixed bug: submit feature showing regardless of permissions
fixed bug: wrong amount of links displayed in main index
fixed bug: in some cases non published links would show in listing
fixed bug: incorrect count shown depending on sub sections
fixed bug: cross category permissions now correctly adhered too.
fixed bug: page navigation should not show when more than 10 links per category.
fixed bug: fixed text not showing as html.
fixed bug: undefined function group() in blocks fixed.
fixed bug: fixed bug for resource update. Resource tables should be installed on install/update
 
Updated: permission system updated to use Xoops group permissions
Updated: Rating permissions for each category.

Added feature: Auto approve feature for submissions for each category
Added feature: Moderator permissions and abilites for each category
Added feature: Moderator permissions and abilites


=========================================================
26.03.2005   1.0.1 RC
=========================================================
Added feature: Check for Broken links and the ability to edit or delete them
Added feature: Check ping times of links (in Admin )
Added feature: Auto approve links by selected groups
Added feature: Category image in category listing (Thanx Gigaphp)

Updated: Add new version of GIJoes Admin Block hack
Updated:New Icon Set By Xpider (Please read in the about us regarding these images use)

fixed bug: Fixed redeclared thumb image (Thanks to PD-Dreams)
fixed bug: Fixed Sql install error.
fixed bug: Fixed cannot redclare wllists.
fixed bug: fixed the page navigation in category listings
fixed bug: Fixed some action icons navigation, not deleting or editing items when supposed to.
fixed bug: "Notify me when this file is approved"
fixed bug: Approving item no longer give white page.
fixed bug: Submission and Moderator bugs
fixed bug: category images where not sized to choosen sizes
fixed bug: search permissions not working correctly
fixed bug: smilies, images etc should work in the description of the indexpage and category listings
Many more small bugs fixed......


