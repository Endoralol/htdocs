<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:49:22
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\account_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24478574f3c42c2b3a3-85622731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef368208635eacfe71ead72a2f49b6df41033b5' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\account_header.tpl',
      1 => 1446067054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24478574f3c42c2b3a3-85622731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'User' => 0,
    'Page' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f3c42c6dc65_34298054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f3c42c6dc65_34298054')) {function content_574f3c42c6dc65_34298054($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="nav-client-header" class="nav-client default">
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
                                        <div class="dropdown-section">
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
                                                        <i class="nav-icon-24-blue nav-icon-character-cog"></i><?php echo $_smarty_tpl->getConfigVariable('Account_Parameters');?>
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

<div id="layout-top">
    <div class="wrapper">
        <div id="header">
            <div id="search-bar">
                <form action="/search" id="search-form" method="get">
                    <input type="hidden" id="csrftoken" name="csrftoken" value="625ea365-1f2f-418d-bdab-6eff64de74bb" />
                    <div>
                        <input accesskey="q" alt="<?php echo $_smarty_tpl->getConfigVariable('Account_Search_Placeholder');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" id="search-field" maxlength="35" name="q" tabindex="50" type="text" value="<?php echo $_smarty_tpl->getConfigVariable('Account_Search_Placeholder');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" />
                        <input id="search-button" title="<?php echo $_smarty_tpl->getConfigVariable('Account_Search_Placeholder');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" tabindex="50" type="submit" value="" />
                    </div>
                </form>
            </div>
            <h1 id="logo"><a accesskey="h" href="/account/management" tabindex="50"></a></h1>
            <div id="navigation">
                <div id="page-menu" class="large">
                    <h2><a href="/account/management/"> <?php echo $_smarty_tpl->getConfigVariable('Account_Management_M');?>

                        </a></h2>
                    <ul>
                        <li <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_management') {?>class="active"<?php }?>>
                            <a href="/account/management/" class="border-3"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Information');?>
</a>
                            <span class="arrow"></span>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_parameters') {?>class="active"<?php }?>>
                            <a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'settings'); return false;"><?php echo $_smarty_tpl->getConfigVariable('Account_Parameters');?>
</a>
                            <span class="arrow"></span>
                            <div class="flyout-menu" id="settings-menu" style="display: none">
                                <ul>
                                    <li><a href="/account/management/settings/change-email"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Change_Email');?>
</a></li>
                                    <li><a href="/account/management/settings/change-password"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Change_Password');?>
</a></li>
                                    <li><a href="/account/management/settings/wallet"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Methods');?>
</a></li>
                                    <li><a href="/account/management/settings/personal-information"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Contacts');?>
</a></li>
                                </ul>
                                <!--[if IE 6]>&#160;
                                <iframe id="settings-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 0; width: 200px; height: 220px; z-index: -1;"></iframe>
                                <?php echo '<script'; ?>
 type="text/javascript">
                                    //<![CDATA[
                                    (function(){
                                    var doc = document;
                                    var shim = doc.getElementById('settings-shim');
                                    shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
                                    shim.style.display = 'block';
                                    })();
                                    //]]>
                                    <?php echo '</script'; ?>
>
                                    <![endif]-->
                            </div>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_dashboard') {?>class="active"<?php }?>>
                            <a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'games'); return false;"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Games_And_Codes');?>
</a>
                            <span class="arrow"></span>
                            <div class="flyout-menu" id="games-menu" style="display: none">
                                <ul>
                                    <li><a href="/account/management/claim-code"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code');?>
</a></li>
                                    <li><a href="/account/management/get-a-game"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Get_A_Game');?>
</a></li>
                                    <li><a href="/account/management/download/"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Download_Games');?>
