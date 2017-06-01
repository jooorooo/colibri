<?php
/**
 * File for class ColibriERPStructBundleAttributeInfo
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
 * This class stands for ColibriERPStructBundleAttributeInfo
 *  originally named bundleAttributeInfo
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
class ColibriERPStructBundleAttributeInfo extends ColibriERPWsdlClass
{
    /**
     * The idBundleAttribute
     *
     * @var string
     */
    public $idBundleAttribute;
    /**
     * The idAttribute
     *
     * @var string
     */
    public $idAttribute;
    /**
     * The attribCode
     *
     * @var string
     */
    public $attribCode;
    /**
     * The attribCCode
     *
     * @var string
     */
    public $attribCCode;
    /**
     * The IOrder
     *
     * @var string
     */
    public $IOrder;
    /**
     * The isActive
     *
     * @var int
     */
    public $isActive;
    /**
     * The isRequired
     *
     * @var int
     */
    public $isRequired;
    /**
     * The isMulty
     *
     * @var int
     */
    public $isMulty;
    /**
     * The isUnique
     *
     * @var int
     */
    public $isUnique;
    /**
     * The attrName
     *
     * @var string
     */
    public $attrName;
    /**
     * The attrNameL
     *
     * @var string
     */
    public $attrNameL;
    /**
     * The attrDescription
     *
     * @var string
     */
    public $attrDescription;
    /**
     * The attrDescriptionL
     *
     * @var string
     */
    public $attrDescriptionL;
    /**
     * The BundleItem
     *
     * @var array
     */
    public $BundleItem;
    /**
     * Constructor method for bundleAttributeInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idBundleAttribute expect string
     * @param string $_idAttribute       expect string
     * @param string $_attribCode        expect string
     * @param string $_attribCCode       expect string
     * @param string $_iOrder            expect string
     * @param int    $_isActive          expect int
     * @param int    $_isRequired        expect int
     * @param int    $_isMulty           expect int
     * @param int    $_isUnique          expect int
     * @param string $_attrName          expect string
     * @param string $_attrNameL         expect string
     * @param string $_attrDescription   expect string
     * @param string $_attrDescriptionL  expect string
     * @param array  $_bundleItem        expect array
     *
     * @return ColibriERPStructBundleAttributeInfo
     */
    public function __construct($_idBundleAttribute = null,$_idAttribute = null,$_attribCode = null,$_attribCCode = null,$_iOrder = null,$_isActive = null,$_isRequired = null,$_isMulty = null,$_isUnique = null,$_attrName = null,$_attrNameL = null,$_attrDescription = null,$_attrDescriptionL = null,$_bundleItem = null)
    {
        parent::__construct(array('idBundleAttribute'=>$_idBundleAttribute,'idAttribute'=>$_idAttribute,'attribCode'=>$_attribCode,'attribCCode'=>$_attribCCode,'IOrder'=>$_iOrder,'isActive'=>$_isActive,'isRequired'=>$_isRequired,'isMulty'=>$_isMulty,'isUnique'=>$_isUnique,'attrName'=>$_attrName,'attrNameL'=>$_attrNameL,'attrDescription'=>$_attrDescription,'attrDescriptionL'=>$_attrDescriptionL,'BundleItem'=>$_bundleItem), false);
    }
    /**
     * Get idBundleAttribute value
     *
     * @return string|null
     */
    public function getIdBundleAttribute()
    {
        return $this->idBundleAttribute;
    }
    /**
     * Set idBundleAttribute value
     *
     * @param string $_idBundleAttribute the idBundleAttribute
     *
     * @return string
     */
    public function setIdBundleAttribute($_idBundleAttribute)
    {
        return ($this->idBundleAttribute = $_idBundleAttribute);
    }
    /**
     * Get idAttribute value
     *
     * @return string|null
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }
    /**
     * Set idAttribute value
     *
     * @param string $_idAttribute the idAttribute
     *
     * @return string
     */
    public function setIdAttribute($_idAttribute)
    {
        return ($this->idAttribute = $_idAttribute);
    }
    /**
     * Get attribCode value
     *
     * @return string|null
     */
    public function getAttribCode()
    {
        return $this->attribCode;
    }
    /**
     * Set attribCode value
     *
     * @param string $_attribCode the attribCode
     *
     * @return string
     */
    public function setAttribCode($_attribCode)
    {
        return ($this->attribCode = $_attribCode);
    }
    /**
     * Get attribCCode value
     *
     * @return string|null
     */
    public function getAttribCCode()
    {
        return $this->attribCCode;
    }
    /**
     * Set attribCCode value
     *
     * @param string $_attribCCode the attribCCode
     *
     * @return string
     */
    public function setAttribCCode($_attribCCode)
    {
        return ($this->attribCCode = $_attribCCode);
    }
    /**
     * Get IOrder value
     *
     * @return string|null
     */
    public function getIOrder()
    {
        return $this->IOrder;
    }
    /**
     * Set IOrder value
     *
     * @param string $_iOrder the IOrder
     *
     * @return string
     */
    public function setIOrder($_iOrder)
    {
        return ($this->IOrder = $_iOrder);
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
     * Get isRequired value
     *
     * @return int|null
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }
    /**
     * Set isRequired value
     *
     * @param int $_isRequired the isRequired
     *
     * @return int
     */
    public function setIsRequired($_isRequired)
    {
        return ($this->isRequired = $_isRequired);
    }
    /**
     * Get isMulty value
     *
     * @return int|null
     */
    public function getIsMulty()
    {
        return $this->isMulty;
    }
    /**
     * Set isMulty value
     *
     * @param int $_isMulty the isMulty
     *
     * @return int
     */
    public function setIsMulty($_isMulty)
    {
        return ($this->isMulty = $_isMulty);
    }
    /**
     * Get isUnique value
     *
     * @return int|null
     */
    public function getIsUnique()
    {
        return $this->isUnique;
    }
    /**
     * Set isUnique value
     *
     * @param int $_isUnique the isUnique
     *
     * @return int
     */
    public function setIsUnique($_isUnique)
    {
        return ($this->isUnique = $_isUnique);
    }
    /**
     * Get attrName value
     *
     * @return string|null
     */
    public function getAttrName()
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     *
     * @param string $_attrName the attrName
     *
     * @return string
     */
    public function setAttrName($_attrName)
    {
        return ($this->attrName = $_attrName);
    }
    /**
     * Get attrNameL value
     *
     * @return string|null
     */
    public function getAttrNameL()
    {
        return $this->attrNameL;
    }
    /**
     * Set attrNameL value
     *
     * @param string $_attrNameL the attrNameL
     *
     * @return string
     */
    public function setAttrNameL($_attrNameL)
    {
        return ($this->attrNameL = $_attrNameL);
    }
    /**
     * Get attrDescription value
     *
     * @return string|null
     */
    public function getAttrDescription()
    {
        return $this->attrDescription;
    }
    /**
     * Set attrDescription value
     *
     * @param string $_attrDescription the attrDescription
     *
     * @return string
     */
    public function setAttrDescription($_attrDescription)
    {
        return ($this->attrDescription = $_attrDescription);
    }
    /**
     * Get attrDescriptionL value
     *
     * @return string|null
     */
    public function getAttrDescriptionL()
    {
        return $this->attrDescriptionL;
    }
    /**
     * Set attrDescriptionL value
     *
     * @param string $_attrDescriptionL the attrDescriptionL
     *
     * @return string
     */
    public function setAttrDescriptionL($_attrDescriptionL)
    {
        return ($this->attrDescriptionL = $_attrDescriptionL);
    }
    /**
     * Get BundleItem value
     *
     * @return array|null
     */
    public function getBundleItem()
    {
        return $this->BundleItem;
    }
    /**
     * Set BundleItem value
     *
     * @param array $_bundleItem the BundleItem
     *
     * @return array
     */
    public function setBundleItem($_bundleItem)
    {
        return ($this->BundleItem = $_bundleItem);
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
     * @return ColibriERPStructBundleAttributeInfo
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
