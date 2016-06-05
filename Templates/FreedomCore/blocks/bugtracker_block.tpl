<table class="forum-topics" id="forum-topics" data-forum-id="1" style="font-size: 13px;">
    <thead>
    <tr>
        <th class="icon-column"></th>
        <th class="subject-column">Title</th>
        <th class="reply-column">Status</th>
        <th class="view-column">Priority</th>
        <th class="last-poster-column">Update</th>
    </tr>
    </thead>
    <tbody class="regular-topics sort-connect">
    {foreach $BugTracker as $Topic}
        <tr id="postRow{$Topic.id}" class="stickied-topic" data-topic-id="{$Topic.id}" itemscope="itemscope" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
            <td class="icon-cell">
            <span class="topic-icon-wrapper">
                <span class="topic-icon"></span>
            </span>
            </td>
            <td  class="author-cell">
            <span class="author-wrapper">
            <span class="author-name" itemprop="author">{$Topic.title}</span>
            </span>
            </td>
            <td class="view-cell">
                {$Topic.status}
            </td>
            <td class="view-cell">
                {$Topic.user}
            </td>
            <td class="view-cell">
                {$Topic.date}
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>