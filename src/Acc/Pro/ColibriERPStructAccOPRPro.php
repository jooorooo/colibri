<?php
/**
 * File for class ColibriERPStructAccOPRPro
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
 * This class stands for ColibriERPStructAccOPRPro
 *  originally named accOPRPro
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
class ColibriERPStructAccOPRPro extends ColibriERPWsdlClass
{
    /**
     * The ID
     *
     * @var string
     */
    public $ID;
    /**
     * The Name
     *
     * @var string
     */
    public $Name;
    /**
     * Constructor method for accOPRPro
     *
     * @see parent::__construct()
     *
     * @param string $_iD   expect string
     * @param string $_name expect string
     *
     * @return ColibriERPStructAccOPRPro
     */
    public function __construct($_iD = null,$_name = null)
    {
        parent::__construct(array('ID'=>$_iD,'Name'=>$_name), false);
    }
    /**
     * Get ID value
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     *
     * @param string $_iD the ID
     *
     * @return string
     */
    public function setID($_iD)
    {
        return ($this->ID = $_iD);
    }
    /**
     * Get Name value
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     *
     * @param string $_name the Name
     *
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
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
     * @return ColibriERPStructAccOPRPro
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
