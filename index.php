<?php

/*
 * @Author  : K1ghtx
 * @Version : 1.0
 * @Package : Online MD5 Cracker
 */

@set_time_limit (0);
//error_reporting (0);

/* Direct Access Allowed :) */
define ("K1ghtx", 1);

/* Include */
require ("include/config.php");
require ("include/functions.php");
require ("include/header.php");

if (isset ($_GET['page']))
{
	switch ($_GET['page'])
	{
	case "cracker":
		include ("unmd5.php");
		break;
	case "create":
		include ("md5.php");
		break;
	case "about":
		include ("about.php");
		break;
	default:
		include ("unmd5.php");
	}
}
else
	include ("unmd5.php");

include ("include/footer.php");
defined ("K1ghtx") or die ("Direct Access Not Allowed !");

?>