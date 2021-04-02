<?php
namespace app\http\controllers;

class response{
    protected $view; //array,json,pdf..

    public function __construct($view) {
        $this->view=$view; // ejecuta la vista home o la que tengamos
    }
    public function getview() {
        return $this->view;
    }

    public function send() {
        $view=$this->getview();
        //home se guarda en content
        $content=file_get_contents(__DIR__ ."/../../view/$view.php");

        require __DIR__ ."/../../layout.php";
    }
}