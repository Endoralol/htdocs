<?php

Class Forums
{
    private static $DBConnection;
    private static $CharConnection;
    private static $WConnection;
    private static $TM;


    public function __construct($VariablesArray)
    {
        Forums::$DBConnection = $VariablesArray[0]::$Connection;
        Forums::$CharConnection = $VariablesArray[0]::$CConnection;
        Forums::$WConnection = $VariablesArray[0]::$WConnection;
        Forums::$TM = $VariablesArray[1];
    }

        public static function GetPopularThreads() {

        $Statement = Forums::$DBConnection->prepare('SELECT * FROM forum_topics ORDER BY post_time DESC LIMIT 10');
        $Statement->execute();
        $Result = $Statement->fetchAll(PDO::FETCH_ASSOC);
        return $Result;
    }

    public static function GetForums()
    {
        $Statement = Forums::$DBConnection->prepare('SELECT * FROM forums');
        $Statement->execute();
        $Result = $Statement->fetchAll(PDO::FETCH_ASSOC);
        $ArrayIndex = 0;
        $Forums = array();
        foreach($Result as $ForumCategory)
        {
            $Result[$ArrayIndex]['forum_name'] = Forums::$TM->GetConfigVars($ForumCategory['forum_name']);
            $Result[$ArrayIndex]['forum_description'] = Forums::$TM->GetConfigVars($ForumCategory['forum_description']);
            $Result[$ArrayIndex]['forum_type_name'] = Forums::GetForumTypeTranslated($ForumCategory['forum_type']);
            $ArrayIndex++;
        }
        foreach($Result as $ForumCategory)
            $Forums[$ForumCategory['forum_type']][] = $ForumCategory;
        return $Forums;
    }

    public static function CheckForumExistance($ForumID)
    {
        $Statement = Forums::$DBConnection->prepare('SELECT id FROM forums WHERE id = :forumid');
        $Statement->bindParam(':forumid', $ForumID);
        $Statement->execute();
        $Result = $Statement->fetch(PDO::FETCH_ASSOC);
        if($ForumID == $Result['id'])
            return true;
        else
            return false;
    }

    public static function GetPostsData($TopicID)
    {
        $Statement = Forums::$DBConnection->prepare('SELECT fc.*, f.forum_name, f.forum_type, ft.topic, ft.closed FROM forum_comments fc, forums f, forum_topics ft WHERE ft.id = fc.topic_id AND fc.forum_id = f.forum_id AND fc.id = :topicid');
        $Statement->bindParam(':topicid', $TopicID);
        $Statement->execute();
        $Result = $Statement->fetchAll(PDO::FETCH_ASSOC);
        $ArrayIndex = 0;
        foreach($Result as $Topic)
        {
            $Result[$ArrayIndex]['forum_type_name'] = Forums::GetForumTypeTranslated($Topic['forum_id']);
            $Result[$ArrayIndex]['forum_name'] = Forums::$TM->GetConfigVars($Topic['forum_name']);
            $ArrayIndex++;
        }
        $ArrayIndex = 0;
        $TopicData = array(
            'type' => array(
                'id' => $Result[0]['forum_type'],
                'name' => $Result[0]['forum_type_name'],
            ),
            'category' => array(
                'id' => $Result[0]['forum_id'],
                'name' => $Result[0]['forum_name'],
                'attached' => $Result[0]['attached']
            ),
            'topic' => array(
                'id' => $Result[0]['topic_id'],
                'ids' => $Result[0]['id'],
                'name' => $Result[0]['topic'],
                'closed' => $Result[0]['closed'],
                'post_message' => $Result[0]['post_message']

            ),
            'replies' => array()
        );
        foreach($Result as $Reply)
        {
            $CharacterData = Characters::GetShortProfileInfo($Reply['posted_by']);
            $Result[$ArrayIndex]['class'] = $CharacterData['class'];
            $Result[$ArrayIndex]['race'] = $CharacterData['race'];
            $Result[$ArrayIndex]['class_name'] = $CharacterData['class_name'];
            $Result[$ArrayIndex]['race_name'] = $CharacterData['race_name'];
            $Result[$ArrayIndex]['gender'] = $CharacterData['gender'];
            $Result[$ArrayIndex]['level'] = $CharacterData['level'];
            $Result[$ArrayIndex]['apoints'] = $CharacterData['apoints'];
            $Result[$ArrayIndex]['post_message'] = Forums::ParseBBCode($Reply['post_message']);
            $ArrayIndex++;
        }
        $TopicData['replies'] = Text::MassUnset($Result, array('forum_type', 'forum_type_name', 'forum_id', 'forum_name', 'topic', 'topic_id'));

        return $TopicData;
    }

    public static function TopicClosed($TopicID)
    {
        $Statement = Forums::$DBConnection->prepare('UPDATE forum_comments SET closed = 1 WHERE topic_id = :topicid');
        $Statement->bindParam(':topicid', $TopicID);
        $Statement->execute();
        $Statementq = Forums::$DBConnection->prepare('UPDATE forum_topics SET closed = 1 WHERE id = :forumid');
        $Statementq->bindParam(':forumid', $TopicID);
        $Statementq->execute();
        return true;
    }

    public static function TopicOpen($TopicID)
    {
        $Statement = Forums::$DBConnection->prepare('UPDATE forum_comments SET closed = 0 WHERE topic_id = :topicid');
        $Statement->bindParam(':topicid', $TopicID);
        $Statement->execute();
        $Statementq = Forums::$DBConnection->prepare('UPDATE forum_topics SET closed = 0 WHERE id = :forumid');
        $Statementq->bindParam(':forumid', $TopicID);
        $Statementq->execute();
        return true;
    }

    public static function TopicDelete($TopicID)
    {
        $Statement = Account::$DBConnection->prepare('DELETE FROM forum_topics WHERE id = :topicid');
        $Statement->bindParam(':topicid', $TopicID);
        $Statement->execute();
        $Statement1 = Account::$DBConnection->prepare('DELETE FROM forum_comments WHERE topic_id = :topid');
        $Statement1->bindParam(':topid', $TopicID);
        $Statement1->execute();
        return true;
    }

    public static function TopicDeleteUser($TopicID)
    {
        $Statement = Account::$DBConnection->prepare('DELETE FROM forum_comments WHERE id = :topid');
        $Statement->bindParam(':topid', $TopicID);
        $Statement->execute();
        return "topicDeleted";
    }

    public static function GetTopics($ForumID)
    {
        global $FCCore;
        $Statement = Forums::$DBConnection->prepare('
            SELECT *,
                posted_by as postername
            FROM
                '.$FCCore['Database']['database'].'.forum_topics
            WHERE
                    forum_id = :forumid
                ORDER BY post_time, attached = 1 DESC
        ');
        $Statement->bindParam(':forumid', $ForumID);
        $Statement->execute();
        $Result = $Statement->fetchAll(PDO::FETCH_ASSOC);
        $ForumData = Forums::GetForumData($ForumID);

        $ArrayIndex = 0;

        foreach($Result as $Topic)
        {
            $Result[$ArrayIndex]['forum_info'] = Forums::GetLastReplyData($Topic['forum_id'], $Topic['id']);
            $Result[$ArrayIndex]['last_reply_data'] = Forums::GetLastReplyData($Topic['forum_id'], $Topic['id']);
            $ArrayIndex++;
        }

        $ForumData['topics'] = $Result;
        return $ForumData;
    }

    public static function UpdateTopicViews($ForumID, $TopicID)
    {
        $Statement = Forums::$DBConnection->prepare('UPDATE forum_topics SET views = views+1 WHERE id = :topicid AND forum_id = :forumid');
        $Statement->bindParam(':forumid', $ForumID);
        $Statement->bindParam(':topicid', $TopicID);
        $Statement->execute();
        return true;
    }

    public static function GetTopicData($TopicID)
    {
        $Statement = Forums::$DBConnection->prepare('SELECT fc.*, f.forum_name, f.forum_type, ft.topic, ft.closed, ft.attached FROM forum_comments fc, forums f, forum_topics ft WHERE ft.id = fc.topic_id AND fc.forum_id = f.forum_id AND topic_id = :topicid');
        $Statement->bindParam(':topicid', $TopicID);
        $Statement->execute();
        $Result = $Statement->fetchAll(PDO::FETCH_ASSOC);
        $ArrayIndex = 0;
        foreach($Result as $Topic)
        {
            $Result[$ArrayIndex]['forum_type_name'] = Forums::GetForumTypeTranslated($Topic['forum_id']);
            $Result[$ArrayIndex]['forum_name'] = Forums::$TM->GetConfigVars($Topic['forum_name']);
            $ArrayIndex++;
        }
        $ArrayIndex = 0;
        $TopicData = array(
            'type' => array(
                'id' => $Result[0]['forum_type'],
                'name' => $Result[0]['forum_type_name'],
            ),
            'category' => array(
                'id' => $Result[0]['forum_id'],
                'attached' => $Result[0]['attached'],
                'name' => $Result[0]['forum_name']
            ),
            'topic' => array(
                'id' => $Result[0]['topic_id'],
                'name' => $Result[0]['topic'],
                'closed' => $Result[0]['closed']
            ),
            'replies' => array()
        );
        foreach($Result as $Reply)
        {
            $CharacterData = Characters::GetShortProfileInfo($Reply['posted_by']);
            $Result[$ArrayIndex]['class'] = $CharacterData['class'];
            $Result[$ArrayIndex]['race'] = $CharacterData['race'];
            $Result[$ArrayIndex]['class_name'] = $CharacterData['class_name'];
            $Result[$ArrayIndex]['race_name'] = $CharacterData['race_name'];
            $Result[$ArrayIndex]['gender'] = $CharacterData['gender'];
            $Result[$ArrayIndex]['level'] = $CharacterData['level'];
            $Result[$ArrayIndex]['apoints'] = $CharacterData['apoints'];
            $Result[$ArrayIndex]['post_message'] = Forums::ParseBBCode($Reply['post_message']);
            $ArrayIndex++;
        }
        $TopicData['replies'] = Text::MassUnset($Result, array('forum_type', 'forum_type_name', 'forum_id', 'forum_name', 'topic', 'topic_id'));

        return $TopicData;
    }

    private static function GetLastReplyData($ForumID, $TopicID)
    {
        global $FCCore;
        $Statement = Forums::$CharConnection->prepare('
            SELECT
                post_time,
                gm,
                c.name as postername
            FROM
                '.$FCCore['Database']['database'].'.forum_comments fc, '.$FCCore['Database']['database'].'.users u, characters c
            WHERE
                    c.name = fc.posted_by
                AND
                    c.guid = u.pinned_character
                AND
                    fc.forum_id = :forumid
                AND
                    fc.topic_id = :topicid
            ORDER BY fc.id DESC
            LIMIT 1
        ');
        $Statement->bindParam(':forumid', $ForumID);
        $Statement->bindParam(':topicid', $TopicID);
        $Statement->execute();
        return $Statement->fetch(PDO::FETCH_ASSOC);
    }
    private static function GetForumData($ForumID)
    {
        $Statement = Forums::$DBConnection->prepare('SELECT forum_type, forum_name FROM forums WHERE id = :forumid');
        $Statement->bindParam(':forumid', $ForumID);
        $Statement->execute();
        $Result = $Statement->fetch(PDO::FETCH_ASSOC);
        return array(
            'forum_id' => $ForumID,
            'forum_type' => $Result['forum_type'],
            'forum_type_name' => Forums::GetForumTypeTranslated($Result['forum_type']),
            'forum_name' => Forums::$TM->GetConfigVars($Result['forum_name']),
            'topics' => array()
        );
    }


    private static function GetForumTypeTranslated($ForumType)
    {
        $ForumTypes = array(
            1 => Forums::$TM->GetConfigVars('Forum_Category_Support_Name'),
            2 => Forums::$TM->GetConfigVars('Forum_Category_Community_Name'),
            3 => Forums::$TM->GetConfigVars('Forum_Category_GameProcess_Name'),
            4 => Forums::$TM->GetConfigVars('Forum_Category_PvP_Name'),
            5 => Forums::$TM->GetConfigVars('Forum_Category_Classes_Name'),
        );

        return $ForumTypes[$ForumType];
    }

    public static function AddTopicComments($TopicID, $ForumID, $PostedBy, $Message, $GmAdd, $UserID) {
        $PostTime = time();
        Forums::AddTopicComm($ForumID, $TopicID, 1, $PostedBy, $PostTime, nl2br($Message), $GmAdd, $UserID);
        return $TopicID;
    }

    public static function CreateTopic($ForumID, $PostedBy, $Topic, $Message, $GmAdd, $UserID)
    {
        $PostTime = time();
        $TopicID = Forums::AddTopic($ForumID, $PostedBy, $Topic, 0, $PostTime);
        Forums::AddTopicComment($ForumID, $TopicID, 1, $PostedBy, $PostTime, nl2br($Message), $GmAdd, $UserID);
        return $TopicID;
    }

    private static function AddTopic($ForumID, $PostedBy, $Topic, $Views, $PostTime)
    {
        $Statement = Forums::$DBConnection->prepare('INSERT INTO forum_topics (forum_id, posted_by, topic, views, post_time) VALUES (:forumid, :postedby, :topic, :views, :posttime)');
        $Statement->bindParam(':forumid', $ForumID);
        $Statement->bindParam(':postedby', $PostedBy);
        $Statement->bindParam(':views', $Views);
        $Statement->bindParam(':topic', $Topic);
        $Statement->bindParam(':posttime', $PostTime);
        $Statement->execute();
        $TopicID = Forums::$DBConnection->lastInsertId();
        return $TopicID;
    }

    public static function TopicUnsticky($ForumID) {
        $Statement = Forums::$DBConnection->prepare('UPDATE forum_topics SET attached = NULL WHERE id = :fid');
        $Statement->bindParam(':fid', $ForumID);
        $Statement->execute();
        return true;
    }

    public static function TopicSticky($ForumID) {
        $Statement = Forums::$DBConnection->prepare('UPDATE forum_topics SET attached = 1 WHERE id = :fid');
        $Statement->bindParam(':fid', $ForumID);
        $Statement->execute();
        return true;
    }
    public static function EditTopicComments($ForumID, $TopicID, $PostMessage) {
        $Statement = Forums::$DBConnection->prepare('UPDATE forum_comments SET post_message = :pmessage WHERE id = :tid AND topic_id = :fid');
        $Statement->bindParam(':fid', $ForumID);
        $Statement->bindParam(':tid', $TopicID);
        $Statement->bindParam(':pmessage', $PostMessage);
        $Statement->execute();
    }

    private static function AddTopicComm($ForumID, $TopicID, $PostID, $PostedBy, $PostTime, $PostMessage, $GmAdd, $UserID)
    {
        if(strstr($PostMessage, '[img]') || strstr($PostMessage, '<img>'))
        $PostMessage = str_replace('[img]', '', str_replace('[/img]', '', str_replace('<img>', '', str_replace('</img>', '', $PostMessage))));
        $Statement = Forums::$DBConnection->prepare('INSERT INTO forum_comments (forum_id, topic_id, post_id, posted_by, post_time, user_id, post_message, gm) VALUES (:fid, :tid, :pid, :pby, :ptime, :userid, :pmessage, :gm)');
        $Statement->bindParam(':fid', $ForumID);
        $Statement->bindParam(':tid', $TopicID);
        $Statement->bindParam(':pid', $PostID);
        $Statement->bindParam(':pby', $PostedBy);
        $Statement->bindParam(':ptime', $PostTime);
        $Statement->bindParam(':pmessage', $PostMessage);
        $Statement->bindParam(':gm', $GmAdd);
        $Statement->bindParam(':userid', $UserID);
        $Statement->execute();
    }

    private static function AddTopicComment($ForumID, $TopicID, $PostID, $PostedBy, $PostTime, $PostMessage, $GmAdd, $UserID)
    {
        if(strstr($PostMessage, '[img]') || strstr($PostMessage, '<img>'))
        $PostMessage = str_replace('[img]', '', str_replace('[/img]', '', str_replace('<img>', '', str_replace('</img>', '', $PostMessage))));
        $Statement = Forums::$DBConnection->prepare('INSERT INTO forum_comments (forum_id, topic_id, post_id, posted_by, post_time, user_id, post_message, gm) VALUES (:fid, :tid, :pid, :pby, :ptime, :userid, :pmessage, :gm)');
        $Statement->bindParam(':fid', $ForumID);
        $Statement->bindParam(':tid', $TopicID);
        $Statement->bindParam(':pid', $PostID);
        $Statement->bindParam(':pby', $PostedBy);
        $Statement->bindParam(':ptime', $PostTime);
        $Statement->bindParam(':pmessage', $PostMessage);
        $Statement->bindParam(':gm', $GmAdd);
        $Statement->bindParam(':userid', $UserID);
        $Statement->execute();
    }

    public static function QuotePost($Forum, $Topic, $Post)
    {
        $Statement = Forums::$DBConnection->prepare('SELECT posted_by, post_message FROM forum_comments WHERE forum_id = :fid AND topic_id= :tid AND post_id = :pid');
        $Statement->bindParam(':fid', $Forum);
        $Statement->bindParam(':tid', $Topic);
        $Statement->bindParam(':pid', $Post);
        $Statement->execute();
        $Result = $Statement->fetch(PDO::FETCH_ASSOC);
        $JsonResponse = json_encode(
            array(
                'poster' => $Result['posted_by'],
                'detail' => $Result['post_message']
            )
        );
        return $JsonResponse;
    }

    private static function ParseBBCode($Message)
    {
        return str_replace('[', '<', str_replace(']', '>', $Message));
    }
}

?>