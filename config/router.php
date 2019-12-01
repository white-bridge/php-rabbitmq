<?php
/**
 * Created by PhpStorm.
 * User: zhanmei
 * Date: 2019/12/1
 * Time: 上午11:25
 */

$uri = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/'));
switch (count($uri)){
    case 1:
        $class = \App\Http\Controllers\IndexController::class;
        $method = 'indexAction';
        break;
    case 2;
        $class = "\\App\\Http\\Controllers\\{$uri[1]}Controller";
        $method = 'indexAction';
        break;
    default:
        $class = "\\App\\Http\\Controllers\\{$uri[1]}Controller";
        $method = "{$uri[1]}Action";
}
$object = new $class;
echo call_user_func_array(array($object,$method),[]);
