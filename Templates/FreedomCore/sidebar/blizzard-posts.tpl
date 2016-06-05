<div class="sidebar-module " id="sidebar-blizzard-posts">
			<div class="sidebar-title">


	<h3 class="header-3 title-forums">						<a href="/forum/">

					Last Post						</a>

</h3>
			</div>

		<div class="sidebar-content">

		<ul class="articles-list-plain">
                {foreach $Forums as $Category}
			<li>
				<a href="/forum/topic/{$Category.id}" class="title">
					{$Category.topic}
				</a>
				<span class="date">{date("d.m.y G:i", $Category.post_time)}</span>
			</li>
                {/foreach}

		</ul>

		</div>
	</div>