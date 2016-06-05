<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:41:17
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_event_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13463636755750377d895be0-73014216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e123ac6c8f03ea40d2bfb9dd2fc9e00f47a8793' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_event_data.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13463636755750377d895be0-73014216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Event' => 0,
    'Template' => 0,
    'DData' => 0,
    'Mount' => 0,
    'Pet' => 0,
    'Item' => 0,
    'Toy' => 0,
    'Achievement' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750377db1daa7_87208603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750377db1daa7_87208603')) {function content_5750377db1daa7_87208603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.date_format.php';
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
                    <a href="/game/events" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Title');?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/game/events/<?php echo $_smarty_tpl->tpl_vars['Event']->value['link'];?>
" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Event']->value['name'];?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <style>
                .content-bot { padding-bottom: 102px; }
            </style>
            <div class="event">
                <style>
                    .content-top { background: url(/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/calendar/<?php echo $_smarty_tpl->tpl_vars['Event']->value['link'];?>
-background.jpg) 100% 0 no-repeat; }
                </style>
                <div class="content-header">
                    <p class="events-parent"><a href="./"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_InGame');?>
</a></p>
                    <h2 class="events-header"><?php echo $_smarty_tpl->tpl_vars['Event']->value['name'];?>
</h2>
                    <h3 class="events-subheader">
                        <?php if (isset($_smarty_tpl->tpl_vars['DData']->value['next_start'])) {?>
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['DData']->value['next_start'],"%d.%m.%Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['DData']->value['next_end'],"%d.%m.%Y");?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['Event']->value['link']=='new-year') {?>
                            31.12.<?php echo date('Y');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['Event']->value['link']=='stranglethorn-fishing-extravaganza') {?>
                            <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Weekly');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['Event']->value['link']=='darkmoon-faire') {?>
                            <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Month');?>

                        <?php }?>
                    </h3>
                    <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_quests']!=null||$_smarty_tpl->tpl_vars['Event']->value['event_entertainment']!=null||$_smarty_tpl->tpl_vars['Event']->value['event_merchants']!=null) {?>
                    <div class="page-outline">
                        <h4 class="section-title">
                            <a class="section-link" href="#activities"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_What_To_Do');?>
</a>
                        </h4>
                        <p class="subsection-list">
                            <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_quests']!=null) {?>
                                <a href="#quests"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Quests');?>
</a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_entertainment']!=null) {?>
                                <a href="#entertainment">
                                    <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_quests']!=null) {?>
                                    ,
                                    <?php }?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Entertainment');?>

                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_merchants']!=null) {?>
                                <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_entertainment']!=null) {?>
                                    ,
                                <?php }?>
                                <a href="#merchants-and-vendors"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Merchants');?>
</a>
                            <?php }?>
                        </p>
                    </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Mounts'])||!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Pets'])||!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Items'])||!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Toys'])) {?>
                    <div class="page-outline">
                        <h4 class="section-title">
                            <a class="section-link" href="#rewards">
                                <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Rewards');?>

                            </a>
                        </h4>
                        <p class="subsection-list">
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Mounts'])) {?>
                                <a href="#mounts">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Mounts');?>

                                </a>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Pets'])) {?>
                                <a href="#pets">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Mounts'])) {?>
                                    ,
                                    <?php }?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Pets');?>

                                </a>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Items'])) {?>
                                <a href="#gear">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Pets'])) {?>
                                        ,
                                    <?php }?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Items');?>

                                </a>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Toys'])) {?>
                                <a href="#toys">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Items'])||!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Pets'])) {?>
                                        ,
                                    <?php }?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Toys');?>

                                </a>
                            <?php }?>
                        </p>
                    </div>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['Event']->value['achievements'])) {?>
                    <div class="page-outline">
                        <h4 class="section-title">
                            <a class="section-link" href="#achievements">
                                <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Achievements');?>

                            </a>
                        </h4>
                    </div>
                    <?php }?>
                </div>
                <div class="event-content">
                    <div class="left-col">
                        <div id="intro" class="events-section">
                            <h3 class="events-subheader">
                                <?php echo $_smarty_tpl->tpl_vars['Event']->value['intro_header'];?>

                            </h3>
                            <p class="events-intro-text">
                                <?php echo $_smarty_tpl->tpl_vars['Event']->value['intro_footer'];?>

                            </p>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_quests']!=null||$_smarty_tpl->tpl_vars['Event']->value['event_entertainment']!=null||$_smarty_tpl->tpl_vars['Event']->value['event_merchants']!=null) {?>
                        <div id="activities" class="events-section">
                            <h3 class="events-subheader has-top-link">
                                <?php echo $_smarty_tpl->getConfigVariable('Events_Page_What_To_Do');?>

                                <a class="top-link" href="#">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Go_To_Top');?>

                                </a>
                            </h3>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['Event']->value['what_to_do'];?>

                            </p>
                            <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_quests']!=null) {?>
                                <div id="quests" class="events-subsection subsection-quests">
                                    <h4 class="subsection-title">
                                        <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Quests');?>

                                    </h4>
                                    <?php echo $_smarty_tpl->tpl_vars['Event']->value['event_quests'];?>

                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_entertainment']!=null) {?>
                                <div id="entertainment" class="events-subsection subsection-entertainment">
                                    <h4 class="subsection-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Entertainment');?>
</h4>
                                    <?php echo $_smarty_tpl->tpl_vars['Event']->value['event_entertainment'];?>

                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_merchants']!=null) {?>
                                <div id="merchants-and-vendors" class="events-subsection subsection-merchants-and-vendors">
                                    <h4 class="subsection-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Merchants');?>
