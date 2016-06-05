<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 15:42:20
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/search_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:860235984575029acafd508-76065124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74abc2258bb1cba20969ace35029421ba92d918e' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/search_items.tpl',
      1 => 1464860657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860235984575029acafd508-76065124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SearchResults' => 0,
    'i' => 0,
    'Item' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575029acc77a25_73599721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575029acc77a25_73599721')) {function content_575029acc77a25_73599721($_smarty_tpl) {?><div class="data-options ">
    <div class="option">
        <ul class="ui-pagination">
            <li class="current">
                <a href="?f=wowitem&amp;q=Shadow&amp;page=1" data-pagenum="1">
                    <span>1</span>
                </a>
            </li>
        </ul>
    </div>
    <?php echo $_smarty_tpl->getConfigVariable('Results');?>
 <strong class="results-start">1</strong>–<strong class="results-end">50</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total"><?php echo count($_smarty_tpl->tpl_vars['SearchResults']->value['items']);?>
</strong>
    <span class="clear"><!-- --></span>
</div>
<div class="view-table">
    <div class="table ">
        <table style="font-size:12px;">
            <thead>
            <tr>
                <th class=" first-child">
                    <span class="sort-tab">
                        <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Title');?>

                    </span>
                </th>
                <th>
                    <span class="sort-tab"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Level');?>
</span>
                </th>
                <th>
                    <span class="sort-tab"><?php echo $_smarty_tpl->getConfigVariable('Item_Required');?>
</span>
                </th>
                <th>
                    <span class="sort-tab"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Source');?>
</span>
                </th>
                <th class=" last-child">
                    <span class="sort-tab">
                        <?php echo $_smarty_tpl->getConfigVariable('Type');?>

                    </span>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SearchResults']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Item']->key;
?>
                <tr class="row<?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>2<?php } else { ?>1<?php }?>">
                    <td>
                        <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
" class="item-link color-q<?php echo $_smarty_tpl->tpl_vars['Item']->value['Quality'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
">
                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Item']->value['icon'];?>
.jpg&quot;);">
                            </span>
                            <strong><?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
</strong>
                        </a>
                    </td>
                    <td class="align-center">
                        <?php echo $_smarty_tpl->tpl_vars['Item']->value['ItemLevel'];?>

                    </td>
                    <td class="align-center">
                        <?php echo $_smarty_tpl->tpl_vars['Item']->value['RequiredLevel'];?>

                    </td>
                    <td>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['Item']->value['Class'];?>

                        <em>(<?php echo $_smarty_tpl->tpl_vars['Item']->value['Subclass'];?>
)</em>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>
