<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 15:52:17
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12324223875746f181216a05-48441385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21dac6765cf6bbd25db56f8e0fd4095b21a1800c' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/footer.tpl',
      1 => 1445693864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12324223875746f181216a05-48441385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Template' => 0,
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746f18128f239_59252521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f18128f239_59252521')) {function content_5746f18128f239_59252521($_smarty_tpl) {?><div id="nav-client-footer" class="nav-client">
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
                    <div style="display: none">
                    <!--LiveInternet counter--><?php echo '<script'; ?>
 type="text/javascript"><!--
                    document.write("<a href='//www.liveinternet.ru/click' "+
                    "target=_blank><img src='//counter.yadro.ru/hit?t52.6;r"+
                    escape(document.referrer)+((typeof(screen)=="undefined")?"":
                    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                    ";"+Math.random()+
                    "' alt='' title='LiveInternet: показано число просмотров и"+
                    " посетителей за 24 часа' "+
                    "border='0' width='88' height='31'><\/a>")
                    //--><?php echo '</script'; ?>
><!--/LiveInternet--> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <?php echo '<script'; ?>
 src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/toolkit.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/global.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/product.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/purchase.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/navbar.js"><?php echo '</script'; ?>
>
    <div id="ajax-indicator" class="ajax-indicator"></div>
</body>
</html><?php }} ?>
