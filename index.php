<?php
require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo '<pre>';
var_dump($_ENV['SAMPLE_EMAIL']);
echo $_ENV['SAMPLE_EMAIL']; 
echo '</pre>';
