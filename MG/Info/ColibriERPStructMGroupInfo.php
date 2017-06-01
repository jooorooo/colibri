<?php
/**
 * File for class ColibriERPStructMGroupInfo
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
 * This class stands for ColibriERPStructMGroupInfo
 *  originally named mGroupInfo
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
class ColibriERPStructMGroupInfo extends ColibriERPWsdlClass
{
    /**
     * The idGroup
     *
     * @var string
     */
    public $idGroup;
    /**
     * The GNum
     *
     * @var string
     */
    public $GNum;
    /**
     * The MKCode
     *
     * @var string
     */
    public $MKCode;
    /**
     * The GName
     *
     * @var string
     */
    public $GName;
    /**
     * Constructor method for mGroupInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idGroup expect string
     * @param string $_gNum    expect string
     * @param string $_mKCode  expect string
     * @param string $_gName   expect string
     *
     * @return ColibriERPStructMGroupInfo
     */
    public function __construct($_idGroup = null,$_gNum = null,$_mKCode = null,$_gName = null)
    {
        parent::__construct(array('idGroup'=>$_idGroup,'GNum'=>$_gNum,'MKCode'=>$_mKCode,'GName'=>$_gName), false);
    }
    /**
     * Get idGroup value
     *
     * @return string|null
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }
    /**
     * Set idGroup value
     *
     * @param string $_idGroup the idGroup
     *
     * @return string
     */
    public function setIdGroup($_idGroup)
    {
        return ($this->idGroup = $_idGroup);
    }
    /**
     * Get GNum value
     *
     * @return string|null
     */
    public function getGNum()
    {
        return $this->GNum;
    }
    /**
     * Set GNum value
     *
     * @param string $_gNum the GNum
     *
     * @return string
     */
    public function setGNum($_gNum)
    {
        return ($this->GNum = $_gNum);
    }
    /**
     * Get MKCode value
     *
     * @return string|null
     */
    public function getMKCode()
    {
        return $this->MKCode;
    }
    /**
     * Set MKCode value
     *
     * @param string $_mKCode the MKCode
     *
     * @return string
     */
    public function setMKCode($_mKCode)
    {
        return ($this->MKCode = $_mKCode);
    }
    /**
     * Get GName value
     *
     * @return string|null
     */
    public function getGName()
    {
        return $this->GName;
    }
    /**
     * Set GName value
     *
     * @param string $_gName the GName
     *
     * @return string
     */
    public function setGName($_gName)
    {
        return ($this->GName = $_gName);
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
     * @return ColibriERPStructMGroupInfo
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
