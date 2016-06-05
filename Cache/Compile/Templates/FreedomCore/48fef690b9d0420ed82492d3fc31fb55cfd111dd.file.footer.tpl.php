<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:11:18
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151417290757521ca6970369-28635745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48fef690b9d0420ed82492d3fc31fb55cfd111dd' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/footer.tpl',
      1 => 1464860653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151417290757521ca6970369-28635745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Template' => 0,
    'AppName' => 0,
    'Page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57521ca6c27a47_22275748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57521ca6c27a47_22275748')) {function content_57521ca6c27a47_22275748($_smarty_tpl) {?><div id="nav-client-footer" class="nav-client">
    <div class="footer-content footer-desktop grid-container"> <div class="nav-section support-feedback">
            <div class="nav-left">
                <div id="nav-feedback">
                    <a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support">
                        <i class="nav-icon-24-blue nav-icon-question-circle"></i>
                        <?php echo $_smarty_tpl->getConfigVariable('Support');?>

                    </a>
                </div>
            </div>
            <div class="nav-right">
                <div id="nav-client-region-select">
                    <div class="dropdown dropup pull-right">
                        <a class="dropdown-toggle nav-item" data-toggle="dropdown">
                            <i class="nav-icon-24-blue nav-icon-globe"></i>
                            <?php if ($_smarty_tpl->tpl_vars['Language']->value=='es') {?>
                                Español
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='en') {?>
                                English
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='ru') {?>
                                Русский
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='pt') {?>
                                Português
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='kr') {?>
                                한국어
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='fr') {?>
                                Français
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='de') {?>
                                Deutsch
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='it') {?>
                                Italiano
                            <?php } elseif ($_smarty_tpl->tpl_vars['Language']->value=='pl') {?>
                                Polski
                            <?php }?>
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu" data-placement="top">
                            <div class="arrow bottom"></div>
                            <div id="nav-client-international-desktop">
                                <div class="nav-international-container">
                                    <div class="dropdown-section nav-column-container">
                                        <div class="nav-column-50">
                                            <div id="select-regions" class="nav-box regions">
                                                <h3><?php echo $_smarty_tpl->getConfigVariable('Item_Seller_Zone');?>
</h3>
                                                <ul class="region-ul">
                                                    <li class="region active current"><a class="nav-item select-region" href="javascript:;" data-target="world">World</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nav-column-50">
                                            <div id="select-language" class="nav-box languages">
                                                <h3><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Language');?>
</h3>
                                                <div class="region region-languages active current" data-region="eu">
                                                    <ul class="region-ul">
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='de') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/de/" data-target="world" data-language="de-de">Deutsch</a>
                                                        </li>
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='en') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/en/" data-target="world" data-language="en-gb">English</a>
                                                        </li>
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='es') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/es/" data-target="world" data-language="es-es">Español</a>
                                                        </li>
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='fr') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/fr/" data-target="world" data-language="fr-fr">Français</a>
                                                        </li>
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='it') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/it/" data-target="world" data-language="it-it">Italiano</a>
                                                        </li>
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='pl') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/pl/" data-target="world" data-language="pl-pl">Polski</a>
                                                        </li>
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='pt') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/pt/" data-target="world" data-language="pt-pt">Português</a>
                                                        </li>
                                                        <li class="<?php if ($_smarty_tpl->tpl_vars['Language']->value=='ru') {?>active current<?php }?>">
                                                            <a class="nav-item select-language" href="/changelanguage/ru/" data-target="world" data-language="ru-ru">Русский</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-section dropdown-well nav-box localeChange">
                                    <a id="nav-client-change-language-desktop" href="javascript:;" class="nav-lang-change nav-btn disabled"><?php echo $_smarty_tpl->getConfigVariable('Change');?>
</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-section">
            <div class="nav-left nav-logo-group">
                <div class="footer-logo nav-left">
                    <a class="nav-item logo-link" href="/" data-analytics="global-nav" data-analytics-placement="Footer">
                        <img class="blizzard-logo" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/logos/blizzard.png" alt="" />
                    </a>
                </div>
                <div class="footer-links nav-left">
                    <a class="nav-item nav-a" href="/about/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Legal"><?php echo $_smarty_tpl->getConfigVariable('Footer_Legal');?>
</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/about/privacy" data-analytics="global-nav" data-analytics-placement="Footer - Privacy Policy"><?php echo $_smarty_tpl->getConfigVariable('Footer_PP');?>
</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/about/infringementnotice" data-analytics="global-nav" data-analytics-placement="Footer - Copyright Infringement"><?php echo $_smarty_tpl->getConfigVariable('Footer_Copyright');?>
</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/api" data-analytics="global-nav" data-analytics-placement="Footer - API">API</a>
                    <div class="copyright">© <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
, 2015 г.</div>
                    <div class="nav-footer-icon-container">
                        <ul class="nav-footer-icon-list">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-ratings">
                <div class="legal-rating">
                    <div class="product-rating mkrf-rating clearfix">
                        <a href="http://mkrf.ru/" tabindex="1" rel="external" target="_blank"><img class="mkrf-logo" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/legal/ratings/mkrf/12.png" alt="12+" width="65" height="72" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
	<?php echo $_smarty_tpl->getSubTemplate ('parts/MSG_Javascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/menu.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='blog'||$_smarty_tpl->tpl_vars['Page']->value['type']=='community'||$_smarty_tpl->tpl_vars['Page']->value['type']=='search'||$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='item-index'||$_smarty_tpl->tpl_vars['Page']->value['type']=='profession') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wow.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if (strstr($_smarty_tpl->tpl_vars['Page']->value['bodycss'],"profession-")&&$_smarty_tpl->tpl_vars['Page']->value['type']=='profession') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wiki/wiki.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/profession.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/dataset.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/comments.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/utility/lightbox.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if (strstr($_smarty_tpl->tpl_vars['Page']->value['bodycss'],"item-")&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']!='item-index') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wow.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wiki/wiki.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wiki/item.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/dataset.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/comments.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/utility/lightbox.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/utility/model-rotator.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript">
        //<![CDATA[
        $(function() {
            Menu.initialize('/data/menu.json');
        });
        //]]>
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/navbar-tk.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='zone') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wiki/wiki.js"><?php echo '</script'; ?>
>
        <?php if (strstr($_smarty_tpl->tpl_vars['Page']->value['bodycss'],'boss-')) {?>
            <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wiki/npc.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/dataset.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/comments.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/utility/lightbox.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/utility/model-rotator.js"><?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wiki/zone.js"><?php echo '</script'; ?>
>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='realm-status') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/dataset.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/realm-status.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='community'&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='profile_page'||$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='achievement_page'||$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='reputation_page'||$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='professions_page'||$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='guild_page') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/profile.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='community'&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='profile_page') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/summary.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='admin') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/freedomcore_admin.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='search'||$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='guild_page') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/guild-tabard.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='achievement_page') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/achievement.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='character-pvp') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/pvp.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='reputation_page') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/dataset.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/reputation.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='professions_page') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/wiki/profession.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/character/profession.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/dataset.js"><?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='dev') {?>
        <?php echo '<script'; ?>
 src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/developer/prettify.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/developer/utilities.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/developer/developer.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/developer/beautify.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/cms.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/freedomcore.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
