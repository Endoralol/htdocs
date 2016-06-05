<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 11:55:41
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\admin\shop_additem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25356574ff48d972ab0-68732909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccdefac4503361862ea4168e12730c2d4264d4e1' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\admin\\shop_additem.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25356574ff48d972ab0-68732909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574ff48d9b4733_44198450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ff48d9b4733_44198450')) {function content_574ff48d9b4733_44198450($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="/admin/shop/add-item" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_AddItem');?>
</span>
                    </a>
                </h2>
                <br />
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_AddItem');?>
</h3>
            </div>
            <div id="page-content" class="page-content">
                <form method="post" action="/admin/shop/add-item/process" id="change-settings" novalidate="novalidate">
                <div class="columns-2-1 settings-content">
                    <div class="column column-left">
                        <div class="email-entry">
                            <span class="clear"></span>
                                <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="item_id">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Add_Item_ID');?>
:
                                            </span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="text" name="item_id" value="" id="item_id" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="319" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Add_Item_ID');?>
" />
                                        </span>
                                    </span>
                                </div>
                                <div class="submit-row" id="data-row">
                                    <div class="input-left"></div>
                                    <div class="input-right">
                                        <button class="ui-button button1" onclick="return Administrator.get_item_data();" id="get_item_data" tabindex="1">
                                            <span class="button-left">
                                                <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Add_Get_Data');?>
</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="column column-right">
                            <div class="item-information">
                                <div class="item-detail">
                                    <span class="icon-frame frame-56 shop" style="display: none;" id="item_icon_span"></span>
                                    <ul class="item-specs shop frame" style="margin: 0; color: black;">
                                        <input type="hidden" id="item_class" name="item_class" val="">
                                        <input type="hidden" id="item_subclass" name="item_subclass" val="">
                                        <input type="hidden" id="item_name_in" name="item_name_in" val="">
                                        <li>
                                            <h1 id="item_name" name="item_name"></h1>
                                        </li>
                                        <li>
                                            <h1 id="item_type" name="item_type"></h1>
                                        </li>
                                    </ul>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="text" name="item_price" value="" id="item_price" style="width: 70%; display: none;" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="10" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Add_Item_Price');?>
" />
                                        </span>
                                    </span>
                                    <span class="clear"><!-- --></span>
                                </div>
                            </div>
                            <br /><br /><br />
                            <div class="submit-row" id="additem-row" style="display: none;">
                                <div class="input-left"></div>
                                <div class="input-right">
                                    <center>
                                        <button class="ui-button button1" type="submit" id="password-submit" tabindex="1">
                                                <span class="button-left">
                                                    <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_AddItem');?>
</span>
                                                </span>
                                        </button>
                                    </center>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
