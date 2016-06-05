<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 10:54:51
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/account/pcs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21313184585752894b4f9905-44612246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5d2fa27ff429c63607910c8aa5c8f1d1e5b10b0' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/account/pcs.tpl',
      1 => 1464860655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21313184585752894b4f9905-44612246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'Service' => 0,
    'Account' => 0,
    'Characters' => 0,
    'Character' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752894b63e2c0_55510828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752894b63e2c0_55510828')) {function content_5752894b63e2c0_55510828($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                                    <div class="character-icon wow-portrait-64 no-character">
                                    </div>
                                    <div class="service-tag-description">
                                        <span class="character-message caption"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Select_Character');?>
</span>
                                    </div>
                                    <span class="clear"><!-- --></span>
                                </div>
                            </div>
                            <div class="service-summary">
                                <p class="service-price headline"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Price');?>
<br /> <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Service']->value['price']);?>
 USD
                                </p>
                                <p><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Warning');?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['Service']->value['name']=='pnc') {?>
                                    <div class="service-tag-contents border-3 margin-top-20">
                                        <h2 class="caption"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Change_Name_Free');?>
:</h2>
                                        <ul class="arrow-list">
                                            <li><a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&service=PCC"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PCC');?>
</a></li>
                                            <li><a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&service=PRC"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PRC');?>
</a></li>
                                            <li><a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&service=PFC"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_PFC');?>
</a></li>
                                        </ul>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="service-form">
                            <div class="character-list">
                                <ul id="character-list">
                                    <?php  $_smarty_tpl->tpl_vars['Character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Characters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Character']->key => $_smarty_tpl->tpl_vars['Character']->value) {
$_smarty_tpl->tpl_vars['Character']->_loop = true;
?>
                                        <li class="character border-4" id="WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['Character']->value['guid'];?>
:<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
">
                                            <div class="character-icon wow-portrait-64-80 wow-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
 glow-shadow-3">
                                                <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" width="64" height="64" alt="" />
                                            </div>
                                            <div class="character-description">
                                            <span class="character-name caption">
                                                <a href="/account/management/services/character-services?accountName=WoW<?php echo $_smarty_tpl->tpl_vars['Account']->value['id'];?>
&amp;service=<?php echo $_smarty_tpl->tpl_vars['Service']->value['service'];?>
&amp;servicecat=tos&amp;character=<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
" class="character-link">
                                                    <?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['Character']->value['guild_name']!='') {?>- <em><?php echo $_smarty_tpl->tpl_vars['Character']->value['guild_name'];?>
</em><?php }?>
                                                </a>
                                            </span>
                                            <span class="character-class">
                                            <?php echo $_smarty_tpl->tpl_vars['Character']->value['race_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['class_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
 <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>

                                            </span>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="error-container" style="display: none;"></div>
                            <?php echo '<script'; ?>
 type="text/javascript">
                                //<![CDATA[
                                var additionalMessages = {
                                    'error': {
                                        'title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error');?>
:',
                                        'serverTitle': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_World_Closed');?>
',
                                        'serverDesc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_CheckBackLater');?>
',
                                        'retry': '<a href="#retry" onclick="return false;"><?php echo $_smarty_tpl->getConfigVariable('Account_Management_Try_Again');?>
</a>',
                                        'multiDesc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Need_To_Solve');?>
',
                                        '20012Title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20012Title');?>
',
                                        '20012Desc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20012Desc');?>
',
                                        '20016Title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20016Title');?>
',
                                        '20016Desc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20016Desc');?>
',
                                        '20032Title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20032Title');?>
',
                                        '20032Desc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20032Desc');?>
',
                                        '20033Title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20033Title');?>
',
                                        '20033Desc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20033Desc');?>
',
                                        '20034Title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20034Title');?>
',
                                        '20034Desc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20034Desc');?>
',
                                        '20057Title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20057Title');?>
',
                                        '20057Desc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20057Desc');?>
',
                                        '20064Title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20064Title');?>
',
                                        '20064Desc': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_20064Desc');?>
',
                                        'unknown': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Error_unknown');?>
'
                                    },
                                    'loading': {
                                        'title': '<?php echo $_smarty_tpl->getConfigVariable('Account_Management_Service_Verifying');?>
'
                                    },
                                    'active': {
                                        serviceName: '<?php echo $_smarty_tpl->tpl_vars['Service']->value['service'];?>
',
                                        viewingRealm: '0'
                                    }
                                };
                                //]]>
                            <?php echo '</script'; ?>
>
                        </div>
                        <span class="clear"></span>
                    </div>
                </div>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    $(".realmselect-dialog").dialog("destroy");
                    $(".realmselect-dialog").dialog({
                        "autoOpen": false,
                        "modal": true,
                        "position": "center",
                        "resizeable": false,
                        "closeText": "Закрыть",
                        "width": 570,
                        "height": 580
                    });
                });
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
