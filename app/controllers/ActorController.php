<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;

class ActorController extends Controller{
    public function index(...$params){
        echo "hola desde index de ActorController";
    }
    public function new(...$params){
        if(isset($_POST["first_name"])){
            var_dump($_POST);
            exit();
        }else{
            $this->view("new_actor"); 
        }
       
    }

}
?>