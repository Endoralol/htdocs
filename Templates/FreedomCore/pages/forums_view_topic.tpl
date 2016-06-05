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
                    <a href="/forum/topic/{$TopicData.topic.id}/" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">{$TopicData.topic.name}</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="forum-wrapper" data-forum-id="{$TopicData.category.id}">
                <div class="topic-header-wrapper">
                    <div class="topic-header">
                        <h2 class="subheader-2">
                            <span class="topic-title">{$TopicData.topic.name}</span>
                        </h2>
                        <script type="text/javascript">
                            var TopicID = '{$TopicData.topic.id}';
                            var ForumID = '{$TopicData.category.id}';
                        </script>
                        <div class="topic-status-buttons">
                            <button class="ui-button request-sticky button2" type="button" onclick="ForumTopic.requestSticky(this, '{$TopicData.topic.id}')" data-tooltip="{#Forum_Make_It_Sticky_Full#}">
                                <span class="button-left">
                                    <span class="button-right">
                                        {#Forum_Make_It_Sticky#}
                                    </span>
                                </span>
                            </button>
                            {if $AccesUser.access_level}
                            <a class="ui-button request-sticky button2" href="/forum/topic/{$TopicData.topic.id}/delete" data-tooltip="{#Forum_Make_It_Sticky_Full#}">
                                <span class="button-left">
                                    <span class="button-right">
                                        Delete
                                    </span>
                                </span>
                            </a>
                            {if $TopicData.topic.closed}
                            <a class="ui-button request-sticky button2" href="/forum/topic/{$TopicData.topic.id}/open" data-tooltip="{#Forum_Make_It_Sticky_Full#}">
                                <span class="button-left">
                                    <span class="button-right">
                                        Open Topic
                                    </span>
                                </span>
                            </a>
                            {else}
                             <a class="ui-button request-sticky button2" href="/forum/topic/{$TopicData.topic.id}/closed" data-tooltip="{#Forum_Make_It_Sticky_Full#}">
                                <span class="button-left">
                                    <span class="button-right">
                                        Closed Topic
                                    </span>
                                </span>
                            </a>
                            {/if}
                            {if $TopicData.category.attached}
                            <a class="ui-button request-sticky button2" href="/forum/topic/{$TopicData.topic.id}/unsticky" data-tooltip="{#Forum_Make_It_Sticky_Full#}">
                                <span class="button-left">
                                    <span class="button-right">
                                        Unsticky Topic
                                    </span>
                                </span>
                            </a>
                            {else}
                             <a class="ui-button request-sticky button2" href="/forum/topic/{$TopicData.topic.id}/sticky" data-tooltip="{#Forum_Make_It_Sticky_Full#}">
                                <span class="button-left">
                                    <span class="button-right">
                                        Sticky Topic
                                    </span>
                                </span>
                            </a>
                            {/if}
                            {/if}
                        </div>
                    </div>
                </div>
                <span class="clear"></span>
                <div class="forum-actions forum-actions-top">
                    <div class="actions-right"></div>
                    {if !isset($smarty.session.loggedin) || !$smarty.session.loggedin}
                    <div class="reply-button-wrapper ajax-update">
                        <a class="ui-button button1" href="/account/login">
                            <span class="button-left">
                                <span class="button-right">
                                    {#Forum_Reply#}
                                </span>
                            </span>
                        </a>
                    </div>
                    {else}
                    {if $Characters == 0}
                    <div class="reply-button-wrapper ajax-update">
                    <a class="ui-button button1 disabled" href="javascript:;"
                    data-tooltip="{#Forum_Non_Characters#}"><span class="button-left"><span class="button-right"> {#Forum_Reply#}
                    </span></span></a>

	                </div>
                     {else}
                     {if $TopicData.topic.closed}
                    	<div class="reply-button-wrapper ajax-update">

                    <a class="ui-button button1 disabled" href="javascript:;"
                    data-tooltip="{#Forum_Topic_Clodsed#}"><span class="button-left"><span class="button-right"> {#Forum_Reply#}
                    </span></span></a>

                    	</div>
                        {else}
                        <div class="reply-button-wrapper ajax-update">
                        <a class="ui-button button1" href="#new-post">
                            <span class="button-left">
                                <span class="button-right">
                                    {#Forum_Reply#}
                                </span>
                            </span>
                        </a>
                    </div>
                        {/if}
                     {/if}
				{/if}
                    <span class="clear"><!-- --></span>
                </div>
                <div id="post-list" class="post-list">
                    {foreach from=$TopicData.replies item=Reply key=i}
                        <div id="post-{$Reply.id}" class="topic-post post-{$i+1} {if $Reply.gm}blizzard{/if} ajax-update" data-post-id="{$Reply.id}">
                            <span id="{$Reply.post_id}"></span>
                            <div class="post-interior" itemscope="itemscope" itemtype="http://schema.org/Comment">
                                <div class="post-character">
                                    <div class="forum-user">
                                        <div class="forum-avatar">
                                            <div class="bnet-avatar">
                                                <div class="avatar-outer">
                                                    {if $Reply.gm}
                                                    <a href="javascript:;">
                                                    <img height="64" width="64" src="/Templates/{$Template}/images/2d/avatar/{$Reply.race}-{$Reply.gender}.jpg" alt="" />
                                                    <span class="avatar-inner"></span>
                                                    </a>
                                                    {else}
                                                    <a href="/character/{$Reply.posted_by}">
                                                        <img height="64" width="64" src="/Templates/{$Template}/images/2d/avatar/{$Reply.race}-{$Reply.gender}.jpg" alt>
                                                        <span class="avatar-inner"></span>
                                                    </a>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-details">
                                            <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                                                <div id="context-2" class="ui-context" style="display: none;">
                                                    <div class="context">
                                                        <a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
                                                        <div class="context-user">
                                                            <strong>{$Reply.posted_by}</strong>
                                                        </div>
                                                        <div class="context-links">
                                                          {if $Reply.gm}
                                                        <a href="/search?f=post&amp;a={$Reply.posted_by}&amp;sort=time" title="{#Posts_Gm#}" rel="np" class="icon-posts link-first">
                                                                <span class="context-icon"></span>{#Posts_Gm#}
                                                            </a>
                                                        {else}
                                                            <a href="/character/{$Reply.posted_by}/" title="{#Profile#}" rel="np" class="icon-profile link-first">
                                                                <span class="context-icon"></span>{#Profile#}
                                                            </a>
                                                        {/if}
                                                        </div>
                                                    </div>
                                                </div>
                                                {if $Reply.gm}
                                                <a href="javascript:;" itemprop="url" class="context-link ">
<span itemprop="name" class="poster-name">{$Reply.posted_by}</span>
</a>
                                                {else}
                                                <a href="/character/{$Reply.posted_by}/" itemprop="url" class="context-link wow-class-{$Reply.class}">
                                                    <span itemprop="name" class="poster-name">{$Reply.posted_by}</span>
                                                </a>
                                                {/if}
                                            </div>
                                            {if $Reply.gm}
                                            <div class="forum-title admin-title" itemprop="jobTitle">
                                            Community Manager
                                            </div>
                                            {else}
                                            <div class="user-character">
                                                <div class="character-desc">
                                                    <span class="wow-class-{$Reply.class}">
                                                        {$Reply.class_name}-{$Reply.race_name} {$Reply.level} {#LevelShort#}
                                                    </span>
                                                </div>
                                            </div>
                                            {/if}
                                        </div>
                                        <span class="clear"></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-detail" id="post-text-id{$Reply.post_id}" itemprop="text">
                                        {$Reply.post_message}
                                    </div>
                                </div>
<div class="post-info">
<div class="post-info-wrapper">
<a class="post-index" href="#{$Reply.post_id}">#{$Reply.post_id}</a>
<div class="date" data-tooltip="{$Reply.post_time|date_format:"%d/%m/%Y %H:%M"}">{$Reply.post_time|date_format:"%d/%m/%Y"}</div>
<meta itemprop="dateCreated" content="{$Reply.post_time|date_format:"%Y-%m-%dT%H:%M:%S"}" />
<meta itemprop="discussionUrl" content="/forum/topic/{$TopicData.category.id}" />
{if !isset($smarty.session.loggedin) || !$smarty.session.loggedin}
<div class="rate-post-wrapper rate-post-login">
<a href="?login" onclick="return Login.open('/login/login.frag')">Login</a> to rate
</div>
{else}
<div class="rate-post-wrapper">
<a href="javascript:;" class="rate-option rate-up" data-post-id="{$Reply.post_id}" data-post-author="{$Reply.posted_by}" data-vote-type="up" data-report-type="1">
<span class="button-left">
<span class="button-right">Like</span>
</span>
</a>
<div class="rate-option downvote-wrapper ">
<a href="javascript:;" onclick="$(this).next('.downvote-menu').toggle();" class="rate-down"></a>
<div class="downvote-menu" style="display:none">
<div class="ui-dropdown">
<div class="dropdown-wrapper">
<ul>
<li>
<a href="javascript:;" data-post-id="{$Reply.post_id}" data-post-author="{$Reply.posted_by}" data-vote-type="down" data-report-type="1">Dislike</a>
</li>
<li>
<a href="javascript:;" data-post-id="{$Reply.post_id}" data-post-author="{$Reply.posted_by}" data-vote-type="down" data-report-type="2">Trolling</a>
</li>
<li>
<a href="javascript:;" data-post-id="{$Reply.post_id}" data-post-author="{$Reply.posted_by}" data-vote-type="down" data-report-type="3">Spam</a>
</li>
<li class="report-comment">
<a href="javascript:;" data-post-id="{$Reply.post_id}" data-post-author="{$Reply.posted_by}" data-vote-type="report">Report</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
{/if}
</div>
</div>
{if !isset($smarty.session.loggedin) || !$smarty.session.loggedin}
{else}
<div class="post-options" data-solution-text="Unmark Solution" data-mark-solution-text="Mark As Solution" data-marked-as-solution-text="Marked As Solution">
{if $Reply.closed == 0}
<a class="ui-button button2 reply-to-post" href="#new-post"
><span class="button-left"><span class="button-right">Reply</span></span></a>
<a class="ui-button button2 quote-post" href="#new-post" onclick="ForumTopic.quoteTopic(this, '{$TopicData.topic.id}')" data-post-id="{$Reply.post_id}"><span class="button-left"><span class="button-right">Quote
</span></span></a>
{/if}
{if $AccesUser.id == $Reply.user_id }
<a class="ui-button button2" href="/forum/topic/{$Reply.id}/deleteTopicUser"  data-tooltip="Posts may be deleted within 15 minutes of posting."><span class="button-left"><span class="button-right">Delete</span></span></a>
<a class="ui-button button2" href="/forum/topic/{$Reply.id}/edit"
><span class="button-left"><span class="button-right">Edit</span></span></a>
{/if}
</div>
{/if}
                            </div>
                        </div>
                    {/foreach}
                </div>
                <div class="forum-actions forum-actions-bottom">
                    <div class="actions-right"></div>
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
                            <a href="/forum/topic/{$TopicData.topic.id}/" rel="np" itemprop="url">
                                <span class="breadcrumb-text" itemprop="name">{$TopicData.topic.name}</span>
                            </a>
                        </li>
                    </ol>
                </div>
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
                {include file = 'forum/comment.tpl'}
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