<?php
/**
 * File for class ColibriERPStructAccdocs
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
 * This class stands for ColibriERPStructAccdocs
 *  originally named accdocs
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
class ColibriERPStructAccdocs extends ColibriERPWsdlClass
{
    /**
     * The idaccdocs
     *
     * @var integer
     */
    public $idaccdocs;
    /**
     * The DA
     *
     * @var string
     */
    public $DA;
    /**
     * The CA
     *
     * @var string
     */
    public $CA;
    /**
     * The Suma
     *
     * @var double
     */
    public $Suma;
    /**
     * The adsDescr
     *
     * @var string
     */
    public $adsDescr;
    /**
     * Constructor method for accdocs
     *
     * @see parent::__construct()
     *
     * @param integer $_idaccdocs expect integer
     * @param string  $_dA        expect string
     * @param string  $_cA        expect string
     * @param double  $_suma      expect double
     * @param string  $_adsDescr  expect string
     *
     * @return ColibriERPStructAccdocs
     */
    public function __construct($_idaccdocs = null,$_dA = null,$_cA = null,$_suma = null,$_adsDescr = null)
    {
        parent::__construct(array('idaccdocs'=>$_idaccdocs,'DA'=>$_dA,'CA'=>$_cA,'Suma'=>$_suma,'adsDescr'=>$_adsDescr), false);
    }
    /**
     * Get idaccdocs value
     *
     * @return integer|null
     */
    public function getIdaccdocs()
    {
        return $this->idaccdocs;
    }
    /**
     * Set idaccdocs value
     *
     * @param integer $_idaccdocs the idaccdocs
     *
     * @return integer
     */
    public function setIdaccdocs($_idaccdocs)
    {
        return ($this->idaccdocs = $_idaccdocs);
    }
    /**
     * Get DA value
     *
     * @return string|null
     */
    public function getDA()
    {
        return $this->DA;
    }
    /**
     * Set DA value
     *
     * @param string $_dA the DA
     *
     * @return string
     */
    public function setDA($_dA)
    {
        return ($this->DA = $_dA);
    }
    /**
     * Get CA value
     *
     * @return string|null
     */
    public function getCA()
    {
        return $this->CA;
    }
    /**
     * Set CA value
     *
     * @param string $_cA the CA
     *
     * @return string
     */
    public function setCA($_cA)
    {
        return ($this->CA = $_cA);
    }
    /**
     * Get Suma value
     *
     * @return double|null
     */
    public function getSuma()
    {
        return $this->Suma;
    }
    /**
     * Set Suma value
     *
     * @param double $_suma the Suma
     *
     * @return double
     */
    public function setSuma($_suma)
    {
        return ($this->Suma = $_suma);
    }
    /**
     * Get adsDescr value
     *
     * @return string|null
     */
    public function getAdsDescr()
    {
        return $this->adsDescr;
    }
    /**
     * Set adsDescr value
     *
     * @param string $_adsDescr the adsDescr
     *
     * @return string
     */
    public function setAdsDescr($_adsDescr)
    {
        return ($this->adsDescr = $_adsDescr);
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
     * @return ColibriERPStructAccdocs
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
