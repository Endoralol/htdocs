<div class="summary-bottom-right">
    <div class="summary-professions">
    <h3 class="category ">
        <a href="/character/{$Character.name}/profession/" class="view-more">{#Game_Professions#}</a>
    </h3>
    <ul>
        {foreach $Professions as $Profession}
            {if $Profession.primary == 1}
                {$ComputeProfessionBar = ($Profession.current / $Profession.max) * 100}
                <li>
                    <div class="profile-progress border-3">
                        <div class="bar border-3 hover" style="width: {$ComputeProfessionBar}%"></div>
                        <div class="bar-contents">
                            <a class="profession-details" href="/character/{$Character.name}/profession/{$Profession.name}">
<span class="icon">
                        <span class="icon-frame frame-12 ">
                            <img src="/Templates/{$Template}/images/icons/small/trade_{$Profession.name}.jpg" alt="" width="12" height="12" />
                        </span>
                    </span>
                                <span class="name">{$Profession.translation}</span>
                                <span class="value">{$Profession.current}</span>
                            </a>
                        </div>
                    </div>
                </li>
            {/if}
        {/foreach}
    </ul>
</div>
</div>
