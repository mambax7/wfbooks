<?php
/**
 * $Id: admin.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-books
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
define( "_AM_WFB_WARNINSTALL1", "WAARSCHUWING: Directorie %s bestaat nog op uw server. <br />Verwijder deze directorie ivm veiligheids overwegingen." );
define( "_AM_WFB_WARNINSTALL2", "WAARSCHUWING: Bestand %s bestaat op uw server. <br />Verwijder dit bestand ivm veiligheids overwegingen." );
define( "_AM_WFB_WARNINSTALL3", "WAARSCHUWING: Directorie %s bestaat niet op uw server. <br />Deze Directorie is nodig voor WF-Books." );

define( "_AM_WFB_MODULE_NAME", "WF-Books" );

define( "_AM_WFB_BMODIFY", "Aanpassen" );
define( "_AM_WFB_BDELETE", "Verwijderen" );
define( "_AM_WFB_BCREATE", "Aanmaken" );
define( "_AM_WFB_BADD", "Toevoegen" );
define( "_AM_WFB_BAPPROVE", "Goedkeuren" );
define( "_AM_WFB_BIGNORE", "Negeren" );
define( "_AM_WFB_BCANCEL", "Annuleren" );
define( "_AM_WFB_BSAVE", "Opslaan" );
define( "_AM_WFB_BRESET", "Reset" );
define( "_AM_WFB_BMOVE", "Verplaats boeken" );
define( "_AM_WFB_BUPLOAD", "Uploaden" );
define( "_AM_WFB_BDELETEIMAGE", "Verwijder geselecteerde afbeelding" );
define( "_AM_WFB_BRETURN", "Ga terug naar waar u was!" );
define( "_AM_WFB_DBERROR", "Database toegang fout: Rapporteer deze fout aan de WF-Project Website" );
// Other Options
define( "_AM_WFB_TEXTOPTIONS", "Tekst opties:" );
define( "_AM_WFB_DISABLEHTML", " Uitschakelen HTML tags" );
define( "_AM_WFB_DISABLESMILEY", " Uitschakelen Smilies" );
define( "_AM_WFB_DISABLEXCODE", " Uitschakelen XOOPS codes" );
define( "_AM_WFB_DISABLEIMAGES", " Uitschakelen afbeeldingen" );
define( "_AM_WFB_DISABLEBREAK", " Gebruik XOOPS linebreak omzetting?" );
define( "_AM_WFB_UPLOADFILE", "Link succesvol geupload" );
define( "_AM_WFB_NOMENUITEMS", "Geen menu-items in het menu" );
// Admin Bread crumb
define( "_AM_WFB_PREFS", "Instellingen" );
define( "_AM_WFB_BUPDATE", "Module bijwerken" );
define( "_AM_WFB_BINDEX", "Hoofd index" );
define( "_AM_WFB_BPERMISSIONS", "Rechten" );
// define( "_AM_WFB_BLOCKADMIN", "Blocks" );
define( "_AM_WFB_BLOCKADMIN", "Blokinstellingen" );
define( "_AM_WFB_GOMODULE", "Ga naar module" );
define( "_AM_WFB_ABOUT", "Over" );
// Admin Summary
define( "_AM_WFB_SCATEGORY", "Categorie: " );
define( "_AM_WFB_SFILES", "Boeken: " );
define( "_AM_WFB_SNEWFILESVAL", "Ingezonden: " );
define( "_AM_WFB_SMODREQUEST", "Aangepast: " );
define( "_AM_WFB_SREVIEWS", "Beoordelingen: " );

// Admin Main Menu
define( "_AM_WFB_MCATEGORY", "Categorie management" );
define( "_AM_WFB_MLINKS", "Boek management" );
define( "_AM_WFB_MLISTBROKEN", "Index Defecte Boeken" );
define( "_AM_WFB_MLISTPINGTIMES", "Linken pingtijd index" );
define( "_AM_WFB_INDEXPAGE", "Management Index Pagina" );
define( "_AM_WFB_MCOMMENTS", "Commenta(a)r(en)" );
define( "_AM_WFB_MVOTEDATA", "Stem data" );
define( "_AM_WFB_MUPLOADS", "Afbeelding upload" );

// Catgeory defines
define( "_AM_WFB_CCATEGORY_CREATENEW", "Nieuwe categorie" );
define( "_AM_WFB_CCATEGORY_MODIFY", "Categorie aanpassen" );
define( "_AM_WFB_CCATEGORY_MOVE", "Verplaats Categorie boeken" );
define( "_AM_WFB_CCATEGORY_MODIFY_TITLE", "categorie titel:" );
define( "_AM_WFB_CCATEGORY_MODIFY_FAILED", "Boeken verplaatsen mislukt: kan niet verplaatsen naar deze categorie" );
define( "_AM_WFB_CCATEGORY_MODIFY_FAILEDT", "Boeken verplaatsen mislukt: Kan deze categorie niet vinden" );
define( "_AM_WFB_CCATEGORY_MODIFY_MOVED", "Boeken verplaatst en database succesvol geupdate" );
define( "_AM_WFB_CCATEGORY_CREATED", "Nieuwe categorie aangemaakt en database succesvol geupdate" );
define( "_AM_WFB_CCATEGORY_MODIFIED", "Geselecteerde categorie aangemaakt en database succesvol geupdate" );
define( "_AM_WFB_CCATEGORY_DELETED", "Geselecteerde categorie verwijderd en database succesvol geupdate" );
define( "_AM_WFB_CCATEGORY_AREUSURE", "Waarschuwing: Deze categorie en alle boekvermeldingen en inhoud verwijderen?" );
define( "_AM_WFB_CCATEGORY_NOEXISTS", "Maak eerst een categorie aan voordat een boek kan worden toegevoegd" );
define( "_AM_WFB_FCATEGORY_GROUPPROMPT", "Categorie toegangsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecteer gebruikersgroepen die toegang hebben tot deze categorie.</span></div>" );
define( "_AM_WFB_FCATEGORY_SUBGROUPPROMPT", "Categorie inzendrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecteer gebruikersgropen die rechten hebben om nieuwe boeken voor deze categorie in te zenden.</span></div>" );
define( "_AM_WFB_FCATEGORY_MODGROUPPROMPT", "Categorie aanpassingsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecteer gebruikersgroepen die rechten hebben om deze categorie te beheren.</span></div>" );

define( "_AM_WFB_FCATEGORY_TITLE", "Categorie titel:" );
define( "_AM_WFB_FCATEGORY_WEIGHT", "Categorie volgorde:" );
define( "_AM_WFB_FCATEGORY_SUBCATEGORY", "Instellen als sub-categorie van:" );
define( "_AM_WFB_FCATEGORY_CIMAGE", "Selecteer categorie afbeelding:" );
define( "_AM_WFB_FCATEGORY_DESCRIPTION", "Categorie omschrijving:" );
define( "_AM_WFB_FCATEGORY_SUMMARY", "Categorie samenvatting:" );
/**
 * Index page Defines
 */
