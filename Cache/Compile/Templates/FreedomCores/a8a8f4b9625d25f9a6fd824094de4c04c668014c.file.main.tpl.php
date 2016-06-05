<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 11:16:08
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12486927045746b0c88358b2-21752656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a8f4b9625d25f9a6fd824094de4c04c668014c' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/main.tpl',
      1 => 1446309330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12486927045746b0c88358b2-21752656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'i' => 0,
    'Slideshow' => 0,
    'Debug' => 0,
    'TopNews' => 0,
    'Article' => 0,
    'News' => 0,
    'Language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746b0c89487d7_69863566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746b0c89487d7_69863566')) {function content_5746b0c89487d7_69863566($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/var/www/u0198439/data/www/pt-wow.ru/Core/Libraries/Smarty/plugins/modifier.relative_date.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div class="content-top body-top">
        <div  class="content-trail">
            <ol class="ui-breadcrumb">
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">

             <div id="slideshow" class="ui-slideshow">
                <div class="slideshow">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['Slideshow']->value)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['Slideshow']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        <div class="slide" id="slide-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="background-image: url('/Uploads/Core/Slideshow/<?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['image'];?>
'); <?php if ($_smarty_tpl->tpl_vars['i']->value!=0) {?> display: none;<?php }?>"></div>
                    <?php }} ?>
                                </div>
                <div class="paging">
                <a href="javascript:;" class="prev" onclick="Slideshow.prev();"></a>
                <a href="javascript:;" class="next" onclick="Slideshow.next();"></a>
            </div>

        <div class="caption">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['Slideshow']->value)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['Slideshow']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        <h3><a href="javascript:;" class="link"><?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
</a></h3>
                    <?php }} ?>                                                                 
        </div>
                <div class="preview"></div>
                <div class="mask"></div>
            </div>
            
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    Slideshow.initialize('#slideshow', [
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['Slideshow']->value)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['Slideshow']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        {
                            image: "/Uploads/Core/Slideshow/<?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['image'];?>
",
                            desc: "<?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['description'];?>
",
                            title: "<?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
",
                            url: "<?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
",
                            id: "<?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
",
                            duration: <?php echo $_smarty_tpl->tpl_vars['Slideshow']->value[$_smarty_tpl->tpl_vars['i']->value]['duration'];?>

                            },
                        <?php }} ?>
                    ]);

                });
                //]]>
            <?php echo '</script'; ?>
>

            <div class="right-sidebar" >
                <div class="sidebar" id="sidebar">
                    <div class="sidebar-top">
                        <div class="sidebar-bot">
                            <div class="sidebar-loading" id="sidebar-loading">
                                <?php echo $_smarty_tpl->getConfigVariable('Content_loading');?>
…
                            </div>
                            <div id="dynamic-sidebar-target"></div>
                        </div>
                    </div>
                </div>
                <?php echo '<script'; ?>
 type="text/javascript">
                    //<![CDATA[
                    $(function() {
                        Sidebar.sidebar([
                            { "type": "client", "query": "" },
                            { "type": "realm-status", "query": "" },
                            { "type": "events", "query": "" },
                            { "type": "under-dev", "query": "" },
                            { "type": "blizzard-posts", "query": "" },
                            <?php if ($_smarty_tpl->tpl_vars['Debug']->value) {?>
                            { "type": "debugger", "query": "" },
                            <?php }?>
                        ]);
                    });
                    //]]>
                <?php echo '</script'; ?>
>
            </div>
            <div class="left-content" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
                <div class="left-container-inner">
                    <div class="featured-news-container">
                        <ul class="featured-news">
                            <?php  $_smarty_tpl->tpl_vars['Article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TopNews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Article']->key => $_smarty_tpl->tpl_vars['Article']->value) {
$_smarty_tpl->tpl_vars['Article']->_loop = true;
?>
                                <li>
                                    <div class="article-wrapper">
                                        <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Article']->value['slugged_url'];?>
" class="featured-news-link" data-category="wow" data-action="Blog_Click-Throughs" data-label="home ">
                                            <div class="article-image" style="background-image:url(/Uploads/<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_miniature'];?>
)">
                                                <div class="article-image-frame"></div>
                                            </div>
                                            <div class="article-content">
                                                <span class="article-title" title="<?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</span>
                                                <span class="article-summary"><?php echo $_smarty_tpl->tpl_vars['Article']->value['short_description'];?>
</span>
                                            </div>
                                        </a>
                                        <div class="article-meta">
                                            <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
#comments" class="comments-link"><?php echo $_smarty_tpl->tpl_vars['Article']->value['comments_count'];?>
</a>
                                            <span class="publish-date" title="<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_date'];?>
"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Article']->value['post_date']);?>
</span>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div id="blog-articles" class="blog-articles" itemscope="itemscope" itemtype="http://schema.org/Blog">
                        <?php  $_smarty_tpl->tpl_vars['Article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['News']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Article']->key => $_smarty_tpl->tpl_vars['Article']->value) {
$_smarty_tpl->tpl_vars['Article']->_loop = true;
?>
                            <div class="article-wrapper" >
                                <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Article']->value['slugged_url'];?>
">
                                    <div class="article-image" style="background-image:url(/Uploads/<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_miniature'];?>
)">
                                        <div class="article-image-frame"></div>
                                    </div>

                                    <div class="article-content">
                                        <h2 class="header-2"><span class="article-title"><?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</span></h2><span class="clear"><!-- --></span>

                                        <div class="article-summary">
                                            <?php echo $_smarty_tpl->tpl_vars['Article']->value['short_description'];?>

                                        </div><span class="clear"><!-- --></span>
                                        <meta content="<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_date'];?>
">
                                        <meta content="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
">
                                        <meta content="UserComments:<?php echo $_smarty_tpl->tpl_vars['Article']->value['comments_count'];?>
">
                                        <meta content="/Uploads/<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_miniature'];?>
">
                                    </div></a>

                                <div class="article-meta">
                                    <span class="publish-date" title="<?php echo $_smarty_tpl->tpl_vars['Article']->value['post_date'];?>
"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Article']->value['post_date']);?>
</span>
                                    <a class="comments-link" href="/blog/<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
#comments"><?php echo $_smarty_tpl->tpl_vars['Article']->value['comments_count'];?>
</a>
                                </div><span class="clear"><!-- --></span>
                            </div>

                        <?php } ?>
                    </div>
                    <span class="clear"></span>
                </div>
            </div>
        </div>
    </div>
 </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
