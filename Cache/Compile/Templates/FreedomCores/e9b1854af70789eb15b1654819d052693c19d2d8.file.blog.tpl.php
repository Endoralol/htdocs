<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:27:47
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1168558915575018337ed895-35534435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9b1854af70789eb15b1654819d052693c19d2d8' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blog.tpl',
      1 => 1464860653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1168558915575018337ed895-35534435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Article' => 0,
    'Articles' => 0,
    'Item' => 0,
    'Language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750183385a2c3_43953198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750183385a2c3_43953198')) {function content_5750183385a2c3_43953198($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.relative_date.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol  class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">World of Warcraft</span>
                    </a>
                </li>
                <li class="last" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="right-sidebar" >
                <?php echo $_smarty_tpl->getSubTemplate ('sidebar/client.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class="sidebar" id="sidebar">
                    <div class="sidebar-top">
                        <div class="sidebar-bot">
                            <div id="dynamic-sidebar-target">
                                <div class="sidebar-module " id="sidebar-recent-articles">
                                    <div class="sidebar-title">
                                        <h3 class="header-3 title-recent-articles">
                                            <?php echo $_smarty_tpl->getConfigVariable('Articles_Latest');?>

                                        </h3>
                                    </div>
                                    <div class="sidebar-content">
                                        <ul id="recent-articles" class="articles-list-plain">
                                            <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
                                                <li>
                                                    <a class="article-block on-view" href="/blog/<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
">
                                                        <span class="image" style="background-image: url('/Uploads/<?php echo $_smarty_tpl->tpl_vars['Item']->value['post_miniature'];?>
');"></span>
                                                        <span class="title"><?php echo $_smarty_tpl->tpl_vars['Item']->value['title'];?>
</span>
                                                        <span class="date"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Item']->value['post_date']);?>
</span>
                                                        <span class="clear"><!-- --></span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-content">
                <div id="blog" class="article-wrapper" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                    <h2 class="header-2">
                        <span itemprop="headline"><?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</span>
                    </h2>
                    <div class="article-meta">
                        <a class="article-author" href="/search?a=<?php echo $_smarty_tpl->tpl_vars['Article']->value['posted_by'];?>
&amp;f=article">
                            <span class="author-icon"></span>
                            <span itemprop="author"><?php echo $_smarty_tpl->tpl_vars['Article']->value['posted_by'];?>
</span>
                        </a>
                        <span class="publish-date" title="<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_date'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['Article']->value['post_date'];?>

                        </span>
                        <a href="#comments" class="comments-link"><?php echo $_smarty_tpl->tpl_vars['Article']->value['comments_count'];?>
</a>
                        <div class="article-content">
                            <div class="header-image">
                                <img itemprop="image" alt="<?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
" src="/Uploads/<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_miniature'];?>
" />
                            </div>
                            <div class="detail" itemprop="articleBody">
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['Article']->value['full_description'];?>

                                </p>
                            </div>
                        </div>
                        <div class="keyword-list"></div>
                    </div>
                </div>
                <div id="comments" class="bnet-comments ">
                    <h2 class="subheader-2" ><?php echo $_smarty_tpl->getConfigVariable('Comments_Loading');?>
…</h2>
                    <h2 class="hide" ><?php echo $_smarty_tpl->getConfigVariable('Comments_Error_Loading');?>
.</h2>
                    <div class="comments-loading"></div>
                    <?php echo '<script'; ?>
 type="text/javascript">
                        //<![CDATA[
                        $(function() {
                            Comments.initialize('<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.blog.<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['Article']->value['comments_key'];?>
', '0');
                        });
                        //]]>
                    <?php echo '</script'; ?>
>
                </div>
            </div>
            <span class="clear"><!-- --></span>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    Blog.init();
                });
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
 </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
