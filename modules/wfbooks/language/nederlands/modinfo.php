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
define("_MI_WFB_DESC","Boeken module waarbij gebruikers boeken kunnen bekijken/bestellen, insturen en beoordelen.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFB_BNAME1","Recente boeken");
define("_MI_WFB_BNAME2","Top boeken");

// Sub menu titles
define("_MI_WFB_SMNAME1","Inzenden");
define("_MI_WFB_SMNAME2","Populair");
define("_MI_WFB_SMNAME3","Hoogste beoordeling");
define("_MI_WFB_SMNAME4","Recente boeken");

// Names of admin menu items
define("_MI_WFB_BINDEX","Hoofd index");
define("_MI_WFB_INDEXPAGE","Index paginamanagement");
define("_MI_WFB_MCATEGORY","Categorie management");
define("_MI_WFB_MLINKS","Boeken management");
define("_MI_WFB_MUPLOADS","Afbeeldingen uploaden");
define("_MI_WFB_PERMISSIONS","Rechten instellingen");
define("_MI_WFB_BLOCKADMIN","Blok instellingen");
define("_MI_WFB_MVOTEDATA","Stemmen");

// Title of config items
define('_MI_WFB_POPULAR', 'Boeken populairiteit teller');
define('_MI_WFB_POPULARDSC', "Aantal kliks waarna een Boek de status 'populair' krijgt.");

//Display Icons
define("_MI_WFB_ICONDISPLAY","Boeken populair en nieuw:");
define("_MI_WFB_DISPLAYICONDSC", "Selecteer hoe de populair en nieuw iconen worden getoond.");
define("_MI_WFB_DISPLAYICON1", "Toon als icoon");
define("_MI_WFB_DISPLAYICON2", "Toon als tekst");
define("_MI_WFB_DISPLAYICON3", "Niet tonen");

define("_MI_WFB_DAYSNEW","Nieuwe boeken:");
define("_MI_WFB_DAYSNEWDSC","Aantal dagen dat een boek de status 'nieuw' heeft.");
define("_MI_WFB_DAYSUPDATED","Bijgewerkte boeken:");
define("_MI_WFB_DAYSUPDATEDDSC","Aantal dagen dat een boek de status 'geupdate' heeft.");

define('_MI_WFB_PERPAGE', 'Boeken in index:');
define('_MI_WFB_PERPAGEDSC', 'Aantal Boeken dat getoond wordt in iedere categorie index.');

define('_MI_WFB_USESHOTS', 'Screenshots tonen?');
define('_MI_WFB_USESHOTSDSC', 'Selecteer Ja om screenshots bij ieder boek te tonen');
define('_MI_WFB_SHOTWIDTH', 'Screenshot breedte');
define('_MI_WFB_SHOTWIDTHDSC', 'Toon breedte voor screenshot afbeelding');
define('_MI_WFB_SHOTHEIGHT', 'Screenshot hoogte');
define('_MI_WFB_SHOTHEIGHTDSC', 'Toon hoogte voor screenshot afbeelding');
define('_MI_WFB_CHECKHOST', 'Niet toestaan om een boek direct door te linken? (leeching)');
define('_MI_WFB_REFERERS', 'Deze websites mogen direct door linken naar de boeken van deze module<br />Scheiden door #');
define("_MI_WFB_ANONPOST","Anonieme gebruikers inzendingen:");
define("_MI_WFB_ANONPOSTDSC","Anonieme gebruikers toestaan om in te zenden en/of te uploaden?");
define('_MI_WFB_AUTOAPPROVE','Ingezonden Boeken automatisch goedkeuren');
define('_MI_WFB_AUTOAPPROVEDSC','Selecteren om ingezonden Boeken zonder moderatie goed te keuren.');

define('_MI_WFB_MAXFILESIZE','Upload omvang (KB)');
define('_MI_WFB_MAXFILESIZEDSC','Maximale toegestane bestandsgrootte bij uploaden.');
define('_MI_WFB_IMGWIDTH','Breedte te uploaden afbeelding');
define('_MI_WFB_IMGWIDTHDSC','Maximale toegestane afbeeldingsbreedte bij uploaden.');
define('_MI_WFB_IMGHEIGHT','Hoogte te uploaden afbeelding');
define('_MI_WFB_IMGHEIGHTDSC','Maximale toegestane afbeeldingshoogte bij uploaden.');

