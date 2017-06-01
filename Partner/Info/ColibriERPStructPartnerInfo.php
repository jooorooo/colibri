<?php
/**
 * File for class ColibriERPStructPartnerInfo
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
 * This class stands for ColibriERPStructPartnerInfo
 *  originally named partnerInfo
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
class ColibriERPStructPartnerInfo extends ColibriERPWsdlClass
{
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
     * The Country
     *
     * @var string
     */
    public $Country;
    /**
     * The PCPerson
     *
     * @var string
     */
    public $PCPerson;
    /**
     * The SumInvoiceBGN
     *
     * @var string
     */
    public $SumInvoiceBGN;
    /**
     * The SumPaidBGN
     *
     * @var string
     */
    public $SumPaidBGN;
    /**
     * Constructor method for partnerInfo
     *
     * @see parent::__construct()
     *
     * @param string $_pNum          expect string
     * @param string $_pName         expect string
     * @param string $_pAddr         expect string
     * @param string $_pCity         expect string
     * @param string $_country       expect string
     * @param string $_pCPerson      expect string
     * @param string $_sumInvoiceBGN expect string
     * @param string $_sumPaidBGN    expect string
     *
     * @return ColibriERPStructPartnerInfo
     */
    public function __construct($_pNum = null,$_pName = null,$_pAddr = null,$_pCity = null,$_country = null,$_pCPerson = null,$_sumInvoiceBGN = null,$_sumPaidBGN = null)
    {
        parent::__construct(array('PNum'=>$_pNum,'PName'=>$_pName,'PAddr'=>$_pAddr,'PCity'=>$_pCity,'Country'=>$_country,'PCPerson'=>$_pCPerson,'SumInvoiceBGN'=>$_sumInvoiceBGN,'SumPaidBGN'=>$_sumPaidBGN), false);
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
     * Get Country value
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     *
     * @param string $_country the Country
     *
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->Country = $_country);
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
     * Get SumInvoiceBGN value
     *
     * @return string|null
     */
    public function getSumInvoiceBGN()
    {
        return $this->SumInvoiceBGN;
    }
    /**
     * Set SumInvoiceBGN value
     *
     * @param string $_sumInvoiceBGN the SumInvoiceBGN
     *
     * @return string
     */
    public function setSumInvoiceBGN($_sumInvoiceBGN)
    {
        return ($this->SumInvoiceBGN = $_sumInvoiceBGN);
    }
    /**
     * Get SumPaidBGN value
     *
     * @return string|null
     */
    public function getSumPaidBGN()
    {
        return $this->SumPaidBGN;
    }
    /**
     * Set SumPaidBGN value
     *
     * @param string $_sumPaidBGN the SumPaidBGN
     *
     * @return string
     */
    public function setSumPaidBGN($_sumPaidBGN)
    {
        return ($this->SumPaidBGN = $_sumPaidBGN);
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
     * @return ColibriERPStructPartnerInfo
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
