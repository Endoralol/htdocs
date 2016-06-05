<?php
header('X-Frame-Options: SAMEORIGIN');
require_once('Core/Classes/Autoloader.Class.php');
Autoloader::Initialize();
new ErrorHandler($Smarty);
if(!$InstallationIsInProgress)
{
    Manager::LoadExtension('Account', array($Database, $Smarty));
    Manager::LoadExtension('Characters', array($Database, $Smarty));
    Manager::LoadExtension('Items', array($Database, $Smarty));
    if(isset($_SESSION['username']) && !Text::IsNull($_SESSION['username']))
    {
        $User = Account::Get($_SESSION['username']);
        $UserGame = Account::GetUserGame($_SESSION['username']);
        $CharID = Account::GetIdsAccounts($_SESSION['username']);
        $Characters = Characters::GetCharacters($CharID['id']);
        $Smarty->assign('Characters', $Characters);
        $Smarty->assign('User', $User);
        $SelectedCharacterForComments = array();
        if($Characters != 0)
            foreach($Characters as $Character)
                if($Character['guid'] == $User['pinned_character'])
                    $SelectedCharacterForComments = $Character;
        $Smarty->assign('CommentCharacter', $SelectedCharacterForComments);
        Session::UpdateSession($_SESSION);
    }
    else
        Session::UpdateSession(array('loggedin' => false));
}
?>