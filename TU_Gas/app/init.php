<?php

session_start();

$app = __DIR__;

require_once "{$app}/classes/ErrorHandler.php";
require_once "{$app}/classes/Validator.php";
require_once "{$app}/classes/Hash.php";
require_once "{$app}/classes/Database.php";
require_once "{$app}/classes/Auth.php";

$database = new Database();
//$user = $database->table('users')->where('username', '=', 'test')->first();

$errorHandler = new ErrorHandler();

$hash = new Hash();
//var_dump($hash->make('cats'));
//var_dump($hash->verify('cats', '$2y$10$Axiw4f82H1SGY3Dau3WuEOYP23LzQOjjCDdYTWsM7siWri9uqSJh.'));



$auth = new Auth($database, $hash);