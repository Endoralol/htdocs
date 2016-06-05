<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:31:53
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\pages\forums_view_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1885574f43d3243fe8-18808134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce848089a42892c3e3772b97dda15094ee063d5' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\pages\\forums_view_topic.tpl',
      1 => 1464813111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1885574f43d3243fe8-18808134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f43d32e4f04_60344464',
  'variables' => 
  array (
    'AppName' => 0,
    'TopicData' => 0,
    'Characters' => 0,
    'Reply' => 0,
    'i' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f43d32e4f04_60344464')) {function content_574f43d32e4f04_60344464($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\OpenServer\\domains\\wow.loc\\Core\\Libraries\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                <div class="topic-header-wrapper">
                    <div class="topic-header">
                        <h2 class="subheader-2">
                            <span class="topic-title"><?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['name'];?>
</span>
                        </h2>
                        <?php echo '<script'; ?>
 type="text/javascript">
                            var TopicID = '<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
';
                            var ForumID = '<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['category']['id'];?>
';
                        <?php echo '</script'; ?>
>
                        <div class="topic-status-buttons">
                            <button class="ui-button request-sticky button2" type="button" onclick="ForumTopic.requestSticky(this, '<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
')" data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Forum_Make_It_Sticky_Full');?>
">
                                <span class="button-left">
                                    <span class="button-right">
                                        <?php echo $_smarty_tpl->getConfigVariable('Forum_Make_It_Sticky');?>

                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <span class="clear"></span>
                <div class="forum-actions forum-actions-top">
                    <div class="actions-right"></div>
                    <?php if (!isset($_SESSION['loggedin'])||!$_SESSION['loggedin']) {?>
                    <div class="reply-button-wrapper ajax-update">
                        <a class="ui-button button1" href="/account/login">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Forum_Reply');?>

                                </span>
                            </span>
                        </a>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['Characters']->value==0) {?>
                    <div class="reply-button-wrapper ajax-update">
                    <a class="ui-button button1 disabled" href="javascript:;"
                    data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Forum_Non_Characters');?>
"><span class="button-left"><span class="button-right"> <?php echo $_smarty_tpl->getConfigVariable('Forum_Reply');?>

                    </span></span></a>

	                </div>
                     <?php } else { ?>
                     <?php if ($_smarty_tpl->tpl_vars['TopicData']->value['topic']['closed']) {?>
                    	<div class="reply-button-wrapper ajax-update">

                    <a class="ui-button button1 disabled" href="javascript:;"
                    data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Forum_Topic_Clodsed');?>
"><span class="button-left"><span class="button-right"> <?php echo $_smarty_tpl->getConfigVariable('Forum_Reply');?>

                    </span></span></a>

                    	</div>
                        <?php } else { ?>
                        <div class="reply-button-wrapper ajax-update">
                        <a class="ui-button button1" href="#new-post">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Forum_Reply');?>

                                </span>
                            </span>
                        </a>
                    </div>
                        <?php }?>
                     <?php }?>
				<?php }?>
                    <span class="clear"><!-- --></span>
                </div>
                <div id="post-list" class="post-list">
                    <?php  $_smarty_tpl->tpl_vars['Reply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Reply']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TopicData']->value['replies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Reply']->key => $_smarty_tpl->tpl_vars['Reply']->value) {
$_smarty_tpl->tpl_vars['Reply']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Reply']->key;
?>
                        <div id="post-<?php echo $_smarty_tpl->tpl_vars['Reply']->value['id'];?>
" class="topic-post post-<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
 <?php if ($_smarty_tpl->tpl_vars['Reply']->value['gm']) {?>blizzard<?php }?> ajax-update" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['id'];?>
">
                            <span id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
"></span>
                            <div class="post-interior" itemscope="itemscope" itemtype="http://schema.org/Comment">
                                <div class="post-character">
                                    <div class="forum-user">
                                        <div class="forum-avatar">
                                            <div class="bnet-avatar">
                                                <div class="avatar-outer">
                                                    <?php if ($_smarty_tpl->tpl_vars['Reply']->value['gm']) {?>
                                                    <a href="javascript:;">
                                                    <img height="64" width="64" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Reply']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Reply']->value['gender'];?>
.jpg" alt="" />
                                                    <span class="avatar-inner"></span>
                                                    </a>
                                                    <?php } else { ?>
                                                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
">
                                                        <img height="64" width="64" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Reply']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Reply']->value['gender'];?>
.jpg" alt>
                                                        <span class="avatar-inner"></span>
                                                    </a>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-details">
                                            <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                                                <div id="context-2" class="ui-context" style="display: none;">
                                                    <div class="context">
                                                        <a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
                                                        <div class="context-user">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
