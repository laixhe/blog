<?php

/**
 * 文件数据操作
 */
class FileData{

    /**
     * Columnid.dat
     * 每新增一篇文章的对应栏目id,会追加到这个文件的末尾
     * 代表有多少个栏目id，就有多少文章id
     * 为 0 时为删除 - 末实现
     */
    public $columnDat = 'Columnid.dat';

    /**
     * 获取文章id
     * 将 Columnid.dat 转为 数组
     * @param int $id 栏目id
     * @return array
     */
    public function getColumnDat($id=0){

        //获取文件数据
        $cnstr =  $this->getFile(DATA_PATH . '/' .$this->columnDat);
        if(empty($cnstr)){
            return [];
        }
        // 将字符串转换为数组
        $cnArr = str_split($cnstr);
        if(empty($cnArr) || !is_array($cnArr)){
            return [];
        }

        $data = [];
        foreach ($cnArr as $k=>$v){
            $vid = intval($v);
            if($vid <= 0){
                continue;
            }

            //找出对应栏目的文章id
            if($id > 0){

                if($id == $vid){
                    $data[] = [
                        'id'  => $k + 1,   //文章id
                        'cid' => $vid,     //栏目id
                    ];
                }

            }else{

                $data[] = [
                    'id'  => $k + 1,   //文章id
                    'cid' => $vid,     //栏目id
                ];

            }

        }

        return $data;
    }

    /**
     * 获取某个文件的josn数据,将转为数组
     * @param string $path 路径
     * @return array
     */
    public function getFileJosn($path=''){
        return $this->getJosn( $this->getFile($path) );
    }

    /**
     * 将josn学符串数据转为数组
     * @param string $str
     * @return array
     */
    public function getJosn($str=''){

        if(!empty($str)){
            $dirData = json_decode($str,true);
            if(is_array($dirData)){
                return $dirData;
            }
        }
        return [];
    }

    /**
     * 获取某个文件数据
     * @param string $path 路径
     * @return string
     */
    public function getFile($path=''){

        $dirStr = '';
        if(is_file($path)){
            $dirStr = file_get_contents($path);
        }

        return $dirStr;

    }

}