define( "_AM_WFB_IPAGE_UPDATED", "Indexpagina aangepast en database succelvol geupdate!" );
define( "_AM_WFB_IPAGE_INFORMATION", "Indexpagina informatie" );
define( "_AM_WFB_IPAGE_MODIFY", "Indexpagina aanpassen" );
define( "_AM_WFB_IPAGE_CIMAGE", "Index afbeelding:" );
define( "_AM_WFB_IPAGE_CTITLE", "Index Titel:" );
define( "_AM_WFB_IPAGE_CHEADING", "Index koptekst:" );
define( "_AM_WFB_IPAGE_CHEADINGA", "Koptekst uitlijning:" );
define( "_AM_WFB_IPAGE_CFOOTER", "Index voettekst:" );
define( "_AM_WFB_IPAGE_CFOOTERA", "Voettekst uitlijning:" );
define( "_AM_WFB_IPAGE_CLEFT", "Uitlijnen links" );
define( "_AM_WFB_IPAGE_CCENTER", "Uitlijnen midden" );
define( "_AM_WFB_IPAGE_CRIGHT", "Uitlijnen rechts" );
/**
 * Permissions defines
 */
define( "_AM_WFB_PERM_MANAGEMENT", "Rechten instellingen" );
define( "_AM_WFB_PERM_PERMSNOTE", "<div><b>Opmerking:</b> Stel hier de juiste rechten in, anders kunnen gebruikersgroepen mogelijk bepaalde boekvermeldingen en/of blokken niet of wel zien. Let tevens op de algemene boekmodule toegangsrechten! Om deze in te stellen ga naar <b>System admin > Gebruikersgroepen</b>, kies de gewenste gebruikersgroep en selecteer de checkboxen om de toegangrechten toe te wijzen.</div>" );
define( "_AM_WFB_PERM_CPERMISSIONS", "categorie rechten" );
define( "_AM_WFB_PERM_CSELECTPERMISSIONS", "Selecteer de categoriën die alle groepen mogen zien" );
define( "_AM_WFB_PERM_CNOCATEGORY", "Kan geen rechten instellen: Er zijn geen categorien aangemaakt!" );
define( "_AM_WFB_PERM_FPERMISSIONS", "Boekvermeldings rechten" );
define( "_AM_WFB_PERM_FNOFILES", "Kan geen rechten instellen: er zijn geen boekvermeldingen aangemaakt!" );
define( "_AM_WFB_PERM_FSELECTPERMISSIONS", "Selecteer boeken die alle groepen mogen zien" );
/**
 * Upload defines
 */
