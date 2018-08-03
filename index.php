<?php
require_once __DIR__ ."/vendor/autoload.php";

use FroTest\ResponseClass\JsonResponse;

$student = array(
	'name' => 'John Doe',
	'course' => 'Software',
	'level' => '200',
	'collection' => ['book' => 'Intro to UML', 'music' => 'rap']
);

new JsonResponse('ok', '', $student);