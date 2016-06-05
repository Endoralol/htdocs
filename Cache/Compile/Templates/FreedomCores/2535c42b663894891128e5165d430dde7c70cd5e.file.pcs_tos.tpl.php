<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 19:21:14
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/pcs_tos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139845291057505cfac4b812-41762725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2535c42b663894891128e5165d430dde7c70cd5e' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/pcs_tos.tpl',
      1 => 1464860655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139845291057505cfac4b812-41762725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'Service' => 0,
    'Account' => 0,
    'Character' => 0,
    'ToS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57505cfad8dcd4_03930303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57505cfad8dcd4_03930303')) {function content_57505cfad8dcd4_03930303($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/services.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/account/realm-select.js"><?php echo '</script'; ?>
>
            <div class="dashboard service">
                <div class="primary">
                    <div  class="header">
                        <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_CS');?>
</h2>
                        <h3 class="headline"><?php echo $_smarty_tpl->tpl_vars['Service']->value['title'];?>
</h3>
                        <a href="/account/management/dashboard?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
"><img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/game-icons/wowx5.png" alt="World of Warcraft" width="48" height="48" /></a>
                    </div>
                    <div class="service-wrapper">
                        <p class="service-nav">
                            <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=<?php echo $_smarty_tpl->tpl_vars['Service']->value['service'];?>
" class="active"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service');?>
</a>
                            <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=<?php echo $_smarty_tpl->tpl_vars['Service']->value['service'];?>
&amp;servicecat=history"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_History');?>
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
                            <div class="service-interior">
                                <h2 class="caption"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_ToS_Limitations');?>
</h2>
                                <div class="tos-left full-width">
                                    <ul>
                                        <li><?php echo $_smarty_tpl->tpl_vars['ToS']->value['First'];?>
</li>
                                        <li><?php echo $_smarty_tpl->tpl_vars['ToS']->value['Second'];?>
</li>
                                        <li><?php echo $_smarty_tpl->tpl_vars['ToS']->value['Third'];?>
</li>
                                        <li><?php echo $_smarty_tpl->tpl_vars['ToS']->value['Forth'];?>
</li>
                                    </ul>
                                </div>
                                <span class="clear"></span>
                                <form method="POST" action="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=<?php echo $_smarty_tpl->tpl_vars['Service']->value['service'];?>
&amp;servicecat=confirm&amp;character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
">
                                    <fieldset class="ui-controls section-stacked">
                                        <button class="ui-button button1" type="submit" id="tos-submit" tabindex="1">
                                            <span class="button-left">
                                                <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_ToS_Accept');?>
</span>
                                            </span>
                                        </button>
                                        <a class="ui-cancel " href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&service=<?php echo $_smarty_tpl->tpl_vars['Service']->value['service'];?>
" tabindex="1">
                                            <span>
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_ToS_Decline');?>

                                            </span>
                                        </a>
                                    </fieldset>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        //<![CDATA[
                                        (function() {
                                            var tosSubmit = document.getElementById('tos-submit');
                                            tosSubmit.removeAttribute('disabled');
                                            tosSubmit.className = 'ui-button button1';
                                        })();
                                        //]]>
                                    <?php echo '</script'; ?>
>
                                </form>
                            </div>
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
