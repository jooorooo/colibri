<?php
/**
 * File for class ColibriERPStructMAttributeCategoryInfo
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
 * This class stands for ColibriERPStructMAttributeCategoryInfo
 *  originally named mAttributeCategoryInfo
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
class ColibriERPStructMAttributeCategoryInfo extends ColibriERPWsdlClass
{
    /**
     * The idAttributeCategory
     *
     * @var string
     */
    public $idAttributeCategory;
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
     * The mAttribute
     *
     * @var array
     */
    public $mAttribute;
    /**
     * Constructor method for mAttributeCategoryInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idAttributeCategory expect string
     * @param string $_chrCategoryName     expect string
     * @param string $_chrCategoryNameL    expect string
     * @param array  $_mAttribute          expect array
     *
     * @return ColibriERPStructMAttributeCategoryInfo
     */
    public function __construct($_idAttributeCategory = null,$_chrCategoryName = null,$_chrCategoryNameL = null,$_mAttribute = null)
    {
        parent::__construct(array('idAttributeCategory'=>$_idAttributeCategory,'chrCategoryName'=>$_chrCategoryName,'chrCategoryNameL'=>$_chrCategoryNameL,'mAttribute'=>$_mAttribute), false);
    }
    /**
     * Get idAttributeCategory value
     *
     * @return string|null
     */
    public function getIdAttributeCategory()
    {
        return $this->idAttributeCategory;
    }
    /**
     * Set idAttributeCategory value
     *
     * @param string $_idAttributeCategory the idAttributeCategory
     *
     * @return string
     */
    public function setIdAttributeCategory($_idAttributeCategory)
    {
        return ($this->idAttributeCategory = $_idAttributeCategory);
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
     * Get mAttribute value
     *
     * @return array|null
     */
    public function getMAttribute()
    {
        return $this->mAttribute;
    }
    /**
     * Set mAttribute value
     *
     * @param array $_mAttribute the mAttribute
     *
     * @return array
     */
    public function setMAttribute($_mAttribute)
    {
        return ($this->mAttribute = $_mAttribute);
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
     * @return ColibriERPStructMAttributeCategoryInfo
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
