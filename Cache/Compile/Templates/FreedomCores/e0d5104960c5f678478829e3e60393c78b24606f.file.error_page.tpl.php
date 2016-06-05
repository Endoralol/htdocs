<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:22:38
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\pages\error_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29176574f35fe4e4306-17865439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d5104960c5f678478829e3e60393c78b24606f' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\pages\\error_page.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29176574f35fe4e4306-17865439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f35fe524447_48453382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f35fe524447_48453382')) {function content_574f35fe524447_48453382($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol class="ui-breadcrumb">
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" itemprop="url" class="">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div id="server-error">
                <h2 class="http"><?php echo $_smarty_tpl->tpl_vars['Error']->value['code'];?>
</h2>
                <h3><?php echo $_smarty_tpl->tpl_vars['Error']->value['error_type'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['Error']->value['error_description'];?>
</p>


                <!-- http : <?php echo $_smarty_tpl->tpl_vars['Error']->value['code'];?>
 -->
            </div>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
