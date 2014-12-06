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
*                -=[VERSION 1.0.0]=-               *
*          BY: LEGEND OF MCPE ORGANIZATION         *
*       GITHUB: HTTP://GITHUB.COM/LEGENDOFMCPE     *
*                                                  *
****************************************************
*/

require_once(dirname(dirname(__FILE__)) . "/resource/config.php");

$db = new \mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, SIMPLEAUTH_DB, MYSQL_PORT);
$db_check = @fsockopen(MYSQL_HOST, MYSQL_PORT, $errno, $errstr, 5);

/* Constants */
//define(' ?? ', ' ?? ');

?>