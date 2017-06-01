<?php
/**
 * File for class ColibriERPStructReservInfo
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
 * This class stands for ColibriERPStructReservInfo
 *  originally named reservInfo
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
class ColibriERPStructReservInfo extends ColibriERPWsdlClass
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
     * The idMat
     *
     * @var integer
     */
    public $idMat;
    /**
     * The MNum
     *
     * @var string
     */
    public $MNum;
    /**
     * The ResNum
     *
     * @var string
     */
    public $ResNum;
    /**
     * The FromDate
     *
     * @var string
     */
    public $FromDate;
    /**
     * The ToDate
     *
     * @var string
     */
    public $ToDate;
    /**
     * The PNum
     *
     * @var string
     */
    public $PNum;
    /**
     * The OrderNum
     *
     * @var string
     */
    public $OrderNum;
    /**
     * The DocCode
     *
     * @var string
     */
    public $DocCode;
    /**
     * The DocNum
     *
     * @var string
     */
    public $DocNum;
    /**
     * The UserFullName
     *
     * @var string
     */
    public $UserFullName;
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
     * Constructor method for reservInfo
     *
     * @see parent::__construct()
     *
     * @param integer $_sNum            expect integer
     * @param string  $_sNumber         expect string
     * @param integer $_idMat           expect integer
     * @param string  $_mNum            expect string
     * @param string  $_resNum          expect string
     * @param string  $_fromDate        expect string
     * @param string  $_toDate          expect string
     * @param string  $_pNum            expect string
     * @param string  $_orderNum        expect string
     * @param string  $_docCode         expect string
     * @param string  $_docNum          expect string
     * @param string  $_userFullName    expect string
     * @param double  $_qtyReservedSoft expect double
     * @param double  $_qtyReservedHard expect double
     *
     * @return ColibriERPStructReservInfo
     */
    public function __construct($_sNum = null,$_sNumber = null,$_idMat = null,$_mNum = null,$_resNum = null,$_fromDate = null,$_toDate = null,$_pNum = null,$_orderNum = null,$_docCode = null,$_docNum = null,$_userFullName = null,$_qtyReservedSoft = null,$_qtyReservedHard = null)
    {
        parent::__construct(array('SNum'=>$_sNum,'SNumber'=>$_sNumber,'idMat'=>$_idMat,'MNum'=>$_mNum,'ResNum'=>$_resNum,'FromDate'=>$_fromDate,'ToDate'=>$_toDate,'PNum'=>$_pNum,'OrderNum'=>$_orderNum,'DocCode'=>$_docCode,'DocNum'=>$_docNum,'UserFullName'=>$_userFullName,'QtyReservedSoft'=>$_qtyReservedSoft,'QtyReservedHard'=>$_qtyReservedHard), false);
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
     * Get idMat value
     *
     * @return integer|null
     */
    public function getIdMat()
    {
        return $this->idMat;
    }
    /**
     * Set idMat value
     *
     * @param integer $_idMat the idMat
     *
     * @return integer
     */
    public function setIdMat($_idMat)
    {
        return ($this->idMat = $_idMat);
    }
    /**
     * Get MNum value
     *
     * @return string|null
     */
    public function getMNum()
    {
        return $this->MNum;
    }
    /**
     * Set MNum value
     *
     * @param string $_mNum the MNum
     *
     * @return string
     */
    public function setMNum($_mNum)
    {
        return ($this->MNum = $_mNum);
    }
    /**
     * Get ResNum value
     *
     * @return string|null
     */
    public function getResNum()
    {
        return $this->ResNum;
    }
    /**
     * Set ResNum value
     *
     * @param string $_resNum the ResNum
     *
     * @return string
     */
    public function setResNum($_resNum)
    {
        return ($this->ResNum = $_resNum);
    }
    /**
     * Get FromDate value
     *
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }
    /**
     * Set FromDate value
     *
     * @param string $_fromDate the FromDate
     *
     * @return string
     */
    public function setFromDate($_fromDate)
    {
        return ($this->FromDate = $_fromDate);
    }
    /**
     * Get ToDate value
     *
     * @return string|null
     */
    public function getToDate()
    {
        return $this->ToDate;
    }
    /**
     * Set ToDate value
     *
     * @param string $_toDate the ToDate
     *
     * @return string
     */
    public function setToDate($_toDate)
    {
        return ($this->ToDate = $_toDate);
    }
    /**
     * Get PNum value
     *
     * @return string|null
     */
    public function getPNum()
    {
        return $this->PNum;
    }
    /**
     * Set PNum value
     *
     * @param string $_pNum the PNum
     *
     * @return string
     */
    public function setPNum($_pNum)
    {
        return ($this->PNum = $_pNum);
    }
    /**
     * Get OrderNum value
     *
     * @return string|null
     */
    public function getOrderNum()
    {
        return $this->OrderNum;
    }
    /**
     * Set OrderNum value
     *
     * @param string $_orderNum the OrderNum
     *
     * @return string
     */
    public function setOrderNum($_orderNum)
    {
        return ($this->OrderNum = $_orderNum);
    }
    /**
     * Get DocCode value
     *
     * @return string|null
     */
    public function getDocCode()
    {
        return $this->DocCode;
    }
    /**
     * Set DocCode value
     *
     * @param string $_docCode the DocCode
     *
     * @return string
     */
    public function setDocCode($_docCode)
    {
        return ($this->DocCode = $_docCode);
    }
    /**
     * Get DocNum value
     *
     * @return string|null
     */
    public function getDocNum()
    {
        return $this->DocNum;
    }
    /**
     * Set DocNum value
     *
     * @param string $_docNum the DocNum
     *
     * @return string
     */
    public function setDocNum($_docNum)
    {
        return ($this->DocNum = $_docNum);
    }
    /**
     * Get UserFullName value
     *
     * @return string|null
     */
    public function getUserFullName()
    {
        return $this->UserFullName;
    }
    /**
     * Set UserFullName value
     *
     * @param string $_userFullName the UserFullName
     *
     * @return string
     */
    public function setUserFullName($_userFullName)
    {
        return ($this->UserFullName = $_userFullName);
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
     * @return ColibriERPStructReservInfo
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
