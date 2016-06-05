<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 23:48:15
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_achievements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9941175455747610f9fc780-00855149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b73b33088211168debf1875d465f327338195048' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_achievements.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9941175455747610f9fc780-00855149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Character' => 0,
    'Template' => 0,
    'Categories' => 0,
    'Category' => 0,
    'Subcat' => 0,
    'AStatus' => 0,
    'CalculatePercentage' => 0,
    'CompletedAchievements' => 0,
    'Achievement' => 0,
    'CompletedCount' => 0,
    'PointsCount' => 0,
    'BuildPercentage' => 0,
    'CountFoS' => 0,
    'LastFive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5747610fb8f680_25963654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747610fb8f680_25963654')) {function content_5747610fb8f680_25963654($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/var/www/u0198439/data/www/pt-wow.ru/Core/Libraries/Smarty/plugins/modifier.relative_date.php';
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
                    <a href="/community/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Community');?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Achievements');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div id="profile-wrapper" class="profile-wrapper profile-wrapper-<?php echo $_smarty_tpl->tpl_vars['Character']->value['side'];?>
">
                <div class="profile-sidebar-anchor">
                    <div class="profile-sidebar-outer">
                        <div class="profile-sidebar-inner">
                            <div class="profile-sidebar-contents">
                                <div class="profile-sidebar-crest">
                                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" rel="np" class="profile-sidebar-character-model" style="background-image: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/inset/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg);">
                                        <span class="hover"></span>
                                        <span class="fade"></span>
                                    </a>
                                    <div class="profile-sidebar-info">
                                        <div class="name">
                                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" rel="np"><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</a>
                                        </div>
                                        <div class="under-name color-c<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
">
                                            <a href="/game/race/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race_data']['name'];?>
" class="race"><?php echo $_smarty_tpl->tpl_vars['Character']->value['race_data']['translation'];?>
</a>-<a href="/game/class/<?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['name'];?>
" class="class"><?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['translation'];?>
</a> <span class="level"><strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
</strong></span> <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['Character']->value['guild_name']!='') {?>
                                        <div class="guild">
                                            <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
/?character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
</a>
                                        </div>
                                        <?php }?>
                                        <div class="realm">
                                            <span id="profile-info-realm" class="tip" data-battlegroup="">Realm Name</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="profile-sidebar-menu" id="profile-sidebar-menu">
                                    <li>
                                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" class="back-to" rel="np"><span class="arrow"><span class="icon"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Information');?>
</span></span></a>
                                    </li>
                                    <li class="root-menu">
                                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement" class="back-to" rel="np"><span class="arrow"><span class="icon"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Achievements');?>
</span></span></a>
                                    </li>
                                    <li class=" active">
                                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement#summary" class="active" rel="np">
                                            <span class="arrow"><span class="icon">
                                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Achievements');?>

                                            </span></span>
                                        </a>
                                    </li>
                                    <?php  $_smarty_tpl->tpl_vars['Category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Category']->key => $_smarty_tpl->tpl_vars['Category']->value) {
$_smarty_tpl->tpl_vars['Category']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['Category']->value['id']!=1) {?>
                                            <?php if (!isset($_smarty_tpl->tpl_vars['Category']->value['subcategories'])) {?>
                                                <li class="">
                                                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
" class="" rel="np">
                                                    <span class="arrow">
                                                        <span class="icon">
                                                            <?php echo $_smarty_tpl->tpl_vars['Category']->value['name'];?>

                                                        </span>
                                                    </span>
                                                    </a>
                                                </li>
                                            <?php } else { ?>
                                                <li class>
                                                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
" class=" has-submenu" rel="np">
                                                        <span class="arrow">
                                                        <span class="icon">
                                                            <?php echo $_smarty_tpl->tpl_vars['Category']->value['name'];?>

                                                        </span>
                                                    </span>
                                                    </a>
                                                    <ul>
                                                        <?php  $_smarty_tpl->tpl_vars['Subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Category']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Subcat']->key => $_smarty_tpl->tpl_vars['Subcat']->value) {
$_smarty_tpl->tpl_vars['Subcat']->_loop = true;
?>
                                                            <li class>
                                                                <a href="/wow/ru/character/kazzak/Russianfur/achievement#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['Subcat']->value['id'];?>
" class="" rel="np">
                                                                    <span class="arrow"><span class="icon">
                                                                        <?php echo $_smarty_tpl->tpl_vars['Subcat']->value['name'];?>

                                                                    </span></span>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            <?php }?>
                                        <?php }?>
                                    <?php } ?>
                                </ul>
                                <div id="swipe-in-container" class="swipe-container" style="display: none;">
                                    <ul class="profile-sidebar-menu">
                                        <li>
                                            <a class="back-to" href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/">
                                                <span class="arrow">
                                                    <span class="icon">
                                                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Information');?>

                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <ul class="profile-sidebar-menu" id="profile-sidebar-menu" style="display: none;">
                                            <li>
                                                <a class="back-to" href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/">
                                                <span class="arrow">
                                                    <span class="icon">
                                                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Information');?>

                                                    </span>
                                                </span>
                                                </a>
                                            </li>
                                            <li class="root-menu">
                                                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement" class="back-to" rel="np"><span class="arrow"><span class="icon"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Achievements');?>
