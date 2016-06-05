<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 21:03:35
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/admin/articles_additem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147485500575074f7686905-25321308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf3c4fce71d270605e68f5b292fe8722f2674eb' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/admin/articles_additem.tpl',
      1 => 1464860656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147485500575074f7686905-25321308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575074f771c0e3_64364939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575074f771c0e3_64364939')) {function content_575074f771c0e3_64364939($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a> >
                    <a href="/admin/dashboard/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Title');?>
</span>
                    </a> >
                    <a href="/admin/articles/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles');?>
</span>
                    </a> >
                    <a href="/admin/articles/add-articles" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Add');?>
</span>
                    </a>
                </h2>
                <br />
                <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Add');?>
</h3>
            </div>
            <div id="page-content" class="page-content">
            <form method="post" action="/admin/articles/add-articles/process" id="change-settings" novalidate="novalidate">
                <div class="columns-2-1 settings-content">
                    <div class="column column-right">
                            <div class="item-information">
                                <div class="item-detail">
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="text" name="title" value="" style="width: 70%;" class="small border-5 glow-shadow-2"  maxlength="100" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Add_Info3');?>
" />
                                        </span>
                                        <br /><br /><br />
                                        <span class="input-textarea input-textarea-extra-large">
                                        <textarea name="description" id="description" class="extra-large border-5 glow-shadow-2" cols="78" rows="8" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Add_Info1');?>
" maxlength="2000"></textarea>
                                        </span>
                                        <br /><br /><br />
                                        <span class="input-textarea input-textarea-extra-large">
                                        <textarea name="fullnews" id="fullnews" class="extra-large border-5 glow-shadow-2" cols="78" rows="8" tabindex="1" required="required" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Add_Info2');?>
" maxlength="2000"></textarea>
                                        </span>
                                        <br /><br /><br />
                                        <input type="file" name="files" tabindex="2" />
                                    </span>
                                    <span class="clear"><!-- --></span>
                                </div>
                            </div>
                            <br /><br /><br />
                            <div class="submit-row" id="additem-row">
                                <div class="input-left"></div>
                                <div class="input-right">
                                    <center>
                                        <button class="ui-button button1" type="submit" id="password-submit" tabindex="1">
                                                <span class="button-left">
                                                    <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_AddItem');?>
</span>
                                                </span>
                                        </button>
                                    </center>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
