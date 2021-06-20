<?php
class DatabaseContext
{
    //Database credentials for CPanel DB
    // private static $username = "jerroeok_jerrindb";
    // private static $password = 'jerrineldo';
    // private static $dsn = "mysql:host=premium42;dbname=jerroeok_portfoliodb";

    //Database credentials for localhost 
    private static $username = "jerrineldo";
    private static $password = 'jerrineldo';
    private static $dsn = "mysql:host=localhost;dbname=portfolio";

    private static $dbcon;

    private function __construct()
    {
    }
    public static function dbConnect()
    {
        if (!isset(self::$dbcon)) {
            try {
                self::$dbcon = new PDO(self::$dsn, self::$username, self::$password);
                self::$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $error) {
            }
        }
        return self::$dbcon;
    }
}

?>