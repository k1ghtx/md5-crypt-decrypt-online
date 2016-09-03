<?php

/*
 * @Author  : K1ghtx
 * @Version : 1.0
 * @Package : Online MD5 Cracker
 */

/**
* Determine if string is a valid MD5 Hash
**/
function isValidMd5 ($md5)
{
	return !empty ($md5) && preg_match ('/^[a-f0-9]{32}$/i', $md5);
}

/**
* Entity Only HTML Tags
**/
function entity_html_tags ($text)
{
	$buffer = '';

	for ($i = 0; $i < strlen ($text); $i++)
		if ($text[$i] == "<" || $text[$i] == ">")
			$buffer .= "&#".ord ($text[$i]).";";
		else
			$buffer .= $text[$i];

	return $buffer;
}

/**
*
**/
function Random_String ($length)
{
	$characters = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$randomS = "";
	for ($i = 0; $i < $length; $i++)
		$randomS .= $characters[rand (0, strlen ($characters) - 1)];
	return $randomS;
}

?>