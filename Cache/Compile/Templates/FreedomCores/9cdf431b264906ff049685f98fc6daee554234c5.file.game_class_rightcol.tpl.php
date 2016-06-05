<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:40:27
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_class_rightcol.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8066509005750374b5946f4-97566235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cdf431b264906ff049685f98fc6daee554234c5' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_class_rightcol.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8066509005750374b5946f4-97566235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Class' => 0,
    'Template' => 0,
    'Ability' => 0,
    'ClassToRace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750374b5bfa64_57308993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750374b5bfa64_57308993')) {function content_5750374b5bfa64_57308993($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.replace.php';
?><div class="right-col">
	<div class="game-scrollbox">
		<div class="wrapper">
			<div class="scroll-title"><?php echo $_smarty_tpl->getConfigVariable('Features');?>
</div>
			<div class="scroll-content">
					<div class="feature-list">
							<?php  $_smarty_tpl->tpl_vars['Ability'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ability']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Class']->value['abilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ability']->key => $_smarty_tpl->tpl_vars['Ability']->value) {
$_smarty_tpl->tpl_vars['Ability']->_loop = true;
?>
								<div class="feature-item clear-after">
									<span class="icon-frame-gloss float-left" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Ability']->value['ability_icon'];?>
.jpg);">
										<span class="frame"></span>
									</span>
									<div class="feature-wrapper">
										<span class="feature-item-title"><?php echo $_smarty_tpl->tpl_vars['Ability']->value['ability_name'];?>
</span>
										<p class="feature-item-desc"><?php echo $_smarty_tpl->tpl_vars['Ability']->value['ability_description'];?>
 </p>
									</div>
									<span class="clear"><!-- --></span>
								</div>
							<?php } ?>
					</div>
			</div>
		</div>
		<div class="scroll-bg"></div>
	</div>
	<div class="available-info-box ">
		<div class="available-info-box-title"><?php echo $_smarty_tpl->getConfigVariable('Available_Races');?>
</div>
		<span class="available-info-box-desc"></span>
		<div class="list-box">
			<div class="wrapper">
					<ul>
					<?php  $_smarty_tpl->tpl_vars['ClassToRace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ClassToRace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Class']->value['can_be_picked_by']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ClassToRace']->key => $_smarty_tpl->tpl_vars['ClassToRace']->value) {
$_smarty_tpl->tpl_vars['ClassToRace']->_loop = true;
?>
						<li>
							<a href="/game/race/<?php echo $_smarty_tpl->tpl_vars['ClassToRace']->value['race'];?>
">
								<span class="icon-frame frame-36" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/medium/achievement_character_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ClassToRace']->value['race'],'-','');?>
_male.jpg);"><span class="frame"></span></span>
								<span class="list-title"><?php echo $_smarty_tpl->tpl_vars['ClassToRace']->value['race_full_name'];?>

										<div>
											<?php if ($_smarty_tpl->tpl_vars['ClassToRace']->value['can_join_alliance']&&$_smarty_tpl->tpl_vars['ClassToRace']->value['can_join_horde']) {?>
											<span class="list-faction alliance"><?php echo $_smarty_tpl->getConfigVariable('Alliance');?>
</span>,
											<span class="list-faction horde"><?php echo $_smarty_tpl->getConfigVariable('Horde');?>
</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['ClassToRace']->value['can_join_alliance']) {?>
											<span class="list-faction alliance"><?php echo $_smarty_tpl->getConfigVariable('Alliance');?>
</span>
											<?php } else { ?>
											<span class="list-faction horde"><?php echo $_smarty_tpl->getConfigVariable('Horde');?>
</span>
											<?php }?>
										</div>
								</span>
							</a>
						</li>
					<?php } ?>
					</ul>
					<span class="clear"><!-- --></span>
					<span class="clear"><!-- --></span>
			</div>
		</div>
	</div>
</div><?php }} ?>
