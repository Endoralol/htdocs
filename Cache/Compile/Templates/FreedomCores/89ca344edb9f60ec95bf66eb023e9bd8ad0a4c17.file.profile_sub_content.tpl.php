<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:15:33
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\blocks\profile_sub_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9356574f42652a2e37-91949182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ca344edb9f60ec95bf66eb023e9bd8ad0a4c17' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\blocks\\profile_sub_content.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9356574f42652a2e37-91949182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Template' => 0,
    'Character' => 0,
    'ArenaRating' => 0,
    'Rating' => 0,
    'Professions' => 0,
    'Profession' => 0,
    'ComputeProfessionBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f42652b9bf0_81772733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f42652b9bf0_81772733')) {function content_574f42652b9bf0_81772733($_smarty_tpl) {?><div class="summary-bottom-sub-content">
    <div class="summary-bottom-right">
        <div class="profile-recentactivity">
            <h3 class="category ">
                <a href="feed" class="view-more">Recent Activity</a>
            </h3>
            <div class="profile-box-simple">
                <ul class="activity-feed">
                    <li>
                        <dl>
                            <dd>
                                <a href="/item/49623" class="color-5" data-item="49623">
		                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/inv_axe_113.jpg&quot;);"></span>
                                </a>
                                Obtained <a href="/item/49623" class="color-q5" data-item="49623">Shadowmourne</a>.
                            </dd>
                            <dt>5 days ago</dt>
                        </dl>
                    </li>
                </ul>
                <div class="profile-linktomore">
                    <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/feed" rel="np">View earlier activity</a>
                </div>

                <span class="clear"><!-- --></span>
            </div>
        </div>
    </div>
    <div class="summary-bottom-left">
        <div class="summary-battlegrounds">
            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/pvp" class="link">Player vs. Player</a>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['Rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Rating']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ArenaRating']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Rating']->key => $_smarty_tpl->tpl_vars['Rating']->value) {
$_smarty_tpl->tpl_vars['Rating']->_loop = true;
?>
                    <li class="rating">
                        <span class="value"><?php echo $_smarty_tpl->tpl_vars['Rating']->value['personalRating'];?>
</span>
                        <span class="name">
                            <?php if ($_smarty_tpl->tpl_vars['Rating']->value['type']==2) {?>
                                2v2 arena Rating
                            <?php } elseif ($_smarty_tpl->tpl_vars['Rating']->value['type']==3) {?>
                                3v3 arena Rating
                            <?php } else { ?>
                                5v5 arena Rating
                            <?php }?>
                        </span>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="summary-professions">
            <h3 class="category ">
                <a href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/profession/" class="view-more"><?php echo $_smarty_tpl->getConfigVariable('Game_Professions');?>
</a>
            </h3>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['Profession'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Profession']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Professions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Profession']->key => $_smarty_tpl->tpl_vars['Profession']->value) {
$_smarty_tpl->tpl_vars['Profession']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['Profession']->value['primary']==1) {?>
                        <?php $_smarty_tpl->tpl_vars['ComputeProfessionBar'] = new Smarty_variable(($_smarty_tpl->tpl_vars['Profession']->value['current']/$_smarty_tpl->tpl_vars['Profession']->value['max'])*100, null, 0);?>
                        <li>
                            <div class="profile-progress border-3">
                                <div class="bar border-3 hover" style="width: <?php echo $_smarty_tpl->tpl_vars['ComputeProfessionBar']->value;?>
%"></div>
                                <div class="bar-contents">
                                    <a class="profession-details" href="/character/<?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
/profession/<?php echo $_smarty_tpl->tpl_vars['Profession']->value['name'];?>
">
							<span class="icon">
                                <span class="icon-frame frame-12 ">
                                    <img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/trade_<?php echo $_smarty_tpl->tpl_vars['Profession']->value['name'];?>
.jpg" alt="" width="12" height="12" />
                                </span>
                            </span>
                                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['Profession']->value['translation'];?>
</span>
                                        <span class="value"><?php echo $_smarty_tpl->tpl_vars['Profession']->value['current'];?>
</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div><?php }} ?>
