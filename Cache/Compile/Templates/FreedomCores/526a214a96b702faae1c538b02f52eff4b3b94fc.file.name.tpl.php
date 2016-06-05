<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 19:21:19
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/service_confirm/name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180237632157505cff01fc45-85433235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526a214a96b702faae1c538b02f52eff4b3b94fc' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/service_confirm/name.tpl',
      1 => 1464860670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180237632157505cff01fc45-85433235',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57505cff054046_82861011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57505cff054046_82861011')) {function content_57505cff054046_82861011($_smarty_tpl) {?><div class="service-interior light">
    <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Confirm_Changes');?>
:</h3>
    <div class="confirm-service">
        <span class="confirm-service-label pad-bottom"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Name');?>
:</span>
        <span class="confirm-service-details">
        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Name_Desc');?>
.<br />
        <em>
            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Name_Help');?>

        </em>
        </span>
    </div>
    <span class="clear"><!-- --></span>
    <?php echo $_smarty_tpl->getSubTemplate ('account/service_confirm/proceed_to_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
