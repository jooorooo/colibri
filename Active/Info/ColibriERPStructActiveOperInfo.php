<?php
/**
 * File for class ColibriERPStructActiveOperInfo
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
 * This class stands for ColibriERPStructActiveOperInfo
 *  originally named activeOperInfo
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
class ColibriERPStructActiveOperInfo extends ColibriERPWsdlClass
{
    /**
     * The CNumRoot
     *
     * @var string
     */
    public $CNumRoot;
    /**
     * The CNum
     *
     * @var string
     */
    public $CNum;
    /**
     * The idOper
     *
     * @var integer
     */
    public $idOper;
    /**
     * The idSector
     *
     * @var integer
     */
    public $idSector;
    /**
     * Constructor method for activeOperInfo
     *
     * @see parent::__construct()
     *
     * @param string  $_cNumRoot expect string
     * @param string  $_cNum     expect string
     * @param integer $_idOper   expect integer
     * @param integer $_idSector expect integer
     *
     * @return ColibriERPStructActiveOperInfo
     */
    public function __construct($_cNumRoot = null,$_cNum = null,$_idOper = null,$_idSector = null)
    {
        parent::__construct(array('CNumRoot'=>$_cNumRoot,'CNum'=>$_cNum,'idOper'=>$_idOper,'idSector'=>$_idSector), false);
    }
    /**
     * Get CNumRoot value
     *
     * @return string|null
     */
    public function getCNumRoot()
    {
        return $this->CNumRoot;
    }
    /**
     * Set CNumRoot value
     *
     * @param string $_cNumRoot the CNumRoot
     *
     * @return string
     */
    public function setCNumRoot($_cNumRoot)
    {
        return ($this->CNumRoot = $_cNumRoot);
    }
    /**
     * Get CNum value
     *
     * @return string|null
     */
    public function getCNum()
    {
        return $this->CNum;
    }
    /**
     * Set CNum value
     *
     * @param string $_cNum the CNum
     *
     * @return string
     */
    public function setCNum($_cNum)
    {
        return ($this->CNum = $_cNum);
    }
    /**
     * Get idOper value
     *
     * @return integer|null
     */
    public function getIdOper()
    {
        return $this->idOper;
    }
    /**
     * Set idOper value
     *
     * @param integer $_idOper the idOper
     *
     * @return integer
     */
    public function setIdOper($_idOper)
    {
        return ($this->idOper = $_idOper);
    }
    /**
     * Get idSector value
     *
     * @return integer|null
     */
    public function getIdSector()
    {
        return $this->idSector;
    }
    /**
     * Set idSector value
     *
     * @param integer $_idSector the idSector
     *
     * @return integer
     */
    public function setIdSector($_idSector)
    {
        return ($this->idSector = $_idSector);
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
     * @return ColibriERPStructActiveOperInfo
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
