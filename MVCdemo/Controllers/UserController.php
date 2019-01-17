<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/17
 * Time: 下午 09:23
 */
namespace Controllers;

use Models\Users;
use Smarty;

class UserController extends Smarty
{
    public function create()
    {
        echo 'User create';
    }

    public function getUser()
    {
        // 通过Model查询数据
        $userModel = new Users;
        $username = $userModel->getUsername();

        $this->setTemplateDir(dirname(__DIR__) . '/Views/');
        $this->setCompileDir(dirname(__DIR__) . '/runtime/Compile/');

        // 将$username显示在对应的一个HTML文件当中，并且显示出来
        // 表现层 user/user.html
        // 将变量发送给模板（html文件）
        $this->assign('username', $username);
        $this->assign('age', 20);
        // 显示模板
        $this->display('user/user.html');
    }



}