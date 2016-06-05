<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-03 14:57:36
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/forum/comment_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15709633135751686fb23333-26830252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea66781002cb46e8c3ca9f762c412e35a5b9025' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/forum/comment_edit.tpl',
      1 => 1464955052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15709633135751686fb23333-26830252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5751686fb23b60_36940001',
  'variables' => 
  array (
    'TopicData' => 0,
    'CSRFToken' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751686fb23b60_36940001')) {function content_5751686fb23b60_36940001($_smarty_tpl) {?><form id="new-post" action="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
/sendEdit" novalidate="novalidate" method="post" class="topic-form ajax-update" data-max-post-length="50000">
    <fieldset>
        <input type="hidden" name="csrftoken" value="<?php echo $_smarty_tpl->tpl_vars['CSRFToken']->value;?>
" />
        <input type="hidden" name="idpost" value="<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['ids'];?>
" />
        <input type="hidden" name="idtopic" value="<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
" />
        <input type="hidden" name="sessionPersist" value="forum.topic.form" />
    </fieldset>
    <div class="form-left-col">
        <div class="form-title">
            <h3 class="header-3"><?php echo $_smarty_tpl->getConfigVariable('Forum_Reply');?>
</h3>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('forum/forum_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div id="post-errors" class="topic-form-errors"></div>
    <div class="topic-form-wrapper">
        <div class="topic-form-controls">
            <a href="javascript:;" class="control-button preview-post" style="width: 130px;"><?php echo $_smarty_tpl->getConfigVariable('Forum_Preview');?>
</a>
            <a href="javascript:;" class="control-button edit-post selected" style="width: 130px;"><?php echo $_smarty_tpl->getConfigVariable('Forum_Edit_Topic');?>
</a>
        </div>
        <div id="post-edit">
            <textarea id="commentTextArea" name="postCommand.detail" class="post-editor" maxlength="10000"><?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['post_message'];?>
</textarea>
            <div class="post-detail" id="post-preview"></div>
        </div>
        <table class="dynamic-center submit-post">
            <tr>
                <td>
                    <button class="ui-button button1" type="submit">
                                        <span class="button-left">
                                            <span class="button-right">
                                                <?php echo $_smarty_tpl->getConfigVariable('Messages_Send');?>

                                            </span>
                                        </span>
                    </button>
                </td>
            </tr>
        </table>
        <?php echo '<script'; ?>
 type="text/javascript">
            //<![CDATA[
            $(function() {
                BML.initialize('#post-edit', false);
            });
            //]]>
        <?php echo '</script'; ?>
>
    </div>
    <span class="clear"></span>
</form><?php }} ?>
