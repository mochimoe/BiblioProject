<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Asset\Css;
use Phalcon\Mvc\Model\Query;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\NativeArray as PaginatorArray;
use Phalcon\Paginator\Adapter\QueryBuilder as PaginatorQueryBuilder;
use Phalcon\Http\Request;

use MyApp\Models\Posts;
use MyApp\Models\Users;
use MyApp\Models\Komens;

class PostsController extends ControllerBase
{
    public function indexAction()
    {
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);

    }

    public function showAction()
    {
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);

        $this->tag->setTitle('Dashboard');

        $find_post = Posts::find([
            'judul' => $judul,
            'isi' => $isi,
            'id' => $id
        ]);
        $this->view->posts = $find_post;


    }
    public function saveAction()
    {

        $judul = $this->request->get('judul');
        $isi = $this->request->get('isi');

        $auth = $this->session->get('auth');
        $userid = $auth['id'];
            
        $posts = new Posts();

        $posts->judul = $judul;
        $posts->isi = $isi;
        $posts->id_user = $userid;

        if($this->request->isPost())
        {
            $posts->save();
        }
        return $this->dispatcher->forward(
            [
                'controller' => 'posts',
                'action'     => 'show',
            ]
        );
    }
    public function editAction($id)
    {
        $this->tag->setTitle('Edit Post');
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);
        //fungsi editnya

        $find_post = Posts::findFirst($id);

        // $this->view->disable();

        $this->view->posts = $find_post;

        //var_dump($find_post);

    }
    public function updateAction($id)
    {
        $this->tag->setTitle('Edit Post');
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);

        //function

        $judul = $this->request->get('judul');
        $isi = $this->request->get('isi');
            
        $posts = Posts::findFirst($id);

        $posts->judul = $judul;
        $posts->isi = $isi;

        if($this->request->isPost())
        {
            $posts->save();
        }

        return $this->dispatcher->forward(
            [
                'controller' => 'posts',
                'action'     => 'show',
            ]
        );

    }
    public function deleteAction($id)
    {
        $post = Posts::findFirst($id);
        if($post->delete())
        {
            return $this->dispatcher->forward(
                [
                    'controller' => 'posts',
                    'action'     => 'show',
                ]
            );
        }else
        {
            echo "kapok ga iso";
        }


    }
    public function detailAction($id)
    {
        $this->tag->setTitle('Detail');
        $css1 = new Css('css/style.css');
        $this->assets->addAsset($css1);
        
        //function
        $post = Posts::findFirstById($id);
       // $komen = Komens::find();
        $user = Users::find();

        $auth = $this->session->get('auth');
        $this->view->auth = $auth;


        $this->view->posts = $post;
        // $this->view->disable();
        $this->view->komenss = $post->komen;
       // var_dump($post);
        $this->view->users = $user;

        // foreach ($post->komen as $komenss) {
        //     echo $komenss->isi_komen;
        // }

       
    }

}

