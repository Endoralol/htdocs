<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:40:24
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17597636635750374900b518-18291311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a0797b0a43404ae021e0812c41c2a83146a739' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_race.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17597636635750374900b518-18291311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Race' => 0,
    'Race_Header_Description' => 0,
    'Race_Top_Description' => 0,
    'Race_Bottom_Description' => 0,
    'Template' => 0,
    'Race_Start_Title' => 0,
    'Race_Start_Description' => 0,
    'Race_Capital_Title' => 0,
    'Race_Capital_Description' => 0,
    'Race_Mount_Title' => 0,
    'Race_Mount_Description' => 0,
    'Race_Leader_Title' => 0,
    'Race_Leader_Description' => 0,
    'Ability_One_Title' => 0,
    'Ability_One_Description' => 0,
    'Ability_Two_Title' => 0,
    'Ability_Two_Description' => 0,
    'Ability_Three_Title' => 0,
    'Ability_Three_Description' => 0,
    'Ability_Four_Title' => 0,
    'Ability_Four_Description' => 0,
    'Ability_Five_Title' => 0,
    'Ability_Five_Description' => 0,
    'Ability_Six_Title' => 0,
    'Ability_Six_Description' => 0,
    'Language' => 0,
    'RaceNavigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750374914f5c9_49328937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750374914f5c9_49328937')) {function content_5750374914f5c9_49328937($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
					<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/game/race" rel="np" class="breadcrumb-arrow" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Game_Races');?>
</span>
						</a>
					</li>
					<li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/game/race/<?php echo $_smarty_tpl->tpl_vars['Race']->value['race'];?>
" rel="np" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Race']->value['race_full_name'];?>
</span>
						</a>
					</li>
				</ol>
			</div>
			<div class="content-bot clear">
				<div id="content-subheader">
					<a class="race-parent" href="./"><?php echo $_smarty_tpl->getConfigVariable('WoW_Races');?>
</a>
												<span class="clear"><!-- --></span>
					<h4><?php echo $_smarty_tpl->tpl_vars['Race']->value['race_full_name'];?>
</h4>
				</div>
				<span class="clear"><!-- --></span>
				<div class="faction-req">
						<?php if ($_smarty_tpl->tpl_vars['Race']->value['can_join_alliance']==1&&$_smarty_tpl->tpl_vars['Race']->value['can_join_horde']==1) {?> 
							 <span class="group alliance"><?php echo $_smarty_tpl->getConfigVariable('Alliance');?>
</span> &nbsp; / &nbsp; <span class="group horde"><?php echo $_smarty_tpl->getConfigVariable('Horde');?>
</span>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['Race']->value['can_join_alliance']==1) {?>
								<span class="group alliance"><?php echo $_smarty_tpl->getConfigVariable('Alliance');?>
</span>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['Race']->value['can_join_horde']==1) {?>
								<span class="group horde"><?php echo $_smarty_tpl->getConfigVariable('Horde');?>
</span>
							<?php }?>
						<?php }?>
				</div>
				<span class="clear"><!-- --></span>
				<div class="left-col">
					<div class="story-highlight">
						<p>
							<?php $_smarty_tpl->tpl_vars["Race_Header_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['race_head_description'], null, 0);?>
							<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Header_Description']->value);?>

						</p>
					</div>
					<div class="story-main">
						<p><?php $_smarty_tpl->tpl_vars["Race_Top_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['race_top_description'], null, 0);?>
							<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Top_Description']->value);?>
</p>
						<div class="story-illustration"></div>
						<p><?php $_smarty_tpl->tpl_vars["Race_Bottom_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['race_bottom_description'], null, 0);?>
							<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Bottom_Description']->value);?>
</p>
					</div>
					<?php $_smarty_tpl->tpl_vars["Race_Start_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['start_location_title'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars["Race_Start_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['start_location_description'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars["Race_Capital_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['capital_title'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars["Race_Capital_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['capital_description'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars["Race_Mount_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['mount_title'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars["Race_Mount_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['mount_description'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars["Race_Leader_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['leader_title'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars["Race_Leader_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['leader_description'], null, 0);?>

					<div class="race-basic start-location" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game/race/<?php echo $_smarty_tpl->tpl_vars['Race']->value['race'];?>
/start-location.jpg)">
						<h5 class="basic-header"><span class="overview-icon"></span><?php echo $_smarty_tpl->getConfigVariable('Race_Start_Location');?>
<span><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Start_Title']->value);?>
</span></h5>
						<div class="basic-story"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Start_Description']->value);?>
</div>


					<?php if ($_smarty_tpl->tpl_vars['Race']->value['race']!="worgen") {?>
					<div class="race-basic home-city" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game/race/<?php echo $_smarty_tpl->tpl_vars['Race']->value['race'];?>
/home.jpg)">
						<h5 class="basic-header"><span class="overview-icon"></span><?php echo $_smarty_tpl->getConfigVariable('Race_Capital');?>
<span><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Capital_Title']->value);?>
</span></h5>
						<div class="basic-story"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Capital_Description']->value);?>
</div>

					<?php }?>

					<div class="race-basic racial-mount" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game/race/<?php echo $_smarty_tpl->tpl_vars['Race']->value['race'];?>
/mount.jpg)">
						<h5 class="basic-header"><span class="overview-icon"></span><?php echo $_smarty_tpl->getConfigVariable('Race_Mount');?>
<span><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Mount_Title']->value);?>
</span></h5>
						<div class="basic-story"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Mount_Description']->value);?>
</div>



					<?php if ($_smarty_tpl->tpl_vars['Race']->value['race']!="pandaren") {?>
						<div class="race-basic leader" style="background-image:url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game/race/<?php echo $_smarty_tpl->tpl_vars['Race']->value['race'];?>
/leader.jpg)">
							<h5 class="basic-header"><span class="overview-icon"></span><?php echo $_smarty_tpl->getConfigVariable('Race_Leader');?>
<span><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Leader_Title']->value);?>
</span></h5>
							<div class="basic-story"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Race_Leader_Description']->value);?>
</div>
						</div>
					<?php }?>

					<span class="clear"><!-- --></span>
							</div>

					<span class="clear"><!-- --></span>
							<?php if ($_smarty_tpl->tpl_vars['Race']->value['race']!="worgen") {?>
							</div>
							<?php }?>

					<span class="clear"><!-- --></span>
					</div>
				</div>

				<div class="right-col">
					<div class="game-scrollbox">
							<div class="wrapper">
								<?php $_smarty_tpl->tpl_vars["Ability_One_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_one_title'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_One_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_one_desc'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Two_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_two_title'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Two_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_two_desc'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Three_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_three_title'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Three_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_three_desc'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Four_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_four_title'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Four_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_four_desc'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Five_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_five_title'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Five_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_five_desc'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Six_Title"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_six_title'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["Ability_Six_Description"] = new Smarty_variable($_smarty_tpl->tpl_vars['Race']->value['racial_ability_six_desc'], null, 0);?>
								<div class="scroll-title"><?php echo $_smarty_tpl->getConfigVariable('Race_Racial_Abilities');?>
</div>
								<div class="scroll-content">
										<div class="feature-list">
												<div class="feature-item clear-after">
													<span class="icon-frame-gloss float-left" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Race']->value['racial_ability_one_image'];?>
.jpg)">
														<span class="frame"></span>
													</span>
													<div class="feature-wrapper">
														<span class="feature-item-title"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_One_Title']->value);?>
</span>
														<p class="feature-item-desc"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_One_Description']->value);?>
</p>
													</div>
												<span class="clear"><!-- --></span>
												</div>
												<div class="feature-item clear-after">
													<span class="icon-frame-gloss float-left" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Race']->value['racial_ability_two_image'];?>
.jpg)">
														<span class="frame"></span>
													</span>
													<div class="feature-wrapper">
														<span class="feature-item-title"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Two_Title']->value);?>
</span>
														<p class="feature-item-desc"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Two_Description']->value);?>
</p>
													</div>
												<span class="clear"><!-- --></span>
												</div>
												<div class="feature-item clear-after">
													<span class="icon-frame-gloss float-left" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Race']->value['racial_ability_three_image'];?>
.jpg)">
														<span class="frame"></span>
													</span>
													<div class="feature-wrapper">
														<span class="feature-item-title"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Three_Title']->value);?>
</span>
														<p class="feature-item-desc"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Three_Description']->value);?>
</p>
													</div>
												<span class="clear"><!-- --></span>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['Race']->value['racial_ability_four_title']!='') {?>
												<div class="feature-item clear-after">
													<span class="icon-frame-gloss float-left" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Race']->value['racial_ability_four_image'];?>
.jpg)">
														<span class="frame"></span>
													</span>
													<div class="feature-wrapper">
														<span class="feature-item-title"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Four_Title']->value);?>
</span>
														<p class="feature-item-desc"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Four_Description']->value);?>
</p>
													</div>
												<span class="clear"><!-- --></span>
												</div>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['Race']->value['racial_ability_five_title']!='') {?>
												<div class="feature-item clear-after">
													<span class="icon-frame-gloss float-left" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Race']->value['racial_ability_five_image'];?>
.jpg)">
														<span class="frame"></span>
													</span>
													<div class="feature-wrapper">
														<span class="feature-item-title"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Five_Title']->value);?>
</span>
														<p class="feature-item-desc"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Five_Description']->value);?>
</p>
													</div>
												<span class="clear"><!-- --></span>
												</div>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['Race']->value['racial_ability_six_title']!='') {?>
												<div class="feature-item clear-after">
													<span class="icon-frame-gloss float-left" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/<?php echo $_smarty_tpl->tpl_vars['Race']->value['racial_ability_six_image'];?>
.jpg)">
														<span class="frame"></span>
													</span>
													<div class="feature-wrapper">
														<span class="feature-item-title"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Six_Title']->value);?>
</span>
														<p class="feature-item-desc"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['Ability_Six_Description']->value);?>
