<?php
require __DIR__.'/base.php';

// 获取栏目数据
$columnData = $server->Column()->get();

// 栏目id
$cid = empty($_GET['cid']) ? 1 : intval($_GET['cid']);
$cidData = $server->Column()->get($cid);
if(empty($cidData)){
    $cidData = $server->Column()->get(1);
}

// 文章id
$id = empty($_GET['id']) ? 0 : intval($_GET['id']);
if($id <= 0){
    header('Location:/error.php');
    exit;
}

// 获取当前栏目的目录路径
$columnDir = $server->Catalog()->getDir($cidData['name']);

// 文章id md5
$idMD5 = md5($id);
// 获取某个文件的josn数据,将转为数组 - 取文章信息
$idInfo = $server->FileData()->getFileJosn($columnDir . '/id/'.$idMD5.'.dat');
if(empty($idInfo)){
    header('Location:/error.php');
    exit;
}
$idContent = $server->FileData()->getFile($columnDir . '/data/'.$idMD5.'.dat');

//print_r($idInfo);
//print_r($idContent);