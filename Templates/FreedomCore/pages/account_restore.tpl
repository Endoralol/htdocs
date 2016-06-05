{include file='account/account_header.tpl'}
<div id="layout-middle">
<div class="wrapper">
<div id="content">
<h1 class="logo">Battle.net</h1>
<p class="small-header"></p>
<div class="account-wrapper wow-well">
<div class="control-group separated">
<h1>Enter Your Account Name</h1>
<p>Which Battle.net account are you having problems accessing?</p>
</div>
<form method="post" id="" action="identify-account.html" enctype="" >
<div class="control-group">
<label id="email-label" class="control-label" for="email">Email Address</label>
<div class="controls">
<input
id="email"
value=""
name="email"
title="Email Address"
maxlength=""
type="text"
tabindex="1"
class="input-block input-large "
placeholder="Email Address"
autocorrect="off"
/>
</div>
</div>
<div class="control-group separated">
<button type="submit" id="support-submit" class="btn btn-primary btn-large btn-response" data-loading-text="" tabindex="1">
Continue
</button>
<a class="btn btn-large btn-response" href="/account/support/login-support.html" tabindex="1">
Cancel
</a>
</div>
<input type="hidden" id="csrftoken" name="csrftoken" value="f129978a-b07d-483e-ae14-bed9831eb140" />
</form>
<div class="control-group separated">
<ul id="help-links">
<li>
<a href="https://battle.net/support/help/product/battlenet/316/974" rel="external" target="_blank" tabindex="1">
Contact Customer Support
<i class="icon-external-link"></i>
</a>
</li>
</ul>
</div>
<script type="text/javascript">
//<![CDATA[
var lpMTagConfig = lpMTagConfig || {}; lpMTagConfig.vars = lpMTagConfig.vars || [];
lpMTagConfig.lpServer = "livechat.battle.net";
lpMTagConfig.lpTagSrv = lpMTagConfig.lpServer;
lpMTagConfig.lpNumber = "86076585";
lpMTagConfig.deploymentID = "service";
lpMTagConfig.vars.push(["page", "unit", "service"]);
lpMTagConfig.vars.push(["session", "locale", "en-gb"]);
lpMTagConfig.vars.push(["session", "region", "eu"]);
//]]>
</script>
<script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/js/third-party/mtagconfig.min.0GgIB.js"></script>
</div>
</div>
</div>
</div>
{include file='account/account_footer.tpl'}