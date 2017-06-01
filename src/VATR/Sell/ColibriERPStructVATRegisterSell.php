<?php
/**
 * File for class ColibriERPStructVATRegisterSell
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
 * This class stands for ColibriERPStructVATRegisterSell
 *  originally named VATRegisterSell
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
class ColibriERPStructVATRegisterSell extends ColibriERPWsdlClass
{
    /**
     * The idVATRegisterSell
     *
     * @var integer
     */
    public $idVATRegisterSell;
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
     * The SumTaxed
     *
     * @var float
     */
    public $SumTaxed;
    /**
     * The SumDDS
     *
     * @var float
     */
    public $SumDDS;
    /**
     * The SumExport
     *
     * @var float
     */
    public $SumExport;
    /**
     * The SumNoTaxed
     *
     * @var float
     */
    public $SumNoTaxed;
    /**
     * The SumATax
     *
     * @var float
     */
    public $SumATax;
    /**
     * The SumOtherDDS
     *
     * @var float
     */
    public $SumOtherDDS;
    /**
     * The SumTaxed20
     *
     * @var float
     */
    public $SumTaxed20;
    /**
     * The SumDDS20
     *
     * @var float
     */
    public $SumDDS20;
    /**
     * The SumVOP
     *
     * @var float
     */
    public $SumVOP;
    /**
     * The SumTaxedP82
     *
     * @var float
     */
    public $SumTaxedP82;
    /**
     * The SumDDSVOP
     *
     * @var float
     */
    public $SumDDSVOP;
    /**
     * The SumTaxed7
     *
     * @var float
     */
    public $SumTaxed7;
    /**
     * The SumDDS7
     *
     * @var float
     */
    public $SumDDS7;
    /**
     * The SumVOD
     *
     * @var float
     */
    public $SumVOD;
    /**
     * The SumTaxed0
     *
     * @var float
     */
    public $SumTaxed0;
    /**
     * The SumTaxedP21
     *
     * @var float
     */
    public $SumTaxedP21;
    /**
     * The SumTaxedP69
     *
     * @var float
     */
    public $SumTaxedP69;
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
     * Constructor method for VATRegisterSell
     *
     * @see parent::__construct()
     *
     * @param integer $_idVATRegisterSell expect integer
     * @param string  $_docCode           expect string
     * @param string  $_docNum            expect string
     * @param string  $_docDate           expect string
     * @param string  $_accDate           expect string
     * @param string  $_idDealKind        expect string
     * @param integer $_idPartner         expect integer
     * @param string  $_pName             expect string
     * @param string  $_pAddr             expect string
     * @param string  $_pCity             expect string
     * @param string  $_pDanN             expect string
     * @param string  $_pDanR             expect string
     * @param string  $_pBulStat          expect string
     * @param integer $_idBranch          expect integer
     * @param string  $_chrBranchName     expect string
     * @param string  $_bAddr             expect string
     * @param string  $_bCity             expect string
     * @param string  $_bDanN             expect string
     * @param string  $_bDanR             expect string
     * @param string  $_bBulStat          expect string
     * @param string  $_dealEntity        expect string
     * @param string  $_dealPlace         expect string
     * @param integer $_idSource          expect integer
     * @param string  $_sourceName        expect string
     * @param float   $_mDDSTax           expect float
     * @param float   $_sumAll            expect float
     * @param float   $_sumTaxed          expect float
     * @param float   $_sumDDS            expect float
     * @param float   $_sumExport         expect float
     * @param float   $_sumNoTaxed        expect float
     * @param float   $_sumATax           expect float
     * @param float   $_sumOtherDDS       expect float
     * @param float   $_sumTaxed20        expect float
     * @param float   $_sumDDS20          expect float
     * @param float   $_sumVOP            expect float
     * @param float   $_sumTaxedP82       expect float
     * @param float   $_sumDDSVOP         expect float
     * @param float   $_sumTaxed7         expect float
     * @param float   $_sumDDS7           expect float
     * @param float   $_sumVOD            expect float
     * @param float   $_sumTaxed0         expect float
     * @param float   $_sumTaxedP21       expect float
     * @param float   $_sumTaxedP69       expect float
     * @param float   $_sumTaxed3         expect float
     * @param string  $_dealByP163        expect string
     *
     * @return ColibriERPStructVATRegisterSell
     */
    public function __construct($_idVATRegisterSell = null,$_docCode = null,$_docNum = null,$_docDate = null,$_accDate = null,$_idDealKind = null,$_idPartner = null,$_pName = null,$_pAddr = null,$_pCity = null,$_pDanN = null,$_pDanR = null,$_pBulStat = null,$_idBranch = null,$_chrBranchName = null,$_bAddr = null,$_bCity = null,$_bDanN = null,$_bDanR = null,$_bBulStat = null,$_dealEntity = null,$_dealPlace = null,$_idSource = null,$_sourceName = null,$_mDDSTax = null,$_sumAll = null,$_sumTaxed = null,$_sumDDS = null,$_sumExport = null,$_sumNoTaxed = null,$_sumATax = null,$_sumOtherDDS = null,$_sumTaxed20 = null,$_sumDDS20 = null,$_sumVOP = null,$_sumTaxedP82 = null,$_sumDDSVOP = null,$_sumTaxed7 = null,$_sumDDS7 = null,$_sumVOD = null,$_sumTaxed0 = null,$_sumTaxedP21 = null,$_sumTaxedP69 = null,$_sumTaxed3 = null,$_dealByP163 = null)
    {
        parent::__construct(array('idVATRegisterSell'=>$_idVATRegisterSell,'DocCode'=>$_docCode,'DocNum'=>$_docNum,'DocDate'=>$_docDate,'AccDate'=>$_accDate,'idDealKind'=>$_idDealKind,'idPartner'=>$_idPartner,'PName'=>$_pName,'PAddr'=>$_pAddr,'PCity'=>$_pCity,'PDanN'=>$_pDanN,'PDanR'=>$_pDanR,'PBulStat'=>$_pBulStat,'idBranch'=>$_idBranch,'chrBranchName'=>$_chrBranchName,'BAddr'=>$_bAddr,'BCity'=>$_bCity,'BDanN'=>$_bDanN,'BDanR'=>$_bDanR,'BBulStat'=>$_bBulStat,'DealEntity'=>$_dealEntity,'DealPlace'=>$_dealPlace,'idSource'=>$_idSource,'SourceName'=>$_sourceName,'MDDSTax'=>$_mDDSTax,'SumAll'=>$_sumAll,'SumTaxed'=>$_sumTaxed,'SumDDS'=>$_sumDDS,'SumExport'=>$_sumExport,'SumNoTaxed'=>$_sumNoTaxed,'SumATax'=>$_sumATax,'SumOtherDDS'=>$_sumOtherDDS,'SumTaxed20'=>$_sumTaxed20,'SumDDS20'=>$_sumDDS20,'SumVOP'=>$_sumVOP,'SumTaxedP82'=>$_sumTaxedP82,'SumDDSVOP'=>$_sumDDSVOP,'SumTaxed7'=>$_sumTaxed7,'SumDDS7'=>$_sumDDS7,'SumVOD'=>$_sumVOD,'SumTaxed0'=>$_sumTaxed0,'SumTaxedP21'=>$_sumTaxedP21,'SumTaxedP69'=>$_sumTaxedP69,'SumTaxed3'=>$_sumTaxed3,'DealByP163'=>$_dealByP163), false);
    }
    /**
     * Get idVATRegisterSell value
     *
     * @return integer|null
     */
    public function getIdVATRegisterSell()
    {
        return $this->idVATRegisterSell;
    }
    /**
     * Set idVATRegisterSell value
     *
     * @param integer $_idVATRegisterSell the idVATRegisterSell
     *
     * @return integer
     */
    public function setIdVATRegisterSell($_idVATRegisterSell)
    {
        return ($this->idVATRegisterSell = $_idVATRegisterSell);
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
     * Get SumTaxed value
     *
     * @return float|null
     */
    public function getSumTaxed()
    {
        return $this->SumTaxed;
    }
    /**
     * Set SumTaxed value
     *
     * @param float $_sumTaxed the SumTaxed
     *
     * @return float
     */
    public function setSumTaxed($_sumTaxed)
    {
        return ($this->SumTaxed = $_sumTaxed);
    }
    /**
     * Get SumDDS value
     *
     * @return float|null
     */
    public function getSumDDS()
    {
        return $this->SumDDS;
    }
    /**
     * Set SumDDS value
     *
     * @param float $_sumDDS the SumDDS
     *
     * @return float
     */
    public function setSumDDS($_sumDDS)
    {
        return ($this->SumDDS = $_sumDDS);
    }
    /**
     * Get SumExport value
     *
     * @return float|null
     */
    public function getSumExport()
    {
        return $this->SumExport;
    }
    /**
     * Set SumExport value
     *
     * @param float $_sumExport the SumExport
     *
     * @return float
     */
    public function setSumExport($_sumExport)
    {
        return ($this->SumExport = $_sumExport);
    }
    /**
     * Get SumNoTaxed value
     *
     * @return float|null
     */
    public function getSumNoTaxed()
    {
        return $this->SumNoTaxed;
    }
    /**
     * Set SumNoTaxed value
     *
     * @param float $_sumNoTaxed the SumNoTaxed
     *
     * @return float
     */
    public function setSumNoTaxed($_sumNoTaxed)
    {
        return ($this->SumNoTaxed = $_sumNoTaxed);
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
     * Get SumOtherDDS value
     *
     * @return float|null
     */
    public function getSumOtherDDS()
    {
        return $this->SumOtherDDS;
    }
    /**
     * Set SumOtherDDS value
     *
     * @param float $_sumOtherDDS the SumOtherDDS
     *
     * @return float
     */
    public function setSumOtherDDS($_sumOtherDDS)
    {
        return ($this->SumOtherDDS = $_sumOtherDDS);
    }
    /**
     * Get SumTaxed20 value
     *
     * @return float|null
     */
    public function getSumTaxed20()
    {
        return $this->SumTaxed20;
    }
    /**
     * Set SumTaxed20 value
     *
     * @param float $_sumTaxed20 the SumTaxed20
     *
     * @return float
     */
    public function setSumTaxed20($_sumTaxed20)
    {
        return ($this->SumTaxed20 = $_sumTaxed20);
    }
    /**
     * Get SumDDS20 value
     *
     * @return float|null
     */
    public function getSumDDS20()
    {
        return $this->SumDDS20;
    }
    /**
     * Set SumDDS20 value
     *
     * @param float $_sumDDS20 the SumDDS20
     *
     * @return float
     */
    public function setSumDDS20($_sumDDS20)
    {
        return ($this->SumDDS20 = $_sumDDS20);
    }
    /**
     * Get SumVOP value
     *
     * @return float|null
     */
    public function getSumVOP()
    {
        return $this->SumVOP;
    }
    /**
     * Set SumVOP value
     *
     * @param float $_sumVOP the SumVOP
     *
     * @return float
     */
    public function setSumVOP($_sumVOP)
    {
        return ($this->SumVOP = $_sumVOP);
    }
    /**
     * Get SumTaxedP82 value
     *
     * @return float|null
     */
    public function getSumTaxedP82()
    {
        return $this->SumTaxedP82;
    }
    /**
     * Set SumTaxedP82 value
     *
     * @param float $_sumTaxedP82 the SumTaxedP82
     *
     * @return float
     */
    public function setSumTaxedP82($_sumTaxedP82)
    {
        return ($this->SumTaxedP82 = $_sumTaxedP82);
    }
    /**
     * Get SumDDSVOP value
     *
     * @return float|null
     */
    public function getSumDDSVOP()
    {
        return $this->SumDDSVOP;
    }
    /**
     * Set SumDDSVOP value
     *
     * @param float $_sumDDSVOP the SumDDSVOP
     *
     * @return float
     */
    public function setSumDDSVOP($_sumDDSVOP)
    {
        return ($this->SumDDSVOP = $_sumDDSVOP);
    }
    /**
     * Get SumTaxed7 value
     *
     * @return float|null
     */
    public function getSumTaxed7()
    {
        return $this->SumTaxed7;
    }
    /**
     * Set SumTaxed7 value
     *
     * @param float $_sumTaxed7 the SumTaxed7
     *
     * @return float
     */
    public function setSumTaxed7($_sumTaxed7)
    {
        return ($this->SumTaxed7 = $_sumTaxed7);
    }
    /**
     * Get SumDDS7 value
     *
     * @return float|null
     */
    public function getSumDDS7()
    {
        return $this->SumDDS7;
    }
    /**
     * Set SumDDS7 value
     *
     * @param float $_sumDDS7 the SumDDS7
     *
     * @return float
     */
    public function setSumDDS7($_sumDDS7)
    {
        return ($this->SumDDS7 = $_sumDDS7);
    }
    /**
     * Get SumVOD value
     *
     * @return float|null
     */
    public function getSumVOD()
    {
        return $this->SumVOD;
    }
    /**
     * Set SumVOD value
     *
     * @param float $_sumVOD the SumVOD
     *
     * @return float
     */
    public function setSumVOD($_sumVOD)
    {
        return ($this->SumVOD = $_sumVOD);
    }
    /**
     * Get SumTaxed0 value
     *
     * @return float|null
     */
    public function getSumTaxed0()
    {
        return $this->SumTaxed0;
    }
    /**
     * Set SumTaxed0 value
     *
     * @param float $_sumTaxed0 the SumTaxed0
     *
     * @return float
     */
    public function setSumTaxed0($_sumTaxed0)
    {
        return ($this->SumTaxed0 = $_sumTaxed0);
    }
    /**
     * Get SumTaxedP21 value
     *
     * @return float|null
     */
    public function getSumTaxedP21()
    {
        return $this->SumTaxedP21;
    }
    /**
     * Set SumTaxedP21 value
     *
     * @param float $_sumTaxedP21 the SumTaxedP21
     *
     * @return float
     */
    public function setSumTaxedP21($_sumTaxedP21)
    {
        return ($this->SumTaxedP21 = $_sumTaxedP21);
    }
    /**
     * Get SumTaxedP69 value
     *
     * @return float|null
     */
    public function getSumTaxedP69()
    {
        return $this->SumTaxedP69;
    }
    /**
     * Set SumTaxedP69 value
     *
     * @param float $_sumTaxedP69 the SumTaxedP69
     *
     * @return float
     */
    public function setSumTaxedP69($_sumTaxedP69)
    {
        return ($this->SumTaxedP69 = $_sumTaxedP69);
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
     * @return ColibriERPStructVATRegisterSell
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
