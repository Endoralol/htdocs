<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-28 22:17:47
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/sidebar/realm-status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13905098645746b147407d98-93384718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e6e7486f3734e09fd8edd29dd195524804fc5f' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/sidebar/realm-status.tpl',
      1 => 1464463061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13905098645746b147407d98-93384718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746b14742f469_75348619',
  'variables' => 
  array (
    'Realms' => 0,
    'Realm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746b14742f469_75348619')) {function content_5746b14742f469_75348619($_smarty_tpl) {?><div class="sidebar-module" id="sidebar-gear-store">
    <?php  $_smarty_tpl->tpl_vars['Realm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Realm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Realms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Realm']->key => $_smarty_tpl->tpl_vars['Realm']->value) {
$_smarty_tpl->tpl_vars['Realm']->_loop = true;
?>
    <div class="sts a-realm sidebar-container box-shadow">
        <div id="head" class="clearfix text-shadow">
            <p id="name"><?php echo $_smarty_tpl->tpl_vars['Realm']->value['name'];?>
</p>
            <p id="info"><?php if ($_smarty_tpl->tpl_vars['Realm']->value['status']=='down') {?><font color="red">Offline</font><?php } else { ?><font color="green">Online</font><?php }?></p>
        </div>
        <div id="containerbody" class="clearfix text-shadow">
            <p id="online"><font color="#d28010"></font> </p>
            <p id="uptime"><font color="#5b5851"><?php echo $_smarty_tpl->tpl_vars['Realm']->value['online'];?>
</font> <?php echo $_smarty_tpl->getConfigVariable('Players_Online');?>
</p>
        </div>
    </div>
    <?php } ?>
    <div class="realmlist realm_cont_show">
        <p>set realmlist <font color="#817464">logon.<?php echo $_SERVER['HTTP_HOST'];?>
</font></p>
    </div>
</div><?php }} ?>
