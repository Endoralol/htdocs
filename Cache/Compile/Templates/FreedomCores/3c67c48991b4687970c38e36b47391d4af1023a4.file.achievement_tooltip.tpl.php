<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 23:48:05
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/achievement_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3081769815747610569e972-70007255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c67c48991b4687970c38e36b47391d4af1023a4' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/achievement_tooltip.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3081769815747610569e972-70007255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'Achievement' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574761056c3581_20027547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574761056c3581_20027547')) {function content_574761056c3581_20027547($_smarty_tpl) {?><div class="wiki-tooltip">
		<span  class="icon-frame frame-56 " style='background-image: url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo strtolower($_smarty_tpl->tpl_vars['Achievement']->value['iconname']);?>
.jpg");'>
		</span>
    <h3>
        <span class="float-right color-q0"><?php echo $_smarty_tpl->tpl_vars['Achievement']->value['points'];?>
 <?php echo $_smarty_tpl->getConfigVariable('Profile_Achievements_Points');?>
</span>
        <?php echo $_smarty_tpl->tpl_vars['Achievement']->value['name'];?>

    </h3>
    <span class="color-tooltip-yellow"><?php echo $_smarty_tpl->tpl_vars['Achievement']->value['description'];?>
</span>
</div><?php }} ?>