define( "_AM_WFB_LINK_IMAGEUPLOAD", "Afbeelding succesvol geupload" );
define( "_AM_WFB_LINK_NOIMAGEEXIST", "FOUT: geen bestand geselecteerd om te uploaden. Probeer het nogmaals!" );
define( "_AM_WFB_LINK_IMAGEEXIST", "Afbeelding bestaat al in he uploadgedeelte!" );
define( "_AM_WFB_LINK_FILEDELETED", "Boekvermelding is verwijderd." );
define( "_AM_WFB_LINK_FILEERRORDELETE", "FOUT boekvermelding verwijderen: Boekvermelding is niet gevonden op de server." );
define( "_AM_WFB_LINK_NOFILEERROR", "FOUT Boekvermelding verwijderen: Geen boekvermelding geselecteerd om te verwijderen." );
define( "_AM_WFB_LINK_DELETEFILE", "WAARSCHUWING: deze boek-afbeelding verwijderen?" );
define( "_AM_WFB_LINK_IMAGEINFO", "Server status" );
define( "_AM_WFB_LINK_SPHPINI", "<b>Informatie uit PHP.ini link:</b>" );
define( "_AM_WFB_LINK_SAFEMODESTATUS", "Veilige mode status: " );
define( "_AM_WFB_LINK_REGISTERGLOBALS", "Register globals: " );
define( "_AM_WFB_LINK_SERVERUPLOADSTATUS", "Server uploads status: " );
define( "_AM_WFB_LINK_MAXUPLOADSIZE", "Max upload grootte toegestaan: " );
define( "_AM_WFB_LINK_MAXPOSTSIZE", "Max inzending grootte toegestaan: " );
define( "_AM_WFB_LINK_SAFEMODEPROBLEMS", " (Dit kan problemen veroorzaken)" );
define( "_AM_WFB_LINK_GDLIBSTATUS", "GD Library support: " );
define( "_AM_WFB_LINK_GDLIBVERSION", "GD Library versie: " );
define( "_AM_WFB_LINK_GDON", "<b>ingeschakeld</b> (Thumbs Nails beschikbaar)" );
define( "_AM_WFB_LINK_GDOFF", "<b>uitgeschakeld</b> (Thumb Nails niet beschikbaar)" );
define( "_AM_WFB_LINK_OFF", "<b>uit</b>" );
define( "_AM_WFB_LINK_ON", "<b>aan</b>" );
define( "_AM_WFB_LINK_CATIMAGE", "categorie afbeeldingen" );
define( "_AM_WFB_LINK_SCREENSHOTS", "Screenshot afbeeldingen" );
define( "_AM_WFB_LINK_MAINIMAGEDIR", "Hoofd afbeeldingen" );
define( "_AM_WFB_LINK_FCATIMAGE", "Pad naar Categorie afbeeldingen" );
define( "_AM_WFB_LINK_FSCREENSHOTS", "Pad naar Screenshot afbeeldingen" );
define( "_AM_WFB_LINK_FMAINIMAGEDIR", "Pad naar Hoofdafbeeldingen" );
define( "_AM_WFB_LINK_FUPLOADIMAGETO", "Upload afbeelding: " );
define( "_AM_WFB_LINK_FUPLOADPATH", "Upload pad: " );
define( "_AM_WFB_LINK_FUPLOADURL", "Upload URL/Bestemming: " );
define( "_AM_WFB_LINK_FOLDERSELECTION", "Selecteer uw upload bestemming:" );
define( "_AM_WFB_LINK_FSHOWSELECTEDIMAGE", "Toon geselecteerde afbeelding:" );
define( "_AM_WFB_LINK_FUPLOADIMAGE", "Upload nieuwe afbeelding naar geselecteerde bestemming:" );

// Main Index defines
define( "_AM_WFB_MINDEX_LINKSUMMARY", "Module administatie samenvatting" );
define( "_AM_WFB_MINDEX_PUBLISHEDLINK", "Gepubliceerde boeken:" );
define( "_AM_WFB_MINDEX_AUTOPUBLISHEDLINK", "Automatisch gepubliceerde boeken:" );
define( "_AM_WFB_MINDEX_AUTOEXPIRE", "Automatisch verlopen boeken:" );
define( "_AM_WFB_MINDEX_EXPIRED", "Verlopen boeken:" );
define( "_AM_WFB_MINDEX_OFFLINELINK", "Offline boeken:" );
define( "_AM_WFB_MINDEX_ID", "ID" );
define( "_AM_WFB_MINDEX_TITLE", "Titel Boek" );
define( "_AM_WFB_MINDEX_POSTER", "Inzender" );
define( "_AM_WFB_MINDEX_ONLINE", "Status" );
define( "_AM_WFB_MINDEX_ONLINESTATUS", "Online status" );
define( "_AM_WFB_MINDEX_PUBLISH", "Publiceren" );
define( "_AM_WFB_MINDEX_PUBLISHED", "Geplaatst op" );
define( "_AM_WFB_MINDEX_EXPIRE", "Verlopen" );
define( "_AM_WFB_MINDEX_NOTSET", "Geen datum ingesteld" );
define( "_AM_WFB_MINDEX_SUBMITTED", "Inzenddatum" );

