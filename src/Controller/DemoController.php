<?php

namespace Controller;

use Glue\Controller\Controller;

class DemoController extends Controller
{

    public function index()
    {
        return $this->render('index.html.twig');
    }

    public function hello($name)
    {
        // compact('name') is the equivalent of array('name' => $name)'
        return $this->render('hello.html.twig', compact('name'));
    }

}

