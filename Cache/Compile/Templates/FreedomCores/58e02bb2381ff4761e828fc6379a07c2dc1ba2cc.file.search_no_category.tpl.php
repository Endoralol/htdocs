<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:25:34
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/search_no_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1934169741575017aeefb6d6-77563298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58e02bb2381ff4761e828fc6379a07c2dc1ba2cc' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/search_no_category.tpl',
      1 => 1464860657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934169741575017aeefb6d6-77563298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SearchResults' => 0,
    'SearchedFor' => 0,
    'Character' => 0,
    'Template' => 0,
    'LoopedItems' => 0,
    'Item' => 0,
    'Guild' => 0,
    'Article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575017af158513_02819116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575017af158513_02819116')) {function content_575017af158513_02819116($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['charactersfound']>0) {?>
<div class="results results-grid wow-results">
    <h3 class="header-3">
        <a href="?q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;f=wowcharacter"><?php echo $_smarty_tpl->getConfigVariable('Search_Characters_Found');?>
</a> (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['characters']);?>
)
    </h3>
    <?php  $_smarty_tpl->tpl_vars['Character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SearchResults']->value['characters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Character']->key => $_smarty_tpl->tpl_vars['Character']->value) {
$_smarty_tpl->tpl_vars['Character']->_loop = true;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach'][$_smarty_tpl->tpl_vars['Character']->value]['index']==2) {?>
            <?php break 1;?>
        <?php }?>
        <div class="grid">
            <div class="wowcharacter">
                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" class="icon-frame frame-56 thumbnail">
                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" alt="" width="56" height="56" />
                </a>
                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" class="color-c<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
">
                    <strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</strong>
                </a><br />
                <?php echo $_smarty_tpl->tpl_vars['Character']->value['class_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['race_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>
 <?php echo $_smarty_tpl->getConfigVariable('LevelShort');?>
<br />
                Realm Name
                <span class="clear"><!-- --></span>
            </div>
        </div>
    <?php } ?>
    <span class="clear"><!-- --></span>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['itemsfound']>0) {?>
    <div class="results results-grid wow-results">
        <h3 class="header-3">
            <a href="?f=wowitem&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('Search_Items_Found');?>
</a>
            (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['items']);?>
)
        </h3>
        <?php $_smarty_tpl->tpl_vars['LoopedItems'] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SearchResults']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['LoopedItems']->value==3) {?>
                <?php break 1;?>
            <?php }?>
            <div class="grid">
                <div class="wowitem">
                    <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
" class="thumbnail" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
">
                    <span class="icon-frame frame-32 ">
                        <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/medium/<?php echo $_smarty_tpl->tpl_vars['Item']->value['icon'];?>
.jpg" alt="" width="32" height="32" />
                    </span>
                    </a>
                    <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
" class="color-q<?php echo $_smarty_tpl->tpl_vars['Item']->value['Quality'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
">
                        <strong><?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
</strong>
                    </a><br />
                    <?php echo $_smarty_tpl->getConfigVariable('Item_ItemLevel');?>
 <?php echo $_smarty_tpl->tpl_vars['Item']->value['ItemLevel'];?>

                    <span class="clear"><!-- --></span>
                </div>
            </div>
            <?php $_smarty_tpl->tpl_vars['LoopedItems'] = new Smarty_variable($_smarty_tpl->tpl_vars['LoopedItems']->value+1, null, 0);?>
        <?php } ?>
        <span class="clear"><!-- --></span>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['guildsfound']>0) {?>
    <div class="results results-grid wow-results">
        <h3 class="header-3">
            <a href="?q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;f=wowguild"><?php echo $_smarty_tpl->getConfigVariable('Search_Guilds_Found');?>
</a> (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['guilds']);?>
)
        </h3>

        <?php  $_smarty_tpl->tpl_vars['Guild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Guild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SearchResults']->value['guilds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Guild']->key => $_smarty_tpl->tpl_vars['Guild']->value) {
$_smarty_tpl->tpl_vars['Guild']->_loop = true;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach'][$_smarty_tpl->tpl_vars['Guild']->value]['index']==2) {?>
                <?php break 1;?>
            <?php }?>
            <div class="grid">
                <div class="wowguild">
                    <canvas id="tabard-<?php echo $_smarty_tpl->tpl_vars['Guild']->value['guid'];?>
" class="thumbnail" width="32" height="32" style="opacity: 1;"></canvas>
                    <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
/" class="sublink">
                        <strong><?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
</strong>
                    </a>
                    - <?php echo $_smarty_tpl->tpl_vars['Guild']->value['side_translation'];?>
<br />

                    Realm Name

                    <?php echo '<script'; ?>
 type="text/javascript">
                        //<![CDATA[
                        $(function() {
                            var tabard<?php echo $_smarty_tpl->tpl_vars['Guild']->value['guid'];?>
 = new GuildTabard('tabard-<?php echo $_smarty_tpl->tpl_vars['Guild']->value['guid'];?>
', {
                                ring: '<?php echo $_smarty_tpl->tpl_vars['Guild']->value['side'];?>
',
                                'bg': [ 0, <?php echo $_smarty_tpl->tpl_vars['Guild']->value['BackgroundColor'];?>
 ],
                                'border': [ <?php echo $_smarty_tpl->tpl_vars['Guild']->value['BorderStyle'];?>
, <?php echo $_smarty_tpl->tpl_vars['Guild']->value['BorderColor'];?>
 ],
                                'emblem': [ <?php echo $_smarty_tpl->tpl_vars['Guild']->value['EmblemStyle'];?>
, <?php echo $_smarty_tpl->tpl_vars['Guild']->value['EmblemColor'];?>
 ]
                            });
                        });
                        //]]>
                    <?php echo '</script'; ?>
>
                    <span class="clear"><!-- --></span>
                </div>
            </div>
        <?php } ?>
        <span class="clear"><!-- --></span>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['articlesfound']>0) {?>
    <div class="results results-grid article-results">
        <h3 class="header-3">
            <a href="?q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;f=article"><?php echo $_smarty_tpl->getConfigVariable('Search_Articles_Found');?>
</a> (<?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['articles']);?>
)
        </h3>
        <?php  $_smarty_tpl->tpl_vars['Article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SearchResults']->value['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Article']->key => $_smarty_tpl->tpl_vars['Article']->value) {
$_smarty_tpl->tpl_vars['Article']->_loop = true;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach'][$_smarty_tpl->tpl_vars['Article']->value]['index']==2) {?>
            <?php break 1;?>
        <?php }?>
        <div class="grid">
            <div class="article">
                <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
" class="article-thumbnail">
                    <span style="background-image: url('/Uploads/<?php echo $_smarty_tpl->tpl_vars['Article']->value['miniature'];?>
'); height: 32px; width:32px;" alt=""></span>
                </a>
                <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
">
                    <strong><?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</strong>
                </a><br />
                <?php echo $_smarty_tpl->tpl_vars['Article']->value['comments'];?>
 комментариев
                <span class="clear"><!-- --></span>
            </div>
        </div>
        <?php } ?>

        <span class="clear"><!-- --></span>
    </div>
<?php }?><?php }} ?>
