<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 19:23:32
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/freedomtag_create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1183615536574f0c045678b1-83004992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd62905146b3bfa037a575a3e9ab053853a1bd19' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/freedomtag_create.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1183615536574f0c045678b1-83004992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f0c0463f2e0_20343037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f0c0463f2e0_20343037')) {function content_574f0c0463f2e0_20343037($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div class="alert caution closeable border-4 glow-shadow">
                <div class="alert-inner">
                    <div class="alert-message">
                        <p class="title"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Warning_Title');?>
</strong></p>
                        <p><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Warning_SubTitle');?>
</p>
                    </div>
                </div>
                <a class="alert-close" href="#" onclick="$(this).parent().fadeOut(250, function() { $(this).css({opacity:0}).animate({height: 0}, 100, function() { $(this).remove(); }); }); return false;">
                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Warning_Close');?>

                </a>
                <span class="clear"><!-- --></span>
            </div>
            <div id="page-header">
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Tooltip');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</h3>
            </div>
            <div id="page-content" class="page-content">
                <form method="POST" action="/account/management/freedomtag-verify/" id="freedomcoreIdForm" novalidate="novalidate">
                    <div class="freedomtag-field">
                        <span class="randomize-freedomTag">
                            <span class="input-text input-text-medium">
                            <input type="text" name="freedomTag" value="" id="freedomTag" class="medium border-5 glow-shadow-2" autocomplete="off" maxlength="12" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Enter_Name');?>
" />
                                <span class="inline-message " id="freedomTag-message"> </span>
                            </span>
                            <a class="dice" href="javascript:void(0)" id="generate-random-freedomtag"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Generate_Random');?>
</a>
                        </span>
                        <input type="hidden" id="skip" name="skip" value="false" />
                        <input type="hidden" id="ret" name="ret" value="" />
                        <input type="hidden" id="type" name="type" value="FREE" />
                        <div id="freedomTag-Alert" class="alert error border-4">
                            <div class="alert-inner">
                                <div class="alert-message">
                                    <p class="error-desc" id="latinbasic"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_Length');?>
</strong></p>
                                    <p class="error-desc" id="latin"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_Length');?>
</strong></p>
                                    <p class="error-desc" id="cyrillic"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_Length');?>
</strong></p>
                                    <p class="error-desc" id="korean"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_Length');?>
</strong></p>
                                    <p class="error-desc" id="chinese"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_Length');?>
</strong></p>
                                    <p class="error-desc" id="result2"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_NumbFirst');?>
</strong></p>
                                    <p class="error-desc" id="result3"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_SpecSymb');?>
</strong></p>
                                    <p class="error-desc" id="result4"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_SND');?>
</strong></p>
                                    <p class="error-desc" id="result5"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_Restricted');?>
</strong></p>
                                    <p class="error-desc" id="result6"><strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Error_Same');?>
</strong></p>
                                </div>
                            </div>
                            <span class="clear"><!-- --></span>
                        </div>
                    </div>
                    <div class="submit-field">
                        <div class="submit-field">
                            <a class="ui-button button1 disabled" href="#" id="button-submit" tabindex="2">
                                <span class="button-left">
                                    <span class="button-right">
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Create_FreedomTag');?>

                                    </span>
                                </span>
                            </a>
                            <div class="submit-cancel">
                                <a id="skipFtag" href="/account/management" tabindex="1">
                                    <?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Another_Time');?>

                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <span class="clear"></span>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    var inputs = new Inputs('#freedomcoreIdForm');
                    FreedomTagValidator.accountRegion = "EU";
                    FreedomTagValidator.characterLength = {
                        "latinbasic" : {
                            "min" : 3,
                            "max" : 12
                        },
                        "latin" : {
                            "min" : 3,
                            "max" : 12
                        },
                        "cyrillic" : {
                            "min" : 3,
                            "max" : 12
                        },
                        "korean" : {
                            "min" : 2,
                            "max" : 8
                        },
                        "chinese" : {
                            "min" : 2,
                            "max" : 8
                        }
                    };

                });

                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<div id="layout-bottom-divider"></div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
