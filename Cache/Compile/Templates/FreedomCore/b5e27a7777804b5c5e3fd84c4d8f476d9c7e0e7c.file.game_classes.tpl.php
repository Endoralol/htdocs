<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 12:18:36
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_classes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139708374657529cece60b04-69850259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e27a7777804b5c5e3fd84c4d8f476d9c7e0e7c' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_classes.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139708374657529cece60b04-69850259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Classes' => 0,
    'Class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57529ced0203f2_23167031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57529ced0203f2_23167031')) {function content_57529ced0203f2_23167031($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="content">
		<div class="content-top body-top">
			<div class="content-trail">
				<ol class="ui-breadcrumb">
					<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
						</a>
					</li>
					<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/game/" rel="np" class="breadcrumb-arrow" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Game');?>
</span>
						</a>
					</li>
					<li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/game/class" rel="np" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Game_Classes');?>
</span>
						</a>
					</li>
				</ol>
			</div>

			<div class="content-bot clear">

				<div class="section-title">
					<h2><?php echo $_smarty_tpl->getConfigVariable('Game_Classes');?>
</h2>
				</div>
				<p class="main-header-desc">
					<?php echo $_smarty_tpl->getConfigVariable('Game_Classes_Desc');?>

				</p>
				<?php  $_smarty_tpl->tpl_vars['Class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ClassLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['Class']->key => $_smarty_tpl->tpl_vars['Class']->value) {
$_smarty_tpl->tpl_vars['Class']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ClassLoop']['index']++;
?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ClassLoop']['index']%2) {?>
						<div class="flag-card <?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
" style="float:right">
							<div class="wrapper">
								<a href="/game/class/<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
">
									<span class="class-name"><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_full_name'];?>
</span>
									<span class="class-type">
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
									</span>
									<span class="class-desc"><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_description_classes'];?>
</span>
								</a>
							</div>
						</div>
					<?php } else { ?>
						<div class="flag-card <?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
">
							<div class="wrapper">
								<a href="/game/class/<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
">
									<span class="class-name"><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_full_name'];?>
</span>
									<span class="class-type">
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
									</span>
									<span class="class-desc"><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_description_classes'];?>
</span>
								</a>
							</div>
						</div>
					<?php }?>
				<?php } ?>
				<span class="clear"><!-- --></span>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
