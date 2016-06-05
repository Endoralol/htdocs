<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:19:47
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/character_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15961253685746bfb3940254-98550277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1969941a7f3cc95161dd11388673d89cb8584b0' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/character_tooltip.tpl',
      1 => 1445448854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15961253685746bfb3940254-98550277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'Character' => 0,
    'Specializations' => 0,
    'Spec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bfb3a07e07_54127579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bfb3a07e07_54127579')) {function content_5746bfb3a07e07_54127579($_smarty_tpl) {?><div class="character-tooltip">
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

    <div class="color-tooltip-yellow">Realm Name</div>

    <span class="clear"><!-- --></span>
	<span class="character-spec">
        <?php  $_smarty_tpl->tpl_vars['Spec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Spec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Specializations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Spec']->key => $_smarty_tpl->tpl_vars['Spec']->value) {
$_smarty_tpl->tpl_vars['Spec']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['Spec']->value['spec']==$_smarty_tpl->tpl_vars['Spec']->value['activespec']) {?>
                <span class="icon">
                    <span class="icon-frame frame-12 ">
                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/medium/spec_<?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['Spec']->value['name'];?>
.jpg" alt="" width="12" height="12" />
                    </span>
                </span>
                <span class="name">
                    <?php echo $_smarty_tpl->tpl_vars['Spec']->value['Description'];?>

                </span>
            <?php }?>
        <?php } ?>
	<span class="clear"><!-- --></span>
	</span>

</div><?php }} ?>
