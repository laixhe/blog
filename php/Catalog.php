<?php

/**
 * 目录操作
 */
class Catalog{

    /**
     * 获取数据目录的目录
     * @param string $name
     * @return string
     */
    public function getDir($name=''){
        if (empty($name)){
            return DATA_PATH;
        }

        $paht = DATA_PATH.'/'.$name;
        if (!is_dir($paht)){
            mkdir($paht,0777,true);
        }

        return $paht;
    }

}