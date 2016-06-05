<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 13:50:20
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_patch_notes_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9746817975752b26c5e3060-15949617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e2602f8751d5f6fcede0e45bfeb01bd4b1ae5d' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_patch_notes_menu.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9746817975752b26c5e3060-15949617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MenuData' => 0,
    'Patch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752b26c646cc4_29677012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752b26c646cc4_29677012')) {function content_5752b26c646cc4_29677012($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.replace.php';
?><div class="patch-main-menu" xmlns="http://www.w3.org/1999/xhtml">
	<div class="wrapper">
		<div id="patchlist">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['Patch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Patch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MenuData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Patch']->key => $_smarty_tpl->tpl_vars['Patch']->value) {
$_smarty_tpl->tpl_vars['Patch']->_loop = true;
?>
				<li>
					<a href=
					"/game/patch-notes/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['Patch']->value['patch_version'],'.','-');?>
"><span class="patch-thumb"
					style=
					"background-image:url('/Uploads/cms/gallery/<?php echo $_smarty_tpl->tpl_vars['Patch']->value['patch_menu_icon'];?>
');">
					</span> <span class="patch-version"><?php echo $_smarty_tpl->getConfigVariable('Patch_Version');?>
 <?php echo $_smarty_tpl->tpl_vars['Patch']->value['patch_version'];?>
</span>
					<span class="patch-title"><?php echo $_smarty_tpl->tpl_vars['Patch']->value['patch_name'];?>
</span>
					<span class="clear"><!-- --></span></a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div><?php }} ?>
