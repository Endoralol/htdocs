<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 22:32:43
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/freedomtag_verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:559093839575089db27bd10-86383734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3689c06fc10040403fc69d4e3bcb4fe020a88a1d' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/freedomtag_verify.tpl',
      1 => 1464860655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '559093839575089db27bd10-86383734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'User' => 0,
    'FreedomTag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575089db4d61e2_28635029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575089db4d61e2_28635029')) {function content_575089db4d61e2_28635029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div id="page-content" class="page-content">
                <h3 class="headline subpage"><?php echo sprintf($_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Created_Greetings'),$_smarty_tpl->tpl_vars['User']->value['username']);?>
</h3>
                <div  class="full-freedomtag">
                    <span class="freedomtag-name"><?php echo $_smarty_tpl->tpl_vars['FreedomTag']->value['tag'];?>
</span><span class="freedomtag-number">#<?php echo $_smarty_tpl->tpl_vars['FreedomTag']->value['id'];?>
</span>
                </div>
                <div  class="black-line-note">
                    <div class="black-line-note-arrow"></div>
                    <div class="black-line-note-content border-3">
                        <p class="desc"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Code_Desc');?>
</p>
                    </div>
                </div>
                <span class="clear"></span>
                <a class="ui-button button1" href="/account/management/">
                    <span class="button-left">
                        <span class="button-right">
                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_FreedomTag_Back_To_Management');?>

                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="layout-bottom-divider"></div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
