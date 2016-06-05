<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-03 12:17:03
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/character_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95153332557501744230db9-46667682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50da2041a3e0d5acdeecb1024278811d70dd5ada' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/character_sidebar.tpl',
      1 => 1464945420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95153332557501744230db9-46667682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57501744281ea4_59277026',
  'variables' => 
  array (
    'Page' => 0,
    'SelectedCategory' => 0,
    'Character' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57501744281ea4_59277026')) {function content_57501744281ea4_59277026($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Page']->value['bodycss']=='profile_page') {?>
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
