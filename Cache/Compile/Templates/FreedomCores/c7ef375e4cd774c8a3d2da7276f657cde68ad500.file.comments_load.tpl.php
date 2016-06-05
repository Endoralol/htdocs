<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:27:47
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blog/comments_load.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71807701257501833e918f0-85094314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ef375e4cd774c8a3d2da7276f657cde68ad500' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blog/comments_load.tpl',
      1 => 1464860658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71807701257501833e918f0-85094314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Comments' => 0,
    'Comment' => 0,
    'VotesResult' => 0,
    'Template' => 0,
    'Characters' => 0,
    'CommentCharacter' => 0,
    'CNC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750183408e142_07955984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750183408e142_07955984')) {function content_5750183408e142_07955984($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/opt/lampp/htdocs/Core/Libraries/Smarty/plugins/modifier.relative_date.php';
?><?php if (count($_smarty_tpl->tpl_vars['Comments']->value)==0) {?>
    <div id="comments" class="bnet-comments comments-error">
        <h2 class="subheader-2"><?php echo $_smarty_tpl->getConfigVariable('Comments_Not_Found');?>
.</h2>
        <?php echo $_smarty_tpl->getSubTemplate ('blog/comments_add_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php } elseif (count($_smarty_tpl->tpl_vars['Comments']->value)>0) {?>
    <div id="comments" class="bnet-comments ">
        <h2 class="subheader-2"><?php echo $_smarty_tpl->getConfigVariable('Comments');?>
 (<span id="comments-total"><?php echo count($_smarty_tpl->tpl_vars['Comments']->value);?>
</span>)</h2>
        <a class="comments-pull-link" href="javascript:;" id="comments-pull" onclick="Comments.loadBase();" style="display: none">
            <span class="pull-single" style="display: block"><?php echo $_smarty_tpl->getConfigVariable('Comments_new');?>
: <span>{0}</span>.<strong><?php echo $_smarty_tpl->getConfigVariable('Renew');?>
?</strong></span>
            <span class="pull-multiple" style="display: none"><?php echo $_smarty_tpl->getConfigVariable('Comments_new');?>
: <span>{0}</span>.<strong><?php echo $_smarty_tpl->getConfigVariable('Renew');?>
?</strong></span>
        </a>
        <?php echo $_smarty_tpl->getSubTemplate ('blog/comments_add_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="comments-sorting-wrapper">
            <ul class="tab-menu " id="comments-sorting-tabs">
                <li class="menu-best ">
                    <a href="#best" class="tab-active">
                        <span><?php echo $_smarty_tpl->getConfigVariable('Comments_Popular');?>
</span>
                    </a>
                </li>
                <li class="menu-latest ">
                    <a href="#latest">
                        <span><?php echo $_smarty_tpl->getConfigVariable('Comments_Latest');?>
</span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="comments-pages-wrapper">
            <div class="comments-pages">
                <div id="comments-list-wrapper">
                    <div class="comments-controls">
                        <!-- Pagination is not yet done -->
                    </div>
                    <ul class="comments-list" id="comments-1">
                        <?php  $_smarty_tpl->tpl_vars['Comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Comment']->key => $_smarty_tpl->tpl_vars['Comment']->value) {
$_smarty_tpl->tpl_vars['Comment']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['Comment']->value['replied_to']==null) {?>
                                <li class="" id="post-<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
">
                                    <div class="comment-tile">
                                        <div class="rate-post-wrapper rate-post-login comment-rating">
                                            <?php $_smarty_tpl->tpl_vars['VotesResult'] = new Smarty_variable($_smarty_tpl->tpl_vars['Comment']->value['votes_up']-$_smarty_tpl->tpl_vars['Comment']->value['votes_down'], null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['VotesResult']->value!=0) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['VotesResult']->value>0) {?>
                                                    <font color="green">+<?php echo $_smarty_tpl->tpl_vars['VotesResult']->value;?>
</font>
                                                <?php } else { ?>
                                                    <font color="red"><?php echo $_smarty_tpl->tpl_vars['VotesResult']->value;?>
</font>
                                                <?php }?>
                                            <?php }?>
                                        </div>
                                        <div class="rate-post-wrapper">
                                            <a href="javascript:;" class="rate-option rate-up" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
" data-vote-type="up" data-report-type="1">
                                            <span class="button-left">
                                                <span class="button-right">
                                                    Like
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
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
" data-vote-type="down" data-report-type="1">
                                                                        Dislike
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
" data-vote-type="down" data-report-type="2">
                                                                        Trolling
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
" data-vote-type="down" data-report-type="3">
                                                                        Spam
                                                                    </a>
                                                                </li>
                                                                <li class="report-comment">
                                                                    <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
" data-vote-type="report">
                                                                        Report
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="clear"></span>
                                        </div>
                                        <div class="bnet-avatar">
                                            <div class="avatar-outer">
                                                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
">
                                                    <img height="64" width="64" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Comment']->value['poster_race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Comment']->value['poster_gender'];?>
.jpg" alt=""/>
                                                    <span class="avatar-inner"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="comment-head">
                                            <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                                                <div id="context-3" class="ui-context">
                                                    <div class="context">
                                                        <a href="javascript:;" clas="close" onclick="return CharSelect.close(this);"/>
                                                        <div class="context-user">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
</strong>
                                                        </div>
                                                        <div class="context-links">
                                                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
" title="Profile" rel="np" class="icon-profile link-first">
                                                                <span class="context-icon"/>
                                                                Profile
                                                                </span>
                                                            </a>
                                                            <a href="/search?f=post&a=<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
&sort=time" title="View posts" rel="np" class="icon-posts link-last">
                                                                <span class="context-icon"/></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
"  itemprop="url" class="context-link wow-class-<?php echo $_smarty_tpl->tpl_vars['Comment']->value['poster_class'];?>
">
                                                    <span itemprop="name" class="poster-name"><?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
</span>
                                                </a>
                                                <span class="timestamp"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['Comment']->value['comment_date']);?>
</span>
                                            </div>
                                        </div>
                                        <div class="comment-body">
                                            <?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_text'];?>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['Characters']->value!=0) {?>
                                            <div class="comment-foot">
                                                <?php if ($_smarty_tpl->tpl_vars['Comment']->value['comment_by']==$_smarty_tpl->tpl_vars['CommentCharacter']->value['name']) {?>
                                                    <button class="ui-button button2" type="button" onclick="Comments.toggleDelete('<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
');" data-tooltip="Posts may be deleted within 15 minutes of posting.">
                                                <span class="button-left">
                                                    <span class="button-right">
                                                        Delete
                                                    </span>
                                                </span>
                                                    </button>
                                                <?php }?>
                                                <button class="ui-button button2 reply-button" type="button" onclick="Comments.reply('<?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
', <?php echo $_smarty_tpl->tpl_vars['Comment']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['Comment']->value['comment_by'];?>
'); return false;">
                                                <span class="button-left">
                                                    <span class="button-right">
                                                        Reply
                                                    </span>
                                                </span>
                                                </button>
                                                <span class="clear"><!-- --></span>
                                            </div>
                                        <?php }?>
                                        <span class="clear"></span>
                                    </div>
                                </li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['Comment']->value['nested_comments'])) {?>
                                    <?php  $_smarty_tpl->tpl_vars['CNC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CNC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Comment']->value['nested_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CNC']->key => $_smarty_tpl->tpl_vars['CNC']->value) {
$_smarty_tpl->tpl_vars['CNC']->_loop = true;
?>
                                        <li class=" comment-nested" id="post-<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
">
                                            <div class="comment-tile">
                                                <div class="rate-post-wrapper rate-post-login comment-rating">
                                                    <?php $_smarty_tpl->tpl_vars['VotesResult'] = new Smarty_variable($_smarty_tpl->tpl_vars['CNC']->value['votes_up']-$_smarty_tpl->tpl_vars['CNC']->value['votes_down'], null, 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['VotesResult']->value!=0) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['VotesResult']->value>0) {?>
                                                            <font color="green">+<?php echo $_smarty_tpl->tpl_vars['VotesResult']->value;?>
</font>
                                                        <?php } else { ?>
                                                            <font color="red"><?php echo $_smarty_tpl->tpl_vars['VotesResult']->value;?>
</font>
                                                        <?php }?>
                                                    <?php }?>
                                                </div>
                                                <div class="rate-post-wrapper">
                                                    <a href="javascript:;" class="rate-option rate-up" data-post-id="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
