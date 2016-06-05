<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-03 23:08:06
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/bugtracker_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17982000895751db0303cc65-52850437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c44701660ebb771a2cc6589f72aa556ed3706bb2' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/bugtracker_block.tpl',
      1 => 1464984485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17982000895751db0303cc65-52850437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5751db030ec933_81266694',
  'variables' => 
  array (
    'BugTracker' => 0,
    'Topic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751db030ec933_81266694')) {function content_5751db030ec933_81266694($_smarty_tpl) {?><table class="forum-topics" id="forum-topics" data-forum-id="1" style="font-size: 13px;">
    <thead>
    <tr>
        <th class="icon-column"></th>
        <th class="subject-column">Title</th>
        <th class="reply-column">Status</th>
        <th class="view-column">Priority</th>
        <th class="last-poster-column">Update</th>
    </tr>
    </thead>
    <tbody class="regular-topics sort-connect">
    <?php  $_smarty_tpl->tpl_vars['Topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BugTracker']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Topic']->key => $_smarty_tpl->tpl_vars['Topic']->value) {
$_smarty_tpl->tpl_vars['Topic']->_loop = true;
?>
        <tr id="postRow<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" class="stickied-topic" data-topic-id="<?php echo $_smarty_tpl->tpl_vars['Topic']->value['id'];?>
" itemscope="itemscope" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
            <td class="icon-cell">
            <span class="topic-icon-wrapper">
                <span class="topic-icon"></span>
            </span>
            </td>
            <td  class="author-cell">
            <span class="author-wrapper">
            <span class="author-name" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['Topic']->value['title'];?>
</span>
            </span>
            </td>
            <td class="view-cell">
                <?php echo $_smarty_tpl->tpl_vars['Topic']->value['status'];?>

            </td>
            <td class="view-cell">
                <?php echo $_smarty_tpl->tpl_vars['Topic']->value['user'];?>

            </td>
            <td class="view-cell">
                <?php echo $_smarty_tpl->tpl_vars['Topic']->value['date'];?>

            </td>
        </tr>
    <?php } ?>
    </tbody>
</table><?php }} ?>
