<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 11:16:08
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18714459775746b0c89d8bf1-71026066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a77681b2ee5e0d85e6ce35f96b9764eccb3852' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/head.tpl',
      1 => 1446320902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18714459775746b0c89d8bf1-71026066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Page' => 0,
    'AppName' => 0,
    'https' => 0,
    'Template' => 0,
    'ExpansionTemplate' => 0,
    'ZoneInfo' => 0,
    'Race' => 0,
    'Class' => 0,
    'Character' => 0,
    'AppDescription' => 0,
    'GoogleAnalytics' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746b0c8c29be0_53233015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746b0c8c29be0_53233015')) {function content_5746b0c8c29be0_53233015($_smarty_tpl) {?><html xml:lang="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
	<meta http-equiv="imagetoolbar" content="false" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $_smarty_tpl->tpl_vars['Page']->value['pagetitle'];?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</title>
    <?php if ($_smarty_tpl->tpl_vars['https']->value) {?>
        <?php $_smarty_tpl->tpl_vars['Proto'] = new Smarty_variable("https", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['Proto'] = new Smarty_variable("http", null, 0);?>
    <?php }?>
	<link rel="shortcut icon" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/meta/favicon.ico" />
	<link rel="search" type="application/opensearchdescription+xml" href="http://<?php echo $_SERVER['HTTP_HOST'];?>
/data/opensearch" title="<?php echo $_smarty_tpl->getConfigVariable('Head_Opensearch_Meta');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" />
	<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/common-game-site.css" />
	<link title="<?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
® - <?php echo $_smarty_tpl->getConfigVariable('Head_News_Meta');?>
" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/feed/news" type="application/atom+xml" rel="alternate"/>
	<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/expansion-<?php echo $_smarty_tpl->tpl_vars['ExpansionTemplate']->value;?>
.css" />
    <?php if ($_smarty_tpl->tpl_vars['ExpansionTemplate']->value=='WotLK') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wow-wotlk.css" />
    <?php } else { ?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wow.css" />
    <?php }?>
    <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/nav-client-desktop.css" />
	<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/lightbox.css" />
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='media') {?>
    <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/media/media-gallery.css" />
    <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/media/media.css" />
    <!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/media/media-ie6.css" />
    <![endif]-->
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='page view-page') {?>
    <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/game/events.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='forum') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/build/cms.min.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/forums/forums-index.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/forums/view-forum.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/forums/view-topic.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/forums/freedom-tracker.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="community"&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='community-home'||$_smarty_tpl->tpl_vars['Page']->value['type']=='dev') {?>
    <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/community.css" />
    <?php }?>
    <?php if (strstr($_smarty_tpl->tpl_vars['Page']->value['bodycss'],"item-")) {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/wiki.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/item.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/comments.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/cms.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='zone') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/wiki.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/zone.css" />
        <?php if (strstr($_smarty_tpl->tpl_vars['Page']->value['bodycss'],'boss-')) {?>
            <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/boss.css" />
        <?php }?>
        <style type="text/css">
            #content .content-top { background: url("//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/wiki/zone/bgs/<?php echo $_smarty_tpl->tpl_vars['ZoneInfo']->value['link_name'];?>
.jpg") 0 0 no-repeat; }
        </style>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='realm-status') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/realmstatus.css" />
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="homepage"||$_smarty_tpl->tpl_vars['Page']->value['type']=="blog"||$_smarty_tpl->tpl_vars['Page']->value['type']=='community'&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='community-home'||$_smarty_tpl->tpl_vars['Page']->value['type']=='dev') {?>
	<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/build/cms.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/cms.css" />
    <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/sidebar.css" />
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="shop"||$_smarty_tpl->tpl_vars['Page']->value['bodycss']=="services-home") {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/shop-index.css" />
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="game") {?>
	<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/wiki.css" />
	<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/game/game-common.css" />
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=="game-index") {?>
		<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/game/game-index.css" />
	<?php } elseif ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=="game-race-index"||isset($_smarty_tpl->tpl_vars['Race']->value['race'])) {?>
		<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/game/game-race-index.css" />
	<?php } elseif ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=="game-classes-index"||isset($_smarty_tpl->tpl_vars['Class']->value['class_name'])) {?>
		<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/game/game-class-index.css" />
	<?php } elseif ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=="game-patchnotes") {?>
		<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/game/patch-notes-meta.css" />
		<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/game/game-patchnotes.css" />
		<style type="text/css">
		.body-top { background:url('//<?php echo $_SERVER['HTTP_HOST'];?>
/Uploads/cms/gallery/E5RBK25967ZM1423181836865.jpg') 0 0 no-repeat }
		</style>
	<?php }?>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="search") {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/search-common.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/search.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="profession") {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/wiki.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/profession.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='community'&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='profile_page') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/profile.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/zone.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/character/summary.css" />
        <style type="text/css">
            #content .content-top { background: url("//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/character/summary/backgrounds/race/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
.jpg") left top no-repeat; }
            .profile-wrapper { background-image: url("//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/profilemain/race/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg"); }
        </style>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='dev') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/developer.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='community'&&$_smarty_tpl->tpl_vars['Page']->value['bodycss']=='character-pvp') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/profile.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/arena/arena.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/arena/pvp.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='achievement_page') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/profile.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/character/achievement.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='guild_page') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/profile.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/guild/guild.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/guild/summary.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='events_page') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/profile.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/character/events.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='reputation_page') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/profile.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/character/reputation.css" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='professions_page') {?>
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/profile.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/wiki.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/wiki/profession.css" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/character/profession.css" />
    <?php }?>

    <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/locale/<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.css" />
	
	<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/third-party.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/common-game-site.js"><?php echo '</script'; ?>
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
		Core.baseUrl = '//<?php echo $_SERVER['HTTP_HOST'];?>
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
    <?php if ($_smarty_tpl->tpl_vars['GoogleAnalytics']->value['Account']!='') {?>
        <?php echo '<script'; ?>
>
            
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php echo $_smarty_tpl->tpl_vars['GoogleAnalytics']->value['Account'];?>
', 'auto');
            ga('send', 'pageview');
            
        <?php echo '</script'; ?>
>
    <?php }?>
</head><?php }} ?>
