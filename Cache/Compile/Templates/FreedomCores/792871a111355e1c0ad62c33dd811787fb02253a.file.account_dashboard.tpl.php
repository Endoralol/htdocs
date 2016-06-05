<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 23:46:34
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1430013417574760aac97699-34099374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '792871a111355e1c0ad62c33dd811787fb02253a' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/account/account_dashboard.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1430013417574760aac97699-34099374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Account' => 0,
    'Template' => 0,
    'PEx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574760aad7c478_14285562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574760aad7c478_14285562')) {function content_574760aad7c478_14285562($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div class="dashboard wowx<?php echo $_smarty_tpl->tpl_vars['Account']->value['expansion'];?>
 eu">
                <div class="primary">
                    <div class="header">
                        <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Game_Management');?>
</h2>
                        <h3 class="headline">World of Warcraft®: <?php echo $_smarty_tpl->tpl_vars['Account']->value['expansion_name'];?>
™</h3>
                        <a href="/account/management/dashboard?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
">
                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game-icons/wowx5.png" title="" width="48" height="48" />
                        </a>
                    </div>
                    <div class="account-summary">
                        <div class="account-management">
                            <div class="section box-art" id="box-art">
                                <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/products/box-art/WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['expansion'];?>
.png" alt="World of Warcraft" title="" width="242" height="288" id="box-img" />
                            </div>
                            <div class="section account-details">
                                <dl>
                                    <dt class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management');?>
</dt>
                                    <dd class="account-name">WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
</dd>
                                    <dt class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Account_Status');?>
</dt>
                                    <dd class="account-status">
                                        <strong class="active"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Account_Status_Active');?>
</strong>
                                    </dd>
                                    <dt class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Game_Time');?>
</dt>
                                    <dd class="account-time">
                                        <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Game_Time_Unlimited');?>

                                    </dd>
                                    <dt class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Game_Category');?>
</dt>
                                        <dd class="account primary-account account-status">
                                            <span class="account-history"><?php echo $_smarty_tpl->tpl_vars['Account']->value['expansion_name'];?>

                                            <em><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Digital_Edition');?>
</em>
                                            </span>
                                        </dd>
                                        <?php  $_smarty_tpl->tpl_vars['PEx'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PEx']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Account']->value['previous_expansions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PEx']->key => $_smarty_tpl->tpl_vars['PEx']->value) {
$_smarty_tpl->tpl_vars['PEx']->_loop = true;
?>
                                            <dd class="account secondary-account" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['PEx']->value;?>

                                                <em><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Digital_Edition');?>
</em>
                                            </dd>
                                        <?php } ?>
                                    <dt class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Game_Region');?>
</dt>
                                    <dd class="account-region EU"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_WoW_Europe');?>
</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="secondary">
                    <div class="service-selection character-services">
                        <ul class="wow-services">
                            <li class="category"><a href="#character-services" class="character-services"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_CS');?>
</a></li>
                            <li class="category"><a href="#additional-services" class="additional-services"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_AS');?>
</a></li>
                            <li class="category"><a href="#referrals-rewards" class="referrals-rewards"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_RR');?>
</a></li>
                            <li class="category"><a href="#game-time-subscriptions" class="game-time-subscriptions"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_GTS');?>
</a></li>
                        </ul>
                        <div class="service-links">
                            <div class="position" style="left: 91px;"></div>
                            <div class="content character-services" id="character-services">
                                <ul>
                                    <li class="wow-service pct">
                                        <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PCT" onclick="">
                                            <span class="icon glow-shadow-3"></span>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PCT');?>
</strong>
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PCT_Description');?>

                                        </a>
                                    </li>
                                    <li class="wow-service pfc">
                                        <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PFC" onclick="">
                                            <span class="icon glow-shadow-3"></span>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PFC');?>
</strong>
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PFC_Description');?>

                                        </a>
                                    </li>
                                    <li class="wow-service prc">
                                        <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PRC" onclick="">
                                            <span class="icon glow-shadow-3"></span>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PRC');?>
</strong>
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PRC_Description');?>

                                        </a>
                                    </li>
                                    <li class="wow-service pcc">
                                        <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PCC" onclick="">
                                            <span class="icon glow-shadow-3"></span>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PCC');?>
</strong>
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PCC_Description');?>

                                        </a>
                                    </li>
                                    <li class="wow-service pnc">
                                        <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=PNC" onclick="">
                                            <span class="icon glow-shadow-3"></span>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PNC');?>
</strong>
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PNC_Description');?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content additional-services" id="additional-services">
                                <ul>

                                </ul>
                            </div>
                            <div class="content referrals-rewards" id="referrals-rewards">
                                <ul>
                                    <li class="wow-service raf">
                                        <a href="/account/management/services/referrals?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=RAF&amp;servicecat=description" onclick="">
                                            <span class="icon glow-shadow-3"></span>
                                            <strong><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_RAF');?>
</strong>
                                            <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_RAF_Description');?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content game-time-subscriptions" id="game-time-subscriptions">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-rating-wrapper">
                    <div class="product-rating mkrf-rating clearfix">
                        <a href="http://mkrf.ru/" tabindex="1" rel="external" target="_blank"><img class="mkrf-logo" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/legal/ratings/mkrf/12.png" alt="12+" width="65" height="72" /></a>
                    </div>
                </div>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    var inputs = new Inputs('#game-time, #limited-game-time-purchase');
                    $('#game-time [checked]').parents('label').addClass('selected');
                });
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
