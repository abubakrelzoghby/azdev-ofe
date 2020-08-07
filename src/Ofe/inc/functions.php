<?php

function safeInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function route($route='',$params=[]) {
	$paramsParts = empty($params) ? 
					'' : 
					DS . paramsChar . DS . implode('/',$params);
	return baseUrl . $route . $paramsParts;
}