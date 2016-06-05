<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 15:02:54
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8766500435746e5ee1ec8d6-63939058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c14a5c53c8d5f5ecdb73c4244b80a69bec1d4546' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/game.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8766500435746e5ee1ec8d6-63939058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746e5ee750a09_70951021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746e5ee750a09_70951021')) {function content_5746e5ee750a09_70951021($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
					<li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/game/" rel="np" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Game');?>
</span>
						</a>
					</li>
				</ol>
			</div>
			<div class="content-bot clear">
				<div id="wiki" class="wiki directory wiki-index">
					<div class="announcement-site">
						<a href="/game/warlords-of-draenor/" class="announcement-site-link">
							<?php echo $_smarty_tpl->getConfigVariable('Game_About_Exp');?>

							<span class="arrow"></span>
						</a>
					</div>
					<div class="title">
						<h2><?php echo $_smarty_tpl->getConfigVariable('Game_Guide');?>
</h2>
						<p class="desc"><?php echo $_smarty_tpl->getConfigVariable('Game_Guide_Desc');?>
</p>
					</div>
					<div class="warlords"></div>
					<div class="index">
						<div class="main-buttons">
							<a class="main-button new" href="/game/guide/">
								<h3 style="font-size: 16px;"><?php echo $_smarty_tpl->getConfigVariable('Game_New_Players');?>
</h3>
								<div class="subtext"><?php echo $_smarty_tpl->getConfigVariable('Game_Getting_Started');?>
</div>
							</a>
							<a class="main-button returning" href="/game/returning-players-guide/">
								<h3 style="font-size: 16px;"><?php echo $_smarty_tpl->getConfigVariable('Game_Returning_Players');?>
</h3>
								<div class="subtext"><?php echo $_smarty_tpl->getConfigVariable('Game_Welcome_Back');?>
</div>
							</a>
							<a class="main-button latest" href="/game/patch-notes/">
								<h3 style="font-size: 16px;"><?php echo $_smarty_tpl->getConfigVariable('Game_Patch_Notes');?>
</h3>
								<div class="subtext"><?php echo $_smarty_tpl->getConfigVariable('Game_Learn_More');?>
</div>
							</a>
						</div>
						<div class="panel players">
							<h2 class="header "><?php echo $_smarty_tpl->getConfigVariable('Game_Player_Heroes');?>
</h2>
							<a class="circle-link" href="/game/race/">
								<i class="circle-icon race"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Races');?>

							</a>
							<a class="circle-link" href="/game/class/">
								<i class="circle-icon class"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Classes');?>

							</a>
							<a class="circle-link" href="/game/profession/">
								<i class="circle-icon profession"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Professions');?>

							</a>
							<a class="circle-link" href="/game/talent-calculator">
								<i class="circle-icon talents"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Talents');?>

							</a>
						</div>
						<div class="panel gameplay">
							<h2 class="header "><?php echo $_smarty_tpl->getConfigVariable('Game_Gameplay');?>
</h2>

							<a class="circle-link" href="/zone/">
								<i class="circle-icon dungeons"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Dungeons');?>

							</a>
							<a class="circle-link" href="/game/pvp/">
								<i class="circle-icon pvp"></i><?php echo $_smarty_tpl->getConfigVariable('Game_PvP');?>

							</a>
							<a class="circle-link" href="/game/garrisons/">
								<i class="circle-icon garrisons"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Garrisons');?>

							</a>
							<a class="circle-link" href="/game/events/">
								<i class="circle-icon events"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Events');?>

							</a>
							<a class="circle-link" href="/game/pet-battles/">
								<i class="circle-icon pets"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Pet_Battles');?>

							</a>
						</div>
						<div class="panel lore">
							<h2 class="header "><?php echo $_smarty_tpl->getConfigVariable('Game_Lore');?>
</h2>

							<a class="circle-link" href="/game/lore/">
								<i class="circle-icon lore"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Tales');?>

							</a>
								<a class="circle-link" href="/game/the-story-of-warcraft/">
								<i class="circle-icon story"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Story');?>

							</a>
								<a class="circle-link" href="/game/lore/characters/">
								<i class="circle-icon characters"></i><?php echo $_smarty_tpl->getConfigVariable('Game_Characters');?>

							</a>
						</div>
					</div>
					<span class="clear"><!-- --></span>
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
