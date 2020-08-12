<?php
// https://github.com/BaseMax/php-jwt-example
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
$key = '83aeee518617ad6f3393bf0685e37d3e';

// plain text
$data = "Hello, World!";
$jwt = JWT::encode($data, $key, 'HS256');
print $jwt."\n";

// JSON
$data=[
  "status"=>"success",
  "data1"=>"test1",
  "data2"=>"test2",
  "data3"=>"test3",
  "data4"=>"test4",
  "data5"=>"test5",
];
$data = json_encode($data);
$jwt = JWT::encode($data, $key, 'HS256');
print $jwt."\n";
