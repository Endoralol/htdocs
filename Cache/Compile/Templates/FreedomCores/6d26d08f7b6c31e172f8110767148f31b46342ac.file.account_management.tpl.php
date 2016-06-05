<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:49:22
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\account_management.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27097574f3c42ba7be9-62618662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d26d08f7b6c31e172f8110767148f31b46342ac' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\account_management.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27097574f3c42ba7be9-62618662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'User' => 0,
    'AppName' => 0,
    'Accounts' => 0,
    'Account' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f3c42c22092_99101980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f3c42c22092_99101980')) {function content_574f3c42c22092_99101980($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div id="lobby">
                <div id="page-content" class="page-content">
                    <div id="lobby-account">
                        <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Account_Information');?>
</h3>
                        <div class="lobby-box">
                            <h4 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Account_Name');?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>

                                <span class="edit">[<a href="/account/management/settings/change-email"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameter_Change');?>
</a>]</span>
                            </p>
                            <h4 class="subcategory help-link-right" data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Tooltip');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">FreedomTag®</h4>
                            <?php if ($_smarty_tpl->tpl_vars['User']->value['freedomtag_name']!='') {?>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['User']->value['freedomtag_name'];?>
#<?php echo $_smarty_tpl->tpl_vars['User']->value['freedomtag_id'];?>

                                    <span class="edit">[<a href="/account/management/freedomtag-modify"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameter_Change');?>
</a>]</span>
                                </p>
                            <?php } else { ?>
                                <p>
                                    <a href="/account/management/freedomtag-create"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Create');?>
</a>
                                </p>
                            <?php }?>
                            <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Account_Security');?>
</h3>
                            <h4 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Security_Email');?>
</h4>
                            <p class="has-authenticator-has-active">
                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Security_Email_Ver');?>

                            </p>
                        </div>
                    </div>
                    <div id="lobby-games">
                        <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Accounts_For_Games');?>
</h3>
                        <div id="games-list">
                            <a href="#wow" class="border-2 games-title opened" rel="game-list-wow">WoW</a>
                            <ul id="game-list-wow">
                                <?php  $_smarty_tpl->tpl_vars['Account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Account']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Account']->key => $_smarty_tpl->tpl_vars['Account']->value) {
$_smarty_tpl->tpl_vars['Account']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Account']->key;
?>
                                    <li class="border-4" id="WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
::EU">
                                        <span class="game-icon">
                                            <span class="png-fix"><img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game-icons/wow-32.png" alt="" width="32" height="32" /></span>
                                        </span>
                                        <span class="account-info">
                                            <span class="account-link">
                                                <strong>
                                                    <a class="EU-WOW-wod-de" href="/account/management/dashboard?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
">
                                                        World of Warcraft®: <?php echo $_smarty_tpl->tpl_vars['Account']->value['expansion_name'];?>
™
                                                    </a>
                                                </strong>
                                                <span class="account-id">
                                                    [WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
]
                                                    <span class="account-edition"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Digital_Edition');?>
</span>
                                                    <span class="account-status ACTIVE"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_WoW_Active');?>
</span>
                                                </span>
                                                <span class="account-region"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_WoW_Europe');?>
</span>
                                            </span>
                                        </span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div id="games-tools">
                            <a href="/account/management/claim-code" id="add-game" class="border-5"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code');?>
</a>
                            <p>
                                <a href="/account/management/get-a-game" class="" onclick="">
                                    <span class="icon-16 icon-account-buy"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Get_A_Game');?>
</span>
                                </a>
                            </p>
                            <p>
                                <a href="/account/management/download" class="" onclick="">
                                    <span class="icon-16 icon-account-download"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Download_Games');?>
</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
