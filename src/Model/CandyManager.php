<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 31/10/18
 * Time: 00:12
 */

namespace Model;


class CandyManager extends AbstractManager
{
    const TABLE = 'candie';

    /**
     * AddressManager constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Candie $candie)
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (ean,adress) VALUES (:ean, :adress)");
        $statement->bindValue('ean', $candie->getEan(), \PDO::PARAM_STR);
        $statement->bindValue('adress', $candie->getAdress(), \PDO::PARAM_STR);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}