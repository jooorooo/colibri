<?php
/**
 * File for class ColibriERPStructInvoiceInfo
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
 * This class stands for ColibriERPStructInvoiceInfo
 *  originally named InvoiceInfo
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
class ColibriERPStructInvoiceInfo extends ColibriERPWsdlClass
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
     * The PaymentDate
     *
     * @var string
     */
    public $PaymentDate;
    /**
     * The DocCur
     *
     * @var string
     */
    public $DocCur;
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
     * Constructor method for InvoiceInfo
     *
     * @see parent::__construct()
     *
     * @param string $_docNum          expect string
     * @param string $_docCode         expect string
     * @param string $_docType         expect string
     * @param string $_specDocType     expect string
     * @param string $_docDate         expect string
     * @param string $_paymentDate     expect string
     * @param string $_docCur          expect string
     * @param string $_docInvNum       expect string
     * @param string $_docAmount       expect string
     * @param string $_docPaid         expect string
     * @param string $_docContract     expect string
     * @param string $_docRegardingDoc expect string
     * @param string $_pNum            expect string
     * @param string $_pName           expect string
     *
     * @return ColibriERPStructInvoiceInfo
     */
    public function __construct($_docNum = null,$_docCode = null,$_docType = null,$_specDocType = null,$_docDate = null,$_paymentDate = null,$_docCur = null,$_docInvNum = null,$_docAmount = null,$_docPaid = null,$_docContract = null,$_docRegardingDoc = null,$_pNum = null,$_pName = null)
    {
        parent::__construct(array('DocNum'=>$_docNum,'DocCode'=>$_docCode,'DocType'=>$_docType,'specDocType'=>$_specDocType,'DocDate'=>$_docDate,'PaymentDate'=>$_paymentDate,'DocCur'=>$_docCur,'DocInvNum'=>$_docInvNum,'DocAmount'=>$_docAmount,'DocPaid'=>$_docPaid,'DocContract'=>$_docContract,'DocRegardingDoc'=>$_docRegardingDoc,'PNum'=>$_pNum,'PName'=>$_pName), false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see   ColibriERPWsdlClass::__set_state()
     * @uses  ColibriERPWsdlClass::__set_state()
     * @param array  $_array     the exported values
     * @param string $_className expect string
     *
     * @return ColibriERPStructInvoiceInfo
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
