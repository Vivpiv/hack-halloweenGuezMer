<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 30/10/18
 * Time: 10:30
 */

namespace Controller;

use GuzzleHttp\Client;

class CandyController extends \Controller\AbstractController
{
    public function index()
    {
        $client = new Client();
        $a = 1;
        if (isset($_GET['button'])) {
            $a = $_GET['button'];
        }
        $res = $client->request('GET', "https://ssl-api.openfoodfacts.org/country/france/category/candies/$a.json");
        $coucou = json_decode($res->getBody(), TRUE);
        return $this->twig->render('galery.html.twig', ['res' => $coucou['products']]);

    }
}