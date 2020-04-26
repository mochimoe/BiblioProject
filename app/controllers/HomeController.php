<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Asset\Css;

class HomeController extends ControllerBase
{

    public function indexAction()
    {
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);
        return $this->view;
        

    }
    public function logoutAction(){
        $this->session->destroy();

        return $this->dispatcher->forward(
            [
                'controller' => 'index',
                'action'     => 'index',
            ]
            );
    }

}

