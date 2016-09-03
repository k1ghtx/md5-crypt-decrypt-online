<?php

/*
 * @Author  : K1ghtx
 * @Version : 1.0
 * @Package : Online MD5 Cracker
 */

defined ("K1ghtx") or die ("Direct Access Not Allowed !");

?>
<center>
	<div class="alert-box alert">Contact Me On Twitter:"@cyb3rp1"</div>
</center>
<form method='POST'>
<b>Your Text: </b>
<input style='height: 25px;border: 1px solid #0000ff;' type='text' name='text' size='60'>
<input type='submit' class="small button" name='submit' value='Crypt'>
</form>

<?php

if (isset ($_POST['text']))
{
	$text = $_POST['text'];
	$escaped = mysqli_real_escape_string ($mysql_link, $text);
	$md5 = md5 ($text);

	echo "md5 (\"<font color='red'>".entity_html_tags ($text)."</font>\") = <font color='green'>$md5</font>";

	if (mysqli_num_rows (mysqli_query ($mysql_link, "SELECT md5_hash,text FROM md5 WHERE text='$escaped';")) == 0)
		mysqli_query ($mysql_link, "INSERT INTO md5 (md5_hash,text) VALUES('$md5','$escaped');");
}

?>