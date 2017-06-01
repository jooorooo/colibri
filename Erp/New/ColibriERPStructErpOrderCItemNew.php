<?php
/**
 * File for class ColibriERPStructErpOrderCItemNew
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
 * This class stands for ColibriERPStructErpOrderCItemNew
 *  originally named erpOrderCItemNew
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
class ColibriERPStructErpOrderCItemNew extends ColibriERPWsdlClass
{
    /**
     * The IOrder
     * - doc : Ordering secuence number
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
     *
     * @var string
     */
    public $Batch;
    /**
     * The QtyReq
     * - doc : Quantity ordered
     *
     * @var double
     */
    public $QtyReq;
    /**
     * The Price
     * - doc : Item price in order's currency
     *
     * @var double
     */
    public $Price;
    /**
     * The PriceBGL
     * - doc : Item price in base currency
     *
     * @var double
     */
    public $PriceBGL;
    /**
     * The Suma
     * - doc : Item total sum in order's currency
     *
     * @var double
     */
    public $Suma;
    /**
     * The SumaBGL
     * - doc : Item total sum in base currency
     *
     * @var double
     */
    public $SumaBGL;
    /**
     * Constructor method for erpOrderCItemNew
     *
     * @see parent::__construct()
     *
     * @param string  $_iOrder   expect string
     * @param integer $_idMat    expect integer
     * @param string  $_mNum     expect string
     * @param string  $_mName    expect string
     * @param string  $_prodNo   expect string
     * @param string  $_prodName expect string
     * @param string  $_batch    expect string
     * @param double  $_qtyReq   expect double
     * @param double  $_price    expect double
     * @param double  $_priceBGL expect double
     * @param double  $_suma     expect double
     * @param double  $_sumaBGL  expect double
     *
     * @return ColibriERPStructErpOrderCItemNew
     */
    public function __construct($_iOrder = null,$_idMat = null,$_mNum = null,$_mName = null,$_prodNo = null,$_prodName = null,$_batch = null,$_qtyReq = null,$_price = null,$_priceBGL = null,$_suma = null,$_sumaBGL = null)
    {
        parent::__construct(array('IOrder'=>$_iOrder,'idMat'=>$_idMat,'MNum'=>$_mNum,'MName'=>$_mName,'ProdNo'=>$_prodNo,'ProdName'=>$_prodName,'Batch'=>$_batch,'QtyReq'=>$_qtyReq,'Price'=>$_price,'PriceBGL'=>$_priceBGL,'Suma'=>$_suma,'SumaBGL'=>$_sumaBGL), false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see   ColibriERPWsdlClass::__set_state()
     * @uses  ColibriERPWsdlClass::__set_state()
     * @param array  $_array     the exported values
     * @param string $_className expect string
     *
     * @return ColibriERPStructErpOrderCItemNew
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
