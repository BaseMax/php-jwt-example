<?php
// https://github.com/BaseMax/php-jwt-example
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
$key = '83aeee518617ad6f3393bf0685e37d3e';

$headers=getallheaders();
// LOG: print_r($headers);
if(!isset($headers["Authorization"])) {
   exit("No 'Authorization' header!\n");
}

$token = $headers["Authorization"];
// Remove "Bearer " at first of TOKEN
$token = substr($a, 7); // strlen("Bearer ") = 7

try {
   $decode = JWT::decode($token, $key, array('HS256'));
   print_r($decode);
   print "\n";
} catch (\Exception $e) {
   print "Error!\n";
}
