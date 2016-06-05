<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 11:57:13
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\admin\shop_deleteitem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23685574ff4e9b656e6-96353496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b7c0f5fc46e8d3e3700440b2ef342b30cfe346' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\admin\\shop_deleteitem.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23685574ff4e9b656e6-96353496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'ItemsList' => 0,
    'Item' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574ff4e9c0a9f9_21194493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ff4e9c0a9f9_21194493')) {function content_574ff4e9c0a9f9_21194493($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a> >
                    <a href="/admin/dashboard/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Title');?>
</span>
                    </a> >
                    <a href="/admin/shop/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop');?>
</span>
                    </a> >
                    <a href="/admin/shop/edit-item" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_DeleteItem');?>
</span>
                    </a>
                </h2>
                <br />
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_DeleteItem');?>
</h3>
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Delete_Item_Subheader');?>
</h2>
            </div>
            <div class="dashboard service">
                <div class="primary">
                    <div class="service-wrapper">
                        <div class="service-info">
                            <div class="service-tag">
                                <div class="service-tag-contents border-3">
                                    <div class="service-tag-description">
                                        <span class="character-message caption"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Delete_Item_SideTitle');?>
</span>
                                    </div>
                                    <span class="clear"><!-- --></span>
                                </div>
                            </div>
                        </div>
                        <div class="service-form">
                            <div class="character-list">
                                <ul id="character-list">
                                    <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ItemsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
                                        <a href="/admin/shop/delete-item-complete/?itemid=<?php echo $_smarty_tpl->tpl_vars['Item']->value['short_code'];?>
" class="character-link">
                                            <li class="character border-4" id="Item<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['Item']->value['item_type'];?>
:<?php echo $_smarty_tpl->tpl_vars['Item']->value['price'];?>
">
                                                <div class="character-icon wow-portrait-64-80 glow-shadow-3">
                                                    <?php if ($_smarty_tpl->tpl_vars['Item']->value['item_type']==1) {?>
                                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/shop_service_icon.jpg" width="64" height="64" alt="" />
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['item_type']==2) {?>
                                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/shop_item_icon.jpg" width="64" height="64" alt="" />
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['item_type']==3) {?>
                                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/shop_mount_icon.jpg" width="64" height="64" alt="" />
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['item_type']==4) {?>
                                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/shop_wallet_icon.jpg" width="64" height="64" alt="" />
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['item_type']==5) {?>
                                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/shop_pet_icon.jpg" width="64" height="64" alt="" />
                                                    <?php }?>
                                                </div>
                                                <div class="character-description" style="width: 70%;">
                                            <span class="character-name caption">
                                                <?php echo $_smarty_tpl->tpl_vars['Item']->value['item_name'];?>

                                            </span>
                                            <span class="character-class">
                                            <?php echo $_smarty_tpl->tpl_vars['Item']->value['category_name'];?>
<br />
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Add_Item_Price');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['Item']->value['price'];?>
 USD
                                            </span>
                                                </div>
                                            </li>
                                        </a>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="error-container" style="display: none;"></div>
                        </div>
                        <span class="clear"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
