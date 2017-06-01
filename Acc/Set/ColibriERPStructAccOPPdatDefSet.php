<?php
/**
 * File for class ColibriERPStructAccOPPdatDefSet
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
 * This class stands for ColibriERPStructAccOPPdatDefSet
 *  originally named accOPPdatDefSet
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
class ColibriERPStructAccOPPdatDefSet extends ColibriERPWsdlClass
{
    /**
     * The oppL
     *
     * @var string
     */
    public $oppL;
    /**
     * The Suma
     *
     * @var float
     */
    public $Suma;
    /**
     * Constructor method for accOPPdatDefSet
     *
     * @see parent::__construct()
     *
     * @param string $_oppL expect string
     * @param float  $_suma expect float
     *
     * @return ColibriERPStructAccOPPdatDefSet
     */
    public function __construct($_oppL = null,$_suma = null)
    {
        parent::__construct(array('oppL'=>$_oppL,'Suma'=>$_suma), false);
    }
    /**
     * Get oppL value
     *
     * @return string|null
     */
    public function getOppL()
    {
        return $this->oppL;
    }
    /**
     * Set oppL value
     *
     * @param string $_oppL the oppL
     *
     * @return string
     */
    public function setOppL($_oppL)
    {
        return ($this->oppL = $_oppL);
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
     * @return ColibriERPStructAccOPPdatDefSet
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
