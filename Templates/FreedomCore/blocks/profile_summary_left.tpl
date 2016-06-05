<div class="summary-bottom-left">
    <div class="summary-health-resource">
        <ul>
            <li class="health" id="summary-health" data-id="health">
                <span class="name">Здоровье</span>
                <span class="value">
                    {$Character.health}
                </span>
            </li>
            <li class="resource-{$Character.power_data.id}" id="summary-power" data-id="power-{$Character.power_data.id}">
                <span class="name">{$Character.power_data.translation}</span>
                <span class="value">
                        {$Character.power_data.value}
                </span>
            </li>
        </ul>
    </div>
    {$StrengthValue = $Inventory.StrengthValue + $Character.level_data.str}
    {$AgilityValue = $Inventory.AgilityValue + $Character.level_data.agi}
    {$IntellectValue = $Inventory.IntellectValue + $Character.level_data.inte}
    {$StaminaValue = $Inventory.StaminaValue + $Character.level_data.sta}
    {$SpiritValue = $Inventory.SpiritValue + $Character.level_data.spi}
    {$ArmorValue = $Inventory.ArmorValue}
    {$ParryValue = $Inventory.ParryValue}
    {$DodgeValue = $Inventory.DodgeValue}
    {$BlockValue = $Inventory.BlockValue}
    <div class="summary-stats-profs-bgs">

        <div class="summary-stats" id="summary-stats">
            <div id="summary-stats-simple" class="summary-stats-simple" style=" display: block">
                <div class="summary-stats-simple-base">
                    <div class="summary-stats-column">
                        <h4>{#Character_Stat_Main#}</h4>
                        <ul>
                            <li data-id="strength" class="">
                                <span class="name">{#Character_Stat_Strength#}</span>
                                <span class="value">{$StrengthValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="agility" class="">
                                <span class="name">{#Character_Stat_Agility#}</span>
                                <span class="value">{$AgilityValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="intellect" class="">
                                <span class="name">{#Character_Stat_Intellect#}</span>
                                <span class="value">{$IntellectValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="spirit" class="">
                                <span class="name">{#Character_Stat_Spirit#}</span>
                                <span class="value">{$SpiritValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="stamina" class="">
                                <span class="name">{#Character_Stat_Stamina#}</span>
                                <span class="value">{$StaminaValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>


                    <div class="summary-stats-column">
                        <h4>Атака</h4>
                        <ul>
                            <li data-id="attackdamage" class="">
                                <span class="name">Урон</span>
                                <span class="value">6850–7527</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="attackpower" class="">
                                <span class="name">Сила атаки</span>
                                <span class="value">{$Inventory.AttackPower}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="attackspeed" class="">
                                {if $Inventory.MainHandSpeed != 0}
                                    {$HasteRatingMH = ($Inventory.MainHandSpeed/1000) / (($Inventory.HasteValue/$Character.level_data.hastepoints)/100 +1)}
                                {/if}
                                {if $Inventory.OffHandSpeed != 0}
                                    {$HasteRatingOH = ($Inventory.OffHandSpeed/1000) / (($Inventory.HasteValue/$Character.level_data.hastepoints)/100 +1)}
                                {/if}
                                {if $Inventory.OffHandSpeed != 0}
                                    {$HasteRatingR = ($Inventory.RangedSpeed/1000) / (($Inventory.HasteValue/$Character.level_data.hastepoints)/100 +1)}
                                {/if}

                                <span class="name">Скорость атаки</span>
                                <span class="value">
                                    {if $Inventory.MainHandSpeed != 0 && $Inventory.RangedSpeed == 0}
                                        {$HasteRatingMH|string_format:"%.2f"}
                                    {/if}
                                    {if $Inventory.OffHandSpeed != 0 && $Inventory.RangedSpeed == 0}
                                        /{$HasteRatingOH|string_format:"%.2f"}
                                    {/if}
                                    {if $Inventory.RangedSpeed !=0}
                                        {$HasteRatingR|string_format:"%.2f"}
                                    {/if}

                                </span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>


                    <div class="summary-stats-column">
                        <h4>Заклинания</h4>
                        <ul>
                            <li data-id="spellpower" class="">
                                <span class="name">Сила заклинаний</span>
                                <span class="value">{$Inventory.SpellPowerValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="manaregen" class=" no-tooltip">
                                <span class="name">Восполнение маны</span>
                                <span class="value color-q0">--</span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="summary-stats-simple-other">


                    <div class="summary-stats-column">
                        <h4>Защита</h4>
                        <ul>
                            <li data-id="armor" class="">
                                <span class="name">{#Item_Class_Armor#}</span>
                                <span class="value">{$ArmorValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="dodge" class="">
                                <span class="name">{#Character_Stat_Dodge#}</span>
                                <span class="value">{$DodgeValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="parry" class="">
                                <span class="name">{#Character_Stat_Parry#}</span>
                                <span class="value">{$ParryValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="block" class="">
                                <span class="name">{#Character_Stat_Block#}</span>
                                <span class="value">{$BlockValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                        </ul>
                    </div>


                    <div class="summary-stats-column">
                        <h4>Усиления</h4>
                        <ul>
                            <li data-id="crit" class="">
                                <span class="name">{#Character_Stat_Crit#}</span>
                                <span class="value">{$Inventory.CritValue}</span>
                                <span class="clear"><!-- --></span>
                            </li>
                            <li data-id="haste" class="">
                                <span class="name">{#Character_Stat_Haste#}</span>
                                <span class="value">{$Inventory.HasteValue}</span>
                                <span class="clear"><!-- --></span>
                        </ul>
                    </div>
                </div>
                <div class="summary-stats-end"></div>
            </div>
        </div>

        {include file="parts/Character_Summary_Stats.tpl"}
        {include file="parts/MSG_Summary.tpl"}

    </div>
</div>