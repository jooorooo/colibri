<?php
/**
 * File for class ColibriERPStructInvoiceItem
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
 * This class stands for ColibriERPStructInvoiceItem
 *  originally named InvoiceItem
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
class ColibriERPStructInvoiceItem extends ColibriERPWsdlClass
{
    /**
     * The idMat
     *
     * @var string
     */
    public $idMat;
    /**
     * The MNum
     *
     * @var string
     */
    public $MNum;
    /**
     * The MNameL
     *
     * @var string
     */
    public $MNameL;
    /**
     * The Quantity
     *
     * @var string
     */
    public $Quantity;
    /**
     * The Price
     *
     * @var string
     */
    public $Price;
    /**
     * The PriceDDS
     *
     * @var string
     */
    public $PriceDDS;
    /**
     * The Suma
     *
     * @var string
     */
    public $Suma;
    /**
     * The SumaDDS
     *
     * @var string
     */
    public $SumaDDS;
    /**
     * The MUnit
     *
     * @var string
     */
    public $MUnit;
    /**
     * The VATRate
     *
     * @var string
     */
    public $VATRate;
    /**
     * The MNoteL
     *
     * @var string
     */
    public $MNoteL;
    /**
     * The MDescriptionL
     *
     * @var string
     */
    public $MDescriptionL;
    /**
     * Constructor method for InvoiceItem
     *
     * @see parent::__construct()
     *
     * @param string $_idMat         expect string
     * @param string $_mNum          expect string
     * @param string $_mNameL        expect string
     * @param string $_quantity      expect string
     * @param string $_price         expect string
     * @param string $_priceDDS      expect string
     * @param string $_suma          expect string
     * @param string $_sumaDDS       expect string
     * @param string $_mUnit         expect string
     * @param string $_vATRate       expect string
     * @param string $_mNoteL        expect string
     * @param string $_mDescriptionL expect string
     *
     * @return ColibriERPStructInvoiceItem
     */
    public function __construct($_idMat = null,$_mNum = null,$_mNameL = null,$_quantity = null,$_price = null,$_priceDDS = null,$_suma = null,$_sumaDDS = null,$_mUnit = null,$_vATRate = null,$_mNoteL = null,$_mDescriptionL = null)
    {
        parent::__construct(array('idMat'=>$_idMat,'MNum'=>$_mNum,'MNameL'=>$_mNameL,'Quantity'=>$_quantity,'Price'=>$_price,'PriceDDS'=>$_priceDDS,'Suma'=>$_suma,'SumaDDS'=>$_sumaDDS,'MUnit'=>$_mUnit,'VATRate'=>$_vATRate,'MNoteL'=>$_mNoteL,'MDescriptionL'=>$_mDescriptionL), false);
    }
    /**
     * Get idMat value
     *
     * @return string|null
     */
    public function getIdMat()
    {
        return $this->idMat;
    }
    /**
     * Set idMat value
     *
     * @param string $_idMat the idMat
     *
     * @return string
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
     * Get MNameL value
     *
     * @return string|null
     */
    public function getMNameL()
    {
        return $this->MNameL;
    }
    /**
     * Set MNameL value
     *
     * @param string $_mNameL the MNameL
     *
     * @return string
     */
    public function setMNameL($_mNameL)
    {
        return ($this->MNameL = $_mNameL);
    }
    /**
     * Get Quantity value
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     *
     * @param string $_quantity the Quantity
     *
     * @return string
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
    }
    /**
     * Get Price value
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     *
     * @param string $_price the Price
     *
     * @return string
     */
    public function setPrice($_price)
    {
        return ($this->Price = $_price);
    }
    /**
     * Get PriceDDS value
     *
     * @return string|null
     */
    public function getPriceDDS()
    {
        return $this->PriceDDS;
    }
    /**
     * Set PriceDDS value
     *
     * @param string $_priceDDS the PriceDDS
     *
     * @return string
     */
    public function setPriceDDS($_priceDDS)
    {
        return ($this->PriceDDS = $_priceDDS);
    }
    /**
     * Get Suma value
     *
     * @return string|null
     */
    public function getSuma()
    {
        return $this->Suma;
    }
    /**
     * Set Suma value
     *
     * @param string $_suma the Suma
     *
     * @return string
     */
    public function setSuma($_suma)
    {
        return ($this->Suma = $_suma);
    }
    /**
     * Get SumaDDS value
     *
     * @return string|null
     */
    public function getSumaDDS()
    {
        return $this->SumaDDS;
    }
    /**
     * Set SumaDDS value
     *
     * @param string $_sumaDDS the SumaDDS
     *
     * @return string
     */
    public function setSumaDDS($_sumaDDS)
    {
        return ($this->SumaDDS = $_sumaDDS);
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
     * Get VATRate value
     *
     * @return string|null
     */
    public function getVATRate()
    {
        return $this->VATRate;
    }
    /**
     * Set VATRate value
     *
     * @param string $_vATRate the VATRate
     *
     * @return string
     */
    public function setVATRate($_vATRate)
    {
        return ($this->VATRate = $_vATRate);
    }
    /**
     * Get MNoteL value
     *
     * @return string|null
     */
    public function getMNoteL()
    {
        return $this->MNoteL;
    }
    /**
     * Set MNoteL value
     *
     * @param string $_mNoteL the MNoteL
     *
     * @return string
     */
    public function setMNoteL($_mNoteL)
    {
        return ($this->MNoteL = $_mNoteL);
    }
    /**
     * Get MDescriptionL value
     *
     * @return string|null
     */
    public function getMDescriptionL()
    {
        return $this->MDescriptionL;
    }
    /**
     * Set MDescriptionL value
     *
     * @param string $_mDescriptionL the MDescriptionL
     *
     * @return string
     */
    public function setMDescriptionL($_mDescriptionL)
    {
        return ($this->MDescriptionL = $_mDescriptionL);
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
     * @return ColibriERPStructInvoiceItem
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
