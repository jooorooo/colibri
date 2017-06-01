<?php
/**
 * File for class ColibriERPStructVATDeclarationDefSet
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
 * This class stands for ColibriERPStructVATDeclarationDefSet
 *  originally named VATDeclarationDefSet
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
class ColibriERPStructVATDeclarationDefSet extends ColibriERPWsdlClass
{
    /**
     * The Row
     *
     * @var integer
     */
    public $Row;
    /**
     * The Col
     *
     * @var integer
     */
    public $Col;
    /**
     * The Value
     *
     * @var string
     */
    public $Value;
    /**
     * Constructor method for VATDeclarationDefSet
     *
     * @see parent::__construct()
     *
     * @param integer $_row   expect integer
     * @param integer $_col   expect integer
     * @param string  $_value expect string
     *
     * @return ColibriERPStructVATDeclarationDefSet
     */
    public function __construct($_row = null,$_col = null,$_value = null)
    {
        parent::__construct(array('Row'=>$_row,'Col'=>$_col,'Value'=>$_value), false);
    }
    /**
     * Get Row value
     *
     * @return integer|null
     */
    public function getRow()
    {
        return $this->Row;
    }
    /**
     * Set Row value
     *
     * @param integer $_row the Row
     *
     * @return integer
     */
    public function setRow($_row)
    {
        return ($this->Row = $_row);
    }
    /**
     * Get Col value
     *
     * @return integer|null
     */
    public function getCol()
    {
        return $this->Col;
    }
    /**
     * Set Col value
     *
     * @param integer $_col the Col
     *
     * @return integer
     */
    public function setCol($_col)
    {
        return ($this->Col = $_col);
    }
    /**
     * Get Value value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     *
     * @param string $_value the Value
     *
     * @return string
     */
    public function setValue($_value)
    {
        return ($this->Value = $_value);
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
     * @return ColibriERPStructVATDeclarationDefSet
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
