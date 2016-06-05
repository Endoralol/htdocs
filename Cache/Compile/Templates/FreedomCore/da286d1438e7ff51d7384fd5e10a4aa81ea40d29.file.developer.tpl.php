<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 07:44:44
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/developer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201195420157525cbc8b6278-63276279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da286d1438e7ff51d7384fd5e10a4aa81ea40d29' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/developer.tpl',
      1 => 1464860653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201195420157525cbc8b6278-63276279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'UserAPIKey' => 0,
    'User' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57525cbc97b403_96585794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57525cbc97b403_96585794')) {function content_57525cbc97b403_96585794($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">FreedomCore</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/api/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Developer_Page_Title');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div id="left">
                <div class="main-feature">
                    <div class="main-feature-wrapper">
                        <div class="sidebar-module" id="sidebar-leaderboards">
                            <div class="sidebar-title">
                                <h3 class="header-3 title-leaderboards">
                                    <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
 <?php echo $_smarty_tpl->getConfigVariable('Developer_API_Header');?>

                                </h3>
                            </div>
                            <div class="sidebar-content">
                                <ul style="margin-top:25px;">
                                    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_armory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                    <br />
                                    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                    <br />
                                    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_achievement.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                    <br />
                                    <?php echo $_smarty_tpl->getSubTemplate ('developer/api_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                </ul
                                <span class="clear"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                $(document).ready(function(){
                    $(".endpoint_accordion h3").click(function()
                    {
                        $(".endpoint_accordion ul").slideUp();
                        if(!$(this).next().is(":visible"))
                        {
                            $(this).next().slideDown();
                        }
                    })
                });
            <?php echo '</script'; ?>
>
            <div id="right">
                <div class="sidebar-module">
                    <div class="sidebar-title">
                        <h3 class="header-3 title-api-key">
                            <?php echo $_smarty_tpl->getConfigVariable('Developer_API_Settings');?>

                        </h3>
                    </div>
                    <div class="sidebar-content">
                        <div class="sts a-realm sidebar-container box-shadow">
                                <?php if (isset($_smarty_tpl->tpl_vars['UserAPIKey']->value)&&$_smarty_tpl->tpl_vars['UserAPIKey']->value!=false) {?>
                                    <div id="head" class="clearfix text-shadow">
                                        <p id="name"><?php echo $_smarty_tpl->getConfigVariable('Developer_API_Key');?>
:</p>
                                    </div>
                                    <div id="containerbody" class="clearfix text-shadow">
                                        <input type="text" id="apikey" value="<?php echo $_smarty_tpl->tpl_vars['UserAPIKey']->value;?>
" class="search-field input" style="width:98%; margin: 5px 50px 5px 5px;text-align:center;" readonly>
                                    </div>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['UserAPIKey']->value)&&$_smarty_tpl->tpl_vars['UserAPIKey']->value==false) {?>
                                        <div id="head" class="clearfix text-shadow">
                                            <p id="name"><?php echo $_smarty_tpl->getConfigVariable('Developer_API_Key');?>
:</p>
                                        </div>
                                        <div id="containerbody" class="clearfix text-shadow">
                                            <button id="getapikeybutton" class="ui-button button1" type="submit" style="width:100%">
                                                <span class="button-left" style="width:100%;padding: 0;">
                                                    <span class="button-right" style="width:100%;padding: 0;">
                                                        <?php echo $_smarty_tpl->getConfigVariable('Developer_API_Key_Get');?>

                                                    </span>
                                                </span>
                                            </button>
                                            <input type="text" id="apikey" value="<?php echo $_smarty_tpl->tpl_vars['UserAPIKey']->value;?>
" class="search-field input" style="width:98%; margin: 5px 50px 5px 5px;text-align:center;" readonly>
                                            <?php echo '<script'; ?>
 type="text/javascript">
                                                $( document ).ready(function() {
                                                    $('#apikey').hide();
                                                });
                                                $("#getapikeybutton").click(function() {
                                                    $.ajax({
                                                        type: 'post',
                                                        url: "/api/key/generate",
                                                        data: "username=<?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>
",
                                                        complete: function (response) {
                                                            $('#getapikeybutton').delay(500).fadeOut(300);
                                                            $("#apikey").val(response.responseText);
                                                            $('#apikey').delay(500).fadeIn(300);
                                                        }
                                                    });
                                                });
                                            <?php echo '</script'; ?>
>
                                        </div>
                                <?php } else { ?>
                                    <center>
                                        <?php echo $_smarty_tpl->getConfigVariable('Developer_Authorization_Needed');?>

                                        <input type="hidden" id="apikey" value="undefined" readonly>
                                    </center>
                                <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
