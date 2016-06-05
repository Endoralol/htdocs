<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 13:14:37
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blog/comments_add_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8257530255752aa0d25ec15-19304329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beb79c0472972b1cee98ba53e34c16dff7d5eb23' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blog/comments_add_form.tpl',
      1 => 1464860658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8257530255752aa0d25ec15-19304329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Characters' => 0,
    'CommentCharacter' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752aa0d348490_18778486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752aa0d348490_18778486')) {function content_5752aa0d348490_18778486($_smarty_tpl) {?><?php if (!$_SESSION['loggedin']) {?>
    <div class="comments-form-wrapper">
        <div class="comments-error-gate">
            <p><?php echo $_smarty_tpl->getConfigVariable('Login_Authorization_Needed');?>
</p>
            <button class="ui-button button1" onclick="Login.open();" type="button">
                <span class="button-left">
                    <span class="button-right">
                        <?php echo $_smarty_tpl->getConfigVariable('Login_Log_In');?>

                    </span>
                </span>
            </button>
        </div>
    </div>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['Characters']->value==0) {?>
        <div class="comments-form-wrapper">
            <div class="comments-error-gate">
                <p><?php echo $_smarty_tpl->getConfigVariable('Comments_No_Characters');?>
</p>
            </div>
        </div>
    <?php } else { ?>
        <div class="comments-form-wrapper">
            <form id="comments-reply-form" class="comments-form" action="" method="post" style="display: none">
                <div class="bnet-avatar">
                    <div class="avatar-outer">
                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
">
                            <img height="64" width="64" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['gender'];?>
.jpg" alt=""/>
                            <span class="avatar-inner"/>
                        </a>
                    </div>
                </div>
                <div class="character-info user ajax-update">
                    <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                        <div id="context-1" class="ui-context character-select">
                            <div class="context">
                                <a href="javascript:;" class="close" onclick="return CharSelect.close(this);"/>
                                <div class="context-user">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
</strong>
                                </div>
                                <div class="context-links">
                                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" title="Profile" rel="np" class="icon-profile link-first">
                                        <span class="context-icon"/>
                                        Profile
                                    </a>
                                    <a href="/search?f=post&a=<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
&sort=time" title="View my posts" rel="np" class="icon-posts">
                                        <span class="context-icon"></span>
                                    </a>
                                    <a href="/vault/character/auction" title="View auctions" rel="np" class="icon-auctions">
                                        <span class="context-icon"/>
                                    </a>
                                    <a href="/vault/character/event" title="View events" rel="np" class="icon-events link-last">
                                        <span class="context-icon"/>
                                    </a>
                                </div>
                            </div>
                            <div class="character-list">
                                <div class="primary chars-pane">
                                    <div class="char-wrapper">
                                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" class="char pinned" rel="np">
                                            <span class="pin"/>
                                            <span class="name"><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
</span>
                                            <span class="class wow-class-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['level'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class_name'];?>
</span>
                                        </a>
                                    </div>
                                    <a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
                                        <span class="plus"/>
                                        Manage Characters<br />
                                        <span>
                                            Customise characters that appear in this menu.
                                        </span>
                                    </a>
                                </div>
                                <div class="secondary chars-pane">
                                    <div class="char-wrapper scrollbar-wrapper" id="scroll">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb"/>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="overview">
                                                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" class="wow-class-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
 pinned" rel="np" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class_name'];?>
">
                                                <span class="icon icon-race">
                                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/race_<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race'];?>
_<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['gender'];?>
.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                <span class="icon icon-class">
                                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/class_<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                    <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['level'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>

                                                </a>
                                                <div class="no-results hide">No characters were found</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter">
                                        <input type="input" class="input character-filter" value="Filter..." alt="Filter..."/>
                                        <br />
                                        <a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">
                                            Return to characters
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" itemprop="url" class="context-link wow-class-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
">
                            <span itemprop="name" class="poster-name"><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
</span>
                        </a>
                    </div>
                </div>
                <div class="text-wrapper">
                    <div class="input-wrapper">
                        <textarea name="detail" class="input textarea"/>
                    </div>
                    <ul class="comments-error-form">
                        <li class="error-required">Field required</li>
                        <li class="error-throttled">You cannot post at this time</li>
                        <li class="error-length">This field is too long</li>
                        <li class="error-title">Account Banned</li>
                        <li class="error-frozen">This game license has expired or been frozen.</li>
                        <li class="error-locked">
                            This account has had its communication ability disabled.
                        </li>
                        <li class="error-cancelled">This game license has expired or been cancelled.</li>
                        <li class="error-trial">
                            Starter Edition accounts do not have the ability to create posts or use the rating buttons. Please upgrade to a full account to enable these features.
                        </li>
                        <li class="error-unknown">
                            An error occurred. Please log out and back in, and try again.
                        </li>
                    </ul>
                    <div class="comments-action">
                        <button class="ui-button button1" type="button" onclick="return Comments.add(this, true);">
                            <span class="buton-left">
                                <span class="button-left">
                                    <span class="button-right">
                                        Post
                                    </span>
                                </span>
                            </span>
                        </button>
                        <a class="ui-cancel" href="#" onclick="return Comments.cancelReply(this);">
                            <span>
                                Cancel
                            </span>
                        </a>
                    </div>
                </div>
            </form>
            <form id="comments-add-form" class="comments-form" action="" method="post">
                <div class="bnet-avatar">
                    <div class="avatar-outer">
                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
">
                            <img height="64" width="64" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['gender'];?>
.jpg" alt=""/>
                            <span class="avatar-inner"/>
                        </a>
                    </div>
                </div>
                <div class="character-info user ajax-update">
                    <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                        <div id="context-1" class="ui-context character-select">
                            <div class="context">
                                <a href="javascript:;" class="close" onclick="return CharSelect.close(this);"/>
                                <div class="context-user">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
</strong>
                                </div>
                                <div class="context-links">
                                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" title="Profile" rel="np" class="icon-profile link-first">
                                        <span class="context-icon"/>
                                        Profile
                                    </a>
                                    <a href="/search?f=post&a=<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
&sort=time" title="View my posts" rel="np" class="icon-posts">
                                        <span class="context-icon"></span>
                                    </a>
                                    <a href="/vault/character/auction" title="View auctions" rel="np" class="icon-auctions">
                                        <span class="context-icon"/>
                                    </a>
                                    <a href="/vault/character/event" title="View events" rel="np" class="icon-events link-last">
                                        <span class="context-icon"/>
                                    </a>
                                </div>
                            </div>
                            <div class="character-list">
                                <div class="primary chars-pane">
                                    <div class="char-wrapper">
                                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" class="char pinned" rel="np">
                                            <span class="pin"/>
                                            <span class="name"><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
</span>
                                            <span class="class wow-class-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['level'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class_name'];?>
</span>
                                        </a>
                                    </div>
                                    <a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
                                        <span class="plus"/>
                                        Manage Characters<br />
                                        <span>
                                            Customise characters that appear in this menu.
                                        </span>
                                    </a>
                                </div>
                                <div class="secondary chars-pane">
                                    <div class="char-wrapper scrollbar-wrapper" id="scroll">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb"/>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="overview">
                                                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" class="wow-class-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
 pinned" rel="np" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class_name'];?>
">
                                                <span class="icon icon-race">
                                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/race_<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race'];?>
_<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['gender'];?>
.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                <span class="icon icon-class">
                                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/class_<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                    <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['level'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>

                                                </a>
                                                <div class="no-results hide">No characters were found</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter">
                                        <input type="input" class="input character-filter" value="Filter..." alt="Filter..."/>
                                        <br />
                                        <a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">
                                            Return to characters
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" itemprop="url" class="context-link wow-class-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
">
                            <span itemprop="name" class="poster-name"><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
</span>
                        </a>
                    </div>
                </div>
                <div class="text-wrapper">
                    <div class="input-wrapper">
                        <textarea name="detail" class="input textarea"/>
                    </div>
                    <ul class="comments-error-form">
                        <li class="error-required">Field required</li>
                        <li class="error-throttled">You cannot post at this time</li>
                        <li class="error-length">This field is too long</li>
                        <li class="error-title">Account Banned</li>
                        <li class="error-frozen">This game license has expired or been frozen.</li>
                        <li class="error-locked">
                            This account has had its communication ability disabled.
                        </li>
                        <li class="error-cancelled">This game license has expired or been cancelled.</li>
                        <li class="error-trial">
                            Starter Edition accounts do not have the ability to create posts or use the rating buttons. Please upgrade to a full account to enable these features.
                        </li>
                        <li class="error-unknown">
                            An error occurred. Please log out and back in, and try again.
                        </li>
                    </ul>
                    <div class="comments-action">
                        <button class="ui-button button1 comment-submit" type="button" onclick="return Comments.add(this);">
                            <span class="button-left">
                                <span class="button-right">
                                    Post
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="comments-throttler">
                        Time till next post:
                        <span class="throttle-time">
                            60
                        </span>
                    </div>
                </div>
            </form>
        </div>
    <?php }?>
<?php }?><?php }} ?>
