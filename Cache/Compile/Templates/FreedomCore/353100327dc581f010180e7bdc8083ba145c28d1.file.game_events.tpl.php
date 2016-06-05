<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 10:28:11
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16821358285752830b677053-78586694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353100327dc581f010180e7bdc8083ba145c28d1' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_events.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16821358285752830b677053-78586694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Events' => 0,
    'Event' => 0,
    'CurrentEvent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752830b742ec2_56412400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752830b742ec2_56412400')) {function content_5752830b742ec2_56412400($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.date_format.php';
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
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/game/events" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Title');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="events-main-menu">
                <div class="wrapper">
                    <ul class="events-list">
                        <?php  $_smarty_tpl->tpl_vars['Event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Event']->key => $_smarty_tpl->tpl_vars['Event']->value) {
$_smarty_tpl->tpl_vars['Event']->_loop = true;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['Event']->value['description'])) {?>
                                <?php if (strstr($_smarty_tpl->tpl_vars['Event']->value['description'],'(')===false&&strstr($_smarty_tpl->tpl_vars['Event']->value['description'],':')===false&&strstr($_smarty_tpl->tpl_vars['Event']->value['link'],'fishing')===false) {?>
                                    <li class="events-list-item">
                                        <a class="events-list-link" href="/game/events/<?php echo $_smarty_tpl->tpl_vars['Event']->value['link'];?>
">
                                            <span class="events-icon icon-<?php echo $_smarty_tpl->tpl_vars['Event']->value['link'];?>
"></span>
                                            <span class="events-title"><?php echo $_smarty_tpl->tpl_vars['Event']->value['description'];?>
</span>
                                            <span class="events-date">
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Event']->value['next_start'],"%d.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Event']->value['next_end'],"%d.%m");?>

                                            </span>
                                            <span class="clear"><!-- --></span>
                                        </a>
                                    </li>
                                <?php }?>
                            <?php }?>
                        <?php } ?>
                        <li class="events-list-item">
                            <a class="events-list-link" href="/game/events/new-year">
                                <span class="events-icon icon-new-year"></span>
                                <span class="events-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_New_Year');?>
</span>
                                <span class="events-date">
                                    31.12
                                </span>
                                <span class="clear"><!-- --></span>
                            </a>
                        </li>
                        <li class="events-list-item">
                            <a class="events-list-link" href="/game/events/stranglethorn-fishing-extravaganza">
                                <span class="events-icon icon-stranglethorn-fishing-extravaganza"></span>
                                <span class="events-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Fishing_Ext');?>
</span>
                                <span class="events-date">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Weekly');?>

                                </span>
                                <span class="clear"><!-- --></span>
                            </a>
                        </li>
                        <li class="events-list-item">
                            <a class="events-list-link" href="/game/events/darkmoon-faire">
                                <span class="events-icon icon-darkmoon-faire"></span>
                                <span class="events-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Faire');?>
</span>
                                <span class="events-date">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Monthly');?>

                                </span>
                                <span class="clear"><!-- --></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="events-contents">
                <div class="events-intro">
                    <h2 class="events-header"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Title');?>
</h2>
                    <p class="events-intro-text">
                        <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Intro');?>

                    </p>
                    <?php if (!empty($_smarty_tpl->tpl_vars['CurrentEvent']->value)) {?>
                        <h3 class="events-subheader"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Current_Event');?>
</h3>
                        <div class="panel panel-<?php echo $_smarty_tpl->tpl_vars['CurrentEvent']->value['link'];?>
" style="width: 60%;">
                            <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['CurrentEvent']->value['description'];?>
</h3>
                            <h4 class="panel-subtitle">
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['CurrentEvent']->value['next_start'],"%d.%m.%Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['CurrentEvent']->value['next_end'],"%d.%m.%Y");?>

                            </h4>
                            <p class="panel-desc">
                                <?php echo $_smarty_tpl->tpl_vars['CurrentEvent']->value['description_text'];?>

                            </p>
                            <a class="ui-button button1" href="/game/events/<?php echo $_smarty_tpl->tpl_vars['CurrentEvent']->value['link'];?>
">
                                <span class="button-left">
                                    <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Learn_More');?>
</span>
                                </span>
                            </a>
                        </div>
                    <?php }?>
                    <h3 class="events-subheader"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Repeating_Events');?>
</h3>
                    <div class="panel panel-stranglethorn-fishing-extravaganza" style="width: 60%;">
                        <h3 class="panel-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Fishing_Ext');?>
</h3>
                        <h4 class="panel-subtitle"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Every_Sunday');?>
</h4>
                        <p class="panel-desc">
                            <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Fishing_Ext_Desc');?>

                        </p>
                        <a class="ui-button button1" href="/game/events/stranglethorn-fishing-extravaganza">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Learn_More');?>

                                </span>
                            </span>
                        </a>
                    </div>
                    <div  class="panel panel-darkmoon-faire" style="width: 60%;">
                        <h3 class="panel-title"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Faire');?>
</h3>
                        <h4 class="panel-subtitle"><?php echo $_smarty_tpl->getConfigVariable('Events_Page_Month');?>
</h4>
                        <p class="panel-desc">
                            <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Faire_Desc');?>

                        </p>

                        <a class="ui-button button1" href="/game/events/darkmoon-faire">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Events_Page_Learn_More');?>

                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <span class="clear"></span>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
