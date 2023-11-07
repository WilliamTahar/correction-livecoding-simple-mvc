<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('Home/index.html.twig');
    }

    public function blogByName(): string
    {
        // TODO CHECK DATA
        // TODO LOAD BLOG DATA --> SQL
        // TODO PRINT --> TWIG
    }
}
