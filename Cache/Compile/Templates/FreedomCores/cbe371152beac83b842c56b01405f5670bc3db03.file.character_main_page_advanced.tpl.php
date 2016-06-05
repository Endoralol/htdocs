<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:10:49
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_main_page_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:873940775746bd99ac01f5-38605872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe371152beac83b842c56b01405f5670bc3db03' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/pages/character_main_page_advanced.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '873940775746bd99ac01f5-38605872',
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
  'unifunc' => 'content_5746bd99b9e6b8_72259806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bd99b9e6b8_72259806')) {function content_5746bd99b9e6b8_72259806($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
