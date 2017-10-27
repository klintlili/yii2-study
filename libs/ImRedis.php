<?php
/**
 * @description Redis初始化类
 * 
 * @author Jason <shuaijinchao@gmail.com>
 * 
 * @create 2015-11-29 15:38
 */

namespace klintlili\mobileQuery\libs;


class ImRedis {

    private static $redis;

    public static function getRedis()
    {
        if (!self::$redis instanceof \Redis) {
            self::$redis = new \Redis();
            //var_dump(self::$redis);die;//object(Redis)#1 (0) {}
            self::$redis->connect('127.0.0.1', 6379);
        }
        return self::$redis;
    }

}