" data-vote-type="up" data-report-type="1">
                                            <span class="button-left">
                                                <span class="button-right">
                                                    Like
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
                                                                            <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
" data-vote-type="down" data-report-type="1">
                                                                                Dislike
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
" data-vote-type="down" data-report-type="2">
                                                                                Trolling
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
" data-vote-type="down" data-report-type="3">
                                                                                Spam
                                                                            </a>
                                                                        </li>
                                                                        <li class="report-comment">
                                                                            <a href="javascript:;" data-post-id="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
" data-post-author="<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
" data-vote-type="report">
                                                                                Report
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="clear"></span>
                                                </div>
                                                <div class="bnet-avatar">
                                                    <div class="avatar-outer">
                                                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
">
                                                            <img height="64" width="64" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['CNC']->value['poster_race'];?>
-<?php echo $_smarty_tpl->tpl_vars['CNC']->value['poster_gender'];?>
.jpg" alt=""/>
                                                            <span class="avatar-inner"/></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="comment-head">
                                                    <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                                                        <div id="context-3" class="ui-context">
                                                            <div class="context">
                                                                <a href="javascript:;" clas="close" onclick="return CharSelect.close(this);"/>
                                                                <div class="context-user">
                                                                    <strong><?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
</strong>
                                                                </div>
                                                                <div class="context-links">
                                                                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
