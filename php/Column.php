<?php

/**
 * Class Column
 * 栏目数据
 * 只能 (1 - 9) 9个栏目
 */
class Column
{

    //数据
    private $data = [];

    public function __construct()
    {
        $this->getData();
    }

    /**
     * 获取文件数据
     * @return array
     */
    private function getData()
    {

        //读取文件数据
        $file = COLUMN_PATH .'/column.json';
        if (is_file($file)){
            $isFile =  file_get_contents($file);
            if(!empty($isFile)){
                $data = json_decode($isFile,true);
                if (is_array($data)){
                    $this->data = $data;
                    return $data;
                }
            }
        }

        return [];
    }

    /**
     * 获取数据
     * @param string $key
     * @return array
     */
    public function get($key = '')
    {
        if (empty($this->data)){
            return [];
        }
        if (empty($key)){
            return $this->data;
        }

        if (empty($this->data[$key])){
            return [];
        }

        return $this->data[$key];
    }

    /**
     * 获取数据
     * @param int $id
     * @return array
     */
    public function idGet($id=0)
    {
        if (empty($this->data)){
            return [];
        }
        if ($id <= 0){
            return $this->data;
        }

        foreach ($this->data as $v){
            if($v['id'] == $id){
                return $v;
            }
        }

        return [];
    }

}