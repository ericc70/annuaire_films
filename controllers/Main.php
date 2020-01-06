<?php



class Main extends Controller{

    

    public function index(){
     
            $this->render('index');

    }

    /* erreur 404 */
    public function notfound(){

        $this->render('notfound');
    }

    /* 403 */

}