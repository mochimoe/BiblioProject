<?php
declare(strict_types=1);


class SignupController extends ControllerBase
{
    public function indexAction()
    {
        
    }
    public function registerAction(){
        //var_dump($_POST);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "insert into dbo.Users values ('".$nama."', '".$email."' , '".$password."')";
        $db = $this->getDI()->get('db');

        $result = $db->execute($sql);

        //echo ($sql);

    }

}

