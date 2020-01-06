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


    public function getByAnnee($an){
        $this->loadModel("Film");
        $films=$this->Film->getByAnnee($an);
        $this->render('getbyannee', compact('films'));
    }

    public function getByGenre($id)
    {   $this->loadModel("Film");
        $films=$this->Film->getByGenre($id);
        $this->render('getbygenre', compact('films'));


    }

    public function getByRealisateur($item){
        $this->loadModel("Film");
        $films=$this->Film->getByRealisateur($item);
        $this->render('getbyrealisateur', compact('films'));


    }
    
    public function getAnnees(){
        $this->loadModel("Film");
        $films=$this->Film->getAnnees();
        $this->render('getAnnees', compact('films'));

    }
    


}