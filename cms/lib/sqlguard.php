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

class SQLGuard{
	public static function checkNumber($stringToCheck){
		if(!(is_numeric($stringToCheck))){
			exit(0);
		}
	}
	public static function filtString($stringInput){
		$buf = str_replace("'", "", $stringInput);
		$buf = str_replace("<", "", $buf);
		$buf = str_replace(">", "", $buf);
		return($buf);
	}
}
?>
