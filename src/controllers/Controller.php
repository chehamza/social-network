<?php
abstract class Controller{

    public function redirect($path){
        header("location:$path");
        exit();
    }
    abstract public function index();
    //On oblige tous les controller à implémenter la fonction index(), vu qu'elle est demandée dans le Router
    
}
