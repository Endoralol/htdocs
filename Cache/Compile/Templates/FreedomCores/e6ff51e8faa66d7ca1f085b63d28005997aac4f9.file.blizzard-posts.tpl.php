<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 21:48:24
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/sidebar/blizzard-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87608486657500ba6920930-82899699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ff51e8faa66d7ca1f085b63d28005997aac4f9' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/sidebar/blizzard-posts.tpl',
      1 => 1464893287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87608486657500ba6920930-82899699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57500ba697eb44_36097717',
  'variables' => 
  array (
    'Forums' => 0,
    'Category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57500ba697eb44_36097717')) {function content_57500ba697eb44_36097717($_smarty_tpl) {?><div class="sidebar-module " id="sidebar-blizzard-posts">
			<div class="sidebar-title">


	<h3 class="header-3 title-forums">						<a href="/forum/">

					Last Post						</a>

</h3>
			</div>

		<div class="sidebar-content">

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

		</div>
	</div><?php }} ?>
