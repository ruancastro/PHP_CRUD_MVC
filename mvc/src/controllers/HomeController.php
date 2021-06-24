<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

  

    public function index(){
        // se eu quiser pegar apenas dados específicos coloco um array dentro de select, ex select(['name','email'])
        $usuarios = Usuario::select()->execute();
        $this->render('home',[
        'usuarios'=>$usuarios]);
    
        }
}