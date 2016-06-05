<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:49:30
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19093574f3c4ae8aa16-17125658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfa63455ae651516aeafecb41a0b9a07ccd31c3a' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\shop.tpl',
      1 => 1446068364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19093574f3c4ae8aa16-17125658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'SidebarItems' => 0,
    'Sidebar' => 0,
    'DisplayCategory' => 0,
    'i' => 0,
    'Mount' => 0,
    'Item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f3c4af02f78_15923224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f3c4af02f78_15923224')) {function content_574f3c4af02f78_15923224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('shop/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="body-content">
    <div class="grid-container browse game wow">
        <div  class="logo-banner">
            <img class="family-logo" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/logos/logo-family-wow.png" alt="" />
        </div>
        <div class="browse-container">
            <div class="browse-column sidebar">
                <div class="sidebar-content">
                    <h3 class="heading-6 filter-by-type">
                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Filters');?>

                    </h3>
                    <ul class="filter-list nav nav-list">
                        <?php  $_smarty_tpl->tpl_vars['Sidebar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Sidebar']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SidebarItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Sidebar']->key => $_smarty_tpl->tpl_vars['Sidebar']->value) {
$_smarty_tpl->tpl_vars['Sidebar']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Sidebar']->key;
?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['Sidebar']->value)) {?>
                                <li>
                                    <?php if (isset($_smarty_tpl->tpl_vars['DisplayCategory']->value)&&$_smarty_tpl->tpl_vars['DisplayCategory']->value==$_smarty_tpl->tpl_vars['i']->value) {?>
                                    <a href="/shop/" class="checkbox-label">
                                            <span class="input-checkbox checked"></span>
                                    <?php } else { ?>
                                    <a href="/shop/?categories=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="checkbox-label">
                                            <span class="input-checkbox "></span>
                                    <?php }?>
                                            <span class="">
                                                <span class="filter-text">
                                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['i']->value);?>

                                                </span>
                                                <span class="count">
                                                    (<?php echo count($_smarty_tpl->tpl_vars['Sidebar']->value);?>
)
                                                </span>
                                            </span>
                                    </a>
                                </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="browse-column main">
            <?php if (!isset($_smarty_tpl->tpl_vars['DisplayCategory']->value)) {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['SidebarItems']->value['mounts'])) {?>
                    <h2 class="filter-title">Mounts</h2>
                    <ul class="product-card-container thumbnails">
                        <?php  $_smarty_tpl->tpl_vars['Mount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Mount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SidebarItems']->value['mounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Mount']->key => $_smarty_tpl->tpl_vars['Mount']->value) {
$_smarty_tpl->tpl_vars['Mount']->_loop = true;
?>
                            <li>
                                <a class="product-link" href="/shop/mount-<?php echo $_smarty_tpl->tpl_vars['Mount']->value['short_code'];?>
" tabindex="1" data-gtm-click="productCardClick" data-gtm-product-name="In-Game Mount: <?php echo $_smarty_tpl->tpl_vars['Mount']->value['item_name'];?>
">
                                    <div class="cover"></div>
                                    <div class="thumbnail">
                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/mounts/<?php echo $_smarty_tpl->tpl_vars['Mount']->value['item_shop_icon'];?>
_home.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['Mount']->value['item_name'];?>
" />
                                        <div class="product-card-info">
                                            <h3 class="product-name"><?php echo $_smarty_tpl->tpl_vars['Mount']->value['item_name'];?>
</h3>
                                            <p class="product-price ">
                                                <?php echo $_smarty_tpl->tpl_vars['Mount']->value['price'];?>
,00 RUB
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['SidebarItems']->value['items'])) {?>
                    <h2 class="filter-title">Items</h2>
                    <ul class="product-card-container thumbnails">
                        <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SidebarItems']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
                            <li>
                                <a class="product-link" href="/shop/item-<?php echo $_smarty_tpl->tpl_vars['Item']->value['short_code'];?>
" tabindex="1" data-gtm-click="productCardClick" data-gtm-product-name="In-Game Item: <?php echo $_smarty_tpl->tpl_vars['Item']->value['item_name'];?>
">
                                    <div class="cover"></div>
                                    <div class="thumbnail">
                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/items/<?php echo $_smarty_tpl->tpl_vars['Item']->value['item_shop_icon'];?>
_home.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['Item']->value['item_name'];?>
" />
                                        <div class="product-card-info">
                                            <h3 class="product-name"><?php echo $_smarty_tpl->tpl_vars['Item']->value['item_name'];?>
</h3>
                                            <p class="product-price ">
                                                <?php echo $_smarty_tpl->tpl_vars['Mount']->value['price'];?>
,00 RUB
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>
            <?php } else { ?>
                <h2 class="filter-title"><?php echo ucfirst($_smarty_tpl->tpl_vars['DisplayCategory']->value);?>
</h2>
                <ul class="product-card-container thumbnails">
                    <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SidebarItems']->value[$_smarty_tpl->tpl_vars['DisplayCategory']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
                        <li>
                            <a class="product-link" href="/shop/<?php echo substr($_smarty_tpl->tpl_vars['DisplayCategory']->value,0,-1);?>
-<?php echo $_smarty_tpl->tpl_vars['Item']->value['short_code'];?>
" tabindex="1" data-gtm-click="productCardClick" data-gtm-product-name="In-Game Item: <?php echo $_smarty_tpl->tpl_vars['Item']->value['item_name'];?>
">
                                <div class="cover"></div>
                                <div class="thumbnail">
                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/<?php echo $_smarty_tpl->tpl_vars['DisplayCategory']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Item']->value['item_shop_icon'];?>
_home.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['Item']->value['item_name'];?>
" />
                                    <div class="product-card-info">
                                        <h3 class="product-name"><?php echo $_smarty_tpl->tpl_vars['Item']->value['item_name'];?>
</h3>
                                        <p class="product-price ">
                                            <?php echo $_smarty_tpl->tpl_vars['Item']->value['price'];?>
,00 RUB
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php }?>
            </div>
        </div>
        <div class="grid-100 banner-spacer"></div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('shop/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
