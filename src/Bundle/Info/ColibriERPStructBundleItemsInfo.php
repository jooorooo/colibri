<?php
/**
 * File for class ColibriERPStructBundleItemsInfo
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
 * This class stands for ColibriERPStructBundleItemsInfo
 *  originally named bundleItemsInfo
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
class ColibriERPStructBundleItemsInfo extends ColibriERPWsdlClass
{
    /**
     * The idBundleItem
     *
     * @var string
     */
    public $idBundleItem;
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
     * The IOrder
     *
     * @var string
     */
    public $IOrder;
    /**
     * The itemName
     *
     * @var string
     */
    public $itemName;
    /**
     * The itemNameL
     *
     * @var string
     */
    public $itemNameL;
    /**
     * The itemDescription
     *
     * @var string
     */
    public $itemDescription;
    /**
     * The itemDescriptionL
     *
     * @var string
     */
    public $itemDescriptionL;
    /**
     * The isActive
     *
     * @var int
     */
    public $isActive;
    /**
     * The isDefault
     *
     * @var int
     */
    public $isDefault;
    /**
     * The MatPrice
     *
     * @var double
     */
    public $MatPrice;
    /**
     * The Price
     *
     * @var double
     */
    public $Price;
    /**
     * The Quantity
     *
     * @var double
     */
    public $Quantity;
    /**
     * Constructor method for bundleItemsInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idBundleItem     expect string
     * @param string $_idMat            expect string
     * @param string $_mNum             expect string
     * @param string $_iOrder           expect string
     * @param string $_itemName         expect string
     * @param string $_itemNameL        expect string
     * @param string $_itemDescription  expect string
     * @param string $_itemDescriptionL expect string
     * @param int    $_isActive         expect int
     * @param int    $_isDefault        expect int
     * @param double $_matPrice         expect double
     * @param double $_price            expect double
     * @param double $_quantity         expect double
     *
     * @return ColibriERPStructBundleItemsInfo
     */
    public function __construct($_idBundleItem = null,$_idMat = null,$_mNum = null,$_iOrder = null,$_itemName = null,$_itemNameL = null,$_itemDescription = null,$_itemDescriptionL = null,$_isActive = null,$_isDefault = null,$_matPrice = null,$_price = null,$_quantity = null)
    {
        parent::__construct(array('idBundleItem'=>$_idBundleItem,'idMat'=>$_idMat,'MNum'=>$_mNum,'IOrder'=>$_iOrder,'itemName'=>$_itemName,'itemNameL'=>$_itemNameL,'itemDescription'=>$_itemDescription,'itemDescriptionL'=>$_itemDescriptionL,'isActive'=>$_isActive,'isDefault'=>$_isDefault,'MatPrice'=>$_matPrice,'Price'=>$_price,'Quantity'=>$_quantity), false);
    }
    /**
     * Get idBundleItem value
     *
     * @return string|null
     */
    public function getIdBundleItem()
    {
        return $this->idBundleItem;
    }
    /**
     * Set idBundleItem value
     *
     * @param string $_idBundleItem the idBundleItem
     *
     * @return string
     */
    public function setIdBundleItem($_idBundleItem)
    {
        return ($this->idBundleItem = $_idBundleItem);
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
     * Get itemName value
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->itemName;
    }
    /**
     * Set itemName value
     *
     * @param string $_itemName the itemName
     *
     * @return string
     */
    public function setItemName($_itemName)
    {
        return ($this->itemName = $_itemName);
    }
    /**
     * Get itemNameL value
     *
     * @return string|null
     */
    public function getItemNameL()
    {
        return $this->itemNameL;
    }
    /**
     * Set itemNameL value
     *
     * @param string $_itemNameL the itemNameL
     *
     * @return string
     */
    public function setItemNameL($_itemNameL)
    {
        return ($this->itemNameL = $_itemNameL);
    }
    /**
     * Get itemDescription value
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }
    /**
     * Set itemDescription value
     *
     * @param string $_itemDescription the itemDescription
     *
     * @return string
     */
    public function setItemDescription($_itemDescription)
    {
        return ($this->itemDescription = $_itemDescription);
    }
    /**
     * Get itemDescriptionL value
     *
     * @return string|null
     */
    public function getItemDescriptionL()
    {
        return $this->itemDescriptionL;
    }
    /**
     * Set itemDescriptionL value
     *
     * @param string $_itemDescriptionL the itemDescriptionL
     *
     * @return string
     */
    public function setItemDescriptionL($_itemDescriptionL)
    {
        return ($this->itemDescriptionL = $_itemDescriptionL);
    }
    /**
     * Get isActive value
     *
     * @return int|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     *
     * @param int $_isActive the isActive
     *
     * @return int
     */
    public function setIsActive($_isActive)
    {
        return ($this->isActive = $_isActive);
    }
    /**
     * Get isDefault value
     *
     * @return int|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     *
     * @param int $_isDefault the isDefault
     *
     * @return int
     */
    public function setIsDefault($_isDefault)
    {
        return ($this->isDefault = $_isDefault);
    }
    /**
     * Get MatPrice value
     *
     * @return double|null
     */
    public function getMatPrice()
    {
        return $this->MatPrice;
    }
    /**
     * Set MatPrice value
     *
     * @param double $_matPrice the MatPrice
     *
     * @return double
     */
    public function setMatPrice($_matPrice)
    {
        return ($this->MatPrice = $_matPrice);
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
     * Get Quantity value
     *
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     *
     * @param double $_quantity the Quantity
     *
     * @return double
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
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
     * @return ColibriERPStructBundleItemsInfo
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
