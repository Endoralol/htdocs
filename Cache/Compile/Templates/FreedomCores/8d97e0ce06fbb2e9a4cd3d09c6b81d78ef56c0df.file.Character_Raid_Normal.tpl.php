<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:10:50
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/parts/Character_Raid_Normal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7043180305746bd9a40d8c2-73391276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d97e0ce06fbb2e9a4cd3d09c6b81d78ef56c0df' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/parts/Character_Raid_Normal.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7043180305746bd9a40d8c2-73391276',
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
  'unifunc' => 'content_5746bd9a478065_11205788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bd9a478065_11205788')) {function content_5746bd9a478065_11205788($_smarty_tpl) {?><tr class="normal">
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
