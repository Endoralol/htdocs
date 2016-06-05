<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-03 23:06:33
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155442033957500ba0c1fce7-76836355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '802c593fac6908aa1b9023a185ece0ee039bd9ad' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/header.tpl',
      1 => 1464984391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155442033957500ba0c1fce7-76836355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57500ba0cf3e07_31263074',
  'variables' => 
  array (
    'Language' => 0,
    'Page' => 0,
    'ExpansionTemplate' => 0,
    'Template' => 0,
    'AppName' => 0,
    'User' => 0,
    'Characters' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57500ba0cf3e07_31263074')) {function content_57500ba0cf3e07_31263074($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body class="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['Page']->value['bodycss'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['ExpansionTemplate']->value=="TBC") {?>
        <div class="tbc_video_background">
            <div class="body_bg"></div>
            <div class="video_header">
                <video loop="loop" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/backgrounds/header-illidan.webm" autoplay></video>
            </div>
            <div class="video_footer"></div>
        </div>
    <?php }?>
    <div id="nav-client-header" class="nav-client compact">
        <div id="nav-client-bar">
            <div class="grid-container nav-header-content">
                <ul class="nav-list nav-left" id="nav-client-main-menu">
                    <li>
                        <a id="nav-client-home" class="nav-item nav-home" href="/" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
 Icon"></a>
                    </li>
                    <li>
                        <a id="nav-client-shop" class="nav-item nav-link" href="/shop" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo $_smarty_tpl->getConfigVariable('Menu_Shop');?>
"><?php echo $_smarty_tpl->getConfigVariable('Menu_Shop');?>
</a>
                    </li>
                    <li>
                        <a id="nav-client-api" class="nav-item nav-link" href="/api" data-analytics="global-nav" data-analytics-placement="Nav - API">API</a>
                    </li>
                </ul>
                <?php if (!isset($_SESSION['loggedin'])||!$_SESSION['loggedin']) {?>
                <ul class="nav-list nav-right" id="nav-client-account-menu">
                    <li>
                        <div id="username">
                            <div class="dropdown pull-right">
                                <a class="nav-link username dropdown-toggle" data-toggle="dropdown" rel="navbar">
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management');?>

                                    <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="arrow top"></div>
                                    <div class="user-profile">
                                        <div class="dropdown-section">
                                            <div class="nav-box">
                                                <a class="nav-item nav-btn nav-btn-block nav-login-btn" href="/account/login" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log In"><?php echo $_smarty_tpl->getConfigVariable('Login_Authorization');?>
</a>
                                            </div>
                                        </div>
                                        <div class="dropdown-section">
                                            <ul class="nav-list">
                                                <li>
                                                    <a class="nav-item nav-a nav-item-box" href="/account/management/" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                        <i class="nav-icon-24-blue nav-icon-character-cog"></i>
                                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Parameters');?>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a id="nav-client-support-link" class="nav-item nav-link" href="/bugtracker/" data-analytics="global-nav" data-analytics-placement="Nav - Bug Tracker "> Bug Tracker  </a>
                    </li>
                    <li>
                        <a id="nav-client-support-link" class="nav-item nav-link" href="/support/" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo $_smarty_tpl->getConfigVariable('Support');?>
"> <?php echo $_smarty_tpl->getConfigVariable('Support');?>
 </a>
                    </li>
                </ul>
                <?php } else { ?>
                    <ul class="nav-list nav-right" id="nav-client-account-menu">
                        <li>
                            <div id="username">
                                <div class="dropdown pull-right">
                                    <a class="nav-link username dropdown-toggle" data-toggle="dropdown" rel="navbar">
                                        <?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>

                                        <b class="caret"></b>
                                    </a>
                                    <div class="dropdown-menu pull-right">
                                        <div class="arrow top"></div>
                                        <div class="user-profile">
                                            <?php if ($_smarty_tpl->tpl_vars['User']->value['access_level']==4) {?>
                                                <div class="dropdown-section">
                                                    <ul class="nav-list">
                                                        <li>
                                                            <a class="nav-item nav-a nav-item-box" href="/admin/dashboard" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                                <i class="nav-icon-24-blue nav-icon-character-cog"></i><?php echo $_smarty_tpl->getConfigVariable('Administrator_Title');?>
</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php }?>
                                            <div class="dropdown-section">
                                                <div class="nav-box selectable">
                                                    <?php if ($_smarty_tpl->tpl_vars['User']->value['freedomtag_name']!='') {?>
                                                        <div class="label">
                                                            <span class="battletag"><?php echo $_smarty_tpl->tpl_vars['User']->value['freedomtag_name'];?>
</span>
                                                            <span class="code">#<?php echo $_smarty_tpl->tpl_vars['User']->value['freedomtag_id'];?>
</span>
                                                        </div>
                                                    <?php }?>
                                                    <div class="email"><?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
</div>
                                                </div>
                                            </div>
                                            <div class="dropdown-section">
                                                <ul class="nav-list">
                                                    <li>
                                                        <a class="nav-item nav-a nav-item-box" href="/account/management/" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                            <i class="nav-icon-24-blue nav-icon-character-cog"></i><?php echo $_smarty_tpl->getConfigVariable('Account_Management');?>
</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-section">
                                                <a class="nav-item nav-item-box" href="/account/signout" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log Out"><i class="nav-icon-24-blue nav-icon-logout"></i><?php echo $_smarty_tpl->getConfigVariable('Login_Logout');?>
</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                        <a id="nav-client-support-link" class="nav-item nav-link" href="/bugtracker/" data-analytics="global-nav" data-analytics-placement="Nav - Bug Tracker "> Bug Tracker  </a>
                    </li>
                        <li>
                            <a id="nav-client-support-link" class="nav-item nav-link" href="/support/" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo $_smarty_tpl->getConfigVariable('Support');?>
"> <?php echo $_smarty_tpl->getConfigVariable('Support');?>
 </a>
                        </li>
                    </ul>
                <?php }?>
            </div>
        </div>
    </div>
	<div id="wrapper">
		<div id="header">
			<div class="search-bar">
				<form action="/search" method="get" autocomplete="off">
					<div>
						<div class="ui-typeahead-ghost">
							<input type="text" value="" autocomplete="off" readonly="readonly" class="search-field input input-ghost" />
							<input type="search" class="search-field input" name="q" id="search-field" maxlength="200" tabindex="40" alt="" value="" />
						</div>
						<input type="submit" class="search-button" value="" tabindex="41" />
					</div>
				</form>
			</div>
			<h1 id="logo">
				<a href="/"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</a>
			</h1>
			<div class="header-plate">
				<ul class="menu" id="menu">
					<li class="menu-home" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a itemprop="url" href="/" <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="homepage") {?> class="menu-active" <?php }?>>
							<span itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Main');?>
