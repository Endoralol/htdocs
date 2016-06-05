<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:15:33
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\blocks\profile_inventory_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4637574f426508cef4-19035550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01dd64a45c48c71825f7d137141709af0eba100b' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\blocks\\profile_inventory_left.tpl',
      1 => 1445765462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4637574f426508cef4-19035550',
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
  'unifunc' => 'content_574f42650b9ed7_57957544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f42650b9ed7_57957544')) {function content_574f42650b9ed7_57957544($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Inventory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
<?php if (is_array($_smarty_tpl->tpl_vars['Item']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['Item']->value['slot']==0||$_smarty_tpl->tpl_vars['Item']->value['slot']==1||$_smarty_tpl->tpl_vars['Item']->value['slot']==2||$_smarty_tpl->tpl_vars['Item']->value['slot']==14||$_smarty_tpl->tpl_vars['Item']->value['slot']==4||$_smarty_tpl->tpl_vars['Item']->value['slot']==3||$_smarty_tpl->tpl_vars['Item']->value['slot']==18||$_smarty_tpl->tpl_vars['Item']->value['slot']==8) {?>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['slot']==0) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="1" class="slot slot-1" style=" left: 0px; top: 0px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==1) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="2" class="slot slot-2" style=" left: 0px; top: 58px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==2) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="3" class="slot slot-3" style=" left: 0px; top: 116px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==14) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="16" class="slot slot-16" style=" left: 0px; top: 174px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==4) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="5" class="slot slot-5" style=" left: 0px; top: 232px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==3) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="4" class="slot slot-4" style=" left: 0px; top: 290px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==18) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="19" class="slot slot-19" style=" left: 0px; top: 348px;">
        <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==8) {?>
            <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="9" class="slot slot-9" style=" left: 0px; top: 406px;">
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
<?php } ?>
<?php }} ?>
