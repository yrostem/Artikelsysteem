<?php
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Query;
use Phalcon\mvc\config;
use Phalcon\Mvc\Model\Message;
use Phalcon\Mvc\Model\ResultsetInterface;
class AdminController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->setTemplateBefore('dtt');

        if(empty($this->session->has('user_id'))) {
            header("location: /dtt/users/");
            }
        $articles = Articles::find();
        $this->view->setVar("articles", $articles);
        }

}
