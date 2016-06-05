<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:15:33
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\blocks\character_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21703574f4265043207-87118541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb103b01237b4cfdde06b7dfb424387bf4286b82' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\blocks\\character_sidebar.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21703574f4265043207-87118541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Page' => 0,
    'SelectedCategory' => 0,
    'Character' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f426505f801_12121248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f426505f801_12121248')) {function content_574f426505f801_12121248($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='profile_page') {?>
    <li id="show3dmodel">
        <a href="javascript:;" onclick="Load3DModel(true);">
            <?php echo $_smarty_tpl->getConfigVariable('Character_LoadTDModel');?>

        </a>
    </li>

    <li id="hide3dmodel" style="display:none">
        <a href="javascript:;" onclick="Load3DModel(false);">
            <?php echo $_smarty_tpl->getConfigVariable('Character_HideTDModel');?>

        </a>
    </li>
<?php }?>

<li <?php if ($_smarty_tpl->tpl_vars['SelectedCategory']->value=='advanced') {?>class=" active"<?php }?>>
    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Information');?>

            </span>
        </span>
    </a>
</li>
<li <?php if ($_smarty_tpl->tpl_vars['SelectedCategory']->value=='events') {?>class=" active"<?php }?>>
    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/events" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                <?php echo $_smarty_tpl->getConfigVariable('Game_Events');?>

            </span>
        </span>
    </a>
</li>
<li <?php if ($_smarty_tpl->tpl_vars['SelectedCategory']->value=='achievement') {?>class=" active"<?php }?>>
    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/achievement" class="has-submenu" rel="np">
        <span class="arrow">
            <span class="icon">
                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Achievements');?>

            </span>
        </span>
    </a>
</li>
<li <?php if ($_smarty_tpl->tpl_vars['SelectedCategory']->value=='profession') {?>class=" active"<?php }?>>
    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/profession" class="has-submenu" rel="np">
        <span class="arrow">
            <span class="icon">
                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Professions');?>

            </span>
        </span>
    </a>
</li>
<li <?php if ($_smarty_tpl->tpl_vars['SelectedCategory']->value=='reputation') {?>class=" active"<?php }?>>
    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/reputation/" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Reputation');?>

            </span>
        </span>
    </a>
</li>
<li <?php if ($_smarty_tpl->tpl_vars['SelectedCategory']->value=='feed') {?>class=" active"<?php }?>>
    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/feed" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Feed');?>

            </span>
        </span>
    </a>
</li>
<li <?php if ($_smarty_tpl->tpl_vars['SelectedCategory']->value=='pvp') {?>class=" active"<?php }?>>
    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/pvp" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                PvP
            </span>
        </span>
    </a>
</li>
<li>
    <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
/?character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
" class=" has-submenu" rel="np">
        <span class="arrow">
            <span class="icon">
                <?php echo $_smarty_tpl->getConfigVariable('Community_Guild');?>

            </span>
        </span>
    </a>
</li><?php }} ?>
