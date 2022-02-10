<?php
trait ProductsModel
{
    public function modelRead($recordPerPage)
    {
        $page = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"] - 1) : 0;
        $from = $page * $recordPerPage;
        $db = Connection::getInstance();
        $query = $db->query("select * from products order by id desc limit $from,$recordPerPage");
        return $query->fetchAll();
    }
    public function modelTotalRecord()
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from products");
        return $query->rowCount();
    }
    public function modelCategoriesSub($category_id)
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from categories where parent_id= $category_id");
        return $query->fetchAll();
    }
    public function modelCategories()
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from categories where parent_id=0");
        return $query->fetchAll();
    }
    public function getCategory($category_id)
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from categories where id = $category_id");
        return $query->fetch();
    }
    public function modelGetRecord()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $query = $db->prepare("select * from products where id=:var_id");
        $query->execute(["var_id" => $id]);
        return $query->fetch();
    }
    public function modelUpdate()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $name = $_POST["name"];
        $category_id = $_POST["category_id"];
        $description = $_POST["mota"];
        $content = $_POST["noidung"];
        $hot = isset($_POST["hot"]) ? 1 : 0;
        $discount = $_POST["discount"];
        $price = $_POST["price"];
        $db = Connection::getInstance();
        $query = $db->prepare("update products set name =:var_name, category_id =:var_category_id, description=:var_description,content=:var_content,hot=:var_hot,discount=:var_discount,price=:var_price where id=:var_id");
        $query->execute(["var_id" => $id, "var_name" => $name, "var_category_id" => $category_id, "var_description" => $description, "var_content" => $content, "var_hot" => $hot, "var_discount" => $discount, "var_price" => $price]);
        $photo = "";
        if ($_FILES["photo"]["name"] != "") {
            $oldPhoto = $db->query("select photo from products where id =$id");
            if ($oldPhoto->rowCount() > 0) {
                $record = $oldPhoto->fetch();
                if ($record->photo != "" && file_exists("../asssets/upload/products/" . $record->photo)) unlink("../assets/upload/products/" . $record->photo);
            }
        }
        $photo = time() . "_" . $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/products/$photo");
        $query = $db->prepare("update products set photo=:var_photo where id=$id");
        $query->execute(["var_photo" => $photo]);
    }
    public function modelCreate()
    {
        $name = $_POST["name"];
        $category_id = $_POST["category_id"];
        $description = $_POST["mota"];
        $content = $_POST["noidung"];
        $hot = isset($_POST["hot"]) ? 1 : 0;
        $discount = $_POST["discount"];
        $price = $_POST["price"];
        $db = Connection::getInstance();
        $photo = "";
        if ($_FILES["photo"]["name"] != "") {
            $photo = time() . "_" . $_FILES["photo"]["name"];
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/products/$photo");
        }
        $query = $db->prepare("insert into products set name=:var_name,category_id=:var_category_id,description=:var_description,content=:var_content,hot=:var_hot,discount=:var_discount,price=:var_price,photo=:var_photo");
        $query->execute(["var_name" => $name, "var_category_id" => $category_id, "var_description" => $description, "var_content" => $content, "var_hot" => $hot, "var_discount" => $discount, "var_price" => $price, "var_photo" => $photo]);
    }
    public function modelDelete()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $oldPhoto = $db->query("select photo from products where id=$id");
        if ($oldPhoto->rowCount() > 0) {
            $record = $oldPhoto->fetch();
            if ($record->photo != "" && file_exists("../assets/upload/products/" . $record->photo)) unlink("../assets/upload/products" . $record->photo);
        }
        $query = $db->prepare("delete from products where id=:var_id");
        $query->execute(["var_id" => $id]);
    }
}