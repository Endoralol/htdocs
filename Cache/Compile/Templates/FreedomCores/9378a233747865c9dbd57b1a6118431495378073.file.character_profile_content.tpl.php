<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:10:49
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_profile_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11707517315746bd99c98368-71984234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9378a233747865c9dbd57b1a6118431495378073' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_profile_content.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11707517315746bd99c98368-71984234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PageType' => 0,
    'Page' => 0,
    'Character' => 0,
    'Inventory' => 0,
    'CountItemLevel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bd99cf0804_33372585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bd99cf0804_33372585')) {function content_5746bd99cf0804_33372585($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/u0198439/data/www/pt-wow.ru/Core/Libraries/Smarty/plugins/modifier.date_format.php';
?><div class="profile-contents">
    <div class="summary-top">
        <div class="summary-top-right">
            <ul class="profile-view-options" id="profile-view-options-summary">
                <li <?php if ($_smarty_tpl->tpl_vars['PageType']->value=='advanced'||$_smarty_tpl->tpl_vars['Page']->value['type']=='') {?>class="current"<?php }?>>
                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/advanced" rel="np" class="advanced">
                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Advanced');?>

                    </a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['PageType']->value=='simple') {?>class="current"<?php }?>>
                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/simple" rel="np" class="simple">
                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Simple');?>

                    </a>
                </li>
            </ul>
            <div class="summary-averageilvl">
                <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['EquippedItems']==0) {?>
                    <?php $_smarty_tpl->tpl_vars['CountItemLevel'] = new Smarty_variable(0, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['CountItemLevel'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['TotalItemLevel']/$_smarty_tpl->tpl_vars['Inventory']->value['EquippedItems'], null, 0);?>
                <?php }?>
                <div class="rest">
                    <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Average_Level');?>
<br />
                    (<span class="equipped"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['CountItemLevel']->value);?>
</span> <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Equipped_Level');?>
)
                </div>
                <div id="summary-averageilvl-best" class="best tip" data-id="averageilvl">
                    <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['CountItemLevel']->value);?>

                </div>
            </div>
        </div>
        <div class="summary-top-inventory">
            <div id="summary-inventory" class="summary-inventory summary-inventory-advanced">
                <div id="3DModel" style="width: 50%; margin: 0 auto; pointer-events: none;"></div>
                <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_inventory_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_inventory_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_inventory_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
    <div class="summary-bottom">
        <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_summary_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_summary_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <span class="clear"><!-- --></span>
        <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_sub_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <span class="clear"><!-- --></span>
        <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_raid_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <span class="clear"><!-- --></span>
        <div class="summary-lastupdate">
            <?php echo $_smarty_tpl->getConfigVariable('Character_Last_Update');?>
 <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y %H:%M:%S");?>

        </div>
    </div>
</div>
<span class="clear"><!-- --></span><?php }} ?>
