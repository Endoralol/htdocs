<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 13:38:00
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/developer/api_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95413943857500c88d018b6-63264241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e272994816105d3e10018cd117920c13c9944a9' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/developer/api_item.tpl',
      1 => 1464860660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95413943857500c88d018b6-63264241',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57500c88d08d90_30810528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57500c88d08d90_30810528')) {function content_57500c88d08d90_30810528($_smarty_tpl) {?><li class="endpoint">
    <h3 class="header-3 title-api-key">
        Item API
    </h3>
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_item_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <br />
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_item_set.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</li><?php }} ?>
