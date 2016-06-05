<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:51:54
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\blocks\userplate_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25252574f3cdaf054f6-32791759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ce7f7e56dc5acf8782960ad37bd6966e36bfb63' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\blocks\\userplate_block.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25252574f3cdaf054f6-32791759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Characters' => 0,
    'User' => 0,
    'Character' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f3cdb02a016_44260154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f3cdb02a016_44260154')) {function content_574f3cdb02a016_44260154($_smarty_tpl) {?><div class="user-plate">
    <?php  $_smarty_tpl->tpl_vars['Character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Characters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Character']->key => $_smarty_tpl->tpl_vars['Character']->value) {
$_smarty_tpl->tpl_vars['Character']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['User']->value['pinned_character']!=null&&$_smarty_tpl->tpl_vars['Character']->value['guid']==$_smarty_tpl->tpl_vars['User']->value['pinned_character']) {?>
        <a class="card-character plate-<?php echo $_smarty_tpl->tpl_vars['Character']->value['side'];?>
 ajax-update" href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" id="user-plate" rel="np"></a>
    
        <div class="meta-wrapper meta-<?php echo $_smarty_tpl->tpl_vars['Character']->value['side'];?>
 ajax-update">
            <div class="character-card card-game-char ajax-update">
                <div class="message">
                    <span class="player-name"><?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>
</span>
    
                    <div class="character">
                        <a class="character-name context-link serif name-small"
                        href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" rel=
                        "np"><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['Character']->value['guild_name']!=null||$_smarty_tpl->tpl_vars['Character']->value['guild_name']!='') {?>
                            <div class="guild">
                                <a class="guild-name" href="/guild/<?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
" rel="np"><?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
</a>
                            </div>
                        <?php }?>
                        <span class="avatar-frame">
                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" class="avatar avatar-wow" />
                            <span class="border"></span> 
                            <span class="icon icon-wow"></span>
                        </span>
    
                        <div class="ui-context character-select" id="context-1">
                            <div class="context">
                                <a class="close" href="javascript:;" onclick=
                                "return CharSelect.close(this);"></a>
    
                                <div class="context-user">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</strong>
                                </div>
    
                                <div class="context-links">
                                    <a class="icon-profile link-first" href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" rel="np"title="<?php echo $_smarty_tpl->getConfigVariable('Profile');?>
">
                                        <span class="context-icon"></span>
                                        <?php echo $_smarty_tpl->getConfigVariable('Profile');?>

                                    </a> 
                                    <a class="icon-posts" href="/search?f=post&amp;a=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
&amp;sort=time"rel="np" title="<?php echo $_smarty_tpl->getConfigVariable('Posts_My');?>
">
                                        <span class="context-icon"></span>
                                    </a> 
                                    <a class="icon-auctions" href="/vault/character/auction/" rel="np" title="<?php echo $_smarty_tpl->getConfigVariable('Auction_View');?>
">
                                        <span class="context-icon"></span>
                                    </a> 
                                    <a class="icon-events link-last" href="/vault/character/event" rel="np" title="<?php echo $_smarty_tpl->getConfigVariable('Events_View');?>
">
                                        <span class="context-icon"></span>
                                    </a>
                                </div>
                            </div>
        <?php }?>
    <?php } ?>
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
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
