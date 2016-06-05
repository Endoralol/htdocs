<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:10:50
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/parts/MSG_Summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3539072445746bd9a1e1470-79741568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e82b2e0ddbc99c8c0119a12d77745f0ef6ca9088' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/parts/MSG_Summary.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3539072445746bd9a1e1470-79741568',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bd9a356807_33987175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bd9a356807_33987175')) {function content_5746bd9a356807_33987175($_smarty_tpl) {?><?php echo '<script'; ?>
 type="<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_');?>
">
    //<![CDATA[
    var MsgSummary = {
        inventory: {
            slots: {
                1: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Head');?>
",
                2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Neck');?>
",
                3: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Shoulders');?>
",
                4: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Shirt');?>
",
                5: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Chest');?>
",
                6: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Waist');?>
",
                7: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Legs');?>
",
                8: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Feet');?>
",
                9: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Wrists');?>
",
                10: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Hands');?>
",
                11: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Finger');?>
",
                12: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Trinket');?>
",
                15: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Ranged');?>
",
                16: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Back');?>
",
                19: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Tabard');?>
",
                21: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_RightHand');?>
",
                22: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_LeftHand');?>
",
                28: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Relic');?>
",
                empty: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Empty');?>
"
            }
        },
        talents: {
            specTooltip: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Specialization_title');?>
",
                primary: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Specialization_primary');?>
",
                secondary: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Specialization_secondary');?>
",
                active: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Specialization_active');?>
"
            }
        },
        stats: {
            toggle: {
                all: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_toggle_all');?>
",
                core: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_toggle_core');?>
"
            },
            increases: {
                attackPower: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_attackPower');?>
",
                critChance: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_critChance');?>
",
                spellCritChance: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_spellCritChance');?>
",
                spellPower: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_spellPower');?>
",
                health: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_health');?>
",
                mana: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_mana');?>
",
                manaRegen: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_manaRegen');?>
",
                meleeDps: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_meleeDps');?>
",
                rangedDps: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_rangedDps');?>
",
                petArmor: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_petArmor');?>
",
                petAttackPower: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_petAttackPower');?>
",
                petSpellDamage: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_petSpellDamage');?>
",
                petAttackPowerSpellDamage: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_increases_petAttackPowerSpellDamage');?>
"
            },
            decreases: {
                damageTaken: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_decreases_damageTaken');?>
",
                enemyRes: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_decreases_enemyRes');?>
",
                dodgeParry: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_decreases_dodgeParry');?>
"
            },
            noBenefits: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_noBenefits');?>
",
            beforeReturns: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_beforeReturns');?>
",
            damage: {
                speed: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_damage_speed');?>
",
                damage: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_damage_damage');?>
",
                dps: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_damage_dps');?>
"
            },
            averageItemLevel: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_averageItemLevel_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_averageItemLevel_description');?>
"
            },
            health: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_health_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_health_description');?>
"
            },
            mana: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_mana_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_mana_description');?>
"
            },
            rage: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rage_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rage_description');?>
"
            },
            focus: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_focus_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_focus_description');?>
"
            },
            energy: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_energy_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_energy_description');?>
"
            },
            runic: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_runic_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_runic_description');?>
"
            },
            strength: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_strength_title');?>
"
            },
            agility: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_agility_title');?>
"
            },
            stamina: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_stamina_title');?>
"
            },
            intellect: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_intellect_title');?>
"
            },
            spirit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spirit_title');?>
"
            },
            mastery: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_mastery_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_mastery_description');?>
",
                unknown: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_mastery_unknown');?>
",
                unspecced: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_mastery_unspecced');?>
"
            },
            crit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_crit_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_crit_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_crit_description2');?>
"
            },
            haste: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_haste_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_haste_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_haste_description2');?>
"
            },
            meleeDps: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeDps_title');?>
"
            },
            meleeAttackPower: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeAttackPower_title');?>
"
            },
            meleeSpeed: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeSpeed_title');?>
"
            },
            meleeHaste: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeHaste_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeHaste_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeHaste_description2');?>
"
            },
            meleeHit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeHit_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeHit_description');?>
"
            },
            meleeCrit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeCrit_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeCrit_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_meleeCrit_description2');?>
"
            },
            expertise: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_expertise_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_expertise_description');?>
"
            },
            rangedDps: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedDps_title');?>
"
            },
            rangedAttackPower: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedAttackPower_title');?>
"
            },
            rangedSpeed: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedSpeed_title');?>
"
            },
            rangedHaste: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedHaste_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedHaste_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedHaste_description2');?>
"
            },
            rangedHit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedHit_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedHit_description');?>
"
            },
            rangedCrit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedCrit_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedCrit_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_rangedCrit_description2');?>
"
            },
            spellPower: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellPower_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellPower_description');?>
"
            },
            spellHaste: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellHaste_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellHaste_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellHaste_description2');?>
"
            },
            spellHit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellHit_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellHit_description');?>
"
            },
            spellCrit: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellCrit_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellCrit_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_spellCrit_description2');?>
"
            },
            manaRegen: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_manaRegen_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_manaRegen_description');?>
"
            },
            combatRegen: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_combatRegen_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_combatRegen_description');?>
"
            },
            armor: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_armor_title');?>
"
            },
            dodge: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_dodge_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_dodge_description');?>
"
            },
            parry: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_parry_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_parry_description');?>
"
            },
            block: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_block_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_block_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_block_description2');?>
"
            },
            resilience: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_resilience_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_resilience_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_resilience_description2');?>
"
            },
            pvppower: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_pvppower_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_pvppower_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_pvppower_description2');?>
",
                description3: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_pvppower_description3');?>
",
                description4: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_pvppower_description4');?>
"
            },
            arcaneRes: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_arcaneRes_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_arcaneRes_description');?>
"
            },
            fireRes: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_fireRes_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_fireRes_description');?>
"
            },
            frostRes: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_frostRes_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_frostRes_description');?>
"
            },
            natureRes: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_natureRes_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_natureRes_description');?>
"
            },
            shadowRes: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_shadowRes_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_shadowRes_description');?>
"
            },
            bonusArmor: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_bonusArmor_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_bonusArmor_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_bonusArmor_description2');?>
"
            },
            multistrike: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_multistrike_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_multistrike_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_multistrike_description2');?>
"
            },
            leech: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_leech_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_leech_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_leech_description2');?>
"
            },
            versatility: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_versatility_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_versatility_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_versatility_description2');?>
"
            },
            avoidance: {
                title: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_avoidance_title');?>
",
                description: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_avoidance_description');?>
",
                description2: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_avoidance_description2');?>
"
            }
        },
        recentActivity: {
            subscribe: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_recentActivity_subscribe');?>
"
        },
        raid: {
            tooltip: {
                lfr: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_raid_tooltip_lfr');?>
",
                flex: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_raid_tooltip_flex');?>
",
                normal: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_raid_tooltip_normal');?>
",
                heroic: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_raid_tooltip_heroic');?>
",
                mythic: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_raid_tooltip_mythic');?>
",
                complete: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_raid_tooltip_complete');?>
",
                optional: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_raid_tooltip_optional');?>
"
            }
        },
        links: {
            tools: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_links_tools');?>
",
            saveImage: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_links_saveImage');?>
",
            saveimageTitle: "<?php echo $_smarty_tpl->getConfigVariable('MSG_Summary_Stats_links_saveimageTitle');?>
"
        }
    };
    //]]>
<?php echo '</script'; ?>
><?php }} ?>
