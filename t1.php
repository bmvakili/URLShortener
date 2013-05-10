<?php
include("tconfig.php");
function get_tiny_url($url, $tag) {
	global $url_base;
	if(!filter_var($url, FILTER_VALIDATE_URL))
	{
		return "";
	}

	$xs = "";
	$ttag = trim($tag);
	$isEmpty = empty($ttag);

	if ($isEmpty) {
		$xs = "x".rand(10,100).rand(10,100).rand(10,100).rand(10,100);
	} else {
		$url = get_tiny_url($url);
		$xs = str_replace(" ","-",$tag);
	}

	$str='<!DOCTYPE html><html><head><meta http-equiv="refresh" content="0;url=_REPLACE_THIS_" /></head></html>';
	$str=str_replace("_REPLACE_THIS_", $url, $str);
	file_put_contents($xs, $str);
	return "${url_base}${xs}";
}

print(get_tiny_url($_REQUEST['link'], $_REQUEST['tag']));
?>
