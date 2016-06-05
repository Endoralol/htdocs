<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:15:33
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\blocks\profile_summary_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16992574f4265120871-33875615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61a048429c0b79d311a9cb45c948d13aad6f15a8' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\blocks\\profile_summary_right.tpl',
      1 => 1445427704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16992574f4265120871-33875615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Character' => 0,
    'Specializations' => 0,
    'Spec' => 0,
    'Template' => 0,
    'i' => 0,
    'glyphid' => 0,
    'Glyphs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4265173f10_56258468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4265173f10_56258468')) {function content_574f4265173f10_56258468($_smarty_tpl) {?><div class="summary-bottom-right">
    <div class="summary-talents" id="summary-talents">
        <h3 class="category ">
            <span class="title"><?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_talentcalc');?>
</span>
        </h3>

        <div class="profile-box-simple">
            <div class="talent-specs" data-class-name="<?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['name'];?>
">
                <?php  $_smarty_tpl->tpl_vars['Spec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Spec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Specializations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Spec']->key => $_smarty_tpl->tpl_vars['Spec']->value) {
$_smarty_tpl->tpl_vars['Spec']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['Spec']->value['spec']==$_smarty_tpl->tpl_vars['Spec']->value['activespec']) {?>
                            <a data-spec-id="<?php echo $_smarty_tpl->tpl_vars['Spec']->value['spec'];?>
" class="spec-button spec-<?php echo $_smarty_tpl->tpl_vars['Spec']->value['spec'];?>
 selected active" href="javascript:;" data-spec-name="<?php echo $_smarty_tpl->tpl_vars['Spec']->value['name'];?>
" data-tooltip="">
                                    <span class="inner">
                                    <span class="checkmark"></span>
                            <?php } else { ?>
                                <a data-spec-id="<?php echo $_smarty_tpl->tpl_vars['Spec']->value['spec'];?>
" class="spec-button spec-<?php echo $_smarty_tpl->tpl_vars['Spec']->value['spec'];?>
" href="javascript:;" data-spec-name="<?php echo $_smarty_tpl->tpl_vars['Spec']->value['name'];?>
" data-tooltip="">
                                    <span class="inner">
                            <?php }?>
                            <span class="frame">
                                <span class="icon"><img src="/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/medium/spec_<?php echo $_smarty_tpl->tpl_vars['Character']->value['class_data']['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['Spec']->value['name'];?>
.jpg" alt="" /></span>
                            </span>
                            <span class="name-build">
                                <span class="name "><?php echo $_smarty_tpl->tpl_vars['Spec']->value['Description'];?>
</span>
                            </span>
                        </span>
                    </a>
                <?php } ?>

                <span class="clear"><!-- --></span>
            </div>
            <div class="talent-build selected" id="talent-build-0">
                <div class="talents">

                </div>
                <div class="glyphs">
                    <ul>
                        <li>
                            <h3>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Glyphs_Big');?>

                            </h3>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<7) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<7; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <?php $_smarty_tpl->tpl_vars['glyphid'] = new Smarty_variable(('glyph').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value==1||$_smarty_tpl->tpl_vars['i']->value==4||$_smarty_tpl->tpl_vars['i']->value==6) {?>
                                <?php if ($_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]!=0) {?>
                                    <li>
                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['icon'];?>
.jpg&quot;);" data-spell="<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['SpellID'];?>
"></span>
                                    </li>
                                <?php }?>
                            <?php }?>
                        <?php }} ?>
                        <li>
                            <h3>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Glyphs_Small');?>

                            </h3>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<7) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<7; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <?php $_smarty_tpl->tpl_vars['glyphid'] = new Smarty_variable(('glyph').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value==2||$_smarty_tpl->tpl_vars['i']->value==3||$_smarty_tpl->tpl_vars['i']->value==5) {?>
                                <?php if ($_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]!=0) {?>
                                    <li>
                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['icon'];?>
.jpg&quot;);" data-spell="<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['SpellID'];?>
"></span>
                                    </li>
                                <?php }?>
                            <?php }?>
                        <?php }} ?>
                    </ul>
                </div>
            </div>

            <div class="talent-build" id="talent-build-1" style="display: none;">
                <div class="talents">

                </div>
                <div class="glyphs">
                    <ul>
                        <li>
                            <h3>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Glyphs_Big');?>

                            </h3>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<7) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<7; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <?php $_smarty_tpl->tpl_vars['glyphid'] = new Smarty_variable(('glyph').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value==1||$_smarty_tpl->tpl_vars['i']->value==4||$_smarty_tpl->tpl_vars['i']->value==6) {?>
                                <?php if ($_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]!=0) {?>
                                    <li>
                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['icon'];?>
.jpg&quot;);" data-spell="<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['SpellID'];?>
"></span>
                                    </li>
                                <?php }?>
                            <?php }?>
                        <?php }} ?>

                        <li>
                            <h3>
                                <?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Glyphs_Small');?>

                            </h3>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<7) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<7; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <?php $_smarty_tpl->tpl_vars['glyphid'] = new Smarty_variable(('glyph').($_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value==2||$_smarty_tpl->tpl_vars['i']->value==3||$_smarty_tpl->tpl_vars['i']->value==5) {?>
                                <?php if ($_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]!=0) {?>
                                    <li>
                                        <span class="icon-frame frame-18 " style="background-image: url(&quot;/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/icons/small/<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['icon'];?>
.jpg&quot;);" data-spell="<?php echo $_smarty_tpl->tpl_vars['Glyphs']->value[0][$_smarty_tpl->tpl_vars['glyphid']->value]['SpellID'];?>
"></span>
                                    </li>
                                <?php }?>
                            <?php }?>
                        <?php }} ?>
                    </ul>
                </div>
            </div>

        </div>
        <?php echo '<script'; ?>
  type="text/javascript">
            //<![CDATA[
            $(document).ready(function() {

                var specLinks = {};

                specLinks[0] = "/wow/en/tool/talent-calculator#Zb!0011220!cHMYpO";
                specLinks[1] = "/wow/en/tool/talent-calculator#ZZ!0010020!cQMKLp";

                Summary.Talents(specLinks);
            });
            //]]>
        <?php echo '</script'; ?>
>
    </div>
</div>
<?php }} ?>
