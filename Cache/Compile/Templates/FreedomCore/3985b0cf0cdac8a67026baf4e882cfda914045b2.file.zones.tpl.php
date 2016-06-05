<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 12:58:47
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/zones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14317189205752a65702ced6-52295782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3985b0cf0cdac8a67026baf4e882cfda914045b2' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/zones.tpl',
      1 => 1464860667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14317189205752a65702ced6-52295782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'i' => 0,
    'Instances' => 0,
    'Instance' => 0,
    'PreviousGroupNumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752a657242e59_78766101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752a657242e59_78766101')) {function content_5752a657242e59_78766101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="/zone" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Zones_InstancesRaidsCMs');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div id="wiki" class="wiki directory wiki-zone">
                <div class="title">
                    <h2><?php echo $_smarty_tpl->getConfigVariable('Zones_InstancesRaidsCMs');?>
</h2>
                    <div class="desc"><?php echo $_smarty_tpl->getConfigVariable('Zones_InstancesRaidsCMs_Desc');?>
</div>
                </div>
                <div class="wrapper">
                    <div class="groups">
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<=5) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                                <div class="group" id="expansion-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="display: block;">
                                    <div class="group-column dungeon">
                                        <h3><?php echo $_smarty_tpl->getConfigVariable('Zones_Instances');?>
</h3>
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['Instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Instance']->key => $_smarty_tpl->tpl_vars['Instance']->value) {
$_smarty_tpl->tpl_vars['Instance']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['Instance']->value['expansion_required']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==1||$_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==2) {?>
                                                        <li>
                                                            <a href="/zone/<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
/" data-zone="<?php echo $_smarty_tpl->tpl_vars['Instance']->value['zone'];?>
">
                                                                <span class="zone-thumbnail thumb-<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
"></span>
                                                        <span class="level-range">
                                                                <?php if ($_smarty_tpl->tpl_vars['Instance']->value['min_level']!=$_smarty_tpl->tpl_vars['Instance']->value['max_level']) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['Instance']->value['min_level'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                <?php } else { ?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                <?php }?>
                                                        </span>

                                                        <span class="name">
                                                            <?php echo $_smarty_tpl->tpl_vars['Instance']->value['name'];?>

                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['heroic_possible']==1) {?>
                                                                <span class="icon-heroic-skull"></span>
                                                            <?php }?>
                                                        </span>
                                                                <span class="clear"><!-- --></span>
                                                            </a>
                                                        </li>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="group-column raid">
                                        <h3><?php echo $_smarty_tpl->getConfigVariable('Zones_Raids');?>
</h3>
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['Instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Instance']->key => $_smarty_tpl->tpl_vars['Instance']->value) {
$_smarty_tpl->tpl_vars['Instance']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['Instance']->value['expansion_required']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']>2&&$_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']<=10) {?>
                                                        <li>
                                                            <a href="/zone/<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
/" data-zone="<?php echo $_smarty_tpl->tpl_vars['Instance']->value['zone'];?>
">
                                                                <span class="zone-thumbnail thumb-<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
"></span>
                                                        <span class="level-range">
                                                                <?php if ($_smarty_tpl->tpl_vars['Instance']->value['min_level']!=$_smarty_tpl->tpl_vars['Instance']->value['max_level']) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['Instance']->value['min_level'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                <?php } else { ?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                <?php }?>
                                                        </span>

                                                        <span class="name">
                                                            <?php echo $_smarty_tpl->tpl_vars['Instance']->value['name'];?>

                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['heroic_possible']==1) {?>
                                                                <span class="icon-heroic-skull"></span>
                                                            <?php }?>
                                                        </span>
                                                                <span class="clear"><!-- --></span>
                                                            </a>
                                                        </li>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <span class="clear"><!-- --></span>
                                </div>
                            <?php } else { ?>
                                <div class="group" id="expansion-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="display: none;">
                                    <div class="group-column dungeon">
                                        <h3><?php echo $_smarty_tpl->getConfigVariable('Zones_Instances');?>
</h3>
                                        <ul>
                                            <?php $_smarty_tpl->tpl_vars['PreviousGroupNumber'] = new Smarty_variable(0, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['Instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Instance']->_loop = false;
 $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Instance']->key => $_smarty_tpl->tpl_vars['Instance']->value) {
$_smarty_tpl->tpl_vars['Instance']->_loop = true;
 $_smarty_tpl->tpl_vars['z']->value = $_smarty_tpl->tpl_vars['Instance']->key;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['Instance']->value['expansion_required']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['Instance']->value['in_group']==0) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==1||$_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==2) {?>
                                                            <li>
                                                                <a href="/zone/<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
/" data-zone="<?php echo $_smarty_tpl->tpl_vars['Instance']->value['zone'];?>
">
                                                                    <span class="zone-thumbnail thumb-<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
"></span>
                                                                    <span class="level-range">
                                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['min_level']!=$_smarty_tpl->tpl_vars['Instance']->value['max_level']) {?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['Instance']->value['min_level'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                            <?php } else { ?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                            <?php }?>
                                                                    </span>

                                                                    <span class="name">
                                                                        <?php echo $_smarty_tpl->tpl_vars['Instance']->value['name'];?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['Instance']->value['heroic_possible']==1) {?>
                                                                            <span class="icon-heroic-skull"></span>
                                                                        <?php }?>
                                                                    </span>
                                                                    <span class="clear"><!-- --></span>
                                                                </a>
                                                            </li>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['Instance']->value['in_group']!=$_smarty_tpl->tpl_vars['PreviousGroupNumber']->value) {?>
                                                            <li>
                                                                <span class="separator"><?php echo $_smarty_tpl->tpl_vars['Instance']->value['group_name'];?>
</span>
                                                            </li>
                                                            <?php $_smarty_tpl->tpl_vars['PreviousGroupNumber'] = new Smarty_variable($_smarty_tpl->tpl_vars['Instance']->value['in_group'], null, 0);?>
                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==1||$_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==2) {?>
                                                                <li>
                                                                    <a href="/zone/<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
/" data-zone="<?php echo $_smarty_tpl->tpl_vars['Instance']->value['zone'];?>
">
                                                                        <span class="zone-thumbnail thumb-<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
"></span>
                                                                    <span class="level-range">
                                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['min_level']!=$_smarty_tpl->tpl_vars['Instance']->value['max_level']) {?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['Instance']->value['min_level'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                            <?php } else { ?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                            <?php }?>
                                                                    </span>

                                                                    <span class="name">
                                                                        <?php echo $_smarty_tpl->tpl_vars['Instance']->value['name'];?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['Instance']->value['heroic_possible']==1) {?>
                                                                            <span class="icon-heroic-skull"></span>
                                                                        <?php }?>
                                                                    </span>
                                                                        <span class="clear"><!-- --></span>
                                                                    </a>
                                                                </li>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==1||$_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']==2) {?>
                                                                <li>
                                                                    <a href="/zone/<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
