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
$smarty->addPluginsDir('./Plugins');
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
//$smarty->assign([
//    'username'=>'dollarkiller',
//    'age'=>20,
//    'arr'=>[
//        'username'=>'dollarkiller',
//        'age'=>16
//    ],
//    'arr1'=>[1,2,3,4]
//]);
//
//$smarty->assign([
//    'hobby_ids'=>[1,2,3],
//    'hobby_output'=>['听书','code','追番']
//]);
//
//$smarty->assign('options',[
//    1=>'看书',
//    2=>'追番',
//    3=>'code',
//    4=>'听书',
//    5=>'二次元',
//]);

////注册func
//$smarty->registerPlugin('function','font',function ($attributes){
//   $text = $attributes['text'];
//   $color = $attributes['color'] ?? 'black';
//   return '<span style="color:'.$color.'">'.$text.'</span>';
//});
////注册变量修饰器
//$smarty->registerPlugin('modifier','link',function ($text,$href,$isCapitalize=false){
//    if (!$isCapitalize){
//        return '<a href="'.$href.'">'.$text.'</a>';
//    }else{
//        return '<a href="'.$href.'">'.strtoupper($text).'</a>';
//    }
//});
////注册块状函数
//$smarty->registerPlugin('block','link',function ($attributes,$text){
//    $href = $attributes['href'];
//    if (!is_null($text)){
//        return '<a href="'.$href.'">'.$text.'</a>';
//    }
//});

$smarty->assign('text','This is a para');

//显示
//$smarty->display('smarty.html',1,2);
//$smarty->display('loop.html');
//$smarty->display('tag_func.html');
//$smarty->display('modifier.html');
//$smarty->display('bloock_func.html');
$smarty->display('plugins.html');