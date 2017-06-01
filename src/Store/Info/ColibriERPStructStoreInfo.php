<?php
/**
 * File for class ColibriERPStructStoreInfo
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
 * This class stands for ColibriERPStructStoreInfo
 *  originally named storeInfo
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
class ColibriERPStructStoreInfo extends ColibriERPWsdlClass
{
    /**
     * The SNum
     *
     * @var integer
     */
    public $SNum;
    /**
     * The SNumber
     *
     * @var string
     */
    public $SNumber;
    /**
     * The SName
     *
     * @var string
     */
    public $SName;
    /**
     * The SDescription
     *
     * @var string
     */
    public $SDescription;
    /**
     * The SAddr
     *
     * @var string
     */
    public $SAddr;
    /**
     * The SCity
     *
     * @var string
     */
    public $SCity;
    /**
     * The SZip
     *
     * @var string
     */
    public $SZip;
    /**
     * The SState
     *
     * @var string
     */
    public $SState;
    /**
     * The idCountry
     *
     * @var integer
     */
    public $idCountry;
    /**
     * The GLatitude
     *
     * @var float
     */
    public $GLatitude;
    /**
     * The GLongitude
     *
     * @var float
     */
    public $GLongitude;
    /**
     * Constructor method for storeInfo
     *
     * @see parent::__construct()
     *
     * @param integer $_sNum         expect integer
     * @param string  $_sNumber      expect string
     * @param string  $_sName        expect string
     * @param string  $_sDescription expect string
     * @param string  $_sAddr        expect string
     * @param string  $_sCity        expect string
     * @param string  $_sZip         expect string
     * @param string  $_sState       expect string
     * @param integer $_idCountry    expect integer
     * @param float   $_gLatitude    expect float
     * @param float   $_gLongitude   expect float
     *
     * @return ColibriERPStructStoreInfo
     */
    public function __construct($_sNum = null,$_sNumber = null,$_sName = null,$_sDescription = null,$_sAddr = null,$_sCity = null,$_sZip = null,$_sState = null,$_idCountry = null,$_gLatitude = null,$_gLongitude = null)
    {
        parent::__construct(array('SNum'=>$_sNum,'SNumber'=>$_sNumber,'SName'=>$_sName,'SDescription'=>$_sDescription,'SAddr'=>$_sAddr,'SCity'=>$_sCity,'SZip'=>$_sZip,'SState'=>$_sState,'idCountry'=>$_idCountry,'GLatitude'=>$_gLatitude,'GLongitude'=>$_gLongitude), false);
    }
    /**
     * Get SNum value
     *
     * @return integer|null
     */
    public function getSNum()
    {
        return $this->SNum;
    }
    /**
     * Set SNum value
     *
     * @param integer $_sNum the SNum
     *
     * @return integer
     */
    public function setSNum($_sNum)
    {
        return ($this->SNum = $_sNum);
    }
    /**
     * Get SNumber value
     *
     * @return string|null
     */
    public function getSNumber()
    {
        return $this->SNumber;
    }
    /**
     * Set SNumber value
     *
     * @param string $_sNumber the SNumber
     *
     * @return string
     */
    public function setSNumber($_sNumber)
    {
        return ($this->SNumber = $_sNumber);
    }
    /**
     * Get SName value
     *
     * @return string|null
     */
    public function getSName()
    {
        return $this->SName;
    }
    /**
     * Set SName value
     *
     * @param string $_sName the SName
     *
     * @return string
     */
    public function setSName($_sName)
    {
        return ($this->SName = $_sName);
    }
    /**
     * Get SDescription value
     *
     * @return string|null
     */
    public function getSDescription()
    {
        return $this->SDescription;
    }
    /**
     * Set SDescription value
     *
     * @param string $_sDescription the SDescription
     *
     * @return string
     */
    public function setSDescription($_sDescription)
    {
        return ($this->SDescription = $_sDescription);
    }
    /**
     * Get SAddr value
     *
     * @return string|null
     */
    public function getSAddr()
    {
        return $this->SAddr;
    }
    /**
     * Set SAddr value
     *
     * @param string $_sAddr the SAddr
     *
     * @return string
     */
    public function setSAddr($_sAddr)
    {
        return ($this->SAddr = $_sAddr);
    }
    /**
     * Get SCity value
     *
     * @return string|null
     */
    public function getSCity()
    {
        return $this->SCity;
    }
    /**
     * Set SCity value
     *
     * @param string $_sCity the SCity
     *
     * @return string
     */
    public function setSCity($_sCity)
    {
        return ($this->SCity = $_sCity);
    }
    /**
     * Get SZip value
     *
     * @return string|null
     */
    public function getSZip()
    {
        return $this->SZip;
    }
    /**
     * Set SZip value
     *
     * @param string $_sZip the SZip
     *
     * @return string
     */
    public function setSZip($_sZip)
    {
        return ($this->SZip = $_sZip);
    }
    /**
     * Get SState value
     *
     * @return string|null
     */
    public function getSState()
    {
        return $this->SState;
    }
    /**
     * Set SState value
     *
     * @param string $_sState the SState
     *
     * @return string
     */
    public function setSState($_sState)
    {
        return ($this->SState = $_sState);
    }
    /**
     * Get idCountry value
     *
     * @return integer|null
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }
    /**
     * Set idCountry value
     *
     * @param integer $_idCountry the idCountry
     *
     * @return integer
     */
    public function setIdCountry($_idCountry)
    {
        return ($this->idCountry = $_idCountry);
    }
    /**
     * Get GLatitude value
     *
     * @return float|null
     */
    public function getGLatitude()
    {
        return $this->GLatitude;
    }
    /**
     * Set GLatitude value
     *
     * @param float $_gLatitude the GLatitude
     *
     * @return float
     */
    public function setGLatitude($_gLatitude)
    {
        return ($this->GLatitude = $_gLatitude);
    }
    /**
     * Get GLongitude value
     *
     * @return float|null
     */
    public function getGLongitude()
    {
        return $this->GLongitude;
    }
    /**
     * Set GLongitude value
     *
     * @param float $_gLongitude the GLongitude
     *
     * @return float
     */
    public function setGLongitude($_gLongitude)
    {
        return ($this->GLongitude = $_gLongitude);
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
     * @return ColibriERPStructStoreInfo
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