/" data-zone="<?php echo $_smarty_tpl->tpl_vars['Instance']->value['zone'];?>
">
                                                                        <span class="zone-thumbnail thumb-<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
"></span>
                                                                    <span class="level-range">
                                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['min_level']!=$_smarty_tpl->tpl_vars['Instance']->value['max_level']) {?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['Instance']->value['min_level'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                            <?php } else { ?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                            <?php }?>
                                                                    </span>

                                                                    <span class="name">
                                                                        <?php echo $_smarty_tpl->tpl_vars['Instance']->value['name'];?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['Instance']->value['heroic_possible']==1) {?>
                                                                            <span class="icon-heroic-skull"></span>
                                                                        <?php }?>
                                                                    </span>
                                                                        <span class="clear"><!-- --></span>
                                                                    </a>
                                                                </li>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="group-column raid">
                                        <h3><?php echo $_smarty_tpl->getConfigVariable('Zones_Raids');?>
</h3>
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['Instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Instance']->key => $_smarty_tpl->tpl_vars['Instance']->value) {
$_smarty_tpl->tpl_vars['Instance']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['Instance']->value['expansion_required']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']>2&&$_smarty_tpl->tpl_vars['Instance']->value['instance_type']['type']<=10) {?>
                                                        <li>
                                                            <a href="/zone/<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
/" data-zone="<?php echo $_smarty_tpl->tpl_vars['Instance']->value['zone'];?>
">
                                                                <span class="zone-thumbnail thumb-<?php echo $_smarty_tpl->tpl_vars['Instance']->value['link_name'];?>
"></span>
                                                        <span class="level-range">
                                                                <?php if ($_smarty_tpl->tpl_vars['Instance']->value['min_level']!=$_smarty_tpl->tpl_vars['Instance']->value['max_level']) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['Instance']->value['min_level'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                <?php } else { ?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['Instance']->value['max_level'];?>

                                                                <?php }?>
                                                        </span>

                                                        <span class="name">
                                                            <?php echo $_smarty_tpl->tpl_vars['Instance']->value['name'];?>

                                                            <?php if ($_smarty_tpl->tpl_vars['Instance']->value['heroic_possible']==1) {?>
                                                                <span class="icon-heroic-skull"></span>
                                                            <?php }?>
                                                        </span>
                                                                <span class="clear"><!-- --></span>
                                                            </a>
                                                        </li>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <span class="clear"><!-- --></span>
                                </div>
                            <?php }?>
                        <?php }} ?>
                    </div>
                    <ul class="navigation">
                        
                            
                                
                            
                        
                        
                            
                                
                            
                        
                        
                            
                                
                            
                        
                        <li>
                            <a href="javascript:;" id="nav-2" onclick="WikiDirectory.view(this, 2);" class="expansion-2">
                                Wrath of the Lich King
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" id="nav-1" onclick="WikiDirectory.view(this, 1);" class="expansion-1">
                                The Burning Crusade
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" id="nav-0" onclick="WikiDirectory.view(this, 0);" class="expansion-0 nav-active">
                                Classic
                            </a>
                        </li>
                    </ul>
                </div>
                <?php echo '<script'; ?>
 type="text/javascript">
                    //<![CDATA[
                    $(function() {
                        WikiDirectory.initialize(0);
                    });
                    //]]>
                <?php echo '</script'; ?>
>
                <span class="clear"><!-- --></span>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
