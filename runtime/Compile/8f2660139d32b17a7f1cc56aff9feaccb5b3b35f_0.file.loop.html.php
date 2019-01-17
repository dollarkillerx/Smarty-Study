<?php
/* Smarty version 3.1.33, created on 2019-01-17 07:45:59
  from 'G:\GITHUB\Smarty-Study\Views\loop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4032b7d9b3c6_55894542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f2660139d32b17a7f1cc56aff9feaccb5b3b35f' => 
    array (
      0 => 'G:\\GITHUB\\Smarty-Study\\Views\\loop.html',
      1 => 1547711158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4032b7d9b3c6_55894542 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>Loop</title>
</head>
<body>
    <?php $_smarty_tpl->_assignInScope('number', 200);?>
    <?php if ($_smarty_tpl->tpl_vars['number']->value == 100) {?>
        this number is 100
    <?php } elseif ($_smarty_tpl->tpl_vars['number']->value == 200) {?>
        this number is 200
    <?php } else { ?>
        This number is not 100
    <?php }?>
    <hr>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (8) : 8-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 8, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <h1><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</h1>
    <?php }} else { ?>
        no loop
    <?php }
?>
    <hr>
    <?php
 while ($_smarty_tpl->tpl_vars['number']->value > 195) {?>
        <?php echo $_smarty_tpl->tpl_vars['number']->value--;?>

    <?php }?>

    <hr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', true, 'key');
$_smarty_tpl->tpl_vars['value']->show = ($_smarty_tpl->tpl_vars['value']->total > 0);
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$_smarty_tpl->tpl_vars['value']->iteration++;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
        <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['value']->index;?>

        <?php echo $_smarty_tpl->tpl_vars['value']->key;?>

        <?php echo $_smarty_tpl->tpl_vars['value']->total;?>

        <?php echo $_smarty_tpl->tpl_vars['value']->show;?>

        <?php echo $_smarty_tpl->tpl_vars['value']->first;?>

        <?php echo $_smarty_tpl->tpl_vars['value']->last;?>

    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <hr>
    <?php
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total !== 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
        <?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)];?>

    <?php
}
}
?>
</body>
</html><?php }
}
