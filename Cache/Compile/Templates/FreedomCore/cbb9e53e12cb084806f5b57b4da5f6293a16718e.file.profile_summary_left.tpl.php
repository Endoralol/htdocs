<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:23:01
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/profile_summary_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158385977657521f65ae8137-69417573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbb9e53e12cb084806f5b57b4da5f6293a16718e' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/profile_summary_left.tpl',
      1 => 1464944495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158385977657521f65ae8137-69417573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Character' => 0,
    'Inventory' => 0,
    'StrengthValue' => 0,
    'AgilityValue' => 0,
    'IntellectValue' => 0,
    'SpiritValue' => 0,
    'StaminaValue' => 0,
    'HasteRatingMH' => 0,
    'HasteRatingOH' => 0,
    'HasteRatingR' => 0,
    'ArmorValue' => 0,
    'DodgeValue' => 0,
    'ParryValue' => 0,
    'BlockValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57521f65c353d0_83662671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57521f65c353d0_83662671')) {function content_57521f65c353d0_83662671($_smarty_tpl) {?><div class="summary-bottom-left">
    <div class="summary-health-resource">
        <ul>
            <li class="health" id="summary-health" data-id="health">
                <span class="name">Здоровье</span>
                <span class="value">
                    <?php echo $_smarty_tpl->tpl_vars['Character']->value['health'];?>

                </span>
            </li>
            <li class="resource-<?php echo $_smarty_tpl->tpl_vars['Character']->value['power_data']['id'];?>
" id="summary-power" data-id="power-<?php echo $_smarty_tpl->tpl_vars['Character']->value['power_data']['id'];?>
">
                <span class="name"><?php echo $_smarty_tpl->tpl_vars['Character']->value['power_data']['translation'];?>
</span>
                <span class="value">
                        <?php echo $_smarty_tpl->tpl_vars['Character']->value['power_data']['value'];?>

                </span>
            </li>
        </ul>
    </div>
    <?php $_smarty_tpl->tpl_vars['StrengthValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['StrengthValue']+$_smarty_tpl->tpl_vars['Character']->value['level_data']['str'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['AgilityValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['AgilityValue']+$_smarty_tpl->tpl_vars['Character']->value['level_data']['agi'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['IntellectValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['IntellectValue']+$_smarty_tpl->tpl_vars['Character']->value['level_data']['inte'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['StaminaValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['StaminaValue']+$_smarty_tpl->tpl_vars['Character']->value['level_data']['sta'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['SpiritValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['SpiritValue']+$_smarty_tpl->tpl_vars['Character']->value['level_data']['spi'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['ArmorValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['ArmorValue'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['ParryValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['ParryValue'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['DodgeValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['DodgeValue'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['BlockValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['Inventory']->value['BlockValue'], null, 0);?>
    <div class="summary-stats-profs-bgs">

        <div class="summary-stats" id="summary-stats">
            <div id="summary-stats-simple" class="summary-stats-simple" style=" display: block">
                <div class="summary-stats-simple-base">
                    <div class="summary-stats-column">
                        <h4><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Main');?>
</h4>
                        <ul>
                            <li data-id="strength" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Strength');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['StrengthValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="agility" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Agility');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['AgilityValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="intellect" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Intellect');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['IntellectValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="spirit" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Spirit');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['SpiritValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="stamina" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Stamina');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['StaminaValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>


                    <div class="summary-stats-column">
                        <h4>Атака</h4>
                        <ul>
                            <li data-id="attackdamage" class="">
                                <span class="name">Урон</span>
                                <span class="value">6850–7527</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="attackpower" class="">
                                <span class="name">Сила атаки</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['Inventory']->value['AttackPower'];?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="attackspeed" class="">
                                <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['MainHandSpeed']!=0) {?>
                                    <?php $_smarty_tpl->tpl_vars['HasteRatingMH'] = new Smarty_variable(($_smarty_tpl->tpl_vars['Inventory']->value['MainHandSpeed']/1000)/(($_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'])/100+1), null, 0);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['OffHandSpeed']!=0) {?>
                                    <?php $_smarty_tpl->tpl_vars['HasteRatingOH'] = new Smarty_variable(($_smarty_tpl->tpl_vars['Inventory']->value['OffHandSpeed']/1000)/(($_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'])/100+1), null, 0);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['OffHandSpeed']!=0) {?>
                                    <?php $_smarty_tpl->tpl_vars['HasteRatingR'] = new Smarty_variable(($_smarty_tpl->tpl_vars['Inventory']->value['RangedSpeed']/1000)/(($_smarty_tpl->tpl_vars['Inventory']->value['HasteValue']/$_smarty_tpl->tpl_vars['Character']->value['level_data']['hastepoints'])/100+1), null, 0);?>
                                <?php }?>

                                <span class="name">Скорость атаки</span>
                                <span class="value">
                                    <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['MainHandSpeed']!=0&&$_smarty_tpl->tpl_vars['Inventory']->value['RangedSpeed']==0) {?>
                                        <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['HasteRatingMH']->value);?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['OffHandSpeed']!=0&&$_smarty_tpl->tpl_vars['Inventory']->value['RangedSpeed']==0) {?>
                                        /<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['HasteRatingOH']->value);?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['Inventory']->value['RangedSpeed']!=0) {?>
                                        <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['HasteRatingR']->value);?>

                                    <?php }?>

                                </span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>


                    <div class="summary-stats-column">
                        <h4>Заклинания</h4>
                        <ul>
                            <li data-id="spellpower" class="">
                                <span class="name">Сила заклинаний</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['Inventory']->value['SpellPowerValue'];?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="manaregen" class=" no-tooltip">
                                <span class="name">Восполнение маны</span>
                                <span class="value color-q0">--</span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="summary-stats-simple-other">


                    <div class="summary-stats-column">
                        <h4>Защита</h4>
                        <ul>
                            <li data-id="armor" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Item_Class_Armor');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['ArmorValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="dodge" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Dodge');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['DodgeValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="parry" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Parry');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['ParryValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="block" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Block');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['BlockValue']->value;?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>


                    <div class="summary-stats-column">
                        <h4>Усиления</h4>
                        <ul>
                            <li data-id="crit" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Crit');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['Inventory']->value['CritValue'];?>
</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="haste" class="">
                                <span class="name"><?php echo $_smarty_tpl->getConfigVariable('Character_Stat_Haste');?>
</span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['Inventory']->value['HasteValue'];?>
</span>
                                <span class="clear"><!-- --></span>
                        </ul>
                    </div>
                </div>
                <div class="summary-stats-end"></div>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("parts/Character_Summary_Stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("parts/MSG_Summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </div>
</div><?php }} ?>
