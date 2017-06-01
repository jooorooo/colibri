<?php
/**
 * File for class ColibriERPStructMAttributeInfo
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
 * This class stands for ColibriERPStructMAttributeInfo
 *  originally named mAttributeInfo
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
class ColibriERPStructMAttributeInfo extends ColibriERPWsdlClass
{
    /**
     * The idAttribute
     *
     * @var string
     */
    public $idAttribute;
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
     * Constructor method for mAttributeInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idAttribute        expect string
     * @param string $_chrAttributeName   expect string
     * @param string $_chrAttributeNameL  expect string
     * @param string $_attribDescription  expect string
     * @param string $_attribDescriptionL expect string
     * @param string $_attribType         expect string
     *
     * @return ColibriERPStructMAttributeInfo
     */
    public function __construct($_idAttribute = null,$_chrAttributeName = null,$_chrAttributeNameL = null,$_attribDescription = null,$_attribDescriptionL = null,$_attribType = null)
    {
        parent::__construct(array('idAttribute'=>$_idAttribute,'chrAttributeName'=>$_chrAttributeName,'chrAttributeNameL'=>$_chrAttributeNameL,'attribDescription'=>$_attribDescription,'attribDescriptionL'=>$_attribDescriptionL,'attribType'=>$_attribType), false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see   ColibriERPWsdlClass::__set_state()
     * @uses  ColibriERPWsdlClass::__set_state()
     * @param array  $_array     the exported values
     * @param string $_className expect string
     *
     * @return ColibriERPStructMAttributeInfo
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
