<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 11:53:08
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\admin\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17515574ff3f490c970-15623852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553753e08cccb91709cd05c7f1d8b05d818d7dc2' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\admin\\dashboard.tpl',
      1 => 1446078004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17515574ff3f490c970-15623852',
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
  'unifunc' => 'content_574ff3f497aba9_36271217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ff3f497aba9_36271217')) {function content_574ff3f497aba9_36271217($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
