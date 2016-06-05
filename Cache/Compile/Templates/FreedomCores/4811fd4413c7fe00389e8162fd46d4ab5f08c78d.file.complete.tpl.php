<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 23:40:58
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47236258957475f5a001596-97584525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4811fd4413c7fe00389e8162fd46d4ab5f08c78d' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/shop/complete.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47236258957475f5a001596-97584525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'ItemData' => 0,
    'BuyingFor' => 0,
    'ActivationCode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57475f5a0520f2_00001805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57475f5a0520f2_00001805')) {function content_57475f5a0520f2_00001805($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('shop/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                                    <span class="currency-code">USD</span> <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['price'];?>
.00 </p>
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
                    <?php echo $_smarty_tpl->getConfigVariable('Shop_Congrats');?>

                </h1>
                <div class="grid-75 suffix-25 app-grid-100 app-suffix-0">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->getConfigVariable('Shop_Activation_Code');?>
</label>
                            <span class="uneditable-input input-block saved-payment-info">
                                <?php echo $_smarty_tpl->tpl_vars['ActivationCode']->value;?>

                            </span>
                        </div>
                    </fieldset>
                </div>
                <div class="grid-70 suffix-30 app-grid-100 app-suffix-0">
                    <p class="purchase-help-text"><?php echo sprintf($_smarty_tpl->getConfigVariable('Shop_Activation_Help'),$_smarty_tpl->tpl_vars['ItemData']->value['item_name']);?>
</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('shop/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
