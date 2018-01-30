<?php
require __DIR__ .'/const.php';

//自动加载
spl_autoload_register(function ($class){

    //判断是否有路径
    $file = __DIR__ .'/'. $class .'.php';
    if (is_file($file)){
        if (!class_exists($class)){
            require $file;
            //echo $file;
        }
    }

},true,true);

//按需注册服务,服务类可以一样,服务名不能重复
Service::addService(
    [
        'Column'=>Column::class, //栏目数据
    ]
);

//获取服务的实例
$server = Service::getInstance();

