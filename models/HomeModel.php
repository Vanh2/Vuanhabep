<?php
trait HomeModel
{
    // Section 4
    public function getProductByCategory($id)
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from products where category_id = {$id} order by id desc limit 8");
        return $query->fetchAll();
    }
    // Section 6
    public function Section($id)
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from products where category_id = {$id} order by id desc limit 3");
        return $query->fetchAll();
    }
    public function modelHotNews()
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from news order by id desc limit 7,10");
        return $query->fetchAll();
    }
}