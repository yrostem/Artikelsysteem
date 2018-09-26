<?php

class ArticlesController extends ControllerBase
{

    public function indexAction()
    {
       $this->view->setTemplateBefore('dtt');

        $id = $this->dispatcher->getParam('id');

        $articles = Articles::findFirst($id);

        $this->view->setVar("articles", $articles);


        if (empty($articles->id)){
            header("location: /dtt");
        }

        $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        if (!strpos($url, $articles->id)){
            header("location: /dtt");
        }

    }

}