define('_MI_WFB_UPLOADDIR','Upload bestand (No trailing slash)');
define('_MI_WFB_ALLOWSUBMISS','Grbuikersinzendingen:');
define('_MI_WFB_ALLOWSUBMISSDSC','Gebruikers toestaan nieuwe Boeken in te zenden');
define('_MI_WFB_ALLOWUPLOADS','Gebruikers uploads:');
define('_MI_WFB_ALLOWUPLOADSDSC','Gebruikers toestaan nieuwe bestanden direct te uploaden in de website');
define('_MI_WFB_SCREENSHOTS','Screenshots upload bestand');
define('_MI_WFB_CATEGORYIMG','Categorien afbeelding uploadbestand');
define('_MI_WFB_MAINIMGDIR','Hoofd Afbeeldingen bestand');
define('_MI_WFB_USETHUMBS', 'Gebruik Thumb Nails:');
define("_MI_WFB_USETHUMBSDSC", "Ondersteunde bestandstypen: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Books gebruikt thumb nails voor afbeeldingen. Selecteer 'Nee' Om het orgineel te gebruiken wanneer de server deze optie niet ondersteund.</div>");
define('_MI_WFB_DATEFORMAT', 'Datum weergave:');
define('_MI_WFB_DATEFORMATDSC', 'Standaard datumweergave voor WF-books:');
define('_MI_WFB_SHOWDISCLAIMER', 'Toon disclaimer voordat gebruikers inzenden?');
define('_MI_WFB_SHOWDISCLAIMERDSC', 'Toon de opgave richtlijnen voordat een gebruiker een boek kan inzenden?');
define('_MI_WFB_SHOWLINKDISCL', 'Toon disclaimer voordat een gebruiker kan linken?');
define('_MI_WFB_SHOWLINKDISCLDSC', 'Toon richtlijnen voordat een boeklink zich opent?');
define('_MI_WFB_DISCLAIMER', 'Voer de inzend disclaimer tekst in:');
define('_MI_WFB_LINKDISCLAIMER', 'Voer de boek disclaimer tekst in:');
define('_MI_WFB_SUBCATS', 'Sub-categorien:');
define("_MI_WFB_SUBMITART", "link inzenden:");
define("_MI_WFB_SUBMITARTDSC", "Selecteer de groep die nieuwe boeken kan inzenden.");
define("_MI_WFB_RATINGGROUPS", "boek beoordeling:");
define("_MI_WFB_RATINGGROUPSDSC", "Selecteer groepen die boeken kunnen beoordelen.");
define("_MI_WFB_IMGUPDATE", "Thumbnails bijwerken?");
define("_MI_WFB_IMGUPDATEDSC", "If selected Thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. <br /><br />");
define("_MI_WFB_QUALITY", "Thumbnail kwaliteit:");
define("_MI_WFB_QUALITYDSC", "Laagste kwaliteit: 0 Hoogste: 100");
define("_MI_WFB_KEEPASPECT", "Handhaaf de verhouding van een afbeelding?");
define("_MI_WFB_KEEPASPECTDSC", "");
define("_MI_WFB_ADMINPAGE", "Beheerdersindex Boeken aantal:");
define("_MI_WFB_AMDMINPAGEDSC", "Aantal nieuwe boeken dat wordt getoond in het beheerdersgedeelte.");
define("_MI_WFB_ARTICLESSORT", "Standaard boeken volgorde:");
define("_MI_WFB_ARTICLESSORTDSC", "Selecteer de standaard volgorde voor de boeken indexen.");
define("_MI_WFB_TITLE", "Titel");
define("_MI_WFB_RATING", "Beoordeling");
define("_MI_WFB_WEIGHT", "Gewicht");
define("_MI_WFB_POPULARITY", "Populairiteit");
define("_MI_WFB_SUBMITTED2", "inzenddatum");
define('_MI_WFB_COPYRIGHT', 'Copyright opmerking:');
define('_MI_WFB_COPYRIGHTDSC', 'Selecteer om een copyright opmerking te tonen op de Boeken pagina.');
// Description of each config items
define('_MI_WFB_SUBCATSDSC', 'Selecteer Ja sub-categorien te tonen. Nee selecteren zal sub-categorien verbergen op de Hoofd Index');

// Text for notifications
define('_MI_WFB_GLOBAL_NOTIFY', 'Globaal');
define('_MI_WFB_GLOBAL_NOTIFYDSC', 'Globale boeken informatie opties.');
define('_MI_WFB_CATEGORY_NOTIFY', 'Categorie');
define('_MI_WFB_CATEGORY_NOTIFYDSC', 'Informatie optie behorend bij de huidige boeken categorie.');
define('_MI_WFB_LINK_NOTIFY', 'Boek');
define('_MI_WFB_FILE_NOTIFYDSC', 'Informatie optie behorend bij het huidige boek.');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFY', 'Nieuwe categorie');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Informeer mij wanneer een nieuwe boekencategorie is aangemaakt.');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe boekencategorie is aangemaakt.');
define('_MI_WFB_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe boekencategorie');                              

