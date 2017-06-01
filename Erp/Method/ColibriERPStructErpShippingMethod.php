<?php
/**
 * File for class ColibriERPStructErpShippingMethod
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
 * This class stands for ColibriERPStructErpShippingMethod
 *  originally named erpShippingMethod
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
class ColibriERPStructErpShippingMethod extends ColibriERPWsdlClass
{
    /**
     * The chrShippingMethod
     * - doc : Shipping method code
     *
     * @var string
     */
    public $chrShippingMethod;
    /**
     * The ShippingDescription
     *
     * @var string
     */
    public $ShippingDescription;
    /**
     * Constructor method for erpShippingMethod
     *
     * @see parent::__construct()
     *
     * @param string $_chrShippingMethod   expect string
     * @param string $_shippingDescription expect string
     *
     * @return ColibriERPStructErpShippingMethod
     */
    public function __construct($_chrShippingMethod = null,$_shippingDescription = null)
    {
        parent::__construct(array('chrShippingMethod'=>$_chrShippingMethod,'ShippingDescription'=>$_shippingDescription), false);
    }
    /**
     * Get chrShippingMethod value
     *
     * @return string|null
     */
    public function getChrShippingMethod()
    {
        return $this->chrShippingMethod;
    }
    /**
     * Set chrShippingMethod value
     *
     * @param string $_chrShippingMethod the chrShippingMethod
     *
     * @return string
     */
    public function setChrShippingMethod($_chrShippingMethod)
    {
        return ($this->chrShippingMethod = $_chrShippingMethod);
    }
    /**
     * Get ShippingDescription value
     *
     * @return string|null
     */
    public function getShippingDescription()
    {
        return $this->ShippingDescription;
    }
    /**
     * Set ShippingDescription value
     *
     * @param string $_shippingDescription the ShippingDescription
     *
     * @return string
     */
    public function setShippingDescription($_shippingDescription)
    {
        return ($this->ShippingDescription = $_shippingDescription);
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
     * @return ColibriERPStructErpShippingMethod
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
