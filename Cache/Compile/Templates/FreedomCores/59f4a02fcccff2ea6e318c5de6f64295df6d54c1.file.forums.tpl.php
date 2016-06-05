<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:17:49
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/sidebar/forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17905811075746bf3dc3cc38-41450701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f4a02fcccff2ea6e318c5de6f64295df6d54c1' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/sidebar/forums.tpl',
      1 => 1446496976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17905811075746bf3dc3cc38-41450701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Forums' => 0,
    'Forum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bf3dc77b28_71814012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bf3dc77b28_71814012')) {function content_5746bf3dc77b28_71814012($_smarty_tpl) {?><div class="sidebar-content">

	<ul class="articles-list-plain">

            <?php  $_smarty_tpl->tpl_vars['Forum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Forum']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Forums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Forum']->key => $_smarty_tpl->tpl_vars['Forum']->value) {
$_smarty_tpl->tpl_vars['Forum']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Forum']->key;
?>
			<li>
				<a href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['id'];?>
" class="title">
					<?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['topic'];?>

				</a>

				<a href="/forum/<?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['id'];?>
" class="category">
					<?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['forum_name'];?>

				</a>
				<span class="date"><?php echo date("d.m.y G:i",$_smarty_tpl->tpl_vars['Forum']->value[0]['post_time']);?>
</span>
			</li>
            <?php } ?>

	</ul>

</div><?php }} ?>
