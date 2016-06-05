<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:15:33
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\blocks\profile_inventory_bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30307574f42650fd0d7-40742753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc3a2b5d76b5c998423407932996aa3398313b4e' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\blocks\\profile_inventory_bottom.tpl',
      1 => 1445765626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30307574f42650fd0d7-40742753',
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
  'unifunc' => 'content_574f4265118271_64222815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4265118271_64222815')) {function content_574f4265118271_64222815($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Inventory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
<?php if (is_array($_smarty_tpl->tpl_vars['Item']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['Item']->value['slot']==15||$_smarty_tpl->tpl_vars['Item']->value['slot']==16) {?>
    <?php if ($_smarty_tpl->tpl_vars['Item']->value['slot']==15) {?>
    <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="21" class="slot slot-21 slot-align-right " style=" left: 132.5px; bottom: 0px;">
    <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==16) {?>
    <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="22" class="slot slot-22 " style=" left: 409.5px; bottom: 0px;">
    <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['slot']==28) {?>
    <div data-id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['slot'];?>
" data-type="28" class="slot slot-28 " style=" left: 371px; bottom: 0px;">
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
