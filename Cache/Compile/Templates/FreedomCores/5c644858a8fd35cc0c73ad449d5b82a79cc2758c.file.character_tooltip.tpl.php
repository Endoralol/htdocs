<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:23:46
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/character_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2429882057501742392962-31297159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c644858a8fd35cc0c73ad449d5b82a79cc2758c' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/character_tooltip.tpl',
      1 => 1464860657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2429882057501742392962-31297159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'Character' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57501742413fc1_27888256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57501742413fc1_27888256')) {function content_57501742413fc1_27888256($_smarty_tpl) {?><div class="character-tooltip">
	<span class="icon-frame frame-56">
		<img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" alt="" width="56" height="56" />
		<span class="frame"></span>
	</span>
    <h3><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</h3>
    <div class="color-c<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['translation'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['race_data']['translation'];?>
 <?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
 <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>

    </div>

    <div class="color-tooltip-<?php echo $_smarty_tpl->tpl_vars['Character']->value['side'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>

    </div>

    <div class="color-tooltip-yellow"><!--Realm Name--></div>

    <span class="clear"><!-- --></span>

</div><?php }} ?>
