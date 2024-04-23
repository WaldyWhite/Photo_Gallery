<?php

namespace App\controllers;
use App\core\Controller;

class Home extends Controller
{
    public function index(){
        $this->view->rendering("home.phtml", "template.phtml");
    }
    public function home(){
        $this->view->rendering("home.phtml", "template.phtml");
    }
    public function about(){
        $this->view->rendering("about.phtml", "template.phtml");
    }
    public function contacts(){
        $this->view->rendering("contacts.phtml", "template.phtml");
    }
    public function error() {
        $this->view->rendering("error.phtml", "template.phtml");
    }

}