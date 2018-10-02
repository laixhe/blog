<?php
require __DIR__.'/base.php';

// 获取栏目数据
$columnData = Service::getInstance()->Column()->get();

// 栏目 id
$cid = empty($_GET['cid']) ? 1 : intval($_GET['cid']);
$cidData = Service::getInstance()->Column()->get($cid);
if(empty($cidData)){
    $cidData = Service::getInstance()->Column()->get(1);
}

// 获取栏目的文章id例表
$cnArr =  Service::getInstance()->FileData()->getColumnDat($cidData['id']);

// 获取栏目数据-总数据不包含内容
$columnDirData = [];
foreach ($cnArr as $value) {

    // 取文章信息
    $info = Service::getInstance()->Article()->getInfo($cidData['name'], $value['id']);
    if (!empty($info)){
        $columnDirData[] = $info;
    }

}

//print_r($columnDirData);echo '<br>';
