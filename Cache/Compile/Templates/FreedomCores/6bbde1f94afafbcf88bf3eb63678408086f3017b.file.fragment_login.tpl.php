<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 16:38:29
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/fragment_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2058847805575036d5a44916-79827667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbde1f94afafbcf88bf3eb63678408086f3017b' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/fragment_login.tpl',
      1 => 1464860653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058847805575036d5a44916-79827667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Language' => 0,
    'Page' => 0,
    'AppName' => 0,
    'Template' => 0,
    'ReturnTo' => 0,
    'CSRFToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575036d5af4875_92041689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575036d5af4875_92041689')) {function content_575036d5af4875_92041689($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['Language']->value;?>
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
/css/toolkit/wow-web.min.css" />

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
 login-template web embedded" data-embedded-state="STATE_LOGIN">
<div class="grid-container wrapper" id="embedded-login">
    <a class="close icon-remove icon-white" data-dismiss="modal" href="#" id=
    "embedded-close" onclick="updateParent('close')" style=
       "font-style: italic"></a>

    <h1 class="logo"><?php echo $_smarty_tpl->getConfigVariable('Account_Login');?>
 <?php echo $_smarty_tpl->tpl_vars['AppName']->value;?>
</h1>

    <div class="hide" id="info-wrapper">
        <h2><strong class="info-title"></strong></h2>

        <p class="info-body"></p>
        <button class="btn btn-block hide visible-phone" id="info-phone-close">Close</button>
    </div>

    <div class="input" id="login-wrapper">
        <form action="/account/performlogin" class=" username-required input-focus" id=
        "password-form" method="post" name="password-form">
            <div class="control-group">
                <label class="control-label" for="accountName" id=
                "accountName-label">E-mail</label>

                <div class="controls">
                    <input class="input-block input-large" id="accountName"
                           maxlength="320" name="accountName" placeholder="<?php echo $_smarty_tpl->getConfigVariable('Login_Email');?>
"
                           spellcheck="false" tabindex="1" title="Ваш E-mail" type=
                           "text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="password" id=
                "password-label"><?php echo $_smarty_tpl->getConfigVariable('Password');?>
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

            <div class="persistWrapper">
                <label class="checkbox-label css-label" for="persistLogin" id=
                "persistLogin-label"><input checked="checked" id="persistLogin"
                                            name="persistLogin" tabindex="1" type="checkbox">
                    <span class="input-checkbox"></span><?php echo $_smarty_tpl->getConfigVariable('Login_Remember_Me');?>
</label>
            </div>

            <div class="control-group submit">
                <button class="btn btn-primary btn-large btn-block"
                        data-loading-text="" id="submit" tabindex="1" type=
                "submit"><?php echo $_smarty_tpl->getConfigVariable('Login_Authorization');?>
<i class="spinner-battlenet"></i></button>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['ReturnTo']->value)) {?>
                <input type="hidden" name="returnto" id="returnto" value="<?php echo $_smarty_tpl->tpl_vars['ReturnTo']->value;?>
">
            <?php }?>
            <ul id="help-links">
                <li>
                    <a class="btn btn-block btn-large" href=
                    "/account/create"
                       rel="external" tabindex="1"><?php echo $_smarty_tpl->getConfigVariable('Login_Create_Account');?>

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
</body>
</html><?php }} ?>
