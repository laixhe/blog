<?php
require __DIR__.'/base.php';

//获取栏目数据
$columnData = $server->Column()->get();

//栏目名
$cid = empty($_GET['cid']) ? 1 : intval($_GET['cid']);
$cidData = $server->Column()->idGet($cid);
if(empty($cidData)){
    $cidData = $server->Column()->idGet(1);
}

//获取当前栏目的目录路径
$columnDir = $server->Catalog()->getDir($cidData['name']);
//获取文章id
$cnArr =  $server->FileData()->getColumnDat($cidData['id']);

//获取栏目数据-总数据不包含内容
$columnDirData = [];
foreach ($cnArr as $value) {
    //获取某个文件的josn数据,将转为数组
    $columnDirData[] = $server->FileData()->getFileJosn($columnDir . '/id/'.md5($value['id']).'.dat');
}

//print_r($columnDirData);echo '<br>';
