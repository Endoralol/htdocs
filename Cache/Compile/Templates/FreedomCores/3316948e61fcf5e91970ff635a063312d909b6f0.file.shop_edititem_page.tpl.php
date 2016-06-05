<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 11:57:25
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\admin\shop_edititem_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1121574ff4f5362a26-09949563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3316948e61fcf5e91970ff635a063312d909b6f0' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\admin\\shop_edititem_page.tpl',
      1 => 1446041218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1121574ff4f5362a26-09949563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'ItemData' => 0,
    'BG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574ff4f53bfbb2_08326091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ff4f53bfbb2_08326091')) {function content_574ff4f53bfbb2_08326091($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('account/account_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</span>
                    </a> >
                    <a href="/admin/dashboard/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Title');?>
</span>
                    </a> >
                    <a href="/admin/shop/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop');?>
</span>
                    </a> >
                    <a href="/admin/shop/edit-item" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_EditItem');?>
</span>
                    </a>
                </h2>
                <br />
                <h3 class="headline"><?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
</h3>
                <h2 class="subcategory"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_EditItem');?>
</h2>
            </div>
            <div class="dashboard service">
                <form method="post" action="/admin/shop/edit-item-complete" id="edit-item" novalidate="novalidate">
                <div id="page-content" class="page-content">
                    <div class="columns-2-1 settings-content">
                        <div class="column column-left">
                            <div class="item-change">
                                <span class="clear"></span>
                                    <input type="hidden" id="item_id" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['id'];?>
">
                                    <div class="input-row input-row-text">
                                    <span class="input-left">
                                        <label for="item_name">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Edit_Item_Name');?>
:
                                            </span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="text" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
" id="item_name" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="319" tabindex="1" required="required" />
                                        </span>
                                    </span>
                                    </div>
                                    <div class="input-row input-row-text" style="margin-top: 15px;">
                                    <span class="input-left">
                                        <label for="item_price">
                                            <span class="label-text">
                                                <?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Edit_Item_Price');?>
:
                                            </span>
                                        </label>
                                    </span>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="text" name="item_price" value="<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['price'];?>
" id="item_price" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="319" tabindex="1" required="required" />
                                        </span>
                                    </span>
                                    </div>

                                    <div class="submit-row" id="submit-row">
                                        <div class="input-left"></div>
                                        <div class="input-right">
                                            <button class="ui-button button1" type="submit" id="password-submit" tabindex="1">
                                            <span class="button-left">
                                                <span class="button-right"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Edit_Item_Save');?>
</span>
                                            </span>
                                            </button>
                                            <a class="ui-cancel " href="/admin/dashboard/" tabindex="1">
                                            <span>
                                                <?php echo $_smarty_tpl->getConfigVariable('Account_Management_Parameters_Cancel');?>

                                            </span>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="column column-right">
                            <div class="email-information">
                                <p class="caption"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Edit_Item_Template');?>
</p>
                                <span class="input-right">
                                    <span class="input-select input-select-small">
                                    <select name="background_template" id="background_template" class="small border-5 glow-shadow-2" style="width: 80%;" tabindex="1" required="required">
                                        <?php  $_smarty_tpl->tpl_vars['BG'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BG']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ItemData']->value['backgrounds']['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BG']->key => $_smarty_tpl->tpl_vars['BG']->value) {
$_smarty_tpl->tpl_vars['BG']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['ItemData']->value['item_background']==$_smarty_tpl->tpl_vars['BG']->value['image']) {?>
                                                <option selected value="<?php echo $_smarty_tpl->tpl_vars['BG']->value['image'];?>
" data-background-type="<?php echo $_smarty_tpl->tpl_vars['BG']->value['name'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['BG']->value['name'];?>

                                                </option>
                                            <?php } else { ?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['BG']->value['image'];?>
" data-background-type="<?php echo $_smarty_tpl->tpl_vars['BG']->value['name'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['BG']->value['name'];?>

                                                </option>
                                            <?php }?>
                                        <?php } ?>
                                    </select>
                                    <img class="border-10 glow-shadow-2" id="template_preview" name="template_preview" style="width: 250px; margin-top: 20px;">
                                </span>
                                <p></p>
                                <p class="caption"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Edit_Item_Color');?>
</p>
                                <p>
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="text" id="color_template" name="color_template" class="small border-5 glow-shadow-2" style="width: 80%;" readonly="readonly"/>
                                        </span>
                                    </span>
                                </p>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var TemplatePreview = $('#template_preview');
                                        var TemplateColor = $('#color_template');
                                        var ImagePath = "<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['backgrounds']['images_folder'];?>
";
                                        var Sizes = [<?php echo implode($_smarty_tpl->tpl_vars['ItemData']->value['backgrounds']['sizes'],',');?>
];
                                        var Extension = ".jpg";
                                        $('#background_template').on('change', function() {
                                            var Selected = this.value;
                                            var Path = ImagePath+Selected+"_1024.jpg";
                                            var Color = "";
                                            TemplatePreview.attr('src', Path);
                                            if(Selected == 'item_lk')
                                                Color = "#050933";
                                            else if(Selected == 'item_before_lk')
                                                Color = "#39100d";
                                            else
                                                Color = "#240a08";
                                            TemplateColor.attr('value', Color);
                                            TemplateColor.css("background-color", Color);
                                        });
                                        $(document).ready(function() {
                                            var SelectedTempalte = $('#background_template').find(":selected").val();
                                            var Path = ImagePath+SelectedTempalte+"_1024.jpg";
                                            var Color = "";
                                            if(SelectedTempalte == 'item_lk')
                                                Color = "#050933";
                                            else if(SelectedTempalte == 'item_before_lk')
                                                Color = "#39100d";
                                            else
                                                Color = "#240a08";
                                            TemplatePreview.attr('src', Path);
                                            TemplateColor.attr('value', Color);
                                            TemplateColor.css("background-color", Color);
                                        });
                                    <?php echo '</script'; ?>
>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>




<pre>
   <?php echo print_r($_smarty_tpl->tpl_vars['ItemData']->value);?>

</pre>

<?php echo $_smarty_tpl->getSubTemplate ('account/account_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
