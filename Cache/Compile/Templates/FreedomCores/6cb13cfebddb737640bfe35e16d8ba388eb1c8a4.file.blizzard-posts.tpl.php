<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 11:16:12
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/sidebar/blizzard-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10133204445746b0cc060351-81160944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb13cfebddb737640bfe35e16d8ba388eb1c8a4' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/sidebar/blizzard-posts.tpl',
      1 => 1446309400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10133204445746b0cc060351-81160944',
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
  'unifunc' => 'content_5746b0cc0e35f0_76710482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746b0cc0e35f0_76710482')) {function content_5746b0cc0e35f0_76710482($_smarty_tpl) {?><div class="sidebar-module " id="sidebar-blizzard-posts">
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
