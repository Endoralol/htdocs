<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:18:52
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/forum/forum_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7647992125746bf7cb07ba1-85505006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0605a2036fadd89b20a9bfea250ebaa3c820db' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/forum/forum_user.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7647992125746bf7cb07ba1-85505006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CommentCharacter' => 0,
    'Template' => 0,
    'Characters' => 0,
    'Character' => 0,
    'User' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bf7cb90657_49179416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bf7cb90657_49179416')) {function content_5746bf7cb90657_49179416($_smarty_tpl) {?><div class="forum-user ajax-update">
    <div class="forum-avatar">
        <div class="bnet-avatar ">
            <div class="avatar-outer">
                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
">
                    <img height="64" width="64" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['gender'];?>
.jpg" alt="">
                    <span class="avatar-inner"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="user-details">
        <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
            <div id="context-2" class="ui-context character-select">
                <div class="context">
                    <a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
                    <div class="context-user">
                        <strong><?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
</strong>
                    </div>
                    <div class="context-links">
                        <a href="/character/<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('Profile');?>
" rel="np" class="icon-profile link-first">
                            <span class="context-icon"></span>
                            <?php echo $_smarty_tpl->getConfigVariable('Profile');?>

                        </a>
                        <a href="/search?f=post&a=<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['name'];?>
&sort=time" title="<?php echo $_smarty_tpl->getConfigVariable('Posts_My');?>
" rel="np" class="icon-posts">
                            <span class="context-icon"></span>
                        </a>
                        <a href="/vault/character/auction/" title="<?php echo $_smarty_tpl->getConfigVariable('Auction_View');?>
" rel="np" class="icon-auctions">
                            <span class="context-icon"></span>
                        </a>
                        <a href="/vault/character/event/" title="<?php echo $_smarty_tpl->getConfigVariable('Events_View');?>
" rel="np" class="icon-events link-last">
                            <span class="context-icon"></span>
                        </a>
                    </div>
                </div>
                <div class="character-list">
                    <div class="primary chars-pane">
                        <div class="char-wrapper">
                            <?php  $_smarty_tpl->tpl_vars['Character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Characters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Character']->key => $_smarty_tpl->tpl_vars['Character']->value) {
$_smarty_tpl->tpl_vars['Character']->_loop = true;
?>
                                <a <?php if ($_smarty_tpl->tpl_vars['Character']->value['guid']==$_smarty_tpl->tpl_vars['User']->value['pinned_character']) {?>class="char pinned" <?php } else { ?> class="char"<?php }?> onclick="CharSelect.pin(<?php echo $_smarty_tpl->tpl_vars['Character']->value['guid'];?>
, this); return false;" href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" rel="np">

                                    <span class="pin"></span>
                                    <span class="name"><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</span>
                                    <span class="class wow-class-<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['Character']->value['race_name'];?>
 – <?php echo $_smarty_tpl->tpl_vars['Character']->value['class_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
 <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>
</span>
                                </a>
                            <?php } ?>
                        </div>
                        <a class="manage-chars" href="javascript:;" onclick="CharSelect.swipe('in', this); return false;"><span class="plus"></span>
                            <?php echo $_smarty_tpl->getConfigVariable('Account_Characters_Management');?>
<br>
                            <span><?php echo $_smarty_tpl->getConfigVariable('Account_Characters_DropDown');?>
</span></a>
                    </div>

                    <div class="secondary chars-pane" style=
                    "display: none">
                        <div class="char-wrapper scrollbar-wrapper" id=
                        "scroll">
                            <div class="scrollbar">
                                <div class="track">
                                    <div class="thumb"></div>
                                </div>
                            </div>

                            <div class="viewport">
                                <div class="overview">
                                    <?php  $_smarty_tpl->tpl_vars['Character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Characters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Character']->key => $_smarty_tpl->tpl_vars['Character']->value) {
$_smarty_tpl->tpl_vars['Character']->_loop = true;
?>
                                        <a class="wow-class-<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
 pinned" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['Character']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['Character']->value['class_name'];?>
" href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" rel="np">
                                                <span class="icon icon-race">
                                                    <img alt="" height="14" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/race_<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
_<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" width="14">
                                                </span>
                                                <span class="icon icon-class">
                                                    <img alt="" height="14" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/class_<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
.jpg" width="14">
                                                </span> <?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>

                                            <?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>

                                        </a>
                                    <?php } ?>

                                    <div class="no-results hide">
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Characters_Not_Found');?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filter">
                            <input alt="Фильтр" class=
                            "input character-filter" type="input"
                                   value="Фильтр"><br>
                            <a href="javascript:;" onclick=
                            "CharSelect.swipe('out', this); return false;">
                                <?php echo $_smarty_tpl->getConfigVariable('Account_Characters_Return_Back');?>
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
        <div class="user-character">
            <div class="character-desc">
                <span class="wow-class-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['class_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['level'];?>
 <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>

                </span>
            </div>
            <div class="guid" itemprop="affiliation">

            </div>
            <div class="achievements">
                <?php echo $_smarty_tpl->tpl_vars['CommentCharacter']->value['apoints'];?>

            </div>
        </div>
    </div>
    <span class="clear"></span>
</div><?php }} ?>
