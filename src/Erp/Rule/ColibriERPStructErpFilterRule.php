<?php
/**
 * File for class ColibriERPStructErpFilterRule
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
 * This class stands for ColibriERPStructErpFilterRule
 *  originally named erpFilterRule
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
class ColibriERPStructErpFilterRule extends ColibriERPWsdlClass
{
    /**
     * The field
     * - doc : Field name
     *
     * @var string
     */
    public $field;
    /**
     * The value
     * - doc : Field value
     *
     * @var string
     */
    public $value;
    /**
     * The oper
     * - doc : Operation (use in extended filter only!)
     *
     * @var string
     */
    public $oper;
    /**
     * Constructor method for erpFilterRule
     *
     * @see parent::__construct()
     *
     * @param string $_field expect string
     * @param string $_value expect string
     * @param string $_oper  expect string
     *
     * @return ColibriERPStructErpFilterRule
     */
    public function __construct($_field = null,$_value = null,$_oper = null)
    {
        parent::__construct(array('field'=>$_field,'value'=>$_value,'oper'=>$_oper), false);
    }
    /**
     * Get field value
     *
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     *
     * @param string $_field the field
     *
     * @return string
     */
    public function setField($_field)
    {
        return ($this->field = $_field);
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
     * Get oper value
     *
     * @return string|null
     */
    public function getOper()
    {
        return $this->oper;
    }
    /**
     * Set oper value
     *
     * @param string $_oper the oper
     *
     * @return string
     */
    public function setOper($_oper)
    {
        return ($this->oper = $_oper);
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
     * @return ColibriERPStructErpFilterRule
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
