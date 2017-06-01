<?php
/**
 * File for class ColibriERPStructPDocTrans
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
 * This class stands for ColibriERPStructPDocTrans
 *  originally named pDocTrans
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
class ColibriERPStructPDocTrans extends ColibriERPWsdlClass
{
    /**
     * The idPDocItem
     *
     * @var integer
     */
    public $idPDocItem;
    /**
     * The idMat
     *
     * @var integer
     */
    public $idMat;
    /**
     * The IOrder
     *
     * @var integer
     */
    public $IOrder;
    /**
     * The SNum
     *
     * @var integer
     */
    public $SNum;
    /**
     * The idGroup
     *
     * @var integer
     */
    public $idGroup;
    /**
     * The MKCode
     *
     * @var string
     */
    public $MKCode;
    /**
     * The MName
     *
     * @var string
     */
    public $MName;
    /**
     * The MDDSTax
     *
     * @var double
     */
    public $MDDSTax;
    /**
     * The MUnit
     *
     * @var string
     */
    public $MUnit;
    /**
     * The idPackScheme
     *
     * @var integer
     */
    public $idPackScheme;
    /**
     * The MMethod
     *
     * @var string
     */
    public $MMethod;
    /**
     * The MDAcc
     *
     * @var string
     */
    public $MDAcc;
    /**
     * The MEAcc
     *
     * @var string
     */
    public $MEAcc;
    /**
     * The MCAcc
     *
     * @var string
     */
    public $MCAcc;
    /**
     * The QuantityOrd
     *
     * @var double
     */
    public $QuantityOrd;
    /**
     * The Quantity
     *
     * @var double
     */
    public $Quantity;
    /**
     * The PriceBase
     *
     * @var double
     */
    public $PriceBase;
    /**
     * The Price
     *
     * @var double
     */
    public $Price;
    /**
     * The PriceBaseBGL
     *
     * @var double
     */
    public $PriceBaseBGL;
    /**
     * The PriceBGL
     *
     * @var double
     */
    public $PriceBGL;
    /**
     * The PriceDDS
     *
     * @var double
     */
    public $PriceDDS;
    /**
     * The PriceDDSBGL
     *
     * @var double
     */
    public $PriceDDSBGL;
    /**
     * The PriceExcise
     *
     * @var double
     */
    public $PriceExcise;
    /**
     * The PriceExciseBGL
     *
     * @var double
     */
    public $PriceExciseBGL;
    /**
     * The SumaBase
     *
     * @var double
     */
    public $SumaBase;
    /**
     * The Suma
     *
     * @var double
     */
    public $Suma;
    /**
     * The SumaBaseBGL
     *
     * @var double
     */
    public $SumaBaseBGL;
    /**
     * The SumaBGL
     *
     * @var double
     */
    public $SumaBGL;
    /**
     * The SumaDDS
     *
     * @var double
     */
    public $SumaDDS;
    /**
     * The SumaDDSBGL
     *
     * @var double
     */
    public $SumaDDSBGL;
    /**
     * The SPrice
     *
     * @var double
     */
    public $SPrice;
    /**
     * The SPriceBGL
     *
     * @var double
     */
    public $SPriceBGL;
    /**
     * The SSuma
     *
     * @var double
     */
    public $SSuma;
    /**
     * The SSumaBGL
     *
     * @var double
     */
    public $SSumaBGL;
    /**
     * The ExpencePrice
     *
     * @var double
     */
    public $ExpencePrice;
    /**
     * The SumaExpences
     *
     * @var double
     */
    public $SumaExpences;
    /**
     * The ReqID
     *
     * @var integer
     */
    public $ReqID;
    /**
     * The SumaNoTaxed
     *
     * @var double
     */
    public $SumaNoTaxed;
    /**
     * The idDocItemRef
     *
     * @var integer
     */
    public $idDocItemRef;
    /**
     * The Batch
     *
     * @var string
     */
    public $Batch;
    /**
     * The ItemStatus
     *
     * @var string
     */
    public $ItemStatus;
    /**
     * The idPDocAdv
     *
     * @var integer
     */
    public $idPDocAdv;
    /**
     * The haveEco
     *
     * @var integer
     */
    public $haveEco;
    /**
     * The MNum
     *
     * @var string
     */
    public $MNum;
    /**
     * The tMUnit
     *
     * @var string
     */
    public $tMUnit;
    /**
     * The PMNum
     *
     * @var string
     */
    public $PMNum;
    /**
     * The barCode
     *
     * @var string
     */
    public $barCode;
    /**
     * Constructor method for pDocTrans
     *
     * @see parent::__construct()
     *
     * @param integer $_idPDocItem     expect integer
     * @param integer $_idMat          expect integer
     * @param integer $_iOrder         expect integer
     * @param integer $_sNum           expect integer
     * @param integer $_idGroup        expect integer
     * @param string  $_mKCode         expect string
     * @param string  $_mName          expect string
     * @param double  $_mDDSTax        expect double
     * @param string  $_mUnit          expect string
     * @param integer $_idPackScheme   expect integer
     * @param string  $_mMethod        expect string
     * @param string  $_mDAcc          expect string
     * @param string  $_mEAcc          expect string
     * @param string  $_mCAcc          expect string
     * @param double  $_quantityOrd    expect double
     * @param double  $_quantity       expect double
     * @param double  $_priceBase      expect double
     * @param double  $_price          expect double
     * @param double  $_priceBaseBGL   expect double
     * @param double  $_priceBGL       expect double
     * @param double  $_priceDDS       expect double
     * @param double  $_priceDDSBGL    expect double
     * @param double  $_priceExcise    expect double
     * @param double  $_priceExciseBGL expect double
     * @param double  $_sumaBase       expect double
     * @param double  $_suma           expect double
     * @param double  $_sumaBaseBGL    expect double
     * @param double  $_sumaBGL        expect double
     * @param double  $_sumaDDS        expect double
     * @param double  $_sumaDDSBGL     expect double
     * @param double  $_sPrice         expect double
     * @param double  $_sPriceBGL      expect double
     * @param double  $_sSuma          expect double
     * @param double  $_sSumaBGL       expect double
     * @param double  $_expencePrice   expect double
     * @param double  $_sumaExpences   expect double
     * @param integer $_reqID          expect integer
     * @param double  $_sumaNoTaxed    expect double
     * @param integer $_idDocItemRef   expect integer
     * @param string  $_batch          expect string
     * @param string  $_itemStatus     expect string
     * @param integer $_idPDocAdv      expect integer
     * @param integer $_haveEco        expect integer
     * @param string  $_mNum           expect string
     * @param string  $_tMUnit         expect string
     * @param string  $_pMNum          expect string
     * @param string  $_barCode        expect string
     *
     * @return ColibriERPStructPDocTrans
     */
    public function __construct($_idPDocItem = null,$_idMat = null,$_iOrder = null,$_sNum = null,$_idGroup = null,$_mKCode = null,$_mName = null,$_mDDSTax = null,$_mUnit = null,$_idPackScheme = null,$_mMethod = null,$_mDAcc = null,$_mEAcc = null,$_mCAcc = null,$_quantityOrd = null,$_quantity = null,$_priceBase = null,$_price = null,$_priceBaseBGL = null,$_priceBGL = null,$_priceDDS = null,$_priceDDSBGL = null,$_priceExcise = null,$_priceExciseBGL = null,$_sumaBase = null,$_suma = null,$_sumaBaseBGL = null,$_sumaBGL = null,$_sumaDDS = null,$_sumaDDSBGL = null,$_sPrice = null,$_sPriceBGL = null,$_sSuma = null,$_sSumaBGL = null,$_expencePrice = null,$_sumaExpences = null,$_reqID = null,$_sumaNoTaxed = null,$_idDocItemRef = null,$_batch = null,$_itemStatus = null,$_idPDocAdv = null,$_haveEco = null,$_mNum = null,$_tMUnit = null,$_pMNum = null,$_barCode = null)
    {
        parent::__construct(array('idPDocItem'=>$_idPDocItem,'idMat'=>$_idMat,'IOrder'=>$_iOrder,'SNum'=>$_sNum,'idGroup'=>$_idGroup,'MKCode'=>$_mKCode,'MName'=>$_mName,'MDDSTax'=>$_mDDSTax,'MUnit'=>$_mUnit,'idPackScheme'=>$_idPackScheme,'MMethod'=>$_mMethod,'MDAcc'=>$_mDAcc,'MEAcc'=>$_mEAcc,'MCAcc'=>$_mCAcc,'QuantityOrd'=>$_quantityOrd,'Quantity'=>$_quantity,'PriceBase'=>$_priceBase,'Price'=>$_price,'PriceBaseBGL'=>$_priceBaseBGL,'PriceBGL'=>$_priceBGL,'PriceDDS'=>$_priceDDS,'PriceDDSBGL'=>$_priceDDSBGL,'PriceExcise'=>$_priceExcise,'PriceExciseBGL'=>$_priceExciseBGL,'SumaBase'=>$_sumaBase,'Suma'=>$_suma,'SumaBaseBGL'=>$_sumaBaseBGL,'SumaBGL'=>$_sumaBGL,'SumaDDS'=>$_sumaDDS,'SumaDDSBGL'=>$_sumaDDSBGL,'SPrice'=>$_sPrice,'SPriceBGL'=>$_sPriceBGL,'SSuma'=>$_sSuma,'SSumaBGL'=>$_sSumaBGL,'ExpencePrice'=>$_expencePrice,'SumaExpences'=>$_sumaExpences,'ReqID'=>$_reqID,'SumaNoTaxed'=>$_sumaNoTaxed,'idDocItemRef'=>$_idDocItemRef,'Batch'=>$_batch,'ItemStatus'=>$_itemStatus,'idPDocAdv'=>$_idPDocAdv,'haveEco'=>$_haveEco,'MNum'=>$_mNum,'tMUnit'=>$_tMUnit,'PMNum'=>$_pMNum,'barCode'=>$_barCode), false);
    }
    /**
     * Get idPDocItem value
     *
     * @return integer|null
     */
    public function getIdPDocItem()
    {
        return $this->idPDocItem;
    }
    /**
     * Set idPDocItem value
     *
     * @param integer $_idPDocItem the idPDocItem
     *
     * @return integer
     */
    public function setIdPDocItem($_idPDocItem)
    {
        return ($this->idPDocItem = $_idPDocItem);
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
     * Get IOrder value
     *
     * @return integer|null
     */
    public function getIOrder()
    {
        return $this->IOrder;
    }
    /**
     * Set IOrder value
     *
     * @param integer $_iOrder the IOrder
     *
     * @return integer
     */
    public function setIOrder($_iOrder)
    {
        return ($this->IOrder = $_iOrder);
    }
    /**
     * Get SNum value
     *
     * @return integer|null
     */
    public function getSNum()
    {
        return $this->SNum;
    }
    /**
     * Set SNum value
     *
     * @param integer $_sNum the SNum
     *
     * @return integer
     */
    public function setSNum($_sNum)
    {
        return ($this->SNum = $_sNum);
    }
    /**
     * Get idGroup value
     *
     * @return integer|null
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }
    /**
     * Set idGroup value
     *
     * @param integer $_idGroup the idGroup
     *
     * @return integer
     */
    public function setIdGroup($_idGroup)
    {
        return ($this->idGroup = $_idGroup);
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
     * Get MDDSTax value
     *
     * @return double|null
     */
    public function getMDDSTax()
    {
        return $this->MDDSTax;
    }
    /**
     * Set MDDSTax value
     *
     * @param double $_mDDSTax the MDDSTax
     *
     * @return double
     */
    public function setMDDSTax($_mDDSTax)
    {
        return ($this->MDDSTax = $_mDDSTax);
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
     * Get idPackScheme value
     *
     * @return integer|null
     */
    public function getIdPackScheme()
    {
        return $this->idPackScheme;
    }
    /**
     * Set idPackScheme value
     *
     * @param integer $_idPackScheme the idPackScheme
     *
     * @return integer
     */
    public function setIdPackScheme($_idPackScheme)
    {
        return ($this->idPackScheme = $_idPackScheme);
    }
    /**
     * Get MMethod value
     *
     * @return string|null
     */
    public function getMMethod()
    {
        return $this->MMethod;
    }
    /**
     * Set MMethod value
     *
     * @param string $_mMethod the MMethod
     *
     * @return string
     */
    public function setMMethod($_mMethod)
    {
        return ($this->MMethod = $_mMethod);
    }
    /**
     * Get MDAcc value
     *
     * @return string|null
     */
    public function getMDAcc()
    {
        return $this->MDAcc;
    }
    /**
     * Set MDAcc value
     *
     * @param string $_mDAcc the MDAcc
     *
     * @return string
     */
    public function setMDAcc($_mDAcc)
    {
        return ($this->MDAcc = $_mDAcc);
    }
    /**
     * Get MEAcc value
     *
     * @return string|null
     */
    public function getMEAcc()
    {
        return $this->MEAcc;
    }
    /**
     * Set MEAcc value
     *
     * @param string $_mEAcc the MEAcc
     *
     * @return string
     */
    public function setMEAcc($_mEAcc)
    {
        return ($this->MEAcc = $_mEAcc);
    }
    /**
     * Get MCAcc value
     *
     * @return string|null
     */
    public function getMCAcc()
    {
        return $this->MCAcc;
    }
    /**
     * Set MCAcc value
     *
     * @param string $_mCAcc the MCAcc
     *
     * @return string
     */
    public function setMCAcc($_mCAcc)
    {
        return ($this->MCAcc = $_mCAcc);
    }
    /**
     * Get QuantityOrd value
     *
     * @return double|null
     */
    public function getQuantityOrd()
    {
        return $this->QuantityOrd;
    }
    /**
     * Set QuantityOrd value
     *
     * @param double $_quantityOrd the QuantityOrd
     *
     * @return double
     */
    public function setQuantityOrd($_quantityOrd)
    {
        return ($this->QuantityOrd = $_quantityOrd);
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
     * Get PriceBase value
     *
     * @return double|null
     */
    public function getPriceBase()
    {
        return $this->PriceBase;
    }
    /**
     * Set PriceBase value
     *
     * @param double $_priceBase the PriceBase
     *
     * @return double
     */
    public function setPriceBase($_priceBase)
    {
        return ($this->PriceBase = $_priceBase);
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
     * Get PriceBaseBGL value
     *
     * @return double|null
     */
    public function getPriceBaseBGL()
    {
        return $this->PriceBaseBGL;
    }
    /**
     * Set PriceBaseBGL value
     *
     * @param double $_priceBaseBGL the PriceBaseBGL
     *
     * @return double
     */
    public function setPriceBaseBGL($_priceBaseBGL)
    {
        return ($this->PriceBaseBGL = $_priceBaseBGL);
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
     * Get PriceExcise value
     *
     * @return double|null
     */
    public function getPriceExcise()
    {
        return $this->PriceExcise;
    }
    /**
     * Set PriceExcise value
     *
     * @param double $_priceExcise the PriceExcise
     *
     * @return double
     */
    public function setPriceExcise($_priceExcise)
    {
        return ($this->PriceExcise = $_priceExcise);
    }
    /**
     * Get PriceExciseBGL value
     *
     * @return double|null
     */
    public function getPriceExciseBGL()
    {
        return $this->PriceExciseBGL;
    }
    /**
     * Set PriceExciseBGL value
     *
     * @param double $_priceExciseBGL the PriceExciseBGL
     *
     * @return double
     */
    public function setPriceExciseBGL($_priceExciseBGL)
    {
        return ($this->PriceExciseBGL = $_priceExciseBGL);
    }
    /**
     * Get SumaBase value
     *
     * @return double|null
     */
    public function getSumaBase()
    {
        return $this->SumaBase;
    }
    /**
     * Set SumaBase value
     *
     * @param double $_sumaBase the SumaBase
     *
     * @return double
     */
    public function setSumaBase($_sumaBase)
    {
        return ($this->SumaBase = $_sumaBase);
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
     * Get SumaBaseBGL value
     *
     * @return double|null
     */
    public function getSumaBaseBGL()
    {
        return $this->SumaBaseBGL;
    }
    /**
     * Set SumaBaseBGL value
     *
     * @param double $_sumaBaseBGL the SumaBaseBGL
     *
     * @return double
     */
    public function setSumaBaseBGL($_sumaBaseBGL)
    {
        return ($this->SumaBaseBGL = $_sumaBaseBGL);
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
     * Get SPrice value
     *
     * @return double|null
     */
    public function getSPrice()
    {
        return $this->SPrice;
    }
    /**
     * Set SPrice value
     *
     * @param double $_sPrice the SPrice
     *
     * @return double
     */
    public function setSPrice($_sPrice)
    {
        return ($this->SPrice = $_sPrice);
    }
    /**
     * Get SPriceBGL value
     *
     * @return double|null
     */
    public function getSPriceBGL()
    {
        return $this->SPriceBGL;
    }
    /**
     * Set SPriceBGL value
     *
     * @param double $_sPriceBGL the SPriceBGL
     *
     * @return double
     */
    public function setSPriceBGL($_sPriceBGL)
    {
        return ($this->SPriceBGL = $_sPriceBGL);
    }
    /**
     * Get SSuma value
     *
     * @return double|null
     */
    public function getSSuma()
    {
        return $this->SSuma;
    }
    /**
     * Set SSuma value
     *
     * @param double $_sSuma the SSuma
     *
     * @return double
     */
    public function setSSuma($_sSuma)
    {
        return ($this->SSuma = $_sSuma);
    }
    /**
     * Get SSumaBGL value
     *
     * @return double|null
     */
    public function getSSumaBGL()
    {
        return $this->SSumaBGL;
    }
    /**
     * Set SSumaBGL value
     *
     * @param double $_sSumaBGL the SSumaBGL
     *
     * @return double
     */
    public function setSSumaBGL($_sSumaBGL)
    {
        return ($this->SSumaBGL = $_sSumaBGL);
    }
    /**
     * Get ExpencePrice value
     *
     * @return double|null
     */
    public function getExpencePrice()
    {
        return $this->ExpencePrice;
    }
    /**
     * Set ExpencePrice value
     *
     * @param double $_expencePrice the ExpencePrice
     *
     * @return double
     */
    public function setExpencePrice($_expencePrice)
    {
        return ($this->ExpencePrice = $_expencePrice);
    }
    /**
     * Get SumaExpences value
     *
     * @return double|null
     */
    public function getSumaExpences()
    {
        return $this->SumaExpences;
    }
    /**
     * Set SumaExpences value
     *
     * @param double $_sumaExpences the SumaExpences
     *
     * @return double
     */
    public function setSumaExpences($_sumaExpences)
    {
        return ($this->SumaExpences = $_sumaExpences);
    }
    /**
     * Get ReqID value
     *
     * @return integer|null
     */
    public function getReqID()
    {
        return $this->ReqID;
    }
    /**
     * Set ReqID value
     *
     * @param integer $_reqID the ReqID
     *
     * @return integer
     */
    public function setReqID($_reqID)
    {
        return ($this->ReqID = $_reqID);
    }
    /**
     * Get SumaNoTaxed value
     *
     * @return double|null
     */
    public function getSumaNoTaxed()
    {
        return $this->SumaNoTaxed;
    }
    /**
     * Set SumaNoTaxed value
     *
     * @param double $_sumaNoTaxed the SumaNoTaxed
     *
     * @return double
     */
    public function setSumaNoTaxed($_sumaNoTaxed)
    {
        return ($this->SumaNoTaxed = $_sumaNoTaxed);
    }
    /**
     * Get idDocItemRef value
     *
     * @return integer|null
     */
    public function getIdDocItemRef()
    {
        return $this->idDocItemRef;
    }
    /**
     * Set idDocItemRef value
     *
     * @param integer $_idDocItemRef the idDocItemRef
     *
     * @return integer
     */
    public function setIdDocItemRef($_idDocItemRef)
    {
        return ($this->idDocItemRef = $_idDocItemRef);
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
     * Get ItemStatus value
     *
     * @return string|null
     */
    public function getItemStatus()
    {
        return $this->ItemStatus;
    }
    /**
     * Set ItemStatus value
     *
     * @param string $_itemStatus the ItemStatus
     *
     * @return string
     */
    public function setItemStatus($_itemStatus)
    {
        return ($this->ItemStatus = $_itemStatus);
    }
    /**
     * Get idPDocAdv value
     *
     * @return integer|null
     */
    public function getIdPDocAdv()
    {
        return $this->idPDocAdv;
    }
    /**
     * Set idPDocAdv value
     *
     * @param integer $_idPDocAdv the idPDocAdv
     *
     * @return integer
     */
    public function setIdPDocAdv($_idPDocAdv)
    {
        return ($this->idPDocAdv = $_idPDocAdv);
    }
    /**
     * Get haveEco value
     *
     * @return integer|null
     */
    public function getHaveEco()
    {
        return $this->haveEco;
    }
    /**
     * Set haveEco value
     *
     * @param integer $_haveEco the haveEco
     *
     * @return integer
     */
    public function setHaveEco($_haveEco)
    {
        return ($this->haveEco = $_haveEco);
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
     * Get tMUnit value
     *
     * @return string|null
     */
    public function getTMUnit()
    {
        return $this->tMUnit;
    }
    /**
     * Set tMUnit value
     *
     * @param string $_tMUnit the tMUnit
     *
     * @return string
     */
    public function setTMUnit($_tMUnit)
    {
        return ($this->tMUnit = $_tMUnit);
    }
    /**
     * Get PMNum value
     *
     * @return string|null
     */
    public function getPMNum()
    {
        return $this->PMNum;
    }
    /**
     * Set PMNum value
     *
     * @param string $_pMNum the PMNum
     *
     * @return string
     */
    public function setPMNum($_pMNum)
    {
        return ($this->PMNum = $_pMNum);
    }
    /**
     * Get barCode value
     *
     * @return string|null
     */
    public function getBarCode()
    {
        return $this->barCode;
    }
    /**
     * Set barCode value
     *
     * @param string $_barCode the barCode
     *
     * @return string
     */
    public function setBarCode($_barCode)
    {
        return ($this->barCode = $_barCode);
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
     * @return ColibriERPStructPDocTrans
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
