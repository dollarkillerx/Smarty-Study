<?php
/* Smarty version 3.1.33, created on 2019-01-17 08:52:38
  from 'G:\GITHUB\Smarty-Study\Views\tag_func.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c404256017c24_03541607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1acedd2541455c4eb71c3d659d0ee13282044515' => 
    array (
      0 => 'G:\\GITHUB\\Smarty-Study\\Views\\tag_func.html',
      1 => 1547715154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loop.html' => 1,
  ),
),false)) {
function content_5c404256017c24_03541607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),2=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),4=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),5=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),6=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),7=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),8=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>单标签函数</title>
</head>
<body>
    <h1>Assign</h1>
    <?php $_smarty_tpl->_assignInScope('name', "Jason");?>
    OR
    <?php $_smarty_tpl->_assignInScope('name', "Dollar Killer");?>
    <h4><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4>
    <hr>
    <h1>append</h1>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['arr1']) ? $_smarty_tpl->tpl_vars['arr1']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array["4"] = "5";
$_smarty_tpl->_assignInScope('arr1', $_tmp_array);?>
    <?php echo var_dump($_smarty_tpl->tpl_vars['arr1']->value);?>

    <hr>
    <h1>ldelim</h1>
    {$name}
    <hr>
    <h1>include</h1>
    <?php $_smarty_tpl->_subTemplateRender('file:loop.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <hr>
    <h1>html_checkboxes</h1>
    <?php echo smarty_function_html_checkboxes(array('name'=>'hobby','values'=>$_smarty_tpl->tpl_vars['hobby_ids']->value,'output'=>$_smarty_tpl->tpl_vars['hobby_output']->value),$_smarty_tpl);?>

    <hr>
    <h1>html_image</h1>
    <?php echo smarty_function_html_image(array('width'=>"690",'height'=>"388",'alt'=>"DollarkILLER",'href'=>'https://github.com/dollarkillerx','file'=>"https://upload-images.jianshu.io/upload_images/11692305-3bffdaaf46cf2e9e.jpeg"),$_smarty_tpl);?>

    <hr>
    <h1>html_options</h1>
    <?php echo smarty_function_html_options(array('name'=>'hobby','values'=>$_smarty_tpl->tpl_vars['hobby_ids']->value,'output'=>$_smarty_tpl->tpl_vars['hobby_output']->value),$_smarty_tpl);?>

    <?php echo smarty_function_html_options(array('name'=>'hobby','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

    <hr>
    <h1>html_radios</h1>
    <?php echo smarty_function_html_radios(array('name'=>'radio','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

    <hr>
    <h1>html_select_date</h1>
    <?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>

    <hr>
    <h1>html_select_time</h1>
    <?php echo smarty_function_html_select_time(array(),$_smarty_tpl);?>

    <hr>
    <h1>html_table</h1>
    <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['arr1']->value,'cols'=>2,'rows'=>3),$_smarty_tpl);?>

    <hr>
    <h1>mailto</h1>
    <?php echo smarty_function_mailto(array('address'=>"dollarkiller@d.com",'subject'=>"title",'text'=>'显示内容','cc'=>'抄送内容'),$_smarty_tpl);?>

    <hr>
    <h1>math</h1>
    <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>100,'y'=>200),$_smarty_tpl);?>

</body>
</html><?php }
}
