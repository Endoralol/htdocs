<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:11:32
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/zone_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8625158395746bdc4496029-74064338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9362df912789cf43728976715599e65b2fa40dfb' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/zone_tooltip.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8625158395746bdc4496029-74064338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bdc4573729_71982475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bdc4573729_71982475')) {function content_5746bdc4573729_71982475($_smarty_tpl) {?><div class="wiki-tooltip">
    <span class="icon-frame frame-36 zone-thumbnail thumb-<?php echo $_smarty_tpl->tpl_vars['Zone']->value['link_name'];?>
"></span>
    <h3>
		<span class="float-right color-q0">
            <?php if ($_smarty_tpl->tpl_vars['Zone']->value['min_level']==$_smarty_tpl->tpl_vars['Zone']->value['max_level']) {?>
                <?php echo $_smarty_tpl->getConfigVariable('Zones_Level');?>
 <?php echo $_smarty_tpl->tpl_vars['Zone']->value['min_level'];?>
 <?php if ($_smarty_tpl->tpl_vars['Zone']->value['heroic_level_required']!=0) {?> (<?php echo $_smarty_tpl->tpl_vars['Zone']->value['heroic_level_required'];?>
<span class="icon-heroic-skull"/>)<?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getConfigVariable('Zones_Level');?>
 <?php echo $_smarty_tpl->tpl_vars['Zone']->value['min_level'];?>
–<?php echo $_smarty_tpl->tpl_vars['Zone']->value['max_level'];?>
 <?php if ($_smarty_tpl->tpl_vars['Zone']->value['heroic_level_required']!=0) {?> (<?php echo $_smarty_tpl->tpl_vars['Zone']->value['heroic_level_required'];?>
<span class="icon-heroic-skull"/>)<?php }?>
            <?php }?>

        </span>
        <?php echo $_smarty_tpl->tpl_vars['Zone']->value['name'];?>

    </h3>
    <span class="expansion-name color-ex<?php echo $_smarty_tpl->tpl_vars['Zone']->value['expansion_required']['expansion'];?>
">
        <?php echo $_smarty_tpl->getConfigVariable('Expansion_Required');?>
 <?php echo $_smarty_tpl->tpl_vars['Zone']->value['expansion_required']['translation'];?>

    </span>
    <?php if ($_smarty_tpl->tpl_vars['Zone']->value['heroic_level_required']==85) {?>
        <br />
        <span class="expansion-name color-ex3">
            <?php echo $_smarty_tpl->getConfigVariable('Zones_Heroic_Cata');?>

        </span>
    <?php } elseif ($_smarty_tpl->tpl_vars['Zone']->value['heroic_level_required']==90) {?>
        <br />
        <span class="expansion-name color-ex4">
            <?php echo $_smarty_tpl->getConfigVariable('Zones_Heroic_MoP');?>

        </span>
    <?php }?>

    <div class="color-tooltip-yellow">
        <?php echo $_smarty_tpl->tpl_vars['Zone']->value['tooltip_description'];?>

    </div>
    <ul class="item-specs">
        <li>
            <span class="color-tooltip-yellow"><?php echo $_smarty_tpl->getConfigVariable('Type');?>
:</span>
            <?php echo $_smarty_tpl->tpl_vars['Zone']->value['instance_type']['translation'];?>

            <?php if ($_smarty_tpl->tpl_vars['Zone']->value['heroic_possible']) {?>
            (<?php echo $_smarty_tpl->getConfigVariable('Zones_Heroic');?>
)
            <span class="icon-heroic-skull"></span>
            <?php }?>
        </li>
        <li>
            <span class="color-tooltip-yellow"><?php echo $_smarty_tpl->getConfigVariable('Zones_Place');?>
:</span>
            <?php echo $_smarty_tpl->tpl_vars['Zone']->value['zone_name'];?>

        </li>
    </ul>
</div><?php }} ?>
