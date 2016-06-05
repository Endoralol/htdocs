<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:34:58
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_professions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188472049557503602c9a427-03744336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d8ef4c63334c5cb968546c2ef4328b5c816bb39' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_professions.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188472049557503602c9a427-03744336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Professions' => 0,
    'Profession' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57503602db2137_47918985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57503602db2137_47918985')) {function content_57503602db2137_47918985($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/game/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Game');?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/game/profession" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Professions');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div id="wiki" class="wiki directory wiki-profession">
                <div class="title">
                    <h2>
                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Professions');?>

                    </h2>
                    <div class="desc">
                        <?php echo $_smarty_tpl->getConfigVariable('Game_Professions_Header_Description');?>

                    </div>
                </div>
                <div class="grid-view">
                    <div class="grid-title">
                        <h2 class="header "><?php echo $_smarty_tpl->getConfigVariable('Game_Professions_Primary');?>
</h2>
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['Profession'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Profession']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Professions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Profession']->key => $_smarty_tpl->tpl_vars['Profession']->value) {
$_smarty_tpl->tpl_vars['Profession']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Profession']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['Profession']->value['is_primary']==1) {?>
                            <a  href="/game/profession/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
" class="grid <?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {
} else { ?>end<?php }?>">
                                <strong><?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_translation'];?>
</strong>
                                <span><?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_description'];?>
</span>
                            </a>
                        <?php }?>
                    <?php } ?>
                    <span class="clear"></span>
                    <div class="grid-title">
                        <h2 class="header "><?php echo $_smarty_tpl->getConfigVariable('Game_Professions_Secondary');?>
</h2>
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['Profession'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Profession']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Professions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Profession']->key => $_smarty_tpl->tpl_vars['Profession']->value) {
$_smarty_tpl->tpl_vars['Profession']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Profession']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['Profession']->value['is_primary']==0) {?>
                            <a  href="/game/profession/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
" class="grid <?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>end<?php }?>">
                                <strong><?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_translation'];?>
</strong>
                                <span><?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_description'];?>
</span>
                            </a>
                        <?php }?>
                    <?php } ?>
                    <span class="clear"></span>
                </div>
                <span class="clear"></span>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
