<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 18:45:21
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166052651574f0311da2481-02042011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3fcb63439efa35f5d2c4f8e29f2abf5b90d8823' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/search.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166052651574f0311da2481-02042011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f0311e3ccb8_79293792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f0311e3ccb8_79293792')) {function content_574f0311e3ccb8_79293792($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/search/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Search');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="search">
                <div class="search-right">
                    <div class="search-header">
                        <form action="/search" method="get" class="search-form">
                            <div>
                                <input id="search-page-field" type="text" name="q" maxlength="200" tabindex="2" value="" />



                                <button class="ui-button button1" type="submit"><span class="button-left"><span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Search');?>
</span></span></button>
                            </div>
                        </form>
                    </div>

                    <div class="no-results">
                        <h2 class="subheader-2"><?php echo $_smarty_tpl->getConfigVariable('Search_New');?>
</h2>
                        <h3 class="header-3"><?php echo $_smarty_tpl->getConfigVariable('Search_Like');?>
</h3>

                        <ul>
                            <li><?php echo $_smarty_tpl->getConfigVariable('Search_Like_First');?>
</li>
                            <li><?php echo $_smarty_tpl->getConfigVariable('Search_Like_Second');?>
</li>
                            <li><?php echo $_smarty_tpl->getConfigVariable('Search_Like_Third');?>
</li>
                        </ul>
                    </div>

                </div>

                <div class="search-left">
                    <div class="search-header">
                        <h2 class="header-2"><?php echo $_smarty_tpl->getConfigVariable('Search');?>
</h2>
                    </div>

                </div>

                <span class="clear"><!-- --></span>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
