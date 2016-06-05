<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:49:22
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\account_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2687574f3c42c76353-94509838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e4f16a953d830f785f564a652bfec849f79a89a' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\account_head.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2687574f3c42c76353-94509838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Page' => 0,
    'AppName' => 0,
    'Template' => 0,
    'GoogleAnalytics' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f3c42cc8022_79248960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f3c42cc8022_79248960')) {function content_574f3c42cc8022_79248960($_smarty_tpl) {?><html xml:lang="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
" class="ru-ru">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $_smarty_tpl->tpl_vars['Page']->value['pagetitle'];?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</title>
    <link rel="shortcut icon" href="" />
    <link rel="search" type="application/opensearchdescription+xml" href="http://<?php echo $_SERVER['HTTP_HOST'];?>
/data/opensearch" title="<?php echo $_smarty_tpl->getConfigVariable('Head_Opensearch_Meta');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" />

    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_freedomtag') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/common.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/nav-client-desktop.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet.css" />
        <link rel="stylesheet" type="text/css" media="print" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet-print.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/ratings.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/inputs.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomtag.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/languages/<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_parameters') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/common.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/nav-client-desktop.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet.css" />
        <link rel="stylesheet" type="text/css" media="print" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet-print.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/ratings.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/inputs.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/wallet.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/address-book.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/settings.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/languages/<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_operations') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/common.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/nav-client-desktop.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet.css" />
        <link rel="stylesheet" type="text/css" media="print" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet-print.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/ratings.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/orders_history.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/services.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/languages/<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_management'||$_smarty_tpl->tpl_vars['Page']->value['type']=='admin') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/nav-client-desktop.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/common.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet.css" />
        <link rel="stylesheet" type="text/css" media="print" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet-print.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/ratings.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/inputs.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/lobby.css" />
        <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='admin') {?>
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/settings.css" />
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/item.css" />
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/services.css" />
        <?php }?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/languages/<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_dashboard') {?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/nav-client-desktop.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/common.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet.css" />
        <link rel="stylesheet" type="text/css" media="print" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/freedomnet-print.css" />
        <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']!='paymentpage') {?>
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/dashboard.css" />
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/dashboard_secondary.css" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='claimcode') {?>
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/add-game.css" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='servicespage') {?>
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/guild_services.css" />
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/payment_history.css" />
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/services.css" />
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/ui.css" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='paymentpage') {?>
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/payment.css" />
            <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/payment_secondary.css" />
        <?php }?>
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/ratings.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/account/inputs.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/locale/<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.css" />
        <style>
            #navigation #page-menu h2 {
                font-size: 18px !important;
                letter-spacing: -1px !important;
                line-height: 30px !important;
                margin-top: 7px !important;
            }
        </style>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/third-party/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/common/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/third-party/class-inheritance.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/third-party/swfobject-2.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/navbar-tk.min.js"><?php echo '</script'; ?>
>

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

<body class="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['Page']->value['bodycss'];?>
"><?php }} ?>
