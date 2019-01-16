<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/16
 * Time: 下午 04:47
 */
require './libs/Smarty.class.php';

$smarty = new Smarty();

//var_dump($smarty);
//exit();

//简单配置
//设置模板目录
$smarty->setTemplateDir('./Views');
//设置编译目录
$smarty->setCompileDir('./runtime/Compile');
//设置配置文件路径
$smarty->setConfigDir('./Config');
//设置插件地址
$smarty->setPluginsDir('./Plugins');
//设置cache地址
$smarty->setCacheDir('./runtime/Cache');


//配置缓存
$smarty->caching = false;
//配置缓存时间
$smarty->cache_lifetime = 60*60*24;
//设置左右标识符
$smarty->left_delimiter='{';
$smarty->right_delimiter='}';

//使用
//分配变量
//$smarty->assign('username','dollarkiller');
//$smarty->assign('age',20);
//of
$smarty->assign([
    'username'=>'dollarkiller',
    'age'=>20
]);
//显示
$smarty->display('smarty.html',1,2);
