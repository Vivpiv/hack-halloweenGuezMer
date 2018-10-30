<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 30/10/18
 * Time: 11:04
 */

namespace Controller;

use twig

class MapsController
{
    public function maps()
    {
        return $this->twig->render('maps.html.twig');
    }
}
