{include file='account/account_header.tpl'}
<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{$AppName}</span>
                    </a> >
                    <a href="/admin/dashboard/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{#Administrator_Title#}</span>
                    </a> >
                    <a href="/admin/articles/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{#Administrator_Articles#}</span>
                    </a> >
                    <a href="/admin/articles/add-articles" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{#Administrator_Articles_Add#}</span>
                    </a>
                </h2>
                <br />
                <h3 class="headline">{#Administrator_Articles_Add#}</h3>
            </div>
            <div id="page-content" class="page-content">
            <form method="post" action="/admin/articles/add-articles/process" id="change-settings" novalidate="novalidate">
                <div class="columns-2-1 settings-content">
                    <div class="column column-right">
                            <div class="item-information">
                                <div class="item-detail">
                                    <span class="input-right">
                                        <span class="input-text input-text-small">
                                            <input type="text" name="title" value="" style="width: 70%;" class="small border-5 glow-shadow-2"  maxlength="100" tabindex="1" required="required" placeholder="{#Administrator_Articles_Add_Info3#}" />
                                        </span>
                                        <br /><br /><br />
                                        <span class="input-textarea input-textarea-extra-large">
                                        <textarea name="description" id="description" class="extra-large border-5 glow-shadow-2" cols="78" rows="8" tabindex="1" required="required" placeholder="{#Administrator_Articles_Add_Info1#}" maxlength="2000"></textarea>
                                        </span>
                                        <br /><br /><br />
                                        <span class="input-textarea input-textarea-extra-large">
                                        <textarea name="fullnews" id="fullnews" class="extra-large border-5 glow-shadow-2" cols="78" rows="8" tabindex="1" required="required" placeholder="{#Administrator_Articles_Add_Info2#}" maxlength="2000"></textarea>
                                        </span>
                                        <br /><br /><br />
                                        <input type="file" name="files" tabindex="2" />
                                    </span>
                                    <span class="clear"><!-- --></span>
                                </div>
                            </div>
                            <br /><br /><br />
                            <div class="submit-row" id="additem-row">
                                <div class="input-left"></div>
                                <div class="input-right">
                                    <center>
                                        <button class="ui-button button1" type="submit" id="password-submit" tabindex="1">
                                                <span class="button-left">
                                                    <span class="button-right">{#Administrator_Shop_AddItem#}</span>
                                                </span>
                                        </button>
                                    </center>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
{include file='account/account_footer.tpl'}