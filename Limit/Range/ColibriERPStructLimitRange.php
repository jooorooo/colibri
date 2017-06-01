<?php
/**
 * File for class ColibriERPStructLimitRange
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
 * This class stands for ColibriERPStructLimitRange
 *  originally named limitRange
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
class ColibriERPStructLimitRange extends ColibriERPWsdlClass
{
    /**
     * The offset
     *
     * @var integer
     */
    public $offset;
    /**
     * The count
     *
     * @var integer
     */
    public $count;
    /**
     * Constructor method for limitRange
     *
     * @see parent::__construct()
     *
     * @param integer $_offset expect integer
     * @param integer $_count  expect integer
     *
     * @return ColibriERPStructLimitRange
     */
    public function __construct($_offset = null,$_count = null)
    {
        parent::__construct(array('offset'=>$_offset,'count'=>$_count), false);
    }
    /**
     * Get offset value
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     *
     * @param integer $_offset the offset
     *
     * @return integer
     */
    public function setOffset($_offset)
    {
        return ($this->offset = $_offset);
    }
    /**
     * Get count value
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * Set count value
     *
     * @param integer $_count the count
     *
     * @return integer
     */
    public function setCount($_count)
    {
        return ($this->count = $_count);
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
     * @return ColibriERPStructLimitRange
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
