<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:20:58
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\forum\create_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3666574f43aa072865-80085151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef35186a5fca3baafb0f75e66fe49eb9139bace' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\forum\\create_topic.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3666574f43aa072865-80085151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Forum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f43aa0b0ad6_55139418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f43aa0b0ad6_55139418')) {function content_574f43aa0b0ad6_55139418($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="/forum/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Forum_Page_Title');?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/#forum<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_type'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_type_name'];?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_id'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_name'];?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_id'];?>
/topic" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Forum_Create_New_Topic');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="forum-wrapper">
                <?php echo $_smarty_tpl->getSubTemplate ('forum/new_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <?php echo '<script'; ?>
  type="text/javascript">
                //<![CDATA[
                $(function(){
                    ForumTopic.initialize("#post-list");
                });
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
