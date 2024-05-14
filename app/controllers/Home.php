<?php

namespace App\controllers;

use App\core\Controller;

class Home extends Controller
{
    public function index()
    {
        $this->view->rendering("home.phtml", "template.phtml");
    }

    public function home()
    {
        $this->view->rendering("home.phtml", "template.phtml");
    }

    public function coments()
    {
        $this->view->rendering("comments.phtml", "template.phtml");
    }

    public function error()
    {
        $this->view->rendering("error.phtml", "template.phtml");
    }
}