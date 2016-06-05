<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:33:17
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\pages\account_create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12084574f387d4d2fc2-50199715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918c40640eb0326f00415f9ea9eb2a5881a61e8f' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\pages\\account_create.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12084574f387d4d2fc2-50199715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Page' => 0,
    'AppName' => 0,
    'Template' => 0,
    'ExpansionTemplate' => 0,
    'CSRFToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f387d5365a3_57230915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f387d5365a3_57230915')) {function content_574f387d5365a3_57230915($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
">
	<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
		<meta http-equiv="imagetoolbar" content="false" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php echo $_smarty_tpl->tpl_vars['Page']->value['pagetitle'];?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</title>
		<link rel="shortcut icon" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/images/meta/favicon.ico" />
		<link rel="search" type="application/opensearchdescription+xml" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/data/opensearch" title="<?php echo $_smarty_tpl->getConfigVariable('Head_Opensearch_Meta');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
" />
        <link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/toolkit/freedomnet-web.min.css" />

		<link rel="stylesheet" type="text/css" media="all" href="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/css/login/global.min.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/third-party/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/core.min.js"><?php echo '</script'; ?>
>
		<meta name="viewport" content="width=device-width" />

	</head>
	<body class="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
 login-template web wow <?php echo $_smarty_tpl->tpl_vars['ExpansionTemplate']->value;?>
" data-embedded-state="STATE_LOGIN">
		<div class="grid-container wrapper">
			<h1 class="logo" style="height:125px;"><?php echo $_smarty_tpl->getConfigVariable('Account_Login');?>
</h1>

			<div class="hide" id="info-wrapper">
				<h2><strong class="info-title"></strong></h2>

				<p class="info-body"></p><button class=
				"btn btn-block hide visible-phone" id="info-phone-close">Close</button>
			</div>

			<div class="input-container" id="registration-wrapper">
				<form action="/account/createaccount" class=" username-required input-focus" id=
				"password-form" method="post" name="password-form">

					<div class="control-group">
						<label class="control-label" for="username" id=
						"username-label"><?php echo $_smarty_tpl->getConfigVariable('Login_Username');?>
</label>

						<div class="controls">
							<input class="input-block input-large" id="username"
							maxlength="320" name="username" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Login_Username');?>
"
							spellcheck="false" tabindex="1" title="<?php echo $_smarty_tpl->getConfigVariable('Login_Username');?>
" type=
							"text" value="">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="email" id=
						"email-label"><?php echo $_smarty_tpl->getConfigVariable('Login_Email');?>
</label>

						<div class="controls">
							<input class="input-block input-large" id="email"
							maxlength="320" name="email" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Login_Email');?>
"
							spellcheck="false" tabindex="1" title="<?php echo $_smarty_tpl->getConfigVariable('Login_Email');?>
" type=
							"text" value="">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="password" id=
						"password-label"><?php echo $_smarty_tpl->getConfigVariable('Login_Password');?>
</label>

						<div class="controls">
							<input autocomplete="off" class="input-block input-large"
							id="password" maxlength="16" name="password" placeholder=
							"<?php echo $_smarty_tpl->getConfigVariable('Login_Password');?>
" spellcheck="false" tabindex="1" title=
							"<?php echo $_smarty_tpl->getConfigVariable('Login_Password');?>
" type="password">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="password" id=
						"password-label"><?php echo $_smarty_tpl->getConfigVariable('Login_RPassword');?>
</label>

						<div class="controls">
							<input autocomplete="off" class="input-block input-large"
							id="rpassword" maxlength="16" name="rpassword" placeholder=
							"<?php echo $_smarty_tpl->getConfigVariable('Login_RPassword');?>
" spellcheck="false" tabindex="1" title=
							"<?php echo $_smarty_tpl->getConfigVariable('Login_RPassword');?>
" type="password">
						</div>
					</div>

                    <div class="control-group">
                        <div class="captcha">
                            <a id="captcha-anchor" role="button" href="javascript:;" onclick=" return ReloadCaptcha();">
                                <i class="icon-48-refresh"></i>
                                <div class="captcha-image" id="captcha-image">
                                    <img id="sec-string" align="middle" src="/account/captcha.jpg" alt="<?php echo $_smarty_tpl->getConfigVariable('Captcha_Renew');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('Captcha_Renew');?>
" />
                                </div>
                            </a>
                            <div class="clearfix"></div></div>
                    </div>

                    <div class="control-group">
                        <label id="captchaInput-label" class="control-label" for="captchaInput">Код</label>
                        <div class="controls">
                            <input aria-labelledby="captchaInput-label" id="captchaInput" name="captchaInput" title="Код" maxlength="320" type="text" tabindex="1" class="input-block input-large" autocomplete="off" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Captcha_Code');?>
" autocorrect="off" spellcheck="false" />
                        </div>
                    </div>

					<div class="control-group submit">
						<button class="btn btn-primary btn-large btn-block"
						data-loading-text="" id="submit" tabindex="1" type=
						"submit"><?php echo $_smarty_tpl->getConfigVariable('Login_Registration');?>
 <i class="spinner-battlenet"></i></button>
					</div>

					<ul id="help-links">
						<li>
							<a class="btn btn-block btn-large" href=
							"/account/login"
							rel="external" tabindex="1"><?php echo $_smarty_tpl->getConfigVariable('Login_Already_Have_Account');?>

							<i class="icon-external-link"></i></a>
						</li>

						<li>
							<a class="" href=
							"/account/restore"
							rel="external" tabindex="1"><?php echo $_smarty_tpl->getConfigVariable('Login_Cant_Login');?>
 <i class=
							"icon-external-link"></i></a>
						</li>
					</ul><input id="csrftoken" name="csrftoken" type="hidden" value=
					"<?php echo $_smarty_tpl->tpl_vars['CSRFToken']->value;?>
">
				</form>
			</div>

			<footer class="footer footer-eu">
				<div class="lower-footer-wrapper">
					<div class="lower-footer">
						<div id="copyright">
							© <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
, 2015 г.
						</div>

						<div id="legal">
							<div class="png-fix" id="legal-ratings"></div><span class=
							"clear"><!-- --></span>
						</div>
					</div>

					<div id="marketing-trackers">
						<div class="marketing-cover"></div>
					</div>
				</div>
			</footer>
		</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/embed-0.1.5.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/login/toolkit.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/login/global.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/login/login.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="//<?php echo $_SERVER['HTTP_HOST'];?>
/Templates/<?php echo $_smarty_tpl->tpl_vars['Template']->value;?>
/js/freedomcore.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
