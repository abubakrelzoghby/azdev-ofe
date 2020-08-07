<?php

include_once logic . "common.php";

$logic_file = logic . "$route.php";
if(file_exists($logic_file)) {
	include_once $logic_file;
}
