<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:24:19
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/guild_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96637702857501763d67183-74048549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e15ca3063a0482d465ff95eac3240ddf3216931' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/guild_tooltip.tpl',
      1 => 1464860657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96637702857501763d67183-74048549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Guild' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57501763dbd2f8_52789318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57501763dbd2f8_52789318')) {function content_57501763dbd2f8_52789318($_smarty_tpl) {?><div class="guild-tooltip">
    <h3><?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
</h3>
    <span class="color-tooltip-horde">(<span><?php echo $_smarty_tpl->tpl_vars['Guild']->value['side']['translation'];?>
</span>)</span>
    <div class="color-tooltip-yellow">Realm Name</div>
</div><?php }} ?>
