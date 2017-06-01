<?php
/**
 * File for class ColibriERPStructAccOPRProDefSet
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
 * This class stands for ColibriERPStructAccOPRProDefSet
 *  originally named accOPRProDefSet
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
class ColibriERPStructAccOPRProDefSet extends ColibriERPWsdlClass
{
    /**
     * The oprL
     *
     * @var string
     */
    public $oprL;
    /**
     * The oprType
     *
     * @var string
     */
    public $oprType;
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
     * The oper
     *
     * @var string
     */
    public $oper;
    /**
     * The Debit
     *
     * @var string
     */
    public $Debit;
    /**
     * The Credit
     *
     * @var string
     */
    public $Credit;
    /**
     * Constructor method for accOPRProDefSet
     *
     * @see parent::__construct()
     *
     * @param string $_oprL    expect string
     * @param string $_oprType expect string
     * @param string $_label   expect string
     * @param string $_name    expect string
     * @param string $_oper    expect string
     * @param string $_debit   expect string
     * @param string $_credit  expect string
     *
     * @return ColibriERPStructAccOPRProDefSet
     */
    public function __construct($_oprL = null,$_oprType = null,$_label = null,$_name = null,$_oper = null,$_debit = null,$_credit = null)
    {
        parent::__construct(array('oprL'=>$_oprL,'oprType'=>$_oprType,'Label'=>$_label,'Name'=>$_name,'oper'=>$_oper,'Debit'=>$_debit,'Credit'=>$_credit), false);
    }
    /**
     * Get oprL value
     *
     * @return string|null
     */
    public function getOprL()
    {
        return $this->oprL;
    }
    /**
     * Set oprL value
     *
     * @param string $_oprL the oprL
     *
     * @return string
     */
    public function setOprL($_oprL)
    {
        return ($this->oprL = $_oprL);
    }
    /**
     * Get oprType value
     *
     * @return string|null
     */
    public function getOprType()
    {
        return $this->oprType;
    }
    /**
     * Set oprType value
     *
     * @param string $_oprType the oprType
     *
     * @return string
     */
    public function setOprType($_oprType)
    {
        return ($this->oprType = $_oprType);
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
     * Get oper value
     *
     * @return string|null
     */
    public function getOper()
    {
        return $this->oper;
    }
    /**
     * Set oper value
     *
     * @param string $_oper the oper
     *
     * @return string
     */
    public function setOper($_oper)
    {
        return ($this->oper = $_oper);
    }
    /**
     * Get Debit value
     *
     * @return string|null
     */
    public function getDebit()
    {
        return $this->Debit;
    }
    /**
     * Set Debit value
     *
     * @param string $_debit the Debit
     *
     * @return string
     */
    public function setDebit($_debit)
    {
        return ($this->Debit = $_debit);
    }
    /**
     * Get Credit value
     *
     * @return string|null
     */
    public function getCredit()
    {
        return $this->Credit;
    }
    /**
     * Set Credit value
     *
     * @param string $_credit the Credit
     *
     * @return string
     */
    public function setCredit($_credit)
    {
        return ($this->Credit = $_credit);
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
     * @return ColibriERPStructAccOPRProDefSet
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
