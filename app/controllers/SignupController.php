<?php

declare(strict_types=1);
use Phalcon\Assets\Asset\Css;
use Phalcon\Assets\Asset\Js;


class SignupController extends ControllerBase
{
    public function indexAction()
    {
        $this->tag->setTitle('Daftar Akun');
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);
        
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
        return $this->dispatcher->forward(
            [
                'controller' => 'session',
                'action'     => 'index',
            ]
        );
        $this->flash->success(
            'Akun berhasil dibuat, silahkan login'
        );

    }

}

