<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 12:30:04
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\account\pcs_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7046574ffc9c7d3ad5-29427110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f4dee083cefd83b38117ab80eef3ec3445be6d' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\account\\pcs_confirm.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7046574ffc9c7d3ad5-29427110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Account' => 0,
    'Template' => 0,
    'Character' => 0,
    'Service' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574ffc9c82f6e7_22139336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ffc9c82f6e7_22139336')) {function content_574ffc9c82f6e7_22139336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div class="dashboard service">
                <div class="primary">
                    <div  class="header">
                        <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_CS');?>
</h2>
                        <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PFC');?>
</h3>
                        <a href="/account/management/dashboard?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
"><img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game-icons/wowx5.png" alt="World of Warcraft" width="48" height="48" /></a>
                    </div>
                    <div class="service-wrapper">
                        <p class="service-nav">
                            <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PFC" class="active"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service');?>
</a>
                            <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PFC&amp;servicecat=history"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_History');?>
</a>
                            <a href="/account/management/dashboard?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Back_To_Account');?>
</a>
                        </p>
                        <div class="service-info">
                            <div class="service-tag">
                                <div class="service-tag-contents border-3">
                                    <div class="character-icon wow-portrait-64-80 wow-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
 glow-shadow-3">
                                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" width="64" height="64" alt="" />
                                    </div>
                                    <div class="service-tag-description">
                                        <span class="character-name caption">
                                            <?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>

                                        </span>
                                        <span class="character-class">
                                            <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>
 <?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
 <?php echo $_smarty_tpl->tpl_vars['Character']->value['race_data']['translation'];?>
 <?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['translation'];?>

                                        </span>
                                    </div>
                                    <span class="clear"><!-- --></span>
                                </div>
                            </div>
                            <div class="service-summary">
                                <p class="service-price headline"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Service']->value['price']);?>
 USD
                                </p>
                                <p class="service-memo"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Waiting_Time');?>
</p>
                            </div>
                        </div>
                        <div class="service-form">
                            <?php if ($_smarty_tpl->tpl_vars['Service']->value['name']=='pfc') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('account/service_confirm/faction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['Service']->value['name']=='prc') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('account/service_confirm/race.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['Service']->value['name']=='pcc') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('account/service_confirm/character.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['Service']->value['name']=='pnc') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('account/service_confirm/name.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php }?>
                        </div>
                        <span class="clear"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
