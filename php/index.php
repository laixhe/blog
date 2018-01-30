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

