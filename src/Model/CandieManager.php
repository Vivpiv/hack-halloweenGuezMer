<?php
/**
 * Created by PhpStorm.
 * User: wilder20
 * Date: 30/10/18
 * Time: 23:20
 */

namespace Model;

use Model\Candie;


class CandieManager extends AbstractManager
{
    const TABLE = 'candie';
    
    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
    
    public function selectAll(): array
    {
        return $this->pdo->query('SELECT adress FROM ' . $this->table, \PDO::FETCH_ASSOC)->fetchAll();
    }

    public function Compteur(): array
    {
        return $this->pdo->query('SELECT COUNT(id) as id FROM ' . $this->table . ' WHERE have_candie=true', \PDO::FETCH_ASSOC)->fetchAll();
    }
}