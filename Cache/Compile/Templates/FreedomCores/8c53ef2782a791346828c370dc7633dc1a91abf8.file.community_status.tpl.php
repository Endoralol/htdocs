<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 17:52:33
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/community_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55519279157470db1b19b94-80840145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c53ef2782a791346828c370dc7633dc1a91abf8' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/community_status.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55519279157470db1b19b94-80840145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Realms' => 0,
    'Realm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57470db1cd2038_22624995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57470db1cd2038_22624995')) {function content_57470db1cd2038_22624995($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/community" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Community');?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/community/status" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Status_Title');?>
</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="content-header">
                <h2 class="header "><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Status_Title');?>
</h2>
                <div class="desc"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Status_Full_Desc');?>
</div>
                <span class="clear"><!-- --></span>
            </div>
            <div id="realm-status">
                <ul class="tab-menu ">
                    <li>
                        <a href="javascript:;" class="tab-active">
                            <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Show_All_Realms');?>

                        </a>
                    </li>
                </ul>
                <div class="filter-toggle">
                    <a href="javascript:;" class="selected" onclick="RealmStatus.filterToggle(this)">
                        <span style="display: none"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Show');?>
</span>
                        <span><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Hide');?>
</span>
                    </a>
                </div>
                <span class="clear"><!-- --></span>
                <div id="realm-filters" class="table-filters">
                    <form action="">
                        <div class="filter">
                            <label for="filter-status"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_State');?>
</label>
                            <select id="filter-status" class="input select" data-filter="column" data-column="0">
                                <option value=""><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_All');?>
</option>
                                <option value="up"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Online');?>
</option>
                                <option value="down"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Offline');?>
</option>
                            </select>
                        </div>
                        <div class="filter">
                            <label for="filter-name"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Realm_Name');?>
</label>
                            <input type="text" class="input" id="filter-name" data-filter="column" data-column="1" />
                        </div>
                        <div class="filter">
                            <label for="filter-type"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Type');?>
</label>

                            <select id="filter-type" class="input select" data-filter="column" data-column="2">
                                <option value=""><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_All');?>
</option>
                                <option value="rp">
                                    <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_RP');?>

                                </option>
                                <option value="rppvp">
                                    <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_RPPVP');?>

                                </option>
                                <option value="pve">
                                    <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_PVE');?>

                                </option>
                                <option value="pvp">
                                    <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_PVP');?>

                                </option>
                            </select>
                        </div>
                        <div class="filter">
                            <label for="filter-population"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Population');?>
</label>
                            <select id="filter-population" class="input select" data-filter="column" data-column="3">
                                <option value=""><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_All');?>
</option>
                                <option value="high"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_High');?>
</option>
                                <option value="low"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Low');?>
</option>
                                <option value="medium"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Medium');?>
</option>
                            </select>
                        </div>
                        <div class="filter" id="locale-filter">
                            <label for="filter-locale"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Language');?>
</label>
                            <select id="filter-locale" class="input select" data-column="4" data-filter="column">
                                <option value=""><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_All');?>
</option>
                                <option value="<?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Russian');?>
"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Russian');?>
</option>
                                <option value="<?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_English');?>
"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_English');?>
</option>
                                <option value="<?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_German');?>
"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_German');?>
</option>
                                <option value="<?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Spanish');?>
"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Spanish');?>
</option>
                                <option value="<?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Development');?>
"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Development');?>
</option>
                            </select>
                        </div>
                        <div class="filter">
                            <label for="filter-queue"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Queue');?>
</label>
                            <input type="checkbox" id="filter-queue" class="input" value="true" data-column="5" data-filter="column" />
                        </div>
                        <div class="filter" style="margin: 5px 0 5px 15px">
                            <button class="ui-button button1" type="button" id="filter-button" onclick="RealmStatus.reset();"><span class="button-left"><span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Clear_Filter');?>
</span></span></button>
                        </div>
                        <span class="clear"><!-- --></span>
                    </form>
                </div>
            </div>
            <span class="clear"><!-- --></span>
            <div id="all-realms">
                <div class="table full-width data-container type-table">
                    <table>
                        <thead>
                        <tr>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_State');?>
</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow up"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Realm_Name');?>
</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Type');?>
</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Population');?>
</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Language');?>
</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow"><?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Queue');?>
</span></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['Realm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Realm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Realms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Realm']->key => $_smarty_tpl->tpl_vars['Realm']->value) {
$_smarty_tpl->tpl_vars['Realm']->_loop = true;
?>
                            <tr class="row1">
                                <td class="status" data-raw="<?php echo $_smarty_tpl->tpl_vars['Realm']->value['status'];?>
">
                                    <div class="status-icon <?php echo $_smarty_tpl->tpl_vars['Realm']->value['status'];?>
" <?php if ($_smarty_tpl->tpl_vars['Realm']->value['status']=="up") {?> data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Online');?>
" <?php } else { ?> data-tooltip="<?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Offline');?>
" <?php }?>>
                                    </div>
                                </td>
                                <td class="name">
                                    <?php echo $_smarty_tpl->tpl_vars['Realm']->value['name'];?>

                                </td>
                                <td data-raw="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['Realm']->value['type'], 'UTF-8');?>
" class="type">
                                    <span class="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['Realm']->value['type'], 'UTF-8');?>
">
                                            (<?php echo $_smarty_tpl->tpl_vars['Realm']->value['type'];?>
)
                                    </span>
                                </td>
                                <td class="population" data-raw="high">
									<?php if ($_smarty_tpl->tpl_vars['Realm']->value['population']<=0.5) {?>
                                    <span class="low">
                                        <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Low');?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['Realm']->value['population']>0.5&&$_smarty_tpl->tpl_vars['Realm']->value['population']<=1.0) {?>
                                    <span class="medium">
                                        <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_Medium');?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['Realm']->value['population']>1.0&&$_smarty_tpl->tpl_vars['Realm']->value['population']<=2.0) {?>
                                    <span class="high">
                                        <?php echo $_smarty_tpl->getConfigVariable('Community_Realms_Filter_High');?>

									<?php }?>
							</span>
                                </td>
                                <td class="locale">
                                   <?php echo $_smarty_tpl->tpl_vars['Realm']->value['language'];?>

                                </td>
                                <td data-raw="false" class="queue">
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <span class="clear"><!-- --></span>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
