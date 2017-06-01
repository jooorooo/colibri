<?php
/**
 * File for class ColibriERPStructDocInfo
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
 * This class stands for ColibriERPStructDocInfo
 *  originally named DocInfo
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
class ColibriERPStructDocInfo extends ColibriERPWsdlClass
{
    /**
     * The DocNum
     *
     * @var string
     */
    public $DocNum;
    /**
     * The AccDate
     *
     * @var string
     */
    public $AccDate;
    /**
     * The DocDate
     *
     * @var string
     */
    public $DocDate;
    /**
     * The DocCode
     *
     * @var string
     */
    public $DocCode;
    /**
     * The UserDeal
     *
     * @var string
     */
    public $UserDeal;
    /**
     * The curCode
     *
     * @var string
     */
    public $curCode;
    /**
     * The dcmRate
     *
     * @var float
     */
    public $dcmRate;
    /**
     * The idPartner
     *
     * @var string
     */
    public $idPartner;
    /**
     * The PNum
     *
     * @var string
     */
    public $PNum;
    /**
     * The idBranch
     *
     * @var string
     */
    public $idBranch;
    /**
     * The BNum
     *
     * @var string
     */
    public $BNum;
    /**
     * The idGeoRegion
     *
     * @var string
     */
    public $idGeoRegion;
    /**
     * The ITEMS
     *
     * @var array
     */
    public $ITEMS;
    /**
     * Constructor method for DocInfo
     *
     * @see parent::__construct()
     *
     * @param string $_docNum      expect string
     * @param string $_accDate     expect string
     * @param string $_docDate     expect string
     * @param string $_docCode     expect string
     * @param string $_userDeal    expect string
     * @param string $_curCode     expect string
     * @param float  $_dcmRate     expect float
     * @param string $_idPartner   expect string
     * @param string $_pNum        expect string
     * @param string $_idBranch    expect string
     * @param string $_bNum        expect string
     * @param string $_idGeoRegion expect string
     * @param array  $_iTEMS       expect array
     *
     * @return ColibriERPStructDocInfo
     */
    public function __construct($_docNum = null,$_accDate = null,$_docDate = null,$_docCode = null,$_userDeal = null,$_curCode = null,$_dcmRate = null,$_idPartner = null,$_pNum = null,$_idBranch = null,$_bNum = null,$_idGeoRegion = null,$_iTEMS = null)
    {
        parent::__construct(array('DocNum'=>$_docNum,'AccDate'=>$_accDate,'DocDate'=>$_docDate,'DocCode'=>$_docCode,'UserDeal'=>$_userDeal,'curCode'=>$_curCode,'dcmRate'=>$_dcmRate,'idPartner'=>$_idPartner,'PNum'=>$_pNum,'idBranch'=>$_idBranch,'BNum'=>$_bNum,'idGeoRegion'=>$_idGeoRegion,'ITEMS'=>$_iTEMS), false);
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
     * Get AccDate value
     *
     * @return string|null
     */
    public function getAccDate()
    {
        return $this->AccDate;
    }
    /**
     * Set AccDate value
     *
     * @param string $_accDate the AccDate
     *
     * @return string
     */
    public function setAccDate($_accDate)
    {
        return ($this->AccDate = $_accDate);
    }
    /**
     * Get DocDate value
     *
     * @return string|null
     */
    public function getDocDate()
    {
        return $this->DocDate;
    }
    /**
     * Set DocDate value
     *
     * @param string $_docDate the DocDate
     *
     * @return string
     */
    public function setDocDate($_docDate)
    {
        return ($this->DocDate = $_docDate);
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
     * Get UserDeal value
     *
     * @return string|null
     */
    public function getUserDeal()
    {
        return $this->UserDeal;
    }
    /**
     * Set UserDeal value
     *
     * @param string $_userDeal the UserDeal
     *
     * @return string
     */
    public function setUserDeal($_userDeal)
    {
        return ($this->UserDeal = $_userDeal);
    }
    /**
     * Get curCode value
     *
     * @return string|null
     */
    public function getCurCode()
    {
        return $this->curCode;
    }
    /**
     * Set curCode value
     *
     * @param string $_curCode the curCode
     *
     * @return string
     */
    public function setCurCode($_curCode)
    {
        return ($this->curCode = $_curCode);
    }
    /**
     * Get dcmRate value
     *
     * @return float|null
     */
    public function getDcmRate()
    {
        return $this->dcmRate;
    }
    /**
     * Set dcmRate value
     *
     * @param float $_dcmRate the dcmRate
     *
     * @return float
     */
    public function setDcmRate($_dcmRate)
    {
        return ($this->dcmRate = $_dcmRate);
    }
    /**
     * Get idPartner value
     *
     * @return string|null
     */
    public function getIdPartner()
    {
        return $this->idPartner;
    }
    /**
     * Set idPartner value
     *
     * @param string $_idPartner the idPartner
     *
     * @return string
     */
    public function setIdPartner($_idPartner)
    {
        return ($this->idPartner = $_idPartner);
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
     * Get idBranch value
     *
     * @return string|null
     */
    public function getIdBranch()
    {
        return $this->idBranch;
    }
    /**
     * Set idBranch value
     *
     * @param string $_idBranch the idBranch
     *
     * @return string
     */
    public function setIdBranch($_idBranch)
    {
        return ($this->idBranch = $_idBranch);
    }
    /**
     * Get BNum value
     *
     * @return string|null
     */
    public function getBNum()
    {
        return $this->BNum;
    }
    /**
     * Set BNum value
     *
     * @param string $_bNum the BNum
     *
     * @return string
     */
    public function setBNum($_bNum)
    {
        return ($this->BNum = $_bNum);
    }
    /**
     * Get idGeoRegion value
     *
     * @return string|null
     */
    public function getIdGeoRegion()
    {
        return $this->idGeoRegion;
    }
    /**
     * Set idGeoRegion value
     *
     * @param string $_idGeoRegion the idGeoRegion
     *
     * @return string
     */
    public function setIdGeoRegion($_idGeoRegion)
    {
        return ($this->idGeoRegion = $_idGeoRegion);
    }
    /**
     * Get ITEMS value
     *
     * @return array|null
     */
    public function getITEMS()
    {
        return $this->ITEMS;
    }
    /**
     * Set ITEMS value
     *
     * @param array $_iTEMS the ITEMS
     *
     * @return array
     */
    public function setITEMS($_iTEMS)
    {
        return ($this->ITEMS = $_iTEMS);
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
     * @return ColibriERPStructDocInfo
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
