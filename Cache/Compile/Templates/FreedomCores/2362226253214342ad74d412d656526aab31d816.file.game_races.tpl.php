<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 18:29:02
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/game_races.tpl" */ ?>
<?php /*%%SmartyHeaderCode:621134960574eff3ee0e4b6-13698654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2362226253214342ad74d412d656526aab31d816' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/game_races.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '621134960574eff3ee0e4b6-13698654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574eff3eeeb205_25082081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574eff3eeeb205_25082081')) {function content_574eff3eeeb205_25082081($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
