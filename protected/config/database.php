<?php

// This is the database connection configuration.
return array(
//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=localhost;dbname=activity',
	//'connectionString' => 'mysql:host=localhost;dbname=blogford_activity',
	'emulatePrepare' => true,
//	'username' => 'blogford_devuser',
//	'password' => 'H~=WXzMT?,cM',
        'username' => 'root',
        'password' => '',
	'charset' => 'utf8',
	
);