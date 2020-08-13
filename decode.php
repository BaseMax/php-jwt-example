<?php
// https://github.com/BaseMax/php-jwt-example
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
$key = '83aeee518617ad6f3393bf0685e37d3e';

// plain text
$token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.IkhlbGxvLCBXb3JsZCEi.evA2B8m545JM5epoHgmBIA_Qy6W3CMHcoHhR6LHFkHjmEPp7zDtIbZCqf3hTjZNfLNKghKSdNmfOF6sRMuXmIA';
$decode = JWT::decode($token, $key, array('HS512'));
print $decode."\n";
