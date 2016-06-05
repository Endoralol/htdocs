<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 03:11:18
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/parts/MSG_Javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179011081757521ca6c30489-72464449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5632ad87c53c11b5e1640fbef17195f03913cf5c' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/parts/MSG_Javascript.tpl',
      1 => 1464961476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179011081757521ca6c30489-72464449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57521ca6c500f4_00962373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57521ca6c500f4_00962373')) {function content_57521ca6c500f4_00962373($_smarty_tpl) {?><?php echo '<script'; ?>
>
//<![CDATA[
var xsToken = '';
var supportToken = '';
var jsonSearchHandlerUrl = '//<?php echo $_SERVER['HTTP_HOST'];?>
';
var Msg = Msg || {};
Msg.support = {
ticketNew: 'Ticket <?php echo 0;?>
 was created.',
ticketStatus: 'Ticket <?php echo 0;?>
’s status changed to <?php echo 1;?>
.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Cancelled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
};
Msg.cms = {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
stickyHasBeenRequested: 'You have already sent a sticky request for this topic.',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Level <?php echo 0;?>
",
shortQuery: "Search requests must be at least three characters long.",
editSuccess: "Success. Reload?",
postDelete: "Are you sure you want to delete this post?",
throttleError: "You must wait before you can post again."
};
Msg.bml= {
bold: 'Bold',
italics: 'Italics',
underline: 'Underline',
list: 'Unordered List',
listItem: 'List Item',
quote: 'Quote',
quoteBy: 'Posted by <?php echo 0;?>
',
unformat: 'Remove Formating',
cleanup: 'Fix Linebreaks',
code: 'Code Blocks',
item: 'WoW Item',
itemPrompt: 'Item ID:',
url: 'URL',
urlPrompt: 'URL Address:'
};
Msg.ui= {
submit: 'Submit',
cancel: 'Cancel',
reset: 'Reset',
viewInGallery: 'View in gallery',
loading: 'Loading…',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on…',
fansiteFindType: 'Find <?php echo 0;?>
 on…',
fansiteNone: 'No fansites available.',
flashErrorHeader: 'Adobe Flash Player must be installed to see this content.',
flashErrorText: 'Download Adobe Flash Player',
flashErrorUrl: 'http://get.adobe.com/flashplayer/',
save: 'Save'
};
Msg.grammar= {
colon: '<?php echo 0;?>
:',
first: 'First',
last: 'Last',
ellipsis: '…'
};
Msg.fansite= {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'profession',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena team',
guild: 'guild',
zone: 'zone',
item: 'item',
race: 'race',
npc: 'NPC',
pet: 'pet'
};
Msg.search= {
noResults: 'There are no results to display.',
kb: 'Support',
post: 'Forums',
article: 'Blog Articles',
static: 'General Content',
wowcharacter: 'Characters',
wowitem: 'Items',
wowguild: 'Guilds',
wowarenateam: 'Arena Teams',
url: 'Suggested Links',
friend: 'Friends',
product: 'Marketplace Products',
other: 'Other'
};
//]]>
<?php echo '</script'; ?>
><?php }} ?>
