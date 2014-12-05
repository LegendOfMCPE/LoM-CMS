<?PHP
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

$image = @imagecreatetruecolor(120, 30) or die("Cannot Initialize new GD image stream");

$background = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
imagefill($image, 0, 0, $background);
$linecolor = imagecolorallocate($image, 0xCC, 0xCC, 0xCC);
$textcolor = imagecolorallocate($image, 0x33, 0x33, 0x33);

for($i=0; $i < 6; $i++) {
	imagesetthickness($image, rand(1,3));
	imageline($image, 0, rand(0,30), 120, rand(0,30), $linecolor);
}

session_start();

$digit = '';
for($x = 15; $x <= 95; $x += 20) {
	$digit .= ($num = rand(0, 9));
	imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
}

$_SESSION['digit'] = $digit;

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>