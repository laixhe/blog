<?php

/**
 * 文章操作
 */
class Article {

    /**
     * 获取文章基本信息
     */
    public function getInfo($dirName, $id){

        // 获取当前栏目的目录路径
        $columnDir = Service::getInstance()->Catalog()->getDir($dirName);

        // 文章id md5
        $idMD5 = md5($id);

        // 获取某个文件的josn数据,将转为数组 - 取文章信息
        $info = Service::getInstance()->FileData()->getFileJosn($columnDir . '/id/'.$idMD5.'.dat');
        if (empty($info)){
            return [];
        }

        return $info;

    }

    /**
     * 获取文章内容
     */
    public function getContent($dirName, $id){

        // 获取当前栏目的目录路径
        $columnDir = Service::getInstance()->Catalog()->getDir($dirName);

        // 文章id md5
        $idMD5 = md5($id);

        return Service::getInstance()->FileData()->getFile($columnDir . '/data/'.$idMD5.'.dat');

    }

    /**
     * 新增
     */
    public function add(){

    }

    /**
     * 删除
     */
    public function del(){

    }

    /**
     * 修改
     */
    public function update(){

    }
}
