<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 19:21:19
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/service_confirm/proceed_to_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136656043657505cff0578b1-49116315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea9f41a12684eec65f54d0b84b47a97c009a708' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/service_confirm/proceed_to_payment.tpl',
      1 => 1464860670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136656043657505cff0578b1-49116315',
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
  'unifunc' => 'content_57505cff08c526_51043879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57505cff08c526_51043879')) {function content_57505cff08c526_51043879($_smarty_tpl) {?><form method="POST" action="/account/management/payment/pay?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
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
