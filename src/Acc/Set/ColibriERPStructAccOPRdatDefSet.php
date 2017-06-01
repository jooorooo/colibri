<?php
/**
 * File for class ColibriERPStructAccOPRdatDefSet
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
 * This class stands for ColibriERPStructAccOPRdatDefSet
 *  originally named accOPRdatDefSet
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
class ColibriERPStructAccOPRdatDefSet extends ColibriERPWsdlClass
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
     * The Suma
     *
     * @var float
     */
    public $Suma;
    /**
     * Constructor method for accOPRdatDefSet
     *
     * @see parent::__construct()
     *
     * @param string $_oprL    expect string
     * @param string $_oprType expect string
     * @param float  $_suma    expect float
     *
     * @return ColibriERPStructAccOPRdatDefSet
     */
    public function __construct($_oprL = null,$_oprType = null,$_suma = null)
    {
        parent::__construct(array('oprL'=>$_oprL,'oprType'=>$_oprType,'Suma'=>$_suma), false);
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
     * Get Suma value
     *
     * @return float|null
     */
    public function getSuma()
    {
        return $this->Suma;
    }
    /**
     * Set Suma value
     *
     * @param float $_suma the Suma
     *
     * @return float
     */
    public function setSuma($_suma)
    {
        return ($this->Suma = $_suma);
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
     * @return ColibriERPStructAccOPRdatDefSet
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
