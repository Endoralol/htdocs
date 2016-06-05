<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:10:49
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_profile_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404822965746bd99be8c24-31369631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23f814a3ca8e4f6f958532cb600ca823fd4c923f' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_profile_sidebar.tpl',
      1 => 1445427772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404822965746bd99be8c24-31369631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Character' => 0,
    'Specializations' => 0,
    'Spec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bd99c45922_07780808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bd99c45922_07780808')) {function content_5746bd99c45922_07780808($_smarty_tpl) {?><div class="profile-sidebar-anchor">
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
</a> (<a id="profile-info-spec" href="#talents" class="spec tip">
                                <?php  $_smarty_tpl->tpl_vars['Spec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Spec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Specializations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Spec']->key => $_smarty_tpl->tpl_vars['Spec']->value) {
$_smarty_tpl->tpl_vars['Spec']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['Spec']->value['spec']==$_smarty_tpl->tpl_vars['Spec']->value['activespec']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['Spec']->value['Description'];?>

                                    <?php }?>
                                <?php } ?>
                            </a>) <span class="level"><strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
</strong></span> <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>

                        </div>
                        <div class="achievements"><a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement"><?php echo $_smarty_tpl->tpl_vars['Character']->value['apoints'];?>
</a></div>
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
