<?php

$request = $_SERVER['REQUEST_URI'];

$viewDir = '/view/';
switch ($request) {
    case '':

    case '/view/404':
        require __DIR__ . $viewDir . '404.php';
        break;



    default:
        require __DIR__ . $viewDir . 'dashboard.php';
        break;
}
/*newwww*/