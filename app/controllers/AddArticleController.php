<?php
/**
 * Created by PhpStorm.
 * User: Yad
 * Date: 4-6-2018
 * Time: 11:36
 */

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Query;
use Phalcon\mvc\config;
use Phalcon\Mvc\Model\Message;
use Phalcon\Mvc\Model\ResultsetInterface;

class AddArticleController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->setTemplateBefore('dtt');

    }

    public function createAction(){
        if(!$this->session->has('user_id')) {
            return $this->response->redirect("users");
        }
        $article = new Articles();
        $success = $article->save(
            $this->request->getPost(),
            [
                "article_title",
                "article_summary",
                "article_text",
                "creation_date",
            ]
        );
        if ($this->request->isPost()) {
            if ($success) {
                $this->flash->success("Article is made!");

            } else {
                $messages = $article->getMessages();

                foreach ($messages as $message) {
                    echo $this->flash->warning($message->getMessage());
                }
            }
        }

        $this->view->disable();

    }



}
