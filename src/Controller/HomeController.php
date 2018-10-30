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
        $client = new Client();
        $res = $client->request('GET', "https://ssl-api.openfoodfacts.org/country/france/category/candies.json");
        $jean = json_decode($res->getBody(), true);
        return $this->twig->render('candy.html.twig', ['res' => $jean['products']]);
    }
}