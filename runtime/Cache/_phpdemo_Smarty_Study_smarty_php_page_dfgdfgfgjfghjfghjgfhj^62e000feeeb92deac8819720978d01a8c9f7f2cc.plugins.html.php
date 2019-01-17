<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:08:52
  from 'G:\GITHUB\Smarty-Study\Views\plugins.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c407e64965c34_95603368',
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
  'cache_lifetime' => 86400,
),true)) {
function content_5c407e64965c34_95603368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html>
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
    <?php echo smarty_modifier_date_format(time(),"%H:%M:%S");?>

    <span style="color:red">This is a para</span>
    <a href="https://github.com/dollarkillerx">This is a para</a>

    <a href="https://github.com/dollarkillerx">    aaaaaaaaaaaaaaaaaaaaaa
    aaaaaaaaaaaaaaaaaaaaaa
    </a></body>
</html><?php }
}
