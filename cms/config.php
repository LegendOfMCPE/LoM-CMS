<?php
/*
====================================================
****************************************************
*  _           __  __         _____ __  __  _____  *
* | |         |  \/  |       / ____|  \/  |/ ____| *
* | |     ___ | \  / |______| |    | \  / | (___   *
* | |    / _ \| |\/| |______| |    | |\/| |\___ \  *
* | |___| (_) | |  | |      | |____| |  | |____) | *
* |______\___/|_|  |_|       \_____|_|  |_|_____/  *
*                                                  *
*                -=[VERSION 0.0.1]=-               *
*          BY: LEGEND OF MCPE ORGANIZATION         *
*       GITHUB: HTTP://GITHUB.COM/LEGENDOFMCPE     *
*                                                  *
****************************************************
*/

//=================================================
/* NOTE: THE DATABASE DETAILS MUST BE EXACTLY THE
   SAME AS IN YOUR SIMPLEAUTH CONFIG MYSQL DATA! */
//=================================================

/* Hostname : Default is localhost */
$mysql_hostname = "localhost";

/* Database Username */
$mysql_user = "";

/* Database Password */
$mysql_password = "";

/* Database Name */
$mysql_database = "";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("
==========================<br />
% <font color='red'>Couldn't connect to the database</font> % <br />
==========================
");
mysql_select_db($mysql_database, $bd) or die("
===========================<br />
% <font color='red'>Couldn't find SimpleAuth Database</font> % <br />
===========================
");
//================================================
//************Directories and such****************
//================================================

/* Website Directory */
// Must be filled! For example for Ubuntu/CentOS
// $dir_path = "/var/www/html/"
// For Windows
// $pdir = "C:/xampp/htdocs/";
$dir_path = "";

/* Website Folder Name */
// Only Fill the blank if this CMS is installed inside a folder.
// For example, if the website link is like this:
// http://legendofmcpe.com/cms , the output must be:
// $dir_folder = "cms"; otherwise leave it blank.
$dir_folder = "";

/* PocketMine Directory */
// Leave it blank if you're going to use LoM-CMS Plugin Connector
// PocketMine Directory must be exact.
// For example, For Linux:
// $pdir = "/root/pocketmine/";
// For Windows:
// $pdir = "C:/PocketMine/";
$pdir = "";

/* Secret Directory Name for PocketMine Shortcut */
// Leave it blank if you're going to use LoM-CMS Plugin Connector
// This Secret Directory will store all files from your PocketMine
// Directory needed to be used. It will store, banned-player,
// banned-player ip, opslist etc. To use the feature, you have to
// For example, $sdir = "347r8tjfn"; $key = "876ghjcj";
// YOU MUST NOT SHARE THESE TO OTHERS!!
$sdir = "";
$key = "";
// Lets randomize this shit to fuck hackers //
$sdir_key = md5($key);

/* Prefix */
// File tag. Do not empty this area or you'll be prone to file jacking.
//Default: (You may change it to anything you want.)
$px = "LoM-CMS";

//================================================

?>