<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:20:54
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\sidebar\forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15501574f43a6cbf992-45097732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db40cea387f77784ecf92299a4cceed5f96baa37' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\sidebar\\forums.tpl',
      1 => 1446496976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15501574f43a6cbf992-45097732',
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
  'unifunc' => 'content_574f43a6d03616_16693918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f43a6d03616_16693918')) {function content_574f43a6d03616_16693918($_smarty_tpl) {?><div class="sidebar-content">

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
