<?php
/**
 * File for class ColibriERPStructMatInfo
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
 * This class stands for ColibriERPStructMatInfo
 *  originally named matInfo
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
class ColibriERPStructMatInfo extends ColibriERPWsdlClass
{
    /**
     * The idMat
     *
     * @var integer
     */
    public $idMat;
    /**
     * The MNum
     *
     * @var string
     */
    public $MNum;
    /**
     * The MName
     *
     * @var string
     */
    public $MName;
    /**
     * The ProdName
     *
     * @var string
     */
    public $ProdName;
    /**
     * The MUnit
     *
     * @var string
     */
    public $MUnit;
    /**
     * The MKCode
     *
     * @var string
     */
    public $MKCode;
    /**
     * The MDDSTax
     *
     * @var float
     */
    public $MDDSTax;
    /**
     * The idGroup
     *
     * @var integer
     */
    public $idGroup;
    /**
     * The GNum
     *
     * @var string
     */
    public $GNum;
    /**
     * The PackSchemeName
     *
     * @var string
     */
    public $PackSchemeName;
    /**
     * The matAttribute
     *
     * @var array
     */
    public $matAttribute;
    /**
     * The Price
     *
     * @var float
     */
    public $Price;
    /**
     * The curCode
     *
     * @var string
     */
    public $curCode;
    /**
     * The matStore
     *
     * @var array
     */
    public $matStore;
    /**
     * The barCode
     *
     * @var string
     */
    public $barCode;
    /**
     * The tags
     *
     * @var array
     */
    public $tags;
    /**
     * The IsActive
     *
     * @var integer
     */
    public $IsActive;
    /**
     * Constructor method for matInfo
     *
     * @see parent::__construct()
     *
     * @param integer $_idMat          expect integer
     * @param string  $_mNum           expect string
     * @param string  $_mName          expect string
     * @param string  $_prodName       expect string
     * @param string  $_mUnit          expect string
     * @param string  $_mKCode         expect string
     * @param float   $_mDDSTax        expect float
     * @param integer $_idGroup        expect integer
     * @param string  $_gNum           expect string
     * @param string  $_packSchemeName expect string
     * @param array   $_matAttribute   expect array
     * @param float   $_price          expect float
     * @param string  $_curCode        expect string
     * @param array   $_matStore       expect array
     * @param string  $_barCode        expect string
     * @param array   $_tags           expect array
     * @param integer $_isActive       expect integer
     *
     * @return ColibriERPStructMatInfo
     */
    public function __construct($_idMat = null,$_mNum = null,$_mName = null,$_prodName = null,$_mUnit = null,$_mKCode = null,$_mDDSTax = null,$_idGroup = null,$_gNum = null,$_packSchemeName = null,$_matAttribute = null,$_price = null,$_curCode = null,$_matStore = null,$_barCode = null,$_tags = null,$_isActive = null)
    {
        parent::__construct(array('idMat'=>$_idMat,'MNum'=>$_mNum,'MName'=>$_mName,'ProdName'=>$_prodName,'MUnit'=>$_mUnit,'MKCode'=>$_mKCode,'MDDSTax'=>$_mDDSTax,'idGroup'=>$_idGroup,'GNum'=>$_gNum,'PackSchemeName'=>$_packSchemeName,'matAttribute'=>$_matAttribute,'Price'=>$_price,'curCode'=>$_curCode,'matStore'=>$_matStore,'barCode'=>$_barCode,'tags'=>$_tags,'IsActive'=>$_isActive), false);
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
     * Get MDDSTax value
     *
     * @return float|null
     */
    public function getMDDSTax()
    {
        return $this->MDDSTax;
    }
    /**
     * Set MDDSTax value
     *
     * @param float $_mDDSTax the MDDSTax
     *
     * @return float
     */
    public function setMDDSTax($_mDDSTax)
    {
        return ($this->MDDSTax = $_mDDSTax);
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
     * Get GNum value
     *
     * @return string|null
     */
    public function getGNum()
    {
        return $this->GNum;
    }
    /**
     * Set GNum value
     *
     * @param string $_gNum the GNum
     *
     * @return string
     */
    public function setGNum($_gNum)
    {
        return ($this->GNum = $_gNum);
    }
    /**
     * Get PackSchemeName value
     *
     * @return string|null
     */
    public function getPackSchemeName()
    {
        return $this->PackSchemeName;
    }
    /**
     * Set PackSchemeName value
     *
     * @param string $_packSchemeName the PackSchemeName
     *
     * @return string
     */
    public function setPackSchemeName($_packSchemeName)
    {
        return ($this->PackSchemeName = $_packSchemeName);
    }
    /**
     * Get matAttribute value
     *
     * @return array|null
     */
    public function getMatAttribute()
    {
        return $this->matAttribute;
    }
    /**
     * Set matAttribute value
     *
     * @param array $_matAttribute the matAttribute
     *
     * @return array
     */
    public function setMatAttribute($_matAttribute)
    {
        return ($this->matAttribute = $_matAttribute);
    }
    /**
     * Get Price value
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     *
     * @param float $_price the Price
     *
     * @return float
     */
    public function setPrice($_price)
    {
        return ($this->Price = $_price);
    }
    /**
     * Get curCode value
     *
     * @return string|null
     */
    public function getCurCode()
    {
        return $this->curCode;
    }
    /**
     * Set curCode value
     *
     * @param string $_curCode the curCode
     *
     * @return string
     */
    public function setCurCode($_curCode)
    {
        return ($this->curCode = $_curCode);
    }
    /**
     * Get matStore value
     *
     * @return array|null
     */
    public function getMatStore()
    {
        return $this->matStore;
    }
    /**
     * Set matStore value
     *
     * @param array $_matStore the matStore
     *
     * @return array
     */
    public function setMatStore($_matStore)
    {
        return ($this->matStore = $_matStore);
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
     * Get tags value
     *
     * @return array|null
     */
    public function getTags()
    {
        return $this->tags;
    }
    /**
     * Set tags value
     *
     * @param array $_tags the tags
     *
     * @return array
     */
    public function setTags($_tags)
    {
        return ($this->tags = $_tags);
    }
    /**
     * Get IsActive value
     *
     * @return integer|null
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }
    /**
     * Set IsActive value
     *
     * @param integer $_isActive the IsActive
     *
     * @return integer
     */
    public function setIsActive($_isActive)
    {
        return ($this->IsActive = $_isActive);
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
     * @return ColibriERPStructMatInfo
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
