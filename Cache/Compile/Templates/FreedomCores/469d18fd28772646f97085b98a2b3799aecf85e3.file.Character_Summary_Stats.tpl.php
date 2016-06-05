<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:23:48
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/parts/Character_Summary_Stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134894717575017445b9db5-70301247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469d18fd28772646f97085b98a2b3799aecf85e3' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/parts/Character_Summary_Stats.tpl',
      1 => 1464860668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134894717575017445b9db5-70301247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ParryValue' => 0,
    'Character' => 0,
    'DodgeValue' => 0,
    'BlockValue' => 0,
    'Inventory' => 0,
    'CountItemLevel' => 0,
    'CalculateParryRating' => 0,
    'CalculateDodgeRating' => 0,
    'CalculateBlockRating' => 0,
    'StrengthValue' => 0,
    'ArmorValue' => 0,
    'CalculateCritRating' => 0,
    'HasteRatingMH' => 0,
    'HasteRatingOH' => 0,
    'HasteRatingR' => 0,
    'SpiritValue' => 0,
    'IntellectValue' => 0,
    'StaminaValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575017446cc007_68284066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575017446cc007_68284066')) {function content_575017446cc007_68284066($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['CalculateParryRating'] = new Smarty_variable($_smarty_tpl->tpl_vars['ParryValue']->value/$_smarty_tpl->tpl_vars['Character']->value['level_data']['parrypoints'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['CalculateDodgeRating'] = new Smarty_variable($_smarty_tpl->tpl_vars['DodgeValue']->value/$_smarty_tpl->tpl_vars['Character']->value['level_data']['parrypoints'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['CalculateBlockRating'] = new Smarty_variable($_smarty_tpl->tpl_vars['BlockValue']->value/$_smarty_tpl->tpl_vars['Character']->value['level_data']['parrypoints'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['CalculateCritRating'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['CritValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['critpoints'], null, 0);?>
<?php echo '<script'; ?>
 type="text/javascript">
    //<![CDATA[
    $(document).ready(function() {
        new Summary.Stats({
            "health": <?php echo $_smarty_tpl->tpl_vars['Character']->value['health'];?>
,
            "power": <?php echo $_smarty_tpl->tpl_vars['Character']->value['power_data']['value'];?>
,
            "powerTypeId": <?php echo $_smarty_tpl->tpl_vars['Character']->value['power_data']['id'];?>
,
            // Item Level Values
            "averageItemLevelEquipped": <?php echo $_smarty_tpl->tpl_vars['CountItemLevel']->value;?>
,
            "averageItemLevelBest": <?php echo $_smarty_tpl->tpl_vars['CountItemLevel']->value;?>
,
            // Parry Values
            "parryRating": <?php echo $_smarty_tpl->tpl_vars['ParryValue']->value;?>
,
            "parryRatingPercent": <?php echo $_smarty_tpl->tpl_vars['CalculateParryRating']->value;?>
,
            "parry": <?php echo $_smarty_tpl->tpl_vars['CalculateParryRating']->value;?>
,
            // Dodge Values
            "dodge": <?php echo $_smarty_tpl->tpl_vars['CalculateDodgeRating']->value;?>
,
            "dodgeRating": <?php echo $_smarty_tpl->tpl_vars['DodgeValue']->value;?>
,
            "dodgeRatingPercent": <?php echo $_smarty_tpl->tpl_vars['CalculateDodgeRating']->value;?>
,
            // Block Values
            "block": <?php echo $_smarty_tpl->tpl_vars['CalculateBlockRating']->value;?>
,
            "blockRating": <?php echo $_smarty_tpl->tpl_vars['BlockValue']->value;?>
,
            "blockRatingPercent": <?php echo $_smarty_tpl->tpl_vars['CalculateBlockRating']->value;?>
,
            "str_block": <?php echo $_smarty_tpl->tpl_vars['StrengthValue']->value/2;?>
,
            "block_damage": 0,
            // Armor Values
            "armorBase": 0, // Need to be revised, havent done it yet
            "armorPercent": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['DamageReduction'];?>
,
            "armorTotal": <?php echo $_smarty_tpl->tpl_vars['ArmorValue']->value;?>
,
            // Crit Values
            <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['OffHandSpeed']!=0) {?>
            "critPercent": <?php echo $_smarty_tpl->tpl_vars['CalculateCritRating']->value;?>
,
            <?php } else { ?>
            "critPercent": <?php echo $_smarty_tpl->tpl_vars['CalculateCritRating']->value/1.8;?>
,
            <?php }?>
            "critRatingPercent": <?php echo $_smarty_tpl->tpl_vars['CalculateCritRating']->value;?>
,
            "critRating": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['CritValue'];?>
,
            // Speed Values
            "speedRatingBonus": 0,
            "speedRating": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue'];?>
,
            "dmgMainSpeed": <?php echo $_smarty_tpl->tpl_vars['HasteRatingMH']->value;?>
,
            <?php if (isset($_smarty_tpl->tpl_vars['HasteRatingOH']->value)) {?>
            "dmgOffSpeed": <?php echo $_smarty_tpl->tpl_vars['HasteRatingOH']->value;?>
,
            <?php } else { ?>
            "dmgOffSpeed": -1,
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['HasteRatingR']->value)) {?>
            "dmgRangeSpeed": <?php echo $_smarty_tpl->tpl_vars['HasteRatingR']->value;?>
,
            <?php } else { ?>
            "dmgRangeSpeed": -1,
            <?php }?>
            // Attack Power Values
            "atkPowerBase": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['AttackPower'];?>
,
            "atkPowerTotal": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['AttackPower'];?>
,
            "atkPowerLoss": 0,
            "atkPowerBonus": 0,
            "str_ap": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['AttackPower'];?>
,
            // Haste Values
            "spellHaste": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'];?>
,
            "rangedHaste": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'];?>
,
            "spellHasteRatingPercent": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'];?>
,
            "haste": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'];?>
,
            "hasteRatingPercent": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'];?>
,
            "rangedHasteRatingPercent": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'];?>
,
            "hasteRating": <?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue'];?>
,
            // Main Stats Values
            "sprTotal": <?php echo $_smarty_tpl->tpl_vars['SpiritValue']->value;?>
,
            "sprBase": <?php echo $_smarty_tpl->tpl_vars['Character']->value['level_data']['spi'];?>
,
            "spr_regen": 0,
            "strBase": <?php echo $_smarty_tpl->tpl_vars['Character']->value['level_data']['str'];?>
,
            "strTotal": <?php echo $_smarty_tpl->tpl_vars['StrengthValue']->value;?>
,
            "str_block": <?php echo $_smarty_tpl->tpl_vars['StrengthValue']->value/2;?>
,
            "intTotal": <?php echo $_smarty_tpl->tpl_vars['IntellectValue']->value;?>
,
            "staTotal": <?php echo $_smarty_tpl->tpl_vars['StaminaValue']->value;?>
,
            "intBase": <?php echo $_smarty_tpl->tpl_vars['Character']->value['level_data']['inte'];?>
,
            "staBase": <?php echo $_smarty_tpl->tpl_vars['Character']->value['level_data']['sta'];?>
,
            "sta_hp": <?php echo $_smarty_tpl->tpl_vars['Character']->value['health'];?>
,
        });
    });
    //]]>
<?php echo '</script'; ?>
><?php }} ?>
