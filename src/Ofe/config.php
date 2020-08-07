<?php

$dirs = [
	'inc' => 'inc',
	'logic' => defined(logicDir)?:'logic',
	'views' => defined(viewsDir)?:'views',
	'layout' => defined(layoutDir)?:'layout',
];

define('inc' , __DIR__ . DS . 'inc' . DS);
define('logic' , logicDir);
define('views' , viewsDir);

define('layout' , views . layoutDir . DS);

define('viewExt' , '.view.php');

define('getPart' , inc . 'part.php');
