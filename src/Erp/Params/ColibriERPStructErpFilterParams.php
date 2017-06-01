<?php
/**
 * File for class ColibriERPStructErpFilterParams
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
 * This class stands for ColibriERPStructErpFilterParams
 *  originally named erpFilterParams
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
class ColibriERPStructErpFilterParams extends ColibriERPWsdlClass
{
    /**
     * The filter
     * - doc : Filter rule list, i.e. (field,value) pairs.
     *
     * @var array
     */
    public $filter;
    /**
     * The ext_filter
     * - doc : Extended filter rule list, i.e. (field,value,oper) triplets.
     *
     * @var array
     */
    public $ext_filter;
    /**
     * The sort
     * - doc : Sort rule list, i.e. (field,dir) pairs.
     *
     * @var array
     */
    public $sort;
    /**
     * The set
     * - doc : Setting parameters list, i.e. (key,value) pairs.
     *
     * @var array
     */
    public $set;
    /**
     * The limit
     * - doc : Result data set row limit, i.e. (offcet,count).
     *
     * @var ColibriERPStructLimitRange
     */
    public $limit;
    /**
     * The field_list
     * - doc : Result data set row fields list to return.
     *
     * @var array
     */
    public $field_list;
    /**
     * Constructor method for erpFilterParams
     *
     * @see parent::__construct()
     *
     * @param array                      $_filter     expect array
     * @param array                      $_ext_filter expect array
     * @param array                      $_sort       expect array
     * @param array                      $_set        expect array
     * @param ColibriERPStructLimitRange $_limit      expect ColibriERPStructLimitRange
     * @param array                      $_field_list expect array
     *
     * @return ColibriERPStructErpFilterParams
     */
    public function __construct($_filter = null,$_ext_filter = null,$_sort = null,$_set = null,$_limit = null,$_field_list = null)
    {
        parent::__construct(array('filter'=>$_filter,'ext_filter'=>$_ext_filter,'sort'=>$_sort,'set'=>$_set,'limit'=>$_limit,'field_list'=>$_field_list), false);
    }
    /**
     * Get filter value
     *
     * @return array|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     *
     * @param array $_filter the filter
     *
     * @return array
     */
    public function setFilter($_filter)
    {
        return ($this->filter = $_filter);
    }
    /**
     * Get ext_filter value
     *
     * @return array|null
     */
    public function getExt_filter()
    {
        return $this->ext_filter;
    }
    /**
     * Set ext_filter value
     *
     * @param array $_ext_filter the ext_filter
     *
     * @return array
     */
    public function setExt_filter($_ext_filter)
    {
        return ($this->ext_filter = $_ext_filter);
    }
    /**
     * Get sort value
     *
     * @return array|null
     */
    public function getSort()
    {
        return $this->sort;
    }
    /**
     * Set sort value
     *
     * @param array $_sort the sort
     *
     * @return array
     */
    public function setSort($_sort)
    {
        return ($this->sort = $_sort);
    }
    /**
     * Get set value
     *
     * @return array|null
     */
    public function getSet()
    {
        return $this->set;
    }
    /**
     * Set set value
     *
     * @param array $_set the set
     *
     * @return array
     */
    public function setSet($_set)
    {
        return ($this->set = $_set);
    }
    /**
     * Get limit value
     *
     * @return ColibriERPStructLimitRange|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     *
     * @param ColibriERPStructLimitRange $_limit the limit
     *
     * @return ColibriERPStructLimitRange
     */
    public function setLimit($_limit)
    {
        return ($this->limit = $_limit);
    }
    /**
     * Get field_list value
     *
     * @return array|null
     */
    public function getField_list()
    {
        return $this->field_list;
    }
    /**
     * Set field_list value
     *
     * @param array $_field_list the field_list
     *
     * @return array
     */
    public function setField_list($_field_list)
    {
        return ($this->field_list = $_field_list);
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
     * @return ColibriERPStructErpFilterParams
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
