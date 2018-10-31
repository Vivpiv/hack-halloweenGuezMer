<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 10:57
 * PHP version 7
 */

namespace Model;

/**
 * Class Item
 *
 */
class Candie
{
    private $id;

    private $adress;

    private $ean;

    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param mixed $ean
     */
    public function setEan($ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Candie
     */
    public function setId($id): Candie
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     *
     * @return Candie
     */
    public function setAdress($adress):Candie
    {
        $this->adress = $adress;

        return $this;
    }
}
