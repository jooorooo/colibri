<?php
/**
 * File for class ColibriERPStructErpOrderCItem
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
 * This class stands for ColibriERPStructErpOrderCItem
 *  originally named erpOrderCItem
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
class ColibriERPStructErpOrderCItem extends ColibriERPWsdlClass
{
    /**
     * The idOrderCItem
     *
     * @var integer
     */
    public $idOrderCItem;
    /**
     * The idOrderC
     * - doc : ERP internal order number
     *
     * @var integer
     */
    public $idOrderC;
    /**
     * The IOrder
     * - doc : Item sorting number
     *
     * @var string
     */
    public $IOrder;
    /**
     * The idMat
     * - doc : ERP internal product number
     *
     * @var integer
     */
    public $idMat;
    /**
     * The MNum
     * - doc : Product number
     *
     * @var string
     */
    public $MNum;
    /**
     * The MName
     * - doc : Product name
     *
     * @var string
     */
    public $MName;
    /**
     * The ProdNo
     * - doc : Partner's catalogue product number
     *
     * @var string
     */
    public $ProdNo;
    /**
     * The ProdName
     * - doc : Partner's catalogue product name
     *
     * @var string
     */
    public $ProdName;
    /**
     * The Batch
     * - doc : Product batch (optional)
     *
     * @var string
     */
    public $Batch;
    /**
     * The MKCode
     * - doc : Product type
     *
     * @var string
     */
    public $MKCode;
    /**
     * The QtyReq
     * - doc : Qantity ordered
     *
     * @var double
     */
    public $QtyReq;
    /**
     * The MUnit
     * - doc : Prodict units measure
     *
     * @var string
     */
    public $MUnit;
    /**
     * The Price
     * - doc : Item price
     *
     * @var double
     */
    public $Price;
    /**
     * The PriceDDS
     * - doc : Item price with VAT
     *
     * @var double
     */
    public $PriceDDS;
    /**
     * The PriceBGL
     * - doc : Item price in base currency
     *
     * @var double
     */
    public $PriceBGL;
    /**
     * The PriceDDSBGL
     * - doc : Item price with VAT in base currency
     *
     * @var double
     */
    public $PriceDDSBGL;
    /**
     * The Suma
     * - doc : Item total
     *
     * @var double
     */
    public $Suma;
    /**
     * The SumaDDS
     * - doc : Item total with VAT
     *
     * @var double
     */
    public $SumaDDS;
    /**
     * The SumaBGL
     * - doc : Item total in base currency
     *
     * @var double
     */
    public $SumaBGL;
    /**
     * The SumaDDSBGL
     * - doc : Item total with VAT in base currency
     *
     * @var double
     */
    public $SumaDDSBGL;
    /**
     * The QtyExpected
     * - doc : Qantity confirmed to client
     *
     * @var double
     */
    public $QtyExpected;
    /**
     * The QtyRejected
     * - doc : Qantity rejected to client
     *
     * @var double
     */
    public $QtyRejected;
    /**
     * The QtyReceived
     * - doc : Qantity shipped to client
     *
     * @var double
     */
    public $QtyReceived;
    /**
     * The QtyDelivered
     * - doc : Qantity invoiced to client
     *
     * @var double
     */
    public $QtyDelivered;
    /**
     * The QtyFulfilled
     * - doc : Qantity fufiled in order process
     *
     * @var double
     */
    public $QtyFulfilled;
    /**
     * The QtyComplete
     * - doc : Qantity completed in order process
     *
     * @var double
     */
    public $QtyComplete;
    /**
     * Constructor method for erpOrderCItem
     *
     * @see parent::__construct()
     *
     * @param integer $_idOrderCItem expect integer
     * @param integer $_idOrderC     expect integer
     * @param string  $_iOrder       expect string
     * @param integer $_idMat        expect integer
     * @param string  $_mNum         expect string
     * @param string  $_mName        expect string
     * @param string  $_prodNo       expect string
     * @param string  $_prodName     expect string
     * @param string  $_batch        expect string
     * @param string  $_mKCode       expect string
     * @param double  $_qtyReq       expect double
     * @param string  $_mUnit        expect string
     * @param double  $_price        expect double
     * @param double  $_priceDDS     expect double
     * @param double  $_priceBGL     expect double
     * @param double  $_priceDDSBGL  expect double
     * @param double  $_suma         expect double
     * @param double  $_sumaDDS      expect double
     * @param double  $_sumaBGL      expect double
     * @param double  $_sumaDDSBGL   expect double
     * @param double  $_qtyExpected  expect double
     * @param double  $_qtyRejected  expect double
     * @param double  $_qtyReceived  expect double
     * @param double  $_qtyDelivered expect double
     * @param double  $_qtyFulfilled expect double
     * @param double  $_qtyComplete  expect double
     *
     * @return ColibriERPStructErpOrderCItem
     */
    public function __construct($_idOrderCItem = null,$_idOrderC = null,$_iOrder = null,$_idMat = null,$_mNum = null,$_mName = null,$_prodNo = null,$_prodName = null,$_batch = null,$_mKCode = null,$_qtyReq = null,$_mUnit = null,$_price = null,$_priceDDS = null,$_priceBGL = null,$_priceDDSBGL = null,$_suma = null,$_sumaDDS = null,$_sumaBGL = null,$_sumaDDSBGL = null,$_qtyExpected = null,$_qtyRejected = null,$_qtyReceived = null,$_qtyDelivered = null,$_qtyFulfilled = null,$_qtyComplete = null)
    {
        parent::__construct(array('idOrderCItem'=>$_idOrderCItem,'idOrderC'=>$_idOrderC,'IOrder'=>$_iOrder,'idMat'=>$_idMat,'MNum'=>$_mNum,'MName'=>$_mName,'ProdNo'=>$_prodNo,'ProdName'=>$_prodName,'Batch'=>$_batch,'MKCode'=>$_mKCode,'QtyReq'=>$_qtyReq,'MUnit'=>$_mUnit,'Price'=>$_price,'PriceDDS'=>$_priceDDS,'PriceBGL'=>$_priceBGL,'PriceDDSBGL'=>$_priceDDSBGL,'Suma'=>$_suma,'SumaDDS'=>$_sumaDDS,'SumaBGL'=>$_sumaBGL,'SumaDDSBGL'=>$_sumaDDSBGL,'QtyExpected'=>$_qtyExpected,'QtyRejected'=>$_qtyRejected,'QtyReceived'=>$_qtyReceived,'QtyDelivered'=>$_qtyDelivered,'QtyFulfilled'=>$_qtyFulfilled,'QtyComplete'=>$_qtyComplete), false);
    }
    /**
     * Get idOrderCItem value
     *
     * @return integer|null
     */
    public function getIdOrderCItem()
    {
        return $this->idOrderCItem;
    }
    /**
     * Set idOrderCItem value
     *
     * @param integer $_idOrderCItem the idOrderCItem
     *
     * @return integer
     */
    public function setIdOrderCItem($_idOrderCItem)
    {
        return ($this->idOrderCItem = $_idOrderCItem);
    }
    /**
     * Get idOrderC value
     *
     * @return integer|null
     */
    public function getIdOrderC()
    {
        return $this->idOrderC;
    }
    /**
     * Set idOrderC value
     *
     * @param integer $_idOrderC the idOrderC
     *
     * @return integer
     */
    public function setIdOrderC($_idOrderC)
    {
        return ($this->idOrderC = $_idOrderC);
    }
    /**
     * Get IOrder value
     *
     * @return string|null
     */
    public function getIOrder()
    {
        return $this->IOrder;
    }
    /**
     * Set IOrder value
     *
     * @param string $_iOrder the IOrder
     *
     * @return string
     */
    public function setIOrder($_iOrder)
    {
        return ($this->IOrder = $_iOrder);
    }
    /**
     * Get idMat value
     *
     * @return integer|null
     */
    public function getIdMat()
    {
        return $this->idMat;
    }
    /**
     * Set idMat value
     *
     * @param integer $_idMat the idMat
     *
     * @return integer
     */
    public function setIdMat($_idMat)
    {
        return ($this->idMat = $_idMat);
    }
    /**
     * Get MNum value
     *
     * @return string|null
     */
    public function getMNum()
    {
        return $this->MNum;
    }
    /**
     * Set MNum value
     *
     * @param string $_mNum the MNum
     *
     * @return string
     */
    public function setMNum($_mNum)
    {
        return ($this->MNum = $_mNum);
    }
    /**
     * Get MName value
     *
     * @return string|null
     */
    public function getMName()
    {
        return $this->MName;
    }
    /**
     * Set MName value
     *
     * @param string $_mName the MName
     *
     * @return string
     */
    public function setMName($_mName)
    {
        return ($this->MName = $_mName);
    }
    /**
     * Get ProdNo value
     *
     * @return string|null
     */
    public function getProdNo()
    {
        return $this->ProdNo;
    }
    /**
     * Set ProdNo value
     *
     * @param string $_prodNo the ProdNo
     *
     * @return string
     */
    public function setProdNo($_prodNo)
    {
        return ($this->ProdNo = $_prodNo);
    }
    /**
     * Get ProdName value
     *
     * @return string|null
     */
    public function getProdName()
    {
        return $this->ProdName;
    }
    /**
     * Set ProdName value
     *
     * @param string $_prodName the ProdName
     *
     * @return string
     */
    public function setProdName($_prodName)
    {
        return ($this->ProdName = $_prodName);
    }
    /**
     * Get Batch value
     *
     * @return string|null
     */
    public function getBatch()
    {
        return $this->Batch;
    }
    /**
     * Set Batch value
     *
     * @param string $_batch the Batch
     *
     * @return string
     */
    public function setBatch($_batch)
    {
        return ($this->Batch = $_batch);
    }
    /**
     * Get MKCode value
     *
     * @return string|null
     */
    public function getMKCode()
    {
        return $this->MKCode;
    }
    /**
     * Set MKCode value
     *
     * @param string $_mKCode the MKCode
     *
     * @return string
     */
    public function setMKCode($_mKCode)
    {
        return ($this->MKCode = $_mKCode);
    }
    /**
     * Get QtyReq value
     *
     * @return double|null
     */
    public function getQtyReq()
    {
        return $this->QtyReq;
    }
    /**
     * Set QtyReq value
     *
     * @param double $_qtyReq the QtyReq
     *
     * @return double
     */
    public function setQtyReq($_qtyReq)
    {
        return ($this->QtyReq = $_qtyReq);
    }
    /**
     * Get MUnit value
     *
     * @return string|null
     */
    public function getMUnit()
    {
        return $this->MUnit;
    }
    /**
     * Set MUnit value
     *
     * @param string $_mUnit the MUnit
     *
     * @return string
     */
    public function setMUnit($_mUnit)
    {
        return ($this->MUnit = $_mUnit);
    }
    /**
     * Get Price value
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     *
     * @param double $_price the Price
     *
     * @return double
     */
    public function setPrice($_price)
    {
        return ($this->Price = $_price);
    }
    /**
     * Get PriceDDS value
     *
     * @return double|null
     */
    public function getPriceDDS()
    {
        return $this->PriceDDS;
    }
    /**
     * Set PriceDDS value
     *
     * @param double $_priceDDS the PriceDDS
     *
     * @return double
     */
    public function setPriceDDS($_priceDDS)
    {
        return ($this->PriceDDS = $_priceDDS);
    }
    /**
     * Get PriceBGL value
     *
     * @return double|null
     */
    public function getPriceBGL()
    {
        return $this->PriceBGL;
    }
    /**
     * Set PriceBGL value
     *
     * @param double $_priceBGL the PriceBGL
     *
     * @return double
     */
    public function setPriceBGL($_priceBGL)
    {
        return ($this->PriceBGL = $_priceBGL);
    }
    /**
     * Get PriceDDSBGL value
     *
     * @return double|null
     */
    public function getPriceDDSBGL()
    {
        return $this->PriceDDSBGL;
    }
    /**
     * Set PriceDDSBGL value
     *
     * @param double $_priceDDSBGL the PriceDDSBGL
     *
     * @return double
     */
    public function setPriceDDSBGL($_priceDDSBGL)
    {
        return ($this->PriceDDSBGL = $_priceDDSBGL);
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
     * Get QtyExpected value
     *
     * @return double|null
     */
    public function getQtyExpected()
    {
        return $this->QtyExpected;
    }
    /**
     * Set QtyExpected value
     *
     * @param double $_qtyExpected the QtyExpected
     *
     * @return double
     */
    public function setQtyExpected($_qtyExpected)
    {
        return ($this->QtyExpected = $_qtyExpected);
    }
    /**
     * Get QtyRejected value
     *
     * @return double|null
     */
    public function getQtyRejected()
    {
        return $this->QtyRejected;
    }
    /**
     * Set QtyRejected value
     *
     * @param double $_qtyRejected the QtyRejected
     *
     * @return double
     */
    public function setQtyRejected($_qtyRejected)
    {
        return ($this->QtyRejected = $_qtyRejected);
    }
    /**
     * Get QtyReceived value
     *
     * @return double|null
     */
    public function getQtyReceived()
    {
        return $this->QtyReceived;
    }
    /**
     * Set QtyReceived value
     *
     * @param double $_qtyReceived the QtyReceived
     *
     * @return double
     */
    public function setQtyReceived($_qtyReceived)
    {
        return ($this->QtyReceived = $_qtyReceived);
    }
    /**
     * Get QtyDelivered value
     *
     * @return double|null
     */
    public function getQtyDelivered()
    {
        return $this->QtyDelivered;
    }
    /**
     * Set QtyDelivered value
     *
     * @param double $_qtyDelivered the QtyDelivered
     *
     * @return double
     */
    public function setQtyDelivered($_qtyDelivered)
    {
        return ($this->QtyDelivered = $_qtyDelivered);
    }
    /**
     * Get QtyFulfilled value
     *
     * @return double|null
     */
    public function getQtyFulfilled()
    {
        return $this->QtyFulfilled;
    }
    /**
     * Set QtyFulfilled value
     *
     * @param double $_qtyFulfilled the QtyFulfilled
     *
     * @return double
     */
    public function setQtyFulfilled($_qtyFulfilled)
    {
        return ($this->QtyFulfilled = $_qtyFulfilled);
    }
    /**
     * Get QtyComplete value
     *
     * @return double|null
     */
    public function getQtyComplete()
    {
        return $this->QtyComplete;
    }
    /**
     * Set QtyComplete value
     *
     * @param double $_qtyComplete the QtyComplete
     *
     * @return double
     */
    public function setQtyComplete($_qtyComplete)
    {
        return ($this->QtyComplete = $_qtyComplete);
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
     * @return ColibriERPStructErpOrderCItem
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
