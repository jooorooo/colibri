<?php
/**
 * File for class ColibriERPStructErpSetParam
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
 * This class stands for ColibriERPStructErpSetParam
 *  originally named erpSetParam
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
class ColibriERPStructErpSetParam extends ColibriERPWsdlClass
{
    /**
     * The key
     *
     * @var string
     */
    public $key;
    /**
     * The value
     *
     * @var string
     */
    public $value;
    /**
     * Constructor method for erpSetParam
     *
     * @see parent::__construct()
     *
     * @param string $_key   expect string
     * @param string $_value expect string
     *
     * @return ColibriERPStructErpSetParam
     */
    public function __construct($_key = null,$_value = null)
    {
        parent::__construct(array('key'=>$_key,'value'=>$_value), false);
    }
    /**
     * Get key value
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     *
     * @param string $_key the key
     *
     * @return string
     */
    public function setKey($_key)
    {
        return ($this->key = $_key);
    }
    /**
     * Get value value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     *
     * @param string $_value the value
     *
     * @return string
     */
    public function setValue($_value)
    {
        return ($this->value = $_value);
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
     * @return ColibriERPStructErpSetParam
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
