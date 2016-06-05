<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 12:30:10
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\payment_pay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13416574ffca26627b6-99988504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67ab93779ca953358349dcd8633395f7ac8702b5' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\payment_pay.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13416574ffca26627b6-99988504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'Service' => 0,
    'ServiceName' => 0,
    'ServiceDescription' => 0,
    'Character' => 0,
    'Account' => 0,
    'User' => 0,
    'AccountBalance' => 0,
    'Balance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574ffca26eca02_54240106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ffca26eca02_54240106')) {function content_574ffca26eca02_54240106($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div id="page-header">
                <span class="float-right"><span class="form-req">*</span><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Must_FillIn');?>
</span>
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_M');?>
</h2>
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Pay');?>
</h3>
            </div>
            <form method="post" id="payment-form" action="/account/management/payment/complete_payment" onsubmit="return FormHandler.handleSubmit('submit', this, '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_OneMinute');?>
', 'submitDisabled');">
                <div id="payment-wrapper" class="clear-after">
                    <div class="purchase-overview purchase-overview-usd">
                        <h3><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Info');?>
</h3>
                        <div class="content">
                            <div class="item last-item">
                                <span class="thumb">
                                <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/services/wow/<?php echo $_smarty_tpl->tpl_vars['Service']->value['name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['Service']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['Service']->value['title'];?>
" />
                                </span>
                                <div class="product-detail clear-after">
                                    <?php $_smarty_tpl->tpl_vars['ServiceName'] = new Smarty_variable(('Account_Management_Service_').(strtoupper($_smarty_tpl->tpl_vars['Service']->value['name'])), null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['ServiceDescription'] = new Smarty_variable(('Account_Management_Service_').(strtoupper($_smarty_tpl->tpl_vars['Service']->value['name'])).('_Description'), null, 0);?>
                                    <h4><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['ServiceName']->value);?>
</h4>
                                    <p class="description"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['ServiceDescription']->value);?>
</p>
                                </div>
                                <span class="clear"><!-- --></span>
                                <div class="detail">
                                    <?php echo $_smarty_tpl->getConfigVariable('Community_Character');?>

                                    <strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</strong>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['Service']->value['name']=='pfc') {?>
                                    <div class="detail">
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Old_Faction');?>

                                        <strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['side_translation'];?>
</strong>
                                    </div>
                                    <div class="detail">
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_New_Faction');?>

                                        <?php if ($_smarty_tpl->tpl_vars['Character']->value['side_id']=='0') {?>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction_Horde');?>
</strong>
                                        <?php } else { ?>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction_Alliance');?>
</strong>
                                        <?php }?>
                                    </div>
                                <?php } else { ?>
                                    <div class="detail">
                                        <?php echo $_smarty_tpl->getConfigVariable('Character_Faction');?>

                                        <strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['side_translation'];?>
</strong>
                                    </div>
                                <?php }?>
                                <div class="detail form-row" style="text-align: right;">
                                    <a class="add-label" style="margin-top:10px" id="edit-order-link" href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PFC&amp;servicecat=tos&amp;character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
">
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Edit');?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="total-price">
                            <div class="total-due">
                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Total');?>
:<strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Service']->value['price']);?>
 USD</strong>
                            </div>
                        </div>
                    </div>
                    <div class="payment-overview">
                        <div id="payment-toggle">
                            <div class="section-header drop-shadow border-4">
                                Платежная информация
                            </div>
                            <div class="section-box border-4">
                                <div id="payment-form">
                                    <div class="form-row">
                                        <span class="form-left">
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service');?>

                                        </span>
                                        <span class="form-right">
                                            <?php echo $_smarty_tpl->tpl_vars['Service']->value['title'];?>

                                        </span>
                                    </div>
                                    <div class="form-row">
                                        <span class="form-left">
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_PayingFrom');?>

                                        </span>
                                        <span class="form-right">
                                            <?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>

                                        </span>
                                    </div>
                                    <div class="form-row">
                                        <span class="form-left">
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Method');?>

                                        </span>
                                        <span class="form-right">
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Wallet');?>

                                        </span>
                                    </div>
                                    <div class="form-row">
                                        <span class="form-left">
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Remaining_Balance');?>

                                        </span>
                                        <span class="form-right">
                                            <?php $_smarty_tpl->tpl_vars['Balance'] = new Smarty_variable($_smarty_tpl->tpl_vars['AccountBalance']->value['balance']-$_smarty_tpl->tpl_vars['Service']->value['price'], null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['Balance']->value<0) {?>
                                                <font color="red"><?php echo $_smarty_tpl->tpl_vars['Balance']->value;?>
 USD</font>
                                            <?php } else { ?>
                                                <font color="green"><?php echo $_smarty_tpl->tpl_vars['Balance']->value;?>
 USD</font>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                                <span class="clear"></span>
                            </div>
                            <div class="submit-container">
                                <div class="total-due-submit">
                                    <div class="form-row">
                                        <span class="form-left">
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Total');?>
:
                                        </span>
                                        <span class="form-right">
                                                <strong class="supporting" id="totalSubmit"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Service']->value['price']);?>
 USD</strong><br />
                                        </span>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['Balance']->value<0) {?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_InsufFunds');?>

                                <?php } else { ?>
                                    <input type="hidden" name="accountName" value="WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
">
                                    <input type="hidden" name="service" value="<?php echo $_smarty_tpl->tpl_vars['Service']->value['service'];?>
">
                                    <input type="hidden" name="character" value="<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
">
                                    <input type="hidden" name="newbalance" value="<?php echo $_smarty_tpl->tpl_vars['Balance']->value;?>
">
                                    <input type="hidden" name="price" value="<?php echo $_smarty_tpl->tpl_vars['Service']->value['price'];?>
">
                                    <fieldset class="ui-controls section-buttons">
                                        <button class="ui-button button1" type="submit" id="submitted" tabindex="1">
                                            <span class="button-left">
                                                <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Pay');?>
</span>
                                            </span>
                                        </button>
                                        <a class="ui-cancel " href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PFC&amp;servicecat=tos&amp;character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
" id="payment-cancel" tabindex="1">
                                            <span>
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_ToS_Decline');?>

                                            </span>
                                        </a>
                                    </fieldset>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
