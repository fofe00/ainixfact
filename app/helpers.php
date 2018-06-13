<?php 

if (!function_exists('page_title')) {
	function page_title($title)
	{
		$baseTitle='AinixFact';
		if ($title='') {
			return $baseTitle;
		}else{
			return $title .'|'.$baseTitle;
		}
	}
}