</p>
													</div>
												<span class="clear"><!-- --></span>
												</div>
												<?php }?>
										</div>
								</div>
							</div>
							<div class="scroll-bg"></div>
						</div>
						<?php echo $_smarty_tpl->getSubTemplate ("pages/game_race_class.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<div class="fansite-link-box">
								<div class="wrapper">
									<span class="fansite-box-title"><?php echo $_smarty_tpl->getConfigVariable('Game_Learn_More');?>
</span>
									<p><?php echo $_smarty_tpl->getConfigVariable('Race_Learn_More_Fan');?>
</p>
									<div id="sdgksdngklsdngl35" class="fansite-group">
										<a href="http://<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.wowhead.com/race=<?php echo $_smarty_tpl->tpl_vars['Race']->value['race_id'];?>
" target="_blank">Wowhead</a> 
										<a href="http://wowpedia.ru/wiki/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['Race']->value['race'],'-','_');?>
" target="_blank">Wowpedia</a>
									</div>
								</div>
							</div>
				</div>
				<span class="clear"><!-- --></span>
				<div class="guide-page-nav">
					<span class="current-guide-title"><?php echo $_smarty_tpl->tpl_vars['Race']->value['race_full_name'];?>
</span>
					<a class="ui-button next-race button1 next" href="<?php echo $_smarty_tpl->tpl_vars['RaceNavigation']->value['nextrace'];?>
">
						<span class="button-left">
							<span class="button-right"> 
								<?php echo $_smarty_tpl->getConfigVariable('Race_Next_Race');?>
 <?php echo $_smarty_tpl->tpl_vars['RaceNavigation']->value['nextname'];?>

							</span>
						</span>
					</a>
					<a class="ui-button previous-race button1 previous" href="<?php echo $_smarty_tpl->tpl_vars['RaceNavigation']->value['previousrace'];?>
">
						<span class="button-left">
							<span class="button-right"> 
								<?php echo $_smarty_tpl->getConfigVariable('Race_Prev_Race');?>
 <?php echo $_smarty_tpl->tpl_vars['RaceNavigation']->value['previousname'];?>

							</span>
						</span>
					</a>			
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
