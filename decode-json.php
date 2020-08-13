<?php
// https://github.com/BaseMax/php-jwt-example
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
$key = '83aeee518617ad6f3393bf0685e37d3e';

// JSON
$token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdGF0dXMiOiJzdWNjZXNzIiwiZGF0YTEiOiJ0ZXN0MSIsImRhdGEyIjoidGVzdDIiLCJkYXRhMyI6InRlc3QzIiwiZGF0YTQiOiJ0ZXN0NCIsImRhdGE1IjoidGVzdDUifQ.nOa6tq6bDCiURP2GpTehux3geHiNiqQKJXaZ0M_uJ0WD0yTmKM66LS23fCAMraem58HWnmlX4V4WB7-eTfFpbQ';
$decode = JWT::decode($token, $key, array('HS512'));
print_r($decode);
// print $decode."\n";
//$object=json_decode($decode);
//print_r($object);
print "\n";
