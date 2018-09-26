<?php
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Query;
use Phalcon\mvc\config;
use Phalcon\Mvc\Model\Message;
use Phalcon\Mvc\Model\ResultsetInterface;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->setTemplateBefore('dtt');
        $articles = Articles::find([
            'order' => 'id desc',
            'limit' => 5,
        ]);
        $this->view->setVar("articles", $articles);
    }

}