define( "_AM_WFB_MINDEX_ACTION", "Actie" );
define( "_AM_WFB_MINDEX_NOLINKSFOUND", "OPMERKING: Er zijn geen boekvermeldingen overeenkomend met deze criteria" );
define( "_AM_WFB_MINDEX_PAGE", "<b>Pagina:<b> " );
define( '_AM_WFB_MINDEX_PAGEINFOTXT', '<ul><li>WF-Books Hoofdpagina details.</li><li>U kunt eenvoudig veranderingen aanbrengen aan het logo, de afbeelding, de kop en voetteksten om de Index pagina aan uw wensen te laten voldoen.</li></ul><br />Opmerking: Het gekozen logo zal door de gehele WF-Books module worden toegepast.' );
define( "_AM_WFB_MINDEX_RESPONSE", "Reactietijd" );
// Submitted Links
define( "_AM_WFB_SUB_SUBMITTEDFILES", "Ingezonden boeken" );
define( "_AM_WFB_SUB_FILESWAITINGINFO", "Wachtende boeken informatie" );
define( "_AM_WFB_SUB_FILESWAITINGVALIDATION", "Boeken wachtend op goedkeuring: " );
define( "_AM_WFB_SUB_APPROVEWAITINGFILE", "Nieuwe boeken informatie <b>accepteren zonder goedkeuring</b>." );
define( "_AM_WFB_SUB_EDITWAITINGFILE", "<b>Wijzig</b> nieuwe boek informatie en keur daarna goed." );
define( "_AM_WFB_SUB_DELETEWAITINGFILE", "<b>Verwijder</b> nieuwe boek informatie." );
define( "_AM_WFB_SUB_NOFILESWAITING", "Er zijn geen boekvermeldingen overeenkomend met deze criteria gevonden." );
define( "_AM_WFB_SUB_NEWFILECREATED", "Nieuwe boekvermelding aangemaakt en database succesvol bijgewerkt." );
// Vote Information
define( "_AM_WFB_VOTE_RATINGINFOMATION", "Stemmen informatie" );
define( "_AM_WFB_VOTE_TOTALVOTES", "Totaal aantal stemmen: " );
define( "_AM_WFB_VOTE_REGUSERVOTES", "Stemmen van geregistreerde gebruikers: %s" );
define( "_AM_WFB_VOTE_ANONUSERVOTES", "Stemmen van anonieme gebruikers: %s" );
define( "_AM_WFB_VOTE_USER", "Gebruiker" );
define( "_AM_WFB_VOTE_IP", "IP Adres" );
define( "_AM_WFB_VOTE_DATE", "Ingezonden op" );
define( "_AM_WFB_VOTE_RATING", "Beoordeling" );
define( "_AM_WFB_VOTE_NOREGVOTES", "Geen stemmen van geregistreerde gebruikers" );
define( "_AM_WFB_VOTE_NOUNREGVOTES", "Geen stemmen van anonieme gebruikers" );
define( "_AM_WFB_VOTE_VOTEDELETED", "Stem data verwijderd." );
define( "_AM_WFB_VOTE_ID", "ID" );
define( "_AM_WFB_VOTE_FILETITLE", "Titel Boek" );
define( "_AM_WFB_VOTE_DISPLAYVOTES", "Stem data informatie" );
define( "_AM_WFB_VOTE_NOVOTES", "Geen stemmen van geregistreerde gebruikers aanwezig" );
define( "_AM_WFB_VOTE_DELETE", "Geen stemmen van geregistreerde gebruikers te verwijderen" ); //GOED?
define( "_AM_WFB_VOTE_DELETEDSC", "<b>Verwijder</b> de gekozen stem informatie uit de database." );
define( "_AM_WFB_VOTEDELETED", "Geselecteerde beoordeling verwijderd, database is bijgewerkt." );

