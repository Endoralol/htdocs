<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 19:24:56
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/service_confirm/name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1419112405574f0c585f7723-16663939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4e6eb3957c529a6b4caef351ec77800328a54b4' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/service_confirm/name.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1419112405574f0c585f7723-16663939',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f0c58613226_71625664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f0c58613226_71625664')) {function content_574f0c58613226_71625664($_smarty_tpl) {?><div class="service-interior light">
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
