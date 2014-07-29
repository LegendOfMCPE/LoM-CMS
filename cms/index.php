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

require 'include.php';

$query= mysql_query("SELECT * FROM simpleauth_players WHERE name='$usr'")or die(mysql_error());
$get = mysql_fetch_array($query);
$num = mysql_numrows($query);

require 'header.php';
?>

<title>LoM-CMS v0.0.1 - Home</title>
</head>

<body>
Welcome, <?php echo $usr; ?>. It seems their is nothing to see in here at the moment. <a href="logout.php">Logout?</a><br />
IP address that last connected in your account was <?php echo $ip; ?>.
</body>

<?php
require 'footer.php';
?>