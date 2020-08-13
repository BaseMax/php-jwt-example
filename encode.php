<?php
// https://github.com/BaseMax/php-jwt-example
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
$key = '83aeee518617ad6f3393bf0685e37d3e';

// plain text
$data = "Hello, World!";
$jwt = JWT::encode($data, $key, 'HS512');
print $jwt."\n";
