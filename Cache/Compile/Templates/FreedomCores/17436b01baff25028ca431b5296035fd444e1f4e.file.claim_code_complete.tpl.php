<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-28 23:02:14
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/claim_code_complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16258207215749f946366985-64235853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17436b01baff25028ca431b5296035fd444e1f4e' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/claim_code_complete.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16258207215749f946366985-64235853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorCode' => 0,
    'Template' => 0,
    'ItemData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5749f9464377b6_62034811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5749f9464377b6_62034811')) {function content_5749f9464377b6_62034811($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

                                <?php  } else { if (!isset($_smarty_tpl->tpl_vars['ErrorCode'])) $_smarty_tpl->tpl_vars['ErrorCode'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['ErrorCode']->value = 15010) {?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_CSRF');?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Error_NotExists');?>

                                <?php }}?>
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
                        <center><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Claim_Code_Complete');?>
</center>
                    </p>
                </div>
                <div class="section-box border-5 code-claim">
                    <div class="product-image thumbnail">
                        <center>
                            <img style="border-radius: 15px;" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/shop/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['category'];?>
/<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_shop_icon'];?>
_home.jpg" alt="World of Warcraft® In-Game: <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
" title="" />
                            <br />
                            <a href="/account/management" class="ui-button button1"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Back_To_Account');?>
</a>
                        </center>
                    </div>
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
