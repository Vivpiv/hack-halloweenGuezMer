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
  
    private $have_candle;

    private $adress;

    private $ean;

    private $name_product;

    private $url_product;
  
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

    /**
     * @return mixed
     */
    public function getNameProduct()
    {
        return $this->name_product;
    }

    /**
     * @param mixed $name_product
     */
    public function setNameProduct($name_product): void
    {
        $this->name_product = $name_product;
    }

    /**
     * @return mixed
     */
    public function getUrlProduct()
    {
        return $this->url_product;
    }

    /**
     * @param mixed $url_product
     */
    public function setUrlProduct($url_product): void
    {
        $this->url_product = $url_product;
    }

}
