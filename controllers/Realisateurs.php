<?php



class Realisateurs extends Controller{

    

    public function index(){
        $this->loadModel("Realisateur");
        $realisateurs=$this->Realisateur->getAll();
            // $this->render('index', ['films' => $films]);
            $this->render('index', compact('realisateurs'));

    }


}