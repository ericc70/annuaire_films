<?php



class Genres extends Controller{

    

    public function index(){
        $this->loadModel("Genre");
        $genres=$this->Genre->getAll();
            // $this->render('index', ['films' => $films]);
            $this->render('index', compact('genres'));

    }


}