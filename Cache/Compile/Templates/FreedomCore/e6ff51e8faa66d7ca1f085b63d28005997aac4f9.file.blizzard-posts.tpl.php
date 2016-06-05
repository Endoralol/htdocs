<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:11:19
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/sidebar/blizzard-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43829125157521ca78ad2e1-92097006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '43829125157521ca78ad2e1-92097006',
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
  'unifunc' => 'content_57521ca78e8694_30406529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57521ca78e8694_30406529')) {function content_57521ca78e8694_30406529($_smarty_tpl) {?><div class="sidebar-module " id="sidebar-blizzard-posts">
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
