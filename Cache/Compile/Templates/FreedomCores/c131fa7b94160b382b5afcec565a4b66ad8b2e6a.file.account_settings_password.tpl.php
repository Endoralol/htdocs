<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 19:21:56
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/account_settings_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121439726857505d24e375b6-06881304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c131fa7b94160b382b5afcec565a4b66ad8b2e6a' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/account_settings_password.tpl',
      1 => 1464860654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121439726857505d24e375b6-06881304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSRFToken' => 0,
    'User' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57505d24ec7d00_60540211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57505d24ec7d00_60540211')) {function content_57505d24ec7d00_60540211($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <span class="required-legend"><span class="form-required">*</span> <span class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Payment_Must_FillIn');?>
</span></span>
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Parameters');?>
</h2>
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Subheader');?>
</h3>
            </div>
            <div id="page-content" class="page-content">
                <div class="columns-2-1 settings-content">
                    <div class="column column-left">
                        <div class="password-entry">
                            <span class="clear"><!-- --></span>
                            <form method="post" action="/account/management/settings/modify-password" id="change-settings" novalidate="novalidate">
                                <input type="hidden" name="csrftoken" id="csrftoken" value="<?php echo $_smarty_tpl->tpl_vars['CSRFToken']->value;?>
">
                                <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="oldPassword">
                                            <span class="label-text">
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Old_Label');?>
:
                                            </span>
                                            <span class="input-required">*</span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="password" id="oldPassword" name="oldPassword" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Old_Placeholder');?>
" />
                                            <span class="inline-message " id="oldPassword-message"> </span>
                                        </span>
                                    </span>
                                </div>
                                <input type="hidden" id="Username" value="<?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>
">
                                <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="newPassword">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_New_Label');?>
:
                                            </span>
                                            <span class="input-required">*</span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="password" id="newPassword" name="newPassword" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_New_Placeholder');?>
" />
                                            <span class="inline-message " id="newPassword-message"> </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="input-row input-row-note" id="password-strength" style="display: none">
                                    <div class="input-note input-text-small border-5 glow-shadow">
                                        <div class="input-note-content">
                                            <div class="password-strength">
                                                <span class="password-result">
                                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Security_Level');?>
:
                                                    <strong id="password-result"></strong>
                                                </span>
                                                <span class="password-rating"><span class="rating rating-default" id="password-rating"></span></span>
                                            </div>
                                        </div>
                                        <div class="input-note-arrow"></div>
                                    </div>
                                </div>
                                <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="newPasswordVerify">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Verify_New_Placeholder');?>
:
                                            </span>
                                            <span class="input-required">*</span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="password" id="newPasswordVerify" name="newPasswordVerify" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Verify_New_Placeholder');?>
" />
                                            <span class="inline-message " id="newPasswordVerify-message"> </span>
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
                        <div class="password-requirements">
                            <ul class="password-level" id="password-level">
                                <li id="password-level-0">
                                    <span class="icon-16"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Rule_One');?>
</span>
                                </li>
                                <li id="password-level-1">
                                    <span class="icon-16"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Rule_Two');?>
</span>
                                </li>
                                <li id="password-level-2">
                                    <span class="icon-16"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Rule_Three');?>
</span>
                                </li>
                                <li id="password-level-3">
                                    <span class="icon-16"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Rule_Four');?>
</span>
                                </li>
                                <li id="password-level-4">
                                    <span class="icon-16"></span>
                                    <span class="icon-16-label"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Rule_Five');?>
</span>
                                </li>
                            </ul>
                            <p class="caption"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Password_Change_Rule_Six');?>
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

                    var settings = new ChangePassword('#change-settings', {
                        passwordFields: [
                            '#newPassword',
                            '#newPasswordVerify'
                        ],
                        emailAddress: '<?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
'
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
