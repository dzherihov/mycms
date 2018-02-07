<?php 

//spl_autoload_register(function ($Cms) {
    //include $Cms . '.php';
   // include '..\Engine\DI\DifI.php';
//require_once( "..\Engine\DI\DifI.php" );

    //include '../Engine/Cms.php';
    // var_dump($Cms);
//});

//spl_autoload_register(function ($Cms) {
   // include $Cms . '.php';
    //include '../' . $Cms . '.php';
    //include '../Engine/Cms.php';
    // var_dump($Cms);
//});

require_once __DIR__ . '/Function.php';

function __autoload( $className ) 
{
	//echo $className; echo '<br>'; 
  $className = str_replace( "..", "", $className );

  	if (file_exists( "$className.php" )){ 
     	require_once( "$className.php" );
     }
	else if (file_exists( "..\\$className.php" )){
		require_once( "..\\$className.php" );
	} else {
		throw new \Exception(
				sprintf('View class %s does not exist!', $className)
			);
	}
}



use Engine\Cms;
use Engine\DI\DifI;
//use Engine\core\Template\View;


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