define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFY', 'Verzoek boek aanpassing');
define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Informeer mij over ieder verzoek van een boek aanpassing.');
define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Ontvang informatie wanneer een aanpassingsverzoek voor een boek is ingezonden.');
define('_MI_WFB_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Boek wijziging aangevraagd');

define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFY', 'Defecte boeklink rapportage');
define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Informeer mij over ieder defecte boeklink rapportage.');
define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Ontvang informatie wanneer een defecte boeklink rapportage is ingezonden.');
define('_MI_WFB_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : DEfecte boeklink gerapporteerd');

define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFY', 'Boek ingezonden');
define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuw boek is ingezonden (wachtend op goedkeuring).');
define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuw boek is ingezonden (wachtend op goedkeuring).');
define('_MI_WFB_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuw boek ingezonden');

define('_MI_WFB_GLOBAL_NEWLINK_NOTIFY', 'Nieuw boek geplaatst');
define('_MI_WFB_GLOBAL_NEWLINK_NOTIFYCAP', 'Informeer mij wanneer een nieuw boek is geplaatst.');
define('_MI_WFB_GLOBAL_NEWLINK_NOTIFYDSC', 'Ontvang informatie wanneer een nieuw boek is geplaatst.');
define('_MI_WFB_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuw Boek geplaatst');

define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFY', 'Boek ingezonden');
define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuw boek is ingezonden (wachtend op goedkeuring) in de huidige categorie.');   
define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuw boek is ingezonden (wachtend op goedkeuring) in de huidige categorie.');      
define('_MI_WFB_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuw boek ingezonden in categorie'); 

define('_MI_WFB_CATEGORY_NEWLINK_NOTIFY', 'Nieuw Boek');
define('_MI_WFB_CATEGORY_NEWLINK_NOTIFYCAP', 'Informeer mij wanneer een nieuw boek is geplaatst in de huidige categorie.');   
define('_MI_WFB_CATEGORY_NEWLINK_NOTIFYDSC', 'Ontvang informatie wanneer een nieuw boek is geplaatst in de huidige categorie.');      
define('_MI_WFB_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuw boek geplaatst in categorie'); 

define('_MI_WFB_LINK_APPROVE_NOTIFY', 'Boek goedgekeurd');
define('_MI_WFB_LINK_APPROVE_NOTIFYCAP', 'Informeer mij wanneer dit boek is goedgekeurd.');
define('_MI_WFB_LINK_APPROVE_NOTIFYDSC', 'Ontvang informatie wanneer dit boek is goedgekeurd.');
define('_MI_WFB_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Boek goedgekeurd');

define('_MI_WFB_AUTHOR_INFO', "Ontwikkelaarsinformatie");
define('_MI_WFB_AUTHOR_NAME', "Ontwikkelaar");
define('_MI_WFB_AUTHOR_DEVTEAM', "Ontwikkelingsteam");
define('_MI_WFB_AUTHOR_WEBSITE', "Ontwikkelaarswebsite");
define('_MI_WFB_AUTHOR_EMAIL', "Ontwikkelaarsemail");
define('_MI_WFB_AUTHOR_CREDITS', "Credits");
define('_MI_WFB_MODULE_INFO', "Module ontwikkelingsinformation");
define('_MI_WFB_MODULE_STATUS', "Ontwikkelingsstatus");
define('_MI_WFB_MODULE_DEMO', "Demo Site");
define('_MI_WFB_MODULE_SUPPORT', "Officiele support site");
define('_MI_WFB_MODULE_BUG', "Rapporteer een bug in deze module");
define('_MI_WFB_MODULE_FEATURE', "Suggesties voor nieuwe opties in deze module");
define('_MI_WFB_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_WFB_RELEASE', "Vrijgave datum: ");

define('_MI_WFB_MODULE_MAILLIST', "WF-Project Mailinglijst");
define('_MI_WFB_MODULE_MAILANNOUNCEMENTS', "Aankondigingen mailinglijst");
define('_MI_WFB_MODULE_MAILBUGS', "Bug mailinglijst");
define('_MI_WFB_MODULE_MAILFEATURES', "Nieuwe opties mailinglijst");
define('_MI_WFB_MODULE_MAILANNOUNCEMENTSDSC', "Ontvang de laatste aankondigingen van het WF-Project.");
define('_MI_WFB_MODULE_MAILBUGSDSC', "Bug Tracking en inzendingen mailinglijst");
define('_MI_WFB_MODULE_MAILFEATURESDSC', "Verzoek nieuwe opties mailinglijst.");

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

