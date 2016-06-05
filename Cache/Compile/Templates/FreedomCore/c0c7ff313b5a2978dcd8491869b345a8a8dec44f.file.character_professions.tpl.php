<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 11:37:12
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/character_professions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166244473575293383e9826-11080811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0c7ff313b5a2978dcd8491869b345a8a8dec44f' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/character_professions.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166244473575293383e9826-11080811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Character' => 0,
    'SelectedProfession' => 0,
    'ProfessionInfo' => 0,
    'Template' => 0,
    'Professions' => 0,
    'Profession' => 0,
    'ProfessionBarLength' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575293385a8a56_49992163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575293385a8a56_49992163')) {function content_575293385a8a56_49992163($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/profession" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Professions');?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/profession/<?php echo $_smarty_tpl->tpl_vars['SelectedProfession']->value;?>
" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['ProfessionInfo']->value['translation'];?>
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
" class="back-to" rel="np"><span class="arrow"><span class="icon"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Information');?>
</span></span></a>
                                    </li>
                                    <li class="">
                                        <span class="divider"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Professions');?>
</span>
                                    </li>
                                    <?php  $_smarty_tpl->tpl_vars['Profession'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Profession']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Professions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Profession']->key => $_smarty_tpl->tpl_vars['Profession']->value) {
$_smarty_tpl->tpl_vars['Profession']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['Profession']->value['primary']==1) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['Profession']->value['name']==$_smarty_tpl->tpl_vars['SelectedProfession']->value) {?>
                                            <li class="active">
                                            <?php } else { ?>
                                            <li>
                                            <?php }?>
                                                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/profession/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['name'];?>
" class="" rel="np">
                                                <span class="arrow">
                                                    <span class="icon">
                                                        <span class="icon-frame frame-14 ">
                                                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/tiny/trade_<?php echo $_smarty_tpl->tpl_vars['Profession']->value['name'];?>
.gif" alt="" width="14" height="14" />
                                                        </span>
                                                        <?php echo $_smarty_tpl->tpl_vars['Profession']->value['translation'];?>

                                                    </span>
                                                </span>
                                                </a>
                                            </li>
                                        <?php }?>
                                    <?php } ?>
                                    <li class="">
                                        <span class="divider"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_SecondaryProfessions');?>
</span>
                                    </li>
                                    <?php  $_smarty_tpl->tpl_vars['Profession'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Profession']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Professions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Profession']->key => $_smarty_tpl->tpl_vars['Profession']->value) {
$_smarty_tpl->tpl_vars['Profession']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['Profession']->value['primary']==0) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['Profession']->value['name']==$_smarty_tpl->tpl_vars['SelectedProfession']->value) {?>
                                                <li class="active">
                                                    <?php } else { ?>
                                                <li>
                                            <?php }?>
                                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/profession/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['name'];?>
" class="" rel="np">
                                                <span class="arrow">
                                                    <span class="icon">
                                                        <span class="icon-frame frame-14 ">
                                                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/tiny/trade_<?php echo $_smarty_tpl->tpl_vars['Profession']->value['name'];?>
.gif" alt="" width="14" height="14" />
                                                        </span>
                                                        <?php echo $_smarty_tpl->tpl_vars['Profession']->value['translation'];?>

                                                    </span>
                                                </span>
                                            </a>
                                            </li>
                                        <?php }?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-contents">
                    <div id="profession-recipe-unknown" style="display: none">
                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_NotLearned');?>

                    </div>
                    <div class="profile-section-header">
                        <div class="profession-rank">
                            <div class="profile-progress border-3 completed">
                                <?php $_smarty_tpl->tpl_vars['ProfessionBarLength'] = new Smarty_variable(($_smarty_tpl->tpl_vars['ProfessionInfo']->value['current']/$_smarty_tpl->tpl_vars['ProfessionInfo']->value['max'])*100, null, 0);?>
                                <div class="bar border-3 hover" style="width: <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['ProfessionBarLength']->value);?>
%"></div>
                                <div class="bar-contents">
                                    <a class="profession-details" href="/game/profession/<?php echo $_smarty_tpl->tpl_vars['SelectedProfession']->value;?>
">
                                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['ProfessionInfo']->value['title'];?>
</span>
                                        <span class="value"><?php echo $_smarty_tpl->tpl_vars['ProfessionInfo']->value['current'];?>
 / <?php echo $_smarty_tpl->tpl_vars['ProfessionInfo']->value['max'];?>
</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="category ">
                            <a href="/game/profession/<?php echo $_smarty_tpl->tpl_vars['SelectedProfession']->value;?>
">
                                <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/tiny/trade_<?php echo $_smarty_tpl->tpl_vars['SelectedProfession']->value;?>
.gif&quot;);"></span>
                                <?php echo $_smarty_tpl->tpl_vars['ProfessionInfo']->value['translation'];?>

                            </a>
                        </h3>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['SelectedProfession']->value=='fishing') {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("blocks/profession_fishing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <div class="profile-section">
                            <?php echo $_smarty_tpl->getSubTemplate ("blocks/profession_loot_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                    <?php }?>
                </div>
                <span class="clear"></span>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
