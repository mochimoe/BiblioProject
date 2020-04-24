<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Asset\Css;

class PostsController extends ControllerBase
{
    public function indexAction()
    {

    }

    public function createAction()
    
    {
        $this->tag->setTitle('Buat Post');
        // $db = $this->getDI()->get('db'); //membuat objek yang menghubungkan controller dengan db
        // $db = $query;

        // $result = $db->execute($sql); //ini untuk menjalankan query
        

    }

}

