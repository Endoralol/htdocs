<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 12:30:04
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\service_confirm\proceed_to_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31860574ffc9c85d756-58848150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68566857bb4745c2d2e6c6d6cf1164051597b1e9' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\service_confirm\\proceed_to_payment.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31860574ffc9c85d756-58848150',
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
  'unifunc' => 'content_574ffc9c8640a6_57179882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ffc9c8640a6_57179882')) {function content_574ffc9c8640a6_57179882($_smarty_tpl) {?><form method="POST" action="/account/management/payment/pay?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
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
