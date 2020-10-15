<?php
	error_reporting(E_ALL & ~E_NOTICE);

	//包含所有composer组件库
	require('vendor/autoload.php');

	use NoahBuscher\Macaw\Macaw;

	Macaw::get("/", function(){
		echo "11111111111111";
	});

	Macaw::get("/hello/world", function(){
		echo "22222222222222";
	});

	Macaw::any("/hello/(:num)", function($num){
		echo "22222222222222".$num;
	});

	Macaw::get("/admin", "admin\Admin@index");
	Macaw::get("/admin/add", "admin\Demo@add");

	Macaw::get("/home", "home\Test@index");
	Macaw::get("home/add", "home\Test@add");

	Macaw::get("/demo", "admin\Demo@index");
	Macaw::get("/demo/add", "admin\Demo@add");

	Macaw::get("/test", "home\Test@index");


	Macaw::dispatch();
