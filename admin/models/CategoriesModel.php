<?php
trait CategoriesModel
{
    public function modelRead($recordPerPage)
    {
        $page = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"] - 1) : 0;
        $from = $page * $recordPerPage;
        $db = Connection::getInstance();
        $query = $db->query("select * from categories where parent_id = 0 order by id desc limit $from, $recordPerPage");
        return $query->fetchAll();
    }
    public function modelTotalRecord()
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from categories where parent_id = 0");
        return $query->rowCount();
    }
    public function modelCategoriesSub($category_id)
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from categories where parent_id = $category_id");
        return $query->fetchAll();
    }
    public function modelCategories($category_id)
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from categories where parent_id = 0 and id <> $category_id");
        return $query->fetchAll();
    }
    public function modelGetRecord()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $query = $db->prepare("select * from categories users where id=:var_id");
        $query->execute(["var_id" => $id]);
        return $query->fetch();
    }
    public function modelUpdate()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $name = $_POST["name"];
        $parent_id = $_POST["parent_id"];
        $db = Connection::getInstance();
        $query = $db->prepare("update categories set name=:var_name, parent_id=:var_parent_id where id=:var_id");
        $query->execute(["var_id" => $id, "var_name" => $name, "var_parent_id" => $parent_id]);
    }
    public function modelCreate()
    {
        $name = $_POST["name"];
        $parent_id = $_POST["parent_id"];
        $db = Connection::getInstance();
        $query = $db->prepare("insert into categories set name=:var_name, parent_id=:var_parent_id");
        $query->execute(["var_name" => $name, "var_parent_id" => $parent_id]);
    }
    public function modelDelete()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $query = $db->prepare("delete from categories where id=:var_id or parent_id=:var_id");
        $query->execute(["var_id" => $id]);
    }
}