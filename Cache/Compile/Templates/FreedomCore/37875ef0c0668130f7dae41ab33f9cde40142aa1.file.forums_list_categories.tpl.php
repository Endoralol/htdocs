<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:25:25
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/forums_list_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59832213157521ff50514b0-13091958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37875ef0c0668130f7dae41ab33f9cde40142aa1' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/forums_list_categories.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59832213157521ff50514b0-13091958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Forums' => 0,
    'Forum' => 0,
    'i' => 0,
    'Category' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57521ff511b835_48341305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57521ff511b835_48341305')) {function content_57521ff511b835_48341305($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                        <a href="/forum" rel="np" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Forum_Page_Title');?>
</span>
                        </a>
                    </li>
                </ol>
            </div>
            <div class="content-bot clear">
                <div id="freedom-tracker-light">

                </div>
                <span class="clear"></span>
                <div id="station-content">
                    <div class="station-content-wrapper">
                        <div class="station-inner-wrapper">
                            <div class="right-column">
                                <h3 class="header-3 title-forums"><?php echo $_smarty_tpl->getConfigVariable('Forum_Top_thead');?>
</h3>


						<div id="popular-topics" class="module">
							<div id="popular-topics-inner"></div>
						</div>

	                            <a class="code-of-conduct" href="" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('Forum_Rules');?>
</a>
                            </div>
                            <div class="left-column" id="forum-list">
                                <div class="forum-list-interior">
                                <?php  $_smarty_tpl->tpl_vars['Forum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Forum']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Forums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Forum']->key => $_smarty_tpl->tpl_vars['Forum']->value) {
$_smarty_tpl->tpl_vars['Forum']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Forum']->key;
?>
                                    <div class="forum-group">
                                        <h2 class="header-2">
                                            <a id="forum<?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['forum_id'];?>
" href="javascript:;" onclick="Station.toggleForumGroup('<?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['forum_id'];?>
', this)" class="group-header">
                                                <?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['forum_type_name'];?>

                                            </a>
                                        </h2>
                                        <ul class="child-forums" id="child<?php echo $_smarty_tpl->tpl_vars['Forum']->value[0]['forum_id'];?>
">
                                            <?php  $_smarty_tpl->tpl_vars['Category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Forum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Category']->key => $_smarty_tpl->tpl_vars['Category']->value) {
$_smarty_tpl->tpl_vars['Category']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value<5) {?>
                                                    <li class="child-forum">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Category']->value['forum_id'];?>
/" class="forum-link">
                                                        <span class="forum-icon">
                                                                <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/forum/icons/<?php echo $_smarty_tpl->tpl_vars['Category']->value['forum_icon'];?>
" />
                                                        </span>
                                                        <span class="forum-details">
                                                            <span class="forum-title">
                                                                <?php echo $_smarty_tpl->tpl_vars['Category']->value['forum_name'];?>

                                                                <span class="forum-status"></span>
                                                            </span>
                                                            <span class="forum-desc">
                                                                <?php echo $_smarty_tpl->tpl_vars['Category']->value['forum_description'];?>

                                                            </span>
                                                        </span>
                                                        </a>
                                                    </li>
                                                <?php } else { ?>
                                                    <li class="child-forum child-forum-compact">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Category']->value['forum_id'];?>
/" class="forum-link">
                                                            <span class="forum-icon">
                                                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/forum/icons/<?php echo $_smarty_tpl->tpl_vars['Category']->value['forum_icon'];?>
" />
                                                            </span>
                                                            <span class="forum-details">
                                                                <span class="forum-title">
                                                                    <?php echo $_smarty_tpl->tpl_vars['Category']->value['forum_name'];?>

                                                                    <span class="forum-status"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <span class="clear"></span>
                        </div>
                    </div>
                </div>
                <?php echo '<script'; ?>
 type="text/javascript">
                    $(function(){
                        Station.initialize();
                    })
                <?php echo '</script'; ?>
>
            </div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
