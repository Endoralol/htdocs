<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 20:33:07
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/shop/pay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2761354057506dd395fd31-17228029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f63a1a6387f76acfb1f8ab4eac88edf014d9c8' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/shop/pay.tpl',
      1 => 1464860669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2761354057506dd395fd31-17228029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'ItemData' => 0,
    'BuyingFor' => 0,
    'User' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57506dd3a38802_65486682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57506dd3a38802_65486682')) {function content_57506dd3a38802_65486682($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('shop/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="body-content">
    <div class="grid-container purchase-content">
        <div class="purchase-container">
            <div class="purchase-column grid-25 grid-parent">
                <div class="purchase-sidebar">
                    <div class="product-summary clearfix">
                        <div class="product-image thumbnail">
                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['category'];?>
/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_shop_icon'];?>
_home.jpg" alt="World of Warcraft® In-Game Mount: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
" title="" />
                        </div>
                        <div class="product-name-group">
                            <h6 class="product-desc-label"><?php echo $_smarty_tpl->getConfigVariable('Shop_You_Are_Purchasing');?>
</h6>
                            <p class="product-name">
                                <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['category_desc'];?>
 <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>

                            </p>
                        </div>
                        <div class="product-summary-information" id="product-summary-information">
                            <div class="product-price-group">
                                <h6 class="product-desc-label"><?php echo $_smarty_tpl->getConfigVariable('Shop_Price');?>
</h6>
                                <p class="mp-product-price">
                                    <span class="currency-code"><?php echo $_smarty_tpl->tpl_vars['ItemData']->value['price'];?>
,00 RUB</span>  </p>
                            </div>
                            <div class="product-details-group">
                                <h6 class="product-desc-label"><?php echo $_smarty_tpl->getConfigVariable('Shop_Details');?>
</h6>
                                <ul class="product-features">
                                    <li>
                                        <i class="icon-shopping-cart icon-gray"></i>
                                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Digital_Purchase');?>

                                    </li>
                                    <li>
                                        <i class="icon-globe-alt icon-gray"></i>
                                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Worldwide');?>

                                    </li>
                                    <li>
                                        <i class="icon-wow icon-gray"></i>
                                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Account_Selected');
echo $_smarty_tpl->tpl_vars['BuyingFor']->value;?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="purchase-column grid-75 grid-parent">
                <h1 class="heading-1 purchase-heading">
                    <?php echo $_smarty_tpl->getConfigVariable('Shop_Payment');?>

                    <i class="icon-32-secure icon-32-white"></i>
                </h1>
                <div class="grid-70 suffix-30">
                    <?php if ($_smarty_tpl->tpl_vars['User']->value['balance']<$_smarty_tpl->tpl_vars['ItemData']->value['price']) {?>
                        <div class="alert alert-error alert-icon">
                            <p>
                                <?php echo $_smarty_tpl->getConfigVariable('Shop_Not_Enough_Funds');?>

                            </p>
                            <p>
                                <?php echo $_smarty_tpl->getConfigVariable('Shop_Top_Up_First');?>

                            </p>
                        </div>
                    <?php }?>
                </div>
                <div class="grid-60 prefix-5 push-35 app-grid-100 app-prefix-0 app-push-0" id="checkout-payment-icons">
                    <span class="control-label"><?php echo $_smarty_tpl->getConfigVariable('Shop_We_Accept');?>
</span>
                    <div class="controls">
                        <div class="accepted-payment-icons">
                            <span class="icon-24-payment-battlenet-balance">battlenet-balance</span>
                        </div>
                    </div>
                </div>
                <div class="grid-35 pull-65 app-grid-70 app-pull-0" id="checkout-pay-with">
                    <fieldset class="pay-with">
                        <div class="control-group">
                            <label class="control-label" for="payment-option"><?php echo $_smarty_tpl->getConfigVariable('Shop_Payment_Options');?>
</label>
                            <div class="controls">
                                <div tabindex="1" class="select-box input-block" id="select-box-payment-option" data-select="select" data-original-id="payment-option" data-select-id="select-box-payment-option">
                                    <span class="current">
                                        <i class="icon-payment-battlenet-balance"></i>
                                        <span class="text">
                                            <?php echo $_smarty_tpl->getConfigVariable('Shop_Current_Wallet');?>

                                        </span>
                                    </span>
                                    <span class="arrow"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="grid-35 suffix-65 app-grid-100 app-suffix-0">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->getConfigVariable('Shop_More_Info');?>
</label>
                            <span class="uneditable-input input-block saved-payment-info">
                                <?php echo $_smarty_tpl->getConfigVariable('Shop_Balance');?>
 <?php echo $_smarty_tpl->tpl_vars['User']->value['selected_currency'];?>
 <?php echo $_smarty_tpl->tpl_vars['User']->value['balance'];?>
.00
                            </span>
                        </div>
                    </fieldset>
                </div>
                <div class="grid-70 suffix-30 app-grid-100 app-suffix-0">
                    <div class="checkout-total" id="checkout-total">
                        <div class="total">
                            <h2 class="heading-6 total-heading">
                                <span id="total-heading">
                                    <span data-tooltips="tap" class="tooltipstered">
                                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Total');?>

                                        <span>(<?php echo $_smarty_tpl->getConfigVariable('Shop_Inc_Tax');?>
)</span>
                                        <i class="icon-question-circle icon-blue"></i>
                                    </span>
                                </span>
                            </h2>
                            <h3 class="heading-1 total-cost" id="total-cost" data-base-cost="<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['price'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['price'];?>
.00 <span class="currency-code">RUB</span> </h3>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['User']->value['balance']>=$_smarty_tpl->tpl_vars['ItemData']->value['price']) {?>
                        <form action="/shop/complete-<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['short_code'];?>
" method="post">
                            <div class="form-actions purchase-form-actions">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['BuyingFor']->value;?>
" name="gameAccountIds">
                                <button type="submit" class="btn btn-primary btn-wide" id="payment-submit" data-gtm-id="payment-submit" tabindex="1">
                                    <?php echo $_smarty_tpl->getConfigVariable('Shop_Complete_Payment');?>

                                </button>
                                <a id="payment-cancel" class="cancel purchase-cancel btn" onclick="history.go(-2);" tabindex="1">
                                    <?php echo $_smarty_tpl->getConfigVariable('Shop_Cancel');?>

                                </a>
                            </div>
                        </form>
                    <?php } else { ?>
                        <a id="payment-cancel" class="cancel purchase-cancel btn" onclick="history.go(-2);" tabindex="1">
                            <?php echo $_smarty_tpl->getConfigVariable('Shop_Cancel');?>

                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('shop/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
