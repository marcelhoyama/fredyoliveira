<?php
class galeriaController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array();

       
        $this->loadTemplate('galeria', $dados);
    }
    
    
}


