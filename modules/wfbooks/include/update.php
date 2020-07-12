<?php
/**
 * $Id: update.php
 * Module: WF-Links
 * Developer: McDonald
 * Licence: GNU
 */

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

global $xoopsDB;

$i=0;
//Make changes to table wfbooks_links
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN country VARCHAR(5) NOT NULL default '' AFTER urlrating");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN keywords TEXT NOT NULL default '' AFTER country");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN item_tag TEXT NOT NULL default '' AFTER keywords");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN googlemap TEXT NOT NULL default '' AFTER item_tag");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN partnerlink TEXT NOT NULL default '' AFTER googlemap");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN scripties TEXT NOT NULL default '' AFTER partnerlink");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN uitgever VARCHAR(255) NOT NULL default '' AFTER scripties");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN price VARCHAR(255) NOT NULL default '' AFTER uitgever");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN schrijver VARCHAR(255) NOT NULL default '' AFTER price");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN blz VARCHAR(10) NOT NULL default '' AFTER schrijver");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN genre VARCHAR(255) NOT NULL default '' AFTER blz");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN isbn VARCHAR(20) NOT NULL default '' AFTER genre");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " ADD COLUMN jaargang VARCHAR(20) NOT NULL default '' AFTER isbn");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_links') . " MODIFY keywords TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);


//Make changes to table wfbooks_mod
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN country VARCHAR(5) NOT NULL default '' AFTER urlrating");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN keywords TEXT NOT NULL default '' AFTER country");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN item_tag TEXT NOT NULL default '' AFTER keywords");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN googlemap TEXT NOT NULL default '' AFTER item_tag");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN partnerlink TEXT NOT NULL default '' AFTER googlemap");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN scripties TEXT NOT NULL default '' AFTER partnerlink");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN uitgever VARCHAR(255) NOT NULL default '' AFTER scripties");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN price VARCHAR(255) NOT NULL default '' AFTER uitgever");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN schrijver VARCHAR(255) NOT NULL default '' AFTER price");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN blz VARCHAR(10) NOT NULL default '' AFTER schrijver");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN genre VARCHAR(255) NOT NULL default '' AFTER blz");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN isbn VARCHAR(20) NOT NULL default '' AFTER genre");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " ADD COLUMN jaargang VARCHAR(20) NOT NULL default '' AFTER isbn");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'wfbooks_mod') . " MODIFY keywords TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);

// Drop table wf_resources
$i++;
$ret[$i] = true;
$query[$i] = sprintf("DROP TABLE " . $xoopsDB -> prefix( 'wf_resources') . " ");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);

//$i = 0;

?>