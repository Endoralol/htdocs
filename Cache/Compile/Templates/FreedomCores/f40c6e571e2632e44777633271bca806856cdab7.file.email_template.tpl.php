<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 20:35:59
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/shop/email_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163972328657506e7f346357-69302009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40c6e571e2632e44777633271bca806856cdab7' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/shop/email_template.tpl',
      1 => 1464860669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163972328657506e7f346357-69302009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Website' => 0,
    'Account' => 0,
    'ItemData' => 0,
    'ActivationCode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57506e7f3d1477_43797574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57506e7f3d1477_43797574')) {function content_57506e7f3d1477_43797574($_smarty_tpl) {?><table border="0" cellpadding="0" cellspacing="0" id="outerTable" style="font-size: 14px; font-weight: 400; text-align: left; background-color: #202835; color: #BFC1C5; -webkit-font-smoothing: antialiased;" width="720">
    <tbody>
    <tr>
        <td align="left" height="60" id="header" width="720">
            <img alt="<?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
 Logo" height="60" src="http://<?php echo $_smarty_tpl->tpl_vars['Website']->value;?>
/Templates/FreedomCore/images/logos/bnet-default.png" style="display: block; border: none; padding-left: 24px;" width="187"></td>
    </tr>

    <tr>
        <td style=
            "text-align: left; background-color: #242D3D; border-top-width: 1px; border-top-style: solid; border-top-color: #3E424E; color: #BFC1C5; padding: 0 30px 0 30px;">
            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="font-weight: 200; font-size: 28px; color: #FFFFFF; padding: 40px 0; margin: 0px 0px 0px 0px; display: block;">
                        <?php echo ucfirst($_smarty_tpl->tpl_vars['Account']->value['username']);?>
,<br /><?php echo $_smarty_tpl->getConfigVariable('Shop_Thanks_For_Purchase');?>

                    </td>
                </tr>
                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        <?php echo sprintf($_smarty_tpl->getConfigVariable('Shop_Email_Item_Purchased'),$_smarty_tpl->tpl_vars['ItemData']->value['item_name']);?>
<br />
                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Email_Activation_Code');?>
<br />
                        <span style="height: auto;display: inline-block; vertical-align: middle; height: 34px; padding: 6px 6px 10px 10px; margin-top: 3px; margin-bottom: 3px; font-size: 15px; line-height: 20px; border: 1px solid rgba(255,255,255,0.3); background-color: rgba(0,0,0,0.5); color: rgba(255,255,255,0.7); -moz-box-sizing: border-box; box-sizing: border-box;border-radius: 2px;">
                            <?php echo $_smarty_tpl->tpl_vars['ActivationCode']->value;?>

                        </span>
                        <br />
                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Email_CodeOnlyFor');?>
 <strong><span style="color: #BFC1C5;">WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
</span></strong>
                    </td>
                </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                            <span style="padding: 14px 0; display: inline-block;">
                                <a href="http://<?php echo $_smarty_tpl->tpl_vars['Website']->value;?>
/account/management/claim-code" style="font-weight: 400; padding: 6px 40px; font-size: 15px; background-color: #098CC8; color: #fff; border-radius: 2px; background-image: linear-gradient; border: 0; box-shadow: 0 1px 1px rgba; text-decoration: none; -webkit-font-smoothing: antialiased;" target="_blank">
                                    &nbsp; <?php echo $_smarty_tpl->getConfigVariable('Shop_Email_Use_Code');?>
 &nbsp;
                                </a>
                            </span>
                    </td>
                </tr>
                </tbody>
            </table>


            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Button_ButtonNotWorking');?>

                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['Website']->value;?>
/account/management/claim-code" style="color: #00AEFF; text-decoration: none;" target="_blank">
                            http://<?php echo $_smarty_tpl->tpl_vars['Website']->value;?>
/account/management/claim-code
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" class="" id=
            "" width="100%">
                <tbody>
                <tr>
                    <td style=
                        "padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        &nbsp;</td>
                </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" class="" id=
            "" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        <?php echo $_smarty_tpl->getConfigVariable('Account_Registration_WhyActivate');?>

                    </td>
                </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" class="" id=
            "" width="100%">
                <tbody>
                <tr>
                    <td style=
                        "padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        <?php echo $_smarty_tpl->getConfigVariable('Shop_Email_Thank_You_Footer');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

    <tr>
        <td style=
            "font-size: 12px; color: #757B90; border-top: 1px solid #3E424E; padding: 30px;">
            <table border="0" cellpadding="0" cellspacing="0" class="" id=""
                   width="100%">
                <tbody>
                <tr>
                    <table border="0" cellpadding="0" cellspacing=
                    "0" class="" id="" width="100%">
                        <tbody>
                        <tr>
                            <td style="font-size: 12px; color: #757B90; margin: 0px 0px 0px 0px; padding-bottom: 5px; color: #757B90; display: block; -webkit-font-smoothing: antialiased;">
                                &copy; 2015 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
, All Rights Reserved
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table><?php }} ?>
