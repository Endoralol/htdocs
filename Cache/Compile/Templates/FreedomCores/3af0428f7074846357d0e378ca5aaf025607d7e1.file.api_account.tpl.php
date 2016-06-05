<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 13:38:00
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/developer/api_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108465820057500c88c60776-41375170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af0428f7074846357d0e378ca5aaf025607d7e1' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/developer/api_account.tpl',
      1 => 1464860660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108465820057500c88c60776-41375170',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57500c88c6b4d8_87569837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57500c88c6b4d8_87569837')) {function content_57500c88c6b4d8_87569837($_smarty_tpl) {?><li class="endpoint">
    <h3 class="header-3 title-api-key">
        Account API
    </h3>
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_account_authorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <br />
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_account_deauthorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <br />
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_account_android.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <br />
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_account_characters.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</li><?php }} ?>