</span>
						</a>
					</li>
					<li class="menu-game" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a itemprop="url" href="/game/" <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="game"||$_smarty_tpl->tpl_vars['Page']->value['type']=='zone') {?> class="menu-active" <?php }?>>
							<span itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Game');?>
</span>
						</a>
					</li>
					<li class="menu-community" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a itemprop="url" href="/community/" <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="community") {?> class="menu-active" <?php }?>>
							<span itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Community');?>
</span>
						</a>
					</li>
					<li class="menu-media" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a itemprop="url" href="/media/" <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="media") {?> class="menu-active" <?php }?>>
							<span itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Media');?>
</span>
						</a>
					</li>
					<li class="menu-forums" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a itemprop="url" href="/forum/" <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="forum") {?> class="menu-active" <?php }?>>
							<span itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Forums');?>
</span>
						</a>
					</li>
					<li class="menu-services" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a itemprop="url" href="/shop/" <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=="shop") {?> class="menu-active" <?php }?>>
							<span itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Shop');?>
</span>
						</a>
					</li>
				</ul>
				<?php if (!isset($_SESSION['loggedin'])||!$_SESSION['loggedin']) {?>
                    <div class="user-plate">
                        <a href="/account/login" class="card-character plate-logged-out">
                            <span class="card-portrait"></span>
                            <span class="wow-login-key"></span>
                            <span class="login-msg"><?php echo $_smarty_tpl->getConfigVariable('Account_Authorization_Required');?>
</span>
                        </a>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['Characters']->value==0) {?>
                        <div class="user-plate">
                            <a href="/account/signout">
                                <div class="card-character plate-default no-character"></div>
                                <div class="meta-wrapper meta-no-character ajax-update">
                                    <div class="meta">
                                        <div class="player-name"><?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>
</div>
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_No_Characters');?>
<br />
                                        <?php echo $_smarty_tpl->getConfigVariable('Login_Logout');?>

                                    </div>
                                </div>
                            </a>
                        </div>
                     <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("blocks/userplate_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                     <?php }?>
				<?php }?>
			</div>
		</div><?php }} ?>
