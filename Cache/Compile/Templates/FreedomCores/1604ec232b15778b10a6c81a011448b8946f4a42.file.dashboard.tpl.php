<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 21:02:10
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1532671117575074a2754361-87480326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1604ec232b15778b10a6c81a011448b8946f4a42' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/admin/dashboard.tpl',
      1 => 1464860656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1532671117575074a2754361-87480326',
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
  'unifunc' => 'content_575074a280dd93_19786672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575074a280dd93_19786672')) {function content_575074a280dd93_19786672($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
