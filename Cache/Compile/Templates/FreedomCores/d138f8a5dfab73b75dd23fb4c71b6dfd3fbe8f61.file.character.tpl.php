<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 20:08:52
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/service_confirm/character.tpl" */ ?>
<?php /*%%SmartyHeaderCode:677564827574f16a44e1e89-53758341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd138f8a5dfab73b75dd23fb4c71b6dfd3fbe8f61' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/service_confirm/character.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677564827574f16a44e1e89-53758341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f16a45e2cc3_04194609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f16a45e2cc3_04194609')) {function content_574f16a45e2cc3_04194609($_smarty_tpl) {?><div class="service-interior light">
    <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Confirm_Changes');?>
:</h3>
    <div class="confirm-service">
        <span class="confirm-service-label pad-bottom"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Look');?>
:</span>
        <span class="confirm-service-details">
        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Look_Desc');?>
.<br />
        <em>
            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Look_Help');?>

        </em>
        </span>
    </div>
    <span class="clear"><!-- --></span>
    <?php echo $_smarty_tpl->getSubTemplate ('account/service_confirm/proceed_to_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
