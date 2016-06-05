<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 15:52:17
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1190253395746f181108518-51040183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d30293ab50605ec0741e38bfa09a5aa066b1249' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/head.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1190253395746f181108518-51040183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Page' => 0,
    'AppName' => 0,
    'Template' => 0,
    'ItemData' => 0,
    'AppDescription' => 0,
    'GoogleAnalytics' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746f1811d7c44_97069177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f1811d7c44_97069177')) {function content_5746f1811d7c44_97069177($_smarty_tpl) {?><html xml:lang="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
    <meta http-equiv="imagetoolbar" content="false" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $_smarty_tpl->tpl_vars['Page']->value['pagetitle'];?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</title>
    <link rel="shortcut icon" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/meta/favicon.ico" />
    <link rel="search" type="application/opensearchdescription+xml" href="http://<?php echo $_SERVER['HTTP_HOST'];?>
/data/opensearch" title="<?php echo $_smarty_tpl->getConfigVariable('Head_Opensearch_Meta');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" />
    <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/common-game-site.css" />
    <link title="<?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
® - <?php echo $_smarty_tpl->getConfigVariable('Head_News_Meta');?>
" href="/feed/news" type="application/atom+xml" rel="alternate"/>

    <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/nav-client-desktop.css" />
    <!--[if gt IE 8]><!--><link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/toolkit/freedomnet-web.min.css" /><!-- <![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/global.css" />
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='shop') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/browse.css" />
        <style>
            html {
                height: auto;
                min-width: 480px;
            }
            body {
                height: 100%;
            }
            html,
            body {
                background: #281504 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/family-wow-background-1920.jpg") no-repeat center -200px !important;
            }
            .body-content {
                background: none !important;
            }
            .navbar-static {
                background: #281504 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/family-wow-background-1920.jpg") no-repeat center 0 !important;
            }
            @media (max-width: 1280px) {
                html,
                body {
                    background: #281504 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/family-wow-background-1280.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: #281504 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/family-wow-background-1280..jpg") no-repeat center 0 !important;
                }
            }
            @media (max-width: 1024px) {
                html,
                body {
                    background: #281504 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/family-wow-background-1024.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: #281504 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/family-wow-background-1024.jpg") no-repeat center 0 !important;
                }
            }
        </style>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='shop-buy') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/purchase.css" />
        <style>
            html {
                height: auto;
                min-width: 480px;
            }
            body {
                height: 100%;
            }
            html,
            body {
                background: #0f2a48 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/bnet-background-1920.jpg") no-repeat center -200px !important;
            }
            .body-content {
                background: none !important;
            }
            .navbar-static {
                background: #0f2a48 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/bnet-background-1920.jpg") no-repeat center 0 !important;
            }
            @media (max-width: 1280px) {
                html,
                body {
                    background: #0f2a48 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/bnet-background-1280.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: #0f2a48 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/bnet-background-1280.jpg") no-repeat center 0 !important;
                }
            }
            @media (max-width: 1024px) {
                html,
                body {
                    background: #0f2a48 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/bnet-background-1024.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: #0f2a48 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/bnet-background-1024.jpg") no-repeat center 0 !important;
                }
            }
        </style>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='shop-mount') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/product.css" />
        <style>
            html {
                height: auto;
                min-width: 480px;
            }
            body {
                height: 100%;
            }
            html,
            body {
                background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/mounts/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1920.jpg") no-repeat center -200px !important;
            }
            .body-content {
                background: none !important;
            }
            .navbar-static {
                background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/mounts/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1920.jpg") no-repeat center 0 !important;
            }
            @media (max-width: 1280px) {
                html,
                body {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/mounts/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1280.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/mounts/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1280.jpg") no-repeat center 0 !important;
                }
            }
            @media (max-width: 1024px) {
                html,
                body {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/mounts/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1024.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/mounts/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1024.jpg") no-repeat center 0 !important;
                }
            }
        </style>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='shop-item') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/product.css" />
        <style>
            html {
                height: auto;
                min-width: 480px;
            }
            body {
                height: 100%;
            }
            html,
            body {
                background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/items/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1920.jpg") no-repeat center -200px !important;
            }
            .body-content {
                background: none !important;
            }
            .navbar-static {
                background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/items/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1920.jpg") no-repeat center 0 !important;
            }
            @media (max-width: 1280px) {
                html,
                body {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/items/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1280.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/items/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1280.jpg") no-repeat center 0 !important;
                }
            }
            @media (max-width: 1024px) {
                html,
                body {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/items/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1024.jpg") no-repeat center -200px !important;
                }
                .body-content {
                    background: none !important;
                }
                .navbar-static {
                    background: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background_color'];?>
 url("/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/items/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_background'];?>
_1024.jpg") no-repeat center 0 !important;
                }
            }
        </style>
    <?php }?>

    <?php echo '<script'; ?>
 src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/third-party/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/core.min.js"><?php echo '</script'; ?>
>

    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['AppDescription']->value;?>
" />
    <?php echo '<script'; ?>
 type="text/javascript">
        //<![CDATA[
        var Core = Core || {},
        Login = Login || {};
        Core.staticUrl = '/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
';
        Core.sharedStaticUrl = '/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
';
        Core.baseUrl = 'http://<?php echo $_SERVER['HTTP_HOST'];?>
';
        Core.projectUrl = '/';
        Core.cdnUrl = '/';
        Core.supportUrl = '';
        Core.secureSupportUrl = '';
        Core.project = 'wow';
        Core.locale = '<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
';
        Core.language = '<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
';
        Core.region = 'eu';
        Core.shortDateFormat = 'dd/MM/yyyy';
        Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
        Core.loggedIn = false;
        Core.userAgent = 'web';
        Login.embeddedUrl = '/fragment/login.frag';
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['GoogleAnalytics']->value['Account'];?>
']);
        _gaq.push(['_setDomainName', '<?php echo $_smarty_tpl->tpl_vars['GoogleAnalytics']->value['Domain'];?>
']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        //]]>
    <?php echo '</script'; ?>
>
</head>
<?php }} ?>
