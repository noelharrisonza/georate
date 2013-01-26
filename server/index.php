<?php 
	
	/* GeoRate Index File
	 * ------------------
	 * @author Noel Harrison, Jonathan Wagener
	 * @since 2013
	 */	

	//Define the location of the repository. 
	define('ROOT_DIR', 		dirname(dirname(__FILE__)) );
	define('SRV_DIR',		ROOT_DIR.'/server');

	//Some config stuff
	define('DB_USER',		'root');
	define('DB_PASSWORD',	'root');
	define('DB_NAME',		'georate');
	define('DB_HOST',		'localhost');

	//Load up the database

	// SERUM SQL
	require_once(SRV_DIR . '/library/ezsql/shared/ez_sql_core.php');
	require_once(SRV_DIR . '/library/ezsql/mysql/ez_sql_mysql.php');

	// Create the Database object for localised data :)
	if (!isset($db) ) {
	  $db = new ezSQL_mysql(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
	  $db->query("SET NAMES utf8");
	}

	//Load some essential classes.

	require_once(SRV_DIR . '/classes/misc.class.php');
	require_once(SRV_DIR . '/classes/place.class.php');
	require_once(SRV_DIR . '/classes/node.class.php');
	require_once(SRV_DIR . '/classes/rating.class.php');
	require_once(SRV_DIR . '/classes/image.class.php');

	//Call the menu

	require_once(SRV_DIR . '/classes/navigate.class.php');

	$drive = new Navigate();
	$drive->execute(array('controller'=>$_POST['controller'],'action'=>$_POST['action'],'param'=>$_POST['param']));

?>