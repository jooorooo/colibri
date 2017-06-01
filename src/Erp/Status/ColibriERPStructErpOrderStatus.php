<?php
/**
 * File for class ColibriERPStructErpOrderStatus
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
 * This class stands for ColibriERPStructErpOrderStatus
 *  originally named erpOrderStatus
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
class ColibriERPStructErpOrderStatus extends ColibriERPWsdlClass
{
    /**
     * The OStatus
     *
     * @var string
     */
    public $OStatus;
    /**
     * The Changed
     *
     * @var date
     */
    public $Changed;
    /**
     * Constructor method for erpOrderStatus
     *
     * @see parent::__construct()
     *
     * @param string $_oStatus expect string
     * @param date   $_changed expect date
     *
     * @return ColibriERPStructErpOrderStatus
     */
    public function __construct($_oStatus = null,$_changed = null)
    {
        parent::__construct(array('OStatus'=>$_oStatus,'Changed'=>$_changed), false);
    }
    /**
     * Get OStatus value
     *
     * @return string|null
     */
    public function getOStatus()
    {
        return $this->OStatus;
    }
    /**
     * Set OStatus value
     *
     * @param string $_oStatus the OStatus
     *
     * @return string
     */
    public function setOStatus($_oStatus)
    {
        return ($this->OStatus = $_oStatus);
    }
    /**
     * Get Changed value
     *
     * @return date|null
     */
    public function getChanged()
    {
        return $this->Changed;
    }
    /**
     * Set Changed value
     *
     * @param date $_changed the Changed
     *
     * @return date
     */
    public function setChanged($_changed)
    {
        return ($this->Changed = $_changed);
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
     * @return ColibriERPStructErpOrderStatus
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
