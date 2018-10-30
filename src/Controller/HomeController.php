<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 30/10/18
 * Time: 10:30
 */

namespace Controller;

class HomeController extends \Controller\AbstractController
{
    public function index()
    {
        return $this->twig->render('layout.html.twig');
    }
}