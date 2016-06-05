<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:15:33
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\parts\Character_Raid_Normal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32120574f42652f22d5-08997116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ca7c9d0c6ee981d8973a8a1cfcb52cd902b7c3f' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\parts\\Character_Raid_Normal.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32120574f42652f22d5-08997116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Raids' => 0,
    'ClassicRaids' => 0,
    'TBCRaids' => 0,
    'WotLKRaids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4265300433_35421692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4265300433_35421692')) {function content_574f4265300433_35421692($_smarty_tpl) {?><tr class="normal">
    <td></td>
    <?php  $_smarty_tpl->tpl_vars['ClassicRaids'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ClassicRaids']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Raids']->value['Classic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ClassicRaids']->key => $_smarty_tpl->tpl_vars['ClassicRaids']->value) {
$_smarty_tpl->tpl_vars['ClassicRaids']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['ClassicRaids']->value['html'];?>

    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['TBCRaids'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TBCRaids']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Raids']->value['TBC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TBCRaids']->key => $_smarty_tpl->tpl_vars['TBCRaids']->value) {
$_smarty_tpl->tpl_vars['TBCRaids']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['TBCRaids']->value['html'];?>

    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['WotLKRaids'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['WotLKRaids']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Raids']->value['WotLK']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['WotLKRaids']->key => $_smarty_tpl->tpl_vars['WotLKRaids']->value) {
$_smarty_tpl->tpl_vars['WotLKRaids']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['WotLKRaids']->value['html'];?>

    <?php } ?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <td data-raid="brf" class="status status-incomplete"><div></div></td>
</tr><?php }} ?>