define( "_AM_WFB_VOTE_USERAVG", "Gemiddelde gebruikers beoordeling" );
define( "_AM_WFB_VOTE_TOTALRATE", "Totaal aantal stemmen" );
define( "_AM_WFB_VOTE_MAXRATE", "Hoogste beoordeling" );
define( "_AM_WFB_VOTE_MINRATE", "Laagste beoordeling" );
define( "_AM_WFB_VOTE_MOSTVOTEDTITLE", "Meeste gestemd op" );
define( "_AM_WFB_VOTE_LEASTVOTEDTITLE", "Minst gestemd op" );
define( "_AM_WFB_VOTE_MOSTVOTERSUID", "Actiefste stemmer" );
define( "_AM_WFB_VOTE_REGISTERED", "Geregistreerde stemmen" );
define( "_AM_WFB_VOTE_NONREGISTERED", "Anonieme stemmen" );
// Modifications
define( "_AM_WFB_MOD_TOTMODREQUESTS", "Totaal aantal wijzigingsaanvragen: " );
define( "_AM_WFB_MOD_MODREQUESTS", "Gewijzigde boekvermeldingen" );
define( "_AM_WFB_MOD_MODREQUESTSINFO", "Gewijzigde boekvermeldings informatie" );
define( "_AM_WFB_MOD_MODID", "ID" );
define( "_AM_WFB_MOD_MODTITLE", "Titel Boek" );
define( "_AM_WFB_MOD_MODPOSTER", "Originele inzender: " );
define( "_AM_WFB_MOD_DATE", "Ingezonden op" );
define( "_AM_WFB_MOD_NOMODREQUEST", "Er zijn geen verzoeken die overeenkomen met deze criteria" );
define( "_AM_WFB_MOD_TITLE", "Titel Boek: " );
define( "_AM_WFB_MOD_LID", "link ID: " );
define( "_AM_WFB_MOD_CID", "Categorie: " );
define( "_AM_WFB_MOD_URL", "URL (let op: niet partnerlink!): " );
define( "_AM_WFB_MOD_PUBLISHER", "Uitgever: " );
define( "_AM_WFB_MOD_FORUMID", "Forum: " );
define( "_AM_WFB_MOD_SCREENSHOT", "Screenshot afbeelding: " );
define( "_AM_WFB_MOD_HOMEPAGE", "Website: " ); //Geen idee
define( "_AM_WFB_MOD_HOMEPAGETITLE", "Besteltitel: " );
define( "_AM_WFB_MOD_SHOTIMAGE", "Screenshot afbeelding: " );
define( "_AM_WFB_MOD_DESCRIPTION", "Omschrijving: " );
define( "_AM_WFB_MOD_MODIFYSUBMITTER", "Inzender: " );
define( "_AM_WFB_MOD_MODIFYSUBMIT", "Inzender" );
define( "_AM_WFB_MOD_PROPOSED", "Voorgestelde details boekvermelding" );
define( "_AM_WFB_MOD_ORIGINAL", "Orginele details boekvermelding" );
define( "_AM_WFB_MOD_REQDELETED", "Verzoek om aanpassing boekvermelding verwijderd uit de database" );
define( "_AM_WFB_MOD_REQUPDATED", "Geselecteerde boekvermelding aangepast en database succesvol bijgewerkt" );
define( '_AM_WFB_MOD_VIEW', 'Bekijken' );
// Link management
define( "_AM_WFB_LINK_ID", "Boek ID: " );
define( "_AM_WFB_LINK_IP", "IP Adres van uploader: " );
define( "_AM_WFB_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Toegestane beheerder link formaten</b>:</div>" );
define( "_AM_WFB_LINK_MODIFYFILE", "Aangepaste boek informatie" );
define( "_AM_WFB_LINK_CREATENEWFILE", "Nieuwe boekvermelding aanmaken" );
define( "_AM_WFB_LINK_TITLE", "Titel Boek: " );
define( "_AM_WFB_LINK_DLURL", "URL: " );
define( "_AM_WFB_LINK_DIRCA", " Internet inhoud beoordeling (ICR): " );
define( "_AM_WFB_LINK_DESCRIPTION", "Boek omschrijving: " );
define( "_AM_WFB_LINK_CATEGORY", "Boek Categorie: " );
define( "_AM_WFB_LINK_FILESSTATUS", " Boek offline plaatsen?<br /><br /><span style='font-weight: normal;'>boek zal niet zichbaar zijn.</span>" );
define( "_AM_WFB_LINK_SETASUPDATED", " Boek Status weergeven als bijgewerkt?<br /><br /><span style='font-weight: normal;'>Boek zal een 'update' icoon weergeven.</span>" );
define( "_AM_WFB_LINK_SHOTIMAGE", "Link screenshot afbeelding: " );
define( "_AM_WFB_LINK_DISCUSSINFORUM", "Discussieer in dit forum toevoegen?" );
define( "_AM_WFB_LINK_PUBLISHDATE", "Publicatiedatum:" );
define( "_AM_WFB_LINK_EXPIREDATE", "Verloopdatum:" );
define( "_AM_WFB_LINK_CLEARPUBLISHDATE", "<br /><br />Verwijder publicatiedatum:" );
define( "_AM_WFB_LINK_CLEAREXPIREDATE", "<br /><br />Verwijder verloopdatum:" );
define( "_AM_WFB_LINK_PUBLISHDATESET", " Instellen publicatiedatum: " );
define( "_AM_WFB_LINK_SETDATETIMEPUBLISH", " Stel de datum/tijd van publicatie in" );
define( "_AM_WFB_LINK_SETDATETIMEEXPIRE", " Stel de datum/tijd van verlopen in" );
define( "_AM_WFB_LINK_SETPUBLISHDATE", "<b>Stel publicatiedatum in: </b>" );
define( "_AM_WFB_LINK_SETNEWPUBLISHDATE", "<b>Stel nieuwe publicatiedatum in: </b><br />Gepubliceerd op:" );
define( "_AM_WFB_LINK_SETPUBDATESETS", "<b>Stel publicatiedatum in: </b><br />Gepubliceerd op:" );
define( "_AM_WFB_LINK_EXPIREDATESET", " Stel verloopdatum in: " );
define( "_AM_WFB_LINK_SETEXPIREDATE", "<b>Stel verloopdatum in: </b>" );
define( "_AM_WFB_LINK_DELEDITMESS", "Defecte boekvermelding rapportage verwijderen?<br /><br /><span style='font-weight: normal;'>Kies <b>Ja</b> en het defecte boek rapport wordt automatisch verwijderd tevens wordt bevestigd dat de vermelding weer correct werkt.</span>" );
define( "_AM_WFB_LINK_MUSTBEVALID", "Screenshot afbeelding moet een geldige afbeeldingslink zijn in het %s bestand (bijv. shot.gif). Laat het veld leeg als er geen screenshot link is." );
define( "_AM_WFB_LINK_EDITAPPROVE", "Goedkeuren boek:" );
define( "_AM_WFB_LINK_NEWFILEUPLOAD", "Nieuwe boekvermelding aangemaakt en database succesvol bijgewerkt" );
define( "_AM_WFB_LINK_FILEMODIFIEDUPDATE", "Geselecteerde boekvermelding aangepast en database succesvol bijgewerkt" );
define( "_AM_WFB_LINK_REALLYDELETEDTHIS", "Geselecteerde boekvermelding verwijderen?" );
define( "_AM_WFB_LINK_FILEWASDELETED", "Boekvermelding %s succesvol verwijderd uit de database!" );
define( "_AM_WFB_LINK_FILEAPPROVED", "Boevermelding goedgekeurd en database succesvol bijgewerkt" );
define( "_AM_WFB_LINK_CREATENEWSSTORY", "<b>Maak een nieuwsbericht van deze boekvermelding</b>" );
define( "_AM_WFB_LINK_SUBMITNEWS", "Nieuwe boekvermelding inzenden als nieuwsbericht?" );
define( "_AM_WFB_LINK_NEWSCATEGORY", "Selecteer nieuwscategorie om nieuwsbericht in te zenden:" );
define( "_AM_WFB_LINK_NEWSTITLE", "Nieuwstitel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leeg laten om de Titel van het Boek te gebruiken</span></div>" );
define( "_AM_WFB_LINK_PUBLISHER", "Inzender: " );

