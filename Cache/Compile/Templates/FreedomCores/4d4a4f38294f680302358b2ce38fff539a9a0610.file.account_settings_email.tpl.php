<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 19:21:46
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/account_settings_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209705031357505d1ab20125-47015808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d4a4f38294f680302358b2ce38fff539a9a0610' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/account_settings_email.tpl',
      1 => 1464860654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209705031357505d1ab20125-47015808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'User' => 0,
    'CSRFToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57505d1abb2551_08603696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57505d1abb2551_08603696')) {function content_57505d1abb2551_08603696($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <span class="required-legend"><span class="form-required">*</span> <span class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Must_FillIn');?>
</span></span>
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Parameters');?>
</h2>
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_Subheader');?>
</h3>
            </div>
            <div id="page-content" class="page-content">
                <div class="columns-2-1 settings-content">
                    <div class="column column-left">
                        <div class="email-entry">
                            <span class="clear"></span>
                            <form method="post" action="/account/management/settings/modify-email" id="change-settings" novalidate="novalidate">
                                <input type="hidden" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>
">
                                <input type="hidden" name="csrftoken" id="csrftoken" value="<?php echo $_smarty_tpl->tpl_vars['CSRFToken']->value;?>
">
                                <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="newEmail">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_New_Email_Label');?>
:
                                            </span>
                                            <span class="input-required">*</span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="email" name="newEmail" value="" id="newEmail" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="319" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_New_Email_Placeholder');?>
" />
                                            <span class="inline-message " id="newEmail-message"> </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="newEmailVerify">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_Confirm_New_Email_Label');?>
:
                                            </span>
                                            <span class="input-required">*</span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="email" name="newEmailVerify" value="" id="newEmailVerify" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="319" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_Confirm_New_Email_Placeholder');?>
" />
                                            <span class="inline-message " id="newEmailVerify-message"> </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="password">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_Password_Label');?>
:
                                            </span>
                                            <span class="input-required">*</span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="password" id="password" name="password" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_Password_Placeholder');?>
" />
                                            <span class="inline-message " id="password-message"> </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="submit-row" id="submit-row">
                                    <div class="input-left"></div>
                                    <div class="input-right">
                                        <button class="ui-button button1" type="submit" id="password-submit" tabindex="1">
                                            <span class="button-left">
                                                <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Next');?>
</span>
                                            </span>
                                        </button>
                                        <a class="ui-cancel " href="/account/management/" tabindex="1">
                                            <span>
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Cancel');?>

                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <?php echo '<script'; ?>
 type="text/javascript">
                                //<![CDATA[
                                var FormMsg = {
                                    'headerSingular': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_headerSingular');?>
',
                                    'headerMultiple': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_headerSingular');?>
',
                                    'fieldMissing': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_fieldMissing');?>
',
                                    'fieldsMissing': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_fieldsMissing');?>
',
                                    'emailInfo': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_emailInfo');?>
',
                                    'emailMissing': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_emailMissing');?>
',
                                    'emailInvalid': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_emailInvalid');?>
',
                                    'emailMismatch': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_emailMismatch');?>
',
                                    'passwordInvalid': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordInvalid');?>
',
                                    'passwordMismatch': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordMismatch');?>
',
                                    'tosDisagree': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_tosDisagree');?>
',
                                    'taxInvoiceSelect': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_taxInvoiceSelect');?>
',
                                    'passwordError1': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordError1');?>
',
                                    'passwordError2': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordError2');?>
',
                                    'passwordStrength0': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordStrength0');?>
',
                                    'passwordStrength1': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordStrength1');?>
',
                                    'passwordStrength2': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordStrength2');?>
',
                                    'passwordStrength3': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_passwordStrength3');?>
',
                                    'oldpasswordError': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_oldpasswordError');?>
'
                                };
                                //]]>
                            <?php echo '</script'; ?>
>
                        </div>
                    </div>
                    <div class="column column-right">
                        <div class="email-information">
                            <p class="caption"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_Hint_One');?>
</p>
                            <p><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Email_Change_Hint_Two');?>
</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    var inputs = new Inputs('#change-settings');
                    var settings = new ChangeEmail('#change-settings', {
                        emailFields: [
                            '#newEmail',
                            '#newEmailVerify'
                        ],
                        domains: [
                        ]
                    });
                });
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
