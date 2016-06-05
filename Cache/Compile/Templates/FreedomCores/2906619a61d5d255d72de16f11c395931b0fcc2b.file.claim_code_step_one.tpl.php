<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 23:41:15
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/claim_code_step_one.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107206591457475f6bd55524-17847752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2906619a61d5d255d72de16f11c395931b0fcc2b' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/claim_code_step_one.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107206591457475f6bd55524-17847752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorCode' => 0,
    'CSRFToken' => 0,
    'QueryData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57475f6bda5d21_34027448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57475f6bda5d21_34027448')) {function content_57475f6bda5d21_34027448($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <?php if (isset($_smarty_tpl->tpl_vars['ErrorCode']->value)) {?>
                <div class="alert error closeable border-4 glow-shadow">
                    <div class="alert-inner">
                        <div class="alert-message">
                            <p class="title">
                                <strong>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_Happened');?>

                                </strong>
                            </p>
                            <p>
                                <?php if ($_smarty_tpl->tpl_vars['ErrorCode']->value==15011) {?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_Activated');?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['ErrorCode']->value==15010) {?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_CSRF');?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['ErrorCode']->value==15015) {?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_GSOFF');?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_NotExists');?>

                                <?php }?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }?>
            <div class="add-game">
                <div id="page-header">
                    <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_CS');?>
</h2>
                    <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code');?>
</h3>
                </div>
                <div class="introduction">
                    <p>
                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Desc');?>

                    </p>
                </div>
                <div class="section-box border-5 code-claim">
                    <form method="post" action="/account/management/claim-code-status" id="add-game" onsubmit="return checkEntry(this);">
                        <input type="hidden" id="csrftoken" name="csrftoken" value="<?php echo $_smarty_tpl->tpl_vars['CSRFToken']->value;?>
" />
                        <input type="hidden" id="accountName" name="accountName" value="<?php echo $_smarty_tpl->tpl_vars['QueryData']->value['account'];?>
" />
                        <input type="hidden" id="character" name="character" value="<?php echo $_smarty_tpl->tpl_vars['QueryData']->value['character'];?>
" />
                        <p class="caption"><label for="key"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Enter_Code');?>
</label></p>
                        <p class="simple-input required">
                            <input type="text" id="key" name="key" value="" class="input border-5 glow-shadow-2 inline-input" maxlength="320" tabindex="1" />
                        </p>

                        <fieldset class="ui-controls ">
                            <button class="ui-button button1" type="submit" id="add-game-submit"><span class="button-left"><span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Use_Code');?>
</span></span></button>
                        </fieldset>
                    </form>
                </div>
                <?php echo '<script'; ?>
 type="text/javascript">
                    //<![CDATA[
                    function checkEntry(form) {
                        if (!form.key.value) {
                            $('#add-game p.caption, #key').addClass('form-error');
                            $('#content').prepend(makeErrorBox(['<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Fill_All_Fields');?>
']));
                            UI.enableButton($('#add-game-submit'));
                            return false;
                        }
                        return true;
                    }

                    function makeErrorBox(errorMsgs) {
                        $('#content .alert').remove();
                        var errorCount = errorMsgs.length;
                        var errorHtml = ''
                                + '<div class="alert error closeable border-4 glow-shadow">'
                                + '<div class="alert-inner">'
                                + '<div class="alert-message">'
                                + '<p class="title"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_Happened');?>
</strong></p>';
                        if (errorCount>1) {
                            errorHtml += '<ul>';
                            for (var i=0;i<errorCount;i++) {
                                errorHtml += '<li>' + errorMsgs[i] + '</li>';
                            }
                            errorHtml += '</ul>';
                        } else {
                            errorHtml += '<p>' +errorMsgs[0]+ '</p>';
                        }
                        errorHtml += ''
                        + '</div>'
                        + '</div>'
                        + '</div>';
                        return errorHtml;
                    }
                    //]]>
                <?php echo '</script'; ?>
>

            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
