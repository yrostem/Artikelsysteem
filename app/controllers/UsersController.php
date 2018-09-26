<?php
/**
 * Created by PhpStorm.
 * User: Yad
 * Date: 4-6-2018
 * Time: 11:27
 */

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\ResultsetInterface;


class UsersController extends Controller

{

    public function indexAction(){
        $this->view->setTemplateBefore('dtt');
        /*
             * Laadt de standaard layout genaamd "dtt".
             */
    }

    public function loginAction() {
        if($this->session->has('user_id')) {
            $this->response->redirect('admin');
            /*
             * Als de sessie "user_id" al bekendt is (dus ingelogd), en de user wilt naar de login pagina wordt de persoon automatisch doorverwezen naar de admin dashboard.
             */

        }
        if ($this->request->isPost()) {
            $user = Users::findFirst(array(
                'username = :username: and password = :password:', 'bind' => array(
                    'username' => $this->request->getPost("username"),
                    'password' => $this->request->getPost("password")

                    /*
                     * Als er een POST request actief is, zoekt hij in de database username en password en vergelijkt dat met de user input.
                     */
                )
            ));
            if ($user === false) {
               $this->flash->error("Incorrect credentials");
                return $this->dispatcher->forward(array(
                    'controller' => 'Users', 'action' => 'index'

                    /*
                     * Als de ingevoerde inloggegevens niet kloppen, krijg je een error en wordt je doorgestuurd naar de controller User met action index.
                     */
                ));
            }
            $this->session->set('user_id', $user->id);
            $this->session->set('username', $user->username);
            $this->flash->success("You've been successfully logged out, redirection to the login page in 3 seconds...");
            header( "refresh:3;url=/dtt/admin" );
            /*
             * Mocht alles error vrij zijn, wordt er een sessie aangemaakt met user id en username. Vervolgens wordt je doorgestuurd naar de admin dashboard.
             */
        }
    }
    public function logoutAction() {
        $this->flash->success("You've been successfully logged out, redirection to the login page in 3 seconds...");
        header( "refresh:3;url=/dtt/users" );
        $this->session->destroy();
        /*
         * Als er uitgelogd wordt, worden alle sessies verwijderd. Dus uitgelogd.
         */
    }
}
$users = new UsersController();