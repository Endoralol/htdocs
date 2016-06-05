{if $Page.bodycss == 'profile_page'}
    <li id="show3dmodel">
        <a href="javascript:;" onclick="Load3DModel(true);">
            {#Character_LoadTDModel#}
        </a>
    </li>

    <li id="hide3dmodel" style="display:none">
        <a href="javascript:;" onclick="Load3DModel(false);">
            {#Character_HideTDModel#}
        </a>
    </li>
{/if}

<li {if $SelectedCategory == 'advanced'}class=" active"{/if}>
    <a href="/character/{$Character.name}/" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                {#Profile_Character_Information#}
            </span>
        </span>
    </a>
</li>
<li {if $SelectedCategory == 'events'}class=" active"{/if}>
    <a href="/character/{$Character.name}/events" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                {#Game_Events#}
            </span>
        </span>
    </a>
</li>
<li {if $SelectedCategory == 'profession'}class=" active"{/if}>
    <a href="/character/{$Character.name}/profession" class="has-submenu" rel="np">
        <span class="arrow">
            <span class="icon">
                {#Profile_Character_Professions#}
            </span>
        </span>
    </a>
</li>
<li {if $SelectedCategory == 'reputation'}class=" active"{/if}>
    <a href="/character/{$Character.name}/reputation/" class="" rel="np">
        <span class="arrow">
            <span class="icon">
                {#Profile_Character_Reputation#}
            </span>
        </span>
    </a>
</li>
<li>
    <a href="/guild/{$Character.guild_name}/?character={$Character.name}" class=" has-submenu" rel="np">
        <span class="arrow">
            <span class="icon">
                {#Community_Guild#}
            </span>
        </span>
    </a>
</li>