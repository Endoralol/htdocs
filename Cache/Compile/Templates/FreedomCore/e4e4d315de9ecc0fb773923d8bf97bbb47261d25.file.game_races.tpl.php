<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 08:01:29
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_races.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216562475575260a9ebc095-58272195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e4d315de9ecc0fb773923d8bf97bbb47261d25' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_races.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216562475575260a9ebc095-58272195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575260aa00e458_80735286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575260aa00e458_80735286')) {function content_575260aa00e458_80735286($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
						<a href="/game/race" rel="np" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Game_Races');?>
</span>
						</a>
					</li>
				</ol>
			</div>

			<div class="content-bot clear">

				<div class="section-title">
					<h2><?php echo $_smarty_tpl->getConfigVariable('Game_Races');?>
</h2>
				</div>
				<p class="main-header-desc">
					<?php echo $_smarty_tpl->getConfigVariable('Game_Races_Desc');?>

				</p>

				<?php echo $_smarty_tpl->getSubTemplate ("pages/game_race_alliance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("pages/game_race_horde.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


				<span class="clear"><!-- --></span>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
