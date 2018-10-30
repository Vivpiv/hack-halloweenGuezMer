<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 30/10/18
 * Time: 12:00
 */

namespace Controller;

use GuzzleHttp\Client;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('homepage.html.twig');
    }
}