</span></span></a>
                                            </li>
                                            <?php  $_smarty_tpl->tpl_vars['Category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Category']->key => $_smarty_tpl->tpl_vars['Category']->value) {
$_smarty_tpl->tpl_vars['Category']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['Category']->value['id']!=1) {?>
                                                    <?php if (!isset($_smarty_tpl->tpl_vars['Category']->value['subcategories'])) {?>
                                                        <li class="">
                                                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
" class="" rel="np">
                                                    <span class="arrow">
                                                        <span class="icon">
                                                            <?php echo $_smarty_tpl->tpl_vars['Category']->value['name'];?>

                                                        </span>
                                                    </span>
                                                            </a>
                                                        </li>
                                                    <?php } else { ?>
                                                        <li class>
                                                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
" class=" has-submenu" rel="np">
                                                        <span class="arrow">
                                                        <span class="icon">
                                                            <?php echo $_smarty_tpl->tpl_vars['Category']->value['name'];?>

                                                        </span>
                                                    </span>
                                                            </a>
                                                            <ul>
                                                                <?php  $_smarty_tpl->tpl_vars['Subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Category']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Subcat']->key => $_smarty_tpl->tpl_vars['Subcat']->value) {
$_smarty_tpl->tpl_vars['Subcat']->_loop = true;
?>
                                                                    <li class>
                                                                        <a href="/wow/ru/character/kazzak/Russianfur/achievement#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['Subcat']->value['id'];?>
" class="" rel="np">
                                                                    <span class="arrow"><span class="icon">
                                                                        <?php echo $_smarty_tpl->tpl_vars['Subcat']->value['name'];?>

                                                                    </span></span>
                                                                        </a>
                                                                    </li>
                                                                <?php } ?>
                                                            </ul>
                                                        </li>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </ul>
                                </div>
                                <div id="swipe-out-container" class="swipe-container"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-contents">
                    <div class="profile-section-header">
                        <div class="achievement-points-anchor">
                            <div class="achievement-points">
                                <?php echo $_smarty_tpl->tpl_vars['Character']->value['apoints'];?>

                            </div>
                        </div>
                        <ul class="profile-tabs">
                            <li class="tab-active">
                                <a href="achievement" rel="np">
                                    <span class="r"><span class="m">
                                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Achievements');?>

                                    </span></span>
                                </a>
                            </li>
                            <li>
                                <a href="statistic" rel="np">
                                    <span class="r"><span class="m">
                                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Statistics');?>

                                    </span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-section">
                        <div class="search-container keyword" id="search-container" style="display: none;">
                            <span class="view"></span>
                            <span class="reset" style="display: none;"></span>
                            <input type="text" id="achievement-search" alt="<?php echo $_smarty_tpl->getConfigVariable('Search');?>
…" value="<?php echo $_smarty_tpl->getConfigVariable('Search');?>
…" onkeyup="AchievementsHandler.doSearch(this.value)" class="input" autocomplete="off" />
                        </div>
                        <div id="cat-summary" class="container" style="display:block;">
                            <h3 class="category"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Progress');?>
</h3>
                            <div class="achievements-total">
                                <div class="profile-box-full">
                                    <div class="achievements-total-completed">
                                        <div class="desc"><?php echo $_smarty_tpl->getConfigVariable('Profile_Achievements_Total_Received');?>
</div>
                                        <?php $_smarty_tpl->tpl_vars['CalculatePercentage'] = new Smarty_variable(($_smarty_tpl->tpl_vars['Character']->value['acount']/$_smarty_tpl->tpl_vars['AStatus']->value['achievements_amount'])*100, null, 0);?>
                                        <div class="profile-progress border-4" onmouseover="Tooltip.show(this, '<?php echo $_smarty_tpl->tpl_vars['Character']->value['apoints'];?>
 / <?php echo $_smarty_tpl->tpl_vars['AStatus']->value['points_maximum'];?>
 <?php echo $_smarty_tpl->getConfigVariable('Profile_Achievements_Points');?>
', { location: 'middleRight' });">
                                            <div class="bar border-4 hover" style="width: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['CalculatePercentage']->value);?>
%"></div>
                                            <div class="bar-contents">
                                                <strong>
                                                    <?php echo $_smarty_tpl->tpl_vars['Character']->value['acount'];?>
 / <?php echo $_smarty_tpl->tpl_vars['AStatus']->value['achievements_amount'];?>
 (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['CalculatePercentage']->value);?>
%)
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="achievements-categories-total">
                                    <?php  $_smarty_tpl->tpl_vars['Category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Category']->key => $_smarty_tpl->tpl_vars['Category']->value) {
$_smarty_tpl->tpl_vars['Category']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['Category']->value['id']!=1&&$_smarty_tpl->tpl_vars['Category']->value['id']!=81) {?>
                                            <?php $_smarty_tpl->tpl_vars['CompletedCount'] = new Smarty_variable('0', null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['PointsCount'] = new Smarty_variable('0', null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['Achievement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Achievement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CompletedAchievements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Achievement']->key => $_smarty_tpl->tpl_vars['Achievement']->value) {
$_smarty_tpl->tpl_vars['Achievement']->_loop = true;
?>
                                                <?php if (in_array($_smarty_tpl->tpl_vars['Achievement']->value['category'],$_smarty_tpl->tpl_vars['Category']->value)) {?>
                                                    <?php $_smarty_tpl->tpl_vars['CompletedCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['CompletedCount']->value+1, null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['PointsCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['PointsCount']->value+$_smarty_tpl->tpl_vars['Achievement']->value['points'], null, 0);?>
                                                <?php } elseif (isset($_smarty_tpl->tpl_vars['Category']->value['subcategories'])) {?>
                                                    <?php if (in_array($_smarty_tpl->tpl_vars['Achievement']->value['category'],$_smarty_tpl->tpl_vars['Category']->value['subcategories'])) {?>
                                                        <?php $_smarty_tpl->tpl_vars['CompletedCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['CompletedCount']->value+1, null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['PointsCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['PointsCount']->value+$_smarty_tpl->tpl_vars['Achievement']->value['points'], null, 0);?>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['Category']->value['achievements_in_category'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['BuildPercentage'] = new Smarty_variable(($_smarty_tpl->tpl_vars['CompletedCount']->value/$_tmp1)*100, null, 0);?>
                                            <div class="entry">
                                                <div class="entry-inner">
                                                    <strong class="desc"><?php echo $_smarty_tpl->tpl_vars['Category']->value['name'];?>
</strong>
                                                    <div class="active-category" onclick="window.location.hash = '#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
'; dm.openEntry(false)">
                                                        <div class="profile-progress border-4" onmouseover="Tooltip.show(this, '<?php echo $_smarty_tpl->tpl_vars['PointsCount']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['Category']->value['points_for_category'];?>
 <?php echo $_smarty_tpl->getConfigVariable('Profile_Achievements_Points');?>
', { location: 'middleRight' });">
                                                            <div class="bar border-4 hover" style="width: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['BuildPercentage']->value);?>
%"></div>
                                                            <div class="bar-contents">
                                                                <?php echo $_smarty_tpl->tpl_vars['CompletedCount']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['Category']->value['achievements_in_category'];?>
 (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['BuildPercentage']->value);?>
)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['Category']->value['id']==81) {?>
                                            <div class="entry">
                                                <div class="entry-inner">
                                                    <strong class="desc"><?php echo $_smarty_tpl->tpl_vars['Category']->value['name'];?>
</strong>
                                                    <div class="active-category" onclick="window.location.hash = '#<?php echo $_smarty_tpl->tpl_vars['Category']->value['id'];?>
'; dm.openEntry(false)">
                                                        <div class="profile-progress bar-contents border-4">
                                                            <?php $_smarty_tpl->tpl_vars['CountFoS'] = new Smarty_variable('0', null, 0);?>
                                                            <?php  $_smarty_tpl->tpl_vars['Achievement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Achievement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CompletedAchievements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Achievement']->key => $_smarty_tpl->tpl_vars['Achievement']->value) {
$_smarty_tpl->tpl_vars['Achievement']->_loop = true;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['Achievement']->value['category']==81) {?>
                                                                    <?php $_smarty_tpl->tpl_vars['CountFoS'] = new Smarty_variable($_smarty_tpl->tpl_vars['CountFoS']->value+1, null, 0);?>
                                                                <?php }?>
                                                            <?php } ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['CountFoS']->value;?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <h3 class="category"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Achievements_Recent');?>
</h3>
                            <div class="achievements-recent profile-box-full">
                                <ul>
                                    <li>
                                        <?php $_smarty_tpl->tpl_vars['LastFive'] = new Smarty_variable('0', null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['Achievement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Achievement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CompletedAchievements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Achievement']->key => $_smarty_tpl->tpl_vars['Achievement']->value) {
$_smarty_tpl->tpl_vars['Achievement']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['LastFive']->value==5) {?>
                                                <?php break 1;?>
                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['Achievement']->value['parentAchievement']!='-1') {?>
                                                    <a href="achievement#<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['parentAchievement'];?>
:<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['category'];?>
:a<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['achievement'];?>
" data-achievement="<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['achievement'];?>
" onclick="window.location.hash = '<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['parentAchievement'];?>
:<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['category'];?>
:a<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['achievement'];?>
'; dm.openEntry(false)" class=" clear-after">
                                                <?php } else { ?>
                                                    <a href="achievement#<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['category'];?>
:a<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['achievement'];?>
" data-achievement="<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['achievement'];?>
" onclick="window.location.hash = '<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['category'];?>
:a<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['achievement'];?>
'; dm.openEntry(false)" class=" clear-after">
                                                <?php }?>
                                                    <span class="float-right">
                                                        <span class="points"><?php echo $_smarty_tpl->tpl_vars['Achievement']->value['points'];?>
</span>
                                                        <span class="date"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Achievement']->value['date']);?>
</span>
                                                    </span>
                                                    <span class="icon">
                                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo strtolower($_smarty_tpl->tpl_vars['Achievement']->value['iconname']);?>
.jpg&quot;);"></span>
                                                    </span>
                                                    <span class="info">
                                                        <strong class="title"><?php echo $_smarty_tpl->tpl_vars['Achievement']->value['name'];?>
</strong>
                                                        <span class="description"><?php echo $_smarty_tpl->tpl_vars['Achievement']->value['description'];?>
</span>
                                                    </span>
                                                </a>
                                                <?php $_smarty_tpl->tpl_vars['LastFive'] = new Smarty_variable($_smarty_tpl->tpl_vars['LastFive']->value+1, null, 0);?>
                                            <?php }?>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="achievement-list" class="achievements-list">

                        </div>
                    </div>
                </div>
                <span class="clear">

                </span>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    Profile.url = '/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement';
                });
                //]]>
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(document).ready(function () {
                    DynamicMenu.init({ "section": "achievement" });
                    AchievementsHandler.init();
                })
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
