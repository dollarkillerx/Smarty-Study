<?php
/* Smarty version 3.1.33, created on 2019-01-17 09:36:55
  from 'G:\GITHUB\Smarty-Study\Views\modifier.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c404cb7c8ec65_71556550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6cd0b18c8aec9b0b3852f071d726c942dbb0b80' => 
    array (
      0 => 'G:\\GITHUB\\Smarty-Study\\Views\\modifier.html',
      1 => 1547717813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c404cb7c8ec65_71556550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),3=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),5=>array('file'=>'G:\\GITHUB\\Smarty-Study\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>Modifier 变量修饰器</title>
</head>
<body>
    <h1>capitalize</h1>
    <?php $_smarty_tpl->_assignInScope('str', '123thIs is string');?>
    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str']->value,false,true);?>

    <hr>
    <h1>cat</h1>
    <?php echo ($_smarty_tpl->tpl_vars['str']->value).('hero');?>

    <hr>
    <h1>统计</h1>
    <?php echo preg_match_all('/[^\s]/',$_smarty_tpl->tpl_vars['str']->value, $tmp);?>

    <hr>
    <h1>default</h1>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['str2']->value)===null||$tmp==='' ? 'Not Data' : $tmp);?>

    <hr>
    <h1>date_format</h1>
    <?php echo smarty_modifier_date_format(time(),"%y-%m-%D %H-%M-%S");?>

    <hr>
    <h1>from_charset</h1>
    <?php $_smarty_tpl->_assignInScope('chinese', '中文');?>
    <?php echo $_smarty_tpl->tpl_vars['chinese']->value;?>

    <hr>
    <h1>indent</h1>
    <?php echo preg_replace('!^!m',str_repeat(' ',10),$_smarty_tpl->tpl_vars['str']->value);?>

    <hr>
    <h1>lower</h1>
    <?php echo strtolower($_smarty_tpl->tpl_vars['str']->value);?>

    <hr>
    <h1>nl2br</h1>
    <?php $_smarty_tpl->_assignInScope('str2', "this is p1.\n This is p2.");?>
    <?php echo nl2br($_smarty_tpl->tpl_vars['str2']->value);?>

    <hr>
    <h1>regex_replace</h1>
    <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['str']->value,"/\d+/"," ");?>

    <hr>
    <h1>replace</h1>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str']->value,"123123",'0000');?>

    <hr>
    <h1>spacify</h1>
    <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['str']->value,'-');?>

    <hr>
    <h1>string_format</h1>
    <?php $_smarty_tpl->_assignInScope('float', '10.0000051511');?>
    <?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['float']->value);?>

    <hr>
    <h1>strip</h1>
    <?php $_smarty_tpl->_assignInScope('str3', 'a     b     c     d    f    ');?>
    <?php echo preg_replace('!\s+!', ' ',$_smarty_tpl->tpl_vars['str3']->value);?>

    <hr>
    <h1>strip_tags</h1>
    <?php $_smarty_tpl->_assignInScope('tag', '<b>Font</b>');?>
    <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['tag']->value);?>

    <hr>
    <h1>truncate</h1>
    <?php $_smarty_tpl->_assignInScope('bigstr', 'asd484f84sdf8ddsf8sdf48sdf4sd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8g4s56gsd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8gsd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8gsd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8gsd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8gsd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8gsd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8gsd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8g4sd8g4wer/89');?>
    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['bigstr']->value,10);?>

    <hr>
    <h1>escape/unescape</h1>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'ISO-8859-1', true);?>

    <hr>
    <h1>wordwrap</h1>
    <?php echo wordwrap($_smarty_tpl->tpl_vars['bigstr']->value,10,"\n",true);?>

    <hr>
    <h1></h1>
    <hr>
    <h1></h1>
</body>
</html><?php }
}
