<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:49:22
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\account_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23116574f3c42d21e55-49028678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31da3746fe0ba2ee1c347d2fe44a2936629d5d58' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\account_footer.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23116574f3c42d21e55-49028678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Template' => 0,
    'Page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f3c42d61487_56905266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f3c42d61487_56905266')) {function content_574f3c42d61487_56905266($_smarty_tpl) {?>    <div id="nav-client-footer" class="nav-client">
        <div class="footer-content footer-desktop grid-container">
            <div class="nav-section support-feedback">
                <div class="nav-left">
                    <div id="nav-feedback">
                        <a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support">
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

            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">
        //<![CDATA[
        var csrftoken = "625ea365-1f2f-418d-bdab-6eff64de74bb";
        $(function() {
            Locale.dataPath = "/data/i18n.frag";
        });
        var fullTimeDisplay = true;
        //]]>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/bam.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/common/menu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/third-party/jquery-ui-1.10.2.custom.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_management') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/lobby.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_dashboard'&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']!='servicespage'&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']!='paymentpage') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/dashboard.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/dashboard_secondary.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/inputs.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='servicespage') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/dataset.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/guild_services.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='paymentpage') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/payment.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='claimcode') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/add-game.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_parameters') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/inputs.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/password.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/email.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/freedomcore.js"><?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='admin') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/freedomcore_admin.js"><?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_freedomtag') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/inputs.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/freedomtag/freedomtag-validator.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/freedomtag/freedomtag-randomize.js"><?php echo '</script'; ?>
>
    <?php }?>

    </body>
</html><?php }} ?>
