<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:10:49
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/profile_inventory_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16851648775746bd99d7f0e9-90040745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ac2fc847d0dd90433402fa87b71565b9d48f8d' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/profile_inventory_right.tpl',
      1 => 1445441758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16851648775746bd99d7f0e9-90040745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Inventory' => 0,
    'Item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bd99dfbf35_87417644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bd99dfbf35_87417644')) {function content_5746bd99dfbf35_87417644($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Inventory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
<?php if (is_array($_smarty_tpl->tpl_vars['Item']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['Item']->value['slot']==9||$_smarty_tpl->tpl_vars['Item']->value['slot']==5||$_smarty_tpl->tpl_vars['Item']->value['slot']==6||$_smarty_tpl->tpl_vars['Item']->value['slot']==7||$_smarty_tpl->tpl_vars['Item']->value['slot']==10||$_smarty_tpl->tpl_vars['Item']->value['slot']==11||$_smarty_tpl->tpl_vars['Item']->value['slot']==12||$_smarty_tpl->tpl_vars['Item']->value['slot']==13) {?>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['slot']==9) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="10" class="slot slot-10 slot-align-right" style=" top: 0px; right: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==5) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="6" class="slot slot-6 slot-align-right" style=" top: 58px; right: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==6) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="7" class="slot slot-7 slot-align-right" style=" top: 116px; right: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==7) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="8" class="slot slot-8 slot-align-right" style=" top: 174px; right: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==10) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="11" class="slot slot-11 slot-align-right" style=" top: 232px; right: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==11) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="11" class="slot slot-11 slot-align-right" style=" top: 290px; right: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==12) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="12" class="slot slot-12 slot-align-right" style=" top: 348px; right: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==13) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="12" class="slot slot-12 slot-align-right" style=" top: 406px; right: 0px;">
        <?php }?>
                <div class="slot-inner">
                    <?php if (isset($_smarty_tpl->tpl_vars['Item']->value['data'])) {?>
                        <div class="slot-contents">
                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['itemEntry'];?>
" class="item" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['itemEntry'];?>
">
                                <img src="http://media.blizzard.com/wow/icons/56/<?php echo $_smarty_tpl->tpl_vars['Item']->value['data']['icon'];?>
.jpg" alt="" />
                                <span class="frame"></span>
                            </a>
                            <div class="details">
                                <span class="name-shadow"><?php echo $_smarty_tpl->tpl_vars['Item']->value['data']['name'];?>
</span>
                                <span class="name color-q<?php echo $_smarty_tpl->tpl_vars['Item']->value['data']['Quality'];?>
">
                                    <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['itemEntry'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['itemEntry'];?>
"><?php echo $_smarty_tpl->tpl_vars['Item']->value['data']['name'];?>
</a>
                                </span>
                                <span class="level"><?php echo $_smarty_tpl->tpl_vars['Item']->value['data']['ItemLevel'];?>
</span>
                            </div>
                    </div>
                <?php } else { ?>
                    <div class="slot-contents">
                        <a href="javascript:;" class="empty"><span class="frame"></span></a>
                    </div>
                <?php }?>
                </div>
            </div>
    <?php }?>
<?php }?>
<?php } ?><?php }} ?>
