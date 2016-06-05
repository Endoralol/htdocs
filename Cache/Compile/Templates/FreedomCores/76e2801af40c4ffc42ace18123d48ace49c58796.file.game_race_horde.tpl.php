<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 18:29:02
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/game_race_horde.tpl" */ ?>
<?php /*%%SmartyHeaderCode:389822768574eff3ef18623-06715285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e2801af40c4ffc42ace18123d48ace49c58796' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/game_race_horde.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '389822768574eff3ef18623-06715285',
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
  'unifunc' => 'content_574eff3ef27c40_69112096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574eff3ef27c40_69112096')) {function content_574eff3ef27c40_69112096($_smarty_tpl) {?><div class="racegroup horde">
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
