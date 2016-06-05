<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 22:34:54
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/account_orders_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74159140657508a5e489619-31856238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a5719105f35901562080f181c278a760c1c3af' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/account_orders_detail.tpl',
      1 => 1464860654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74159140657508a5e489619-31856238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Payment' => 0,
    'User' => 0,
    'ServiceName' => 0,
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57508a5e608f82_19734251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57508a5e608f82_19734251')) {function content_57508a5e608f82_19734251($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div id="page-header">
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Operations');?>
</h2>
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Order');?>
 №<?php echo $_smarty_tpl->tpl_vars['Payment']->value['id'];?>
</h3>
            </div>
            <div id="page-content" class="page-content">
                <p>
                    <a href="/account/management/orders" class="float-right" style="margin-left:12px;"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Warning_Close');?>
</a>
                    <a href="javascript:;" onclick="window.print()" class="float-right"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Print');?>
</a>
                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_By');?>
 <?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>
 <span><time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Payment']->value['date'],"%d/%m/%Y %H:%M");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Payment']->value['date'],"%d/%m/%Y %H:%M");?>
</time></span>
                </p>
                <table class="invoice" style="font-size:13px;">
                    <thead>
                    <tr>
                        <th class="invoice-type"><span class="digital-goods"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Digital_Goods');?>
</span></th>
                        <th class="align-center"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Amount');?>
</th>
                        <th class="align-center"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Price');?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="item-info">
                        <td class="item">
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
                        <td class="align-center">1</td>
                        <td class="align-right">
                            <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Payment']->value['price']);?>
 USD
                        </td>
                    </tr>
                    <tr class="item-info">
                        <?php if ($_smarty_tpl->tpl_vars['Payment']->value['digital_key']!=null) {?>
                            <td class="align-left">
                                <strong>Key:</strong>
                            </td>
                            <td class="align-left">
                                <?php echo $_smarty_tpl->tpl_vars['Payment']->value['digital_key'];?>

                            </td>
                            <td class="align-right"></td>
                        <?php }?>
                    </tr>
                    </tbody>
                </table>
                <div class="invoice-box">
                    <h4><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Status_Full');?>
: </h4>
                    <?php echo $_smarty_tpl->tpl_vars['Payment']->value['status'];?>

                </div>
                <div class="invoice-box" style="width: 650px"></div>
                <span class="clear"><!-- --></span>
                <br /><br />
                <div id="invoice-meta">
                    <div class="invoice-box">
                        <h4>Способ оплаты:</h4>
                        <strong>
                            <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
 <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Wallet');?>

                        </strong>
                        <br /><?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>

                        <br /><?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>

                    </div>
                    <span class="clear"><!-- --></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
