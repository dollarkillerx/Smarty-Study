<?php
/* Smarty version 3.1.33, created on 2019-01-16 13:52:39
  from 'G:\GITHUB\Smarty-Study\Views\smarty.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f3727269a36_39962024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e259f970a03b0d6830d7fa19a1a31458f705ce86' => 
    array (
      0 => 'G:\\GITHUB\\Smarty-Study\\Views\\smarty.html',
      1 => 1547646756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3f3727269a36_39962024 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>SmartyTest</title>
</head>
<body>
    <h2><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h2>
    <h3><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</h3>
    <pre>
        <?php echo var_dump($_ENV);?>

    </pre>
    <h5><?php echo time();?>
</h5>
    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'base.conf', null, 0);
?>

    <h6><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FONT_SIZE');?>
</h6>
    <h6><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'FONT_COLOR');?>
</h6>
</body>
</html><?php }
}
