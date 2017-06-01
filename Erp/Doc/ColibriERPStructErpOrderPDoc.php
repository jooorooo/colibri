<?php
/**
 * File for class ColibriERPStructErpOrderPDoc
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
 * This class stands for ColibriERPStructErpOrderPDoc
 *  originally named erpOrderPDoc
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
class ColibriERPStructErpOrderPDoc extends ColibriERPWsdlClass
{
    /**
     * The idPDoc
     * - doc : ERP internal document number
     *
     * @var integer
     */
    public $idPDoc;
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
     * The QtyP
     * - doc : Total quantity of ordered items included in this document
     *
     * @var double
     */
    public $QtyP;
    /**
     * The Suma
     * - doc : Total sum of ordered items included in this document
     *
     * @var double
     */
    public $Suma;
    /**
     * The SumaDDS
     * - doc : (above) 'Suma' with sales tax
     *
     * @var double
     */
    public $SumaDDS;
    /**
     * The SumaBGL
     * - doc : (above) 'Suma' in base currency
     *
     * @var double
     */
    public $SumaBGL;
    /**
     * The SumaDDSBGL
     * - doc : (above) 'SumaDDS' in base currency
     *
     * @var double
     */
    public $SumaDDSBGL;
    /**
     * The SumaPaid
     * - doc : Total sum paid for ordered items included in this document
     *
     * @var double
     */
    public $SumaPaid;
    /**
     * The SumaPaidBGL
     * - doc : (above) 'SumaPaid' in base currency
     *
     * @var double
     */
    public $SumaPaidBGL;
    /**
     * Constructor method for erpOrderPDoc
     *
     * @see parent::__construct()
     *
     * @param integer $_idPDoc      expect integer
     * @param string  $_docCode     expect string
     * @param string  $_docNum      expect string
     * @param date    $_docDate     expect date
     * @param double  $_qtyP        expect double
     * @param double  $_suma        expect double
     * @param double  $_sumaDDS     expect double
     * @param double  $_sumaBGL     expect double
     * @param double  $_sumaDDSBGL  expect double
     * @param double  $_sumaPaid    expect double
     * @param double  $_sumaPaidBGL expect double
     *
     * @return ColibriERPStructErpOrderPDoc
     */
    public function __construct($_idPDoc = null,$_docCode = null,$_docNum = null,$_docDate = null,$_qtyP = null,$_suma = null,$_sumaDDS = null,$_sumaBGL = null,$_sumaDDSBGL = null,$_sumaPaid = null,$_sumaPaidBGL = null)
    {
        parent::__construct(array('idPDoc'=>$_idPDoc,'DocCode'=>$_docCode,'DocNum'=>$_docNum,'DocDate'=>$_docDate,'QtyP'=>$_qtyP,'Suma'=>$_suma,'SumaDDS'=>$_sumaDDS,'SumaBGL'=>$_sumaBGL,'SumaDDSBGL'=>$_sumaDDSBGL,'SumaPaid'=>$_sumaPaid,'SumaPaidBGL'=>$_sumaPaidBGL), false);
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
     * Get QtyP value
     *
     * @return double|null
     */
    public function getQtyP()
    {
        return $this->QtyP;
    }
    /**
     * Set QtyP value
     *
     * @param double $_qtyP the QtyP
     *
     * @return double
     */
    public function setQtyP($_qtyP)
    {
        return ($this->QtyP = $_qtyP);
    }
    /**
     * Get Suma value
     *
     * @return double|null
     */
    public function getSuma()
    {
        return $this->Suma;
    }
    /**
     * Set Suma value
     *
     * @param double $_suma the Suma
     *
     * @return double
     */
    public function setSuma($_suma)
    {
        return ($this->Suma = $_suma);
    }
    /**
     * Get SumaDDS value
     *
     * @return double|null
     */
    public function getSumaDDS()
    {
        return $this->SumaDDS;
    }
    /**
     * Set SumaDDS value
     *
     * @param double $_sumaDDS the SumaDDS
     *
     * @return double
     */
    public function setSumaDDS($_sumaDDS)
    {
        return ($this->SumaDDS = $_sumaDDS);
    }
    /**
     * Get SumaBGL value
     *
     * @return double|null
     */
    public function getSumaBGL()
    {
        return $this->SumaBGL;
    }
    /**
     * Set SumaBGL value
     *
     * @param double $_sumaBGL the SumaBGL
     *
     * @return double
     */
    public function setSumaBGL($_sumaBGL)
    {
        return ($this->SumaBGL = $_sumaBGL);
    }
    /**
     * Get SumaDDSBGL value
     *
     * @return double|null
     */
    public function getSumaDDSBGL()
    {
        return $this->SumaDDSBGL;
    }
    /**
     * Set SumaDDSBGL value
     *
     * @param double $_sumaDDSBGL the SumaDDSBGL
     *
     * @return double
     */
    public function setSumaDDSBGL($_sumaDDSBGL)
    {
        return ($this->SumaDDSBGL = $_sumaDDSBGL);
    }
    /**
     * Get SumaPaid value
     *
     * @return double|null
     */
    public function getSumaPaid()
    {
        return $this->SumaPaid;
    }
    /**
     * Set SumaPaid value
     *
     * @param double $_sumaPaid the SumaPaid
     *
     * @return double
     */
    public function setSumaPaid($_sumaPaid)
    {
        return ($this->SumaPaid = $_sumaPaid);
    }
    /**
     * Get SumaPaidBGL value
     *
     * @return double|null
     */
    public function getSumaPaidBGL()
    {
        return $this->SumaPaidBGL;
    }
    /**
     * Set SumaPaidBGL value
     *
     * @param double $_sumaPaidBGL the SumaPaidBGL
     *
     * @return double
     */
    public function setSumaPaidBGL($_sumaPaidBGL)
    {
        return ($this->SumaPaidBGL = $_sumaPaidBGL);
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
     * @return ColibriERPStructErpOrderPDoc
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
