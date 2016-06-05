<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:21:39
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\forum\comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10450574f43d32f84d5-14529773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab306c96031d65c21429400dd681fa483f25dd1e' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\forum\\comment.tpl',
      1 => 1446110004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10450574f43d32f84d5-14529773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TopicData' => 0,
    'CSRFToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f43d32fe905_83015334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f43d32fe905_83015334')) {function content_574f43d32fe905_83015334($_smarty_tpl) {?><form id="new-post" action="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['TopicData']->value['topic']['id'];?>
/post" novalidate="novalidate" method="post" class="topic-form ajax-update" data-max-post-length="50000">
    <fieldset>
        <input type="hidden" name="csrftoken" value="<?php echo $_smarty_tpl->tpl_vars['CSRFToken']->value;?>
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
            <textarea id="commentTextArea" name="postCommand.detail" class="post-editor" maxlength="10000"></textarea>
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
