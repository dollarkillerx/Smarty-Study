<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/17
 * Time: 下午 09:24
 */
namespace Models;

class Users
{
    public function store()
    {
        echo 'store into database';
    }

    public function getUsername()
    {
        // 查询数据库
        return 'Imooc-data';
    }


}