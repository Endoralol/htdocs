<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:40:34
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/sidebar/forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16743029145752238225f094-16967839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731cc7fd1edf0e67e19e0e46ec6e89cf99e6c67d' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/sidebar/forums.tpl',
      1 => 1464893290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16743029145752238225f094-16967839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Forums' => 0,
    'Category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575223822ee755_29272290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575223822ee755_29272290')) {function content_575223822ee755_29272290($_smarty_tpl) {?><div class="sidebar-content">

	<ul class="articles-list-plain">
                <?php  $_smarty_tpl->tpl_vars['Category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Forums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Category']->key => $_smarty_tpl->tpl_vars['Category']->value) {
$_smarty_tpl->tpl_vars['Category']->_loop = true;
?>
			<li>
				<a href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
" class="title">
					<?php echo $_smarty_tpl->tpl_vars['Category']->value['topic'];?>

				</a>
				<span class="date"><?php echo date("d.m.y G:i",$_smarty_tpl->tpl_vars['Category']->value['post_time']);?>
</span>
			</li>
                <?php } ?>

	</ul>

</div><?php }} ?>
