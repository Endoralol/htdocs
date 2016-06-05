<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 14:23:48
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/character_main_page_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8225720275750174415cac8-62004493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9be11414aa802249160764a6f40678a2bac24f9' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/character_main_page_advanced.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8225720275750174415cac8-62004493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Character' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575017441e2503_22980342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575017441e2503_22980342')) {function content_575017441e2503_22980342($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
						<a href="/character/" rel="np" itemprop="url">
							<span id="charactername" class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Character']->value['name'];?>
</span>
						</a>
					</li>
				</ol>
			</div>
            <div class="content-bot clear">

                <div id="profile-wrapper" class="profile-wrapper profile-wrapper-advanced profile-wrapper-<?php echo $_smarty_tpl->tpl_vars['Character']->value['side'];?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('pages/character_profile_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ('pages/character_profile_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            </div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
