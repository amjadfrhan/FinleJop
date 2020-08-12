<?php
$DBConInfo = [
    'server'   => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'name'     => 'test',
];
$DB=new mysqli(
    $DBConInfo['server'],
    $DBConInfo['username'],
    $DBConInfo['password'],
    $DBConInfo['name']
);
if($DB -> connect_errno){
    echo "DataBase Connection Error"."<br>";
    echo $DB->connect_errno;
    exit;
}
require 'DataBase.php';
$db= new DataBase($DB);
?>