<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:26:06
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race_horde.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1044593370575017ced1d8f7-69170594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfab7effd19c41809c74173349a07b9cd96f1a73' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race_horde.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044593370575017ced1d8f7-69170594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HordeRaces' => 0,
    'Horde' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575017ced55967_76712179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575017ced55967_76712179')) {function content_575017ced55967_76712179($_smarty_tpl) {?><div class="racegroup horde">
<span class="race-title"><?php echo $_smarty_tpl->getConfigVariable('Horde');?>
</span>
	<?php  $_smarty_tpl->tpl_vars['Horde'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Horde']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HordeRaces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Horde']->key => $_smarty_tpl->tpl_vars['Horde']->value) {
$_smarty_tpl->tpl_vars['Horde']->_loop = true;
?>
		<div class="flag-card <?php echo $_smarty_tpl->tpl_vars['Horde']->value['race_link'];?>
">
			<div class="wrapper">
				<a href="/game/race/<?php echo $_smarty_tpl->tpl_vars['Horde']->value['race_link'];?>
">
					<span class="class-name"><?php echo $_smarty_tpl->tpl_vars['Horde']->value['race_name'];?>
</span>
					<span class="class-desc">
							<?php echo $_smarty_tpl->tpl_vars['Horde']->value['race_description'];?>

					</span>
				</a>
			</div>
		</div>
	<?php } ?>
</div><?php }} ?>
