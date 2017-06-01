<?php
/**
 * File for class ColibriERPStructErpPaymentMethod
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
 * This class stands for ColibriERPStructErpPaymentMethod
 *  originally named erpPaymentMethod
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
class ColibriERPStructErpPaymentMethod extends ColibriERPWsdlClass
{
    /**
     * The chrPaymentMethod
     * - doc : Payment method code
     *
     * @var string
     */
    public $chrPaymentMethod;
    /**
     * The PaymentDescription
     *
     * @var string
     */
    public $PaymentDescription;
    /**
     * Constructor method for erpPaymentMethod
     *
     * @see parent::__construct()
     *
     * @param string $_chrPaymentMethod   expect string
     * @param string $_paymentDescription expect string
     *
     * @return ColibriERPStructErpPaymentMethod
     */
    public function __construct($_chrPaymentMethod = null,$_paymentDescription = null)
    {
        parent::__construct(array('chrPaymentMethod'=>$_chrPaymentMethod,'PaymentDescription'=>$_paymentDescription), false);
    }
    /**
     * Get chrPaymentMethod value
     *
     * @return string|null
     */
    public function getChrPaymentMethod()
    {
        return $this->chrPaymentMethod;
    }
    /**
     * Set chrPaymentMethod value
     *
     * @param string $_chrPaymentMethod the chrPaymentMethod
     *
     * @return string
     */
    public function setChrPaymentMethod($_chrPaymentMethod)
    {
        return ($this->chrPaymentMethod = $_chrPaymentMethod);
    }
    /**
     * Get PaymentDescription value
     *
     * @return string|null
     */
    public function getPaymentDescription()
    {
        return $this->PaymentDescription;
    }
    /**
     * Set PaymentDescription value
     *
     * @param string $_paymentDescription the PaymentDescription
     *
     * @return string
     */
    public function setPaymentDescription($_paymentDescription)
    {
        return ($this->PaymentDescription = $_paymentDescription);
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
     * @return ColibriERPStructErpPaymentMethod
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
