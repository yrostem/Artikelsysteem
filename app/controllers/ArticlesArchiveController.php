<?php
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Query;
use Phalcon\mvc\config;
use Phalcon\Mvc\Model\Message;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;
use Phalcon\Mvc\Model\ResultsetInterface;

class ArticlesArchiveController extends ControllerBase
{

    public function indexAction()
    {
        $articles = Articles::find('id');
        $this->view->setTemplateBefore('dtt');
        $this->view->setVar("articles", $articles);
    }

}
