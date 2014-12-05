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

class SQLGuard{
	public static function checkNumber($stringToCheck){
		if(!(is_numeric($stringToCheck))){
			exit(0);
		}
	}
	public static function filtString($stringInput){
		$buf = str_replace("'", "'", $stringInput);
		$buf = str_replace('"', "\"", $stringInput);
		$buf = str_replace("<", "&lt;", $buf);
		$buf = str_replace(">", "&gt;", $buf);
		return($buf);
	}
}
?>
