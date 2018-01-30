<?php
require __DIR__ .'/const.php';

//自动加载
spl_autoload_register(function ($class){

    //判断是否有路径
    $file = realpath(__DIR__ .'/'. $class .'.php');
    if (is_file($file)){
        if (!class_exists($class)){
            require $file;
            //echo $file,'<br>';
        }
    }

},true,true);

//按需注册服务,服务类可以一样,服务名不能重复
Service::addService(
    [
        'Column'=>Column::class,   //栏目数据
        'Catalog'=>Catalog::class, //数据目录操作
    ]
);

/**
 * 获取某个文件下josn数据
 * @param string $path 路径
 * @return array
 */
function getFileJosn($path=''){

    if(is_file($path)){
        $dirStr = file_get_contents($path);
        if(!empty($dirStr)){
            $dirData = json_decode($dirStr,true);
            if(is_array($dirData)){
                return $dirData;
            }
        }
    }
    return [];
}

//获取服务的实例
$server = Service::getInstance();

//echo $server->Catalog()->getDir('golang');
//echo json_encode([[
//    'id'      => 1,
//    'idstr'   => md5(1),
//    'title'   => '未果"标题"',
//    'typeid'  => 1,
//    'typestr' => 'php',
//    'addtime' => time()
//]]);