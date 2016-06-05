<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 13:49:15
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/pages/game_class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9425031585752b22b7a0499-76598136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adac52cecad6f7a5e6a8df7554fa3d213538bd06' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/pages/game_class.tpl',
      1 => 1464860666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9425031585752b22b7a0499-76598136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AppName' => 0,
    'Class' => 0,
    'ClassNavigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5752b22b922489_62817687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752b22b922489_62817687')) {function content_5752b22b922489_62817687($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
					<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/game/class" rel="np" class="breadcrumb-arrow" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->getConfigVariable('Game_Classes');?>
</span>
						</a>
					</li>
					<li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/game/race/<?php echo $_smarty_tpl->tpl_vars['Class']->value['class_name'];?>
" rel="np" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_full_name'];?>
</span>
						</a>
					</li>
				</ol>
			</div>
			<div class="content-bot clear">
				<div id="content-subheader">
					<a class="class-parent" href="./"><?php echo $_smarty_tpl->getConfigVariable('WoW_Classes');?>
</a>
					<span class="clear"><!-- --></span>
						<h4><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_full_name'];?>
</h4>
				</div>
				<div class="faction-req"></div>
				<span class="clear"><!-- --></span>
				<?php echo $_smarty_tpl->getSubTemplate ("pages/game_class_leftcol.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("pages/game_class_rightcol.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<span class="clear"><!-- --></span>
				<div class="guide-page-nav">
					<span class="current-guide-title"><?php echo $_smarty_tpl->tpl_vars['Class']->value['class_full_name'];?>
</span>
						<a class="ui-button next-class button1 next" href="/game/class/<?php echo $_smarty_tpl->tpl_vars['ClassNavigation']->value['nextclass'];?>
">
							<span class="button-left">
								<span class="button-right"> 
									<?php echo $_smarty_tpl->getConfigVariable('Class_Next_Class');?>
 <?php echo $_smarty_tpl->tpl_vars['ClassNavigation']->value['nextname'];?>

								</span>
							</span>
						</a>

						<a class="ui-button previous-class button1 previous" href="/game/class/<?php echo $_smarty_tpl->tpl_vars['ClassNavigation']->value['previousclass'];?>
">
							<span class="button-left">
								<span class="button-right"> 
									<?php echo $_smarty_tpl->getConfigVariable('Class_Previous_Class');?>
 <?php echo $_smarty_tpl->tpl_vars['ClassNavigation']->value['previousname'];?>

								</span>
							</span>
						</a>			
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
