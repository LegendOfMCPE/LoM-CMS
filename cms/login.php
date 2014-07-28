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
*												   *
*                -=[VERSION 0.0.1]=-			   *
*		   BY: LEGEND OF MCPE ORGANIZATION		   *
*	   GITHUB: HTTP://GITHUB.COM/LEGENDOFMCPE	   *
*												   *
****************************************************
*/

require 'header.php';
	//Start session
	session_start();	
	
	if(isset($_SESSION['SESS_NAME']) and (trim($_SESSION['SESS_NAME']) !== '')) {
		header("location: index.php");
		exit();
	}
?>
<title>LoM-CMS v0.0.1 - Login</title>
</head>

<body>

<form action="login_target.php" method="post">
		<label><?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
				foreach($_SESSION['ERRMSG_ARR'] as $msg) {
					echo '<font color="red"><strong>',$msg,'</strong></font><br />'; 
				}
			unset($_SESSION['ERRMSG_ARR']);
			}
		?></label>
        <input type="text" name="username" placeholder="iMCPE Username" required autofocus>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Sign in</button>
      </form>
</body>
<?php
require 'footer.php';
?>