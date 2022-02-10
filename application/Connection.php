<?php
class Connection
{
    public static function getInstance()
    {
        $db = new PDO("mysql:host=localhost;dbname=vuanhabep_project", "root", "");
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $db;
    }
}