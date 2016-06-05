<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-03 22:39:45
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/bugtracker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16718813565751d61ae81646-72929049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd680e84a7c9a7d9b90bf84e2a068b9e5e6cfdf0e' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/bugtracker.tpl',
      1 => 1464982785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16718813565751d61ae81646-72929049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5751d61af3d662_22027597',
  'variables' => 
  array (
    'AppName' => 0,
    'BugTracker' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751d61af3d662_22027597')) {function content_5751d61af3d662_22027597($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/bugtracker/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">Bug tracker</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="topics-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="forum-actions forum-actions-top">
                    <?php if (!$_SESSION['loggedin']) {?>
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="/account/login">
                            <span class="button-left">
                                <span class="button-right">
                                    CREATE ISSUE
                                </span>
                            </span>
                        </a>
                    </div>
                    <?php } else { ?>
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="add">
                            <span class="button-left">
                                <span class="button-right">
                                    CREATE ISSUE
                                </span>
                            </span>
                        </a>
                    </div>
                    <?php }?>
                    <div class="paging-wrapper">

                    </div>
                    <span class="clear"></span>
                </div>
                <?php if (empty($_smarty_tpl->tpl_vars['BugTracker']->value)) {?>
                    <center>Bug tracker is empty</center>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ('blocks/bugtracker_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
