<?php 

spl_autoload_register(function ($Cms) {
    include $Cms . '.php';
    // var_dump($Cms);
});





use Engine\Cms;
use Engine\DI\DifI;

try{
	//Dependency injection
	$di = new DifI();

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