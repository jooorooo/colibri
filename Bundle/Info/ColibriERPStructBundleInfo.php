<?php
/**
 * File for class ColibriERPStructBundleInfo
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
 * This class stands for ColibriERPStructBundleInfo
 *  originally named bundleInfo
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
class ColibriERPStructBundleInfo extends ColibriERPWsdlClass
{
    /**
     * The idBundle
     *
     * @var string
     */
    public $idBundle;
    /**
     * The BundleNum
     *
     * @var string
     */
    public $BundleNum;
    /**
     * The BundleName
     *
     * @var string
     */
    public $BundleName;
    /**
     * The BundleNameL
     *
     * @var string
     */
    public $BundleNameL;
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
     * The MName
     *
     * @var string
     */
    public $MName;
    /**
     * The idGroup
     *
     * @var string
     */
    public $idGroup;
    /**
     * The GNum
     *
     * @var string
     */
    public $GNum;
    /**
     * The isActive
     *
     * @var int
     */
    public $isActive;
    /**
     * The barCode
     *
     * @var string
     */
    public $barCode;
    /**
     * The MatPrice
     *
     * @var double
     */
    public $MatPrice;
    /**
     * The Price
     *
     * @var double
     */
    public $Price;
    /**
     * The isActiveFrom
     *
     * @var string
     */
    public $isActiveFrom;
    /**
     * The isActiveTo
     *
     * @var string
     */
    public $isActiveTo;
    /**
     * The BundleAttribute
     *
     * @var array
     */
    public $BundleAttribute;
    /**
     * Constructor method for bundleInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idBundle        expect string
     * @param string $_bundleNum       expect string
     * @param string $_bundleName      expect string
     * @param string $_bundleNameL     expect string
     * @param string $_idMat           expect string
     * @param string $_mNum            expect string
     * @param string $_mName           expect string
     * @param string $_idGroup         expect string
     * @param string $_gNum            expect string
     * @param int    $_isActive        expect int
     * @param string $_barCode         expect string
     * @param double $_matPrice        expect double
     * @param double $_price           expect double
     * @param string $_isActiveFrom    expect string
     * @param string $_isActiveTo      expect string
     * @param array  $_bundleAttribute expect array
     *
     * @return ColibriERPStructBundleInfo
     */
    public function __construct($_idBundle = null,$_bundleNum = null,$_bundleName = null,$_bundleNameL = null,$_idMat = null,$_mNum = null,$_mName = null,$_idGroup = null,$_gNum = null,$_isActive = null,$_barCode = null,$_matPrice = null,$_price = null,$_isActiveFrom = null,$_isActiveTo = null,$_bundleAttribute = null)
    {
        parent::__construct(array('idBundle'=>$_idBundle,'BundleNum'=>$_bundleNum,'BundleName'=>$_bundleName,'BundleNameL'=>$_bundleNameL,'idMat'=>$_idMat,'MNum'=>$_mNum,'MName'=>$_mName,'idGroup'=>$_idGroup,'GNum'=>$_gNum,'isActive'=>$_isActive,'barCode'=>$_barCode,'MatPrice'=>$_matPrice,'Price'=>$_price,'isActiveFrom'=>$_isActiveFrom,'isActiveTo'=>$_isActiveTo,'BundleAttribute'=>$_bundleAttribute), false);
    }
    /**
     * Get idBundle value
     *
     * @return string|null
     */
    public function getIdBundle()
    {
        return $this->idBundle;
    }
    /**
     * Set idBundle value
     *
     * @param string $_idBundle the idBundle
     *
     * @return string
     */
    public function setIdBundle($_idBundle)
    {
        return ($this->idBundle = $_idBundle);
    }
    /**
     * Get BundleNum value
     *
     * @return string|null
     */
    public function getBundleNum()
    {
        return $this->BundleNum;
    }
    /**
     * Set BundleNum value
     *
     * @param string $_bundleNum the BundleNum
     *
     * @return string
     */
    public function setBundleNum($_bundleNum)
    {
        return ($this->BundleNum = $_bundleNum);
    }
    /**
     * Get BundleName value
     *
     * @return string|null
     */
    public function getBundleName()
    {
        return $this->BundleName;
    }
    /**
     * Set BundleName value
     *
     * @param string $_bundleName the BundleName
     *
     * @return string
     */
    public function setBundleName($_bundleName)
    {
        return ($this->BundleName = $_bundleName);
    }
    /**
     * Get BundleNameL value
     *
     * @return string|null
     */
    public function getBundleNameL()
    {
        return $this->BundleNameL;
    }
    /**
     * Set BundleNameL value
     *
     * @param string $_bundleNameL the BundleNameL
     *
     * @return string
     */
    public function setBundleNameL($_bundleNameL)
    {
        return ($this->BundleNameL = $_bundleNameL);
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
     * Get MName value
     *
     * @return string|null
     */
    public function getMName()
    {
        return $this->MName;
    }
    /**
     * Set MName value
     *
     * @param string $_mName the MName
     *
     * @return string
     */
    public function setMName($_mName)
    {
        return ($this->MName = $_mName);
    }
    /**
     * Get idGroup value
     *
     * @return string|null
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }
    /**
     * Set idGroup value
     *
     * @param string $_idGroup the idGroup
     *
     * @return string
     */
    public function setIdGroup($_idGroup)
    {
        return ($this->idGroup = $_idGroup);
    }
    /**
     * Get GNum value
     *
     * @return string|null
     */
    public function getGNum()
    {
        return $this->GNum;
    }
    /**
     * Set GNum value
     *
     * @param string $_gNum the GNum
     *
     * @return string
     */
    public function setGNum($_gNum)
    {
        return ($this->GNum = $_gNum);
    }
    /**
     * Get isActive value
     *
     * @return int|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     *
     * @param int $_isActive the isActive
     *
     * @return int
     */
    public function setIsActive($_isActive)
    {
        return ($this->isActive = $_isActive);
    }
    /**
     * Get barCode value
     *
     * @return string|null
     */
    public function getBarCode()
    {
        return $this->barCode;
    }
    /**
     * Set barCode value
     *
     * @param string $_barCode the barCode
     *
     * @return string
     */
    public function setBarCode($_barCode)
    {
        return ($this->barCode = $_barCode);
    }
    /**
     * Get MatPrice value
     *
     * @return double|null
     */
    public function getMatPrice()
    {
        return $this->MatPrice;
    }
    /**
     * Set MatPrice value
     *
     * @param double $_matPrice the MatPrice
     *
     * @return double
     */
    public function setMatPrice($_matPrice)
    {
        return ($this->MatPrice = $_matPrice);
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
     * Get isActiveFrom value
     *
     * @return string|null
     */
    public function getIsActiveFrom()
    {
        return $this->isActiveFrom;
    }
    /**
     * Set isActiveFrom value
     *
     * @param string $_isActiveFrom the isActiveFrom
     *
     * @return string
     */
    public function setIsActiveFrom($_isActiveFrom)
    {
        return ($this->isActiveFrom = $_isActiveFrom);
    }
    /**
     * Get isActiveTo value
     *
     * @return string|null
     */
    public function getIsActiveTo()
    {
        return $this->isActiveTo;
    }
    /**
     * Set isActiveTo value
     *
     * @param string $_isActiveTo the isActiveTo
     *
     * @return string
     */
    public function setIsActiveTo($_isActiveTo)
    {
        return ($this->isActiveTo = $_isActiveTo);
    }
    /**
     * Get BundleAttribute value
     *
     * @return array|null
     */
    public function getBundleAttribute()
    {
        return $this->BundleAttribute;
    }
    /**
     * Set BundleAttribute value
     *
     * @param array $_bundleAttribute the BundleAttribute
     *
     * @return array
     */
    public function setBundleAttribute($_bundleAttribute)
    {
        return ($this->BundleAttribute = $_bundleAttribute);
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
     * @return ColibriERPStructBundleInfo
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
