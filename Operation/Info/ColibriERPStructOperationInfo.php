<?php
/**
 * File for class ColibriERPStructOperationInfo
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
 * This class stands for ColibriERPStructOperationInfo
 *  originally named operationInfo
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
class ColibriERPStructOperationInfo extends ColibriERPWsdlClass
{
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
     * The OName
     *
     * @var string
     */
    public $OName;
    /**
     * The SectorName
     *
     * @var string
     */
    public $SectorName;
    /**
     * Constructor method for operationInfo
     *
     * @see parent::__construct()
     *
     * @param integer $_idOper     expect integer
     * @param integer $_idSector   expect integer
     * @param string  $_oName      expect string
     * @param string  $_sectorName expect string
     *
     * @return ColibriERPStructOperationInfo
     */
    public function __construct($_idOper = null,$_idSector = null,$_oName = null,$_sectorName = null)
    {
        parent::__construct(array('idOper'=>$_idOper,'idSector'=>$_idSector,'OName'=>$_oName,'SectorName'=>$_sectorName), false);
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
     * Get OName value
     *
     * @return string|null
     */
    public function getOName()
    {
        return $this->OName;
    }
    /**
     * Set OName value
     *
     * @param string $_oName the OName
     *
     * @return string
     */
    public function setOName($_oName)
    {
        return ($this->OName = $_oName);
    }
    /**
     * Get SectorName value
     *
     * @return string|null
     */
    public function getSectorName()
    {
        return $this->SectorName;
    }
    /**
     * Set SectorName value
     *
     * @param string $_sectorName the SectorName
     *
     * @return string
     */
    public function setSectorName($_sectorName)
    {
        return ($this->SectorName = $_sectorName);
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
     * @return ColibriERPStructOperationInfo
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
