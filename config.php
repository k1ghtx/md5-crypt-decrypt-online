<?php

/*
 * @Author  : K1ghtx
 * @Version : 1.0
 * @Package : Online MD5 Cracker
 */


/* MySQL Configuration */
$config['mysql_host'] = "localhost";  // MySQL Server Host
$config['mysql_user'] = "root";       // MySQL Server Username
$config['mysql_pass'] = "";   // MySQL Server Password
$config['mysql_db']   = "md5";        // MySQL Server Database

/* General Configuration */
$config['sitename'] = "sec4ever";     // Website name

$mysql_link = mysqli_connect ($config['mysql_host'], $config['mysql_user'], $config['mysql_pass']) or die ("<b>MySQL Error</b>: Cannot Connect !");
mysqli_select_db ($mysql_link, $config['mysql_db']) or die ("<b>MySQL Error</b>: Database not Selected !");

?>