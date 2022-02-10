<?php
trait NewsModel
{
    public function modelRead($recordPerPage)
    {
        $page = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"] - 1) : 0;
        $from = $page * $recordPerPage;
        $db = Connection::getInstance();
        $query = $db->query("select * from news order by id desc limit $from,$recordPerPage");
        return $query->fetchAll();
    }
    public function modelTotalRecord()
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from news");
        return $query->rowCount();
    }
    public function modelGetRecord()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $query = $db->prepare("select * from news where id=:var_id");
        $query->execute(["var_id" => $id]);
        return $query->fetch();
    }
    public function modelUpdate()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $name = $_POST["name"];
        $description = $_POST["mota"];
        $content = $_POST["noidung"];
        $hot = isset($_POST["hot"]) ? 1 : 0;
        $db = Connection::getInstance();
        $query = $db->prepare("update news set name =:var_name, description=:var_description,content=:var_content,hot=:var_hot where id=:var_id");
        $query->execute(["var_id" => $id, "var_name" => $name, "var_description" => $description, "var_content" => $content, "var_hot" => $hot]);
        $photo = "";
        if ($_FILES["photo"]["name"] != "") {
            $oldPhoto = $db->query("select photo from news where id =$id");
            if ($oldPhoto->rowCount() > 0) {
                $record = $oldPhoto->fetch();
                if ($record->photo != "" && file_exists("../asssets/upload/news/" . $record->photo)) unlink("../assets/upload/news/" . $record->photo);
            }
        }
        $photo = time() . "_" . $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/news/$photo");
        $query = $db->prepare("update news set photo=:var_photo where id=$id");
        $query->execute(["var_photo" => $photo]);
    }
    public function modelCreate()
    {
        $name = $_POST["name"];
        $description = $_POST["mota"];
        $content = $_POST["noidung"];
        $hot = isset($_POST["hot"]) ? 1 : 0;
        $db = Connection::getInstance();
        $photo = "";
        if ($_FILES["photo"]["name"] != "") {
            $photo = time() . "_" . $_FILES["photo"]["name"];
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/news/$photo");
        }
        $query = $db->prepare("insert into news set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,photo=:var_photo");
        $query->execute(["var_name" => $name, "var_description" => $description, "var_content" => $content, "var_hot" => $hot, "var_photo" => $photo]);
    }
    public function modelDelete()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $oldPhoto = $db->query("select photo from news where id=$id");
        if ($oldPhoto->rowCount() > 0) {
            $record = $oldPhoto->fetch();
            if ($record->photo != "" && file_exists("../assets/upload/news/" . $record->photo)) unlink("../assets/upload/news" . $record->photo);
        }
        $query = $db->prepare("delete from news where id=:var_id");
        $query->execute(["var_id" => $id]);
    }
}