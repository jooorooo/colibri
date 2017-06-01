<?php
/**
 * File for class ColibriERPStructAcc
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
 * This class stands for ColibriERPStructAcc
 *  originally named acc
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
class ColibriERPStructAcc extends ColibriERPWsdlClass
{
    /**
     * The aNum
     *
     * @var string
     */
    public $aNum;
    /**
     * The aName
     *
     * @var string
     */
    public $aName;
    /**
     * Constructor method for acc
     *
     * @see parent::__construct()
     *
     * @param string $_aNum  expect string
     * @param string $_aName expect string
     *
     * @return ColibriERPStructAcc
     */
    public function __construct($_aNum = null,$_aName = null)
    {
        parent::__construct(array('aNum'=>$_aNum,'aName'=>$_aName), false);
    }
    /**
     * Get aNum value
     *
     * @return string|null
     */
    public function getANum()
    {
        return $this->aNum;
    }
    /**
     * Set aNum value
     *
     * @param string $_aNum the aNum
     *
     * @return string
     */
    public function setANum($_aNum)
    {
        return ($this->aNum = $_aNum);
    }
    /**
     * Get aName value
     *
     * @return string|null
     */
    public function getAName()
    {
        return $this->aName;
    }
    /**
     * Set aName value
     *
     * @param string $_aName the aName
     *
     * @return string
     */
    public function setAName($_aName)
    {
        return ($this->aName = $_aName);
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
     * @return ColibriERPStructAcc
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
