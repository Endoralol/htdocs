<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:11:22
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/item_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557387135746bdbade2b19-70358240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f762812d6aba8d4fdeaa2b9304f0c527204fba62' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/item_tooltip.tpl',
      1 => 1445441738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557387135746bdbade2b19-70358240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ItemInfoPage' => 0,
    'Item' => 0,
    'DPS' => 0,
    'i' => 0,
    'StatName' => 0,
    'StatValue' => 0,
    'StatTranslation' => 0,
    'SocketColor' => 0,
    'Socket' => 0,
    'SpellTranslation' => 0,
    'SpellData' => 0,
    'ItemName' => 0,
    'SetBonus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bdbb0f9e46_28824322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bdbb0f9e46_28824322')) {function content_5746bdbb0f9e46_28824322($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['ItemInfoPage']->value)) {?>

<div class="wiki-tooltip">
		<span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/<?php echo $_smarty_tpl->tpl_vars['Item']->value['icon'];?>
.jpg");'>
		</span>
    <h3 class="color-q<?php echo $_smarty_tpl->tpl_vars['Item']->value['Quality'];?>
"><?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
</h3>
    <?php }?>
    <ul class="item-specs" style="margin: 0">
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['Quality']!=5) {?>
            <?php if ($_smarty_tpl->tpl_vars['Item']->value['ItemLevel']==277||$_smarty_tpl->tpl_vars['Item']->value['ItemLevel']==284) {?>
                <li style="color:#00ff00"><?php echo $_smarty_tpl->getConfigVariable('Item_Heroic');?>
</li>
            <?php }?>
        <?php }?>
        <li class="color-tooltip-yellow"><?php echo $_smarty_tpl->getConfigVariable('Item_ItemLevel');?>
 <?php echo $_smarty_tpl->tpl_vars['Item']->value['ItemLevel'];?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['bonding']!=0) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['Item']->value['bond_translation'];?>
