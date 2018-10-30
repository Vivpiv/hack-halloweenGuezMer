<?php
/**
 * Created by PhpStorm.
 * User: wilder20
 * Date: 30/10/18
 * Time: 23:20
 */

namespace Model;


class MapsManager extends AbstractManager
{
    const TABLE = 'candie';
    
    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
}