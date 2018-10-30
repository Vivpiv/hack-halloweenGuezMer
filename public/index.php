<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: wilder7
 * Date: 30/10/18
 * Time: 10:26
 */

require_once __DIR__ . '/../vendor/autoload.php';
=======
 * User: root
 * Date: 11/10/17
 * Time: 14:01
 */


if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // retourne la requête telle quelle.
}

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/db.php';
require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/dispatcher.php';
>>>>>>> 41698096811e03ad84fd334fd4441089c3084448
