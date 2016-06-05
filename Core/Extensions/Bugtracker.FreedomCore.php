<?php

Class Bugtracker
{
    public static $DBConnection;
    public static $AuthConnection;
    public static $TM;
    public static $VariablesArray;

    /**
     * This is a class constructor
     * @param $VariablesArray - Array with Smarty Object and all of the DB Objects
     */
    public function __construct($VariablesArray)
    {
        Bugtracker::$DBConnection = $VariablesArray[0]::$Connection;
        Bugtracker::$AuthConnection = $VariablesArray[0]::$AConnection;
        Bugtracker::$VariablesArray = $VariablesArray;
        Bugtracker::$TM = $VariablesArray[1];
    }

    public static function GetAllData() {
        $Statement = Bugtracker::$DBConnection->prepare('SELECT * FROM bug_tracker ORDER BY date DESC');
        $Statement->execute();
        $Result = $Statement->fetchAll(PDO::FETCH_ASSOC);
        return $Result;
    }
}

?>