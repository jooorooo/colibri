<?php
/**
 * File for class ColibriERPStructProdPersonalInfo
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
 * This class stands for ColibriERPStructProdPersonalInfo
 *  originally named prodPersonalInfo
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
class ColibriERPStructProdPersonalInfo extends ColibriERPWsdlClass
{
    /**
     * The idPersonal
     *
     * @var integer
     */
    public $idPersonal;
    /**
     * The PersNum
     *
     * @var string
     */
    public $PersNum;
    /**
     * The RefNum
     *
     * @var string
     */
    public $RefNum;
    /**
     * The PersName
     *
     * @var string
     */
    public $PersName;
    /**
     * The isActive
     *
     * @var integer
     */
    public $isActive;
    /**
     * Constructor method for prodPersonalInfo
     *
     * @see parent::__construct()
     *
     * @param integer $_idPersonal expect integer
     * @param string  $_persNum    expect string
     * @param string  $_refNum     expect string
     * @param string  $_persName   expect string
     * @param integer $_isActive   expect integer
     *
     * @return ColibriERPStructProdPersonalInfo
     */
    public function __construct($_idPersonal = null,$_persNum = null,$_refNum = null,$_persName = null,$_isActive = null)
    {
        parent::__construct(array('idPersonal'=>$_idPersonal,'PersNum'=>$_persNum,'RefNum'=>$_refNum,'PersName'=>$_persName,'isActive'=>$_isActive), false);
    }
    /**
     * Get idPersonal value
     *
     * @return integer|null
     */
    public function getIdPersonal()
    {
        return $this->idPersonal;
    }
    /**
     * Set idPersonal value
     *
     * @param integer $_idPersonal the idPersonal
     *
     * @return integer
     */
    public function setIdPersonal($_idPersonal)
    {
        return ($this->idPersonal = $_idPersonal);
    }
    /**
     * Get PersNum value
     *
     * @return string|null
     */
    public function getPersNum()
    {
        return $this->PersNum;
    }
    /**
     * Set PersNum value
     *
     * @param string $_persNum the PersNum
     *
     * @return string
     */
    public function setPersNum($_persNum)
    {
        return ($this->PersNum = $_persNum);
    }
    /**
     * Get RefNum value
     *
     * @return string|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     *
     * @param string $_refNum the RefNum
     *
     * @return string
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
    }
    /**
     * Get PersName value
     *
     * @return string|null
     */
    public function getPersName()
    {
        return $this->PersName;
    }
    /**
     * Set PersName value
     *
     * @param string $_persName the PersName
     *
     * @return string
     */
    public function setPersName($_persName)
    {
        return ($this->PersName = $_persName);
    }
    /**
     * Get isActive value
     *
     * @return integer|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     *
     * @param integer $_isActive the isActive
     *
     * @return integer
     */
    public function setIsActive($_isActive)
    {
        return ($this->isActive = $_isActive);
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
     * @return ColibriERPStructProdPersonalInfo
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
