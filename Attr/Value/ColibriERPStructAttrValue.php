<?php
/**
 * File for class ColibriERPStructAttrValue
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
 * This class stands for ColibriERPStructAttrValue
 *  originally named attrValue
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
class ColibriERPStructAttrValue extends ColibriERPWsdlClass
{
    /**
     * The attribCode
     *
     * @var string
     */
    public $attribCode;
    /**
     * The attribValue
     *
     * @var string
     */
    public $attribValue;
    /**
     * Constructor method for attrValue
     *
     * @see parent::__construct()
     *
     * @param string $_attribCode  expect string
     * @param string $_attribValue expect string
     *
     * @return ColibriERPStructAttrValue
     */
    public function __construct($_attribCode = null,$_attribValue = null)
    {
        parent::__construct(array('attribCode'=>$_attribCode,'attribValue'=>$_attribValue), false);
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
     * Get attribValue value
     *
     * @return string|null
     */
    public function getAttribValue()
    {
        return $this->attribValue;
    }
    /**
     * Set attribValue value
     *
     * @param string $_attribValue the attribValue
     *
     * @return string
     */
    public function setAttribValue($_attribValue)
    {
        return ($this->attribValue = $_attribValue);
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
     * @return ColibriERPStructAttrValue
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
