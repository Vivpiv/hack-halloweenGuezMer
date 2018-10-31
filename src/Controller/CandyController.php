<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 30/10/18
 * Time: 10:30
 */

namespace Controller;

use GuzzleHttp\Client;
use Model\Candie;
use Model\CandyManager;

class CandyController extends \Controller\AbstractController
{
    public function index()
    {
        $client = new Client();
        $a=1;
        if (isset($_GET['button'])) {
            if ($_GET['button'] == 'previous') {
                if (($a-1) <= 0) {
                    $a = 1;
                } else {
                    $a--;
                }
            } elseif ($_GET['button'] == 'next') {
                $a++;
            } else {
                $a = $_GET['button'];
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $candieManager = new CandyManager($this->getPdo());
            $candie = new Candie;
            $candie->setAdress($_POST['adress']);
            $candie->setEan($_POST['codebarre']);
            $candieManager->insert($candie);
            header('Location:/candy');
            exit();
        }
        $res = $client->request('GET', "https://ssl-api.openfoodfacts.org/country/france/category/candies/$a.json");
        $coucou = json_decode($res->getBody(), TRUE);
        return $this->twig->render('galery.html.twig', ['res' => $coucou['products']]);

    }
}