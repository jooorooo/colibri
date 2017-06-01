<?php
/**
 * File for class ColibriERPStructPDocTranRec
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
 * This class stands for ColibriERPStructPDocTranRec
 *  originally named pDocTranRec
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
class ColibriERPStructPDocTranRec extends ColibriERPWsdlClass
{
    /**
     * The idPDoc
     *
     * @var integer
     */
    public $idPDoc;
    /**
     * The DocType
     *
     * @var string
     */
    public $DocType;
    /**
     * The pType
     *
     * @var string
     */
    public $pType;
    /**
     * The DocNum
     *
     * @var string
     */
    public $DocNum;
    /**
     * The DocCode
     *
     * @var string
     */
    public $DocCode;
    /**
     * The DocDate
     *
     * @var date
     */
    public $DocDate;
    /**
     * The AccDate
     *
     * @var dateTime
     */
    public $AccDate;
    /**
     * The idPartner
     *
     * @var integer
     */
    public $idPartner;
    /**
     * The idBranch
     *
     * @var integer
     */
    public $idBranch;
    /**
     * The chrPaymentMethod
     *
     * @var string
     */
    public $chrPaymentMethod;
    /**
     * The curCode
     *
     * @var string
     */
    public $curCode;
    /**
     * The DSuma
     *
     * @var double
     */
    public $DSuma;
    /**
     * The DSumaBGL
     *
     * @var double
     */
    public $DSumaBGL;
    /**
     * The DSumaDDS
     *
     * @var double
     */
    public $DSumaDDS;
    /**
     * The DSumaDDSBGL
     *
     * @var double
     */
    public $DSumaDDSBGL;
    /**
     * The DPaid
     *
     * @var double
     */
    public $DPaid;
    /**
     * The DPaidBGL
     *
     * @var double
     */
    public $DPaidBGL;
    /**
     * The PNum
     *
     * @var string
     */
    public $PNum;
    /**
     * The PName
     *
     * @var string
     */
    public $PName;
    /**
     * The PGLN
     *
     * @var string
     */
    public $PGLN;
    /**
     * The BNum
     *
     * @var string
     */
    public $BNum;
    /**
     * The chrBranchName
     *
     * @var string
     */
    public $chrBranchName;
    /**
     * The BGLN
     *
     * @var string
     */
    public $BGLN;
    /**
     * Constructor method for pDocTranRec
     *
     * @see parent::__construct()
     *
     * @param integer  $_idPDoc           expect integer
     * @param string   $_docType          expect string
     * @param string   $_pType            expect string
     * @param string   $_docNum           expect string
     * @param string   $_docCode          expect string
     * @param date     $_docDate          expect date
     * @param dateTime $_accDate          expect dateTime
     * @param integer  $_idPartner        expect integer
     * @param integer  $_idBranch         expect integer
     * @param string   $_chrPaymentMethod expect string
     * @param string   $_curCode          expect string
     * @param double   $_dSuma            expect double
     * @param double   $_dSumaBGL         expect double
     * @param double   $_dSumaDDS         expect double
     * @param double   $_dSumaDDSBGL      expect double
     * @param double   $_dPaid            expect double
     * @param double   $_dPaidBGL         expect double
     * @param string   $_pNum             expect string
     * @param string   $_pName            expect string
     * @param string   $_pGLN             expect string
     * @param string   $_bNum             expect string
     * @param string   $_chrBranchName    expect string
     * @param string   $_bGLN             expect string
     *
     * @return ColibriERPStructPDocTranRec
     */
    public function __construct($_idPDoc = null,$_docType = null,$_pType = null,$_docNum = null,$_docCode = null,$_docDate = null,$_accDate = null,$_idPartner = null,$_idBranch = null,$_chrPaymentMethod = null,$_curCode = null,$_dSuma = null,$_dSumaBGL = null,$_dSumaDDS = null,$_dSumaDDSBGL = null,$_dPaid = null,$_dPaidBGL = null,$_pNum = null,$_pName = null,$_pGLN = null,$_bNum = null,$_chrBranchName = null,$_bGLN = null)
    {
        parent::__construct(array('idPDoc'=>$_idPDoc,'DocType'=>$_docType,'pType'=>$_pType,'DocNum'=>$_docNum,'DocCode'=>$_docCode,'DocDate'=>$_docDate,'AccDate'=>$_accDate,'idPartner'=>$_idPartner,'idBranch'=>$_idBranch,'chrPaymentMethod'=>$_chrPaymentMethod,'curCode'=>$_curCode,'DSuma'=>$_dSuma,'DSumaBGL'=>$_dSumaBGL,'DSumaDDS'=>$_dSumaDDS,'DSumaDDSBGL'=>$_dSumaDDSBGL,'DPaid'=>$_dPaid,'DPaidBGL'=>$_dPaidBGL,'PNum'=>$_pNum,'PName'=>$_pName,'PGLN'=>$_pGLN,'BNum'=>$_bNum,'chrBranchName'=>$_chrBranchName,'BGLN'=>$_bGLN), false);
    }
    /**
     * Get idPDoc value
     *
     * @return integer|null
     */
    public function getIdPDoc()
    {
        return $this->idPDoc;
    }
    /**
     * Set idPDoc value
     *
     * @param integer $_idPDoc the idPDoc
     *
     * @return integer
     */
    public function setIdPDoc($_idPDoc)
    {
        return ($this->idPDoc = $_idPDoc);
    }
    /**
     * Get DocType value
     *
     * @return string|null
     */
    public function getDocType()
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     *
     * @param string $_docType the DocType
     *
     * @return string
     */
    public function setDocType($_docType)
    {
        return ($this->DocType = $_docType);
    }
    /**
     * Get pType value
     *
     * @return string|null
     */
    public function getPType()
    {
        return $this->pType;
    }
    /**
     * Set pType value
     *
     * @param string $_pType the pType
     *
     * @return string
     */
    public function setPType($_pType)
    {
        return ($this->pType = $_pType);
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
     * Get DocDate value
     *
     * @return date|null
     */
    public function getDocDate()
    {
        return $this->DocDate;
    }
    /**
     * Set DocDate value
     *
     * @param date $_docDate the DocDate
     *
     * @return date
     */
    public function setDocDate($_docDate)
    {
        return ($this->DocDate = $_docDate);
    }
    /**
     * Get AccDate value
     *
     * @return dateTime|null
     */
    public function getAccDate()
    {
        return $this->AccDate;
    }
    /**
     * Set AccDate value
     *
     * @param dateTime $_accDate the AccDate
     *
     * @return dateTime
     */
    public function setAccDate($_accDate)
    {
        return ($this->AccDate = $_accDate);
    }
    /**
     * Get idPartner value
     *
     * @return integer|null
     */
    public function getIdPartner()
    {
        return $this->idPartner;
    }
    /**
     * Set idPartner value
     *
     * @param integer $_idPartner the idPartner
     *
     * @return integer
     */
    public function setIdPartner($_idPartner)
    {
        return ($this->idPartner = $_idPartner);
    }
    /**
     * Get idBranch value
     *
     * @return integer|null
     */
    public function getIdBranch()
    {
        return $this->idBranch;
    }
    /**
     * Set idBranch value
     *
     * @param integer $_idBranch the idBranch
     *
     * @return integer
     */
    public function setIdBranch($_idBranch)
    {
        return ($this->idBranch = $_idBranch);
    }
    /**
     * Get chrPaymentMethod value
     *
     * @return string|null
     */
    public function getChrPaymentMethod()
    {
        return $this->chrPaymentMethod;
    }
    /**
     * Set chrPaymentMethod value
     *
     * @param string $_chrPaymentMethod the chrPaymentMethod
     *
     * @return string
     */
    public function setChrPaymentMethod($_chrPaymentMethod)
    {
        return ($this->chrPaymentMethod = $_chrPaymentMethod);
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
     * Get DSuma value
     *
     * @return double|null
     */
    public function getDSuma()
    {
        return $this->DSuma;
    }
    /**
     * Set DSuma value
     *
     * @param double $_dSuma the DSuma
     *
     * @return double
     */
    public function setDSuma($_dSuma)
    {
        return ($this->DSuma = $_dSuma);
    }
    /**
     * Get DSumaBGL value
     *
     * @return double|null
     */
    public function getDSumaBGL()
    {
        return $this->DSumaBGL;
    }
    /**
     * Set DSumaBGL value
     *
     * @param double $_dSumaBGL the DSumaBGL
     *
     * @return double
     */
    public function setDSumaBGL($_dSumaBGL)
    {
        return ($this->DSumaBGL = $_dSumaBGL);
    }
    /**
     * Get DSumaDDS value
     *
     * @return double|null
     */
    public function getDSumaDDS()
    {
        return $this->DSumaDDS;
    }
    /**
     * Set DSumaDDS value
     *
     * @param double $_dSumaDDS the DSumaDDS
     *
     * @return double
     */
    public function setDSumaDDS($_dSumaDDS)
    {
        return ($this->DSumaDDS = $_dSumaDDS);
    }
    /**
     * Get DSumaDDSBGL value
     *
     * @return double|null
     */
    public function getDSumaDDSBGL()
    {
        return $this->DSumaDDSBGL;
    }
    /**
     * Set DSumaDDSBGL value
     *
     * @param double $_dSumaDDSBGL the DSumaDDSBGL
     *
     * @return double
     */
    public function setDSumaDDSBGL($_dSumaDDSBGL)
    {
        return ($this->DSumaDDSBGL = $_dSumaDDSBGL);
    }
    /**
     * Get DPaid value
     *
     * @return double|null
     */
    public function getDPaid()
    {
        return $this->DPaid;
    }
    /**
     * Set DPaid value
     *
     * @param double $_dPaid the DPaid
     *
     * @return double
     */
    public function setDPaid($_dPaid)
    {
        return ($this->DPaid = $_dPaid);
    }
    /**
     * Get DPaidBGL value
     *
     * @return double|null
     */
    public function getDPaidBGL()
    {
        return $this->DPaidBGL;
    }
    /**
     * Set DPaidBGL value
     *
     * @param double $_dPaidBGL the DPaidBGL
     *
     * @return double
     */
    public function setDPaidBGL($_dPaidBGL)
    {
        return ($this->DPaidBGL = $_dPaidBGL);
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
     * Get PName value
     *
     * @return string|null
     */
    public function getPName()
    {
        return $this->PName;
    }
    /**
     * Set PName value
     *
     * @param string $_pName the PName
     *
     * @return string
     */
    public function setPName($_pName)
    {
        return ($this->PName = $_pName);
    }
    /**
     * Get PGLN value
     *
     * @return string|null
     */
    public function getPGLN()
    {
        return $this->PGLN;
    }
    /**
     * Set PGLN value
     *
     * @param string $_pGLN the PGLN
     *
     * @return string
     */
    public function setPGLN($_pGLN)
    {
        return ($this->PGLN = $_pGLN);
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
     * Get chrBranchName value
     *
     * @return string|null
     */
    public function getChrBranchName()
    {
        return $this->chrBranchName;
    }
    /**
     * Set chrBranchName value
     *
     * @param string $_chrBranchName the chrBranchName
     *
     * @return string
     */
    public function setChrBranchName($_chrBranchName)
    {
        return ($this->chrBranchName = $_chrBranchName);
    }
    /**
     * Get BGLN value
     *
     * @return string|null
     */
    public function getBGLN()
    {
        return $this->BGLN;
    }
    /**
     * Set BGLN value
     *
     * @param string $_bGLN the BGLN
     *
     * @return string
     */
    public function setBGLN($_bGLN)
    {
        return ($this->BGLN = $_bGLN);
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
     * @return ColibriERPStructPDocTranRec
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
