<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 11:53:08
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\admin\admin_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27592574ff3f49bf174-20819640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d1d6da1fba9801b6faf6bbad4f3d4ecd6b85ba' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\admin\\admin_sidebar.tpl',
      1 => 1446078580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27592574ff3f49bf174-20819640',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574ff3f49d3167_46427003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ff3f49d3167_46427003')) {function content_574ff3f49d3167_46427003($_smarty_tpl) {?><div id="lobby-account">
    <div class="lobby-box">
        <div id="site_control" style="margin-bottom: 10px;">
            <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Administrator_SiteControl');?>
</h3>
            <ul>
                <li>
                    
                        

                        
                    
                    Not Yet Implemented
                </li>
            </ul>
        </div>

        <div id="forum_control" style="margin-bottom: 10px;">
            <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Administrator_ForumControl');?>
</h3>
            <ul>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/forum/categories" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Forum_Manage_Categories');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/forum/mvp" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Forum_Manage_MVP');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/forum/posts" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Forum_Manage_Posts');?>

                        </a>
                    </h4>
                </li>
            </ul>
        </div>

        <div id="articles_control" style="margin-bottom: 10px;">
            <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles');?>
</h3>
            <ul>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/articles/add-articles" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Add');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/articles/delete-articles" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Delete');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/articles/edit-articles" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Articles_Edit');?>

                        </a>
                    </h4>
                </li>
            </ul>
        </div>



        <div id="patchnotes_control" style="margin-bottom: 10px;">
            <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Administrator_PatchNotes');?>
</h3>
            <ul>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/patchnotes/add" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_PatchNotes_Add');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/patchnotes/delete" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_PatchNotes_Delete');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/patchnotes/edit" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_PatchNotes_Edit');?>

                        </a>
                    </h4>
                </li>
            </ul>
        </div>



        
            
            
                
                    
                        

                        
                    
                
            
        

        <div id="shop_control" style="margin-bottom: 10px;">
            <h3 class="section-title"><?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_Management');?>
</h3>
            <ul style="list-style-type: disc;">
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/shop/add-item" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_AddItem');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/shop/delete-item" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_DeleteItem');?>

                        </a>
                    </h4>
                </li>
                <li>
                    <h4 class="subcategory">
                        <a href="/admin/shop/edit-item" style="color: #356fed;">
                            - <?php echo $_smarty_tpl->getConfigVariable('Administrator_Shop_EditItem');?>

                        </a>
                    </h4>
                </li>
            </ul>
        </div>


    </div>
</div><?php }} ?>
