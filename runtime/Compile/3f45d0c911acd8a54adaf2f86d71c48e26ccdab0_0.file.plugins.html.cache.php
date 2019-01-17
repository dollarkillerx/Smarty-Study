<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:08:52
  from 'G:\GITHUB\Smarty-Study\Views\plugins.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c407e64958af0_35758240',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '3f45d0c911acd8a54adaf2f86d71c48e26ccdab0' => 
    array (
      0 => 'G:\\GITHUB\\Smarty-Study\\Views\\plugins.html',
      1 => 1547730530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c407e64958af0_35758240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'G:\\GITHUB\\Smarty-Study\\Plugins\\function.font.php','function'=>'smarty_function_font',),2=>array('file'=>'G:\\GITHUB\\Smarty-Study\\Plugins\\modifier.link.php','function'=>'smarty_modifier_link',),3=>array('file'=>'G:\\GITHUB\\Smarty-Study\\Plugins\\block.link.php','function'=>'smarty_block_link',),));
echo '/*%%SmartyNocache:1752828055c407e648fb713_50891292%%*/<?php $_smarty_tpl->_checkPlugins(array(0=>array(\'file\'=>\'G:\\\\GITHUB\\\\Smarty-Study\\\\libs\\\\plugins\\\\modifier.date_format.php\',\'function\'=>\'smarty_modifier_date_format\',),));
?>/*/%%SmartyNocache:1752828055c407e648fb713_50891292%%*/';
$_smarty_tpl->compiled->nocache_hash = '1752828055c407e648fb713_50891292';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>Plugins</title>
</head>
<body>
    <!---->
    <!--<H1></H1>-->
    <!---->
    <?php echo '/*%%SmartyNocache:1752828055c407e648fb713_50891292%%*/<?php echo smarty_modifier_date_format(time(),"%H:%M:%S");?>
/*/%%SmartyNocache:1752828055c407e648fb713_50891292%%*/';?>

    <?php echo smarty_function_font(array('text'=>$_smarty_tpl->tpl_vars['text']->value,'color'=>'red'),$_smarty_tpl);?>

    <?php echo smarty_modifier_link($_smarty_tpl->tpl_vars['text']->value,'https://github.com/dollarkillerx');?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>'https://github.com/dollarkillerx'));
$_block_repeat=true;
echo smarty_block_link(array('href'=>'https://github.com/dollarkillerx'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    aaaaaaaaaaaaaaaaaaaaaa
    aaaaaaaaaaaaaaaaaaaaaa
    <?php $_block_repeat=false;
echo smarty_block_link(array('href'=>'https://github.com/dollarkillerx'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</body>
</html><?php }
}
