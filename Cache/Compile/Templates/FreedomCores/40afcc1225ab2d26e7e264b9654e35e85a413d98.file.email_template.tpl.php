<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:34:19
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\email_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12974574f38bbabd421-59637795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40afcc1225ab2d26e7e264b9654e35e85a413d98' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\email_template.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12974574f38bbabd421-59637795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Website' => 0,
    'Account' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f38bbb07a30_19351242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f38bbb07a30_19351242')) {function content_574f38bbb07a30_19351242($_smarty_tpl) {?><table border="0" cellpadding="0" cellspacing="0" id="outerTable" style="font-size: 14px; font-weight: 400; text-align: left; background-color: #202835; color: #BFC1C5; -webkit-font-smoothing: antialiased;" width="720">
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
,<br /><?php echo $_smarty_tpl->getConfigVariable('Account_Registration_ThankYou');?>

                    </td>
                </tr>
                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        <?php echo $_smarty_tpl->getConfigVariable('Account_Registration_JustRegistered');?>

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
/account/activate?email=<?php echo $_smarty_tpl->tpl_vars['Account']->value['email'];?>
&username=<?php echo $_smarty_tpl->tpl_vars['Account']->value['username'];?>
&code=<?php echo $_smarty_tpl->tpl_vars['Account']->value['activation_code'];?>
"style="font-weight: 400; padding: 6px 40px; font-size: 15px; background-color: #098CC8; color: #fff; border-radius: 2px; background-image: linear-gradient; border: 0; box-shadow: 0 1px 1px rgba; text-decoration: none; -webkit-font-smoothing: antialiased;" target="_blank">
                                    &nbsp; <?php echo $_smarty_tpl->getConfigVariable('Account_Registration_ActivateAccount');?>
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
                        <?php echo $_smarty_tpl->getConfigVariable('Account_Registration_ButtonNotWorking');?>

                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['Website']->value;?>
/account/activate?email=<?php echo $_smarty_tpl->tpl_vars['Account']->value['email'];?>
&username=<?php echo $_smarty_tpl->tpl_vars['Account']->value['username'];?>
&code=<?php echo $_smarty_tpl->tpl_vars['Account']->value['activation_code'];?>
" style="color: #00AEFF; text-decoration: none;" target="_blank">
                            http://<?php echo $_smarty_tpl->tpl_vars['Website']->value;?>
/account/activate?email=<?php echo $_smarty_tpl->tpl_vars['Account']->value['email'];?>
&username=<?php echo $_smarty_tpl->tpl_vars['Account']->value['username'];?>
&code=<?php echo $_smarty_tpl->tpl_vars['Account']->value['activation_code'];?>

                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        &nbsp;</td>
                </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        <?php echo $_smarty_tpl->getConfigVariable('Account_Registration_WhyActivate');?>

                    </td>
                </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                    <td style="padding: 0 0 20px 0; margin: 0px 0px 0px 0px; color: #BFC1C5; display: inline-block; -webkit-font-smoothing: antialiased;">
                        <?php echo $_smarty_tpl->getConfigVariable('Account_Registration_HappyGame');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

    <tr>
        <td style="font-size: 12px; color: #757B90; border-top: 1px solid #3E424E; padding: 30px;">
            <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
                <tbody>
                <tr>
                        <table border="0" cellpadding="0" cellspacing="0" class="" id="" width="100%">
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
