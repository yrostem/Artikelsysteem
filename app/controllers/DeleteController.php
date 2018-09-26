<?php

class DeleteController extends ControllerBase
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
        if ($articles !== false) {
            if ($articles->delete() === false) {
                echo "Sorry, there was an problem with deleting... \n";

                $messages = $articles->getMessages();

                foreach ($messages as $message) {
                    echo $message, "\n";
                }
            } else {
                echo "Article deleted sucessfully!";
            }
        }


    }

}