define('_MI_WFB_AUTHOR_CREDITSTEXT',"Het WF-Projects Team wil de volgende mensen bedanken voor hun hulp en ondersteuning gedurende de ontwikkelingsfase van deze module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_WFB_AUTHOR_BUGFIXES', "Bug Fix geschiedenis");

define('_MI_WFB_COPYRIGHT2', 'Copyright' );
define('_MI_WFB_COPYRIGHTIMAGE', "Tenzij anders aangegeven, valt deze module (WF-Books) en haar afbeeldingen onder het copyright van het WF-Projects team.<br /><br />U heeft de toestemming om WF-Books te copieren, aan te passen en/of te wijzigen om te voldoen aan uw persoonlijke eisen. U gaat er mee akkoord dat u geen wijzigingen aanbrengt, toevoegd aan, en/of de broncode van deze software herdistribueert zonder de uitdrukkelijke toestemming van het WF-Projects team.");

define('_MI_WFB_SELECTFORUM', "Selecteer forum:");
define('_MI_WFB_SELECTFORUMDSC', "Selecteer het forum dat u heeft geinstalleerd en dat zal worden gebruikt door WF-Books.");

define('_MI_WFB_DISPLAYFORUM1', "Newbb/CBB (all)");
define('_MI_WFB_DISPLAYFORUM2', "IPB Forum");
define('_MI_WFB_DISPLAYFORUM3', "PHPBB2 Module");

// added by McDonald
define( "_MI_WFB_COUNTRY", "Land:" );
define('_MI_WFB_EDITOR', "Te gebruiken editor (admin):");
define('_MI_WFB_EDITORCHOICE', "Selekteer de te gebruiken editor voor admins. Als u een eenvoudige installatie heeft (bijv. u gebruikt alleen de Xoops core editors), dan kunt u gewoon DHTML en Compact kiezen.");
define('_MI_WFB_EDITORUSER', "Te gebruiken editor (gebruiker):");
define('_MI_WFB_EDITORCHOICEUSER', "Selecteer de te gebruiken editor voor gebruikers. Als u een eenvoudige installatie heeft (bijv. u gebruikt alleen de Xoops core editors), dan kunt u gewoon DHTML en Compact kiezen.");
define("_MI_WFB_FORM_DHTML","DHTML");
define("_MI_WFB_FORM_COMPACT","Compact");
define("_MI_WFB_FORM_SPAW","Spaw Editor");
define("_MI_WFB_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_WFB_FORM_FCK","FCK Editor");
define("_MI_WFB_FORM_KOIVI","Koivi Editor");
define("_MI_WFB_FORM_INBETWEEN","Inbetween");
define("_MI_WFB_FORM_TINYEDITOR","Tinyeditor");
define("_MI_WFB_FORM_TINYMCE", "TinyMCE");
define("_MI_WFB_FORM_DHTMLEXT", "DHTML Extended");
define("_MI_WFB_SORTCATS", "Sorteer categorieën op:");
define("_MI_WFB_SORTCATSDSC", "Selecteer hoe categorieën en sub-categorieën gesorteerd moeten worden.");
define("_MI_WFB_KEYLENGTH", "Voer het max. aantal karakters in voor meta keywords:");
define("_MI_WFB_KEYLENGTHDSC", "standaard is 255 karakters");
define("_MI_WFB_OTHERLINKS", "Toon andere vermeldingen die door de Inzender zijn ingezonden?");
define("_MI_WFB_OTHERLINKSDSC", "Kies Ja als u andere vermeldingen van de Inzender wilt tonen.");
define("_MI_WFB_TOTALCHARS", "Kies het totaal aantal karakters voor de omschrijving??");
define("_MI_WFB_TOTALCHARSDSC", "Kies het totaal aantal zichtbare karakters van de omschrijving op de Index Pagina.");
define("_MI_WFB_QUICKVIEW", "Laat Quick View optie zien?");
define("_MI_WFB_QUICKVIEWDSC", "Kies Ja als u de Quick View optie wilt laten zien.");
define('_MI_WFB_ICONS_CREDITS', "Icons door");
define("_MI_WFB_SHOWSBOOKMARKS", "Laat Social Bookmarks zien?");
define("_MI_WFB_SHOWSBOOKMARKSDSC", "Kies Ja als u Social Bookmarks wilt laten zien onder een artikel.");
define("_MI_WFB_SHOWPAGERANK", "Laat Google PageRank zien?");
define("_MI_WFB_SHOWPAGERANKSDSC", "Kies Ja als u Google PageRank wilt laten zien.");
define("_MI_WFB_USERTAGDESCR", "Gebruiker kan Tags invoeren?");
define("_MI_WFB_USERTAGDSC", "Kies Ja als de gebruiker tags mag inzenden.");

?>