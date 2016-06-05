<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:24:20
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/guild_main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18342543495750176463aa41-85293129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e7e0355fe6d1fef8413c57fdd7a28163713637' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/guild_main_page.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18342543495750176463aa41-85293129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Guild' => 0,
    'returnto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5750176472e990_59834783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750176472e990_59834783')) {function content_5750176472e990_59834783($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="/community/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Menu_Community');?>
</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
</span>
                    </a>
                </li>
            </ol>
        </div>

        <div class="content-bot clear">
            <div id="profile-wrapper" class="profile=wrapper profile-wrapper-<?php echo $_smarty_tpl->tpl_vars['Guild']->value['guild_side']['name'];?>
">
                <div class="profile-sidebar-anchor">
                    <div class="profile-sidebar-outer">
                        <div class="profile-sidebar-inner">
                            <div class="profile-sidebar-contents">
                                <div class="profile-info-anchor profile-guild-info-anchor">
                                    <div class="guild-tabard">
                                        <canvas id="guild-tabard" width="240" height="240" style="opacity:1;">
                                            <div class="guild-tabard-default tabard-<?php echo $_smarty_tpl->tpl_vars['Guild']->value['guild_side']['name'];?>
"></div>
                                        </canvas>
                                        <?php echo '<script'; ?>
 type="text/javascript">
                                            //<![CDATA[
                                            $(document).ready(function() {
                                                var tabard = new GuildTabard('guild-tabard', {
                                                    'ring': '<?php echo $_smarty_tpl->tpl_vars['Guild']->value['guild_side']['name'];?>
',
                                                    'bg': [ 0, <?php echo $_smarty_tpl->tpl_vars['Guild']->value['BackgroundColor'];?>
 ],
                                                    'border': [ <?php echo $_smarty_tpl->tpl_vars['Guild']->value['BorderStyle'];?>
, <?php echo $_smarty_tpl->tpl_vars['Guild']->value['BorderColor'];?>
 ],
                                                    'emblem': [ <?php echo $_smarty_tpl->tpl_vars['Guild']->value['EmblemStyle'];?>
, <?php echo $_smarty_tpl->tpl_vars['Guild']->value['EmblemColor'];?>
 ]
                                                });
                                            });
                                            //]]>
                                        <?php echo '</script'; ?>
>
                                    </div>
                                    <div class="profile-info profile-guild-info">
                                        <div class="name"><a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
</a></div>
                                        <div class="under-name">
                                            (<span class="faction"><?php echo $_smarty_tpl->tpl_vars['Guild']->value['guild_side']['translation'];?>
</span>)<span class="comma">,</span>

                                            <span class="members"><?php echo $_smarty_tpl->getConfigVariable('Guild_Population');?>
 <?php echo $_smarty_tpl->tpl_vars['Guild']->value['guild_population'];?>
</span>
                                        </div>

                                    </div>
                                </div>
                                <ul class="profile-sidebar-menu" id="profile-sidebar-menu">
                                    <?php if ($_smarty_tpl->tpl_vars['returnto']->value!=false) {?>
                                        <li class="">
                                            <a href="/character/<?php echo $_smarty_tpl->tpl_vars['returnto']->value;?>
/" class="back-to" rel="np"><span class="arrow"><span class="icon"><?php echo $_smarty_tpl->tpl_vars['returnto']->value;?>
</span></span></a>
                                        </li>
                                    <?php }?>
                                    <li class=" active">
                                        <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
/<?php if ($_smarty_tpl->tpl_vars['returnto']->value!=false) {?>?character=<?php echo $_smarty_tpl->tpl_vars['returnto']->value;
}?>" class="" rel="np">
                                            <span class="arrow">
                                                <span class="icon">
                                                    <?php echo $_smarty_tpl->getConfigVariable('Guild_Main_Text');?>

                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
/roster<?php if ($_smarty_tpl->tpl_vars['returnto']->value!=false) {?>?character=<?php echo $_smarty_tpl->tpl_vars['returnto']->value;
}?>" class="" rel="np">
                                            <span class="arrow">
                                                <span class="icon">
                                                    <?php echo $_smarty_tpl->getConfigVariable('Guild_Roster');?>

                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/guild/<?php echo $_smarty_tpl->tpl_vars['Guild']->value['name'];?>
/news<?php if ($_smarty_tpl->tpl_vars['returnto']->value!=false) {?>?character=<?php echo $_smarty_tpl->tpl_vars['returnto']->value;
}?>" class="" rel="np">
                                            <span class="arrow">
                                                <span class="icon">
                                                    <?php echo $_smarty_tpl->getConfigVariable('Guild_News');?>

                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class=" disabled">
                                        <a href="javascript:;" class=" vault" rel="np">
                                            <span class="arrow">
                                                <span class="icon">
                                                    <?php echo $_smarty_tpl->getConfigVariable('Guild_Events');?>

                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
