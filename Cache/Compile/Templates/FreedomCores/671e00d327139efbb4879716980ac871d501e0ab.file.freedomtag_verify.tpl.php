<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 19:23:41
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/freedomtag_verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:590684208574f0c0d640218-63130450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671e00d327139efbb4879716980ac871d501e0ab' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/freedomtag_verify.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '590684208574f0c0d640218-63130450',
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
  'unifunc' => 'content_574f0c0d6f1486_67327140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f0c0d6f1486_67327140')) {function content_574f0c0d6f1486_67327140($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
