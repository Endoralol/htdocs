<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:41:39
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/account_orders_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2020044410575037936e61a9-92725277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a39d165f6cde9f6dd5bfb521ff7f383946b3cb1' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/account_orders_history.tpl',
      1 => 1464860654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2020044410575037936e61a9-92725277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Payments' => 0,
    'Payment' => 0,
    'ServiceName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750379377d344_42208807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750379377d344_42208807')) {function content_5750379377d344_42208807($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                            <?php  $_smarty_tpl->tpl_vars['Payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Payment']->key => $_smarty_tpl->tpl_vars['Payment']->value) {
$_smarty_tpl->tpl_vars['Payment']->_loop = true;
?>
                                <tr class="parent-row" data-click="/account/management/orders/order-detail?orderID=<?php echo $_smarty_tpl->tpl_vars['Payment']->value['id'];?>
">
                                    <td valign="top">
                                        <a href="/account/management/orders/order-detail?orderID=<?php echo $_smarty_tpl->tpl_vars['Payment']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['Payment']->value['id'];?>
</a>
                                    </td>
                                    <td valign="top" data-raw="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Payment']->value['date'],"%Y%m%d%H%M");?>
">
                                        <span>
                                            <time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Payment']->value['date'],"%d/%m/%Y");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Payment']->value['date'],"%d/%m/%Y");?>
</time>
                                        </span>
                                    </td>
                                    <td valign="top">
                                        <?php if (strlen($_smarty_tpl->tpl_vars['Payment']->value['service'])==3) {?>
                                            <?php $_smarty_tpl->tpl_vars['ServiceName'] = new Smarty_variable(('Account_Management_Service_').(strtoupper($_smarty_tpl->tpl_vars['Payment']->value['service'])), null, 0);?>
                                            <strong data-service-id="null"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service');?>
: <?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['ServiceName']->value);?>
</strong>
                                        <?php } else { ?>
                                            <strong data-service-id="null"><?php echo $_smarty_tpl->tpl_vars['Payment']->value['item_data']['category_desc'];?>
 <?php echo $_smarty_tpl->tpl_vars['Payment']->value['item_data']['item_name'];?>
</strong>
                                        <?php }?>
                                    </td>
                                    <td valign="top" class="align-right item-price">
                                        <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Payment']->value['price']);?>
 USD
                                    </td>
                                    <td valign="top" class="align-center">1</td>
                                    <td valign="top" class="align-center status-success">
                                        <?php echo $_smarty_tpl->tpl_vars['Payment']->value['status'];?>

                                    </td>
                                    <td valign="top" class="align-right" data-raw="<?php echo $_smarty_tpl->tpl_vars['Payment']->value['price'];?>
"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Payment']->value['price']);?>
 USD</td>   </tr>
                            <?php } ?>


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
