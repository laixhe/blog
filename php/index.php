<?php
require __DIR__.'/base.php';

//获取栏目数据
$columnData = $server->Column()->get();

//栏目名
$columnName = empty($_GET['name']) ? 'php' :trim($_GET['name']);
$columnNameData = $server->Column()->get($columnName);
if(empty($columnNameData)){
    $columnNameData = $server->Column()->get('php');
}

//获取栏目数据目录
$columnDir = $server->Catalog()->getDir($columnNameData['name']);

//获取栏目数据-总数据不包含内容
$columnDirData = getFileJosn($columnDir . '/' . $columnNameData['name'] .'.id');

//print_r($columnDirData);