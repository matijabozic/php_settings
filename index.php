<?php

	// Include Autoload
	require_once('src/Core/Autoload/Autoload.php');
	
	// Register Autoloading
	$autoload = new Autoload();
	$autoload->addLibrary('src/', 'Core');
	$autoload->register();

	
	// Import Session class
	use Core\Settings\Settings;
	
	// Instanciate object
	$settings = new Settings();
	
	// Get default session cookie name
	echo $settings->get('session.name');
	echo "<br />";
	
	// Change session cookie name
	$settings->set('session.name', 'SessionCookie');
	
	// Get session cookie name again
	echo $settings->get('session.name');
	
	// With this class you can change all php.ini directives that can be changed on runtime!
	

?>