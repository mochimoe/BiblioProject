<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Asset\Css;

use MyApp\Models\Komens;

class KomenController extends ControllerBase
{

    public function createAction($postid)
    {
        
        $isi = $this->request->get('isi_komen');

        $komen = new Komens();

        $auth = $this->session->get('auth');
        $userid = $auth['id'];

        $komen->id_post = $postid;
        $komen->id_user= $userid;
        $komen->isi_komen = $isi;

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(
                [
                    'controller' => 'posts',
                    'action'     => 'show',
                ]
            );
        } else
        {
            $komen->save();

            return $this->dispatcher->forward(
                [
                    'controller' => 'posts',
                    'action'     => 'detail',
                    'params'     => [$postid],
                ]
            );
        }
        
        

    }

}

