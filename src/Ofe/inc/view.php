<?php

include_once layout . 'header' . viewExt;

$viewFile = views . $view . viewExt;
if(file_exists($viewFile)) {
	include_once $viewFile;
} else {
	include_once layout . 'not_found' . viewExt;
}

include_once layout . 'footer' . viewExt;