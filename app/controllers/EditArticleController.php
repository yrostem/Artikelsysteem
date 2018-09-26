<?php
/**
 * Created by PhpStorm.
 * User: Yad
 * Date: 4-6-2018
 * Time: 11:33
 */

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Query;
use Phalcon\mvc\config;
use Phalcon\Mvc\Model\Message;
use Phalcon\Mvc\Model\ResultsetInterface;
class EditArticleController extends ControllerBase
{
    public function indexAction()
    {

        $this->view->setTemplateBefore('dtt');
        $id = $this->dispatcher->getParam('id');
        $articles = Articles::findFirst($id);

        if (empty($articles->id)) {
            header("location: /dtt");
        }

        $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        if (!strpos($url, $articles->id)) {
            header("location: /dtt");
        }


        $this->view->setVar("articles", $articles);
        }
            public function saveAction(){
        $articles = new Articles();
                $id = $this->dispatcher->getParam('id');

                $articles->id = $id;
                $articles->article_title = $this->request->getPost('article_title', 'string');
                $articles->article_summary             = $this->request->getPost('article_summary', 'string');
                $articles->article_text            = $this->request->getPost('article_text', 'string');
                $articles->creation_date = $this->request->getPost('creation_date', 'string' );
                $success = $articles->save();
                if ($success){
                    echo "artikel bewerkt, bekijk hem hier: <a href='/dtt/articles/$articles->id'>$articles->article_title</a>";
                }else{
                    $messages = $articles->getMessages();

                    foreach ($messages as $message) {
                        echo $this->flash->warning($message->getMessage());
                    }
                }
            }
}
