<?php
if(!isset($_SERVER['PATH_INFO'])) {
	$route = "/index";
	$params = [];
} else {
	$parts = explode('/', $_SERVER['PATH_INFO']);
	$route = "";
	$params = [];
	$is_variable = false;
	$i = 1;
	foreach($parts as $part) {
		if(empty($part)) continue;
		if($is_variable) {
			$params[$i] = safeInput($part);
			$i++;
		} elseif($part===paramsChar) {
			$is_variable = true;
			if(empty($route)) { $route = "/index"; }
		} else {
			$route .= "/$part";
		}
	}
}
$view = $route;