<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 19:24:13
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_settings_personal_information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1446537613574f0c2db2fd76-10702439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a62c15c4853c266e977d786aa47da7506adc66d' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_settings_personal_information.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1446537613574f0c2db2fd76-10702439',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f0c2db658e5_14431994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f0c2db658e5_14431994')) {function content_574f0c2db658e5_14431994($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Parameters');?>
</h2>
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Contacts');?>
</h3>
            </div>
            <div class="address-book columns-2-1">
                <div class="edit-addresses column column-left">
                    <div class="saved-addresses">
                        <div class="address-entry" id="wallet-0">
                            <h4 class="caption supporting-header">
                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_PersonalInformation');?>

                                <span class="edit-delete">
                                    <a href="/account/management/settings/edit-address" tabindex="1">
                                        <span class="icon-16 icon-account-edit"></span>
                                        <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_PersonalInformation_Edit');?>
</span>
                                    </a>
                                </span>
                            </h4>
                            <div class="columns-2">

                            </div>
                            <div class="address-actions">
                                <p class="activate-primary">
                                <div class="primary-address text-green">
                                    <span class="icon-16 icon-bullet-checkmark"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_PersonalInformation_MainAddress');?>
</span>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-addresses column column-right">
                    <div class="address-information">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
