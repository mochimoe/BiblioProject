<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Asset\Css;

class SessionController extends ControllerBase
{

    public function indexAction()
    {
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);

        $this->tag->setTitle('Masuk');
        return $this->view;
        

    }
    private function _registerSession($user)
    {
        $this->session->set(
            'auth',
            [
                'id'    => $user['id'],
                'email' => $user['email'],
            ]
        );
    }

    public function startAction()
    {
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);
        
        $this->tag->setTitle('Beranda');
        
        if (true === $this->request->isPost()) {
          
            $email    = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $db = $this->getDI()->get('db'); 
            $sql = "SELECT * FROM dbo.Users  WHERE email = '".$email."'" . " AND " . "password = '".$password."'";

            $result = $db->query($sql);
            
            $user=$result->fetchAll();
            
            if (count($user)>0) {
                $user = $user[0];
                $this->_registerSession($user);

                $this->flash->success(
                    'Welcome ' . $user['nama']
                );

                return $this->dispatcher->forward(
                    [
                        'controller' => 'posts',
                        'action'     => 'show',
                    ]
                );
            }

            $this->flash->error(
                'Wrong email/password'
            );
        }

        return $this->dispatcher->forward(
            [
                'controller' => 'session',
                'action'     => 'index',
            ]
            );

            $this->session->set('email', $email);
        
    }

}    