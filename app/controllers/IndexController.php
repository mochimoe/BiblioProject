<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Asset\Css;
use Phalcon\Assets\Asset\Js;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->tag->setTitle('Beranda');


        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);
       
        if ($this->session->has('auth')) {
            // Retrieve its value
            return $this->dispatcher->forward(
                [
                    'controller' => 'posts',
                    'action'     => 'show',
                ]
            );
        }

    }

}

