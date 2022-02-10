<?php
trait UsersModel
{
    public function modelRead($recordPerPage)
    {
        $page = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"] - 1) : 0;
        $from = $page * $recordPerPage;
        $db = Connection::getInstance();
        $query = $db->query("select * from users order by id desc limit $from, $recordPerPage");
        return $query->fetchAll();
    }
    public function modelTotalRecord()
    {
        $db = Connection::getInstance();
        $query = $db->query("select * from users");
        return $query->rowCount();
    }
    public function modelGetRecord()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $query = $db->prepare("select * from users where id=:var_id");
        $query->execute(["var_id" => $id]);
        return $query->fetch();
    }
    public function modelUpdate()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $name = $_POST["name"];
        $password = $_POST["password"];
        $position = $_POST["position"];
        $db = Connection::getInstance();
        $query = $db->prepare("update users set name =:var_name, position=:var_position where id=:var_id");
        $query->execute(["var_id" => $id, "var_position" => $position, "var_name" => $name]);
        if ($password != "") {
            $password = md5($password);
            $query = $db->prepare("update users set password=:var_password where id=:var_id");
            $query->execute(["var_id" => $id, "var_password" => $password]);
        }
        $photo = "";
        if ($_FILES["photo"]["name"] != "") {
            $oldPhoto = $db->query("select photo from users where id = $id");
            if ($oldPhoto->rowCount() > 0) {
                $record = $oldPhoto->fetch();
                if ($record->photo != "" && file_exists("../assets/upload/img-admin/" . $record->photo)) unlink("../assets/upload/img-admin/" . $record->photo);
            }
        }
        $photo = time() . "_" . $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/img-admin/$photo");
        $query = $db->prepare("update users set photo=:var_photo where id=$id");
        $query->execute(["var_photo" => $photo]);
    }
    public function modelCreate()
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $position = $_POST["position"];
        $password = $_POST["password"];
        $password = md5($password);
        $db = Connection::getInstance();
        $photo = "";
        if ($_FILES["photo"]["name"] != "") {
            $photo = time() . "_" . $_FILES["photo"]["name"];
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/img-admin/$photo");
        }
        $query = $db->prepare("insert into users set name=:var_name, email=:var_email, position=:var_position, password=:var_password,photo=:var_photo");
        $query->execute(["var_name" => $name, "var_email" => $email, "var_position" => $position, "var_password" => $password, "var_photo" => $photo]);
    }
    public function modelDelete()
    {
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        $db = Connection::getInstance();
        $query = $db->prepare("delete from users where id=:var_id");
        $query->execute(["var_id" => $id]);
    }
}