</strong>
                                                        </div>
                                                        <div class="context-links">
                                                          <?php if ($_smarty_tpl->tpl_vars['Reply']->value['gm']) {?>
                                                        <a href="/search?f=post&amp;a=<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
&amp;sort=time" title="<?php echo $_smarty_tpl->getConfigVariable('Posts_Gm');?>
" rel="np" class="icon-posts link-first">
                                                                <span class="context-icon"></span><?php echo $_smarty_tpl->getConfigVariable('Posts_Gm');?>

                                                            </a>
                                                        <?php } else { ?>
                                                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
/" title="<?php echo $_smarty_tpl->getConfigVariable('Profile');?>
" rel="np" class="icon-profile link-first">
                                                                <span class="context-icon"></span><?php echo $_smarty_tpl->getConfigVariable('Profile');?>

                                                            </a>
                                                        <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['Reply']->value['gm']) {?>
                                                <a href="javascript:;" itemprop="url" class="context-link ">
<span itemprop="name" class="poster-name"><?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
</span>
</a>
                                                <?php } else { ?>
                                                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
/" itemprop="url" class="context-link wow-class-<?php echo $_smarty_tpl->tpl_vars['Reply']->value['class'];?>
">
                                                    <span itemprop="name" class="poster-name"><?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
</span>
                                                </a>
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['Reply']->value['gm']) {?>
                                            <div class="forum-title admin-title" itemprop="jobTitle">
                                            Community Manager
                                            </div>
                                            <?php } else { ?>
                                            <div class="user-character">
                                                <div class="character-desc">
                                                    <span class="wow-class-<?php echo $_smarty_tpl->tpl_vars['Reply']->value['class'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['Reply']->value['class_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['Reply']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['Reply']->value['level'];?>
 <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>

                                                    </span>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <span class="clear"></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-detail" id="post-text-id<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
" itemprop="text">
                                        <?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_message'];?>

                                    </div>
                                </div>
                                <div class="post-info">
                                    <div class="post-info-wrapper">
                                        <a class="post-index" href="#<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
</a>
                                        <div class="date" data-tooltip="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Reply']->value['post_time'],"%d/%m/%Y %H:%M");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Reply']->value['post_time'],"%d/%m/%Y");?>
</div>
                                        <meta itemprop="dateCreated" content="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Reply']->value['post_time'],"%Y-%m-%dT%H:%M:%S");?>
" />
                                        <meta itemprop="discussionUrl" content="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['category']['id'];?>
" />
                                        <div class="rate-post-wrapper">
                                            <a href="javascript:;" class="rate-option rate-up" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
" data-vote-type="up" data-report-type="1">
                                                <span class="button-left">
                                                    <span class="button-right">
                                                        <?php echo $_smarty_tpl->getConfigVariable('Comments_Like');?>

                                                    </span>
                                                </span>
                                            </a>
                                            <div class="rate-option downvote-wrapper">
                                                <a href="javascript:;" onclick="$(this).next('.downvote-menu').toggle();" class="rate-down"/>
                                                <div class="downvote-menu" style="display:none">
                                                    <div class="ui-dropdown">
                                                        <div class="dropdown-wrapper">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
" data-vote-type="down" data-report-type="1">Dislike</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
" data-vote-type="down" data-report-type="2">Trolling</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
" data-vote-type="down" data-report-type="3">Spam</a>
                                                                </li>
                                                                <li class="report-comment">
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['posted_by'];?>
" data-vote-type="report">Report</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="clear"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-options" data-solution-text="" data-mark-solution-text="" data-marked-as-solution-text="">
                                    <?php if ($_smarty_tpl->tpl_vars['Reply']->value['closed']==0) {?>
                                    <a class="ui-button button2 reply-to-post" href="#new-post">
                                        <span class="button-left">
                                            <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('MSG_BML_reply');?>
</span>
                                        </span>
                                    </a>
                                    <a class="ui-button button2 quote-post" href="#new-post" onclick="ForumTopic.quoteTopic(this);" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Reply']->value['post_id'];?>
">
                                        <span class="button-left">
                                            <span class="button-right">
                                                <snap clas="icon-quote">
                                                    <?php echo $_smarty_tpl->getConfigVariable('MSG_BML_quote');?>

                                                </snap>
                                            </span>
                                        </span>
                                    </a><?php }?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="forum-actions forum-actions-bottom">
                    <div class="actions-right"></div>
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
                            <a href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
/" rel="np" itemprop="url">
                                <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['name'];?>
</span>
                            </a>
                        </li>
                    </ol>
                </div>
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
                <?php echo $_smarty_tpl->getSubTemplate ('forum/comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
