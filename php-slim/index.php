<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    $data = new stdClass();
    $data->Output = "Deploy Done!";

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();
