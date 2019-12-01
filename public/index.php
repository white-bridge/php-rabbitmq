<?php
/**
 * Created by PhpStorm.
 * User: zhanmei
 * Date: 2019/11/30
 * Time: 下午7:41
 */
phpinfo();

define('APP_START_TIME',microtime(true));

// 自动加载文件
require __DIR__ . '/../bootstrap/autoload.php';

// 注册app
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 运行app
$app->run();