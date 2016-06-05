<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:02:48
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/search_wowcharacter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2139135562575012587f5d24-77003639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c86fd56d52d96eebcc8135e7f6527e3d793f08ae' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/search_wowcharacter.tpl',
      1 => 1464860657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2139135562575012587f5d24-77003639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SearchedFor' => 0,
    'SearchResults' => 0,
    'i' => 0,
    'Character' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57501258872d56_04344768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57501258872d56_04344768')) {function content_57501258872d56_04344768($_smarty_tpl) {?><div class="view-table">
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th class=" first-child">
                        <a href="?f=wowcharacter&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;sort=subject&amp;dir=a" class="sort-link">
                            <span class="arrow">
                                <?php echo $_smarty_tpl->getConfigVariable('Community_Name');?>

                            </span>
                        </a>
                    </th>
                    <th>
                        <a href="?f=wowcharacter&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;sort=level&amp;dir=a" class="sort-link">
			                <span class="arrow">
                                <?php echo $_smarty_tpl->getConfigVariable('Character_Level');?>

                            </span>
                        </a>
                    </th>
                    <th>
                        <a href="?f=wowcharacter&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;sort=raceId&amp;dir=a" class="sort-link">
			                <span class="arrow">
                                <?php echo $_smarty_tpl->getConfigVariable('Race');?>

                            </span>
                        </a>
                    </th>
                    <th >
                        <a href="?f=wowcharacter&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;sort=classId&amp;dir=a" class="sort-link">
			                <span class="arrow">
                                <?php echo $_smarty_tpl->getConfigVariable('Class');?>

                            </span>
                        </a>
                    </th>
                    <th>
                        <a href="?f=wowcharacter&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;sort=factionId&amp;dir=a" class="sort-link">
			                <span class="arrow">
                                <?php echo $_smarty_tpl->getConfigVariable('Character_Faction');?>

                            </span>
                        </a>
                    </th>
                    <th>
                        <a href="?f=wowcharacter&amp;q=<?php echo $_smarty_tpl->tpl_vars['SearchedFor']->value;?>
&amp;sort=guildName&amp;dir=a" class="sort-link">
			                <span class="arrow">
                                <?php echo $_smarty_tpl->getConfigVariable('Community_Guild');?>

                            </span>
                        </a>
                    </th>
                    <th>
                        <a class="sort-link">
                            <span class="arrow">
                            <?php echo $_smarty_tpl->getConfigVariable('Character_Status');?>

                        </span>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php if ($_smarty_tpl->tpl_vars['SearchResults']->value['charactersfound']>0) {?>
                <?php  $_smarty_tpl->tpl_vars['Character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Character']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SearchResults']->value['characters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Character']->key => $_smarty_tpl->tpl_vars['Character']->value) {
$_smarty_tpl->tpl_vars['Character']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Character']->key;
?>
                    <tr class="row<?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>2<?php } else { ?>1<?php }?>">
                        <td>
                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/" class="item-link color-c<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
">
						<span class="icon-frame frame-18">
							<img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/2d/avatar/<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
-<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" alt="" width="18" height="18" />
						</span>
                                <strong><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</strong>
                            </a>
                        </td>
                        <td class="align-center">
                            <?php echo $_smarty_tpl->tpl_vars['Character']->value['level'];?>

                        </td>
                        <td class="align-center">
                        <span class="icon-frame frame-14 " data-tooltip="<?php echo $_smarty_tpl->tpl_vars['Character']->value['race_name'];?>
">
                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/race_<?php echo $_smarty_tpl->tpl_vars['Character']->value['race'];?>
_<?php echo $_smarty_tpl->tpl_vars['Character']->value['gender'];?>
.jpg" alt="" width="14" height="14" />
                        </span>
                        </td>
                        <td class="align-center">
                        <span class="icon-frame frame-14 " data-tooltip="<?php echo $_smarty_tpl->tpl_vars['Character']->value['class_name'];?>
">
                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/class_<?php echo $_smarty_tpl->tpl_vars['Character']->value['class'];?>
.jpg" alt="" width="14" height="14" />
                        </span>
                        </td>
                        <td class="align-center">
                        <span class="icon-frame frame-14 " data-tooltip="<?php echo $_smarty_tpl->tpl_vars['Character']->value['sidetranslation'];?>
">
                            <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/faction_<?php echo $_smarty_tpl->tpl_vars['Character']->value['side'];?>
.jpg" alt="" width="14" height="14" />
                        </span>
                        </td>
                        <td>
                            <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Character']->value['guild'];?>
/" class="sublink"><?php echo $_smarty_tpl->tpl_vars['Character']->value['guild'];?>
</a>
                        </td>
                        <td class="align-center">
                            <?php if ($_smarty_tpl->tpl_vars['Character']->value['online']==1) {?>
                                <font color="green"><?php echo $_smarty_tpl->getConfigVariable('Character_Online');?>
</font>
                            <?php } else { ?>
                                <font color="red"><?php echo $_smarty_tpl->getConfigVariable('Character_Offline');?>
</font>
                            <?php }?>
                        </td>
                    </tr>
                <?php } ?>
            <?php }?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>
