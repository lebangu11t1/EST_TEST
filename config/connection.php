<?php


class DB
{
    private static $instance = NULl;

    public static function getInstance()
    {
        $database = require_once('database.php');

        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=' . $database['db_name'],
                    $database['username'],
                    $database['password']);
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}