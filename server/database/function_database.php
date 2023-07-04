<?php
use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'your_database_name',
    'server' => 'your_server',
    'username' => 'your_username',
    'password' => 'your_password',
]);