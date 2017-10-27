<?php


//连接本地的 Redis 服务
//$redis = new \Redis();
//$redis->connect('127.0.0.1', 6379);
//echo "Connection to server sucessfully";
////查看服务是否运行
//echo "Server is running: " . $redis->ping();//Connection to server sucessfullyServer is running: +PONG
//die;
require_once "autoload.php";

use app\MobileQuery;

$params = $_POST;
$phone = $params['phone'];
$response = MobileQuery::query($phone);
if (is_array($response) and isset($response['province'])) {
    $response['phone'] = $phone;
    $response['code'] = 200;
} else {
    $response['code'] = 400;
    $response['msg'] = '手机号码错误';
}
echo json_encode($response);