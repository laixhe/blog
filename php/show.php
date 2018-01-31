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

//获取栏目数据目录
//$columnDir = $server->Catalog()->getDir($cidData['name']);

//获取栏目数据-总数据不包含内容
//$columnDirData = getFileJosn($columnDir . '/' . $columnNameData['name'] .'.id');

//print_r($columnDirData);