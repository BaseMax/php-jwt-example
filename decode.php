<?php
// https://github.com/BaseMax/php-jwt-example
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
$key = '83aeee518617ad6f3393bf0685e37d3e';

// JSON
$token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.IntcInN0YXR1c1wiOlwic3VjY2Vzc1wiLFwiZGF0YTFcIjpcInRlc3QxXCIsXCJkYXRhMlwiOlwidGVzdDJcIixcImRhdGEzXCI6XCJ0ZXN0M1wiLFwiZGF0YTRcIjpcInRlc3Q0XCIsXCJkYXRhNVwiOlwidGVzdDVcIn0i.lTHo7zbetlA2su017EVukpSzL1Zj60k7mEZZHxAlz7k';
$decode = JWT::decode($token, $key, array('HS256'));
print $decode."\n";
print json_decode($decode)."\n";

// plain text
$token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.IkhlbGxvLCBXb3JsZCEi.XYtTUc2xhYATDmvY0cDzCREb-uplZf03Rq1sMFhweA4';
$decode = JWT::decode($token, $key, array('HS256'));
print $decode."\n";