/**
 * Broken links defines
 */
define( "_AM_WFB_SBROKENSUBMIT", "Defect: " );
define( "_AM_WFB_BROKEN_FILE", "Defect rapportage(s)" );
define( "_AM_WFB_BROKEN_FILEIGNORED", "Defecte boeklink rapportage genegeerd en succesval verwijderd uit de database!" );
define( "_AM_WFB_BROKEN_NOWACK", "Toegekende status gewijzigd en database geupdate!" );
define( "_AM_WFB_BROKEN_NOWCON", "Gewijzigde status is bevestigd en database geupdate!" );
define( "_AM_WFB_BROKEN_REPORTINFO", "Defecte boeklink rapportage informatie" );
define( "_AM_WFB_BROKEN_REPORTSNO", "Wachtende defecte boeklink rapportage:" );
define( "_AM_WFB_BROKEN_IGNOREDESC", "<b>Negeert</b> de rapportage en verwijdert de defecte boeklink rapportage." );
define( "_AM_WFB_BROKEN_DELETEDESC", "<b>Verwijdert</b> de gerapporteerde boekvermelding en defecte boeklink rapportage van dit boek." );
define( "_AM_WFB_BROKEN_EDITDESC", "de boeklink <b>Aanpassen</b> om het probleem te verhelpen." );
define( "_AM_WFB_BROKEN_ACKDESC", "<b>Toegekend</b> Stelt de toegekende status van de defecte bestandsrapportage in." );
define( "_AM_WFB_BROKEN_CONFIRMDESC", "<b>Bevestigd</b> Stelt de status van de defecte boeklink rapportage in als bevestigd." );
define( "_AM_WFB_BROKEN_ACKNOWLEDGED", "Toegekend" );
define( "_AM_WFB_BROKEN_DCONFIRMED", "Bevestigd" );

