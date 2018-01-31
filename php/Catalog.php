<?php

/**
 * 目录操作
 */
class Catalog
{

//    /**
//     * @var Catalog 对象实例
//     */
//    protected static $instance;
//
//    /**
//     * 进行私有化和最终
//     */
//    final protected function __construct(){}
//    final protected function __clone(){}
//
//    /**
//     * 进行单例模式
//     * @access public
//     * @return static
//     */
//    public static function getInstance()
//    {
//        // 判断自身的单例对象实例是否是自身的实例(单例模式)
//        if (! (self::$instance instanceof self)) {
//            self::$instance = new self;
//        }
//        return self::$instance;
//    }

    /**
     * 获取数据目录的目录
     * @param string $name
     * @return string
     */
    public function getDir($name='')
    {
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