</a></li>
                                </ul>
                            </div>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='account_operations') {?>class="active"<?php }?>>
                            <a href="#" class="border-3 menu-arrow transaction" onclick="openAccountDropdown(this, 'activity'); return false;"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Operations');?>

                                <span id="chargebackCount" class="border-3" style="">0</span>
                            </a>
                            <span class="arrow"></span>
                            <div class="flyout-menu" id="activity-menu" style="display: none">
                                <ul>
                                    <li><a href="/account/management/balance"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet_TopUP');?>
</a></li>
                                    <li><a href="/account/management/orders"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Orders_History');?>
</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="account-balance account-balance-rub" id="accountBalanceCenter" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
                            <a href="#" class="border-3 menu-arrow title" onclick="openAccountDropdown(this, 'accountBalance'); return false;">
                                <span class="sub-title"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet');?>
:</span><br />
                                <span class="balance" ><?php echo $_smarty_tpl->tpl_vars['User']->value['balance'];?>
 <?php echo $_smarty_tpl->tpl_vars['User']->value['selected_currency'];?>
 </span>
                            </a>
                            <div class="flyout-menu" id="accountBalance-menu">
                                <ul>
                                    <li id="RUB" class="switch-currency selected"><span><?php echo $_smarty_tpl->tpl_vars['User']->value['balance'];?>
 <?php echo $_smarty_tpl->tpl_vars['User']->value['selected_currency'];?>
 </span></li>
                                    <li class=" first"><a href="/account/management/balance"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet_TopUP');?>
</a></li>
                                    <li class=" line "><a href="/account/management/transaction-history"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet_History');?>
</a></li>
                                    <li id="refreshBalance"><a href="#" onclick="accountBalance.refreshBalance(); return false;"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet_Refresh');?>
</a></li>
                                    <li class="refreshing" id="refreshingBalance"><a href="#" onclick="return false;"><img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/loader.gif" alt="" height="11" width="16" /><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet_Refreshing');?>
</a></li>
                                </ul>
                            </div>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['User']->value['access_level']==4) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['Page']->value['type']=='admin') {?>class="active"<?php }?>>
                                <a href="/admin/dashboard" class="border-3 administrator"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Title');?>
</a>
                                <span class="arrow"></span>
                            </li>
                        <?php }?>
                    </ul>
                    <span class="clear"><!-- --></span>
                </div>

                <?php echo '<script'; ?>
 type="text/javascript">
                    //<![CDATA[
                    $(function() {
                        accountBalance.accountBalanceCurrency = "<?php echo $_smarty_tpl->tpl_vars['User']->value['selected_currency'];?>
";
                        accountBalance.currencyMap = {
                            'EUR' : {
                                'format': '{0} EUR',
                                'groupSize': 3,
                                'delimiter': ' ',
                                'point': ','
                            },
                            'GBP' : {
                                'format': '{0} GBP',
                                'groupSize': 3,
                                'delimiter': ' ',
                                'point': ','
                            },
                            'RUB' : {
                                'format': '{0} RUB',
                                'groupSize': 3,
                                'delimiter': ' ',
                                'point': ','
                            },
                            'USD' : {
                                'format': '{0} USD',
                                'groupSize': 3,
                                'delimiter': ' ',
                                'point': ','
                            }
                        };
                        accountBalance.initialize();
                        accountBalance.refreshBalance();
                        $('.account-balance-dialog').dialog({
                            autoOpen: false,
                            modal: true,
                            position: "center",
                            resizeable: false,
                            closeText: "<?php echo $_smarty_tpl->getConfigVariable('Account_Close');?>
",
                            buttons: {
                                'Готово': function() {
                                    $(this).dialog("close");
                                }
                            },
                            open: function() {
                                $(".ui-dialog-buttonpane").find("button").addClass("button1").find(":first").addClass("first");
                                if(Core.browser=="ie6" || Core.browser=="ie7" || Core.browser=="ie8"){
                                    $(".ui-widget-overlay").css("opacity", 0.8);
                                }
                            }
                        });
                    });
                    //]]>
                <?php echo '</script'; ?>
>
                <span class="clear"><!-- --></span>
            </div>
        </div>
    </div>
</div><?php }} ?>
