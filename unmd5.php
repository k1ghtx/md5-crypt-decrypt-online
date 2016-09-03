<?php

/*
 * @Author  : K1ghtx
 * @Version : 1.0
 * @Package : Online MD5 Cracker
 */

session_start ();
defined ("K1ghtx") or die ("Direct Access Not Allowed !");
?>
<center>
	<div class="alert-box alert">Contact Me On Twitter:"@cyb3rp1"</div>
</center>
<b>MD5 hashs :</b><br><br>
<form method='POST'>
<input style='border:2px solid blue;' type='text' name='md5s'></textarea><br><br>
<img src="captcha.php"><br><br>
<b>Enter Captcha :</b>
<br>
<br>
<input name="captcha" type="text">
<br><br><input class="small button" type='submit' name='submit' value='Decrypt'>
</form>

<?php

if (isset ($_POST["captcha"]) && !empty ($_POST["captcha"]))
{
	if ($_SESSION["code"] == $_POST["captcha"])
	{
		if (isset ($_POST['submit']))
		{
			$md5s = explode (PHP_EOL, $_POST['md5s']);

			foreach ($md5s as $md5)
			{
				if (isValidMd5 ($md5))
				{
					$result = mysqli_query ($mysql_link, "SELECT DISTINCT md5_hash,text FROM md5 WHERE md5_hash='$md5';");
					if (mysqli_num_rows ($result) > 0)
					{
						$row = mysqli_fetch_assoc ($result);
						$text = entity_html_tags ($row['text']);
						echo "<strong>$md5</strong>: <font color=green>$text</font><br>";
					}
					else
						echo "<font color='red'>Not Found: </font>$md5<br>";
				}
			}
		}
	}
	else
		die ("<font color='red'><b>Error: Wrong Captcha Code !</b></font>");
}

session_destroy ();

?>