<?php
/**
 * File for class ColibriERPStructMatAttributeRec
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
 * This class stands for ColibriERPStructMatAttributeRec
 *  originally named MatAttributeRec
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
class ColibriERPStructMatAttributeRec extends ColibriERPWsdlClass
{
    /**
     * The idAttribute
     *
     * @var integer
     */
    public $idAttribute;
    /**
     * The IOrder
     *
     * @var integer
     */
    public $IOrder;
    /**
     * The attribCode
     *
     * @var string
     */
    public $attribCode;
    /**
     * The chrAttributeName
     *
     * @var string
     */
    public $chrAttributeName;
    /**
     * The chrAttributeNameL
     *
     * @var string
     */
    public $chrAttributeNameL;
    /**
     * The idAttributeCategory
     *
     * @var integer
     */
    public $idAttributeCategory;
    /**
     * The attribDescription
     *
     * @var string
     */
    public $attribDescription;
    /**
     * The attribDescriptionL
     *
     * @var string
     */
    public $attribDescriptionL;
    /**
     * The attribType
     *
     * @var string
     */
    public $attribType;
    /**
     * The filter
     *
     * @var integer
     */
    public $filter;
    /**
     * The isQN
     *
     * @var integer
     */
    public $isQN;
    /**
     * The attribMinValue
     *
     * @var string
     */
    public $attribMinValue;
    /**
     * The attribMaxValue
     *
     * @var string
     */
    public $attribMaxValue;
    /**
     * The attribListValues
     *
     * @var string
     */
    public $attribListValues;
    /**
     * The attribStrict
     *
     * @var integer
     */
    public $attribStrict;
    /**
     * Constructor method for MatAttributeRec
     *
     * @see parent::__construct()
     *
     * @param integer $_idAttribute         expect integer
     * @param integer $_iOrder              expect integer
     * @param string  $_attribCode          expect string
     * @param string  $_chrAttributeName    expect string
     * @param string  $_chrAttributeNameL   expect string
     * @param integer $_idAttributeCategory expect integer
     * @param string  $_attribDescription   expect string
     * @param string  $_attribDescriptionL  expect string
     * @param string  $_attribType          expect string
     * @param integer $_filter              expect integer
     * @param integer $_isQN                expect integer
     * @param string  $_attribMinValue      expect string
     * @param string  $_attribMaxValue      expect string
     * @param string  $_attribListValues    expect string
     * @param integer $_attribStrict        expect integer
     *
     * @return ColibriERPStructMatAttributeRec
     */
    public function __construct($_idAttribute = null,$_iOrder = null,$_attribCode = null,$_chrAttributeName = null,$_chrAttributeNameL = null,$_idAttributeCategory = null,$_attribDescription = null,$_attribDescriptionL = null,$_attribType = null,$_filter = null,$_isQN = null,$_attribMinValue = null,$_attribMaxValue = null,$_attribListValues = null,$_attribStrict = null)
    {
        parent::__construct(array('idAttribute'=>$_idAttribute,'IOrder'=>$_iOrder,'attribCode'=>$_attribCode,'chrAttributeName'=>$_chrAttributeName,'chrAttributeNameL'=>$_chrAttributeNameL,'idAttributeCategory'=>$_idAttributeCategory,'attribDescription'=>$_attribDescription,'attribDescriptionL'=>$_attribDescriptionL,'attribType'=>$_attribType,'filter'=>$_filter,'isQN'=>$_isQN,'attribMinValue'=>$_attribMinValue,'attribMaxValue'=>$_attribMaxValue,'attribListValues'=>$_attribListValues,'attribStrict'=>$_attribStrict), false);
    }
    /**
     * Get idAttribute value
     *
     * @return integer|null
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }
    /**
     * Set idAttribute value
     *
     * @param integer $_idAttribute the idAttribute
     *
     * @return integer
     */
    public function setIdAttribute($_idAttribute)
    {
        return ($this->idAttribute = $_idAttribute);
    }
    /**
     * Get IOrder value
     *
     * @return integer|null
     */
    public function getIOrder()
    {
        return $this->IOrder;
    }
    /**
     * Set IOrder value
     *
     * @param integer $_iOrder the IOrder
     *
     * @return integer
     */
    public function setIOrder($_iOrder)
    {
        return ($this->IOrder = $_iOrder);
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
     * Get chrAttributeName value
     *
     * @return string|null
     */
    public function getChrAttributeName()
    {
        return $this->chrAttributeName;
    }
    /**
     * Set chrAttributeName value
     *
     * @param string $_chrAttributeName the chrAttributeName
     *
     * @return string
     */
    public function setChrAttributeName($_chrAttributeName)
    {
        return ($this->chrAttributeName = $_chrAttributeName);
    }
    /**
     * Get chrAttributeNameL value
     *
     * @return string|null
     */
    public function getChrAttributeNameL()
    {
        return $this->chrAttributeNameL;
    }
    /**
     * Set chrAttributeNameL value
     *
     * @param string $_chrAttributeNameL the chrAttributeNameL
     *
     * @return string
     */
    public function setChrAttributeNameL($_chrAttributeNameL)
    {
        return ($this->chrAttributeNameL = $_chrAttributeNameL);
    }
    /**
     * Get idAttributeCategory value
     *
     * @return integer|null
     */
    public function getIdAttributeCategory()
    {
        return $this->idAttributeCategory;
    }
    /**
     * Set idAttributeCategory value
     *
     * @param integer $_idAttributeCategory the idAttributeCategory
     *
     * @return integer
     */
    public function setIdAttributeCategory($_idAttributeCategory)
    {
        return ($this->idAttributeCategory = $_idAttributeCategory);
    }
    /**
     * Get attribDescription value
     *
     * @return string|null
     */
    public function getAttribDescription()
    {
        return $this->attribDescription;
    }
    /**
     * Set attribDescription value
     *
     * @param string $_attribDescription the attribDescription
     *
     * @return string
     */
    public function setAttribDescription($_attribDescription)
    {
        return ($this->attribDescription = $_attribDescription);
    }
    /**
     * Get attribDescriptionL value
     *
     * @return string|null
     */
    public function getAttribDescriptionL()
    {
        return $this->attribDescriptionL;
    }
    /**
     * Set attribDescriptionL value
     *
     * @param string $_attribDescriptionL the attribDescriptionL
     *
     * @return string
     */
    public function setAttribDescriptionL($_attribDescriptionL)
    {
        return ($this->attribDescriptionL = $_attribDescriptionL);
    }
    /**
     * Get attribType value
     *
     * @return string|null
     */
    public function getAttribType()
    {
        return $this->attribType;
    }
    /**
     * Set attribType value
     *
     * @param string $_attribType the attribType
     *
     * @return string
     */
    public function setAttribType($_attribType)
    {
        return ($this->attribType = $_attribType);
    }
    /**
     * Get filter value
     *
     * @return integer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     *
     * @param integer $_filter the filter
     *
     * @return integer
     */
    public function setFilter($_filter)
    {
        return ($this->filter = $_filter);
    }
    /**
     * Get isQN value
     *
     * @return integer|null
     */
    public function getIsQN()
    {
        return $this->isQN;
    }
    /**
     * Set isQN value
     *
     * @param integer $_isQN the isQN
     *
     * @return integer
     */
    public function setIsQN($_isQN)
    {
        return ($this->isQN = $_isQN);
    }
    /**
     * Get attribMinValue value
     *
     * @return string|null
     */
    public function getAttribMinValue()
    {
        return $this->attribMinValue;
    }
    /**
     * Set attribMinValue value
     *
     * @param string $_attribMinValue the attribMinValue
     *
     * @return string
     */
    public function setAttribMinValue($_attribMinValue)
    {
        return ($this->attribMinValue = $_attribMinValue);
    }
    /**
     * Get attribMaxValue value
     *
     * @return string|null
     */
    public function getAttribMaxValue()
    {
        return $this->attribMaxValue;
    }
    /**
     * Set attribMaxValue value
     *
     * @param string $_attribMaxValue the attribMaxValue
     *
     * @return string
     */
    public function setAttribMaxValue($_attribMaxValue)
    {
        return ($this->attribMaxValue = $_attribMaxValue);
    }
    /**
     * Get attribListValues value
     *
     * @return string|null
     */
    public function getAttribListValues()
    {
        return $this->attribListValues;
    }
    /**
     * Set attribListValues value
     *
     * @param string $_attribListValues the attribListValues
     *
     * @return string
     */
    public function setAttribListValues($_attribListValues)
    {
        return ($this->attribListValues = $_attribListValues);
    }
    /**
     * Get attribStrict value
     *
     * @return integer|null
     */
    public function getAttribStrict()
    {
        return $this->attribStrict;
    }
    /**
     * Set attribStrict value
     *
     * @param integer $_attribStrict the attribStrict
     *
     * @return integer
     */
    public function setAttribStrict($_attribStrict)
    {
        return ($this->attribStrict = $_attribStrict);
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
     * @return ColibriERPStructMatAttributeRec
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
