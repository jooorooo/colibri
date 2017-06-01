<?php
/**
 * File for class ColibriERPStructMatStoreInfo
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
 * This class stands for ColibriERPStructMatStoreInfo
 *  originally named matStoreInfo
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
class ColibriERPStructMatStoreInfo extends ColibriERPWsdlClass
{
    /**
     * The SNum
     *
     * @var integer
     */
    public $SNum;
    /**
     * The SNumber
     *
     * @var string
     */
    public $SNumber;
    /**
     * The AvQ
     *
     * @var double
     */
    public $AvQ;
    /**
     * The QtyReservedSoft
     *
     * @var double
     */
    public $QtyReservedSoft;
    /**
     * The QtyReservedHard
     *
     * @var double
     */
    public $QtyReservedHard;
    /**
     * Constructor method for matStoreInfo
     *
     * @see parent::__construct()
     *
     * @param integer $_sNum            expect integer
     * @param string  $_sNumber         expect string
     * @param double  $_avQ             expect double
     * @param double  $_qtyReservedSoft expect double
     * @param double  $_qtyReservedHard expect double
     *
     * @return ColibriERPStructMatStoreInfo
     */
    public function __construct($_sNum = null,$_sNumber = null,$_avQ = null,$_qtyReservedSoft = null,$_qtyReservedHard = null)
    {
        parent::__construct(array('SNum'=>$_sNum,'SNumber'=>$_sNumber,'AvQ'=>$_avQ,'QtyReservedSoft'=>$_qtyReservedSoft,'QtyReservedHard'=>$_qtyReservedHard), false);
    }
    /**
     * Get SNum value
     *
     * @return integer|null
     */
    public function getSNum()
    {
        return $this->SNum;
    }
    /**
     * Set SNum value
     *
     * @param integer $_sNum the SNum
     *
     * @return integer
     */
    public function setSNum($_sNum)
    {
        return ($this->SNum = $_sNum);
    }
    /**
     * Get SNumber value
     *
     * @return string|null
     */
    public function getSNumber()
    {
        return $this->SNumber;
    }
    /**
     * Set SNumber value
     *
     * @param string $_sNumber the SNumber
     *
     * @return string
     */
    public function setSNumber($_sNumber)
    {
        return ($this->SNumber = $_sNumber);
    }
    /**
     * Get AvQ value
     *
     * @return double|null
     */
    public function getAvQ()
    {
        return $this->AvQ;
    }
    /**
     * Set AvQ value
     *
     * @param double $_avQ the AvQ
     *
     * @return double
     */
    public function setAvQ($_avQ)
    {
        return ($this->AvQ = $_avQ);
    }
    /**
     * Get QtyReservedSoft value
     *
     * @return double|null
     */
    public function getQtyReservedSoft()
    {
        return $this->QtyReservedSoft;
    }
    /**
     * Set QtyReservedSoft value
     *
     * @param double $_qtyReservedSoft the QtyReservedSoft
     *
     * @return double
     */
    public function setQtyReservedSoft($_qtyReservedSoft)
    {
        return ($this->QtyReservedSoft = $_qtyReservedSoft);
    }
    /**
     * Get QtyReservedHard value
     *
     * @return double|null
     */
    public function getQtyReservedHard()
    {
        return $this->QtyReservedHard;
    }
    /**
     * Set QtyReservedHard value
     *
     * @param double $_qtyReservedHard the QtyReservedHard
     *
     * @return double
     */
    public function setQtyReservedHard($_qtyReservedHard)
    {
        return ($this->QtyReservedHard = $_qtyReservedHard);
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
     * @return ColibriERPStructMatStoreInfo
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
