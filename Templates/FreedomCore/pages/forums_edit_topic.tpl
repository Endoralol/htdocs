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
                    <a href="/forum/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{#Forum_Page_Title#}</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/#forum{$TopicData.type.id}" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{$TopicData.type.name}</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/{$TopicData.category.id}/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{$TopicData.category.name}</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/forum/{$TopicData.topic.id}/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{$TopicData.topic.name}</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="forum-wrapper" data-forum-id="{$TopicData.category.id}">
                {if !isset($smarty.session.loggedin) || !$smarty.session.loggedin}
                {include file = 'forum/comment_not_logged.tpl'}
                {else}
                {if $Characters == 0}
                 <div id="new-post" class="topic-form ajax-update ">
						<div class="form-left-col">
							<div class="form-title">


	<h3 class="header-3" >{#Forum_Reply#}</h3>

							</div>


						</div>

						<div class="topic-form-wrapper">
							<div class="forum-permission-error">
								{#Forum_Non_Characters#}

							</div>

						</div>

					</div>
                {else}
                {if $TopicData.topic.closed}
                {include file = 'forum/comment_topic_closed.tpl'}
                {else}
                {include file = 'forum/comment_edit.tpl'}
                {/if}
                {/if}
				{/if}
                <span class="clear"></span>
            </div>
            <script type="text/javascript">
                //<![CDATA[

                $(function(){
                    ReportPost.initialize("#post-list", "forums");
                    ForumTopic.initialize("#post-list", {$TopicData.category.id}, {$TopicData.topic.id}, 0,
                            {$TopicData.replies|count});
                });
                //]]>
            </script>
        </div>
    </div>
</div>
{include file = 'footer.tpl'}