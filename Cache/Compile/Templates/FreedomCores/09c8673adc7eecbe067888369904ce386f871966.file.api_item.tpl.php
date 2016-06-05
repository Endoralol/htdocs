<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 18:21:06
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/developer/api_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114849981857471462134fa6-03191746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09c8673adc7eecbe067888369904ce386f871966' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/developer/api_item.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114849981857471462134fa6-03191746',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57471462146f99_75030649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57471462146f99_75030649')) {function content_57471462146f99_75030649($_smarty_tpl) {?><li class="endpoint">
    <h3 class="header-3 title-api-key">
        Item API
    </h3>
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_item_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <br />
    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_item_set.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</li><?php }} ?>
