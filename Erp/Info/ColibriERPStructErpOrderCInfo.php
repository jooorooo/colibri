<?php
/**
 * File for class ColibriERPStructErpOrderCInfo
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
 * This class stands for ColibriERPStructErpOrderCInfo
 *  originally named erpOrderCInfo
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
class ColibriERPStructErpOrderCInfo extends ColibriERPWsdlClass
{
    /**
     * The idOrderC
     * - doc : ERP internal order number
     *
     * @var integer
     */
    public $idOrderC;
    /**
     * The OrderNum
     * - doc : Order Number
     *
     * @var string
     */
    public $OrderNum;
    /**
     * The OrderDate
     * - doc : Order Date
     *
     * @var date
     */
    public $OrderDate;
    /**
     * The POrderNum
     * - doc : Partner's system Order Number
     *
     * @var string
     */
    public $POrderNum;
    /**
     * The POrderDate
     * - doc : Partner's system Order Date
     *
     * @var date
     */
    public $POrderDate;
    /**
     * The idBranch
     * - doc : ERP internal company branch number
     *
     * @var integer
     */
    public $idBranch;
    /**
     * The BNum
     * - doc : Company branch number
     *
     * @var string
     */
    public $BNum;
    /**
     * The BName
     * - doc : Company branch name
     *
     * @var string
     */
    public $BName;
    /**
     * The SNum
     * - doc : ERP internal store number
     *
     * @var integer
     */
    public $SNum;
    /**
     * The SNumber
     * - doc : Store number
     *
     * @var string
     */
    public $SNumber;
    /**
     * The SName
     * - doc : Store name
     *
     * @var string
     */
    public $SName;
    /**
     * The idPartner
     * - doc : ERP internal partner number
     *
     * @var integer
     */
    public $idPartner;
    /**
     * The PNum
     * - doc : Partner number
     *
     * @var string
     */
    public $PNum;
    /**
     * The PName
     * - doc : Partner name
     *
     * @var string
     */
    public $PName;
    /**
     * The idPBranch
     * - doc : ERP internal partner branch number
     *
     * @var integer
     */
    public $idPBranch;
    /**
     * The PBNum
     * - doc : Partner branch number
     *
     * @var string
     */
    public $PBNum;
    /**
     * The PBName
     * - doc : Partner branch name
     *
     * @var string
     */
    public $PBName;
    /**
     * The SAddrOverride
     * - doc : Shipping address information differs from partners
     *
     * @var integer
     */
    public $SAddrOverride;
    /**
     * The SPName
     * - doc : Shipping address information
     *
     * @var string
     */
    public $SPName;
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
     * The SCPerson
     *
     * @var string
     */
    public $SCPerson;
    /**
     * The SPhone
     *
     * @var string
     */
    public $SPhone;
    /**
     * The Semail
     *
     * @var string
     */
    public $Semail;
    /**
     * The SCountry
     * - doc : Shipping address country name
     *
     * @var string
     */
    public $SCountry;
    /**
     * The curCode
     * - doc : Partner's system order currency
     *
     * @var string
     */
    public $curCode;
    /**
     * The dcmRate
     * - doc : Currency rate (partner currency)/(base currency)
     *
     * @var double
     */
    public $dcmRate;
    /**
     * The OStatus
     *
     * @var string
     */
    public $OStatus;
    /**
     * The chrShippingMethod
     *
     * @var string
     */
    public $chrShippingMethod;
    /**
     * The ShippingDate
     * - doc : Estimated shipping date
     *
     * @var date
     */
    public $ShippingDate;
    /**
     * The Transport
     * - doc : Shipping/transportation tracking information
     *
     * @var string
     */
    public $Transport;
    /**
     * The chrPaymentMethod
     *
     * @var string
     */
    public $chrPaymentMethod;
    /**
     * The PaymentDate
     * - doc : Estimated payment date
     *
     * @var date
     */
    public $PaymentDate;
    /**
     * The Descr
     *
     * @var string
     */
    public $Descr;
    /**
     * The Notes
     *
     * @var string
     */
    public $Notes;
    /**
     * The OSuma
     * - doc : Order total sum in order's currency
     *
     * @var double
     */
    public $OSuma;
    /**
     * The OSumaBGL
     * - doc : Order total sum in base currency
     *
     * @var double
     */
    public $OSumaBGL;
    /**
     * The OSumaDDS
     * - doc : 'OSuma' plus sales tax
     *
     * @var double
     */
    public $OSumaDDS;
    /**
     * The OSumaDDSBGL
     * - doc : 'OSumaBGL' plus sales tax
     *
     * @var double
     */
    public $OSumaDDSBGL;
    /**
     * The dtCreated
     *
     * @var dateTime
     */
    public $dtCreated;
    /**
     * The dtModified
     *
     * @var dateTime
     */
    public $dtModified;
    /**
     * The ITEMS
     * - doc : Order items list
     *
     * @var array
     */
    public $ITEMS;
    /**
     * The PDOC
     * - doc : Invoices list (relates with ITEMS.QtyDelivered)
     *
     * @var array
     */
    public $PDOC;
    /**
     * The SDOC
     * - doc : Store documents list (relates with ITEMS.QtyReceived)
     *
     * @var array
     */
    public $SDOC;
    /**
     * The STATUS
     * - doc : Order status list
     *
     * @var array
     */
    public $STATUS;
    /**
     * Constructor method for erpOrderCInfo
     *
     * @see parent::__construct()
     *
     * @param integer  $_idOrderC          expect integer
     * @param string   $_orderNum          expect string
     * @param date     $_orderDate         expect date
     * @param string   $_pOrderNum         expect string
     * @param date     $_pOrderDate        expect date
     * @param integer  $_idBranch          expect integer
     * @param string   $_bNum              expect string
     * @param string   $_bName             expect string
     * @param integer  $_sNum              expect integer
     * @param string   $_sNumber           expect string
     * @param string   $_sName             expect string
     * @param integer  $_idPartner         expect integer
     * @param string   $_pNum              expect string
     * @param string   $_pName             expect string
     * @param integer  $_idPBranch         expect integer
     * @param string   $_pBNum             expect string
     * @param string   $_pBName            expect string
     * @param integer  $_sAddrOverride     expect integer
     * @param string   $_sPName            expect string
     * @param string   $_sAddr             expect string
     * @param string   $_sCity             expect string
     * @param string   $_sZip              expect string
     * @param string   $_sCPerson          expect string
     * @param string   $_sPhone            expect string
     * @param string   $_semail            expect string
     * @param string   $_sCountry          expect string
     * @param string   $_curCode           expect string
     * @param double   $_dcmRate           expect double
     * @param string   $_oStatus           expect string
     * @param string   $_chrShippingMethod expect string
     * @param date     $_shippingDate      expect date
     * @param string   $_transport         expect string
     * @param string   $_chrPaymentMethod  expect string
     * @param date     $_paymentDate       expect date
     * @param string   $_descr             expect string
     * @param string   $_notes             expect string
     * @param double   $_oSuma             expect double
     * @param double   $_oSumaBGL          expect double
     * @param double   $_oSumaDDS          expect double
     * @param double   $_oSumaDDSBGL       expect double
     * @param dateTime $_dtCreated         expect dateTime
     * @param dateTime $_dtModified        expect dateTime
     * @param array    $_iTEMS             expect array
     * @param array    $_pDOC              expect array
     * @param array    $_sDOC              expect array
     * @param array    $_sTATUS            expect array
     *
     * @return ColibriERPStructErpOrderCInfo
     */
    public function __construct($_idOrderC = null,$_orderNum = null,$_orderDate = null,$_pOrderNum = null,$_pOrderDate = null,$_idBranch = null,$_bNum = null,$_bName = null,$_sNum = null,$_sNumber = null,$_sName = null,$_idPartner = null,$_pNum = null,$_pName = null,$_idPBranch = null,$_pBNum = null,$_pBName = null,$_sAddrOverride = null,$_sPName = null,$_sAddr = null,$_sCity = null,$_sZip = null,$_sCPerson = null,$_sPhone = null,$_semail = null,$_sCountry = null,$_curCode = null,$_dcmRate = null,$_oStatus = null,$_chrShippingMethod = null,$_shippingDate = null,$_transport = null,$_chrPaymentMethod = null,$_paymentDate = null,$_descr = null,$_notes = null,$_oSuma = null,$_oSumaBGL = null,$_oSumaDDS = null,$_oSumaDDSBGL = null,$_dtCreated = null,$_dtModified = null,$_iTEMS = null,$_pDOC = null,$_sDOC = null,$_sTATUS = null)
    {
        parent::__construct(array('idOrderC'=>$_idOrderC,'OrderNum'=>$_orderNum,'OrderDate'=>$_orderDate,'POrderNum'=>$_pOrderNum,'POrderDate'=>$_pOrderDate,'idBranch'=>$_idBranch,'BNum'=>$_bNum,'BName'=>$_bName,'SNum'=>$_sNum,'SNumber'=>$_sNumber,'SName'=>$_sName,'idPartner'=>$_idPartner,'PNum'=>$_pNum,'PName'=>$_pName,'idPBranch'=>$_idPBranch,'PBNum'=>$_pBNum,'PBName'=>$_pBName,'SAddrOverride'=>$_sAddrOverride,'SPName'=>$_sPName,'SAddr'=>$_sAddr,'SCity'=>$_sCity,'SZip'=>$_sZip,'SCPerson'=>$_sCPerson,'SPhone'=>$_sPhone,'Semail'=>$_semail,'SCountry'=>$_sCountry,'curCode'=>$_curCode,'dcmRate'=>$_dcmRate,'OStatus'=>$_oStatus,'chrShippingMethod'=>$_chrShippingMethod,'ShippingDate'=>$_shippingDate,'Transport'=>$_transport,'chrPaymentMethod'=>$_chrPaymentMethod,'PaymentDate'=>$_paymentDate,'Descr'=>$_descr,'Notes'=>$_notes,'OSuma'=>$_oSuma,'OSumaBGL'=>$_oSumaBGL,'OSumaDDS'=>$_oSumaDDS,'OSumaDDSBGL'=>$_oSumaDDSBGL,'dtCreated'=>$_dtCreated,'dtModified'=>$_dtModified,'ITEMS'=>$_iTEMS,'PDOC'=>$_pDOC,'SDOC'=>$_sDOC,'STATUS'=>$_sTATUS), false);
    }
    /**
     * Get idOrderC value
     *
     * @return integer|null
     */
    public function getIdOrderC()
    {
        return $this->idOrderC;
    }
    /**
     * Set idOrderC value
     *
     * @param integer $_idOrderC the idOrderC
     *
     * @return integer
     */
    public function setIdOrderC($_idOrderC)
    {
        return ($this->idOrderC = $_idOrderC);
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
     * Get OrderDate value
     *
     * @return date|null
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }
    /**
     * Set OrderDate value
     *
     * @param date $_orderDate the OrderDate
     *
     * @return date
     */
    public function setOrderDate($_orderDate)
    {
        return ($this->OrderDate = $_orderDate);
    }
    /**
     * Get POrderNum value
     *
     * @return string|null
     */
    public function getPOrderNum()
    {
        return $this->POrderNum;
    }
    /**
     * Set POrderNum value
     *
     * @param string $_pOrderNum the POrderNum
     *
     * @return string
     */
    public function setPOrderNum($_pOrderNum)
    {
        return ($this->POrderNum = $_pOrderNum);
    }
    /**
     * Get POrderDate value
     *
     * @return date|null
     */
    public function getPOrderDate()
    {
        return $this->POrderDate;
    }
    /**
     * Set POrderDate value
     *
     * @param date $_pOrderDate the POrderDate
     *
     * @return date
     */
    public function setPOrderDate($_pOrderDate)
    {
        return ($this->POrderDate = $_pOrderDate);
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
     * Get BName value
     *
     * @return string|null
     */
    public function getBName()
    {
        return $this->BName;
    }
    /**
     * Set BName value
     *
     * @param string $_bName the BName
     *
     * @return string
     */
    public function setBName($_bName)
    {
        return ($this->BName = $_bName);
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
     * Get idPBranch value
     *
     * @return integer|null
     */
    public function getIdPBranch()
    {
        return $this->idPBranch;
    }
    /**
     * Set idPBranch value
     *
     * @param integer $_idPBranch the idPBranch
     *
     * @return integer
     */
    public function setIdPBranch($_idPBranch)
    {
        return ($this->idPBranch = $_idPBranch);
    }
    /**
     * Get PBNum value
     *
     * @return string|null
     */
    public function getPBNum()
    {
        return $this->PBNum;
    }
    /**
     * Set PBNum value
     *
     * @param string $_pBNum the PBNum
     *
     * @return string
     */
    public function setPBNum($_pBNum)
    {
        return ($this->PBNum = $_pBNum);
    }
    /**
     * Get PBName value
     *
     * @return string|null
     */
    public function getPBName()
    {
        return $this->PBName;
    }
    /**
     * Set PBName value
     *
     * @param string $_pBName the PBName
     *
     * @return string
     */
    public function setPBName($_pBName)
    {
        return ($this->PBName = $_pBName);
    }
    /**
     * Get SAddrOverride value
     *
     * @return integer|null
     */
    public function getSAddrOverride()
    {
        return $this->SAddrOverride;
    }
    /**
     * Set SAddrOverride value
     *
     * @param integer $_sAddrOverride the SAddrOverride
     *
     * @return integer
     */
    public function setSAddrOverride($_sAddrOverride)
    {
        return ($this->SAddrOverride = $_sAddrOverride);
    }
    /**
     * Get SPName value
     *
     * @return string|null
     */
    public function getSPName()
    {
        return $this->SPName;
    }
    /**
     * Set SPName value
     *
     * @param string $_sPName the SPName
     *
     * @return string
     */
    public function setSPName($_sPName)
    {
        return ($this->SPName = $_sPName);
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
     * Get SCPerson value
     *
     * @return string|null
     */
    public function getSCPerson()
    {
        return $this->SCPerson;
    }
    /**
     * Set SCPerson value
     *
     * @param string $_sCPerson the SCPerson
     *
     * @return string
     */
    public function setSCPerson($_sCPerson)
    {
        return ($this->SCPerson = $_sCPerson);
    }
    /**
     * Get SPhone value
     *
     * @return string|null
     */
    public function getSPhone()
    {
        return $this->SPhone;
    }
    /**
     * Set SPhone value
     *
     * @param string $_sPhone the SPhone
     *
     * @return string
     */
    public function setSPhone($_sPhone)
    {
        return ($this->SPhone = $_sPhone);
    }
    /**
     * Get Semail value
     *
     * @return string|null
     */
    public function getSemail()
    {
        return $this->Semail;
    }
    /**
     * Set Semail value
     *
     * @param string $_semail the Semail
     *
     * @return string
     */
    public function setSemail($_semail)
    {
        return ($this->Semail = $_semail);
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
     * @return double|null
     */
    public function getDcmRate()
    {
        return $this->dcmRate;
    }
    /**
     * Set dcmRate value
     *
     * @param double $_dcmRate the dcmRate
     *
     * @return double
     */
    public function setDcmRate($_dcmRate)
    {
        return ($this->dcmRate = $_dcmRate);
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
     * Get chrShippingMethod value
     *
     * @return string|null
     */
    public function getChrShippingMethod()
    {
        return $this->chrShippingMethod;
    }
    /**
     * Set chrShippingMethod value
     *
     * @param string $_chrShippingMethod the chrShippingMethod
     *
     * @return string
     */
    public function setChrShippingMethod($_chrShippingMethod)
    {
        return ($this->chrShippingMethod = $_chrShippingMethod);
    }
    /**
     * Get ShippingDate value
     *
     * @return date|null
     */
    public function getShippingDate()
    {
        return $this->ShippingDate;
    }
    /**
     * Set ShippingDate value
     *
     * @param date $_shippingDate the ShippingDate
     *
     * @return date
     */
    public function setShippingDate($_shippingDate)
    {
        return ($this->ShippingDate = $_shippingDate);
    }
    /**
     * Get Transport value
     *
     * @return string|null
     */
    public function getTransport()
    {
        return $this->Transport;
    }
    /**
     * Set Transport value
     *
     * @param string $_transport the Transport
     *
     * @return string
     */
    public function setTransport($_transport)
    {
        return ($this->Transport = $_transport);
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
     * Get PaymentDate value
     *
     * @return date|null
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
    /**
     * Set PaymentDate value
     *
     * @param date $_paymentDate the PaymentDate
     *
     * @return date
     */
    public function setPaymentDate($_paymentDate)
    {
        return ($this->PaymentDate = $_paymentDate);
    }
    /**
     * Get Descr value
     *
     * @return string|null
     */
    public function getDescr()
    {
        return $this->Descr;
    }
    /**
     * Set Descr value
     *
     * @param string $_descr the Descr
     *
     * @return string
     */
    public function setDescr($_descr)
    {
        return ($this->Descr = $_descr);
    }
    /**
     * Get Notes value
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     *
     * @param string $_notes the Notes
     *
     * @return string
     */
    public function setNotes($_notes)
    {
        return ($this->Notes = $_notes);
    }
    /**
     * Get OSuma value
     *
     * @return double|null
     */
    public function getOSuma()
    {
        return $this->OSuma;
    }
    /**
     * Set OSuma value
     *
     * @param double $_oSuma the OSuma
     *
     * @return double
     */
    public function setOSuma($_oSuma)
    {
        return ($this->OSuma = $_oSuma);
    }
    /**
     * Get OSumaBGL value
     *
     * @return double|null
     */
    public function getOSumaBGL()
    {
        return $this->OSumaBGL;
    }
    /**
     * Set OSumaBGL value
     *
     * @param double $_oSumaBGL the OSumaBGL
     *
     * @return double
     */
    public function setOSumaBGL($_oSumaBGL)
    {
        return ($this->OSumaBGL = $_oSumaBGL);
    }
    /**
     * Get OSumaDDS value
     *
     * @return double|null
     */
    public function getOSumaDDS()
    {
        return $this->OSumaDDS;
    }
    /**
     * Set OSumaDDS value
     *
     * @param double $_oSumaDDS the OSumaDDS
     *
     * @return double
     */
    public function setOSumaDDS($_oSumaDDS)
    {
        return ($this->OSumaDDS = $_oSumaDDS);
    }
    /**
     * Get OSumaDDSBGL value
     *
     * @return double|null
     */
    public function getOSumaDDSBGL()
    {
        return $this->OSumaDDSBGL;
    }
    /**
     * Set OSumaDDSBGL value
     *
     * @param double $_oSumaDDSBGL the OSumaDDSBGL
     *
     * @return double
     */
    public function setOSumaDDSBGL($_oSumaDDSBGL)
    {
        return ($this->OSumaDDSBGL = $_oSumaDDSBGL);
    }
    /**
     * Get dtCreated value
     *
     * @return dateTime|null
     */
    public function getDtCreated()
    {
        return $this->dtCreated;
    }
    /**
     * Set dtCreated value
     *
     * @param dateTime $_dtCreated the dtCreated
     *
     * @return dateTime
     */
    public function setDtCreated($_dtCreated)
    {
        return ($this->dtCreated = $_dtCreated);
    }
    /**
     * Get dtModified value
     *
     * @return dateTime|null
     */
    public function getDtModified()
    {
        return $this->dtModified;
    }
    /**
     * Set dtModified value
     *
     * @param dateTime $_dtModified the dtModified
     *
     * @return dateTime
     */
    public function setDtModified($_dtModified)
    {
        return ($this->dtModified = $_dtModified);
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
     * Get PDOC value
     *
     * @return array|null
     */
    public function getPDOC()
    {
        return $this->PDOC;
    }
    /**
     * Set PDOC value
     *
     * @param array $_pDOC the PDOC
     *
     * @return array
     */
    public function setPDOC($_pDOC)
    {
        return ($this->PDOC = $_pDOC);
    }
    /**
     * Get SDOC value
     *
     * @return array|null
     */
    public function getSDOC()
    {
        return $this->SDOC;
    }
    /**
     * Set SDOC value
     *
     * @param array $_sDOC the SDOC
     *
     * @return array
     */
    public function setSDOC($_sDOC)
    {
        return ($this->SDOC = $_sDOC);
    }
    /**
     * Get STATUS value
     *
     * @return array|null
     */
    public function getSTATUS()
    {
        return $this->STATUS;
    }
    /**
     * Set STATUS value
     *
     * @param array $_sTATUS the STATUS
     *
     * @return array
     */
    public function setSTATUS($_sTATUS)
    {
        return ($this->STATUS = $_sTATUS);
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
     * @return ColibriERPStructErpOrderCInfo
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
