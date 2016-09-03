<?php

/*
 * @Author  : K1ghtx
 * @Version : 1.0
 * @Package : Online MD5 Cracker
 */

session_start ();

include ("include/functions.php");

$code = Random_String (4);
$_SESSION["code"] = $code;
$im = imagecreatetruecolor (50, 23);
$bg = imagecolorallocate ($im, 22, 86, 165);
$fg = imagecolorallocate ($im, 255, 255, 255);
imagefill ($im, 0, 0, $bg);
imagestring ($im, 5, 5, 5,  $code, $fg);
header ("Cache-Control: no-cache, must-revalidate");
header ('Content-type: image/png');
imagepng ($im);
imagedestroy ($im);

?>
