<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:18:34
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\pages\character_profile_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17926574f4264f08a16-38586260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6439c5ccc7ca189535bb1bd170454af95ea8c45' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\pages\\character_profile_sidebar.tpl',
      1 => 1464812311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17926574f4264f08a16-38586260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4264f28a56_28720455',
  'variables' => 
  array (
    'Character' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4264f28a56_28720455')) {function content_574f4264f28a56_28720455($_smarty_tpl) {?><div class="profile-sidebar-anchor">
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
