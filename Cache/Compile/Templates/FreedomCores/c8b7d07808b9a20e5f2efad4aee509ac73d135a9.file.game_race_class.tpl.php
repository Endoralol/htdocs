<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:40:25
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race_class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2721804915750374915c608-36997338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8b7d07808b9a20e5f2efad4aee509ac73d135a9' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race_class.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2721804915750374915c608-36997338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Race' => 0,
    'Class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57503749172310_92855426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57503749172310_92855426')) {function content_57503749172310_92855426($_smarty_tpl) {?><div xmlns="http://www.w3.org/1999/xhtml" class="available-info-box ">
		<div class="available-info-box-title"><?php echo $_smarty_tpl->getConfigVariable('Game_Classes');?>
</div>
		<span class="available-info-box-desc"><?php echo $_smarty_tpl->getConfigVariable('Game_Classes_Avl');?>
:</span>
		<div class="list-box">
			<div class="wrapper">
					<ul>
					<?php  $_smarty_tpl->tpl_vars['Class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Race']->value['classes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Class']->key => $_smarty_tpl->tpl_vars['Class']->value) {
$_smarty_tpl->tpl_vars['Class']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['Class']->value['can_be']) {?>
							<li>
								<a href="/game/class/<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_link'];?>
">
									<span class="icon-frame frame-36 class-icon-36 class-icon-36-<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_link'];?>
">
										<span class="frame"></span>
									</span>
									<span class="list-title"><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
</span>
								</a>
							</li>
						<?php }?>
					<?php } ?>
					</ul>
	<span class="clear"><!-- --></span>
	<span class="clear"><!-- --></span>
			</div>
		</div>
	</div><?php }} ?>
