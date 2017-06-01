<?php
/**
 * File for class ColibriERPStructMatCategoryRec
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
 * This class stands for ColibriERPStructMatCategoryRec
 *  originally named MatCategoryRec
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
class ColibriERPStructMatCategoryRec extends ColibriERPWsdlClass
{
    /**
     * The idAttributeCategory
     *
     * @var integer
     */
    public $idAttributeCategory;
    /**
     * The IOrder
     *
     * @var integer
     */
    public $IOrder;
    /**
     * The CategoryType
     *
     * @var integer
     */
    public $CategoryType;
    /**
     * The attribCCode
     *
     * @var string
     */
    public $attribCCode;
    /**
     * The metaCategory
     *
     * @var string
     */
    public $metaCategory;
    /**
     * The chrCategoryName
     *
     * @var string
     */
    public $chrCategoryName;
    /**
     * The chrCategoryNameL
     *
     * @var string
     */
    public $chrCategoryNameL;
    /**
     * The ATTRS
     *
     * @var array
     */
    public $ATTRS;
    /**
     * Constructor method for MatCategoryRec
     *
     * @see parent::__construct()
     *
     * @param integer $_idAttributeCategory expect integer
     * @param integer $_iOrder              expect integer
     * @param integer $_categoryType        expect integer
     * @param string  $_attribCCode         expect string
     * @param string  $_metaCategory        expect string
     * @param string  $_chrCategoryName     expect string
     * @param string  $_chrCategoryNameL    expect string
     * @param array   $_aTTRS               expect array
     *
     * @return ColibriERPStructMatCategoryRec
     */
    public function __construct($_idAttributeCategory = null,$_iOrder = null,$_categoryType = null,$_attribCCode = null,$_metaCategory = null,$_chrCategoryName = null,$_chrCategoryNameL = null,$_aTTRS = null)
    {
        parent::__construct(array('idAttributeCategory'=>$_idAttributeCategory,'IOrder'=>$_iOrder,'CategoryType'=>$_categoryType,'attribCCode'=>$_attribCCode,'metaCategory'=>$_metaCategory,'chrCategoryName'=>$_chrCategoryName,'chrCategoryNameL'=>$_chrCategoryNameL,'ATTRS'=>$_aTTRS), false);
    }
    /**
     * Get idAttributeCategory value
     *
     * @return integer|null
     */
    public function getIdAttributeCategory()
    {
        return $this->idAttributeCategory;
    }
    /**
     * Set idAttributeCategory value
     *
     * @param integer $_idAttributeCategory the idAttributeCategory
     *
     * @return integer
     */
    public function setIdAttributeCategory($_idAttributeCategory)
    {
        return ($this->idAttributeCategory = $_idAttributeCategory);
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
     * Get CategoryType value
     *
     * @return integer|null
     */
    public function getCategoryType()
    {
        return $this->CategoryType;
    }
    /**
     * Set CategoryType value
     *
     * @param integer $_categoryType the CategoryType
     *
     * @return integer
     */
    public function setCategoryType($_categoryType)
    {
        return ($this->CategoryType = $_categoryType);
    }
    /**
     * Get attribCCode value
     *
     * @return string|null
     */
    public function getAttribCCode()
    {
        return $this->attribCCode;
    }
    /**
     * Set attribCCode value
     *
     * @param string $_attribCCode the attribCCode
     *
     * @return string
     */
    public function setAttribCCode($_attribCCode)
    {
        return ($this->attribCCode = $_attribCCode);
    }
    /**
     * Get metaCategory value
     *
     * @return string|null
     */
    public function getMetaCategory()
    {
        return $this->metaCategory;
    }
    /**
     * Set metaCategory value
     *
     * @param string $_metaCategory the metaCategory
     *
     * @return string
     */
    public function setMetaCategory($_metaCategory)
    {
        return ($this->metaCategory = $_metaCategory);
    }
    /**
     * Get chrCategoryName value
     *
     * @return string|null
     */
    public function getChrCategoryName()
    {
        return $this->chrCategoryName;
    }
    /**
     * Set chrCategoryName value
     *
     * @param string $_chrCategoryName the chrCategoryName
     *
     * @return string
     */
    public function setChrCategoryName($_chrCategoryName)
    {
        return ($this->chrCategoryName = $_chrCategoryName);
    }
    /**
     * Get chrCategoryNameL value
     *
     * @return string|null
     */
    public function getChrCategoryNameL()
    {
        return $this->chrCategoryNameL;
    }
    /**
     * Set chrCategoryNameL value
     *
     * @param string $_chrCategoryNameL the chrCategoryNameL
     *
     * @return string
     */
    public function setChrCategoryNameL($_chrCategoryNameL)
    {
        return ($this->chrCategoryNameL = $_chrCategoryNameL);
    }
    /**
     * Get ATTRS value
     *
     * @return array|null
     */
    public function getATTRS()
    {
        return $this->ATTRS;
    }
    /**
     * Set ATTRS value
     *
     * @param array $_aTTRS the ATTRS
     *
     * @return array
     */
    public function setATTRS($_aTTRS)
    {
        return ($this->ATTRS = $_aTTRS);
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
     * @return ColibriERPStructMatCategoryRec
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
