<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 18:08:38
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/forum/new_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97065182157504bf6059ad4-47234712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b7e947ae4f2d0384a27ef2881000a0b16160e0' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/forum/new_post.tpl',
      1 => 1464860662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97065182157504bf6059ad4-47234712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Forum' => 0,
    'CSRFToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57504bf60af037_88252139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57504bf60af037_88252139')) {function content_57504bf60af037_88252139($_smarty_tpl) {?><form id="new-post" action="/forum/<?php echo $_smarty_tpl->tpl_vars['Forum']->value['forum_id'];?>
/topic/post" novalidate="novalidate" method="post" class="topic-form ajax-update" data-max-post-length="50000">
    <fieldset>
        <input type="hidden" name="csrftoken" value="<?php echo $_smarty_tpl->tpl_vars['CSRFToken']->value;?>
" />
        <input type="hidden" name="sessionPersist" value="forum.topic.form" />
    </fieldset>
    <div class="form-left-col">
        <div class="form-title">
            <h3 class="header-3"><?php echo $_smarty_tpl->getConfigVariable('Forum_Create_Topic');?>
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
            <input type="text" id="subject" name="subject" value class="post-subject" maxlength="55"/>
            <textarea id="postCommand.detail" name="postCommand.detail" class="post-editor" maxlength="10000"></textarea>
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
