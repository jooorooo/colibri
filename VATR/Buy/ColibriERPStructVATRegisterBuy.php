<?php
/**
 * File for class ColibriERPStructVATRegisterBuy
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
 * This class stands for ColibriERPStructVATRegisterBuy
 *  originally named VATRegisterBuy
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
class ColibriERPStructVATRegisterBuy extends ColibriERPWsdlClass
{
    /**
     * The idVATRegisterBuy
     *
     * @var integer
     */
    public $idVATRegisterBuy;
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
     * The DocDate
     *
     * @var string
     */
    public $DocDate;
    /**
     * The AccDate
     *
     * @var string
     */
    public $AccDate;
    /**
     * The idDealKind
     *
     * @var string
     */
    public $idDealKind;
    /**
     * The idPartner
     *
     * @var integer
     */
    public $idPartner;
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
     * The DealEntity
     *
     * @var string
     */
    public $DealEntity;
    /**
     * The DealPlace
     *
     * @var string
     */
    public $DealPlace;
    /**
     * The idSource
     *
     * @var integer
     */
    public $idSource;
    /**
     * The SourceName
     *
     * @var string
     */
    public $SourceName;
    /**
     * The MDDSTax
     *
     * @var float
     */
    public $MDDSTax;
    /**
     * The SumAll
     *
     * @var float
     */
    public $SumAll;
    /**
     * The SumNotReg
     *
     * @var float
     */
    public $SumNotReg;
    /**
     * The SumNotDK
     *
     * @var float
     */
    public $SumNotDK;
    /**
     * The SumInNotDK
     *
     * @var float
     */
    public $SumInNotDK;
    /**
     * The SumDK
     *
     * @var float
     */
    public $SumDK;
    /**
     * The SumDKDDS
     *
     * @var float
     */
    public $SumDKDDS;
    /**
     * The SumInDK
     *
     * @var float
     */
    public $SumInDK;
    /**
     * The SumInDKDDS
     *
     * @var float
     */
    public $SumInDKDDS;
    /**
     * The SumPartDK
     *
     * @var float
     */
    public $SumPartDK;
    /**
     * The SumPartDKDDS
     *
     * @var float
     */
    public $SumPartDKDDS;
    /**
     * The SumATax
     *
     * @var float
     */
    public $SumATax;
    /**
     * The SumYC
     *
     * @var float
     */
    public $SumYC;
    /**
     * The SumTaxed3
     *
     * @var float
     */
    public $SumTaxed3;
    /**
     * The DealByP163
     *
     * @var string
     */
    public $DealByP163;
    /**
     * Constructor method for VATRegisterBuy
     *
     * @see parent::__construct()
     *
     * @param integer $_idVATRegisterBuy expect integer
     * @param string  $_docCode          expect string
     * @param string  $_docNum           expect string
     * @param string  $_docDate          expect string
     * @param string  $_accDate          expect string
     * @param string  $_idDealKind       expect string
     * @param integer $_idPartner        expect integer
     * @param string  $_pName            expect string
     * @param string  $_pAddr            expect string
     * @param string  $_pCity            expect string
     * @param string  $_pDanN            expect string
     * @param string  $_pDanR            expect string
     * @param string  $_pBulStat         expect string
     * @param integer $_idBranch         expect integer
     * @param string  $_chrBranchName    expect string
     * @param string  $_bAddr            expect string
     * @param string  $_bCity            expect string
     * @param string  $_bDanN            expect string
     * @param string  $_bDanR            expect string
     * @param string  $_bBulStat         expect string
     * @param string  $_dealEntity       expect string
     * @param string  $_dealPlace        expect string
     * @param integer $_idSource         expect integer
     * @param string  $_sourceName       expect string
     * @param float   $_mDDSTax          expect float
     * @param float   $_sumAll           expect float
     * @param float   $_sumNotReg        expect float
     * @param float   $_sumNotDK         expect float
     * @param float   $_sumInNotDK       expect float
     * @param float   $_sumDK            expect float
     * @param float   $_sumDKDDS         expect float
     * @param float   $_sumInDK          expect float
     * @param float   $_sumInDKDDS       expect float
     * @param float   $_sumPartDK        expect float
     * @param float   $_sumPartDKDDS     expect float
     * @param float   $_sumATax          expect float
     * @param float   $_sumYC            expect float
     * @param float   $_sumTaxed3        expect float
     * @param string  $_dealByP163       expect string
     *
     * @return ColibriERPStructVATRegisterBuy
     */
    public function __construct($_idVATRegisterBuy = null,$_docCode = null,$_docNum = null,$_docDate = null,$_accDate = null,$_idDealKind = null,$_idPartner = null,$_pName = null,$_pAddr = null,$_pCity = null,$_pDanN = null,$_pDanR = null,$_pBulStat = null,$_idBranch = null,$_chrBranchName = null,$_bAddr = null,$_bCity = null,$_bDanN = null,$_bDanR = null,$_bBulStat = null,$_dealEntity = null,$_dealPlace = null,$_idSource = null,$_sourceName = null,$_mDDSTax = null,$_sumAll = null,$_sumNotReg = null,$_sumNotDK = null,$_sumInNotDK = null,$_sumDK = null,$_sumDKDDS = null,$_sumInDK = null,$_sumInDKDDS = null,$_sumPartDK = null,$_sumPartDKDDS = null,$_sumATax = null,$_sumYC = null,$_sumTaxed3 = null,$_dealByP163 = null)
    {
        parent::__construct(array('idVATRegisterBuy'=>$_idVATRegisterBuy,'DocCode'=>$_docCode,'DocNum'=>$_docNum,'DocDate'=>$_docDate,'AccDate'=>$_accDate,'idDealKind'=>$_idDealKind,'idPartner'=>$_idPartner,'PName'=>$_pName,'PAddr'=>$_pAddr,'PCity'=>$_pCity,'PDanN'=>$_pDanN,'PDanR'=>$_pDanR,'PBulStat'=>$_pBulStat,'idBranch'=>$_idBranch,'chrBranchName'=>$_chrBranchName,'BAddr'=>$_bAddr,'BCity'=>$_bCity,'BDanN'=>$_bDanN,'BDanR'=>$_bDanR,'BBulStat'=>$_bBulStat,'DealEntity'=>$_dealEntity,'DealPlace'=>$_dealPlace,'idSource'=>$_idSource,'SourceName'=>$_sourceName,'MDDSTax'=>$_mDDSTax,'SumAll'=>$_sumAll,'SumNotReg'=>$_sumNotReg,'SumNotDK'=>$_sumNotDK,'SumInNotDK'=>$_sumInNotDK,'SumDK'=>$_sumDK,'SumDKDDS'=>$_sumDKDDS,'SumInDK'=>$_sumInDK,'SumInDKDDS'=>$_sumInDKDDS,'SumPartDK'=>$_sumPartDK,'SumPartDKDDS'=>$_sumPartDKDDS,'SumATax'=>$_sumATax,'SumYC'=>$_sumYC,'SumTaxed3'=>$_sumTaxed3,'DealByP163'=>$_dealByP163), false);
    }
    /**
     * Get idVATRegisterBuy value
     *
     * @return integer|null
     */
    public function getIdVATRegisterBuy()
    {
        return $this->idVATRegisterBuy;
    }
    /**
     * Set idVATRegisterBuy value
     *
     * @param integer $_idVATRegisterBuy the idVATRegisterBuy
     *
     * @return integer
     */
    public function setIdVATRegisterBuy($_idVATRegisterBuy)
    {
        return ($this->idVATRegisterBuy = $_idVATRegisterBuy);
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
     * Get idSource value
     *
     * @return integer|null
     */
    public function getIdSource()
    {
        return $this->idSource;
    }
    /**
     * Set idSource value
     *
     * @param integer $_idSource the idSource
     *
     * @return integer
     */
    public function setIdSource($_idSource)
    {
        return ($this->idSource = $_idSource);
    }
    /**
     * Get SourceName value
     *
     * @return string|null
     */
    public function getSourceName()
    {
        return $this->SourceName;
    }
    /**
     * Set SourceName value
     *
     * @param string $_sourceName the SourceName
     *
     * @return string
     */
    public function setSourceName($_sourceName)
    {
        return ($this->SourceName = $_sourceName);
    }
    /**
     * Get MDDSTax value
     *
     * @return float|null
     */
    public function getMDDSTax()
    {
        return $this->MDDSTax;
    }
    /**
     * Set MDDSTax value
     *
     * @param float $_mDDSTax the MDDSTax
     *
     * @return float
     */
    public function setMDDSTax($_mDDSTax)
    {
        return ($this->MDDSTax = $_mDDSTax);
    }
    /**
     * Get SumAll value
     *
     * @return float|null
     */
    public function getSumAll()
    {
        return $this->SumAll;
    }
    /**
     * Set SumAll value
     *
     * @param float $_sumAll the SumAll
     *
     * @return float
     */
    public function setSumAll($_sumAll)
    {
        return ($this->SumAll = $_sumAll);
    }
    /**
     * Get SumNotReg value
     *
     * @return float|null
     */
    public function getSumNotReg()
    {
        return $this->SumNotReg;
    }
    /**
     * Set SumNotReg value
     *
     * @param float $_sumNotReg the SumNotReg
     *
     * @return float
     */
    public function setSumNotReg($_sumNotReg)
    {
        return ($this->SumNotReg = $_sumNotReg);
    }
    /**
     * Get SumNotDK value
     *
     * @return float|null
     */
    public function getSumNotDK()
    {
        return $this->SumNotDK;
    }
    /**
     * Set SumNotDK value
     *
     * @param float $_sumNotDK the SumNotDK
     *
     * @return float
     */
    public function setSumNotDK($_sumNotDK)
    {
        return ($this->SumNotDK = $_sumNotDK);
    }
    /**
     * Get SumInNotDK value
     *
     * @return float|null
     */
    public function getSumInNotDK()
    {
        return $this->SumInNotDK;
    }
    /**
     * Set SumInNotDK value
     *
     * @param float $_sumInNotDK the SumInNotDK
     *
     * @return float
     */
    public function setSumInNotDK($_sumInNotDK)
    {
        return ($this->SumInNotDK = $_sumInNotDK);
    }
    /**
     * Get SumDK value
     *
     * @return float|null
     */
    public function getSumDK()
    {
        return $this->SumDK;
    }
    /**
     * Set SumDK value
     *
     * @param float $_sumDK the SumDK
     *
     * @return float
     */
    public function setSumDK($_sumDK)
    {
        return ($this->SumDK = $_sumDK);
    }
    /**
     * Get SumDKDDS value
     *
     * @return float|null
     */
    public function getSumDKDDS()
    {
        return $this->SumDKDDS;
    }
    /**
     * Set SumDKDDS value
     *
     * @param float $_sumDKDDS the SumDKDDS
     *
     * @return float
     */
    public function setSumDKDDS($_sumDKDDS)
    {
        return ($this->SumDKDDS = $_sumDKDDS);
    }
    /**
     * Get SumInDK value
     *
     * @return float|null
     */
    public function getSumInDK()
    {
        return $this->SumInDK;
    }
    /**
     * Set SumInDK value
     *
     * @param float $_sumInDK the SumInDK
     *
     * @return float
     */
    public function setSumInDK($_sumInDK)
    {
        return ($this->SumInDK = $_sumInDK);
    }
    /**
     * Get SumInDKDDS value
     *
     * @return float|null
     */
    public function getSumInDKDDS()
    {
        return $this->SumInDKDDS;
    }
    /**
     * Set SumInDKDDS value
     *
     * @param float $_sumInDKDDS the SumInDKDDS
     *
     * @return float
     */
    public function setSumInDKDDS($_sumInDKDDS)
    {
        return ($this->SumInDKDDS = $_sumInDKDDS);
    }
    /**
     * Get SumPartDK value
     *
     * @return float|null
     */
    public function getSumPartDK()
    {
        return $this->SumPartDK;
    }
    /**
     * Set SumPartDK value
     *
     * @param float $_sumPartDK the SumPartDK
     *
     * @return float
     */
    public function setSumPartDK($_sumPartDK)
    {
        return ($this->SumPartDK = $_sumPartDK);
    }
    /**
     * Get SumPartDKDDS value
     *
     * @return float|null
     */
    public function getSumPartDKDDS()
    {
        return $this->SumPartDKDDS;
    }
    /**
     * Set SumPartDKDDS value
     *
     * @param float $_sumPartDKDDS the SumPartDKDDS
     *
     * @return float
     */
    public function setSumPartDKDDS($_sumPartDKDDS)
    {
        return ($this->SumPartDKDDS = $_sumPartDKDDS);
    }
    /**
     * Get SumATax value
     *
     * @return float|null
     */
    public function getSumATax()
    {
        return $this->SumATax;
    }
    /**
     * Set SumATax value
     *
     * @param float $_sumATax the SumATax
     *
     * @return float
     */
    public function setSumATax($_sumATax)
    {
        return ($this->SumATax = $_sumATax);
    }
    /**
     * Get SumYC value
     *
     * @return float|null
     */
    public function getSumYC()
    {
        return $this->SumYC;
    }
    /**
     * Set SumYC value
     *
     * @param float $_sumYC the SumYC
     *
     * @return float
     */
    public function setSumYC($_sumYC)
    {
        return ($this->SumYC = $_sumYC);
    }
    /**
     * Get SumTaxed3 value
     *
     * @return float|null
     */
    public function getSumTaxed3()
    {
        return $this->SumTaxed3;
    }
    /**
     * Set SumTaxed3 value
     *
     * @param float $_sumTaxed3 the SumTaxed3
     *
     * @return float
     */
    public function setSumTaxed3($_sumTaxed3)
    {
        return ($this->SumTaxed3 = $_sumTaxed3);
    }
    /**
     * Get DealByP163 value
     *
     * @return string|null
     */
    public function getDealByP163()
    {
        return $this->DealByP163;
    }
    /**
     * Set DealByP163 value
     *
     * @param string $_dealByP163 the DealByP163
     *
     * @return string
     */
    public function setDealByP163($_dealByP163)
    {
        return ($this->DealByP163 = $_dealByP163);
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
     * @return ColibriERPStructVATRegisterBuy
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
