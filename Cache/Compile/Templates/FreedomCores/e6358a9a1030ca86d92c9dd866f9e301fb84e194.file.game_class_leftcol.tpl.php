<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:40:27
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_class_leftcol.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3212546165750374b386807-73588316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6358a9a1030ca86d92c9dd866f9e301fb84e194' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_class_leftcol.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3212546165750374b386807-73588316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Class' => 0,
    'Class_Personal_Header' => 0,
    'Class_Personal_Top' => 0,
    'Class_Desc' => 0,
    'Template' => 0,
    'First_Specialization' => 0,
    'Second_Specialization' => 0,
    'Third_Specialization' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750374b4b29e3_04206681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750374b4b29e3_04206681')) {function content_5750374b4b29e3_04206681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.replace.php';
?><div class="left-col">
					<div class="story-highlight">
						<p>
							<?php $_smarty_tpl->tpl_vars["Class_Personal_Header"] = new Smarty_variable($_smarty_tpl->tpl_vars['Class']->value['class_description_personal_header'], null, 0);?>
							<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Class_Personal_Header']->value);?>

						</p>
					</div>
					<div class="story-main">
						<div class="story-illustration"></div>
						<p>
							<?php $_smarty_tpl->tpl_vars["Class_Personal_Top"] = new Smarty_variable($_smarty_tpl->tpl_vars['Class']->value['class_description_personal_top'], null, 0);?>
							<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Class_Personal_Top']->value);?>

						</p>
					</div>

					<div class="basic-info-box-list basic-info">
						<div class="basic-info-box-list-title"><span style="padding-left: 60px!important;"><?php echo $_smarty_tpl->getConfigVariable('Description');?>
</span></div>
						<div class="list-box">
							<div class="wrapper">
							<?php $_smarty_tpl->tpl_vars["Class_Desc"] = new Smarty_variable($_smarty_tpl->tpl_vars['Class']->value['class_description_personal'], null, 0);?>
							<p ><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Class_Desc']->value);?>
</p>
									<ul>
										<li>
											<span class="basic-info-title"><?php echo $_smarty_tpl->getConfigVariable('Type');?>
</span>
												<?php if ($_smarty_tpl->tpl_vars['Class']->value['can_be_tank']) {?>
													<?php echo $_smarty_tpl->getConfigVariable('Class_Role_Tank');?>
,
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['Class']->value['can_be_heal']) {?>
													<?php echo $_smarty_tpl->getConfigVariable('Class_Role_Healer');?>
,
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['Class']->value['melee_damage']) {?>
													<?php echo $_smarty_tpl->getConfigVariable('Class_Role_DPS');?>
 (<?php echo $_smarty_tpl->getConfigVariable('Damage_Type_Melee');?>
)<?php if ($_smarty_tpl->tpl_vars['Class']->value['ranged_physical']) {?>,<?php }
if ($_smarty_tpl->tpl_vars['Class']->value['ranged_arcane']) {?>,<?php }?>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['Class']->value['ranged_physical']) {?>
													<?php echo $_smarty_tpl->getConfigVariable('Class_Role_DPS');?>
 (<?php echo $_smarty_tpl->getConfigVariable('Damage_Type_Ranged_Physical');?>
)<?php if ($_smarty_tpl->tpl_vars['Class']->value['ranged_arcane']) {?>,<?php }?>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['Class']->value['ranged_arcane']) {?>
													<?php echo $_smarty_tpl->getConfigVariable('Class_Role_DPS');?>
 (<?php echo $_smarty_tpl->getConfigVariable('Damage_Type_Ranged_Arcane');?>
)
												<?php }?>
										</li>
										<li>
											<span class="basic-info-title"><?php echo $_smarty_tpl->getConfigVariable('Indicators');?>
</span>
											<?php echo $_smarty_tpl->tpl_vars['Class']->value['indicator_first_type'];?>
, <?php echo $_smarty_tpl->tpl_vars['Class']->value['indicator_second_type'];?>

										</li>
									</ul>
									<span class="clear"><!-- --></span>
							</div>
						</div>
					</div>

					<div class="basic-info-box-list talent-info">
						<div class="basic-info-box-list-title"><span style="padding-left: 60px!important;"><?php echo $_smarty_tpl->getConfigVariable('Game_Talents');?>
</span></div>
						<div class="list-box">
							<div class="wrapper">
							<p></p>
									<div class="talent-info-wrapper">
										<div class="talent-header"><?php echo $_smarty_tpl->getConfigVariable('Class_Talent_Specialization');?>
 — <?php echo $_smarty_tpl->tpl_vars['Class']->value['class_full_name'];?>
</div>
											<span class="clear"><!-- --></span>
											<div class="talent-wrapper">
												<a href="/game/tool/talent-calculator#<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
">
													<span class="talent-block" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Class']->value['first_specialization_image'];?>
.jpg)">
													<span class="circle-frame"></span>
													</span>
													<?php $_smarty_tpl->tpl_vars["First_Specialization"] = new Smarty_variable((smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Class']->value['class_name']),'-','_')).("_First_Spec_Title"), null, 0);?>
													<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['First_Specialization']->value);?>

												</a>
											</div>
											<div class="talent-wrapper">
												<a href="/game/tool/talent-calculator#<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
">
													<span class="talent-block" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Class']->value['second_specialization_image'];?>
.jpg)">
													<span class="circle-frame"></span>
													</span>
													<?php $_smarty_tpl->tpl_vars["Second_Specialization"] = new Smarty_variable((smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Class']->value['class_name']),'-','_')).("_Second_Spec_Title"), null, 0);?>
													<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Second_Specialization']->value);?>

												</a>
											</div>
											<div class="talent-wrapper">
												<a href="/game/tool/talent-calculator#<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
">
													<span class="talent-block" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Class']->value['third_specialization_image'];?>
.jpg)">
													<span class="circle-frame"></span>
													</span>
													<?php $_smarty_tpl->tpl_vars["Third_Specialization"] = new Smarty_variable((smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Class']->value['class_name']),'-','_')).("_Third_Spec_Title"), null, 0);?>
													<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Third_Specialization']->value);?>

												</a>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['Class']->value['class_name']=="druid") {?>
												<div class="talent-wrapper">
												<a href="/game/tool/talent-calculator#<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
">
													<span class="talent-block" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/spell_nature_healingtouch.jpg)">
													<span class="circle-frame"></span>
													</span>
													<?php echo $_smarty_tpl->getConfigVariable('Druid_Forth_Spec_Title');?>

												</a>
											</div>
											<?php }?>
										<span class="clear"><!-- --></span>
									</div>
									<span class="clear"><!-- --></span>
							</div>
						</div>
					</div>
				</div><?php }} ?>
