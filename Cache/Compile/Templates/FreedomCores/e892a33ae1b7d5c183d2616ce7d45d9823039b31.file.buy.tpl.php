<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 20:33:04
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/shop/buy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68938143157506dd066b6b8-80057194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e892a33ae1b7d5c183d2616ce7d45d9823039b31' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/shop/buy.tpl',
      1 => 1464860669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68938143157506dd066b6b8-80057194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'ItemData' => 0,
    'Accounts' => 0,
    'Account' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57506dd072c1b7_81000207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57506dd072c1b7_81000207')) {function content_57506dd072c1b7_81000207($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.relative_date.php';
?><?php echo $_smarty_tpl->getSubTemplate ('shop/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
,00 RUB</span></p>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="purchase-column grid-75 grid-parent">
                <h1 class="heading-2">
                    <?php echo $_smarty_tpl->getConfigVariable('Shop_Available_Accounts');?>

                </h1>
                <span id="NoAccountSelected" style="color: red"></span>
                <form action="/shop/pay-<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['short_code'];?>
" method="post">
                    <div class="purchase-selection">
                        <br />
                        <ul class="account-list unstyled" id="eligible-account-list">
                            <?php  $_smarty_tpl->tpl_vars['Account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Account']->key => $_smarty_tpl->tpl_vars['Account']->value) {
$_smarty_tpl->tpl_vars['Account']->_loop = true;
?>
                                <li class="account">
                                    <label class="radio-label">
                                        <input type="radio" name="gameAccountIds" value="<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
"/>
                                        <div class="summary">
                                            <div class="heading heading-4">
                                                <span class="game-label">WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
</span>: <span class="game-box-level"><?php echo $_smarty_tpl->tpl_vars['Account']->value['expansion_name'];?>
</span>
                                            </div>
                                            <div class="description">
                                        <span class="last-played">
                                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Last_Login');?>

                                            <time datetime="<?php echo $_smarty_tpl->tpl_vars['Account']->value['last_login'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['Account']->value['last_login'];?>
"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Account']->value['last_login']);?>
</time>
                                        </span>
                                            </div>
                                        </div>
                                        <div class="message"></div>
                                    </label>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="purchase-actions account-selection-actions">
                        <div class="grid-100 buttons">
                            <button type="submit" class="btn btn-primary btn-wide" onclick="return CheckIfAccountSelected();" ><?php echo $_smarty_tpl->getConfigVariable('Shop_Continue');?>
</button>
                            <a class="cancel purchase-cancel btn" onclick="history.go(-1);" tabindex="1">
                                <?php echo $_smarty_tpl->getConfigVariable('Shop_Cancel');?>

                            </a>
                        </div>
                    </div>
                    <?php echo '<script'; ?>
>
                        function CheckIfAccountSelected()
                        {
                            if (!$("input[name='gameAccountIds']:checked").val())
                            {
                                $("#NoAccountSelected").empty();
                                $("#NoAccountSelected").html('<?php echo $_smarty_tpl->getConfigVariable('Shop_No_Account_Selected');?>
');
                                return false;
                            }
                            else
                                return true;
                        }
                    <?php echo '</script'; ?>
>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('shop/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
