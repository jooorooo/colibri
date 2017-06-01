<?php
/**
 * File for class ColibriERPStructErpPartnerInfo
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
 * This class stands for ColibriERPStructErpPartnerInfo
 *  originally named erpPartnerInfo
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
class ColibriERPStructErpPartnerInfo extends ColibriERPWsdlClass
{
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
     * The PGLN
     * - doc : Partner GLN number
     *
     * @var string
     */
    public $PGLN;
    /**
     * The PPNum
     * - doc : Clients's system partner number
     *
     * @var string
     */
    public $PPNum;
    /**
     * The PAddr
     * - doc : Partner official (billing) address
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
     * The PPhone
     *
     * @var string
     */
    public $PPhone;
    /**
     * The PFax
     *
     * @var string
     */
    public $PFax;
    /**
     * The Pemail
     *
     * @var string
     */
    public $Pemail;
    /**
     * The PWeb
     *
     * @var string
     */
    public $PWeb;
    /**
     * The PCSalutation
     * - doc : First contact person salutation
     *
     * @var string
     */
    public $PCSalutation;
    /**
     * The PCPerson
     * - doc : First contact person full name
     *
     * @var string
     */
    public $PCPerson;
    /**
     * The lang
     * - doc : Partner communcation language
     *
     * @var string
     */
    public $lang;
    /**
     * The PNameL
     * - doc : sane as above, but in partner's local language
     *
     * @var string
     */
    public $PNameL;
    /**
     * The PAddrL
     *
     * @var string
     */
    public $PAddrL;
    /**
     * The PCityL
     *
     * @var string
     */
    public $PCityL;
    /**
     * The PStateL
     *
     * @var string
     */
    public $PStateL;
    /**
     * The PCPersonL
     *
     * @var string
     */
    public $PCPersonL;
    /**
     * The PDanR
     * - doc : Use 'yes' if partner is having VAT registration
     *
     * @var string
     */
    public $PDanR;
    /**
     * The PDanN
     * - doc : Partner VAT number if registered
     *
     * @var string
     */
    public $PDanN;
    /**
     * The PBulStat
     * - doc : Partner locar registration number (EIK)
     *
     * @var string
     */
    public $PBulStat;
    /**
     * The PMOL
     * - doc : Partner MOL person
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
     * The PNote
     *
     * @var string
     */
    public $PNote;
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
     * Constructor method for erpPartnerInfo
     *
     * @see parent::__construct()
     *
     * @param integer  $_idPartner    expect integer
     * @param string   $_pNum         expect string
     * @param string   $_pName        expect string
     * @param string   $_pGLN         expect string
     * @param string   $_pPNum        expect string
     * @param string   $_pAddr        expect string
     * @param string   $_pCity        expect string
     * @param string   $_pZip         expect string
     * @param string   $_pState       expect string
     * @param string   $_pCountry     expect string
     * @param string   $_pPhone       expect string
     * @param string   $_pFax         expect string
     * @param string   $_pemail       expect string
     * @param string   $_pWeb         expect string
     * @param string   $_pCSalutation expect string
     * @param string   $_pCPerson     expect string
     * @param string   $_lang         expect string
     * @param string   $_pNameL       expect string
     * @param string   $_pAddrL       expect string
     * @param string   $_pCityL       expect string
     * @param string   $_pStateL      expect string
     * @param string   $_pCPersonL    expect string
     * @param string   $_pDanR        expect string
     * @param string   $_pDanN        expect string
     * @param string   $_pBulStat     expect string
     * @param string   $_pMOL         expect string
     * @param string   $_pMOLPassport expect string
     * @param string   $_pNote        expect string
     * @param dateTime $_dtCreated    expect dateTime
     * @param dateTime $_dtModified   expect dateTime
     *
     * @return ColibriERPStructErpPartnerInfo
     */
    public function __construct($_idPartner = null,$_pNum = null,$_pName = null,$_pGLN = null,$_pPNum = null,$_pAddr = null,$_pCity = null,$_pZip = null,$_pState = null,$_pCountry = null,$_pPhone = null,$_pFax = null,$_pemail = null,$_pWeb = null,$_pCSalutation = null,$_pCPerson = null,$_lang = null,$_pNameL = null,$_pAddrL = null,$_pCityL = null,$_pStateL = null,$_pCPersonL = null,$_pDanR = null,$_pDanN = null,$_pBulStat = null,$_pMOL = null,$_pMOLPassport = null,$_pNote = null,$_dtCreated = null,$_dtModified = null)
    {
        parent::__construct(array('idPartner'=>$_idPartner,'PNum'=>$_pNum,'PName'=>$_pName,'PGLN'=>$_pGLN,'PPNum'=>$_pPNum,'PAddr'=>$_pAddr,'PCity'=>$_pCity,'PZip'=>$_pZip,'PState'=>$_pState,'PCountry'=>$_pCountry,'PPhone'=>$_pPhone,'PFax'=>$_pFax,'Pemail'=>$_pemail,'PWeb'=>$_pWeb,'PCSalutation'=>$_pCSalutation,'PCPerson'=>$_pCPerson,'lang'=>$_lang,'PNameL'=>$_pNameL,'PAddrL'=>$_pAddrL,'PCityL'=>$_pCityL,'PStateL'=>$_pStateL,'PCPersonL'=>$_pCPersonL,'PDanR'=>$_pDanR,'PDanN'=>$_pDanN,'PBulStat'=>$_pBulStat,'PMOL'=>$_pMOL,'PMOLPassport'=>$_pMOLPassport,'PNote'=>$_pNote,'dtCreated'=>$_dtCreated,'dtModified'=>$_dtModified), false);
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
     * Get PPNum value
     *
     * @return string|null
     */
    public function getPPNum()
    {
        return $this->PPNum;
    }
    /**
     * Set PPNum value
     *
     * @param string $_pPNum the PPNum
     *
     * @return string
     */
    public function setPPNum($_pPNum)
    {
        return ($this->PPNum = $_pPNum);
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
     * Get PPhone value
     *
     * @return string|null
     */
    public function getPPhone()
    {
        return $this->PPhone;
    }
    /**
     * Set PPhone value
     *
     * @param string $_pPhone the PPhone
     *
     * @return string
     */
    public function setPPhone($_pPhone)
    {
        return ($this->PPhone = $_pPhone);
    }
    /**
     * Get PFax value
     *
     * @return string|null
     */
    public function getPFax()
    {
        return $this->PFax;
    }
    /**
     * Set PFax value
     *
     * @param string $_pFax the PFax
     *
     * @return string
     */
    public function setPFax($_pFax)
    {
        return ($this->PFax = $_pFax);
    }
    /**
     * Get Pemail value
     *
     * @return string|null
     */
    public function getPemail()
    {
        return $this->Pemail;
    }
    /**
     * Set Pemail value
     *
     * @param string $_pemail the Pemail
     *
     * @return string
     */
    public function setPemail($_pemail)
    {
        return ($this->Pemail = $_pemail);
    }
    /**
     * Get PWeb value
     *
     * @return string|null
     */
    public function getPWeb()
    {
        return $this->PWeb;
    }
    /**
     * Set PWeb value
     *
     * @param string $_pWeb the PWeb
     *
     * @return string
     */
    public function setPWeb($_pWeb)
    {
        return ($this->PWeb = $_pWeb);
    }
    /**
     * Get PCSalutation value
     *
     * @return string|null
     */
    public function getPCSalutation()
    {
        return $this->PCSalutation;
    }
    /**
     * Set PCSalutation value
     *
     * @param string $_pCSalutation the PCSalutation
     *
     * @return string
     */
    public function setPCSalutation($_pCSalutation)
    {
        return ($this->PCSalutation = $_pCSalutation);
    }
    /**
     * Get PCPerson value
     *
     * @return string|null
     */
    public function getPCPerson()
    {
        return $this->PCPerson;
    }
    /**
     * Set PCPerson value
     *
     * @param string $_pCPerson the PCPerson
     *
     * @return string
     */
    public function setPCPerson($_pCPerson)
    {
        return ($this->PCPerson = $_pCPerson);
    }
    /**
     * Get lang value
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     *
     * @param string $_lang the lang
     *
     * @return string
     */
    public function setLang($_lang)
    {
        return ($this->lang = $_lang);
    }
    /**
     * Get PNameL value
     *
     * @return string|null
     */
    public function getPNameL()
    {
        return $this->PNameL;
    }
    /**
     * Set PNameL value
     *
     * @param string $_pNameL the PNameL
     *
     * @return string
     */
    public function setPNameL($_pNameL)
    {
        return ($this->PNameL = $_pNameL);
    }
    /**
     * Get PAddrL value
     *
     * @return string|null
     */
    public function getPAddrL()
    {
        return $this->PAddrL;
    }
    /**
     * Set PAddrL value
     *
     * @param string $_pAddrL the PAddrL
     *
     * @return string
     */
    public function setPAddrL($_pAddrL)
    {
        return ($this->PAddrL = $_pAddrL);
    }
    /**
     * Get PCityL value
     *
     * @return string|null
     */
    public function getPCityL()
    {
        return $this->PCityL;
    }
    /**
     * Set PCityL value
     *
     * @param string $_pCityL the PCityL
     *
     * @return string
     */
    public function setPCityL($_pCityL)
    {
        return ($this->PCityL = $_pCityL);
    }
    /**
     * Get PStateL value
     *
     * @return string|null
     */
    public function getPStateL()
    {
        return $this->PStateL;
    }
    /**
     * Set PStateL value
     *
     * @param string $_pStateL the PStateL
     *
     * @return string
     */
    public function setPStateL($_pStateL)
    {
        return ($this->PStateL = $_pStateL);
    }
    /**
     * Get PCPersonL value
     *
     * @return string|null
     */
    public function getPCPersonL()
    {
        return $this->PCPersonL;
    }
    /**
     * Set PCPersonL value
     *
     * @param string $_pCPersonL the PCPersonL
     *
     * @return string
     */
    public function setPCPersonL($_pCPersonL)
    {
        return ($this->PCPersonL = $_pCPersonL);
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
     * Get PNote value
     *
     * @return string|null
     */
    public function getPNote()
    {
        return $this->PNote;
    }
    /**
     * Set PNote value
     *
     * @param string $_pNote the PNote
     *
     * @return string
     */
    public function setPNote($_pNote)
    {
        return ($this->PNote = $_pNote);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see   ColibriERPWsdlClass::__set_state()
     * @uses  ColibriERPWsdlClass::__set_state()
     * @param array  $_array     the exported values
     * @param string $_className expect string
     *
     * @return ColibriERPStructErpPartnerInfo
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
