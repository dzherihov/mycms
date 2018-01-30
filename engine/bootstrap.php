<?php 

spl_autoload_register(function ($Cms) {
    include $Cms . '.php';
});

use Engine\Cms;
use Engine\DI\DI;

try{
	//Dependency injection
	$di = new DI();

	$services = require __DIR__ . '/config/Service.php';

	// Init services
	foreach($services as $Service)
	{
		$provider = new $Service($di);
		$provider->init();
	}


	$cms = new Cms($di);
	$cms->run();

}catch (\ErrorException $e)
{
	echo $e->getMessage();

}

?>