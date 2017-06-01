<?php
/**
 * File for class ColibriERPStructDocItem
 *
 * PHP Version 5
 *
 * @category   ColibriERP
 * @package    ColibriERP
 * @subpackage Structs
 * @author     Georgi Nachev <jooorooo@gmail.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @version    GIT: 1.0.0 In development.
 * @link       http://simexis.com
 * @date       2017-06-01
 */
/**
 * This class stands for ColibriERPStructDocItem
 *  originally named DocItem
 *
 * PHP Version 5
 *
 * @category   ColibriERP
 * @package    ColibriERP
 * @subpackage Structs
 * @author     Georgi Nachev <jooorooo@gmail.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @version    GIT: 1.0.0 In development.
 * @link       http://simexis.com
 * @date       2017-06-01
 */
class ColibriERPStructDocItem extends ColibriERPWsdlClass
{
    /**
     * The idMat
     *
     * @var string
     */
    public $idMat;
    /**
     * The MNum
     *
     * @var string
     */
    public $MNum;
    /**
     * The Quantity
     *
     * @var double
     */
    public $Quantity;
    /**
     * The Price
     *
     * @var double
     */
    public $Price;
    /**
     * The PriceDDS
     *
     * @var double
     */
    public $PriceDDS;
    /**
     * The Suma
     *
     * @var float
     */
    public $Suma;
    /**
     * The SumaDDS
     *
     * @var float
     */
    public $SumaDDS;
    /**
     * Constructor method for DocItem
     *
     * @see parent::__construct()
     *
     * @param string $_idMat    expect string
     * @param string $_mNum     expect string
     * @param double $_quantity expect double
     * @param double $_price    expect double
     * @param double $_priceDDS expect double
     * @param float  $_suma     expect float
     * @param float  $_sumaDDS  expect float
     *
     * @return ColibriERPStructDocItem
     */
    public function __construct($_idMat = null,$_mNum = null,$_quantity = null,$_price = null,$_priceDDS = null,$_suma = null,$_sumaDDS = null)
    {
        parent::__construct(array('idMat'=>$_idMat,'MNum'=>$_mNum,'Quantity'=>$_quantity,'Price'=>$_price,'PriceDDS'=>$_priceDDS,'Suma'=>$_suma,'SumaDDS'=>$_sumaDDS), false);
    }
    /**
     * Get idMat value
     *
     * @return string|null
     */
    public function getIdMat()
    {
        return $this->idMat;
    }
    /**
     * Set idMat value
     *
     * @param string $_idMat the idMat
     *
     * @return string
     */
    public function setIdMat($_idMat)
    {
        return ($this->idMat = $_idMat);
    }
    /**
     * Get MNum value
     *
     * @return string|null
     */
    public function getMNum()
    {
        return $this->MNum;
    }
    /**
     * Set MNum value
     *
     * @param string $_mNum the MNum
     *
     * @return string
     */
    public function setMNum($_mNum)
    {
        return ($this->MNum = $_mNum);
    }
    /**
     * Get Quantity value
     *
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     *
     * @param double $_quantity the Quantity
     *
     * @return double
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
    }
    /**
     * Get Price value
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     *
     * @param double $_price the Price
     *
     * @return double
     */
    public function setPrice($_price)
    {
        return ($this->Price = $_price);
    }
    /**
     * Get PriceDDS value
     *
     * @return double|null
     */
    public function getPriceDDS()
    {
        return $this->PriceDDS;
    }
    /**
     * Set PriceDDS value
     *
     * @param double $_priceDDS the PriceDDS
     *
     * @return double
     */
    public function setPriceDDS($_priceDDS)
    {
        return ($this->PriceDDS = $_priceDDS);
    }
    /**
     * Get Suma value
     *
     * @return float|null
     */
    public function getSuma()
    {
        return $this->Suma;
    }
    /**
     * Set Suma value
     *
     * @param float $_suma the Suma
     *
     * @return float
     */
    public function setSuma($_suma)
    {
        return ($this->Suma = $_suma);
    }
    /**
     * Get SumaDDS value
     *
     * @return float|null
     */
    public function getSumaDDS()
    {
        return $this->SumaDDS;
    }
    /**
     * Set SumaDDS value
     *
     * @param float $_sumaDDS the SumaDDS
     *
     * @return float
     */
    public function setSumaDDS($_sumaDDS)
    {
        return ($this->SumaDDS = $_sumaDDS);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see   ColibriERPWsdlClass::__set_state()
     * @uses  ColibriERPWsdlClass::__set_state()
     * @param array  $_array     the exported values
     * @param string $_className expect string
     *
     * @return ColibriERPStructDocItem
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array, $_className);
    }
    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
