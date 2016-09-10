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

	];
};



