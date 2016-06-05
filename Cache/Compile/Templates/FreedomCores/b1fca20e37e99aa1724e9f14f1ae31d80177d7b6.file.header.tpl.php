<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 15:52:17
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19008871055746f18108c9a9-25496544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1fca20e37e99aa1724e9f14f1ae31d80177d7b6' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/header.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19008871055746f18108c9a9-25496544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Page' => 0,
    'AppName' => 0,
    'User' => 0,
    'PurchaseCompleted' => 0,
    'ItemData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746f181104ea8_35558728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f181104ea8_35558728')) {function content_5746f181104ea8_35558728($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('shop/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body class="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['Page']->value['bodycss'];?>
 ">
<?php echo $_smarty_tpl->getSubTemplate ('shop/js_part.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="navbar-static">
    <div id="nav-client-header" class="nav-client">
        <div id="nav-client-bar">
            <div class="grid-container nav-header-content">
                <ul class="nav-list nav-left" id="nav-client-main-menu">
                    <li>
                        <a id="nav-client-home" class="nav-item nav-home" href="/" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
 Icon"></a>
                    </li>
                    <li>
                        <a id="nav-client-shop" class="nav-item nav-link <?php if (!isset($_smarty_tpl->tpl_vars['Page']) || !is_array($_smarty_tpl->tpl_vars['Page']->value)) $_smarty_tpl->createLocalArrayVariable('Page');
if ($_smarty_tpl->tpl_vars['Page']->value['type'] = 'shop') {?> active<?php }?>" href="/shop" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo $_smarty_tpl->getConfigVariable('Menu_Shop');?>
"><?php echo $_smarty_tpl->getConfigVariable('Menu_Shop');?>
</a>
                    </li>
                </ul>
                <?php if (!$_SESSION['loggedin']) {?>
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
                                                            Параметры
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
                            <a id="nav-client-support-link" class="nav-item nav-link" href="/support/" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo $_smarty_tpl->getConfigVariable('Support');?>
"> <?php echo $_smarty_tpl->getConfigVariable('Support');?>
 </a>
                        </li>
                    </ul>
                <?php }?>
            </div>
        </div>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['PurchaseCompleted']->value)) {?>
        <nav class="navbar">
            <div class="grid-container">
                <ul class="unstyled progress-tracker">
                    <li <?php if (!$_smarty_tpl->tpl_vars['PurchaseCompleted']->value) {?> class="active"<?php }?>>
                        <i class="icon-1-sign"></i>
                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Nav_Pay');?>

                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['PurchaseCompleted']->value) {?> class="active"<?php }?>>
                        <i class="icon-2-sign"></i>
                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Nav_Play');?>
!
                    </li>
                </ul>
            </div>
        </nav>
    <?php } else { ?>
        <nav class="navbar">
            <div class="grid-container">
                <div class="grid-50">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/shop/">
                            <span class="breadcrumb-home">
                                <i class="icon-home"></i>
                                <?php echo $_smarty_tpl->getConfigVariable('Menu_Shop');?>

                            </span>
                            </a>
                            <span class="divider"><i class="icon-chevron-right icon-white"></i></span>
                        </li>

                        <?php if (!isset($_smarty_tpl->tpl_vars['ItemData']->value)) {?>
                            <li class="active">World of Warcraft</li>
                        <?php } else { ?>
                            <li>
                                <a href="/shop/">
                            <span class="breadcrumb-home">
                                World of Warcraft
                            </span>
                                </a>
                                <span class="divider"><i class="icon-chevron-right icon-white"></i></span>
                            </li>
                            <li class="active"><?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
</li>
                        <?php }?>
                    </ul>
                </div>
                <?php if ($_SESSION['loggedin']) {?>
                <div class="grid-50">
                    <ul class="nav">
                        <li class="dropdown pull-right battlenet-balance-status">
                            <a href="#" class="dropdown-toggle" id="battlenet-balance-select" role="button" data-toggle="dropdown">
                                <span class="balance-amount"><?php echo $_smarty_tpl->tpl_vars['User']->value['selected_currency'];?>
 <?php echo $_smarty_tpl->tpl_vars['User']->value['balance'];?>
.00</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="battlenet-balance-select">
                                <li><a tabindex="-1" href="/shop/add-balance">Add Balance</a></li>
                                <li><a tabindex="-1" href="/account/management/claim-code" data-external="sso">Add Pre-paid Card<i class="icon-external-link"></i></a></li>
                                <li><a tabindex="-1" href="/account/management/orders" data-external="sso">Balance History<i class="icon-external-link"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php }?>
            </div>
        </nav>
    <?php }?>
</div><?php }} ?>
