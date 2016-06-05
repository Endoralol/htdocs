<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 19:20:53
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_settings_wallet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2049601880574f0b65a05716-36780462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe23773102b4463e59dc6a052458b291174a814b' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_settings_wallet.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2049601880574f0b65a05716-36780462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'User' => 0,
    'AccountBalance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f0b65af4018_98673062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f0b65af4018_98673062')) {function content_574f0b65af4018_98673062($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Parameters');?>
</h2>
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Methods');?>
</h3>
            </div>
            <div id="page-content" class="page-content">
                <p><?php echo sprintf($_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_Subheader'),$_smarty_tpl->tpl_vars['AppName']->value);?>
</p>
                <div class="wallet-container columns-2-1">
                    <div class="column column-left">
                        <div class="subtitle">
                            <h4 class="help-link-right" data-tooltip="<?php echo sprintf($_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_MainPayment_Tooltip'),$_smarty_tpl->tpl_vars['AppName']->value);?>
"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_MainPayment');?>
</h4>
                            <div class="operations"></div>
                        </div>
                        <div class="primary-payment">
                            <h5><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</h5>
                            <dl class="info-section name">
                                <dt><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_Owner');?>
</dt>
                                <dd>
                                    <?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>

                                </dd>
                            </dl>
                            <dl class="info-section" >
                                <dt><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_Number');?>
</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['User']->value['id'];?>
</dd>
                            </dl>
                            <dl class="info-section">
                                <dt><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_ValidTill');?>
</dt>
                                <dd><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_ValidUnlimited');?>
</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="column column-right">
                        <div class="subtitle">
                            <h4>
                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet');?>

                                <span class="help-link-right" data-tooltip="<?php echo sprintf($_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_Wallet_Tooltip'),$_smarty_tpl->tpl_vars['AppName']->value);?>
"></span>
                            </h4>
                            <div class="operations"></div>
                        </div>
                        <div class="wallet-balance">
                            <h5><?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['AccountBalance']->value['balance']);?>
 USD</h5>
                            <dl class="info-section pending-balance-section  ">
                                <dt>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_Operation_Verification');?>

                                    <span class="help-link-right" data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Wallet_Operation_Verification_Tooltip');?>
"></span>
                                </dt>
                                <dd>0.00 USD</dd>
                            </dl>
                            <a class="ui-button button1" href="/shop/product/balance">
                                <span class="button-left">
                                    <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet_TopUP');?>
</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
