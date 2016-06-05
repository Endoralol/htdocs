<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-03 14:22:36
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/forums_edit_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145881782357516730871b07-65327615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84fe6ee040f94087b08772204f29f51b514f755a' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/forums_edit_topic.tpl',
      1 => 1464952952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145881782357516730871b07-65327615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57516730872bd5_49733292',
  'variables' => 
  array (
    'AppName' => 0,
    'TopicData' => 0,
    'Characters' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57516730872bd5_49733292')) {function content_57516730872bd5_49733292($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="/forum/#forum<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['type']['id'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['TopicData']->value['type']['name'];?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['category']['id'];?>
/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['TopicData']->value['category']['name'];?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['name'];?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="forum-wrapper" data-forum-id="<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['category']['id'];?>
">
                <?php if (!isset($_SESSION['loggedin'])||!$_SESSION['loggedin']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ('forum/comment_not_logged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['Characters']->value==0) {?>
                 <div id="new-post" class="topic-form ajax-update ">
						<div class="form-left-col">
							<div class="form-title">


	<h3 class="header-3" ><?php echo $_smarty_tpl->getConfigVariable('Forum_Reply');?>
</h3>

							</div>


						</div>

						<div class="topic-form-wrapper">
							<div class="forum-permission-error">
								<?php echo $_smarty_tpl->getConfigVariable('Forum_Non_Characters');?>


							</div>

						</div>

					</div>
                <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['TopicData']->value['topic']['closed']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ('forum/comment_topic_closed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ('forum/comment_edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
                <?php }?>
				<?php }?>
                <span class="clear"></span>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[

                $(function(){
                    ReportPost.initialize("#post-list", "forums");
                    ForumTopic.initialize("#post-list", <?php echo $_smarty_tpl->tpl_vars['TopicData']->value['category']['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
, 0,
                            <?php echo count($_smarty_tpl->tpl_vars['TopicData']->value['replies']);?>
);
                });
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
