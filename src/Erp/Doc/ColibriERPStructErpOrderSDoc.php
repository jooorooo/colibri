<?php
/**
 * File for class ColibriERPStructErpOrderSDoc
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
 * This class stands for ColibriERPStructErpOrderSDoc
 *  originally named erpOrderSDoc
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
class ColibriERPStructErpOrderSDoc extends ColibriERPWsdlClass
{
    /**
     * The idDoc
     * - doc : ERP internal document number
     *
     * @var integer
     */
    public $idDoc;
    /**
     * The DocCode
     * - doc : Document code
     *
     * @var string
     */
    public $DocCode;
    /**
     * The DocNum
     * - doc : Document number
     *
     * @var string
     */
    public $DocNum;
    /**
     * The DocDate
     * - doc : Document date
     *
     * @var date
     */
    public $DocDate;
    /**
     * The QtyS
     * - doc : Total quantity of ordered items included in this document
     *
     * @var double
     */
    public $QtyS;
    /**
     * Constructor method for erpOrderSDoc
     *
     * @see parent::__construct()
     *
     * @param integer $_idDoc   expect integer
     * @param string  $_docCode expect string
     * @param string  $_docNum  expect string
     * @param date    $_docDate expect date
     * @param double  $_qtyS    expect double
     *
     * @return ColibriERPStructErpOrderSDoc
     */
    public function __construct($_idDoc = null,$_docCode = null,$_docNum = null,$_docDate = null,$_qtyS = null)
    {
        parent::__construct(array('idDoc'=>$_idDoc,'DocCode'=>$_docCode,'DocNum'=>$_docNum,'DocDate'=>$_docDate,'QtyS'=>$_qtyS), false);
    }
    /**
     * Get idDoc value
     *
     * @return integer|null
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }
    /**
     * Set idDoc value
     *
     * @param integer $_idDoc the idDoc
     *
     * @return integer
     */
    public function setIdDoc($_idDoc)
    {
        return ($this->idDoc = $_idDoc);
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
     * Get QtyS value
     *
     * @return double|null
     */
    public function getQtyS()
    {
        return $this->QtyS;
    }
    /**
     * Set QtyS value
     *
     * @param double $_qtyS the QtyS
     *
     * @return double
     */
    public function setQtyS($_qtyS)
    {
        return ($this->QtyS = $_qtyS);
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
     * @return ColibriERPStructErpOrderSDoc
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
