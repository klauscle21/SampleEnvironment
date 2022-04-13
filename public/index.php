<?php

//dirname params must be same
require_once realpath(dirname(__DIR__, 1) . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->load();

echo '<pre>';
var_dump($_ENV['SAMPLE_EMAIL']);
echo $_ENV['SAMPLE_EMAIL'];
echo '</pre>';
