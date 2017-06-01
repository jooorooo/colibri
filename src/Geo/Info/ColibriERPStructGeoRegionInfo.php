<?php
/**
 * File for class ColibriERPStructGeoRegionInfo
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
 * This class stands for ColibriERPStructGeoRegionInfo
 *  originally named GeoRegionInfo
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
class ColibriERPStructGeoRegionInfo extends ColibriERPWsdlClass
{
    /**
     * The idGeoRegion
     *
     * @var string
     */
    public $idGeoRegion;
    /**
     * The idGeoParent
     *
     * @var string
     */
    public $idGeoParent;
    /**
     * The GeoAbbr
     *
     * @var string
     */
    public $GeoAbbr;
    /**
     * The chrRegionName
     *
     * @var string
     */
    public $chrRegionName;
    /**
     * Constructor method for GeoRegionInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idGeoRegion   expect string
     * @param string $_idGeoParent   expect string
     * @param string $_geoAbbr       expect string
     * @param string $_chrRegionName expect string
     *
     * @return ColibriERPStructGeoRegionInfo
     */
    public function __construct($_idGeoRegion = null,$_idGeoParent = null,$_geoAbbr = null,$_chrRegionName = null)
    {
        parent::__construct(array('idGeoRegion'=>$_idGeoRegion,'idGeoParent'=>$_idGeoParent,'GeoAbbr'=>$_geoAbbr,'chrRegionName'=>$_chrRegionName), false);
    }
    /**
     * Get idGeoRegion value
     *
     * @return string|null
     */
    public function getIdGeoRegion()
    {
        return $this->idGeoRegion;
    }
    /**
     * Set idGeoRegion value
     *
     * @param string $_idGeoRegion the idGeoRegion
     *
     * @return string
     */
    public function setIdGeoRegion($_idGeoRegion)
    {
        return ($this->idGeoRegion = $_idGeoRegion);
    }
    /**
     * Get idGeoParent value
     *
     * @return string|null
     */
    public function getIdGeoParent()
    {
        return $this->idGeoParent;
    }
    /**
     * Set idGeoParent value
     *
     * @param string $_idGeoParent the idGeoParent
     *
     * @return string
     */
    public function setIdGeoParent($_idGeoParent)
    {
        return ($this->idGeoParent = $_idGeoParent);
    }
    /**
     * Get GeoAbbr value
     *
     * @return string|null
     */
    public function getGeoAbbr()
    {
        return $this->GeoAbbr;
    }
    /**
     * Set GeoAbbr value
     *
     * @param string $_geoAbbr the GeoAbbr
     *
     * @return string
     */
    public function setGeoAbbr($_geoAbbr)
    {
        return ($this->GeoAbbr = $_geoAbbr);
    }
    /**
     * Get chrRegionName value
     *
     * @return string|null
     */
    public function getChrRegionName()
    {
        return $this->chrRegionName;
    }
    /**
     * Set chrRegionName value
     *
     * @param string $_chrRegionName the chrRegionName
     *
     * @return string
     */
    public function setChrRegionName($_chrRegionName)
    {
        return ($this->chrRegionName = $_chrRegionName);
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
     * @return ColibriERPStructGeoRegionInfo
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
