<?php
/**
 * File for class ColibriERPStructAccBALdatDefSet
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
 * This class stands for ColibriERPStructAccBALdatDefSet
 *  originally named accBALdatDefSet
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
class ColibriERPStructAccBALdatDefSet extends ColibriERPWsdlClass
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
     * The Suma
     *
     * @var float
     */
    public $Suma;
    /**
     * Constructor method for accBALdatDefSet
     *
     * @see parent::__construct()
     *
     * @param string $_balL    expect string
     * @param string $_balType expect string
     * @param float  $_suma    expect float
     *
     * @return ColibriERPStructAccBALdatDefSet
     */
    public function __construct($_balL = null,$_balType = null,$_suma = null)
    {
        parent::__construct(array('balL'=>$_balL,'balType'=>$_balType,'Suma'=>$_suma), false);
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
     * @return ColibriERPStructAccBALdatDefSet
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
