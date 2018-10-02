<?php
require __DIR__.'/base.php';

// 获取栏目数据
$columnData = Service::getInstance()->Column()->get();

// 栏目id
$cid = empty($_GET['cid']) ? 1 : intval($_GET['cid']);
$cidData = Service::getInstance()->Column()->get($cid);
if(empty($cidData)){
    $cidData = Service::getInstance()->Column()->get(1);
}

// 文章id
$id = empty($_GET['id']) ? 0 : intval($_GET['id']);
if($id <= 0){
    header('Location:/error.php');
    exit;
}

// 取文章信息
$idInfo = Service::getInstance()->Article()->getInfo($cidData['name'], $id);
if(empty($idInfo)){
    header('Location:/error.php');
    exit;
}

// 取文章内容
$idContent = Service::getInstance()->Article()->getContent($cidData['name'], $id);

//print_r($idInfo);
//print_r($idContent);