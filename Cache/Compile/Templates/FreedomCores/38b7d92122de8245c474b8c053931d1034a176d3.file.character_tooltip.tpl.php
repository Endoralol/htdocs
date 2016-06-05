<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 11:30:43
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\blocks\character_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30777574f46838595e5-71886317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b7d92122de8245c474b8c053931d1034a176d3' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\blocks\\character_tooltip.tpl',
      1 => 1464813699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30777574f46838595e5-71886317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f468388dce3_80911335',
  'variables' => 
  array (
    'Template' => 0,
    'Character' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f468388dce3_80911335')) {function content_574f468388dce3_80911335($_smarty_tpl) {?><div class="character-tooltip">
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
