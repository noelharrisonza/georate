<?php 
	
	/* GeoRate Index File
	 * ------------------
	 * @author Noel Harrison, Jonathan Wagener
	 * @since 2013
	 */	

	//Define the location of the repository. 
	define('ROOT_DIR', 		dirname(dirname(__FILE__)) );
	define('SRV_DIR',		ROOT_DIR.'/server');

	//Load some essential classes.

	require_once(SRV_DIR . '/classes/misc.class.php');
	require_once(SRV_DIR . '/classes/place.class.php');
	require_once(SRV_DIR . '/classes/node.class.php');
	require_once(SRV_DIR . '/classes/rating.class.php');
	require_once(SRV_DIR . '/classes/image.class.php');

	//Call the menu

	require_once(SRV_DIR . '/classes/navigate.class.php');

	$drive = new Navigate();
	$drive->execute(array('controller'=>'places','action'=>'add'));

?>