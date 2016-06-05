<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:25:08
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/items_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154151624557501794f0bf70-29799069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c82a897f5d5d70424972e2ab6fd69486d9ec13' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/items_index.tpl',
      1 => 1464860667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154151624557501794f0bf70-29799069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Requests' => 0,
    'PageData' => 0,
    'ResultsFound' => 0,
    'CountPages' => 0,
    'i' => 0,
    'SelectedPage' => 0,
    'OriginalPages' => 0,
    'Items' => 0,
    'Item' => 0,
    'Template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750179575f935_57498372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750179575f935_57498372')) {function content_5750179575f935_57498372($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="/game/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Game');?>
</span>
                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>
                    <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item" rel="np" class="breadcrumb-arrow" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Item_Category');?>
</span>
                        </a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item/?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['translation'];?>
</span>
                        </a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item/?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['translation'];?>
</span>
                        </a>
                    </li>
                    <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item/?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
" rel="np" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['translation'];?>
</span>
                        </a>
                    </li>
                <?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>
                    <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item" rel="np" class="breadcrumb-arrow" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Item_Category');?>
</span>
                        </a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item/?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
" rel="np" class="breadcrumb-arrow" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['translation'];?>
</span>
                        </a>
                    </li>
                    <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item/?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
" rel="np" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['translation'];?>
</span>
                        </a>
                    </li>
                <?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>
                    <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item" rel="np" class="breadcrumb-arrow" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Item_Category');?>
</span>
                        </a>
                    </li>
                    <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item/?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
" rel="np" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['translation'];?>
</span>
                        </a>
                    </li>
                <?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>
                    <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a href="/item/" rel="np" itemprop="url">
                            <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Item_Category');?>
</span>
                        </a>
                    </li>
                <?php }?>
            </ol>
        </div>
        <div class="content-bot clear">
            <div id="wiki" class="wiki directory wiki-item">
                <div class="title">
                    <h2>
                        <?php echo $_smarty_tpl->getConfigVariable('Item_Category');?>

                    </h2>
                </div>
                <div class="item-results" id="item-results">
                    <div class="table-options data-options">
                        <div class="option">
                            <ul class="ui-pagination">
                            <?php $_smarty_tpl->tpl_vars['CountPages'] = new Smarty_variable(($_smarty_tpl->tpl_vars['ResultsFound']->value/50), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['CountPages']->value>sprintf("%d",$_smarty_tpl->tpl_vars['CountPages']->value)) {?>
                                    <?php $_smarty_tpl->tpl_vars['OriginalPages'] = new Smarty_variable($_smarty_tpl->tpl_vars['CountPages']->value, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['CountPages'] = new Smarty_variable(sprintf("%d",$_smarty_tpl->tpl_vars['CountPages']->value)+1, null, 0);?>
                                <?php }?>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['CountPages']->value) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['CountPages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['CountPages']->value<10) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['SelectedPage']->value) {?>
                                            <li class="current">
                                                <?php } else { ?>
                                            <li>
                                        <?php }?>
                                        <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                            <span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                        </a>
                                        </li>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['SelectedPage']->value<6) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->value<8) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['SelectedPage']->value) {?>
                                                    <li class="current">
                                                        <?php } else { ?>
                                                    <li>
                                                <?php }?>
                                                <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                                </a>
                                                </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value==8) {?>
                                                <li class="expander"><span>…</span></li>
                                                <li>
                                                    <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
">
                                                        <span><?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
</span>
                                                    </a>
                                                </li>
                                            <?php }?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['SelectedPage']->value>=6) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>
                                                <li>
                                                    <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=1<?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=1<?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=1<?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=1<?php }?>" data-pagenum="1">
                                                        <span>1</span>
                                                    </a>
                                                </li>
                                                <li class="expander"><span>…</span></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value>=($_smarty_tpl->tpl_vars['SelectedPage']->value-3)&&$_smarty_tpl->tpl_vars['i']->value<=($_smarty_tpl->tpl_vars['SelectedPage']->value+3)) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['SelectedPage']->value) {?>
                                                    <li class="current">
                                                        <?php } else { ?>
                                                    <li>
                                                <?php }?>
                                                <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                                </a>
                                                </li>
                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['CountPages']->value) {?>
                                                    <li class="expander"><span>…</span></li>
                                                    <li>
                                                        <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
</span>
                                                        </a>
                                                    </li>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    <?php }?>
                                <?php }} ?>

                            </ul>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['SelectedPage']->value==1) {?>
                            <?php echo $_smarty_tpl->getConfigVariable('Results');?>
 <strong class="results-start">1</strong>–<strong class="results-end">50</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong>
                        <?php } elseif ($_smarty_tpl->tpl_vars['SelectedPage']->value<$_smarty_tpl->tpl_vars['OriginalPages']->value) {?>
                            <?php echo $_smarty_tpl->getConfigVariable('Results');?>
 <strong class="results-start"><?php echo $_smarty_tpl->tpl_vars['SelectedPage']->value*50-50;?>
</strong>–<strong class="results-end"><?php echo $_smarty_tpl->tpl_vars['SelectedPage']->value*50;?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getConfigVariable('Results');?>
 <strong class="results-start"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value-($_smarty_tpl->tpl_vars['ResultsFound']->value-(($_smarty_tpl->tpl_vars['SelectedPage']->value-1)*50));?>
</strong>–<strong class="results-end"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong>
                        <?php }?>
                        <span class="clear"><!-- --></span>
                    </div>
                    <div class="table full-width">
                        <table style="font-size:13px;">
                            <thead>
                            <tr>
                                <th>
                                    <span class="sort-tab"><?php echo $_smarty_tpl->getConfigVariable('Profile_Character_Profession_Table_Title');?>
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
                                <th>
                                    <span class="sort-tab"><?php echo $_smarty_tpl->getConfigVariable('Type');?>