" title="Profile" rel="np" class="icon-profile link-first">
                                                                        <span class="context-icon"/>
                                                                        Profile
                                                                        </span>
                                                                    </a>
                                                                    <a href="/search?f=post&a=<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
&sort=time" title="View posts" rel="np" class="icon-posts link-last">
                                                                        <span class="context-icon"/> </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
"  itemprop="url" class="context-link wow-class-<?php echo $_smarty_tpl->tpl_vars['CNC']->value['poster_class'];?>
">
                                                            <span itemprop="name" class="poster-name"><?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
</span>
                                                        </a>
                                                        <span class="timestamp"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['CNC']->value['comment_date']);?>
</span>
                                                    </div>
                                                </div>
                                                <div class="comment-body">
                                                    <?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_text'];?>

                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['Characters']->value!=0) {?>
                                                    <div class="comment-foot">
                                                        <?php if ($_smarty_tpl->tpl_vars['CNC']->value['comment_by']==$_smarty_tpl->tpl_vars['CommentCharacter']->value['name']) {?>
                                                            <button class="ui-button button2" type="button" onclick="Comments.toggleDelete('<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
');" data-tooltip="Posts may be deleted within 15 minutes of posting.">
                                                <span class="button-left">
                                                    <span class="button-right">
                                                        Delete
                                                    </span>
                                                </span>
                                                            </button>
                                                        <?php }?>
                                                        <button class="ui-button button2 reply-button" type="button" onclick="Comments.reply('<?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
', <?php echo $_smarty_tpl->tpl_vars['CNC']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['CNC']->value['comment_by'];?>
'); return false;">
                                                <span class="button-left">
                                                    <span class="button-right">
                                                        Reply
                                                    </span>
                                                </span>
                                                        </button>
                                                        <span class="clear"><!-- --></span>
                                                    </div>
                                                <?php }?>
                                                <span class="clear"></span>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php }?>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            //<![CDATA[
            Comments.count = <?php echo count($_smarty_tpl->tpl_vars['Comments']->value);?>
;
            //]]>
        <?php echo '</script'; ?>
>
    </div>
<?php } else { ?>
    <div id="comments" class="bnet-comments comments-error">
        <h2 class="subheader-2"><?php echo $_smarty_tpl->getConfigVariable('Comments_Not_Found');?>
.</h2>
        <div class="comments-loading"/>
    </div>
    </div>
<?php }?><?php }} ?>
