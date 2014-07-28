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

====================================================
/* NOTE: THE DATABASE DETAILS MUST BE EXACTLY THE
   SAME AS IN YOUR SIMPLEAUTH CONFIG MYSQL DATA! */
====================================================

/* Hostname : Default is localhost */
$mysql_hostname = "localhost";

/* Database Username */
$mysql_user = "";

/* Database Password */
$mysql_password = "";

/* Database Name */
$mysql_database = "";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

====================================================

?>
