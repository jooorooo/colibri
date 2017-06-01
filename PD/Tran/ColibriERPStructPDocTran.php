<?php
/**
 * File for class ColibriERPStructPDocTran
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
 * This class stands for ColibriERPStructPDocTran
 *  originally named pDocTran
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
class ColibriERPStructPDocTran extends ColibriERPWsdlClass
{
    /**
     * The idPDoc
     *
     * @var integer
     */
    public $idPDoc;
    /**
     * The SNum
     *
     * @var integer
     */
    public $SNum;
    /**
     * The InSyncS
     *
     * @var integer
     */
    public $InSyncS;
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
     * The idPDocRef
     *
     * @var integer
     */
    public $idPDocRef;
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
     * The pType
     *
     * @var string
     */
    public $pType;
    /**
     * The PaNum
     *
     * @var string
     */
    public $PaNum;
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
     * The PDanN
     *
     * @var string
     */
    public $PDanN;
    /**
     * The PDanR
     *
     * @var string
     */
    public $PDanR;
    /**
     * The PBulStat
     *
     * @var string
     */
    public $PBulStat;
    /**
     * The PBankAN
     *
     * @var string
     */
    public $PBankAN;
    /**
     * The PBankCode
     *
     * @var string
     */
    public $PBankCode;
    /**
     * The PBank
     *
     * @var string
     */
    public $PBank;
    /**
     * The PBankAddr
     *
     * @var string
     */
    public $PBankAddr;
    /**
     * The PBankANVAT
     *
     * @var string
     */
    public $PBankANVAT;
    /**
     * The PBankCodeVAT
     *
     * @var string
     */
    public $PBankCodeVAT;
    /**
     * The PBankVAT
     *
     * @var string
     */
    public $PBankVAT;
    /**
     * The PBankAddrVAT
     *
     * @var string
     */
    public $PBankAddrVAT;
    /**
     * The PMOL
     *
     * @var string
     */
    public $PMOL;
    /**
     * The PMOLPassport
     *
     * @var string
     */
    public $PMOLPassport;
    /**
     * The shopperLevel
     *
     * @var integer
     */
    public $shopperLevel;
    /**
     * The DiscountPerc
     *
     * @var double
     */
    public $DiscountPerc;
    /**
     * The idBranch
     *
     * @var integer
     */
    public $idBranch;
    /**
     * The chrBranchName
     *
     * @var string
     */
    public $chrBranchName;
    /**
     * The BAddr
     *
     * @var string
     */
    public $BAddr;
    /**
     * The BCity
     *
     * @var string
     */
    public $BCity;
    /**
     * The BDanN
     *
     * @var string
     */
    public $BDanN;
    /**
     * The BDanR
     *
     * @var string
     */
    public $BDanR;
    /**
     * The BBulStat
     *
     * @var string
     */
    public $BBulStat;
    /**
     * The BMOL
     *
     * @var string
     */
    public $BMOL;
    /**
     * The BMOLPassport
     *
     * @var string
     */
    public $BMOLPassport;
    /**
     * The idGeoRegion
     *
     * @var integer
     */
    public $idGeoRegion;
    /**
     * The AdvancePay
     *
     * @var integer
     */
    public $AdvancePay;
    /**
     * The chrPaymentMethod
     *
     * @var string
     */
    public $chrPaymentMethod;
    /**
     * The DSumaBase
     *
     * @var double
     */
    public $DSumaBase;
    /**
     * The DSuma
     *
     * @var double
     */
    public $DSuma;
    /**
     * The DSumaBaseBGL
     *
     * @var double
     */
    public $DSumaBaseBGL;
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
     * The DSSumaDDS
     *
     * @var double
     */
    public $DSSumaDDS;
    /**
     * The DSumaDDSBGL
     *
     * @var double
     */
    public $DSumaDDSBGL;
    /**
     * The DSSumaDDSBGL
     *
     * @var double
     */
    public $DSSumaDDSBGL;
    /**
     * The DSumaNoTaxed
     *
     * @var double
     */
    public $DSumaNoTaxed;
    /**
     * The DSumaTaxed20
     *
     * @var double
     */
    public $DSumaTaxed20;
    /**
     * The DSumaDDS20
     *
     * @var double
     */
    public $DSumaDDS20;
    /**
     * The DSumaTaxed7
     *
     * @var double
     */
    public $DSumaTaxed7;
    /**
     * The DSumaDDS7
     *
     * @var double
     */
    public $DSumaDDS7;
    /**
     * The DSumaUSL
     *
     * @var double
     */
    public $DSumaUSL;
    /**
     * The DSumaDDSUSL
     *
     * @var double
     */
    public $DSumaDDSUSL;
    /**
     * The curCode
     *
     * @var string
     */
    public $curCode;
    /**
     * The dcmRate
     *
     * @var double
     */
    public $dcmRate;
    /**
     * The dcmRateC
     *
     * @var double
     */
    public $dcmRateC;
    /**
     * The BCurRateDiff
     *
     * @var double
     */
    public $BCurRateDiff;
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
     * The EaNum
     *
     * @var string
     */
    public $EaNum;
    /**
     * The idDealKind
     *
     * @var string
     */
    public $idDealKind;
    /**
     * The DealEntity
     *
     * @var string
     */
    public $DealEntity;
    /**
     * The DealReason
     *
     * @var string
     */
    public $DealReason;
    /**
     * The DealPlace
     *
     * @var string
     */
    public $DealPlace;
    /**
     * The ByContract
     *
     * @var string
     */
    public $ByContract;
    /**
     * The SRecvD
     *
     * @var date
     */
    public $SRecvD;
    /**
     * The SRecvFrom
     *
     * @var string
     */
    public $SRecvFrom;
    /**
     * The SRecvPassport
     *
     * @var string
     */
    public $SRecvPassport;
    /**
     * The AuthorityN
     *
     * @var string
     */
    public $AuthorityN;
    /**
     * The AuthorityD
     *
     * @var date
     */
    public $AuthorityD;
    /**
     * The Transport
     *
     * @var string
     */
    public $Transport;
    /**
     * The Note
     *
     * @var base64Binary
     */
    public $Note;
    /**
     * The DocStatus
     *
     * @var string
     */
    public $DocStatus;
    /**
     * The idDStatus
     *
     * @var integer
     */
    public $idDStatus;
    /**
     * The LockStatus
     *
     * @var string
     */
    public $LockStatus;
    /**
     * The IStatus
     *
     * @var integer
     */
    public $IStatus;
    /**
     * The BAccID
     *
     * @var string
     */
    public $BAccID;
    /**
     * The PaymentDate
     *
     * @var date
     */
    public $PaymentDate;
    /**
     * The DaysToPayment
     *
     * @var integer
     */
    public $DaysToPayment;
    /**
     * The DeliverDate
     *
     * @var date
     */
    public $DeliverDate;
    /**
     * The CName
     *
     * @var string
     */
    public $CName;
    /**
     * The CMOL
     *
     * @var string
     */
    public $CMOL;
    /**
     * The CAddress
     *
     * @var string
     */
    public $CAddress;
    /**
     * The CCity
     *
     * @var string
     */
    public $CCity;
    /**
     * The CDanN
     *
     * @var string
     */
    public $CDanN;
    /**
     * The CDanR
     *
     * @var string
     */
    public $CDanR;
    /**
     * The CBulStat
     *
     * @var string
     */
    public $CBulStat;
    /**
     * The idCBranch
     *
     * @var integer
     */
    public $idCBranch;
    /**
     * The CBName
     *
     * @var string
     */
    public $CBName;
    /**
     * The CBMOL
     *
     * @var string
     */
    public $CBMOL;
    /**
     * The CBAddress
     *
     * @var string
     */
    public $CBAddress;
    /**
     * The CBCity
     *
     * @var string
     */
    public $CBCity;
    /**
     * The CBDanN
     *
     * @var string
     */
    public $CBDanN;
    /**
     * The CBDanR
     *
     * @var string
     */
    public $CBDanR;
    /**
     * The CBBulStat
     *
     * @var string
     */
    public $CBBulStat;
    /**
     * The idCBank
     *
     * @var integer
     */
    public $idCBank;
    /**
     * The CBankAN
     *
     * @var string
     */
    public $CBankAN;
    /**
     * The CBankCode
     *
     * @var string
     */
    public $CBankCode;
    /**
     * The CBank
     *
     * @var string
     */
    public $CBank;
    /**
     * The CBankAddr
     *
     * @var string
     */
    public $CBankAddr;
    /**
     * The idCBankVAT
     *
     * @var integer
     */
    public $idCBankVAT;
    /**
     * The CBankANVAT
     *
     * @var string
     */
    public $CBankANVAT;
    /**
     * The CBankCodeVAT
     *
     * @var string
     */
    public $CBankCodeVAT;
    /**
     * The CBankVAT
     *
     * @var string
     */
    public $CBankVAT;
    /**
     * The CBankAddrVAT
     *
     * @var string
     */
    public $CBankAddrVAT;
    /**
     * The FPData
     *
     * @var base64Binary
     */
    public $FPData;
    /**
     * The idUserDeal
     *
     * @var integer
     */
    public $idUserDeal;
    /**
     * The fRegNum
     *
     * @var string
     */
    public $fRegNum;
    /**
     * The idUserC
     *
     * @var integer
     */
    public $idUserC;
    /**
     * The idUserM
     *
     * @var integer
     */
    public $idUserM;
    /**
     * The idGroupC
     *
     * @var integer
     */
    public $idGroupC;
    /**
     * The idGroupM
     *
     * @var integer
     */
    public $idGroupM;
    /**
     * The idUserO
     *
     * @var integer
     */
    public $idUserO;
    /**
     * The idGroupO
     *
     * @var integer
     */
    public $idGroupO;
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
     * The incotermCode
     *
     * @var string
     */
    public $incotermCode;
    /**
     * The PNum
     *
     * @var string
     */
    public $PNum;
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
     * The BGLN
     *
     * @var string
     */
    public $BGLN;
    /**
     * The CBNum
     *
     * @var string
     */
    public $CBNum;
    /**
     * The CBGLN
     *
     * @var string
     */
    public $CBGLN;
    /**
     * The ITEMS
     *
     * @var array
     */
    public $ITEMS;
    /**
     * The PITEMS
     *
     * @var array
     */
    public $PITEMS;
    /**
     * Constructor method for pDocTran
     *
     * @see parent::__construct()
     *
     * @param integer      $_idPDoc           expect integer
     * @param integer      $_sNum             expect integer
     * @param integer      $_inSyncS          expect integer
     * @param string       $_docCode          expect string
     * @param string       $_docNum           expect string
     * @param string       $_docType          expect string
     * @param string       $_specDocType      expect string
     * @param integer      $_idPDocRef        expect integer
     * @param date         $_docDate          expect date
     * @param dateTime     $_accDate          expect dateTime
     * @param integer      $_idPartner        expect integer
     * @param string       $_pType            expect string
     * @param string       $_paNum            expect string
     * @param string       $_pName            expect string
     * @param string       $_pAddr            expect string
     * @param string       $_pCity            expect string
     * @param string       $_pDanN            expect string
     * @param string       $_pDanR            expect string
     * @param string       $_pBulStat         expect string
     * @param string       $_pBankAN          expect string
     * @param string       $_pBankCode        expect string
     * @param string       $_pBank            expect string
     * @param string       $_pBankAddr        expect string
     * @param string       $_pBankANVAT       expect string
     * @param string       $_pBankCodeVAT     expect string
     * @param string       $_pBankVAT         expect string
     * @param string       $_pBankAddrVAT     expect string
     * @param string       $_pMOL             expect string
     * @param string       $_pMOLPassport     expect string
     * @param integer      $_shopperLevel     expect integer
     * @param double       $_discountPerc     expect double
     * @param integer      $_idBranch         expect integer
     * @param string       $_chrBranchName    expect string
     * @param string       $_bAddr            expect string
     * @param string       $_bCity            expect string
     * @param string       $_bDanN            expect string
     * @param string       $_bDanR            expect string
     * @param string       $_bBulStat         expect string
     * @param string       $_bMOL             expect string
     * @param string       $_bMOLPassport     expect string
     * @param integer      $_idGeoRegion      expect integer
     * @param integer      $_advancePay       expect integer
     * @param string       $_chrPaymentMethod expect string
     * @param double       $_dSumaBase        expect double
     * @param double       $_dSuma            expect double
     * @param double       $_dSumaBaseBGL     expect double
     * @param double       $_dSumaBGL         expect double
     * @param double       $_dSumaDDS         expect double
     * @param double       $_dSSumaDDS        expect double
     * @param double       $_dSumaDDSBGL      expect double
     * @param double       $_dSSumaDDSBGL     expect double
     * @param double       $_dSumaNoTaxed     expect double
     * @param double       $_dSumaTaxed20     expect double
     * @param double       $_dSumaDDS20       expect double
     * @param double       $_dSumaTaxed7      expect double
     * @param double       $_dSumaDDS7        expect double
     * @param double       $_dSumaUSL         expect double
     * @param double       $_dSumaDDSUSL      expect double
     * @param string       $_curCode          expect string
     * @param double       $_dcmRate          expect double
     * @param double       $_dcmRateC         expect double
     * @param double       $_bCurRateDiff     expect double
     * @param double       $_dPaid            expect double
     * @param double       $_dPaidBGL         expect double
     * @param string       $_eaNum            expect string
     * @param string       $_idDealKind       expect string
     * @param string       $_dealEntity       expect string
     * @param string       $_dealReason       expect string
     * @param string       $_dealPlace        expect string
     * @param string       $_byContract       expect string
     * @param date         $_sRecvD           expect date
     * @param string       $_sRecvFrom        expect string
     * @param string       $_sRecvPassport    expect string
     * @param string       $_authorityN       expect string
     * @param date         $_authorityD       expect date
     * @param string       $_transport        expect string
     * @param base64Binary $_note
     * @param string       $_docStatus        expect string
     * @param integer      $_idDStatus        expect integer
     * @param string       $_lockStatus       expect string
     * @param integer      $_iStatus          expect integer
     * @param string       $_bAccID           expect string
     * @param date         $_paymentDate      expect date
     * @param integer      $_daysToPayment    expect integer
     * @param date         $_deliverDate      expect date
     * @param string       $_cName            expect string
     * @param string       $_cMOL             expect string
     * @param string       $_cAddress         expect string
     * @param string       $_cCity            expect string
     * @param string       $_cDanN            expect string
     * @param string       $_cDanR            expect string
     * @param string       $_cBulStat         expect string
     * @param integer      $_idCBranch        expect integer
     * @param string       $_cBName           expect string
     * @param string       $_cBMOL            expect string
     * @param string       $_cBAddress        expect string
     * @param string       $_cBCity           expect string
     * @param string       $_cBDanN           expect string
     * @param string       $_cBDanR           expect string
     * @param string       $_cBBulStat        expect string
     * @param integer      $_idCBank          expect integer
     * @param string       $_cBankAN          expect string
     * @param string       $_cBankCode        expect string
     * @param string       $_cBank            expect string
     * @param string       $_cBankAddr        expect string
     * @param integer      $_idCBankVAT       expect integer
     * @param string       $_cBankANVAT       expect string
     * @param string       $_cBankCodeVAT     expect string
     * @param string       $_cBankVAT         expect string
     * @param string       $_cBankAddrVAT     expect string
     * @param base64Binary $_fPData
     * @param integer      $_idUserDeal       expect integer
     * @param string       $_fRegNum          expect string
     * @param integer      $_idUserC          expect integer
     * @param integer      $_idUserM          expect integer
     * @param integer      $_idGroupC         expect integer
     * @param integer      $_idGroupM         expect integer
     * @param integer      $_idUserO          expect integer
     * @param integer      $_idGroupO         expect integer
     * @param dateTime     $_dtCreated        expect dateTime
     * @param dateTime     $_dtModified       expect dateTime
     * @param string       $_incotermCode     expect string
     * @param string       $_pNum             expect string
     * @param string       $_pGLN             expect string
     * @param string       $_bNum             expect string
     * @param string       $_bGLN             expect string
     * @param string       $_cBNum            expect string
     * @param string       $_cBGLN            expect string
     * @param array        $_iTEMS            expect array
     * @param array        $_pITEMS           expect array
     *
     * @return ColibriERPStructPDocTran
     */
    public function __construct($_idPDoc = null,$_sNum = null,$_inSyncS = null,$_docCode = null,$_docNum = null,$_docType = null,$_specDocType = null,$_idPDocRef = null,$_docDate = null,$_accDate = null,$_idPartner = null,$_pType = null,$_paNum = null,$_pName = null,$_pAddr = null,$_pCity = null,$_pDanN = null,$_pDanR = null,$_pBulStat = null,$_pBankAN = null,$_pBankCode = null,$_pBank = null,$_pBankAddr = null,$_pBankANVAT = null,$_pBankCodeVAT = null,$_pBankVAT = null,$_pBankAddrVAT = null,$_pMOL = null,$_pMOLPassport = null,$_shopperLevel = null,$_discountPerc = null,$_idBranch = null,$_chrBranchName = null,$_bAddr = null,$_bCity = null,$_bDanN = null,$_bDanR = null,$_bBulStat = null,$_bMOL = null,$_bMOLPassport = null,$_idGeoRegion = null,$_advancePay = null,$_chrPaymentMethod = null,$_dSumaBase = null,$_dSuma = null,$_dSumaBaseBGL = null,$_dSumaBGL = null,$_dSumaDDS = null,$_dSSumaDDS = null,$_dSumaDDSBGL = null,$_dSSumaDDSBGL = null,$_dSumaNoTaxed = null,$_dSumaTaxed20 = null,$_dSumaDDS20 = null,$_dSumaTaxed7 = null,$_dSumaDDS7 = null,$_dSumaUSL = null,$_dSumaDDSUSL = null,$_curCode = null,$_dcmRate = null,$_dcmRateC = null,$_bCurRateDiff = null,$_dPaid = null,$_dPaidBGL = null,$_eaNum = null,$_idDealKind = null,$_dealEntity = null,$_dealReason = null,$_dealPlace = null,$_byContract = null,$_sRecvD = null,$_sRecvFrom = null,$_sRecvPassport = null,$_authorityN = null,$_authorityD = null,$_transport = null,$_note = null,$_docStatus = null,$_idDStatus = null,$_lockStatus = null,$_iStatus = null,$_bAccID = null,$_paymentDate = null,$_daysToPayment = null,$_deliverDate = null,$_cName = null,$_cMOL = null,$_cAddress = null,$_cCity = null,$_cDanN = null,$_cDanR = null,$_cBulStat = null,$_idCBranch = null,$_cBName = null,$_cBMOL = null,$_cBAddress = null,$_cBCity = null,$_cBDanN = null,$_cBDanR = null,$_cBBulStat = null,$_idCBank = null,$_cBankAN = null,$_cBankCode = null,$_cBank = null,$_cBankAddr = null,$_idCBankVAT = null,$_cBankANVAT = null,$_cBankCodeVAT = null,$_cBankVAT = null,$_cBankAddrVAT = null,$_fPData = null,$_idUserDeal = null,$_fRegNum = null,$_idUserC = null,$_idUserM = null,$_idGroupC = null,$_idGroupM = null,$_idUserO = null,$_idGroupO = null,$_dtCreated = null,$_dtModified = null,$_incotermCode = null,$_pNum = null,$_pGLN = null,$_bNum = null,$_bGLN = null,$_cBNum = null,$_cBGLN = null,$_iTEMS = null,$_pITEMS = null)
    {
        parent::__construct(array('idPDoc'=>$_idPDoc,'SNum'=>$_sNum,'InSyncS'=>$_inSyncS,'DocCode'=>$_docCode,'DocNum'=>$_docNum,'DocType'=>$_docType,'specDocType'=>$_specDocType,'idPDocRef'=>$_idPDocRef,'DocDate'=>$_docDate,'AccDate'=>$_accDate,'idPartner'=>$_idPartner,'pType'=>$_pType,'PaNum'=>$_paNum,'PName'=>$_pName,'PAddr'=>$_pAddr,'PCity'=>$_pCity,'PDanN'=>$_pDanN,'PDanR'=>$_pDanR,'PBulStat'=>$_pBulStat,'PBankAN'=>$_pBankAN,'PBankCode'=>$_pBankCode,'PBank'=>$_pBank,'PBankAddr'=>$_pBankAddr,'PBankANVAT'=>$_pBankANVAT,'PBankCodeVAT'=>$_pBankCodeVAT,'PBankVAT'=>$_pBankVAT,'PBankAddrVAT'=>$_pBankAddrVAT,'PMOL'=>$_pMOL,'PMOLPassport'=>$_pMOLPassport,'shopperLevel'=>$_shopperLevel,'DiscountPerc'=>$_discountPerc,'idBranch'=>$_idBranch,'chrBranchName'=>$_chrBranchName,'BAddr'=>$_bAddr,'BCity'=>$_bCity,'BDanN'=>$_bDanN,'BDanR'=>$_bDanR,'BBulStat'=>$_bBulStat,'BMOL'=>$_bMOL,'BMOLPassport'=>$_bMOLPassport,'idGeoRegion'=>$_idGeoRegion,'AdvancePay'=>$_advancePay,'chrPaymentMethod'=>$_chrPaymentMethod,'DSumaBase'=>$_dSumaBase,'DSuma'=>$_dSuma,'DSumaBaseBGL'=>$_dSumaBaseBGL,'DSumaBGL'=>$_dSumaBGL,'DSumaDDS'=>$_dSumaDDS,'DSSumaDDS'=>$_dSSumaDDS,'DSumaDDSBGL'=>$_dSumaDDSBGL,'DSSumaDDSBGL'=>$_dSSumaDDSBGL,'DSumaNoTaxed'=>$_dSumaNoTaxed,'DSumaTaxed20'=>$_dSumaTaxed20,'DSumaDDS20'=>$_dSumaDDS20,'DSumaTaxed7'=>$_dSumaTaxed7,'DSumaDDS7'=>$_dSumaDDS7,'DSumaUSL'=>$_dSumaUSL,'DSumaDDSUSL'=>$_dSumaDDSUSL,'curCode'=>$_curCode,'dcmRate'=>$_dcmRate,'dcmRateC'=>$_dcmRateC,'BCurRateDiff'=>$_bCurRateDiff,'DPaid'=>$_dPaid,'DPaidBGL'=>$_dPaidBGL,'EaNum'=>$_eaNum,'idDealKind'=>$_idDealKind,'DealEntity'=>$_dealEntity,'DealReason'=>$_dealReason,'DealPlace'=>$_dealPlace,'ByContract'=>$_byContract,'SRecvD'=>$_sRecvD,'SRecvFrom'=>$_sRecvFrom,'SRecvPassport'=>$_sRecvPassport,'AuthorityN'=>$_authorityN,'AuthorityD'=>$_authorityD,'Transport'=>$_transport,'Note'=>$_note,'DocStatus'=>$_docStatus,'idDStatus'=>$_idDStatus,'LockStatus'=>$_lockStatus,'IStatus'=>$_iStatus,'BAccID'=>$_bAccID,'PaymentDate'=>$_paymentDate,'DaysToPayment'=>$_daysToPayment,'DeliverDate'=>$_deliverDate,'CName'=>$_cName,'CMOL'=>$_cMOL,'CAddress'=>$_cAddress,'CCity'=>$_cCity,'CDanN'=>$_cDanN,'CDanR'=>$_cDanR,'CBulStat'=>$_cBulStat,'idCBranch'=>$_idCBranch,'CBName'=>$_cBName,'CBMOL'=>$_cBMOL,'CBAddress'=>$_cBAddress,'CBCity'=>$_cBCity,'CBDanN'=>$_cBDanN,'CBDanR'=>$_cBDanR,'CBBulStat'=>$_cBBulStat,'idCBank'=>$_idCBank,'CBankAN'=>$_cBankAN,'CBankCode'=>$_cBankCode,'CBank'=>$_cBank,'CBankAddr'=>$_cBankAddr,'idCBankVAT'=>$_idCBankVAT,'CBankANVAT'=>$_cBankANVAT,'CBankCodeVAT'=>$_cBankCodeVAT,'CBankVAT'=>$_cBankVAT,'CBankAddrVAT'=>$_cBankAddrVAT,'FPData'=>$_fPData,'idUserDeal'=>$_idUserDeal,'fRegNum'=>$_fRegNum,'idUserC'=>$_idUserC,'idUserM'=>$_idUserM,'idGroupC'=>$_idGroupC,'idGroupM'=>$_idGroupM,'idUserO'=>$_idUserO,'idGroupO'=>$_idGroupO,'dtCreated'=>$_dtCreated,'dtModified'=>$_dtModified,'incotermCode'=>$_incotermCode,'PNum'=>$_pNum,'PGLN'=>$_pGLN,'BNum'=>$_bNum,'BGLN'=>$_bGLN,'CBNum'=>$_cBNum,'CBGLN'=>$_cBGLN,'ITEMS'=>$_iTEMS,'PITEMS'=>$_pITEMS), false);
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
     * Get InSyncS value
     *
     * @return integer|null
     */
    public function getInSyncS()
    {
        return $this->InSyncS;
    }
    /**
     * Set InSyncS value
     *
     * @param integer $_inSyncS the InSyncS
     *
     * @return integer
     */
    public function setInSyncS($_inSyncS)
    {
        return ($this->InSyncS = $_inSyncS);
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
     * Get idPDocRef value
     *
     * @return integer|null
     */
    public function getIdPDocRef()
    {
        return $this->idPDocRef;
    }
    /**
     * Set idPDocRef value
     *
     * @param integer $_idPDocRef the idPDocRef
     *
     * @return integer
     */
    public function setIdPDocRef($_idPDocRef)
    {
        return ($this->idPDocRef = $_idPDocRef);
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
     * Get PaNum value
     *
     * @return string|null
     */
    public function getPaNum()
    {
        return $this->PaNum;
    }
    /**
     * Set PaNum value
     *
     * @param string $_paNum the PaNum
     *
     * @return string
     */
    public function setPaNum($_paNum)
    {
        return ($this->PaNum = $_paNum);
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
     * Get PDanR value
     *
     * @return string|null
     */
    public function getPDanR()
    {
        return $this->PDanR;
    }
    /**
     * Set PDanR value
     *
     * @param string $_pDanR the PDanR
     *
     * @return string
     */
    public function setPDanR($_pDanR)
    {
        return ($this->PDanR = $_pDanR);
    }
    /**
     * Get PBulStat value
     *
     * @return string|null
     */
    public function getPBulStat()
    {
        return $this->PBulStat;
    }
    /**
     * Set PBulStat value
     *
     * @param string $_pBulStat the PBulStat
     *
     * @return string
     */
    public function setPBulStat($_pBulStat)
    {
        return ($this->PBulStat = $_pBulStat);
    }
    /**
     * Get PBankAN value
     *
     * @return string|null
     */
    public function getPBankAN()
    {
        return $this->PBankAN;
    }
    /**
     * Set PBankAN value
     *
     * @param string $_pBankAN the PBankAN
     *
     * @return string
     */
    public function setPBankAN($_pBankAN)
    {
        return ($this->PBankAN = $_pBankAN);
    }
    /**
     * Get PBankCode value
     *
     * @return string|null
     */
    public function getPBankCode()
    {
        return $this->PBankCode;
    }
    /**
     * Set PBankCode value
     *
     * @param string $_pBankCode the PBankCode
     *
     * @return string
     */
    public function setPBankCode($_pBankCode)
    {
        return ($this->PBankCode = $_pBankCode);
    }
    /**
     * Get PBank value
     *
     * @return string|null
     */
    public function getPBank()
    {
        return $this->PBank;
    }
    /**
     * Set PBank value
     *
     * @param string $_pBank the PBank
     *
     * @return string
     */
    public function setPBank($_pBank)
    {
        return ($this->PBank = $_pBank);
    }
    /**
     * Get PBankAddr value
     *
     * @return string|null
     */
    public function getPBankAddr()
    {
        return $this->PBankAddr;
    }
    /**
     * Set PBankAddr value
     *
     * @param string $_pBankAddr the PBankAddr
     *
     * @return string
     */
    public function setPBankAddr($_pBankAddr)
    {
        return ($this->PBankAddr = $_pBankAddr);
    }
    /**
     * Get PBankANVAT value
     *
     * @return string|null
     */
    public function getPBankANVAT()
    {
        return $this->PBankANVAT;
    }
    /**
     * Set PBankANVAT value
     *
     * @param string $_pBankANVAT the PBankANVAT
     *
     * @return string
     */
    public function setPBankANVAT($_pBankANVAT)
    {
        return ($this->PBankANVAT = $_pBankANVAT);
    }
    /**
     * Get PBankCodeVAT value
     *
     * @return string|null
     */
    public function getPBankCodeVAT()
    {
        return $this->PBankCodeVAT;
    }
    /**
     * Set PBankCodeVAT value
     *
     * @param string $_pBankCodeVAT the PBankCodeVAT
     *
     * @return string
     */
    public function setPBankCodeVAT($_pBankCodeVAT)
    {
        return ($this->PBankCodeVAT = $_pBankCodeVAT);
    }
    /**
     * Get PBankVAT value
     *
     * @return string|null
     */
    public function getPBankVAT()
    {
        return $this->PBankVAT;
    }
    /**
     * Set PBankVAT value
     *
     * @param string $_pBankVAT the PBankVAT
     *
     * @return string
     */
    public function setPBankVAT($_pBankVAT)
    {
        return ($this->PBankVAT = $_pBankVAT);
    }
    /**
     * Get PBankAddrVAT value
     *
     * @return string|null
     */
    public function getPBankAddrVAT()
    {
        return $this->PBankAddrVAT;
    }
    /**
     * Set PBankAddrVAT value
     *
     * @param string $_pBankAddrVAT the PBankAddrVAT
     *
     * @return string
     */
    public function setPBankAddrVAT($_pBankAddrVAT)
    {
        return ($this->PBankAddrVAT = $_pBankAddrVAT);
    }
    /**
     * Get PMOL value
     *
     * @return string|null
     */
    public function getPMOL()
    {
        return $this->PMOL;
    }
    /**
     * Set PMOL value
     *
     * @param string $_pMOL the PMOL
     *
     * @return string
     */
    public function setPMOL($_pMOL)
    {
        return ($this->PMOL = $_pMOL);
    }
    /**
     * Get PMOLPassport value
     *
     * @return string|null
     */
    public function getPMOLPassport()
    {
        return $this->PMOLPassport;
    }
    /**
     * Set PMOLPassport value
     *
     * @param string $_pMOLPassport the PMOLPassport
     *
     * @return string
     */
    public function setPMOLPassport($_pMOLPassport)
    {
        return ($this->PMOLPassport = $_pMOLPassport);
    }
    /**
     * Get shopperLevel value
     *
     * @return integer|null
     */
    public function getShopperLevel()
    {
        return $this->shopperLevel;
    }
    /**
     * Set shopperLevel value
     *
     * @param integer $_shopperLevel the shopperLevel
     *
     * @return integer
     */
    public function setShopperLevel($_shopperLevel)
    {
        return ($this->shopperLevel = $_shopperLevel);
    }
    /**
     * Get DiscountPerc value
     *
     * @return double|null
     */
    public function getDiscountPerc()
    {
        return $this->DiscountPerc;
    }
    /**
     * Set DiscountPerc value
     *
     * @param double $_discountPerc the DiscountPerc
     *
     * @return double
     */
    public function setDiscountPerc($_discountPerc)
    {
        return ($this->DiscountPerc = $_discountPerc);
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
     * Get BAddr value
     *
     * @return string|null
     */
    public function getBAddr()
    {
        return $this->BAddr;
    }
    /**
     * Set BAddr value
     *
     * @param string $_bAddr the BAddr
     *
     * @return string
     */
    public function setBAddr($_bAddr)
    {
        return ($this->BAddr = $_bAddr);
    }
    /**
     * Get BCity value
     *
     * @return string|null
     */
    public function getBCity()
    {
        return $this->BCity;
    }
    /**
     * Set BCity value
     *
     * @param string $_bCity the BCity
     *
     * @return string
     */
    public function setBCity($_bCity)
    {
        return ($this->BCity = $_bCity);
    }
    /**
     * Get BDanN value
     *
     * @return string|null
     */
    public function getBDanN()
    {
        return $this->BDanN;
    }
    /**
     * Set BDanN value
     *
     * @param string $_bDanN the BDanN
     *
     * @return string
     */
    public function setBDanN($_bDanN)
    {
        return ($this->BDanN = $_bDanN);
    }
    /**
     * Get BDanR value
     *
     * @return string|null
     */
    public function getBDanR()
    {
        return $this->BDanR;
    }
    /**
     * Set BDanR value
     *
     * @param string $_bDanR the BDanR
     *
     * @return string
     */
    public function setBDanR($_bDanR)
    {
        return ($this->BDanR = $_bDanR);
    }
    /**
     * Get BBulStat value
     *
     * @return string|null
     */
    public function getBBulStat()
    {
        return $this->BBulStat;
    }
    /**
     * Set BBulStat value
     *
     * @param string $_bBulStat the BBulStat
     *
     * @return string
     */
    public function setBBulStat($_bBulStat)
    {
        return ($this->BBulStat = $_bBulStat);
    }
    /**
     * Get BMOL value
     *
     * @return string|null
     */
    public function getBMOL()
    {
        return $this->BMOL;
    }
    /**
     * Set BMOL value
     *
     * @param string $_bMOL the BMOL
     *
     * @return string
     */
    public function setBMOL($_bMOL)
    {
        return ($this->BMOL = $_bMOL);
    }
    /**
     * Get BMOLPassport value
     *
     * @return string|null
     */
    public function getBMOLPassport()
    {
        return $this->BMOLPassport;
    }
    /**
     * Set BMOLPassport value
     *
     * @param string $_bMOLPassport the BMOLPassport
     *
     * @return string
     */
    public function setBMOLPassport($_bMOLPassport)
    {
        return ($this->BMOLPassport = $_bMOLPassport);
    }
    /**
     * Get idGeoRegion value
     *
     * @return integer|null
     */
    public function getIdGeoRegion()
    {
        return $this->idGeoRegion;
    }
    /**
     * Set idGeoRegion value
     *
     * @param integer $_idGeoRegion the idGeoRegion
     *
     * @return integer
     */
    public function setIdGeoRegion($_idGeoRegion)
    {
        return ($this->idGeoRegion = $_idGeoRegion);
    }
    /**
     * Get AdvancePay value
     *
     * @return integer|null
     */
    public function getAdvancePay()
    {
        return $this->AdvancePay;
    }
    /**
     * Set AdvancePay value
     *
     * @param integer $_advancePay the AdvancePay
     *
     * @return integer
     */
    public function setAdvancePay($_advancePay)
    {
        return ($this->AdvancePay = $_advancePay);
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
     * Get DSumaBase value
     *
     * @return double|null
     */
    public function getDSumaBase()
    {
        return $this->DSumaBase;
    }
    /**
     * Set DSumaBase value
     *
     * @param double $_dSumaBase the DSumaBase
     *
     * @return double
     */
    public function setDSumaBase($_dSumaBase)
    {
        return ($this->DSumaBase = $_dSumaBase);
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
     * Get DSumaBaseBGL value
     *
     * @return double|null
     */
    public function getDSumaBaseBGL()
    {
        return $this->DSumaBaseBGL;
    }
    /**
     * Set DSumaBaseBGL value
     *
     * @param double $_dSumaBaseBGL the DSumaBaseBGL
     *
     * @return double
     */
    public function setDSumaBaseBGL($_dSumaBaseBGL)
    {
        return ($this->DSumaBaseBGL = $_dSumaBaseBGL);
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
     * Get DSSumaDDS value
     *
     * @return double|null
     */
    public function getDSSumaDDS()
    {
        return $this->DSSumaDDS;
    }
    /**
     * Set DSSumaDDS value
     *
     * @param double $_dSSumaDDS the DSSumaDDS
     *
     * @return double
     */
    public function setDSSumaDDS($_dSSumaDDS)
    {
        return ($this->DSSumaDDS = $_dSSumaDDS);
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
     * Get DSSumaDDSBGL value
     *
     * @return double|null
     */
    public function getDSSumaDDSBGL()
    {
        return $this->DSSumaDDSBGL;
    }
    /**
     * Set DSSumaDDSBGL value
     *
     * @param double $_dSSumaDDSBGL the DSSumaDDSBGL
     *
     * @return double
     */
    public function setDSSumaDDSBGL($_dSSumaDDSBGL)
    {
        return ($this->DSSumaDDSBGL = $_dSSumaDDSBGL);
    }
    /**
     * Get DSumaNoTaxed value
     *
     * @return double|null
     */
    public function getDSumaNoTaxed()
    {
        return $this->DSumaNoTaxed;
    }
    /**
     * Set DSumaNoTaxed value
     *
     * @param double $_dSumaNoTaxed the DSumaNoTaxed
     *
     * @return double
     */
    public function setDSumaNoTaxed($_dSumaNoTaxed)
    {
        return ($this->DSumaNoTaxed = $_dSumaNoTaxed);
    }
    /**
     * Get DSumaTaxed20 value
     *
     * @return double|null
     */
    public function getDSumaTaxed20()
    {
        return $this->DSumaTaxed20;
    }
    /**
     * Set DSumaTaxed20 value
     *
     * @param double $_dSumaTaxed20 the DSumaTaxed20
     *
     * @return double
     */
    public function setDSumaTaxed20($_dSumaTaxed20)
    {
        return ($this->DSumaTaxed20 = $_dSumaTaxed20);
    }
    /**
     * Get DSumaDDS20 value
     *
     * @return double|null
     */
    public function getDSumaDDS20()
    {
        return $this->DSumaDDS20;
    }
    /**
     * Set DSumaDDS20 value
     *
     * @param double $_dSumaDDS20 the DSumaDDS20
     *
     * @return double
     */
    public function setDSumaDDS20($_dSumaDDS20)
    {
        return ($this->DSumaDDS20 = $_dSumaDDS20);
    }
    /**
     * Get DSumaTaxed7 value
     *
     * @return double|null
     */
    public function getDSumaTaxed7()
    {
        return $this->DSumaTaxed7;
    }
    /**
     * Set DSumaTaxed7 value
     *
     * @param double $_dSumaTaxed7 the DSumaTaxed7
     *
     * @return double
     */
    public function setDSumaTaxed7($_dSumaTaxed7)
    {
        return ($this->DSumaTaxed7 = $_dSumaTaxed7);
    }
    /**
     * Get DSumaDDS7 value
     *
     * @return double|null
     */
    public function getDSumaDDS7()
    {
        return $this->DSumaDDS7;
    }
    /**
     * Set DSumaDDS7 value
     *
     * @param double $_dSumaDDS7 the DSumaDDS7
     *
     * @return double
     */
    public function setDSumaDDS7($_dSumaDDS7)
    {
        return ($this->DSumaDDS7 = $_dSumaDDS7);
    }
    /**
     * Get DSumaUSL value
     *
     * @return double|null
     */
    public function getDSumaUSL()
    {
        return $this->DSumaUSL;
    }
    /**
     * Set DSumaUSL value
     *
     * @param double $_dSumaUSL the DSumaUSL
     *
     * @return double
     */
    public function setDSumaUSL($_dSumaUSL)
    {
        return ($this->DSumaUSL = $_dSumaUSL);
    }
    /**
     * Get DSumaDDSUSL value
     *
     * @return double|null
     */
    public function getDSumaDDSUSL()
    {
        return $this->DSumaDDSUSL;
    }
    /**
     * Set DSumaDDSUSL value
     *
     * @param double $_dSumaDDSUSL the DSumaDDSUSL
     *
     * @return double
     */
    public function setDSumaDDSUSL($_dSumaDDSUSL)
    {
        return ($this->DSumaDDSUSL = $_dSumaDDSUSL);
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
     * Get dcmRateC value
     *
     * @return double|null
     */
    public function getDcmRateC()
    {
        return $this->dcmRateC;
    }
    /**
     * Set dcmRateC value
     *
     * @param double $_dcmRateC the dcmRateC
     *
     * @return double
     */
    public function setDcmRateC($_dcmRateC)
    {
        return ($this->dcmRateC = $_dcmRateC);
    }
    /**
     * Get BCurRateDiff value
     *
     * @return double|null
     */
    public function getBCurRateDiff()
    {
        return $this->BCurRateDiff;
    }
    /**
     * Set BCurRateDiff value
     *
     * @param double $_bCurRateDiff the BCurRateDiff
     *
     * @return double
     */
    public function setBCurRateDiff($_bCurRateDiff)
    {
        return ($this->BCurRateDiff = $_bCurRateDiff);
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
     * Get EaNum value
     *
     * @return string|null
     */
    public function getEaNum()
    {
        return $this->EaNum;
    }
    /**
     * Set EaNum value
     *
     * @param string $_eaNum the EaNum
     *
     * @return string
     */
    public function setEaNum($_eaNum)
    {
        return ($this->EaNum = $_eaNum);
    }
    /**
     * Get idDealKind value
     *
     * @return string|null
     */
    public function getIdDealKind()
    {
        return $this->idDealKind;
    }
    /**
     * Set idDealKind value
     *
     * @param string $_idDealKind the idDealKind
     *
     * @return string
     */
    public function setIdDealKind($_idDealKind)
    {
        return ($this->idDealKind = $_idDealKind);
    }
    /**
     * Get DealEntity value
     *
     * @return string|null
     */
    public function getDealEntity()
    {
        return $this->DealEntity;
    }
    /**
     * Set DealEntity value
     *
     * @param string $_dealEntity the DealEntity
     *
     * @return string
     */
    public function setDealEntity($_dealEntity)
    {
        return ($this->DealEntity = $_dealEntity);
    }
    /**
     * Get DealReason value
     *
     * @return string|null
     */
    public function getDealReason()
    {
        return $this->DealReason;
    }
    /**
     * Set DealReason value
     *
     * @param string $_dealReason the DealReason
     *
     * @return string
     */
    public function setDealReason($_dealReason)
    {
        return ($this->DealReason = $_dealReason);
    }
    /**
     * Get DealPlace value
     *
     * @return string|null
     */
    public function getDealPlace()
    {
        return $this->DealPlace;
    }
    /**
     * Set DealPlace value
     *
     * @param string $_dealPlace the DealPlace
     *
     * @return string
     */
    public function setDealPlace($_dealPlace)
    {
        return ($this->DealPlace = $_dealPlace);
    }
    /**
     * Get ByContract value
     *
     * @return string|null
     */
    public function getByContract()
    {
        return $this->ByContract;
    }
    /**
     * Set ByContract value
     *
     * @param string $_byContract the ByContract
     *
     * @return string
     */
    public function setByContract($_byContract)
    {
        return ($this->ByContract = $_byContract);
    }
    /**
     * Get SRecvD value
     *
     * @return date|null
     */
    public function getSRecvD()
    {
        return $this->SRecvD;
    }
    /**
     * Set SRecvD value
     *
     * @param date $_sRecvD the SRecvD
     *
     * @return date
     */
    public function setSRecvD($_sRecvD)
    {
        return ($this->SRecvD = $_sRecvD);
    }
    /**
     * Get SRecvFrom value
     *
     * @return string|null
     */
    public function getSRecvFrom()
    {
        return $this->SRecvFrom;
    }
    /**
     * Set SRecvFrom value
     *
     * @param string $_sRecvFrom the SRecvFrom
     *
     * @return string
     */
    public function setSRecvFrom($_sRecvFrom)
    {
        return ($this->SRecvFrom = $_sRecvFrom);
    }
    /**
     * Get SRecvPassport value
     *
     * @return string|null
     */
    public function getSRecvPassport()
    {
        return $this->SRecvPassport;
    }
    /**
     * Set SRecvPassport value
     *
     * @param string $_sRecvPassport the SRecvPassport
     *
     * @return string
     */
    public function setSRecvPassport($_sRecvPassport)
    {
        return ($this->SRecvPassport = $_sRecvPassport);
    }
    /**
     * Get AuthorityN value
     *
     * @return string|null
     */
    public function getAuthorityN()
    {
        return $this->AuthorityN;
    }
    /**
     * Set AuthorityN value
     *
     * @param string $_authorityN the AuthorityN
     *
     * @return string
     */
    public function setAuthorityN($_authorityN)
    {
        return ($this->AuthorityN = $_authorityN);
    }
    /**
     * Get AuthorityD value
     *
     * @return date|null
     */
    public function getAuthorityD()
    {
        return $this->AuthorityD;
    }
    /**
     * Set AuthorityD value
     *
     * @param date $_authorityD the AuthorityD
     *
     * @return date
     */
    public function setAuthorityD($_authorityD)
    {
        return ($this->AuthorityD = $_authorityD);
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
     * Get Note value
     *
     * @return base64Binary|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     *
     * @param base64Binary $_note the Note
     *
     * @return base64Binary
     */
    public function setNote($_note)
    {
        return ($this->Note = $_note);
    }
    /**
     * Get DocStatus value
     *
     * @return string|null
     */
    public function getDocStatus()
    {
        return $this->DocStatus;
    }
    /**
     * Set DocStatus value
     *
     * @param string $_docStatus the DocStatus
     *
     * @return string
     */
    public function setDocStatus($_docStatus)
    {
        return ($this->DocStatus = $_docStatus);
    }
    /**
     * Get idDStatus value
     *
     * @return integer|null
     */
    public function getIdDStatus()
    {
        return $this->idDStatus;
    }
    /**
     * Set idDStatus value
     *
     * @param integer $_idDStatus the idDStatus
     *
     * @return integer
     */
    public function setIdDStatus($_idDStatus)
    {
        return ($this->idDStatus = $_idDStatus);
    }
    /**
     * Get LockStatus value
     *
     * @return string|null
     */
    public function getLockStatus()
    {
        return $this->LockStatus;
    }
    /**
     * Set LockStatus value
     *
     * @param string $_lockStatus the LockStatus
     *
     * @return string
     */
    public function setLockStatus($_lockStatus)
    {
        return ($this->LockStatus = $_lockStatus);
    }
    /**
     * Get IStatus value
     *
     * @return integer|null
     */
    public function getIStatus()
    {
        return $this->IStatus;
    }
    /**
     * Set IStatus value
     *
     * @param integer $_iStatus the IStatus
     *
     * @return integer
     */
    public function setIStatus($_iStatus)
    {
        return ($this->IStatus = $_iStatus);
    }
    /**
     * Get BAccID value
     *
     * @return string|null
     */
    public function getBAccID()
    {
        return $this->BAccID;
    }
    /**
     * Set BAccID value
     *
     * @param string $_bAccID the BAccID
     *
     * @return string
     */
    public function setBAccID($_bAccID)
    {
        return ($this->BAccID = $_bAccID);
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
     * Get DaysToPayment value
     *
     * @return integer|null
     */
    public function getDaysToPayment()
    {
        return $this->DaysToPayment;
    }
    /**
     * Set DaysToPayment value
     *
     * @param integer $_daysToPayment the DaysToPayment
     *
     * @return integer
     */
    public function setDaysToPayment($_daysToPayment)
    {
        return ($this->DaysToPayment = $_daysToPayment);
    }
    /**
     * Get DeliverDate value
     *
     * @return date|null
     */
    public function getDeliverDate()
    {
        return $this->DeliverDate;
    }
    /**
     * Set DeliverDate value
     *
     * @param date $_deliverDate the DeliverDate
     *
     * @return date
     */
    public function setDeliverDate($_deliverDate)
    {
        return ($this->DeliverDate = $_deliverDate);
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
     * Get CMOL value
     *
     * @return string|null
     */
    public function getCMOL()
    {
        return $this->CMOL;
    }
    /**
     * Set CMOL value
     *
     * @param string $_cMOL the CMOL
     *
     * @return string
     */
    public function setCMOL($_cMOL)
    {
        return ($this->CMOL = $_cMOL);
    }
    /**
     * Get CAddress value
     *
     * @return string|null
     */
    public function getCAddress()
    {
        return $this->CAddress;
    }
    /**
     * Set CAddress value
     *
     * @param string $_cAddress the CAddress
     *
     * @return string
     */
    public function setCAddress($_cAddress)
    {
        return ($this->CAddress = $_cAddress);
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
     * Get CDanN value
     *
     * @return string|null
     */
    public function getCDanN()
    {
        return $this->CDanN;
    }
    /**
     * Set CDanN value
     *
     * @param string $_cDanN the CDanN
     *
     * @return string
     */
    public function setCDanN($_cDanN)
    {
        return ($this->CDanN = $_cDanN);
    }
    /**
     * Get CDanR value
     *
     * @return string|null
     */
    public function getCDanR()
    {
        return $this->CDanR;
    }
    /**
     * Set CDanR value
     *
     * @param string $_cDanR the CDanR
     *
     * @return string
     */
    public function setCDanR($_cDanR)
    {
        return ($this->CDanR = $_cDanR);
    }
    /**
     * Get CBulStat value
     *
     * @return string|null
     */
    public function getCBulStat()
    {
        return $this->CBulStat;
    }
    /**
     * Set CBulStat value
     *
     * @param string $_cBulStat the CBulStat
     *
     * @return string
     */
    public function setCBulStat($_cBulStat)
    {
        return ($this->CBulStat = $_cBulStat);
    }
    /**
     * Get idCBranch value
     *
     * @return integer|null
     */
    public function getIdCBranch()
    {
        return $this->idCBranch;
    }
    /**
     * Set idCBranch value
     *
     * @param integer $_idCBranch the idCBranch
     *
     * @return integer
     */
    public function setIdCBranch($_idCBranch)
    {
        return ($this->idCBranch = $_idCBranch);
    }
    /**
     * Get CBName value
     *
     * @return string|null
     */
    public function getCBName()
    {
        return $this->CBName;
    }
    /**
     * Set CBName value
     *
     * @param string $_cBName the CBName
     *
     * @return string
     */
    public function setCBName($_cBName)
    {
        return ($this->CBName = $_cBName);
    }
    /**
     * Get CBMOL value
     *
     * @return string|null
     */
    public function getCBMOL()
    {
        return $this->CBMOL;
    }
    /**
     * Set CBMOL value
     *
     * @param string $_cBMOL the CBMOL
     *
     * @return string
     */
    public function setCBMOL($_cBMOL)
    {
        return ($this->CBMOL = $_cBMOL);
    }
    /**
     * Get CBAddress value
     *
     * @return string|null
     */
    public function getCBAddress()
    {
        return $this->CBAddress;
    }
    /**
     * Set CBAddress value
     *
     * @param string $_cBAddress the CBAddress
     *
     * @return string
     */
    public function setCBAddress($_cBAddress)
    {
        return ($this->CBAddress = $_cBAddress);
    }
    /**
     * Get CBCity value
     *
     * @return string|null
     */
    public function getCBCity()
    {
        return $this->CBCity;
    }
    /**
     * Set CBCity value
     *
     * @param string $_cBCity the CBCity
     *
     * @return string
     */
    public function setCBCity($_cBCity)
    {
        return ($this->CBCity = $_cBCity);
    }
    /**
     * Get CBDanN value
     *
     * @return string|null
     */
    public function getCBDanN()
    {
        return $this->CBDanN;
    }
    /**
     * Set CBDanN value
     *
     * @param string $_cBDanN the CBDanN
     *
     * @return string
     */
    public function setCBDanN($_cBDanN)
    {
        return ($this->CBDanN = $_cBDanN);
    }
    /**
     * Get CBDanR value
     *
     * @return string|null
     */
    public function getCBDanR()
    {
        return $this->CBDanR;
    }
    /**
     * Set CBDanR value
     *
     * @param string $_cBDanR the CBDanR
     *
     * @return string
     */
    public function setCBDanR($_cBDanR)
    {
        return ($this->CBDanR = $_cBDanR);
    }
    /**
     * Get CBBulStat value
     *
     * @return string|null
     */
    public function getCBBulStat()
    {
        return $this->CBBulStat;
    }
    /**
     * Set CBBulStat value
     *
     * @param string $_cBBulStat the CBBulStat
     *
     * @return string
     */
    public function setCBBulStat($_cBBulStat)
    {
        return ($this->CBBulStat = $_cBBulStat);
    }
    /**
     * Get idCBank value
     *
     * @return integer|null
     */
    public function getIdCBank()
    {
        return $this->idCBank;
    }
    /**
     * Set idCBank value
     *
     * @param integer $_idCBank the idCBank
     *
     * @return integer
     */
    public function setIdCBank($_idCBank)
    {
        return ($this->idCBank = $_idCBank);
    }
    /**
     * Get CBankAN value
     *
     * @return string|null
     */
    public function getCBankAN()
    {
        return $this->CBankAN;
    }
    /**
     * Set CBankAN value
     *
     * @param string $_cBankAN the CBankAN
     *
     * @return string
     */
    public function setCBankAN($_cBankAN)
    {
        return ($this->CBankAN = $_cBankAN);
    }
    /**
     * Get CBankCode value
     *
     * @return string|null
     */
    public function getCBankCode()
    {
        return $this->CBankCode;
    }
    /**
     * Set CBankCode value
     *
     * @param string $_cBankCode the CBankCode
     *
     * @return string
     */
    public function setCBankCode($_cBankCode)
    {
        return ($this->CBankCode = $_cBankCode);
    }
    /**
     * Get CBank value
     *
     * @return string|null
     */
    public function getCBank()
    {
        return $this->CBank;
    }
    /**
     * Set CBank value
     *
     * @param string $_cBank the CBank
     *
     * @return string
     */
    public function setCBank($_cBank)
    {
        return ($this->CBank = $_cBank);
    }
    /**
     * Get CBankAddr value
     *
     * @return string|null
     */
    public function getCBankAddr()
    {
        return $this->CBankAddr;
    }
    /**
     * Set CBankAddr value
     *
     * @param string $_cBankAddr the CBankAddr
     *
     * @return string
     */
    public function setCBankAddr($_cBankAddr)
    {
        return ($this->CBankAddr = $_cBankAddr);
    }
    /**
     * Get idCBankVAT value
     *
     * @return integer|null
     */
    public function getIdCBankVAT()
    {
        return $this->idCBankVAT;
    }
    /**
     * Set idCBankVAT value
     *
     * @param integer $_idCBankVAT the idCBankVAT
     *
     * @return integer
     */
    public function setIdCBankVAT($_idCBankVAT)
    {
        return ($this->idCBankVAT = $_idCBankVAT);
    }
    /**
     * Get CBankANVAT value
     *
     * @return string|null
     */
    public function getCBankANVAT()
    {
        return $this->CBankANVAT;
    }
    /**
     * Set CBankANVAT value
     *
     * @param string $_cBankANVAT the CBankANVAT
     *
     * @return string
     */
    public function setCBankANVAT($_cBankANVAT)
    {
        return ($this->CBankANVAT = $_cBankANVAT);
    }
    /**
     * Get CBankCodeVAT value
     *
     * @return string|null
     */
    public function getCBankCodeVAT()
    {
        return $this->CBankCodeVAT;
    }
    /**
     * Set CBankCodeVAT value
     *
     * @param string $_cBankCodeVAT the CBankCodeVAT
     *
     * @return string
     */
    public function setCBankCodeVAT($_cBankCodeVAT)
    {
        return ($this->CBankCodeVAT = $_cBankCodeVAT);
    }
    /**
     * Get CBankVAT value
     *
     * @return string|null
     */
    public function getCBankVAT()
    {
        return $this->CBankVAT;
    }
    /**
     * Set CBankVAT value
     *
     * @param string $_cBankVAT the CBankVAT
     *
     * @return string
     */
    public function setCBankVAT($_cBankVAT)
    {
        return ($this->CBankVAT = $_cBankVAT);
    }
    /**
     * Get CBankAddrVAT value
     *
     * @return string|null
     */
    public function getCBankAddrVAT()
    {
        return $this->CBankAddrVAT;
    }
    /**
     * Set CBankAddrVAT value
     *
     * @param string $_cBankAddrVAT the CBankAddrVAT
     *
     * @return string
     */
    public function setCBankAddrVAT($_cBankAddrVAT)
    {
        return ($this->CBankAddrVAT = $_cBankAddrVAT);
    }
    /**
     * Get FPData value
     *
     * @return base64Binary|null
     */
    public function getFPData()
    {
        return $this->FPData;
    }
    /**
     * Set FPData value
     *
     * @param base64Binary $_fPData the FPData
     *
     * @return base64Binary
     */
    public function setFPData($_fPData)
    {
        return ($this->FPData = $_fPData);
    }
    /**
     * Get idUserDeal value
     *
     * @return integer|null
     */
    public function getIdUserDeal()
    {
        return $this->idUserDeal;
    }
    /**
     * Set idUserDeal value
     *
     * @param integer $_idUserDeal the idUserDeal
     *
     * @return integer
     */
    public function setIdUserDeal($_idUserDeal)
    {
        return ($this->idUserDeal = $_idUserDeal);
    }
    /**
     * Get fRegNum value
     *
     * @return string|null
     */
    public function getFRegNum()
    {
        return $this->fRegNum;
    }
    /**
     * Set fRegNum value
     *
     * @param string $_fRegNum the fRegNum
     *
     * @return string
     */
    public function setFRegNum($_fRegNum)
    {
        return ($this->fRegNum = $_fRegNum);
    }
    /**
     * Get idUserC value
     *
     * @return integer|null
     */
    public function getIdUserC()
    {
        return $this->idUserC;
    }
    /**
     * Set idUserC value
     *
     * @param integer $_idUserC the idUserC
     *
     * @return integer
     */
    public function setIdUserC($_idUserC)
    {
        return ($this->idUserC = $_idUserC);
    }
    /**
     * Get idUserM value
     *
     * @return integer|null
     */
    public function getIdUserM()
    {
        return $this->idUserM;
    }
    /**
     * Set idUserM value
     *
     * @param integer $_idUserM the idUserM
     *
     * @return integer
     */
    public function setIdUserM($_idUserM)
    {
        return ($this->idUserM = $_idUserM);
    }
    /**
     * Get idGroupC value
     *
     * @return integer|null
     */
    public function getIdGroupC()
    {
        return $this->idGroupC;
    }
    /**
     * Set idGroupC value
     *
     * @param integer $_idGroupC the idGroupC
     *
     * @return integer
     */
    public function setIdGroupC($_idGroupC)
    {
        return ($this->idGroupC = $_idGroupC);
    }
    /**
     * Get idGroupM value
     *
     * @return integer|null
     */
    public function getIdGroupM()
    {
        return $this->idGroupM;
    }
    /**
     * Set idGroupM value
     *
     * @param integer $_idGroupM the idGroupM
     *
     * @return integer
     */
    public function setIdGroupM($_idGroupM)
    {
        return ($this->idGroupM = $_idGroupM);
    }
    /**
     * Get idUserO value
     *
     * @return integer|null
     */
    public function getIdUserO()
    {
        return $this->idUserO;
    }
    /**
     * Set idUserO value
     *
     * @param integer $_idUserO the idUserO
     *
     * @return integer
     */
    public function setIdUserO($_idUserO)
    {
        return ($this->idUserO = $_idUserO);
    }
    /**
     * Get idGroupO value
     *
     * @return integer|null
     */
    public function getIdGroupO()
    {
        return $this->idGroupO;
    }
    /**
     * Set idGroupO value
     *
     * @param integer $_idGroupO the idGroupO
     *
     * @return integer
     */
    public function setIdGroupO($_idGroupO)
    {
        return ($this->idGroupO = $_idGroupO);
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
     * Get incotermCode value
     *
     * @return string|null
     */
    public function getIncotermCode()
    {
        return $this->incotermCode;
    }
    /**
     * Set incotermCode value
     *
     * @param string $_incotermCode the incotermCode
     *
     * @return string
     */
    public function setIncotermCode($_incotermCode)
    {
        return ($this->incotermCode = $_incotermCode);
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
     * Get CBNum value
     *
     * @return string|null
     */
    public function getCBNum()
    {
        return $this->CBNum;
    }
    /**
     * Set CBNum value
     *
     * @param string $_cBNum the CBNum
     *
     * @return string
     */
    public function setCBNum($_cBNum)
    {
        return ($this->CBNum = $_cBNum);
    }
    /**
     * Get CBGLN value
     *
     * @return string|null
     */
    public function getCBGLN()
    {
        return $this->CBGLN;
    }
    /**
     * Set CBGLN value
     *
     * @param string $_cBGLN the CBGLN
     *
     * @return string
     */
    public function setCBGLN($_cBGLN)
    {
        return ($this->CBGLN = $_cBGLN);
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
     * Get PITEMS value
     *
     * @return array|null
     */
    public function getPITEMS()
    {
        return $this->PITEMS;
    }
    /**
     * Set PITEMS value
     *
     * @param array $_pITEMS the PITEMS
     *
     * @return array
     */
    public function setPITEMS($_pITEMS)
    {
        return ($this->PITEMS = $_pITEMS);
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
     * @return ColibriERPStructPDocTran
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
