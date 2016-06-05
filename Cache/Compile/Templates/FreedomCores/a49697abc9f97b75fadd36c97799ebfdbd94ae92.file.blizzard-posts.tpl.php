<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:22:39
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\sidebar\blizzard-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18129574f35ff99bb12-23430180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a49697abc9f97b75fadd36c97799ebfdbd94ae92' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\sidebar\\blizzard-posts.tpl',
      1 => 1446309400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18129574f35ff99bb12-23430180',
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
  'unifunc' => 'content_574f35ff9db5c8_84245650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f35ff9db5c8_84245650')) {function content_574f35ff9db5c8_84245650($_smarty_tpl) {?><div class="sidebar-module " id="sidebar-blizzard-posts">
			<div class="sidebar-title">


	<h3 class="header-3 title-forums">						<a href="/forum/">

					Последние сообщения


						</a>

</h3>
			</div>

		<div class="sidebar-content">

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

		</div>
	</div><?php }} ?>
