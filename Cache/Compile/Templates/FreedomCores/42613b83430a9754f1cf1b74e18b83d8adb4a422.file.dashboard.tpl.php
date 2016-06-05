<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-28 23:05:31
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:747883135749fa0b5803a4-17301496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42613b83430a9754f1cf1b74e18b83d8adb4a422' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/admin/dashboard.tpl',
      1 => 1446078004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747883135749fa0b5803a4-17301496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'UserAccount' => 0,
    'UserAccountBan' => 0,
    'ShopData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5749fa0b5ab1f2_48457594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5749fa0b5ab1f2_48457594')) {function content_5749fa0b5ab1f2_48457594($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div id="lobby">
                <div id="page-content" class="page-content">
                    <?php echo $_smarty_tpl->getSubTemplate ('admin/admin_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <div id="lobby-games">
                        <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Administrator_SiteStat');?>
</h3>
                        <div id="games-list">
                            <ul id="game-list-wow">
                                <li class="border-4" style="background: #ededeb;">
                                    <span class="account-info">
                                        <span class="account-link">
                                            <strong style="font-size: 16px;">
                                                <?php echo $_smarty_tpl->getConfigVariable('Administrator_Users_Registered');?>

                                            </strong>
                                            <span class="account-id">
                                                <span class="account-edition">
                                                    <strong style="color: #4e4e4e!important;"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Users_Registered_Today');?>
</strong> <?php echo $_smarty_tpl->tpl_vars['UserAccount']->value;?>

                                                </span>
                                            </span>
                                            <span class="account-region">
                                                <strong style="color: #4e4e4e!important;"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Users_Registered_Total');?>
</strong> <?php echo $_smarty_tpl->tpl_vars['UserAccountBan']->value;?>

                                            </span>
                                        </span>
                                    </span>
                                </li>
                                <li class="border-4" style="background: #ededeb;">
                                    <span class="account-info">
                                        <span class="account-link">
                                            <strong style="font-size: 16px;">
                                                <?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Stats');?>

                                            </strong>
                                            <span class="account-id">
                                                <span class="account-edition">
                                                    <strong style="color: #4e4e4e!important;"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Items_Count');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['ShopData']->value['count'];?>

                                                </span>
                                            </span>
                                            <span class="account-region">
                                                <strong style="color: #4e4e4e!important;"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Items_Price');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['ShopData']->value['total'];?>
 RUB
                                            </span>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
