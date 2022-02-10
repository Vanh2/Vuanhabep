<?php
trait LoginModel
{
    public function modelLogin()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
        $db = Connection::getInstance();
        $query = $db->prepare("select email from users where email=:var_email and password=:var_password");
        $query->execute(["var_email" => $email, "var_password" => $password]);
        if ($query->rowCount() > 0) {
            $_SESSION['email'] = $email;
            header("location:index.php");
        }
    }
}