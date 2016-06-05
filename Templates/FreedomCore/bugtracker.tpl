{include file = 'header.tpl'}
<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{$AppName}</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/bugtracker/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">Bug tracker</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="topics-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="forum-actions forum-actions-top">
                    {if !$smarty.session.loggedin}
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="/account/login">
                            <span class="button-left">
                                <span class="button-right">
                                    CREATE ISSUE
                                </span>
                            </span>
                        </a>
                    </div>
                    {else}
                    <div class="create-button-wrapper">
                        <a class="ui-button button1" href="add">
                            <span class="button-left">
                                <span class="button-right">
                                    CREATE ISSUE
                                </span>
                            </span>
                        </a>
                    </div>
                    {/if}
                    <div class="paging-wrapper">

                    </div>
                    <span class="clear"></span>
                </div>
                {if empty($BugTracker)}
                    <center>Bug tracker is empty</center>
                {else}
                    {include file='blocks/bugtracker_block.tpl'}
                {/if}
            </div>
        </div>
    </div>
</div>
{include file = 'footer.tpl'}