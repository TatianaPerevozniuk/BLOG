<?php

class DbConnector
{
    private static $pdo;

    public static function getConnection()
    {
        if (!self::$pdo) {
            $dbUser = 'root';
            $dbPassword = '';
            $dbName = 'blog';
            self::$pdo = new PDO("mysql:host=localhost;dbname={$dbName}", $dbUser, $dbPassword);
        }
        return self::$pdo;
    }
}
