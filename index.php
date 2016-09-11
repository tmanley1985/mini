<?php

require './vendor/autoload.php';

function dumper($data)
{
	echo '<pre>';
	var_dump($data);
	echo '<pre>';
}

$app = new App\App;

$container = $app->getContainer();

$container['config'] = function () {
	return [
		'db_driver' => 'mysql',
		'db_host' => 'localhost',
		'db_name' => 'mini',
		'db_user' => 'homestead',
		'db_password' => 'secret'
	];
};

