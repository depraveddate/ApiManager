<?php
defined('API') or exit('http://gwalker.cn');
return array(
    //数据库连接配置
    'db'=>array(
        'host' => 'localhost',   //数据库地址
        'dbname' => 'api',   //数据库名
        'user' => 'root',    //帐号
        'passwd' => '123456',    //密码
    ),
    //session配置
    'session'=>array(
        'prefix' => 'api_',
    ),
    //版本信息
    'version'=>array(
        'no' => 'v1.0',  //版本号
        'time' => '2015-07-06 18:24',   //版本时间
    )

);
