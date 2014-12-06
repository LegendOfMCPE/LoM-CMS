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
			
			echo "&gt; [SUCCESS] Successfully created \"<strong>simpleauth_players</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			
			echo "<br />&gt; LoM-CMS is not quite done installing since SimpleAuth database has just been made.<br />";
			echo "&gt; Please click the \"Install\" button to finish the installation.<br />";
			echo "<form><input type=\"button\" onClick=\"history.go(0)\" value=\"Install\"></form>";
		
		}else{
			echo "&gt; [FAILED] Can't create the table : \"SimpleAuth_players\"!<br />";
			echo "&gt; Aborting ...<br />";
		}
	}else{
	
	/* No SimpleAuth Part */
	
		if(!$db->query("SELECT * FROM lomcms_blog LIMIT 0")){
			
			$sql_generate_lb = "CREATE TABLE IF NOT EXISTS lomcms_blog(
					id					INT(11) NOT NULL,
					topic				VARCHAR(16) NOT NULL,
					author				VARCHAR(16) NOT NULL,
					discussion			VARCHAR(16) NOT NULL,
					lastposted			INT(11) NOT NULL,
					lastupdate			INT(11) NOT NULL
					)ENGINE=INNODB;";
					
			$db->query($sql_generate_lb);
			
			echo "&gt; [PENDING] lomcms_blog database not found.<br />";
			echo "&gt; [PENDING] Generating table ...<br />";
		
			if(!$db->query($sql_generate_lb)){
				echo "&gt; [FAILED] Can't create the table : \"lomcms_blog\"!<br />";
				echo "&gt; Aborting ...<br />";
			}else{
				echo "&gt; [SUCCESS] Successfully created \"<strong>lomcms_blog</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			}
			
		}
			
		if(!$db->query("SELECT * FROM lomcms_settings LIMIT 0")){
		
			$sql_generate_settings = "CREATE TABLE IF NOT EXISTS lomcms_settings(
					web_title				VARCHAR(16) NOT NULL,
					web_slogan				VARCHAR(16) NOT NULL
					)ENGINE=INNODB;";
					
			$db->query($sql_generate_settings);
			
			echo "&gt; [PENDING] lomcms_settings database not found.<br />";
			echo "&gt; [PENDING] Generating table ...<br />";
			
			if(!$db->query($sql_generate_settings)){
				echo "&gt; [FAILED] Can't create the table : \"lomcms_settings\"!<br />";
				echo "&gt; Aborting ...<br />";
			}else{
				echo "&gt; [SUCCESS] Successfully created \"<strong>lomcms_settings</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			}
			
		}
		
		if(!$db->query("SELECT * FROM lomcms_tickets_q LIMIT 0")){
		
			$sql_generate_tickets_q = "CREATE TABLE IF NOT EXISTS lomcms_tickets_q(
					id					INT(11) NOT NULL,
					topic				VARCHAR(16) NOT NULL,
					author				VARCHAR(16) NOT NULL,
					discussion			VARCHAR(16) NOT NULL,
					lastposted			INT(11) NOT NULL,
					lastupdate			INT(11) NOT NULL
					)ENGINE=INNODB;";
			
			$db->query($sql_generate_tickets_q);
			
			echo "&gt; [PENDING] lomcms_tickets_q database not found.<br />";
			echo "&gt; [PENDING] Generating table ...<br />";
			
			if(!$db->query($sql_generate_tickets_q)){
				echo "&gt; [FAILED] Can't create the table : \"lomcms_tickets_q\"!<br />";
				echo "&gt; Aborting ...<br />";
			}else{
				echo "&gt; [SUCCESS] Successfully created \"<strong>lomcms_tickets_q</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			}
			
		}
		
		if(!$db->query("SELECT * FROM lomcms_tickets_a LIMIT 0")){
		
			$sql_generate_tickets_a = "CREATE TABLE IF NOT EXISTS lomcms_tickets_a(
					id					INT(11) NOT NULL,
					author				VARCHAR(16) NOT NULL,
					discussion			VARCHAR(16) NOT NULL,
					lastposted			INT(11) NOT NULL,
					lastupdate			INT(11) NOT NULL
					)ENGINE=INNODB;";
			
			$db->query($sql_generate_tickets_a);
			
			echo "&gt; [PENDING] lomcms_tickets_a database not found.<br />";
			echo "&gt; [PENDING] Generating table ...<br />";
			
			if(!$db->query($sql_generate_tickets_a)){
				echo "&gt; [FAILED] Can't create the table : \"lomcms_tickets_a\"!<br />";
				echo "&gt; Aborting ...<br />";
			}else{
				echo "&gt; [SUCCESS] Successfully created \"<strong>lomcms_tickets_a</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			}
			
		}
			
		if(!$db->query("SELECT * FROM lomcms_report LIMIT 0")){
		
			$sql_generate_report = "CREATE TABLE IF NOT EXISTS lomcms_report(
					id					INT(11) NOT NULL,
					author				VARCHAR(16) NOT NULL,
					target				VARCHAR(16) NOT NULL,
					discussion			VARCHAR(16) NOT NULL,
					lastposted			INT(11) NOT NULL,
					lastupdate			INT(11) NOT NULL
					)ENGINE=INNODB;";
			
			$db->query($sql_generate_report);
			
			echo "&gt; [PENDING] lomcms_report database not found.<br />";
			echo "&gt; [PENDING] Generating table ...<br />";
			
			if(!$db->query($sql_generate_report)){
				echo "&gt; [FAILED] Can't create the table : \"lomcms_report\"!<br />";
				echo "&gt; Aborting ...<br />";
			}else{
				echo "&gt; [SUCCESS] Successfully created \"<strong>lomcms_report</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			}
			
		}
			
		if(!$db->query("SELECT * FROM lomcms_srv_mngr LIMIT 0")){
		
			$sql_generate_srv_mngr = "CREATE TABLE IF NOT EXISTS lomcms_srv_mngr(
					id					INT(11) NOT NULL,
					domain				VARCHAR(50) NOT NULL,
					port				INT(11) NOT NULL,
					rcon_pass			VARCHAR(150) NOT NULL,
					lastposted			INT(11) NOT NULL,
					lastupdate			INT(11) NOT NULL
					)ENGINE=INNODB;";
			
			$db->query($sql_generate_srv_mngr);
			
			echo "&gt; [PENDING] lomcms_srv_mngr database not found.<br />";
			echo "&gt; [PENDING] Generating table ...<br />";
			
			if(!$db->query($sql_generate_srv_mngr)){
				echo "&gt; [FAILED] Can't create the table : \"lomcms_srv_mngr\"!<br />";
				echo "&gt; Aborting ...<br />";
			}else{
				echo "&gt; [SUCCESS] Successfully created \"<strong>lomcms_srv_mngr</strong>\" table on \"<strong>" . SIMPLEAUTH_DB . "</strong>\" database! <br />";
			}
		
			echo "&gt; LoM-CMS is now installed and connected to the database! Please delete the <strong>install.php</strong> afterwards.<br />";
			
		}else{
			echo "&gt; LoM-CMS is already installed and connected to the database! Please delete the <strong>install.php</strong> afterwards.<br />";
		}
		
		/* No SimpleAuth Part */
		
	}
}else{
	echo "&gt; [FAILED] MySQL Server cannot be found! Please correct your MySQL details and try again.<br />";
}

echo "<br />";
echo "&copy; 2014 All Rights Reserved.";
?>