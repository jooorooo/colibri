<?php
/**
 * File for class ColibriERPStructAccOV
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
 * This class stands for ColibriERPStructAccOV
 *  originally named accOV
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
class ColibriERPStructAccOV extends ColibriERPWsdlClass
{
    /**
     * The idProfitCentre
     *
     * @var string
     */
    public $idProfitCentre;
    /**
     * The YM
     *
     * @var string
     */
    public $YM;
    /**
     * The aNum
     *
     * @var string
     */
    public $aNum;
    /**
     * The BDS
     *
     * @var float
     */
    public $BDS;
    /**
     * The BCS
     *
     * @var float
     */
    public $BCS;
    /**
     * The DO
     *
     * @var float
     */
    public $DO;
    /**
     * The CO
     *
     * @var float
     */
    public $CO;
    /**
     * The EDS
     *
     * @var float
     */
    public $EDS;
    /**
     * The ECS
     *
     * @var float
     */
    public $ECS;
    /**
     * Constructor method for accOV
     *
     * @see parent::__construct()
     *
     * @param string $_idProfitCentre expect string
     * @param string $_yM             expect string
     * @param string $_aNum           expect string
     * @param float  $_bDS            expect float
     * @param float  $_bCS            expect float
     * @param float  $_dO             expect float
     * @param float  $_cO             expect float
     * @param float  $_eDS            expect float
     * @param float  $_eCS            expect float
     *
     * @return ColibriERPStructAccOV
     */
    public function __construct($_idProfitCentre = null,$_yM = null,$_aNum = null,$_bDS = null,$_bCS = null,$_dO = null,$_cO = null,$_eDS = null,$_eCS = null)
    {
        parent::__construct(array('idProfitCentre'=>$_idProfitCentre,'YM'=>$_yM,'aNum'=>$_aNum,'BDS'=>$_bDS,'BCS'=>$_bCS,'DO'=>$_dO,'CO'=>$_cO,'EDS'=>$_eDS,'ECS'=>$_eCS), false);
    }
    /**
     * Get idProfitCentre value
     *
     * @return string|null
     */
    public function getIdProfitCentre()
    {
        return $this->idProfitCentre;
    }
    /**
     * Set idProfitCentre value
     *
     * @param string $_idProfitCentre the idProfitCentre
     *
     * @return string
     */
    public function setIdProfitCentre($_idProfitCentre)
    {
        return ($this->idProfitCentre = $_idProfitCentre);
    }
    /**
     * Get YM value
     *
     * @return string|null
     */
    public function getYM()
    {
        return $this->YM;
    }
    /**
     * Set YM value
     *
     * @param string $_yM the YM
     *
     * @return string
     */
    public function setYM($_yM)
    {
        return ($this->YM = $_yM);
    }
    /**
     * Get aNum value
     *
     * @return string|null
     */
    public function getANum()
    {
        return $this->aNum;
    }
    /**
     * Set aNum value
     *
     * @param string $_aNum the aNum
     *
     * @return string
     */
    public function setANum($_aNum)
    {
        return ($this->aNum = $_aNum);
    }
    /**
     * Get BDS value
     *
     * @return float|null
     */
    public function getBDS()
    {
        return $this->BDS;
    }
    /**
     * Set BDS value
     *
     * @param float $_bDS the BDS
     *
     * @return float
     */
    public function setBDS($_bDS)
    {
        return ($this->BDS = $_bDS);
    }
    /**
     * Get BCS value
     *
     * @return float|null
     */
    public function getBCS()
    {
        return $this->BCS;
    }
    /**
     * Set BCS value
     *
     * @param float $_bCS the BCS
     *
     * @return float
     */
    public function setBCS($_bCS)
    {
        return ($this->BCS = $_bCS);
    }
    /**
     * Get DO value
     *
     * @return float|null
     */
    public function getDO()
    {
        return $this->DO;
    }
    /**
     * Set DO value
     *
     * @param float $_dO the DO
     *
     * @return float
     */
    public function setDO($_dO)
    {
        return ($this->DO = $_dO);
    }
    /**
     * Get CO value
     *
     * @return float|null
     */
    public function getCO()
    {
        return $this->CO;
    }
    /**
     * Set CO value
     *
     * @param float $_cO the CO
     *
     * @return float
     */
    public function setCO($_cO)
    {
        return ($this->CO = $_cO);
    }
    /**
     * Get EDS value
     *
     * @return float|null
     */
    public function getEDS()
    {
        return $this->EDS;
    }
    /**
     * Set EDS value
     *
     * @param float $_eDS the EDS
     *
     * @return float
     */
    public function setEDS($_eDS)
    {
        return ($this->EDS = $_eDS);
    }
    /**
     * Get ECS value
     *
     * @return float|null
     */
    public function getECS()
    {
        return $this->ECS;
    }
    /**
     * Set ECS value
     *
     * @param float $_eCS the ECS
     *
     * @return float
     */
    public function setECS($_eCS)
    {
        return ($this->ECS = $_eCS);
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
     * @return ColibriERPStructAccOV
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