</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['Item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->key => $_smarty_tpl->tpl_vars['Item']->value) {
$_smarty_tpl->tpl_vars['Item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['Item']->key;
?>
                                    <tr class="row<?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>2<?php } else { ?>1<?php }?>">
                                        <td data-raw="<?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
">
                                            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['Item']->value['entry'];?>
" class="item-link color-q<?php echo $_smarty_tpl->tpl_vars['Item']->value['Quality'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['Item']->value['entry'];?>
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
                                        <td class="align-center" data-raw="<?php echo $_smarty_tpl->tpl_vars['Item']->value['RequiredLevel'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['Item']->value['RequiredLevel'];?>

                                        </td>
                                        <td></td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['Item']->value['class']['translation'];?>


                                            <em>(<?php echo $_smarty_tpl->tpl_vars['Item']->value['subclass']['translation'];?>
)</em>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-options data-options">
                        <div class="option">
                            <ul class="ui-pagination">
                                <?php $_smarty_tpl->tpl_vars['CountPages'] = new Smarty_variable(($_smarty_tpl->tpl_vars['ResultsFound']->value/50), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['CountPages']->value>sprintf("%d",$_smarty_tpl->tpl_vars['CountPages']->value)) {?>
                                    <?php $_smarty_tpl->tpl_vars['OriginalPages'] = new Smarty_variable($_smarty_tpl->tpl_vars['CountPages']->value, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['CountPages'] = new Smarty_variable(sprintf("%d",$_smarty_tpl->tpl_vars['CountPages']->value)+1, null, 0);?>
                                <?php }?>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['CountPages']->value) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['CountPages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['CountPages']->value<10) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['SelectedPage']->value) {?>
                                            <li class="current">
                                                <?php } else { ?>
                                            <li>
                                        <?php }?>
                                        <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                            <span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                        </a>
                                        </li>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['SelectedPage']->value<6) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->value<8) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['SelectedPage']->value) {?>
                                                    <li class="current">
                                                        <?php } else { ?>
                                                    <li>
                                                <?php }?>
                                                <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                                </a>
                                                </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value==8) {?>
                                                <li class="expander"><span>…</span></li>
                                                <li>
                                                    <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
">
                                                        <span><?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
</span>
                                                    </a>
                                                </li>
                                            <?php }?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['SelectedPage']->value>=6) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>
                                                <li>
                                                    <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=1<?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=1<?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=1<?php } elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=1<?php }?>" data-pagenum="1">
                                                        <span>1</span>
                                                    </a>
                                                </li>
                                                <li class="expander"><span>…</span></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value>=($_smarty_tpl->tpl_vars['SelectedPage']->value-3)&&$_smarty_tpl->tpl_vars['i']->value<=($_smarty_tpl->tpl_vars['SelectedPage']->value+3)) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['SelectedPage']->value) {?>
                                                    <li class="current">
                                                        <?php } else { ?>
                                                    <li>
                                                <?php }?>
                                                <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                                </a>
                                                </li>
                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['CountPages']->value) {?>
                                                    <li class="expander"><span>…</span></li>
                                                    <li>
                                                        <a href="/item/<?php if ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==1) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;invType=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['inventorytype']['id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['subclass']==1&&$_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;subClassId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['subname']['subclass'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==1&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?classId=<?php echo $_smarty_tpl->tpl_vars['PageData']->value['name']['class'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
} elseif ($_smarty_tpl->tpl_vars['Requests']->value['class']==0&&$_smarty_tpl->tpl_vars['Requests']->value['subclass']==0&&$_smarty_tpl->tpl_vars['Requests']->value['invtype']==0) {?>?page=<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;
}?>" data-pagenum="<?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['CountPages']->value;?>
</span>
                                                        </a>
                                                    </li>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    <?php }?>
                                <?php }} ?>

                            </ul>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['SelectedPage']->value==1) {?>
                            <?php echo $_smarty_tpl->getConfigVariable('Results');?>
 <strong class="results-start">1</strong>–<strong class="results-end">50</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong>
                        <?php } elseif ($_smarty_tpl->tpl_vars['SelectedPage']->value<$_smarty_tpl->tpl_vars['OriginalPages']->value) {?>
                            <?php echo $_smarty_tpl->getConfigVariable('Results');?>
 <strong class="results-start"><?php echo $_smarty_tpl->tpl_vars['SelectedPage']->value*50-50;?>
</strong>–<strong class="results-end"><?php echo $_smarty_tpl->tpl_vars['SelectedPage']->value*50;?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getConfigVariable('Results');?>
 <strong class="results-start"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value-($_smarty_tpl->tpl_vars['ResultsFound']->value-(($_smarty_tpl->tpl_vars['SelectedPage']->value-1)*50));?>
</strong>–<strong class="results-end"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('Of');?>
 <strong class="results-total"><?php echo $_smarty_tpl->tpl_vars['ResultsFound']->value;?>
</strong>
                        <?php }?>
                        <span class="clear"><!-- --></span>
                    </div>
                </div>
                <span class="clear"><!-- --></span>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
