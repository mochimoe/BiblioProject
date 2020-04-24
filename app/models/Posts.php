<?php

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;
    public $nama;
    public $email;
    public $password;

    public function initialize(){
        $this-setReadConnectionService('db');
        $this->setWriteConnestionSerive('db');
        $this->setSchema('dbo');
        $this->setSource('posts');
    }

    public function onConstruct(){
        
    }
}