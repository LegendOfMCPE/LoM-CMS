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
error_reporting(0);

require_once(dirname(__FILE__) . "/src/lomcms.php");

echo "<title>LoM-CMS Installation</title>";

echo "==========================<br />";
echo "Welcome to LoM-CMS Installation.<br />";
echo "==========================<br /><br />";

echo "Note:<br />";
echo "1. Be sure you have the right dependency in order to run this CMS.<br />";
echo "2. Be sure you have edited the right info at \"<strong>/resource/<i>config.php</i></strong>\" to continue.<br />";
echo "3. If the installation failed, please edit the right info at the given directory above and <strong>reload</strong> this page.<br /><br />";

echo "Installation Log:<br /><br />";

if($db_check){

	if(!$db){
		echo "&gt; [FAILED] Please correct your MySQL details and try again.";
	}

	if(!$db->query("SELECT * FROM simpleauth_players LIMIT 0")){
		echo "&gt; [PENDING] SimpleAuth_players database not found.<br />";
		echo "&gt; [PENDING] Generating table ...<br />";
		$sql_generate_sa= "CREATE TABLE IF NOT EXISTS simpleauth_players(
				name				VARCHAR(16) NOT NULL,
				hash				CHAR(128) NOT NULL,
				registerdate		INT(11) NOT NULL,
				logindate			INT(11) NOT NULL,
				lastip				VARCHAR(50) NOT NULL
				)ENGINE=INNODB;";
				
		$db->query($sql_generate_sa);
						
		if($db->query("SELECT * FROM simpleauth_players LIMIT 0")){
			echo "&gt; [SUCCESS] Successfully created \"<strong>SimpleAuth_players</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			echo "&gt; LoM-CMS is now connected to SimpleAuth database! Please delete the <strong>install.php</strong> afterwards.<br />";
		}else{
			echo "&gt; [FAILED] Can't create the table : \"SimpleAuth_players\"!<br />";
			echo "&gt; Aborting ...<br />";
		}
	}else{
		//if(!$db->query("SELECT * FROM ?? LIMIT 0")){
			//todo
		//}else{
			echo "&gt; LoM-CMS is already connected to SimpleAuth database! Please delete the <strong>install.php</strong> afterwards.<br />";
		//}
	}
}else{
	echo "&gt; [FAILED] MySQL Server cannot be found! Please correct your MySQL details and try again.<br />";
}

echo "<br />";
echo "&copy; 2014 All Rights Reserved.";
?>