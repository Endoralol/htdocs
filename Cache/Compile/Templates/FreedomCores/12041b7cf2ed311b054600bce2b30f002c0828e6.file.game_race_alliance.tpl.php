<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:26:06
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race_alliance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567170774575017ced01376-41562475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12041b7cf2ed311b054600bce2b30f002c0828e6' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race_alliance.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1567170774575017ced01376-41562475',
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
  'unifunc' => 'content_575017ced19046_90402714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575017ced19046_90402714')) {function content_575017ced19046_90402714($_smarty_tpl) {?><div class="racegroup alliance">
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
