<?php
/**
 * File for class ColibriERPStructAccdoc
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
 * This class stands for ColibriERPStructAccdoc
 *  originally named accdoc
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
class ColibriERPStructAccdoc extends ColibriERPWsdlClass
{
    /**
     * The idaccdoc
     *
     * @var integer
     */
    public $idaccdoc;
    /**
     * The AccDate
     *
     * @var dateTime
     */
    public $AccDate;
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
     * @var date
     */
    public $DocDate;
    /**
     * The adDescr
     *
     * @var string
     */
    public $adDescr;
    /**
     * The fRegNum
     *
     * @var string
     */
    public $fRegNum;
    /**
     * The fRegDate
     *
     * @var date
     */
    public $fRegDate;
    /**
     * The ITEMS
     *
     * @var array
     */
    public $ITEMS;
    /**
     * Constructor method for accdoc
     *
     * @see parent::__construct()
     *
     * @param integer  $_idaccdoc expect integer
     * @param dateTime $_accDate  expect dateTime
     * @param string   $_docCode  expect string
     * @param string   $_docNum   expect string
     * @param date     $_docDate  expect date
     * @param string   $_adDescr  expect string
     * @param string   $_fRegNum  expect string
     * @param date     $_fRegDate expect date
     * @param array    $_iTEMS    expect array
     *
     * @return ColibriERPStructAccdoc
     */
    public function __construct($_idaccdoc = null,$_accDate = null,$_docCode = null,$_docNum = null,$_docDate = null,$_adDescr = null,$_fRegNum = null,$_fRegDate = null,$_iTEMS = null)
    {
        parent::__construct(array('idaccdoc'=>$_idaccdoc,'AccDate'=>$_accDate,'DocCode'=>$_docCode,'DocNum'=>$_docNum,'DocDate'=>$_docDate,'adDescr'=>$_adDescr,'fRegNum'=>$_fRegNum,'fRegDate'=>$_fRegDate,'ITEMS'=>$_iTEMS), false);
    }
    /**
     * Get idaccdoc value
     *
     * @return integer|null
     */
    public function getIdaccdoc()
    {
        return $this->idaccdoc;
    }
    /**
     * Set idaccdoc value
     *
     * @param integer $_idaccdoc the idaccdoc
     *
     * @return integer
     */
    public function setIdaccdoc($_idaccdoc)
    {
        return ($this->idaccdoc = $_idaccdoc);
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
     * Get adDescr value
     *
     * @return string|null
     */
    public function getAdDescr()
    {
        return $this->adDescr;
    }
    /**
     * Set adDescr value
     *
     * @param string $_adDescr the adDescr
     *
     * @return string
     */
    public function setAdDescr($_adDescr)
    {
        return ($this->adDescr = $_adDescr);
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
     * Get fRegDate value
     *
     * @return date|null
     */
    public function getFRegDate()
    {
        return $this->fRegDate;
    }
    /**
     * Set fRegDate value
     *
     * @param date $_fRegDate the fRegDate
     *
     * @return date
     */
    public function setFRegDate($_fRegDate)
    {
        return ($this->fRegDate = $_fRegDate);
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
     * @return ColibriERPStructAccdoc
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
