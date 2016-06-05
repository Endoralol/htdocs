<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 12:10:50
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/profile_raid_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11622924275746bd9a3a40b9-25979464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f26a9c6fdb5239ed210799a58c42b423ee489f4b' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/blocks/profile_raid_content.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11622924275746bd9a3a40b9-25979464',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5746bd9a3b22c6_94002698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746bd9a3b22c6_94002698')) {function content_5746bd9a3b22c6_94002698($_smarty_tpl) {?><div id="summary-raid" class="summary-raid">
    <h3 class="category">Рейдовый прогресс</h3>
    <div class="profile-box-full">

        <div class="prestige"><div>Самое престижное рейдовое звание:
                <strong>
                    <a href="/character/kazzak/Russianfur/achievement#168:15107:a8680" data-achievement="8680"> освободитель Оргриммара</a>
                </strong>
            </div></div>

        <div class="summary-raid-wrapper">

            <div class="summary-raid-wrapper-left">

                <a id="summary-raid-arrow-left" class="arrow-left" href="javascript:;"></a>
                <a id="summary-raid-arrow-right" class="arrow-right" href="javascript:;"></a>

                <div class="lfr"><span>СПР</span></div>
                <div class="normal"><span>Нормальный ур.</span></div>
                <div class="heroic"><span>Героический ур.</span></div>
                <div class="mythic"><span>Эпохальный</span></div>

            </div>

            <div id="summary-raid-wrapper-table" class="summary-raid-wrapper-table">
                <table cellspacing="0">
                    <thead>
                    <tr>
                        <th class="spacer-left"><div></div></th>
                        <th class="trivial" colspan="63">
                            <div class="name-anchor">
                                <div class="name" id="summary-raid-head-trivial">Легко</div>
                            </div>
                            <div class="marker"></div>
                        </th>
                        <th></th>
                        <th class="optimal" colspan="3">
                            <div class="name-anchor">
                                <div class="name">Средне</div>
                            </div>
                            <div class="marker"></div>
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo $_smarty_tpl->getSubTemplate ('parts/Character_Raid_Raids.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ('parts/Character_Raid_LFR.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ('parts/Character_Raid_Normal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ('parts/Character_Raid_Heroic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ('parts/Character_Raid_Mythic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </tbody>
                </table>
            </div>
            <span class="clear"><!-- --></span>
        </div>
        <div class="summary-raid-legend">
            <span class="completed">Завершено</span>
            <span class="in-progress">В процессе</span>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('parts/Character_Raid_Progression.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div><?php }} ?>
