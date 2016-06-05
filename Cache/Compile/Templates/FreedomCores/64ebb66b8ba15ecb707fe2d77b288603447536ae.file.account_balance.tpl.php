<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-27 21:49:13
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454600664574896a9e4d858-24873251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ebb66b8ba15ecb707fe2d77b288603447536ae' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_balance.tpl',
      1 => 1446063010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454600664574896a9e4d858-24873251',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574896a9f2f571_17545863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574896a9f2f571_17545863')) {function content_574896a9f2f571_17545863($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Operations');?>
</h2>
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Orders_History');?>
</h3>
            </div>
            <div id="page-content" class="page-content">
                <div  id="order-history">
                    <div class="data-container type-table">
                        <table style="font-size:12px;">
                            <thead>
                            <tr class="">
                                <th align="left" width="9%"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Order');?>
</th>
                                <th align="left" width="8%"><?php echo $_smarty_tpl->getConfigVariable('Date');?>
</th>
                                <th align="center" width="42%"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_ItDesc');?>
</th>
                                <th align="center" width="14%"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Price');?>
</th>
                                <th algin="center" width="5%"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Amount');?>
</th>
                                <th align="center" width="9%"><?php echo $_smarty_tpl->getConfigVariable('Status');?>
</th>
                                <th align="center" width="13%"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Total');?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <?php echo '<script'; ?>
>
                                $(function() {
                                    $('[data-click]').on('mousedown', 'td', function(e) {
                                        $(this).data('clickstart', e.timeStamp);
                                    });
                                    $('[data-click]').on('mouseup', 'td', function(e) {
                                        if(e.which != 1 || e.metaKey || e.ctrlKey || e.altKey) {
                                            return false;
                                        }
                                        if(e.timeStamp - $(this).data('clickstart') > 500) {
                                            return false;
                                        }
                                        document.location.href = $(this).closest('[data-click]').data('click');
                                    });
                                });
                            <?php echo '</script'; ?>
>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
