<?php

/*
 * @Author  : K1ghtx
 * @Version : 1.0
 * @Package : Online MD5 Cracker
 */
?>
<center>
	<div class="alert-box alert">Contact Me On Twitter:"@cyb3rp1"</div>
</center>
<font color='red'><?php echo $config['sitename']; ?></font> allows you to input an MD5 hash and search for its decrypted state in our database, basically, it's a MD5 cracker / decryption tool.<br><br>
<b>How many decryptions are in your database ?</b><br><br>
We have a total of <font color='red'>

<?php

echo mysqli_num_rows (mysqli_query ($mysql_link, "SELECT DISTINCT md5_hash FROM md5;"));

?>

</font>  unique decrypted MD5 hashes.
