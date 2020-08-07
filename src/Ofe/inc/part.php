<?php
$partFile = views . 'parts' . DS . $part . viewExt;
if(file_exists($partFile)) {
	include $partFile;
}