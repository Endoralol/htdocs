<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 18:29:02
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/game_race_alliance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1302304542574eff3eeeff55-73726694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '701745f417419f284be1f2220225c2b174518497' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/game_race_alliance.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302304542574eff3eeeff55-73726694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AllianceRaces' => 0,
    'Alliance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574eff3ef161e2_20217551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574eff3ef161e2_20217551')) {function content_574eff3ef161e2_20217551($_smarty_tpl) {?><div class="racegroup alliance">
<span class="race-title"><?php echo $_smarty_tpl->getConfigVariable('Alliance');?>
</span>
	<?php  $_smarty_tpl->tpl_vars['Alliance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Alliance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AllianceRaces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Alliance']->key => $_smarty_tpl->tpl_vars['Alliance']->value) {
$_smarty_tpl->tpl_vars['Alliance']->_loop = true;
?>
		<div class="flag-card <?php echo $_smarty_tpl->tpl_vars['Alliance']->value['race_link'];?>
">
			<div class="wrapper">
				<a href="/game/race/<?php echo $_smarty_tpl->tpl_vars['Alliance']->value['race_link'];?>
">
					<span class="class-name"><?php echo $_smarty_tpl->tpl_vars['Alliance']->value['race_name'];?>
</span>
					<span class="class-desc">
							<?php echo $_smarty_tpl->tpl_vars['Alliance']->value['race_description'];?>

					</span>
				</a>
			</div>
		</div>
	<?php } ?>
</div><?php }} ?>
