<?php

namespace App;

//require '/composer/vendor/autoload.php';
require('../vendor/autoload.php');

// BEGIN (write your solution here)
$app = new \Slim\App();

$app->get('/', function ($request, $response) {
    $response->write('Welcome to Hexlet!!!!!!');
    return $response;
});
$app->run();
// END
