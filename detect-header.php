<?php
// https://github.com/BaseMax/php-jwt-example
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
$key = '83aeee518617ad6f3393bf0685e37d3e';

$token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdGF0dXMiOiJzdWNjZXNzIiwiZGF0YTEiOiJ0ZXN0MSIsImRhdGEyIjoidGVzdDIiLCJkYXRhMyI6InRlc3QzIiwiZGF0YTQiOiJ0ZXN0NCIsImRhdGE1IjoidGVzdDUifQ.nOa6tq6bDCiURP2GpTehux3geHiNiqQKJXaZ0M_uJ0WD0yTmKM66LS23fCAMraem58HWnmlX4V4WB7-eTfFpbQ';
$tokens = explode('.', $token);
list($headb64, $bodyb64, $cryptob64) = $tokens;
$header = JWT::jsonDecode(Firebase\JWT\JWT::urlsafeB64Decode($headb64));
var_dump($header);