</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['InventoryType']!=0) {?>
            <li>
                <?php if ($_smarty_tpl->tpl_vars['Item']->value['subclass']['subclass']!=0) {?>
                    <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['Item']->value['subclass']['translation'];?>
</span>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['Item']->value['it_translation'];?>

            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['delay']!=0) {?>
            <li>
                <span class="float-right"><?php echo $_smarty_tpl->getConfigVariable('Item_Attack_Speed');?>
 <?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['Item']->value['delay']/1000));?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['Item']->value['dmg_min1']!=0) {?>
                    <?php echo $_smarty_tpl->tpl_vars['Item']->value['dmg_min1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Item']->value['dmg_max1'];?>

                    <?php $_smarty_tpl->tpl_vars['DPS'] = new Smarty_variable(($_smarty_tpl->tpl_vars['Item']->value['dmg_min1']+$_smarty_tpl->tpl_vars['Item']->value['dmg_max1'])/2/($_smarty_tpl->tpl_vars['Item']->value['delay']/1000), null, 0);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['Item']->value['dmg_min2']!=0) {?>
                    <?php echo $_smarty_tpl->tpl_vars['Item']->value['dmg_min2'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Item']->value['dmg_max2'];?>

                    <?php $_smarty_tpl->tpl_vars['DPS'] = new Smarty_variable(($_smarty_tpl->tpl_vars['Item']->value['dmg_min2']+$_smarty_tpl->tpl_vars['Item']->value['dmg_max2'])/2/($_smarty_tpl->tpl_vars['Item']->value['delay']/1000), null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Item']->value['dmg_min1']!=0&&$_smarty_tpl->tpl_vars['Item']->value['dmg_max1']!=0) {?>
                    <?php echo $_smarty_tpl->getConfigVariable('Item_Damage');?>

                <?php }?>
            </li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['DPS']->value)) {?>
            <li>
                (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['DPS']->value);?>
 <?php echo $_smarty_tpl->getConfigVariable('Item_DPS');?>
)
            </li>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=10) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=10; $_smarty_tpl->tpl_vars['i']->value++) {
?>
            <?php $_smarty_tpl->tpl_vars['StatName'] = new Smarty_variable(('stat_type').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['StatValue'] = new Smarty_variable(('stat_value').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['StatTranslation'] = new Smarty_variable(('stat_translation').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatName']->value])) {?>
                <?php if ($_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatName']->value]!=0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value<3) {?>
                        <li id="stat-<?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatName']->value];?>
" >
                            +<?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatValue']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatTranslation']->value];?>

                        </li>
                    <?php } else { ?>
                        <li id="stat-<?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatName']->value];?>
" class="color-tooltip-green">
                            +<?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatValue']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['StatTranslation']->value];?>

                        </li>
                    <?php }?>
                <?php }?>
            <?php }?>
        <?php }} ?>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['socketColor_1']!=0) {?>
            <li>
                <ul class="item-specs">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=3) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=3; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        <?php $_smarty_tpl->tpl_vars['SocketColor'] = new Smarty_variable(('socketColor_').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['Socket'] = new Smarty_variable(('socket').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SocketColor']->value]!=0) {?>
                            <li class="color-d<?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['Socket']->value]['subclass'];?>
">
                        <span class="icon-socket socket-<?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SocketColor']->value];?>
">
                                <span class="empty"></span>
                                <span class="frame"></span>
                        </span>
                                <?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['Socket']->value]['translation'];?>

                                <span class="clear"><!-- --></span>
                            </li>
                        <?php }?>
                    <?php }} ?>
                    <?php if ($_smarty_tpl->tpl_vars['Item']->value['socketBonus']!=0) {?>
                        <li class="color-d4"><?php echo $_smarty_tpl->getConfigVariable('Item_On_Socket_Match');?>
  <?php if ($_smarty_tpl->tpl_vars['Item']->value['socketBonusDescription']!='') {
echo $_smarty_tpl->tpl_vars['Item']->value['socketBonusDescription'];
} else {
echo $_smarty_tpl->tpl_vars['Item']->value['socketBonus'];
}?></li>
                    <?php }?>
                </ul>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['spellid_1']!=0) {?>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=3) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=3; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <?php $_smarty_tpl->tpl_vars['SpellID'] = new Smarty_variable(('spellid_').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['SpellData'] = new Smarty_variable(('spell_data').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['SpellTranslation'] = new Smarty_variable(('spt_translation').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SpellTranslation']->value])) {?>
                    <li class="color-q2 item-spec-group">
                        <?php if (!isset($_smarty_tpl->tpl_vars['ItemInfoPage']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SpellTranslation']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SpellData']->value]['Description'];?>

                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SpellData']->value]['Description']!='') {?>
                                <span class="tip" data-spell="<?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SpellData']->value]['SpellID'];?>
" data-spell-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['entry'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SpellTranslation']->value];?>

                                    <?php echo $_smarty_tpl->tpl_vars['Item']->value[$_smarty_tpl->tpl_vars['SpellData']->value]['Description'];?>

                                </span>
                            <?php }?>
                        <?php }?>
                    </li>
                <?php }?>
            <?php }} ?>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['Item']->value['itemsetinfo'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['Item']->value['itemsetinfo']['itemsinset']>0) {?>
                <li>
                    <ul class="item-specs">
                        <li class="color-tooltip-yellow"><?php echo $_smarty_tpl->tpl_vars['Item']->value['itemsetinfo']['name_loc0'];?>
 (0/<?php echo $_smarty_tpl->tpl_vars['Item']->value['itemsetinfo']['itemsinset'];?>
)</li>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=10) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=10; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <?php $_smarty_tpl->tpl_vars['ItemName'] = new Smarty_variable(('item').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['Item']->value['itemsetinfo'][$_smarty_tpl->tpl_vars['ItemName']->value]!=0) {?>
                                <li class="indent">
                                    <a class="color-d4 tip" href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['itemsetinfo'][$_smarty_tpl->tpl_vars['ItemName']->value]['entry'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['itemsetinfo'][$_smarty_tpl->tpl_vars['ItemName']->value]['entry'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['Item']->value['itemsetinfo'][$_smarty_tpl->tpl_vars['ItemName']->value]['name'];?>

                                    </a>
                                </li>
                            <?php }?>
                        <?php }} ?>
                        <li class="indent-top"> </li>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<=7) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=7; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <?php $_smarty_tpl->tpl_vars['SetBonus'] = new Smarty_variable(('setbonus').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                            <?php if (isset($_smarty_tpl->tpl_vars['Item']->value['itemsetinfo'][$_smarty_tpl->tpl_vars['SetBonus']->value])) {?>
                                <li class="color-d4">
                                    <?php echo $_smarty_tpl->tpl_vars['Item']->value['itemsetinfo'][$_smarty_tpl->tpl_vars['SetBonus']->value];?>

                                </li>
                            <?php }?>
                        <?php }} ?>
                    </ul>
                </li>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Item']->value['class']['class']!=15&&$_smarty_tpl->tpl_vars['Item']->value['subclass']['subclass']!=5) {?>
            <?php if ($_smarty_tpl->tpl_vars['Item']->value['description']!='') {?>
                <li class="color-tooltip-yellow">
                    "<?php echo $_smarty_tpl->tpl_vars['Item']->value['description'];?>
"
                </li>
            <?php }?>
        <?php }?>
        <li>
            <ul class="item-specs">
                <?php if ($_smarty_tpl->tpl_vars['Item']->value['MaxDurability']!=0) {?>
                    <li><?php echo $_smarty_tpl->getConfigVariable('Item_Durability');?>
 <?php echo $_smarty_tpl->tpl_vars['Item']->value['MaxDurability'];?>
 / <?php echo $_smarty_tpl->tpl_vars['Item']->value['MaxDurability'];?>
</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Item']->value['RequiredLevel']!=0) {?>
                    <li><?php echo $_smarty_tpl->getConfigVariable('Item_Required_Level');?>
 <?php echo $_smarty_tpl->tpl_vars['Item']->value['RequiredLevel'];?>
</li>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['Item']->value['SellPrice'])) {?>
                    <li>
                        <?php echo $_smarty_tpl->getConfigVariable('Item_SellPrice');?>
:
                        <?php if (isset($_smarty_tpl->tpl_vars['Item']->value['SellPrice']['gold'])) {?>
                            <span class="icon-gold"><?php echo $_smarty_tpl->tpl_vars['Item']->value['SellPrice']['gold'];?>
</span>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['Item']->value['SellPrice']['silver'])) {?>
                            <span class="icon-silver"><?php echo $_smarty_tpl->tpl_vars['Item']->value['SellPrice']['silver'];?>
</span>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['Item']->value['SellPrice']['copper'])) {?>
                            <span class="icon-copper"><?php echo $_smarty_tpl->tpl_vars['Item']->value['SellPrice']['copper'];?>
</span>
                        <?php }?>
                    </li>
                <?php }?>
            </ul>
        </li>
    </ul>

    <span class="clear"><!-- --></span>
    <?php if (!isset($_smarty_tpl->tpl_vars['ItemInfoPage']->value)) {?>
</div>
<?php }?><?php }} ?>
