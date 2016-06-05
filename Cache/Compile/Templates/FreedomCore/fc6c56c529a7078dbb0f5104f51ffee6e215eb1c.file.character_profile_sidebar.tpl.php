<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:23:01
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/character_profile_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143256166557521f6581c531-01050719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc6c56c529a7078dbb0f5104f51ffee6e215eb1c' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/character_profile_sidebar.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143256166557521f6581c531-01050719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Character' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57521f6583fbe7_84920246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57521f6583fbe7_84920246')) {function content_57521f6583fbe7_84920246($_smarty_tpl) {?><div class="profile-sidebar-anchor">
    <div class="profile-sidebar-outer">
        <div class="profile-sidebar-inner">
            <div class="profile-sidebar-contents">
                <div class="profile-info-anchor">
                    <div class="profile-info">
                        <div class="name">
                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" rel="np"><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</a>
                        </div>
                        <div class="title-guild">
                            <div class="title"><?php echo $_smarty_tpl->tpl_vars['Character']->value['title'];?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['Character']->value['guild_name']!='') {?>
                            <div class="guild">
                                <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
/?character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
</a>
                            </div>
                            <?php }?>
                        </div>
                        <span class="clear"><!-- --></span>
                        <div class="under-name color-c<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
">
                            <a href="/game/race/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race_data']['name'];?>
" class="race"><?php echo $_smarty_tpl->tpl_vars['Character']->value['race_data']['translation'];?>
</a>-<a href="/game/class/<?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['name'];?>
" class="class"><?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['translation'];?>
</a> <span class="level"><strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
</strong></span> <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>

                        </div>
                    </div>
                </div>
                <ul class="profile-sidebar-menu" id="profile-sidebar-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ('blocks/character_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
                <div class="summary-sidebar-links">
				    <span class="summary-sidebar-button">
				        <a href="javascript:;" id="summary-link-tools" class="summary-link-tools"></a>
					</span>
                    <span class="summary-sidebar-button">
	                    <a href="javascript:;" data-fansite="character|<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
" class="fansite-link "> </a>
					</span>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
