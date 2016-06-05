<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 19:24:56
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/service_confirm/proceed_to_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:444112053574f0c58616377-60713864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2e328a135e4f1030c3b362ef97723f8e76959c4' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/service_confirm/proceed_to_payment.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444112053574f0c58616377-60713864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Account' => 0,
    'Character' => 0,
    'Service' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f0c586434f5_51814908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f0c586434f5_51814908')) {function content_574f0c586434f5_51814908($_smarty_tpl) {?><form method="POST" action="/account/management/payment/pay?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
&service=<?php echo $_smarty_tpl->tpl_vars['Service']->value['name'];?>
">
    <div class="service-interior light">
        <fieldset class="ui-controls section-stacked override">
            <button class="ui-button button1" type="submit" tabindex="1">
                <span class="button-left">
                    <span class="button-right">
                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Proceed_To_Payment');?>

                    </span>
                </span>
            </button>
            <a class="ui-cancel " href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PFC&amp;servicecat=tos&amp;character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
" tabindex="1">
                <span>
                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_ToS_Decline');?>

                </span>
            </a>
        </fieldset>
    </div>
</form><?php }} ?>
