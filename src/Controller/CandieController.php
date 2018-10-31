<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 30/10/18
 * Time: 11:04
 */

namespace Controller;

use GuzzleHttp\Client;
use Model\CandieManager;

class CandieController extends AbstractController
{
    
    public function maps()
    {
        $mapsManager= new CandieManager($this->getPdo());
        $mapAdresses = $mapsManager->selectAll();
        $adressesCoordinates=[];
        foreach ($mapAdresses as $key => $value) {
            $cool=str_replace(' ','+',$value['adress']);
            $query="https://api-adresse.data.gouv.fr/search/?q=".$cool;
            $client = new Client();
            $res = $client->request('GET', $query);
            $res=json_decode($res->getBody(), TRUE);
            $coordinates=$res['features'][0]['geometry']['coordinates'];
            $lat=$res['features'][0]['geometry']['coordinates'][1];
            $lon=$res['features'][0]['geometry']['coordinates'][0];
            $adressesCoordinates[]=$coordinates;
        }
        
        return $this->twig->render('maps.html.twig', ['adresses' => $adressesCoordinates]);
    }
}
