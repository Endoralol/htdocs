<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:22:39
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\sidebar\events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23188574f35ff659685-93650642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b239e9f7584f86d7c45b32b1cd2e2d63177bb26c' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\sidebar\\events.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23188574f35ff659685-93650642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Characters' => 0,
    'User' => 0,
    'Character' => 0,
    'Events' => 0,
    'Event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f35ff6b3df0_48998146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f35ff6b3df0_48998146')) {function content_574f35ff6b3df0_48998146($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\OpenServer\\domains\\wow.loc\\Core\\Libraries\\Smarty\\plugins\\modifier.date_format.php';
?><?php if (isset($_SESSION['loggedin'])&&$_SESSION['loggedin']) {?>
<div  class="sidebar-module " id="sidebar-events">
    <div class="sidebar-title">
        <h3 class="header-3 title-events">
            <?php  $_smarty_tpl->tpl_vars['Character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Characters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Character']->key => $_smarty_tpl->tpl_vars['Character']->value) {
$_smarty_tpl->tpl_vars['Character']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['User']->value['pinned_character']!=null&&$_smarty_tpl->tpl_vars['Character']->value['guid']==$_smarty_tpl->tpl_vars['User']->value['pinned_character']) {?>
                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/events">
                    <?php echo $_smarty_tpl->getConfigVariable('Guild_Events');?>

                </a>
                <?php }?>
            <?php } ?>
        </h3>
    </div>

    <div class="sidebar-content">
        <div class="sidebar-events">
            <h4><?php echo $_smarty_tpl->getConfigVariable('Today');?>
</h4>
            <ul class="sidebar-list today">
                <?php if (count($_smarty_tpl->tpl_vars['Events']->value)==0) {?>
                    No events
                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['Event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Event']->key => $_smarty_tpl->tpl_vars['Event']->value) {
$_smarty_tpl->tpl_vars['Event']->_loop = true;
?>
                        <li data-id="<?php echo $_smarty_tpl->tpl_vars['Event']->value['eventEntry'];?>
" class="event-summary sidebar-tile system-event">
                            <a href="#" rel="np">
                                <span class="icon-frame ">
                                    <img src="/Templates/FreedomCore/images/calendar/calendar_weekendpvpskirmishstart.png" alt="" width="27" height="27" />
                                    <span class="frame"></span>
                                </span>

                                <span class="info-wrapper clear-after">
                                    <span class="date date-status">
                                        00:00
                                    </span>
                                    <span class="title"><?php echo $_smarty_tpl->tpl_vars['Event']->value['description'];?>
</span>
                                    <span class="date">
                                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Event']->value['next_start'],"%d.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Event']->value['next_end'],"%d.%m");?>

                                    </span>
                                </span>
                                <span class="clear"><!-- --></span>
                            </a>
                        </li>
                        <span class="clear"><!-- --></span>
                    <?php } ?>
                <?php }?>
            </ul>

        </div>

    </div>
</div>
<?php }?><?php }} ?>
