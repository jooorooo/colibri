<?php
/**
 * File for class ColibriERPStructErpSortRule
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
 * This class stands for ColibriERPStructErpSortRule
 *  originally named erpSortRule
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
class ColibriERPStructErpSortRule extends ColibriERPWsdlClass
{
    /**
     * The field
     * - doc : Field name
     *
     * @var string
     */
    public $field;
    /**
     * The dir
     * - doc : Sorting direction (|asc|desc)
     *
     * @var string
     */
    public $dir;
    /**
     * Constructor method for erpSortRule
     *
     * @see parent::__construct()
     *
     * @param string $_field expect string
     * @param string $_dir   expect string
     *
     * @return ColibriERPStructErpSortRule
     */
    public function __construct($_field = null,$_dir = null)
    {
        parent::__construct(array('field'=>$_field,'dir'=>$_dir), false);
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
     * Get dir value
     *
     * @return string|null
     */
    public function getDir()
    {
        return $this->dir;
    }
    /**
     * Set dir value
     *
     * @param string $_dir the dir
     *
     * @return string
     */
    public function setDir($_dir)
    {
        return ($this->dir = $_dir);
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
     * @return ColibriERPStructErpSortRule
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
