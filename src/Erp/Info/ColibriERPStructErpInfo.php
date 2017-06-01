<?php
/**
 * File for class ColibriERPStructErpInfo
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
 * This class stands for ColibriERPStructErpInfo
 *  originally named erpInfo
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
class ColibriERPStructErpInfo extends ColibriERPWsdlClass
{
    /**
     * The Name
     *
     * @var string
     */
    public $Name;
    /**
     * The Brand
     *
     * @var string
     */
    public $Brand;
    /**
     * The Revision
     *
     * @var string
     */
    public $Revision;
    /**
     * The BuildDate
     *
     * @var string
     */
    public $BuildDate;
    /**
     * Constructor method for erpInfo
     *
     * @see parent::__construct()
     *
     * @param string $_name      expect string
     * @param string $_brand     expect string
     * @param string $_revision  expect string
     * @param string $_buildDate expect string
     *
     * @return ColibriERPStructErpInfo
     */
    public function __construct($_name = null,$_brand = null,$_revision = null,$_buildDate = null)
    {
        parent::__construct(array('Name'=>$_name,'Brand'=>$_brand,'Revision'=>$_revision,'BuildDate'=>$_buildDate), false);
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
     * Get Brand value
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     *
     * @param string $_brand the Brand
     *
     * @return string
     */
    public function setBrand($_brand)
    {
        return ($this->Brand = $_brand);
    }
    /**
     * Get Revision value
     *
     * @return string|null
     */
    public function getRevision()
    {
        return $this->Revision;
    }
    /**
     * Set Revision value
     *
     * @param string $_revision the Revision
     *
     * @return string
     */
    public function setRevision($_revision)
    {
        return ($this->Revision = $_revision);
    }
    /**
     * Get BuildDate value
     *
     * @return string|null
     */
    public function getBuildDate()
    {
        return $this->BuildDate;
    }
    /**
     * Set BuildDate value
     *
     * @param string $_buildDate the BuildDate
     *
     * @return string
     */
    public function setBuildDate($_buildDate)
    {
        return ($this->BuildDate = $_buildDate);
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
     * @return ColibriERPStructErpInfo
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
