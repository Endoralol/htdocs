<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-03 12:18:02
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/character_profile_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201326580057501744287d31-86906062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bfaec288dab5cd1542bfa98378122f5a47dfead' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/character_profile_content.tpl',
      1 => 1464945481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201326580057501744287d31-86906062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575017442e2e00_27983187',
  'variables' => 
  array (
    'PageType' => 0,
    'Page' => 0,
    'Character' => 0,
    'Inventory' => 0,
    'CountItemLevel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575017442e2e00_27983187')) {function content_575017442e2e00_27983187($_smarty_tpl) {?><div class="profile-contents">
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

        <?php echo $_smarty_tpl->getSubTemplate ('blocks/profile_summary_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <span class="clear"><!-- --></span>
    </div>
</div>
<span class="clear"><!-- --></span><?php }} ?>
