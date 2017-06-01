<?php
/**
 * File for class ColibriERPStructLimitResult
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
 * This class stands for ColibriERPStructLimitResult
 *  originally named limitResult
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
class ColibriERPStructLimitResult extends ColibriERPWsdlClass
{
    /**
     * The from
     *
     * @var integer
     */
    public $from;
    /**
     * The count
     *
     * @var integer
     */
    public $count;
    /**
     * Constructor method for limitResult
     *
     * @see parent::__construct()
     *
     * @param integer $_from  expect integer
     * @param integer $_count expect integer
     *
     * @return ColibriERPStructLimitResult
     */
    public function __construct($_from = null,$_count = null)
    {
        parent::__construct(array('from'=>$_from,'count'=>$_count), false);
    }
    /**
     * Get from value
     *
     * @return integer|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     *
     * @param integer $_from the from
     *
     * @return integer
     */
    public function setFrom($_from)
    {
        return ($this->from = $_from);
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
     * @return ColibriERPStructLimitResult
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
