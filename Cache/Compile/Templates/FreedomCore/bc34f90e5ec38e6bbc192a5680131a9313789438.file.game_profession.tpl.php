<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 14:17:51
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_profession.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1647058835752b8df299714-70148434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc34f90e5ec38e6bbc192a5680131a9313789438' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_profession.tpl',
      1 => 1464860668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647058835752b8df299714-70148434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Profession' => 0,
    'Template' => 0,
    'Language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752b8df346431_26848685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752b8df346431_26848685')) {function content_5752b8df346431_26848685($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/game/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Game');?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/game/profession" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Professions');?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/game/profession/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_translation'];?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div id="wiki" class="wiki wiki-profession">
                <div class="sidebar">
                    <table class="media-frame">
                        <tr>
                            <td class="tl"></td>
                            <td class="tm"></td>
                            <td class="tr"></td>
                        </tr>
                        <tr>
                            <td class="ml"></td>
                            <td class="mm">
                                <a href="javascript:;" class="thumbnail" onclick="Lightbox.loadImage([{ src: '/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/wiki/profession/screenshots/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
.jpg' }]);">
                                    <span class="view"></span>
                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/wiki/profession/thumbnails/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
.jpg" width="265" alt="" />
                                </a>
                            </td>
                            <td class="mr"></td>
                        </tr>
                        <tr>
                            <td class="bl"></td>
                            <td class="bm"></td>
                            <td class="br"></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="title">
                        <h2>
		                    <span class="icon-frame frame-56 circle-frame" style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/large/trade_<?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
.jpg&quot;);"></span>
                            <?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_translation'];?>

                            <span class="clear"><!-- --></span>
                        </h2>
                    </div>
                    <p class="intro">
                        <?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_long_description'];?>

                    </p>
                </div>
                <span class="clear"></span>
                <?php echo '<script'; ?>
 type="text/javascript">
                    //<![CDATA[
                    $(function() {
                        Wiki.pageUrl = '/game/profession/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['profession_name'];?>
/';
                    });
                    //]]>
                <?php echo '</script'; ?>
>
            </div>
            <span class="clear"></span>
            <div class="comment-section">
                <div id="comments" class="bnet-comments ">
                    <h2 class="subheader-2" ><?php echo $_smarty_tpl->getConfigVariable('Comments_Loading');?>
…</h2>
                    <h2 class="hide" ><?php echo $_smarty_tpl->getConfigVariable('Comments_Error_Loading');?>
.</h2>
                    <div class="comments-loading"></div>
                    <?php echo '<script'; ?>
 type="text/javascript">
                        //<![CDATA[
                        $(function() {
                            Comments.initialize('<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
.profession.<?php echo $_smarty_tpl->tpl_vars['Profession']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['Profession']->value['comments_key'];?>
', '0');
                        });
                        //]]>
                    <?php echo '</script'; ?>
>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
