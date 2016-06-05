<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 22:33:59
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/service_confirm/faction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173268413857508a2796d0a3-54130316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5770d540dc219a4cbe1b20d0a58e3a5a27a79d3' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/service_confirm/faction.tpl',
      1 => 1464860670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173268413857508a2796d0a3-54130316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Character' => 0,
    'Template' => 0,
    'NewFaction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57508a27a084a1_63402750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57508a27a084a1_63402750')) {function content_57508a27a084a1_63402750($_smarty_tpl) {?><div class="service-interior light">
    <h3 class="headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Confirm_Changes');?>
:</h3>
    <div class="confirm-service">
        <span class="confirm-service-label" style="line-height:40px;"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction');?>
:</span>
        <?php $_smarty_tpl->tpl_vars['NewFaction'] = new Smarty_variable('', null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['Character']->value['side_id']==1) {?>
            <span class="confirm-service-details" style="line-height:40px;">
                                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/services/wow/alliance_banner.png" alt="" />
                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction_Alliance');?>

                <?php $_smarty_tpl->tpl_vars['NewFaction'] = new Smarty_variable($_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction_Alliance'), null, 0);?>
                                        </span>
        <?php } else { ?>
            <span class="confirm-service-details" style="line-height:40px;">
                                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/services/wow/horde_banner.png" alt="" />
                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction_Horde');?>

                <?php $_smarty_tpl->tpl_vars['NewFaction'] = new Smarty_variable($_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction_Horde'), null, 0);?>
                                        </span>
        <?php }?>
        <span class="clear"></span>
        <span class="confirm-service-label pad-bottom"><?php echo $_smarty_tpl->getConfigVariable('Race');?>
:</span>
                                    <span class="confirm-service-details">
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_New_Faction_LogInToChange_Title');?>
<br />
                                        <em>
                                            <?php echo sprintf($_smarty_tpl->getConfigVariable('Account_Management_Payment_New_Race_Help'),$_smarty_tpl->tpl_vars['NewFaction']->value,$_smarty_tpl->tpl_vars['Character']->value['class_data']['translation']);?>

                                        </em>
                                    </span>
    </div>
    <span class="clear"></span>
    <?php echo $_smarty_tpl->getSubTemplate ('account/service_confirm/proceed_to_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
