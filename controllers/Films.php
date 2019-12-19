<?php

class Films extends Controller{

    

    public function index(){
        $this->loadModel("Film");
        $films=$this->Film->getAll();
            // $this->render('index', ['films' => $films]);
            $this->render('index', compact('films'));

    }


    public function getFilm($id){
       
        $this->loadModel("Film");
        $films=$this->Film->getFilm($id);
         $this->render('getfilm', compact('films'));
    }



}