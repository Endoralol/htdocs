<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:18:48
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/forums_list_topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3268025395746bf788f1425-73594362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a56e22aa445044c13930567b782d9366bffc645' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/forums_list_topics.tpl',
      1 => 1446108274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3268025395746bf788f1425-73594362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Forum' => 0,
    'Characters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bf789bff59_97106405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bf789bff59_97106405')) {function content_5746bf789bff59_97106405($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="/forum/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Forum_Page_Title');?>
</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/#forum<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_type'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_type_name'];?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_id'];?>
/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_name'];?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="topics-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="forum-actions forum-actions-top">
                    <div class="inner-search-wrapper">
                        <form action="/search" class="inner-search-form" method="get">
                            <fieldset>
                                <input type="text" name="q" value="<?php echo $_smarty_tpl->getConfigVariable('Forum_Search_This_Forum');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('Forum_Search_This_Forum');?>
" id="inner-search-field" />
                                <input type="hidden" name="f" value="post" />
                                <input type="hidden" name="forum" value="<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_id'];?>
" />
                                <input type="submit" class="inner-search-submit" value=" " />
                            </fieldset>
                        </form>
                        <?php echo '<script'; ?>
 type="text/javascript">
                            //<![CDATA[
                            $(function() { Input.bind('#inner-search-field'); });
                            //]]>
                        <?php echo '</script'; ?>
>
                    </div>
                    <h2 class="subheader-2" itemprop="headline"><?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_name'];?>
</h2>
                    <?php if (!$_SESSION['loggedin']) {?>
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="/account/login">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Forum_Create_Topic');?>

                                </span>
                            </span>
                        </a>
                    </div>
                    <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['Characters']->value==0) {?>
                    <div class="create-button-wrappe">
<a class="ui-button button1 disabled" href="javascript:;"
data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Forum_Non_Characters');?>
"><span class="button-left"><span class="button-right"> <?php echo $_smarty_tpl->getConfigVariable('Forum_Create_Topic');?>

</span></span></a>

	</div>
                    <?php } else { ?>
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="topic">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Forum_Create_Topic');?>

                                </span>
                            </span>
                        </a>
                    </div>
                        <?php }?>
                    <?php }?>
                    <div class="paging-wrapper">

                    </div>
                    <span class="clear"></span>
                </div>
                <?php if (empty($_smarty_tpl->tpl_vars['Forum']->value['topics'])) {?>
                    <center><?php echo $_smarty_tpl->getConfigVariable('Forum_No_Topics_Found');?>
</center>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ('blocks/forum_topics_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
                <div class="forum-actions forum-actions-bottom">
                    <?php if (!$_SESSION['loggedin']) {?>
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="/account/login">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Forum_Create_Topic');?>

                                </span>
                            </span>
                        </a>
                    </div>
                    <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['Characters']->value==0) {?>
                    <div class="create-button-wrappe">
<a class="ui-button button1 disabled" href="javascript:;"
data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Forum_Non_Characters');?>
"><span class="button-left"><span class="button-right"> <?php echo $_smarty_tpl->getConfigVariable('Forum_Create_Topic');?>

</span></span></a>

	</div>
                    <?php } else { ?>
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="topic">
                            <span class="button-left">
                                <span class="button-right">
                                    <?php echo $_smarty_tpl->getConfigVariable('Forum_Create_Topic');?>

                                </span>
                            </span>
                        </a>
                    </div>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
                //<![CDATA[
                $(function() {
                    Forums.initialize("#forum-topics", <?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_id'];?>
);
                });
                //]]>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
