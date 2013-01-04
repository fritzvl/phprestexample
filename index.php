<?php
require 'lib/Formatter.php';
require 'vendor/autoload.php';

// Initialize Propel with the runtime configuration

Propel::init(dirname(__FILE__)."/db/build/conf/wpapi-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path(dirname(__FILE__)."/db/build/classes" . PATH_SEPARATOR . get_include_path());

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    header("Content-Type: application/json");
	$result=[];
	foreach (WpCommentsQuery::create()->findByCommentAuthor($name) as $row){				
		$row->setFormatter(new \wpapi\JSONFormatter());
		$result[]=$row->getFormattedData();
	}
	echo json_encode($result);
	
});

$app->run();