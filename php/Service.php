<?php

/**
 * 服务注册
 *
 * @method Column Column()
 * @method Catalog Catalog()
 */
class Service
{

    /**
     * @var Service 服务对象实例
     */
    protected static $instance;


    /**
     * @var array 服务类实例容器
     */
    private static $instances = [];

    /**
     * @var array 注册的服务
     */
    private static $service = [];

    /**
     * 进行私有化和最终
     */
    final protected function __construct(){}
    final protected function __clone(){}

    /**
     * 获取服务的实例（单例）
     * @access public
     * @return static
     */
    public static function getInstance()
    {
        // 判断自身的单例对象实例是否是自身的实例(单例模式)
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * 按需注册服务,服务类可以一样,服务名不能重复
     * @param array $service 服务配置数组
     */
    public static function addService($service)
    {
        self::$service = array_merge(self::$service,$service);
    }

    /**
     * 根据服务名返回注册的服务
     * @param string $name 服务名
     * @return Service 返回所有实例化的服务类
     */
    private function createService($name)
    {

        if (isset(self::$instances[$name])){
            //已存在就返回
            return self::$instances[$name];
        }

        if (isset(self::$service[$name])){

            if(class_exists(self::$service[$name])){

                //进行注册服务，并返回
                self::$instances[$name] = new self::$service[$name];

                return self::$instances[$name];
            }

        }

        throw new \Exception('Unkonw service: '.$name, 500);
    }

    /**
     * 魔术方法,返回方法对应的服务类
     * @param string $name 方法名
     * @param array $arguments 方法参数
     * @return Service 返回方法对应的服务类
     */
    public function __call($name, $arguments)
    {
        return $this->createService($name);
    }
}