define( "_AM_WFB_BROKEN_ID", "ID" );
define( "_AM_WFB_BROKEN_TITLE", "Titel Boek" );
define( "_AM_WFB_BROKEN_REPORTER", "Rapporteur" );
define( "_AM_WFB_BROKEN_FILESUBMITTER", "Inzender" );
define( "_AM_WFB_BROKEN_DATESUBMITTED", "Inzenddatum" );
define( "_AM_WFB_BROKEN_ACTION", "Actie" );
define( "_AM_WFB_BROKEN_NOFILEMATCH", "Geen defecte (boeklink) rapportages die overeenkomen met deze criteria" );
define( "_AM_WFB_BROKENFILEDELETED", "Boekvermelding verwijderd uit de database en defecte boeklink rapportage verwijderd" );
/**
 * About defines
 */
define( "_AM_WFB_BY", "door" );
// block defines
define( "_AM_WFB_BADMIN", "Blok administratie" );
define( "_AM_WFB_BLKDESC", "Omschrijving" );
define( "_AM_WFB_TITLE", "Titel" );
define( "_AM_WFB_SIDE", "Uitlijning" );
define( "_AM_WFB_WEIGHT", "Gewicht" );
define( "_AM_WFB_VISIBLE", "Zichtbaar" );
define( "_AM_WFB_ACTION", "Actie" );
define( "_AM_WFB_SBLEFT", "Links" );
define( "_AM_WFB_SBRIGHT", "Rechts" );
define( "_AM_WFB_CBLEFT", "Midden links" );
define( "_AM_WFB_CBRIGHT", "Midden rechts" );
define( "_AM_WFB_CBCENTER", "Midden midden" );
define( "_AM_WFB_ACTIVERIGHTS", "Actieve rechten" );
define( "_AM_WFB_ACCESSRIGHTS", "Toegangsrechten" );
// image admin icon
define( "_AM_WFB_ICO_EDIT", "Dit item aanpassen" );
define( "_AM_WFB_ICO_DELETE", "Dit item verwijderen" );
define( "_AM_WFB_ICO_RESOURCE", "Deze bron aanpassen" );

define( "_AM_WFB_ICO_ONLINE", "Online" );
define( "_AM_WFB_ICO_OFFLINE", "Offline" );
define( "_AM_WFB_ICO_APPROVED", "Goedgekeurd" );
define( "_AM_WFB_ICO_NOTAPPROVED", "Afgekeurd" );

define( "_AM_WFB_ICO_LINK", "Gerelateerde link" );
define( "_AM_WFB_ICO_URL", "Gerelateerde URL toevoegen" );
define( "_AM_WFB_ICO_ADD", "Toevoegen" );
define( "_AM_WFB_ICO_APPROVE", "Goedkeuren" );
define( "_AM_WFB_ICO_STATS", "Statistieken" );
define( "_AM_WFB_ICO_VIEW", "Bekijk dit item" );

define( "_AM_WFB_ICO_IGNORE", "Negeren" );
define( "_AM_WFB_ICO_ACK", "Gebroken rapportage toegekend" );
define( "_AM_WFB_ICO_REPORT", "Gebroken rapportage toekennen?" );
define( "_AM_WFB_ICO_CONFIRM", "Gebroken rapportage bevestigd" );
define( "_AM_WFB_ICO_CONBROKEN", "Gebroken rapportage bevestigen?" );
define( "_AM_WFB_ICO_RES", "Bronnen/linken bij dit item aanpassen" );
define( "_AM_WFB_MOD_URLRATING", "Webinhoud beoordeling (ICR):" );
// Alternate category
define( "_AM_WFB_ALTCAT_CREATEF", "Alternatieve categorie toevoegen" );
define( "_AM_WFB_MALTCAT", "Alternatieve categorie management" );
define( "_AM_WFB_ALTCAT_MODIFYF", "Alternatieve categorie management" );
define( "_AM_WFB_ALTCAT_INFOTEXT", "<ul><li>Alternatieve categorien kunnen via dit formulier eenvoudig worden toegevoegd of verwijderd.</li></ul>" );
define( '_AM_WFB_ALTCAT_CREATED', 'Alternatieve categorie(n) is(zijn) opgeslagen!' );

