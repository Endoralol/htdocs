<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:11:19
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/error_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133360490757521ca73ff786-63572292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '160f7ae6d0e1974f05279a5138b73be2470d01b8' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/error_page.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133360490757521ca73ff786-63572292',
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
  'unifunc' => 'content_57521ca746f546_98533685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57521ca746f546_98533685')) {function content_57521ca746f546_98533685($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
