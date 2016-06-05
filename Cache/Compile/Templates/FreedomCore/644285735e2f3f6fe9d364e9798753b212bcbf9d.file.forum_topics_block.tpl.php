<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 04:45:38
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/forum_topics_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126129985575232c20b13d2-59693071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644285735e2f3f6fe9d364e9798753b212bcbf9d' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/forum_topics_block.tpl',
      1 => 1464942912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126129985575232c20b13d2-59693071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Forum' => 0,
    'Topic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575232c2205ac6_47490045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575232c2205ac6_47490045')) {function content_575232c2205ac6_47490045($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_relative_date')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.relative_date.php';
if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_relative_date_short')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.relative_date_short.php';
?><table class="forum-topics" id="forum-topics" data-forum-id="<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_id'];?>
" style="font-size: 13px;">
    <thead>
    <tr>
        <th class="icon-column"></th>
        <th class="subject-column"><?php echo $_smarty_tpl->getConfigVariable('Forum_Table_Topic_Name');?>
</th>
        <th class="author-column"><?php echo $_smarty_tpl->getConfigVariable('Forum_Table_Author_Name');?>
</th>
        <th class="reply-column"><?php echo $_smarty_tpl->getConfigVariable('Forum_Table_Responses_Name');?>
</th>
        <th class="view-column"><?php echo $_smarty_tpl->getConfigVariable('Forum_Table_Views_Name');?>
</th>
        <th class="last-poster-column"><?php echo $_smarty_tpl->getConfigVariable('Forum_Table_LastMessage_Name');?>
</th>
    </tr>
    </thead>
    <tbody class="regular-topics sort-connect">
    <?php  $_smarty_tpl->tpl_vars['Topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Forum']->value['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Topic']->key => $_smarty_tpl->tpl_vars['Topic']->value) {
$_smarty_tpl->tpl_vars['Topic']->_loop = true;
?>
        <tr id="postRow<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" class="stickied-topic <?php if ($_smarty_tpl->tpl_vars['Topic']->value['closed']) {?>locked<?php }?>" data-topic-id="<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" itemscope="itemscope" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
            <td class="icon-cell">
                                    <span class="topic-icon-wrapper">
                                        <span class="topic-icon"></span>
                                        <?php if ($_smarty_tpl->tpl_vars['Topic']->value['forum_info']['gm']) {?><span class="employee-icon"></span><?php }?>
                                    </span>
            </td>
            <td class="title-cell" data-tooltip="#topic-<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" data-tooltip-options="{ &quot;location&quot;: &quot;mouse&quot; }">
                <a class="topic-title" itemprop="url" href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['Topic']->value['attached']) {?><span class="status-text"><?php echo $_smarty_tpl->getConfigVariable('Posts_Attached');?>
</span><?php }?>
                    <span itemprop="headline"><?php echo $_smarty_tpl->tpl_vars['Topic']->value['topic'];?>
</span>
                </a>
                                    <span id="topic-<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" style="display:none">
                                        <span class="topic-tooltip">
                                            <span class="topic-detail"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Topic']->value['message'],100);?>
</span>
                                            <span class="created"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Topic']->value['post_time']);?>
</span>
                                            <span class="info">
                                                <span class="views"><?php echo $_smarty_tpl->tpl_vars['Topic']->value['views'];?>
 <?php echo $_smarty_tpl->getConfigVariable('Forum_Topic_View');?>
 / <?php echo $_smarty_tpl->tpl_vars['Topic']->value['replies'];?>
 <?php echo $_smarty_tpl->getConfigVariable('Forum_Topic_View');?>
</span>
                                                <span class="last-post"><?php echo $_smarty_tpl->getConfigVariable('Forum_Topic_LastReply');?>
 <?php echo $_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['postername'];?>
 (<?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['post_time']);?>
)</span>
                                            </span>
                                        </span>
                                    </span>
                <meta itemprop="dateCreated" content="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Topic']->value['post_time'],"%Y-%m-%dT%H:%M:%S");?>
" />
                <meta itemprop="dateModified" content="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Topic']->value['post_time'],"%Y-%m-%dT%H:%M:%S");?>
" />
                <a class="last-read-post hidden" href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
/" data-topic-id="<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" data-topic-last-posted="<?php echo $_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['post_time'];?>
" data-topic-replies="<?php echo $_smarty_tpl->tpl_vars['Topic']->value['replies'];?>
">
                    <span class="last-read-arrow"></span>
                </a>
                <div class="pages-wrapper post-pages-cell">
                </div>
            </td>
            <td  class="author-cell">
            <span class="author-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['Topic']->value['forum_info']['gm']) {?>
            <span class="author-name blizzard-post" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['Topic']->value['postername'];?>
</span>
            <span class="employee-icon"></span>
            <?php } else { ?>
            <span class="author-name" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['Topic']->value['postername'];?>
</span>
            <?php }?>
            </span>
            </td>
            <td class="reply-cell">
                <?php echo $_smarty_tpl->tpl_vars['Topic']->value['replies'];?>
<meta itemprop="interactionCount" content="UserComments:<?php echo $_smarty_tpl->tpl_vars['Topic']->value['replies'];?>
" />
            </td>
            <td class="view-cell">
                <?php echo $_smarty_tpl->tpl_vars['Topic']->value['views'];?>
<meta itemprop="interactionCount" content="UserPageVisits:<?php echo $_smarty_tpl->tpl_vars['Topic']->value['views'];?>
" />
            </td>
            <td class="author-cell last-post-cell" data-tooltip="#last-post-<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
">
                <a class="last-post-link" href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
/">
                                        <span class="author-wrapper">
                                            <?php if ($_smarty_tpl->tpl_vars['Topic']->value['forum_info']['gm']) {?>
                                            <span class="author-name blizzard-post">
                                            <?php echo $_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['postername'];?>

                                            </span>
                                            <span class="employee-icon"></span>
                                            <?php } else { ?>
                                            <span class="author-name">
                                            <?php echo $_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['postername'];?>

                                            </span>
                                            <?php }?>
                                        </span>
                                        <span class="last-post-time">
                                        <?php echo smarty_modifier_relative_date_short($_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['post_time']);?>

                                        </span>
                </a>
                                    <span id="last-post-<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" style="display:none">
                                        <span class="last-post"><?php echo $_smarty_tpl->getConfigVariable('Forum_Topic_LastReply');?>
 <?php echo $_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['postername'];?>
 (<?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Topic']->value['last_reply_data']['post_time']);?>
)</span>
                                    </span>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table><?php }} ?>
