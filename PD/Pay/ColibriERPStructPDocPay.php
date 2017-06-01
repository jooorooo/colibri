<?php
/**
 * File for class ColibriERPStructPDocPay
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
 * This class stands for ColibriERPStructPDocPay
 *  originally named pDocPay
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
class ColibriERPStructPDocPay extends ColibriERPWsdlClass
{
    /**
     * The idPDocPay
     *
     * @var integer
     */
    public $idPDocPay;
    /**
     * The idPDoc
     *
     * @var integer
     */
    public $idPDoc;
    /**
     * The idBB
     *
     * @var integer
     */
    public $idBB;
    /**
     * The aNum
     *
     * @var string
     */
    public $aNum;
    /**
     * The DocCode
     *
     * @var string
     */
    public $DocCode;
    /**
     * The PDocNum
     *
     * @var string
     */
    public $PDocNum;
    /**
     * The PDocDate
     *
     * @var date
     */
    public $PDocDate;
    /**
     * The PAccDate
     *
     * @var date
     */
    public $PAccDate;
    /**
     * The PSuma
     *
     * @var double
     */
    public $PSuma;
    /**
     * The PSumaD
     *
     * @var double
     */
    public $PSumaD;
    /**
     * The curCode
     *
     * @var string
     */
    public $curCode;
    /**
     * The PCurRateD
     *
     * @var double
     */
    public $PCurRateD;
    /**
     * The PCurRate
     *
     * @var double
     */
    public $PCurRate;
    /**
     * The PSumaBGL
     *
     * @var double
     */
    public $PSumaBGL;
    /**
     * The PCurRateDiff
     *
     * @var double
     */
    public $PCurRateDiff;
    /**
     * The PDescription
     *
     * @var string
     */
    public $PDescription;
    /**
     * Constructor method for pDocPay
     *
     * @see parent::__construct()
     *
     * @param integer $_idPDocPay    expect integer
     * @param integer $_idPDoc       expect integer
     * @param integer $_idBB         expect integer
     * @param string  $_aNum         expect string
     * @param string  $_docCode      expect string
     * @param string  $_pDocNum      expect string
     * @param date    $_pDocDate     expect date
     * @param date    $_pAccDate     expect date
     * @param double  $_pSuma        expect double
     * @param double  $_pSumaD       expect double
     * @param string  $_curCode      expect string
     * @param double  $_pCurRateD    expect double
     * @param double  $_pCurRate     expect double
     * @param double  $_pSumaBGL     expect double
     * @param double  $_pCurRateDiff expect double
     * @param string  $_pDescription expect string
     *
     * @return ColibriERPStructPDocPay
     */
    public function __construct($_idPDocPay = null,$_idPDoc = null,$_idBB = null,$_aNum = null,$_docCode = null,$_pDocNum = null,$_pDocDate = null,$_pAccDate = null,$_pSuma = null,$_pSumaD = null,$_curCode = null,$_pCurRateD = null,$_pCurRate = null,$_pSumaBGL = null,$_pCurRateDiff = null,$_pDescription = null)
    {
        parent::__construct(array('idPDocPay'=>$_idPDocPay,'idPDoc'=>$_idPDoc,'idBB'=>$_idBB,'aNum'=>$_aNum,'DocCode'=>$_docCode,'PDocNum'=>$_pDocNum,'PDocDate'=>$_pDocDate,'PAccDate'=>$_pAccDate,'PSuma'=>$_pSuma,'PSumaD'=>$_pSumaD,'curCode'=>$_curCode,'PCurRateD'=>$_pCurRateD,'PCurRate'=>$_pCurRate,'PSumaBGL'=>$_pSumaBGL,'PCurRateDiff'=>$_pCurRateDiff,'PDescription'=>$_pDescription), false);
    }
    /**
     * Get idPDocPay value
     *
     * @return integer|null
     */
    public function getIdPDocPay()
    {
        return $this->idPDocPay;
    }
    /**
     * Set idPDocPay value
     *
     * @param integer $_idPDocPay the idPDocPay
     *
     * @return integer
     */
    public function setIdPDocPay($_idPDocPay)
    {
        return ($this->idPDocPay = $_idPDocPay);
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
     * Get idBB value
     *
     * @return integer|null
     */
    public function getIdBB()
    {
        return $this->idBB;
    }
    /**
     * Set idBB value
     *
     * @param integer $_idBB the idBB
     *
     * @return integer
     */
    public function setIdBB($_idBB)
    {
        return ($this->idBB = $_idBB);
    }
    /**
     * Get aNum value
     *
     * @return string|null
     */
    public function getANum()
    {
        return $this->aNum;
    }
    /**
     * Set aNum value
     *
     * @param string $_aNum the aNum
     *
     * @return string
     */
    public function setANum($_aNum)
    {
        return ($this->aNum = $_aNum);
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
     * Get PDocNum value
     *
     * @return string|null
     */
    public function getPDocNum()
    {
        return $this->PDocNum;
    }
    /**
     * Set PDocNum value
     *
     * @param string $_pDocNum the PDocNum
     *
     * @return string
     */
    public function setPDocNum($_pDocNum)
    {
        return ($this->PDocNum = $_pDocNum);
    }
    /**
     * Get PDocDate value
     *
     * @return date|null
     */
    public function getPDocDate()
    {
        return $this->PDocDate;
    }
    /**
     * Set PDocDate value
     *
     * @param date $_pDocDate the PDocDate
     *
     * @return date
     */
    public function setPDocDate($_pDocDate)
    {
        return ($this->PDocDate = $_pDocDate);
    }
    /**
     * Get PAccDate value
     *
     * @return date|null
     */
    public function getPAccDate()
    {
        return $this->PAccDate;
    }
    /**
     * Set PAccDate value
     *
     * @param date $_pAccDate the PAccDate
     *
     * @return date
     */
    public function setPAccDate($_pAccDate)
    {
        return ($this->PAccDate = $_pAccDate);
    }
    /**
     * Get PSuma value
     *
     * @return double|null
     */
    public function getPSuma()
    {
        return $this->PSuma;
    }
    /**
     * Set PSuma value
     *
     * @param double $_pSuma the PSuma
     *
     * @return double
     */
    public function setPSuma($_pSuma)
    {
        return ($this->PSuma = $_pSuma);
    }
    /**
     * Get PSumaD value
     *
     * @return double|null
     */
    public function getPSumaD()
    {
        return $this->PSumaD;
    }
    /**
     * Set PSumaD value
     *
     * @param double $_pSumaD the PSumaD
     *
     * @return double
     */
    public function setPSumaD($_pSumaD)
    {
        return ($this->PSumaD = $_pSumaD);
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
     * Get PCurRateD value
     *
     * @return double|null
     */
    public function getPCurRateD()
    {
        return $this->PCurRateD;
    }
    /**
     * Set PCurRateD value
     *
     * @param double $_pCurRateD the PCurRateD
     *
     * @return double
     */
    public function setPCurRateD($_pCurRateD)
    {
        return ($this->PCurRateD = $_pCurRateD);
    }
    /**
     * Get PCurRate value
     *
     * @return double|null
     */
    public function getPCurRate()
    {
        return $this->PCurRate;
    }
    /**
     * Set PCurRate value
     *
     * @param double $_pCurRate the PCurRate
     *
     * @return double
     */
    public function setPCurRate($_pCurRate)
    {
        return ($this->PCurRate = $_pCurRate);
    }
    /**
     * Get PSumaBGL value
     *
     * @return double|null
     */
    public function getPSumaBGL()
    {
        return $this->PSumaBGL;
    }
    /**
     * Set PSumaBGL value
     *
     * @param double $_pSumaBGL the PSumaBGL
     *
     * @return double
     */
    public function setPSumaBGL($_pSumaBGL)
    {
        return ($this->PSumaBGL = $_pSumaBGL);
    }
    /**
     * Get PCurRateDiff value
     *
     * @return double|null
     */
    public function getPCurRateDiff()
    {
        return $this->PCurRateDiff;
    }
    /**
     * Set PCurRateDiff value
     *
     * @param double $_pCurRateDiff the PCurRateDiff
     *
     * @return double
     */
    public function setPCurRateDiff($_pCurRateDiff)
    {
        return ($this->PCurRateDiff = $_pCurRateDiff);
    }
    /**
     * Get PDescription value
     *
     * @return string|null
     */
    public function getPDescription()
    {
        return $this->PDescription;
    }
    /**
     * Set PDescription value
     *
     * @param string $_pDescription the PDescription
     *
     * @return string
     */
    public function setPDescription($_pDescription)
    {
        return ($this->PDescription = $_pDescription);
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
     * @return ColibriERPStructPDocPay
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
