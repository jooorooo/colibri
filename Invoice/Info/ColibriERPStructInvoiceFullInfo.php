<?php
/**
 * File for class ColibriERPStructInvoiceFullInfo
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
 * This class stands for ColibriERPStructInvoiceFullInfo
 *  originally named InvoiceFullInfo
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
class ColibriERPStructInvoiceFullInfo extends ColibriERPWsdlClass
{
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
     * The DocName
     *
     * @var string
     */
    public $DocName;
    /**
     * The DocType
     *
     * @var string
     */
    public $DocType;
    /**
     * The specDocType
     *
     * @var string
     */
    public $specDocType;
    /**
     * The DocDate
     *
     * @var string
     */
    public $DocDate;
    /**
     * The DocInvNum
     *
     * @var string
     */
    public $DocInvNum;
    /**
     * The DocAmount
     *
     * @var string
     */
    public $DocAmount;
    /**
     * The DocPaid
     *
     * @var string
     */
    public $DocPaid;
    /**
     * The DocCur
     *
     * @var string
     */
    public $DocCur;
    /**
     * The PaymentDate
     *
     * @var string
     */
    public $PaymentDate;
    /**
     * The DocContract
     *
     * @var string
     */
    public $DocContract;
    /**
     * The DocRegardingDoc
     *
     * @var string
     */
    public $DocRegardingDoc;
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
     * The PAddr
     *
     * @var string
     */
    public $PAddr;
    /**
     * The PCity
     *
     * @var string
     */
    public $PCity;
    /**
     * The PZip
     *
     * @var string
     */
    public $PZip;
    /**
     * The PState
     *
     * @var string
     */
    public $PState;
    /**
     * The PCountry
     *
     * @var string
     */
    public $PCountry;
    /**
     * The PDanN
     *
     * @var string
     */
    public $PDanN;
    /**
     * The CName
     *
     * @var string
     */
    public $CName;
    /**
     * The CAddr
     *
     * @var string
     */
    public $CAddr;
    /**
     * The CCity
     *
     * @var string
     */
    public $CCity;
    /**
     * The SName
     *
     * @var string
     */
    public $SName;
    /**
     * The SAddr
     *
     * @var string
     */
    public $SAddr;
    /**
     * The SCity
     *
     * @var string
     */
    public $SCity;
    /**
     * The SZip
     *
     * @var string
     */
    public $SZip;
    /**
     * The SCountry
     *
     * @var string
     */
    public $SCountry;
    /**
     * The SDan
     *
     * @var string
     */
    public $SDan;
    /**
     * The ShDate
     *
     * @var string
     */
    public $ShDate;
    /**
     * The ShPlace
     *
     * @var string
     */
    public $ShPlace;
    /**
     * The ShTrans
     *
     * @var string
     */
    public $ShTrans;
    /**
     * The ShMeans
     *
     * @var string
     */
    public $ShMeans;
    /**
     * The ShDest
     *
     * @var string
     */
    public $ShDest;
    /**
     * The CondDel
     *
     * @var string
     */
    public $CondDel;
    /**
     * The CondPay
     *
     * @var string
     */
    public $CondPay;
    /**
     * The BankName
     *
     * @var string
     */
    public $BankName;
    /**
     * The BankSwift
     *
     * @var string
     */
    public $BankSwift;
    /**
     * The BankHolder
     *
     * @var string
     */
    public $BankHolder;
    /**
     * The BankIBAN
     *
     * @var string
     */
    public $BankIBAN;
    /**
     * The ITEMS
     *
     * @var array
     */
    public $ITEMS;
    /**
     * The VAT
     *
     * @var string
     */
    public $VAT;
    /**
     * The Netto
     *
     * @var string
     */
    public $Netto;
    /**
     * The Brutto
     *
     * @var string
     */
    public $Brutto;
    /**
     * The Note
     *
     * @var string
     */
    public $Note;
    /**
     * The DOCTPL
     *
     * @var array
     */
    public $DOCTPL;
    /**
     * The DOCTPL_CSS
     *
     * @var string
     */
    public $DOCTPL_CSS;
    /**
     * Constructor method for InvoiceFullInfo
     *
     * @see parent::__construct()
     *
     * @param string $_docNum          expect string
     * @param string $_docCode         expect string
     * @param string $_docName         expect string
     * @param string $_docType         expect string
     * @param string $_specDocType     expect string
     * @param string $_docDate         expect string
     * @param string $_docInvNum       expect string
     * @param string $_docAmount       expect string
     * @param string $_docPaid         expect string
     * @param string $_docCur          expect string
     * @param string $_paymentDate     expect string
     * @param string $_docContract     expect string
     * @param string $_docRegardingDoc expect string
     * @param string $_pNum            expect string
     * @param string $_pName           expect string
     * @param string $_pAddr           expect string
     * @param string $_pCity           expect string
     * @param string $_pZip            expect string
     * @param string $_pState          expect string
     * @param string $_pCountry        expect string
     * @param string $_pDanN           expect string
     * @param string $_cName           expect string
     * @param string $_cAddr           expect string
     * @param string $_cCity           expect string
     * @param string $_sName           expect string
     * @param string $_sAddr           expect string
     * @param string $_sCity           expect string
     * @param string $_sZip            expect string
     * @param string $_sCountry        expect string
     * @param string $_sDan            expect string
     * @param string $_shDate          expect string
     * @param string $_shPlace         expect string
     * @param string $_shTrans         expect string
     * @param string $_shMeans         expect string
     * @param string $_shDest          expect string
     * @param string $_condDel         expect string
     * @param string $_condPay         expect string
     * @param string $_bankName        expect string
     * @param string $_bankSwift       expect string
     * @param string $_bankHolder      expect string
     * @param string $_bankIBAN        expect string
     * @param array  $_iTEMS           expect array
     * @param string $_vAT             expect string
     * @param string $_netto           expect string
     * @param string $_brutto          expect string
     * @param string $_note            expect string
     * @param array  $_dOCTPL          expect array
     * @param string $_dOCTPL_CSS      expect string
     *
     * @return ColibriERPStructInvoiceFullInfo
     */
    public function __construct($_docNum = null,$_docCode = null,$_docName = null,$_docType = null,$_specDocType = null,$_docDate = null,$_docInvNum = null,$_docAmount = null,$_docPaid = null,$_docCur = null,$_paymentDate = null,$_docContract = null,$_docRegardingDoc = null,$_pNum = null,$_pName = null,$_pAddr = null,$_pCity = null,$_pZip = null,$_pState = null,$_pCountry = null,$_pDanN = null,$_cName = null,$_cAddr = null,$_cCity = null,$_sName = null,$_sAddr = null,$_sCity = null,$_sZip = null,$_sCountry = null,$_sDan = null,$_shDate = null,$_shPlace = null,$_shTrans = null,$_shMeans = null,$_shDest = null,$_condDel = null,$_condPay = null,$_bankName = null,$_bankSwift = null,$_bankHolder = null,$_bankIBAN = null,$_iTEMS = null,$_vAT = null,$_netto = null,$_brutto = null,$_note = null,$_dOCTPL = null,$_dOCTPL_CSS = null)
    {
        parent::__construct(array('DocNum'=>$_docNum,'DocCode'=>$_docCode,'DocName'=>$_docName,'DocType'=>$_docType,'specDocType'=>$_specDocType,'DocDate'=>$_docDate,'DocInvNum'=>$_docInvNum,'DocAmount'=>$_docAmount,'DocPaid'=>$_docPaid,'DocCur'=>$_docCur,'PaymentDate'=>$_paymentDate,'DocContract'=>$_docContract,'DocRegardingDoc'=>$_docRegardingDoc,'PNum'=>$_pNum,'PName'=>$_pName,'PAddr'=>$_pAddr,'PCity'=>$_pCity,'PZip'=>$_pZip,'PState'=>$_pState,'PCountry'=>$_pCountry,'PDanN'=>$_pDanN,'CName'=>$_cName,'CAddr'=>$_cAddr,'CCity'=>$_cCity,'SName'=>$_sName,'SAddr'=>$_sAddr,'SCity'=>$_sCity,'SZip'=>$_sZip,'SCountry'=>$_sCountry,'SDan'=>$_sDan,'ShDate'=>$_shDate,'ShPlace'=>$_shPlace,'ShTrans'=>$_shTrans,'ShMeans'=>$_shMeans,'ShDest'=>$_shDest,'CondDel'=>$_condDel,'CondPay'=>$_condPay,'BankName'=>$_bankName,'BankSwift'=>$_bankSwift,'BankHolder'=>$_bankHolder,'BankIBAN'=>$_bankIBAN,'ITEMS'=>$_iTEMS,'VAT'=>$_vAT,'Netto'=>$_netto,'Brutto'=>$_brutto,'Note'=>$_note,'DOCTPL'=>$_dOCTPL,'DOCTPL_CSS'=>$_dOCTPL_CSS), false);
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
     * Get DocName value
     *
     * @return string|null
     */
    public function getDocName()
    {
        return $this->DocName;
    }
    /**
     * Set DocName value
     *
     * @param string $_docName the DocName
     *
     * @return string
     */
    public function setDocName($_docName)
    {
        return ($this->DocName = $_docName);
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
     * Get specDocType value
     *
     * @return string|null
     */
    public function getSpecDocType()
    {
        return $this->specDocType;
    }
    /**
     * Set specDocType value
     *
     * @param string $_specDocType the specDocType
     *
     * @return string
     */
    public function setSpecDocType($_specDocType)
    {
        return ($this->specDocType = $_specDocType);
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
     * Get DocInvNum value
     *
     * @return string|null
     */
    public function getDocInvNum()
    {
        return $this->DocInvNum;
    }
    /**
     * Set DocInvNum value
     *
     * @param string $_docInvNum the DocInvNum
     *
     * @return string
     */
    public function setDocInvNum($_docInvNum)
    {
        return ($this->DocInvNum = $_docInvNum);
    }
    /**
     * Get DocAmount value
     *
     * @return string|null
     */
    public function getDocAmount()
    {
        return $this->DocAmount;
    }
    /**
     * Set DocAmount value
     *
     * @param string $_docAmount the DocAmount
     *
     * @return string
     */
    public function setDocAmount($_docAmount)
    {
        return ($this->DocAmount = $_docAmount);
    }
    /**
     * Get DocPaid value
     *
     * @return string|null
     */
    public function getDocPaid()
    {
        return $this->DocPaid;
    }
    /**
     * Set DocPaid value
     *
     * @param string $_docPaid the DocPaid
     *
     * @return string
     */
    public function setDocPaid($_docPaid)
    {
        return ($this->DocPaid = $_docPaid);
    }
    /**
     * Get DocCur value
     *
     * @return string|null
     */
    public function getDocCur()
    {
        return $this->DocCur;
    }
    /**
     * Set DocCur value
     *
     * @param string $_docCur the DocCur
     *
     * @return string
     */
    public function setDocCur($_docCur)
    {
        return ($this->DocCur = $_docCur);
    }
    /**
     * Get PaymentDate value
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
    /**
     * Set PaymentDate value
     *
     * @param string $_paymentDate the PaymentDate
     *
     * @return string
     */
    public function setPaymentDate($_paymentDate)
    {
        return ($this->PaymentDate = $_paymentDate);
    }
    /**
     * Get DocContract value
     *
     * @return string|null
     */
    public function getDocContract()
    {
        return $this->DocContract;
    }
    /**
     * Set DocContract value
     *
     * @param string $_docContract the DocContract
     *
     * @return string
     */
    public function setDocContract($_docContract)
    {
        return ($this->DocContract = $_docContract);
    }
    /**
     * Get DocRegardingDoc value
     *
     * @return string|null
     */
    public function getDocRegardingDoc()
    {
        return $this->DocRegardingDoc;
    }
    /**
     * Set DocRegardingDoc value
     *
     * @param string $_docRegardingDoc the DocRegardingDoc
     *
     * @return string
     */
    public function setDocRegardingDoc($_docRegardingDoc)
    {
        return ($this->DocRegardingDoc = $_docRegardingDoc);
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
     * Get PAddr value
     *
     * @return string|null
     */
    public function getPAddr()
    {
        return $this->PAddr;
    }
    /**
     * Set PAddr value
     *
     * @param string $_pAddr the PAddr
     *
     * @return string
     */
    public function setPAddr($_pAddr)
    {
        return ($this->PAddr = $_pAddr);
    }
    /**
     * Get PCity value
     *
     * @return string|null
     */
    public function getPCity()
    {
        return $this->PCity;
    }
    /**
     * Set PCity value
     *
     * @param string $_pCity the PCity
     *
     * @return string
     */
    public function setPCity($_pCity)
    {
        return ($this->PCity = $_pCity);
    }
    /**
     * Get PZip value
     *
     * @return string|null
     */
    public function getPZip()
    {
        return $this->PZip;
    }
    /**
     * Set PZip value
     *
     * @param string $_pZip the PZip
     *
     * @return string
     */
    public function setPZip($_pZip)
    {
        return ($this->PZip = $_pZip);
    }
    /**
     * Get PState value
     *
     * @return string|null
     */
    public function getPState()
    {
        return $this->PState;
    }
    /**
     * Set PState value
     *
     * @param string $_pState the PState
     *
     * @return string
     */
    public function setPState($_pState)
    {
        return ($this->PState = $_pState);
    }
    /**
     * Get PCountry value
     *
     * @return string|null
     */
    public function getPCountry()
    {
        return $this->PCountry;
    }
    /**
     * Set PCountry value
     *
     * @param string $_pCountry the PCountry
     *
     * @return string
     */
    public function setPCountry($_pCountry)
    {
        return ($this->PCountry = $_pCountry);
    }
    /**
     * Get PDanN value
     *
     * @return string|null
     */
    public function getPDanN()
    {
        return $this->PDanN;
    }
    /**
     * Set PDanN value
     *
     * @param string $_pDanN the PDanN
     *
     * @return string
     */
    public function setPDanN($_pDanN)
    {
        return ($this->PDanN = $_pDanN);
    }
    /**
     * Get CName value
     *
     * @return string|null
     */
    public function getCName()
    {
        return $this->CName;
    }
    /**
     * Set CName value
     *
     * @param string $_cName the CName
     *
     * @return string
     */
    public function setCName($_cName)
    {
        return ($this->CName = $_cName);
    }
    /**
     * Get CAddr value
     *
     * @return string|null
     */
    public function getCAddr()
    {
        return $this->CAddr;
    }
    /**
     * Set CAddr value
     *
     * @param string $_cAddr the CAddr
     *
     * @return string
     */
    public function setCAddr($_cAddr)
    {
        return ($this->CAddr = $_cAddr);
    }
    /**
     * Get CCity value
     *
     * @return string|null
     */
    public function getCCity()
    {
        return $this->CCity;
    }
    /**
     * Set CCity value
     *
     * @param string $_cCity the CCity
     *
     * @return string
     */
    public function setCCity($_cCity)
    {
        return ($this->CCity = $_cCity);
    }
    /**
     * Get SName value
     *
     * @return string|null
     */
    public function getSName()
    {
        return $this->SName;
    }
    /**
     * Set SName value
     *
     * @param string $_sName the SName
     *
     * @return string
     */
    public function setSName($_sName)
    {
        return ($this->SName = $_sName);
    }
    /**
     * Get SAddr value
     *
     * @return string|null
     */
    public function getSAddr()
    {
        return $this->SAddr;
    }
    /**
     * Set SAddr value
     *
     * @param string $_sAddr the SAddr
     *
     * @return string
     */
    public function setSAddr($_sAddr)
    {
        return ($this->SAddr = $_sAddr);
    }
    /**
     * Get SCity value
     *
     * @return string|null
     */
    public function getSCity()
    {
        return $this->SCity;
    }
    /**
     * Set SCity value
     *
     * @param string $_sCity the SCity
     *
     * @return string
     */
    public function setSCity($_sCity)
    {
        return ($this->SCity = $_sCity);
    }
    /**
     * Get SZip value
     *
     * @return string|null
     */
    public function getSZip()
    {
        return $this->SZip;
    }
    /**
     * Set SZip value
     *
     * @param string $_sZip the SZip
     *
     * @return string
     */
    public function setSZip($_sZip)
    {
        return ($this->SZip = $_sZip);
    }
    /**
     * Get SCountry value
     *
     * @return string|null
     */
    public function getSCountry()
    {
        return $this->SCountry;
    }
    /**
     * Set SCountry value
     *
     * @param string $_sCountry the SCountry
     *
     * @return string
     */
    public function setSCountry($_sCountry)
    {
        return ($this->SCountry = $_sCountry);
    }
    /**
     * Get SDan value
     *
     * @return string|null
     */
    public function getSDan()
    {
        return $this->SDan;
    }
    /**
     * Set SDan value
     *
     * @param string $_sDan the SDan
     *
     * @return string
     */
    public function setSDan($_sDan)
    {
        return ($this->SDan = $_sDan);
    }
    /**
     * Get ShDate value
     *
     * @return string|null
     */
    public function getShDate()
    {
        return $this->ShDate;
    }
    /**
     * Set ShDate value
     *
     * @param string $_shDate the ShDate
     *
     * @return string
     */
    public function setShDate($_shDate)
    {
        return ($this->ShDate = $_shDate);
    }
    /**
     * Get ShPlace value
     *
     * @return string|null
     */
    public function getShPlace()
    {
        return $this->ShPlace;
    }
    /**
     * Set ShPlace value
     *
     * @param string $_shPlace the ShPlace
     *
     * @return string
     */
    public function setShPlace($_shPlace)
    {
        return ($this->ShPlace = $_shPlace);
    }
    /**
     * Get ShTrans value
     *
     * @return string|null
     */
    public function getShTrans()
    {
        return $this->ShTrans;
    }
    /**
     * Set ShTrans value
     *
     * @param string $_shTrans the ShTrans
     *
     * @return string
     */
    public function setShTrans($_shTrans)
    {
        return ($this->ShTrans = $_shTrans);
    }
    /**
     * Get ShMeans value
     *
     * @return string|null
     */
    public function getShMeans()
    {
        return $this->ShMeans;
    }
    /**
     * Set ShMeans value
     *
     * @param string $_shMeans the ShMeans
     *
     * @return string
     */
    public function setShMeans($_shMeans)
    {
        return ($this->ShMeans = $_shMeans);
    }
    /**
     * Get ShDest value
     *
     * @return string|null
     */
    public function getShDest()
    {
        return $this->ShDest;
    }
    /**
     * Set ShDest value
     *
     * @param string $_shDest the ShDest
     *
     * @return string
     */
    public function setShDest($_shDest)
    {
        return ($this->ShDest = $_shDest);
    }
    /**
     * Get CondDel value
     *
     * @return string|null
     */
    public function getCondDel()
    {
        return $this->CondDel;
    }
    /**
     * Set CondDel value
     *
     * @param string $_condDel the CondDel
     *
     * @return string
     */
    public function setCondDel($_condDel)
    {
        return ($this->CondDel = $_condDel);
    }
    /**
     * Get CondPay value
     *
     * @return string|null
     */
    public function getCondPay()
    {
        return $this->CondPay;
    }
    /**
     * Set CondPay value
     *
     * @param string $_condPay the CondPay
     *
     * @return string
     */
    public function setCondPay($_condPay)
    {
        return ($this->CondPay = $_condPay);
    }
    /**
     * Get BankName value
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->BankName;
    }
    /**
     * Set BankName value
     *
     * @param string $_bankName the BankName
     *
     * @return string
     */
    public function setBankName($_bankName)
    {
        return ($this->BankName = $_bankName);
    }
    /**
     * Get BankSwift value
     *
     * @return string|null
     */
    public function getBankSwift()
    {
        return $this->BankSwift;
    }
    /**
     * Set BankSwift value
     *
     * @param string $_bankSwift the BankSwift
     *
     * @return string
     */
    public function setBankSwift($_bankSwift)
    {
        return ($this->BankSwift = $_bankSwift);
    }
    /**
     * Get BankHolder value
     *
     * @return string|null
     */
    public function getBankHolder()
    {
        return $this->BankHolder;
    }
    /**
     * Set BankHolder value
     *
     * @param string $_bankHolder the BankHolder
     *
     * @return string
     */
    public function setBankHolder($_bankHolder)
    {
        return ($this->BankHolder = $_bankHolder);
    }
    /**
     * Get BankIBAN value
     *
     * @return string|null
     */
    public function getBankIBAN()
    {
        return $this->BankIBAN;
    }
    /**
     * Set BankIBAN value
     *
     * @param string $_bankIBAN the BankIBAN
     *
     * @return string
     */
    public function setBankIBAN($_bankIBAN)
    {
        return ($this->BankIBAN = $_bankIBAN);
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
     * Get VAT value
     *
     * @return string|null
     */
    public function getVAT()
    {
        return $this->VAT;
    }
    /**
     * Set VAT value
     *
     * @param string $_vAT the VAT
     *
     * @return string
     */
    public function setVAT($_vAT)
    {
        return ($this->VAT = $_vAT);
    }
    /**
     * Get Netto value
     *
     * @return string|null
     */
    public function getNetto()
    {
        return $this->Netto;
    }
    /**
     * Set Netto value
     *
     * @param string $_netto the Netto
     *
     * @return string
     */
    public function setNetto($_netto)
    {
        return ($this->Netto = $_netto);
    }
    /**
     * Get Brutto value
     *
     * @return string|null
     */
    public function getBrutto()
    {
        return $this->Brutto;
    }
    /**
     * Set Brutto value
     *
     * @param string $_brutto the Brutto
     *
     * @return string
     */
    public function setBrutto($_brutto)
    {
        return ($this->Brutto = $_brutto);
    }
    /**
     * Get Note value
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     *
     * @param string $_note the Note
     *
     * @return string
     */
    public function setNote($_note)
    {
        return ($this->Note = $_note);
    }
    /**
     * Get DOCTPL value
     *
     * @return array|null
     */
    public function getDOCTPL()
    {
        return $this->DOCTPL;
    }
    /**
     * Set DOCTPL value
     *
     * @param array $_dOCTPL the DOCTPL
     *
     * @return array
     */
    public function setDOCTPL($_dOCTPL)
    {
        return ($this->DOCTPL = $_dOCTPL);
    }
    /**
     * Get DOCTPL_CSS value
     *
     * @return string|null
     */
    public function getDOCTPL_CSS()
    {
        return $this->DOCTPL_CSS;
    }
    /**
     * Set DOCTPL_CSS value
     *
     * @param string $_dOCTPL_CSS the DOCTPL_CSS
     *
     * @return string
     */
    public function setDOCTPL_CSS($_dOCTPL_CSS)
    {
        return ($this->DOCTPL_CSS = $_dOCTPL_CSS);
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
     * @return ColibriERPStructInvoiceFullInfo
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