define( "_AM_WFB_MRESOURCES", "Bronnen management" );
define( "_AM_WFB_RES_CREATED", "Bronnen management" );
define( "_AM_WFB_RES_ID", "ID" );
define( "_AM_WFB_RES_DESC", "Omschrijving" );
define( "_AM_WFB_RES_NAME", "Bron Naam" );
define( "_AM_WFB_RES_TYPE", "Bron type" );
define( "_AM_WFB_RES_USER", "Gebruiker" );
define( "_AM_WFB_RES_CREATEF", "Bron toevoegen" );
define( "_AM_WFB_RES_MODIFYF", "Bron aanpassen" );
define( "_AM_WFB_RES_NAMEF", "Naam bron:" );
define( "_AM_WFB_RES_DESCF", "Omschrijving bron:" );
define( "_AM_WFB_RES_URLF", "Bron URL:" );
define( "_AM_WFB_RES_ITEMIDF", "Bron Item ID:" );
define( "_AM_WFB_RES_INFOTEXT", "<ul><li>Nieuwe bronnen kunnen via dit formulier eenvoudig worden toegevoegd, aangepast of verwijderd.</li>
	<li>Indexeer alle gelinkte bronnen bij een link</li>
	<li>Bronnaam en omschrijving aanpassen</li></ul>
	" );
define( "_AM_WFB_LISTBROKEN", "Toon linken die mogelijk zijn gebroken. NB: Deze gegevens zijn mogelijk niet correct/compleet en moeten worden gezien als grove handreiking.<br /><br />Controleer eerst of de link bestaat voordat actie wordt ondernomen.<br /><br />" );
define( "_AM_WFB_PINGTIMES", "Displays the first estimated round ping time to each link.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />" );

define( "_AM_WFB_NO_FORUM", "Geen forum geselecteerd" );

define( "_AM_WFB_PERM_RATEPERMISSIONS", "Beoordelingsrechten" );
define( "_AM_WFB_PERM_RATEPERMISSIONS_TEXT", "Selecteer de groepen die linken mogen beoordelen in de geselecteerde categorie(n)." );

define( "_AM_WFB_PERM_AUTOPERMISSIONS", "Linken automatisch goedkeuren" );
define( "_AM_WFB_PERM_AUTOPERMISSIONS_TEXT", "Selecteer de groepen waarvan de ingezonden linken automatisch worden goedgekeurd." );

define( "_AM_WFB_PERM_SPERMISSIONS", "Inzend rechten" );
define( "_AM_WFB_PERM_SPERMISSIONS_TEXT", "Selecteer de groepen die nieuwe linken mogen inzenden in de geselecteerde categorie(n)." );

define( "_AM_WFB_PERM_APERMISSIONS", "Beheerder groepen" );
define( "_AM_WFB_PERM_APERMISSIONS_TEXT", "Selecteer de groepen die beheerdersrechten hebben voor de geselecteerde categorie(n)." );
// Formulier boek toevoegen admin
define( "_AM_WFB_COUNTRY", "Taal:" );
define( "_AM_WFB_KEYWORDS", "Keywords:" );
define( "_AM_WFB_KEYWORDS_NOTE", "<small>Keywords dienen gescheiden te worden door een komma (<i>keyword1, keyword2, keyword3</i>).</small>" );
define( "_AM_WFB_CHECKURL", "Check URL" );
define( "_AM_WFB_CATTITLE", "Categorie" );
define( "_AM_WFB_LINK_GOOGLEMAP", "Google Kaarten" );
define( "_AM_WFB_LINK_PARTNERLINK", "URL Bestel Boek (partnerlink!)" ); // Yahoo Kaarten
define( "_AM_WFB_LINK_SCRIPTIESLINK", "Open Bestand" ); // MS Live Kaarten
define( "_AM_WFB_LINK_CHECKPARTNERLINK", "Controleer partnerlink" );
define( "_AM_WFB_LINK_CHECKSCRIPTIESLINK", "Controleer scriptieslink" );
define( "_AM_WFB_UITGEVER", "Uitgever" );
define( "_AM_WFB_PRICE", "Prijs" );
define( "_AM_WFB_SCHRIJVER", "Schrijver" );
define( "_AM_WFB_GENRE", "Genre/Type" );
define( "_AM_WFB_BLZ", "Pagina's" );
define( "_AM_WFB_ISBN", "ISBN" );
define( "_AM_WFB_JAARGANG", "Verschenen" );

// Version 1.05 RC2
define( "_AM_WFB_WARNINSTALL4", "WAARSCHUWING: Map %s is niet beschrijfbaar. <br />Deze map dient schrijfbaar (CHMOD 777) te zijn voor WF-Books." );
?>