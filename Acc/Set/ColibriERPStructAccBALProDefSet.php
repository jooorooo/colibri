<?php
/**
 * File for class ColibriERPStructAccBALProDefSet
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
 * This class stands for ColibriERPStructAccBALProDefSet
 *  originally named accBALProDefSet
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
class ColibriERPStructAccBALProDefSet extends ColibriERPWsdlClass
{
    /**
     * The balL
     *
     * @var string
     */
    public $balL;
    /**
     * The balType
     *
     * @var string
     */
    public $balType;
    /**
     * The Label
     *
     * @var string
     */
    public $Label;
    /**
     * The Name
     *
     * @var string
     */
    public $Name;
    /**
     * The expr
     *
     * @var string
     */
    public $expr;
    /**
     * Constructor method for accBALProDefSet
     *
     * @see parent::__construct()
     *
     * @param string $_balL    expect string
     * @param string $_balType expect string
     * @param string $_label   expect string
     * @param string $_name    expect string
     * @param string $_expr    expect string
     *
     * @return ColibriERPStructAccBALProDefSet
     */
    public function __construct($_balL = null,$_balType = null,$_label = null,$_name = null,$_expr = null)
    {
        parent::__construct(array('balL'=>$_balL,'balType'=>$_balType,'Label'=>$_label,'Name'=>$_name,'expr'=>$_expr), false);
    }
    /**
     * Get balL value
     *
     * @return string|null
     */
    public function getBalL()
    {
        return $this->balL;
    }
    /**
     * Set balL value
     *
     * @param string $_balL the balL
     *
     * @return string
     */
    public function setBalL($_balL)
    {
        return ($this->balL = $_balL);
    }
    /**
     * Get balType value
     *
     * @return string|null
     */
    public function getBalType()
    {
        return $this->balType;
    }
    /**
     * Set balType value
     *
     * @param string $_balType the balType
     *
     * @return string
     */
    public function setBalType($_balType)
    {
        return ($this->balType = $_balType);
    }
    /**
     * Get Label value
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     *
     * @param string $_label the Label
     *
     * @return string
     */
    public function setLabel($_label)
    {
        return ($this->Label = $_label);
    }
    /**
     * Get Name value
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     *
     * @param string $_name the Name
     *
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get expr value
     *
     * @return string|null
     */
    public function getExpr()
    {
        return $this->expr;
    }
    /**
     * Set expr value
     *
     * @param string $_expr the expr
     *
     * @return string
     */
    public function setExpr($_expr)
    {
        return ($this->expr = $_expr);
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
     * @return ColibriERPStructAccBALProDefSet
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
