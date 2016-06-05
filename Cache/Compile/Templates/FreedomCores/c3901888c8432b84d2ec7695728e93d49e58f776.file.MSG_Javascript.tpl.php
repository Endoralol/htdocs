<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:22:36
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\parts\MSG_Javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32631574f35fcbf1f12-32408485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3901888c8432b84d2ec7695728e93d49e58f776' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\parts\\MSG_Javascript.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32631574f35fcbf1f12-32408485',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f35fcc2d416_55780378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f35fcc2d416_55780378')) {function content_574f35fcc2d416_55780378($_smarty_tpl) {?><?php echo '<script'; ?>
>
    //<![CDATA[
    var xsToken = '';
    var supportToken = '';
    var jsonSearchHandlerUrl = '//<?php echo $_SERVER['HTTP_HOST'];?>
';
    var Msg = Msg || {};
    Msg.support = {
        ticketNew: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketNew');?>
',
        ticketStatus: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketStatus');?>
',
        ticketOpen: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketOpen');?>
',
        ticketAnswered: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketAnswered');?>
',
        ticketResolved: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketResolved');?>
',
        ticketCanceled: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketCanceled');?>
',
        ticketArchived: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketArchived');?>
',
        ticketInfo: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketInfo');?>
',
        ticketAll: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Support_ticketAll');?>
'
    };
    Msg.cms = {
        requestError: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_requestError');?>
',
        ignoreNot: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_ignoreNot');?>
',
        ignoreAlready: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_ignoreAlready');?>
',
        stickyRequested: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_stickyRequested');?>
',
        stickyHasBeenRequested: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_stickyHasBeenRequested');?>
',
        postAdded: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_postAdded');?>
',
        postRemoved: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_postRemoved');?>
',
        userAdded: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_userAdded');?>
',
        userRemoved: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_userRemoved');?>
',
        validationError: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_validationError');?>
',
        characterExceed: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_characterExceed');?>
',
        searchFor: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_searchFor');?>
',
        searchTags: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_searchTags');?>
',
        characterAjaxError: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_characterAjaxError');?>
',
        ilvl: "<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_ilvl');?>
",
        shortQuery: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_shortQuery');?>
',
        editSuccess: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_editSuccess');?>
',
        postDelete: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_postDelete');?>
',
        throttleError: '<?php echo $_smarty_tpl->getConfigVariable('MSG_CMS_throttleError');?>
',
    };
    Msg.bml= {
        bold: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_bold');?>
',
        italics: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_italics');?>
',
        underline: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_underline');?>
',
        list: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_list');?>
',
        listItem: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_listItem');?>
',
        quote: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_quote');?>
',
        quoteBy: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_quoteBy');?>
',
        unformat: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_unformat');?>
',
        cleanup: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_cleanup');?>
',
        code: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_code');?>
',
        item: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_item');?>
',
        itemPrompt: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_itemPrompt');?>
',
        url: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_url');?>
',
        urlPrompt: '<?php echo $_smarty_tpl->getConfigVariable('MSG_BML_urlPrompt');?>
'
    };
    Msg.ui= {
        submit: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_submit');?>
',
        cancel: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_cancel');?>
',
        reset: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_reset');?>
',
        viewInGallery: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_viewInGallery');?>
',
        loading: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_loading');?>
',
        unexpectedError: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_unexpectedError');?>
',
        fansiteFind: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_fansiteFind');?>
',
        fansiteFindType: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_fansiteFindType');?>
',
        fansiteNone: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_fansiteNone');?>
',
        flashErrorHeader: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_flashErrorHeader');?>
',
        flashErrorText: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_flashErrorText');?>
',
        flashErrorUrl: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_flashErrorUrl');?>
',
        save: '<?php echo $_smarty_tpl->getConfigVariable('MSG_UI_save');?>
'
    };
    Msg.grammar= {
        colon: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Grammar_colon');?>
',
        first: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Grammar_first');?>
',
        last: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Grammar_last');?>
',
        ellipsis: '...'
    };
    Msg.fansite= {
        achievement: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_achievement');?>
',
        character: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_character');?>
',
        faction: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_faction');?>
',
        'class': '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_class');?>
',
        object: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_object');?>
',
        talentcalc: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_talentcalc');?>
',
        skill: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_skill');?>
',
        quest: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_quest');?>
',
        spell: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_spell');?>
',
        event: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_event');?>
',
        title: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_title');?>
',
        arena: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_arena');?>
',
        guild: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_guild');?>
',
        zone: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_zone');?>
',
        item: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_item');?>
',
        race: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_race');?>
',
        npc: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_npc');?>
',
        pet: '<?php echo $_smarty_tpl->getConfigVariable('MSG_FanSite_pet');?>
'
    };
    Msg.search= {
        noResults: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_noResults');?>
',
        kb: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_kb');?>
',
        post: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_post');?>
',
        article: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_article');?>
',
        static: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_static');?>
',
        wowcharacter: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_wowcharacter');?>
',
        wowitem: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_wowitem');?>
',
        wowguild: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_wowguild');?>
',
        wowarenateam: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_wowarenateam');?>
',
        url: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_url');?>
',
        friend: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_friend');?>
',
        product: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_product');?>
',
        other: '<?php echo $_smarty_tpl->getConfigVariable('MSG_Search_other');?>
'
    };
    //]]>
<?php echo '</script'; ?>
>
<?php }} ?>