</h4>
                                    <?php echo $_smarty_tpl->tpl_vars['Event']->value['event_merchants'];?>

                                </div>
                            <?php }?>
                        </div>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Mounts'])||!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Pets'])||!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Items'])||!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Toys'])) {?>
                        <div id="rewards" class="events-section">
                            <h3 class="events-subheader has-top-link">
                                <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Rewards');?>

                                <a class="top-link" href="#">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Go_To_Top');?>

                                </a>
                            </h3>
                            <p>
                                <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Rewards_Desc');?>

                            </p>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Mounts'])) {?>
                                <div id="mounts" class="events-subsection subsection-mounts">
                                    <h4 class="subsection-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Mounts');?>
</h4>
                                    <?php  $_smarty_tpl->tpl_vars['Mount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Mount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Event']->value['collectibles']['Mounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Mount']->key => $_smarty_tpl->tpl_vars['Mount']->value) {
$_smarty_tpl->tpl_vars['Mount']->_loop = true;
?>
                                        <h5 class="item-title">
                                            <a class="item-link color-q<?php echo $_smarty_tpl->tpl_vars['Mount']->value['Quality'];?>
" href="/item/<?php echo $_smarty_tpl->tpl_vars['Mount']->value['entry'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Mount']->value['entry'];?>
">
                                                <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Mount']->value['icon'];?>
.jpg&quot;);"></span>
                                                <?php echo $_smarty_tpl->tpl_vars['Mount']->value['name'];?>

                                            </a>
                                        </h5>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Pets'])) {?>
                                <div id="pets" class="events-subsection subsection-pets">
                                    <h4 class="subsection-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Pets');?>
</h4>
                                    <?php  $_smarty_tpl->tpl_vars['Pet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Pet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Event']->value['collectibles']['Pets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Pet']->key => $_smarty_tpl->tpl_vars['Pet']->value) {
$_smarty_tpl->tpl_vars['Pet']->_loop = true;
?>
                                        <h5 class="item-title">
                                            <a class="item-link color-q<?php echo $_smarty_tpl->tpl_vars['Pet']->value['Quality'];?>
" href="/item/<?php echo $_smarty_tpl->tpl_vars['Pet']->value['entry'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Pet']->value['entry'];?>
">
                                                <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Pet']->value['icon'];?>
.jpg&quot;);"></span>
                                                <?php echo $_smarty_tpl->tpl_vars['Pet']->value['name'];?>

                                            </a>
                                        </h5>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Items'])) {?>
                                <div id="gear" class="events-subsection subsection-gear">
                                    <h4 class="subsection-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Items');?>
</h4>
                                    <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Event']->value['collectibles']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
                                        <h5 class="item-title">
                                            <a class="item-link color-q<?php echo $_smarty_tpl->tpl_vars['Item']->value['Quality'];?>
" href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['entry'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['entry'];?>
">
                                                <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Item']->value['icon'];?>
.jpg&quot;);"></span>
                                                <?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>

                                            </a>
                                        </h5>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Event']->value['collectibles']['Toys'])) {?>
                                <div id="toys" class="events-subsection subsection-toys">
                                    <h4 class="subsection-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Cat_Toys');?>
</h4>
                                    <?php  $_smarty_tpl->tpl_vars['Toy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Toy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Event']->value['collectibles']['Toys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Toy']->key => $_smarty_tpl->tpl_vars['Toy']->value) {
$_smarty_tpl->tpl_vars['Toy']->_loop = true;
?>
                                        <h5 class="item-title">
                                            <a class="item-link color-q<?php echo $_smarty_tpl->tpl_vars['Toy']->value['Quality'];?>
" href="/item/<?php echo $_smarty_tpl->tpl_vars['Toy']->value['entry'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Toy']->value['entry'];?>
">
                                                <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Toy']->value['icon'];?>
.jpg&quot;);"></span>
                                                <?php echo $_smarty_tpl->tpl_vars['Toy']->value['name'];?>

                                            </a>
                                        </h5>
                                    <?php } ?>
                                </div>
                            <?php }?>
                        </div>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['Event']->value['achievements'])) {?>
                            <div id="achievements" class="events-section">
                                <h3 class="events-subheader has-top-link">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Achievements');?>

                                    <a class="top-link" href="#">
                                        <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Go_To_Top');?>

                                    </a>
                                </h3>
                                <div class="panel panel-achievements">
                                    <div class="achievements-desc">
                                        <p>
                                            TEST TEST
                                        </p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['Achievement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Achievement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Event']->value['achievements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Achievement']->key => $_smarty_tpl->tpl_vars['Achievement']->value) {
$_smarty_tpl->tpl_vars['Achievement']->_loop = true;
?>
                                                <tr>
                                                    <td>
                                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['icon'];?>
.jpg&quot;);"></span>
                                                        <span class="achievement-link" data-achievement="<?php echo $_smarty_tpl->tpl_vars['Achievement']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['Achievement']->value['name_loc0'];?>
</span>
                                                        <?php echo $_smarty_tpl->tpl_vars['Achievement']->value['points'];?>
<span class="icon-achievement-points"></span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="sidebar">
                        <div class="events-sidebar-section section-event-location">
                            <h3 class="events-sidebar-header"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Event_Place');?>
</h3>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['Event']->value['event_place'];?>

                            </p>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['Event']->value['event_currency_present']==1) {?>
                            <div class="events-sidebar-section section-currency">
                                <h3 class="events-sidebar-header"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Event_Currency');?>
</h3>
                                <p>
                                <?php echo $_smarty_tpl->tpl_vars['Event']->value['event_currency'];?>

                                </p>
                            </div>
                        <?php }?>
                    </div>
                    <span class="clear"></span>
                </div>
            </div>
            <span class="clear"></span>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
