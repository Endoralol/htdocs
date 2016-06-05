<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 11:37:12
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/blocks/profession_loot_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73670458575293385bc5b9-93372433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6166f47801612630660304817514d54a22846f61' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/blocks/profession_loot_list.tpl',
      1 => 1464860657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73670458575293385bc5b9-93372433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TotalRecipes' => 0,
    'LearnedRecipes' => 0,
    'UnlearnedRecipes' => 0,
    'SelectedProfession' => 0,
    'Recipe' => 0,
    'Template' => 0,
    'UnRecipes' => 0,
    'URecipe' => 0,
    'ProfessionInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752933882c386_26856911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752933882c386_26856911')) {function content_5752933882c386_26856911($_smarty_tpl) {?><div class="profile-filters" id="profession-filters">
    <div class="keyword">
        <span class="view"></span>
        <span class="reset" style="display: none"></span>
        <input class="input" id="filter-keyword" type="text" value="Фильтр" alt="Фильтр" data-filter="row" data-name="filter" />
    </div>
    <div class="tabs">
        <?php $_smarty_tpl->tpl_vars['UnlearnedRecipes'] = new Smarty_variable($_smarty_tpl->tpl_vars['TotalRecipes']->value-count($_smarty_tpl->tpl_vars['LearnedRecipes']->value), null, 0);?>
        <a href="javascript:;" data-status="learned" class="tab-active">
            <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Collected');?>
 (<?php echo count($_smarty_tpl->tpl_vars['LearnedRecipes']->value);?>
)
        </a>
        <a href="javascript:;" data-status="unknown">
            <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_NotCollected');?>
 (<?php echo $_smarty_tpl->tpl_vars['UnlearnedRecipes']->value;?>
)
        </a>
    </div>
</div>
<div id="profession-loading" style="display: none;"></div>
<div id="professions" style="display:block;">
    <div class="table-options data-options table-top">
        <div class="option">
            <ul class="ui-pagination"></ul>
        </div>
        <?php echo $_smarty_tpl->getConfigVariable('Results');?>
<strong class="results-start">0</strong>–<strong class="results-end">0</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total">0</strong>
        <span class="clear"><!-- --></span>
    </div>
    <div class="data-container type-table">
        <div class="table ">
            <table>
                <thead>
                <tr>
                    <th class=" first-child">
                        <a href="javascript:;" class="sort-link default">
				        <span class="arrow">
                            <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Title');?>

                        </span>
                        </a>
                    </th>
                    <th class="align-center">
                        <a href="javascript:;" class="sort-link numeric">
				        <span class="arrow">
                            <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Level');?>

                        </span>
                        </a>
                    </th>
                    <th class="align-center">
                        <a href="javascript:;" class="sort-link numeric">
				        <span class="arrow">
                            <?php if ($_smarty_tpl->tpl_vars['SelectedProfession']->value=='archeology') {?>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Fragment');?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Regs');?>

                            <?php }?>
                        </span>
                        </a>
                    </th>
                    <th class="align-center">
                        <a href="javascript:;" class="sort-link numeric">
				        <span class="arrow">
                            <?php if ($_smarty_tpl->tpl_vars['SelectedProfession']->value=='archeology') {?>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_KeyFragment');?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Source');?>

                            <?php }?>
                        </span>
                        </a>

                    </th>
                    <th class=" last-child">
                        <a href="javascript:;" class="sort-link default">
				        <span class="arrow down">
                            <?php if ($_smarty_tpl->tpl_vars['SelectedProfession']->value=='archeology') {?>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Project');?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Skill');?>

                            <?php }?>
                        </span>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if (empty($_smarty_tpl->tpl_vars['LearnedRecipes']->value)) {?>
                    <tr class="no-results" style="display: table-row;">
                        <td colspan="5"><?php echo $_smarty_tpl->getConfigVariable('Results_Nothing_Found');?>
.</td>
                    </tr>
                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['Recipe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Recipe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LearnedRecipes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Recipe']->key => $_smarty_tpl->tpl_vars['Recipe']->value) {
$_smarty_tpl->tpl_vars['Recipe']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['Recipe']->value['effect1itemtype']!=0) {?>
                            <tr class="learned" style="font-size: 12px;">
                                <td data-raw="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['recipe_name'];?>
">
                                    <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['effect1itemtype'];?>
" class="item-link color-q<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['effect1itemquality'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['effect1itemtype'];?>
">
                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['resultingitem_icon'];?>
.jpg&quot;);"></span>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['Recipe']->value['recipe_name'];?>
</strong>
                                    </a>
								<span style="display: none">
		                            Расходуемые
								</span>
                                </td>
                                <td class="align-center" data-raw="">

                                </td>
                                <td class="reagents" data-raw="2">
                                    <div class="reagent-list">
                                        <?php if ($_smarty_tpl->tpl_vars['Recipe']->value['reagent1']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent1'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent1'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent1_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagentcount1'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent1_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['Recipe']->value['reagent2']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent2'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent2'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent2_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagentcount2'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent2_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['Recipe']->value['reagent3']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent3'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent3'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent3_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagentcount3'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent3_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['Recipe']->value['reagent4']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent4'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent4'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent4_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagentcount4'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent4_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['Recipe']->value['reagent5']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent5'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent5'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent5_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagentcount5'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['Recipe']->value['reagent5_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <span class="clear"><!-- --></span>
                                    </div>
                                </td>
                                <td class="source" data-raw="-3">
                                </td>
                                <td data-raw="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['req_skill_value'];?>
" class="align-center">
                                    <span class="tip recipe-skill" data-skillupchance="<?php echo $_smarty_tpl->tpl_vars['Recipe']->value['req_skill_value'];?>
"><?php echo $_smarty_tpl->tpl_vars['Recipe']->value['req_skill_value'];?>
</span>
                                </td>
                            </tr>
                        <?php }?>
                    <?php } ?>
                <?php }?>
                <?php if (empty($_smarty_tpl->tpl_vars['UnlearnedRecipes']->value)) {?>
                    <tr class="no-results" style="display: table-row;">
                        <td colspan="5"><?php echo $_smarty_tpl->getConfigVariable('Results_Nothing_Found');?>
.</td>
                    </tr>
                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['URecipe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['URecipe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['UnRecipes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['URecipe']->key => $_smarty_tpl->tpl_vars['URecipe']->value) {
$_smarty_tpl->tpl_vars['URecipe']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['URecipe']->value['effect1itemtype']!=0) {?>
                            <tr class="unknown" style="font-size: 12px;">
                                <td data-raw="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['recipe_name'];?>
">
                                    <a href="/item/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['effect1itemtype'];?>
" class="item-link color-q2" data-item="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['effect1itemtype'];?>
">
                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['resultingitem_icon'];?>
.jpg&quot;);"></span>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['URecipe']->value['recipe_name'];?>
</strong>
                                    </a>
								<span style="display: none">
		                            Расходуемые
								</span>
                                </td>
                                <td class="align-center" data-raw="">

                                </td>
                                <td class="reagents" data-raw="2">
                                    <div class="reagent-list">
                                        <?php if ($_smarty_tpl->tpl_vars['URecipe']->value['reagent1']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent1'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent1'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent1_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagentcount1'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent1_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['URecipe']->value['reagent2']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent2'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent2'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent2_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagentcount2'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent2_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['URecipe']->value['reagent3']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent3'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent3'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent3_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagentcount3'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent3_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['URecipe']->value['reagent4']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent4'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent4'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent4_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagentcount4'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent4_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['URecipe']->value['reagent5']!=0) {?>
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent5'];?>
" class="item-link reagent" data-item="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent5'];?>
">
                                            <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent5_icon'];?>
.jpg&quot;);">
                                                <?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagentcount5'];?>

                                            </span>
                                                <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['URecipe']->value['reagent5_name'];?>
</span>
                                            </a>
                                        <?php }?>
                                        <span class="clear"><!-- --></span>
                                    </div>
                                </td>
                                <td class="source" data-raw="-3">
                                </td>
                                <td data-raw="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['req_skill_value'];?>
" class="align-center">
                                    <span class="tip recipe-skill" data-skillupchance="<?php echo $_smarty_tpl->tpl_vars['URecipe']->value['req_skill_value'];?>
"><?php echo $_smarty_tpl->tpl_vars['URecipe']->value['req_skill_value'];?>
</span>
                                </td>
                            </tr>
                        <?php }?>
                    <?php } ?>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table-options data-options table-bottom">
        <div class="option">
            <ul class="ui-pagination"></ul>
        </div>
        <?php echo $_smarty_tpl->getConfigVariable('Results');?>
<strong class="results-start">0</strong>–<strong class="results-end">0</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total">0</strong>
        <span class="clear"><!-- --></span>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    //<![CDATA[
    $(document).ready(function() {
        Profession.typeId = <?php echo $_smarty_tpl->tpl_vars['ProfessionInfo']->value['id'];?>
;
        Profession.table = DataSet.factory('#professions', {
            paging: true,
            totalResults: 208,
            elementControls: '.data-options'
        });

        RecipeTable.init('#professions', {
            characterMode: true,
            name: '<?php echo $_smarty_tpl->tpl_vars['ProfessionInfo']->value['translation'];?>
'
        });

    });
    //]]>
<?php echo '</script'; ?>
><?php }} ?>
