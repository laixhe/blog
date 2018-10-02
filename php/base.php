<?php
require __DIR__ .'/const.php';

// 自动加载
spl_autoload_register(function ($class){

    //echo $class,'<br>';
    if (class_exists($class)){
        return;
    }

    // 判断是否有路径
    $file = realpath(__DIR__ .'/'. $class .'.php');
    if (is_file($file)){
        require $file;
    }

},true,true);

// 按需注册服务,服务类可以一样,服务名不能重复
Service::addService(
    [
        'Column'   => Column::class,   //栏目数据
        'Catalog'  => Catalog::class,  //数据目录操作
        'FileData' => FileData::class, //文件数据操作
        'Article'  => Article::class,  //文章操作
    ]
);

// 获取服务的实例
//$server = Service::getInstance();

//echo json_encode([
//    'id'      => 1,
//    'title'   => '原码、反码、补码',
//    'cid'     => 1,
//    'cidstr'  => 'php',
//    'addtime' => time()
//]);