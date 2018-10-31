<?php
/**
 * Created by PhpStorm.
 * User: wilder20
 * Date: 31/10/18
 * Time: 01:25
 */

namespace Model;
use Model\CandieManager;

class Candie
{
   private $id;
   private $have_candie;
   private $ean;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return mixed
     */
    public function getHaveCandie()
    {
        return $this->have_candie;
    }
    
    /**
     * @param mixed $have_candie
     */
    public function setHaveCandie($have_candie): void
    {
        $this->have_candie = $have_candie;
    }
    
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
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }
    
    /**
     * @param mixed $adress
     */
    public function setAdress($adress): void
    {
        $this->adress = $adress;
    }
   private $adress;
}
=======
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
