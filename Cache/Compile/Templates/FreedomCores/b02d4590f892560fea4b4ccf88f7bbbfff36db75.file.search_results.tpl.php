<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:02:48
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203322219857501258670008-43977133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02d4590f892560fea4b4ccf88f7bbbfff36db75' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/search_results.tpl',
      1 => 1464860667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203322219857501258670008-43977133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'SearchedFor' => 0,
    'SearchResults' => 0,
    'SearchCategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575012587db810_05982998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575012587db810_05982998')) {function content_575012587db810_05982998($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/search/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Search');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="search">
                <div class="search-right">
                    <div class="search-header">
                        <form action="/search" method="get" class="search-form">
                            <div>
                                <input id="search-page-field" type="text" name="q" maxlength="200" tabindex="2" value="<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
" />
                                <button class="ui-button button1" type="submit"><span class="button-left"><span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Search');?>
</span></span></button>
                            </div>
                        </form>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['foundtotal']==0) {?>
                        <div class="no-results">
                            <h2 class="subheader-2">
                                <?php echo $_smarty_tpl->getConfigVariable('Search_Not_Found_Part_One');?>
 «<span><?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
</span>» <?php echo $_smarty_tpl->getConfigVariable('Search_Not_Found_Part_Two');?>
.
                            </h2>
                            <h3 class="header-3"><?php echo $_smarty_tpl->getConfigVariable('Search_Like');?>
</h3>
                            <ul>
                                <li><?php echo $_smarty_tpl->getConfigVariable('Search_Like_First');?>
</li>
                                <li><?php echo $_smarty_tpl->getConfigVariable('Search_Like_Second');?>
</li>
                                <li><?php echo $_smarty_tpl->getConfigVariable('Search_Like_Third');?>
</li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <div class="helpers">
                            <h2 class="subheader-2">
                                <?php echo $_smarty_tpl->getConfigVariable('Search_SearchedFor');?>
: «<span><?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
</span>»
                            </h2>
                        </div>
                        <div class="summary">
                            <div class="results suggested-links"></div>
                            <?php if ($_smarty_tpl->tpl_vars['SearchCategory']->value=='') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('blocks/search_no_category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['SearchCategory']->value=='wowguild') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('blocks/search_wowguild.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['SearchCategory']->value=='wowcharacter') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('blocks/search_wowcharacter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['SearchCategory']->value=='article') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('blocks/search_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['SearchCategory']->value=='wowitem') {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('blocks/search_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php }?>
                        </div>
                    <?php }?>
                </div>
                <div class="search-left">
                    <div class="search-header">
                        <h2 class="header-2">
                            <?php echo $_smarty_tpl->getConfigVariable('Search');?>

                        </h2>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['foundtotal']!=0) {?>
                    <ul class="dynamic-menu" id="menu-search">
                        <li <?php if ($_smarty_tpl->tpl_vars['SearchCategory']->value=='') {?> class="item-active"<?php }?>>
                            <a href="/search?f=&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
">
                                <span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Search_All_Found');?>
 (<?php echo $_smarty_tpl->tpl_vars['SearchResults']->value['foundtotal'];?>
)</span>
                            </a>
                        </li>


                        <?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['guildsfound']>0) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['SearchCategory']->value=='wowguild') {?> class="item-active"<?php }?>>
                                <a href="/search?q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;f=wowguild">
                                    <span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Search_Guilds_Found');?>
 (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['guilds']);?>
)</span>
                                </a>

                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['charactersfound']>0) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['SearchCategory']->value=='wowcharacter') {?> class="item-active"<?php }?>>
                                <a href="/search?f=wowcharacter&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
">
                                    <span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Search_Characters_Found');?>
 (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['characters']);?>
)</span>
                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['itemsfound']>0) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['SearchCategory']->value=='wowitem') {?> class="item-active"<?php }?>>
                                <a href="/search?f=wowitem&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
">
                                    <span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Search_Items_Found');?>
 (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['items']);?>
)</span>
                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['articlesfound']>0) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['SearchCategory']->value=='article') {?> class="item-active"<?php }?>>
                                <a href="/search?q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;f=article">
                                    <span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Search_Articles_Found');?>
 (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['articles']);?>
)</span>
                                </a>

                            </li>
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
                <span class="clear"></span>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
