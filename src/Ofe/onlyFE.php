<?php
namespace Ofe;

class onlyFE { 
	static function run() { 

		require_once __DIR__ . DS . "config.php";

		require_once inc . "functions.php";

		require_once inc . "route_params.php";

		require_once inc . "logic.php";

		require_once inc . "view.php";

		exit();

	} 
}