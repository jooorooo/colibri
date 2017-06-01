<?php
/**
 * File for class ColibriERPStructBranchInfo
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
 * This class stands for ColibriERPStructBranchInfo
 *  originally named branchInfo
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
class ColibriERPStructBranchInfo extends ColibriERPWsdlClass
{
    /**
     * The idBranch
     *
     * @var string
     */
    public $idBranch;
    /**
     * The BNum
     *
     * @var string
     */
    public $BNum;
    /**
     * The BName
     *
     * @var string
     */
    public $BName;
    /**
     * The BAddr
     *
     * @var string
     */
    public $BAddr;
    /**
     * The BCity
     *
     * @var string
     */
    public $BCity;
    /**
     * The BZip
     *
     * @var string
     */
    public $BZip;
    /**
     * The BCPerson
     *
     * @var string
     */
    public $BCPerson;
    /**
     * The BDanN
     *
     * @var string
     */
    public $BDanN;
    /**
     * The BDanR
     *
     * @var string
     */
    public $BDanR;
    /**
     * The BBulStat
     *
     * @var string
     */
    public $BBulStat;
    /**
     * The idGeoRegion
     *
     * @var string
     */
    public $idGeoRegion;
    /**
     * The BGeoAbbr
     *
     * @var string
     */
    public $BGeoAbbr;
    /**
     * The BGeoName
     *
     * @var string
     */
    public $BGeoName;
    /**
     * Constructor method for branchInfo
     *
     * @see parent::__construct()
     *
     * @param string $_idBranch    expect string
     * @param string $_bNum        expect string
     * @param string $_bName       expect string
     * @param string $_bAddr       expect string
     * @param string $_bCity       expect string
     * @param string $_bZip        expect string
     * @param string $_bCPerson    expect string
     * @param string $_bDanN       expect string
     * @param string $_bDanR       expect string
     * @param string $_bBulStat    expect string
     * @param string $_idGeoRegion expect string
     * @param string $_bGeoAbbr    expect string
     * @param string $_bGeoName    expect string
     *
     * @return ColibriERPStructBranchInfo
     */
    public function __construct($_idBranch = null,$_bNum = null,$_bName = null,$_bAddr = null,$_bCity = null,$_bZip = null,$_bCPerson = null,$_bDanN = null,$_bDanR = null,$_bBulStat = null,$_idGeoRegion = null,$_bGeoAbbr = null,$_bGeoName = null)
    {
        parent::__construct(array('idBranch'=>$_idBranch,'BNum'=>$_bNum,'BName'=>$_bName,'BAddr'=>$_bAddr,'BCity'=>$_bCity,'BZip'=>$_bZip,'BCPerson'=>$_bCPerson,'BDanN'=>$_bDanN,'BDanR'=>$_bDanR,'BBulStat'=>$_bBulStat,'idGeoRegion'=>$_idGeoRegion,'BGeoAbbr'=>$_bGeoAbbr,'BGeoName'=>$_bGeoName), false);
    }
    /**
     * Get idBranch value
     *
     * @return string|null
     */
    public function getIdBranch()
    {
        return $this->idBranch;
    }
    /**
     * Set idBranch value
     *
     * @param string $_idBranch the idBranch
     *
     * @return string
     */
    public function setIdBranch($_idBranch)
    {
        return ($this->idBranch = $_idBranch);
    }
    /**
     * Get BNum value
     *
     * @return string|null
     */
    public function getBNum()
    {
        return $this->BNum;
    }
    /**
     * Set BNum value
     *
     * @param string $_bNum the BNum
     *
     * @return string
     */
    public function setBNum($_bNum)
    {
        return ($this->BNum = $_bNum);
    }
    /**
     * Get BName value
     *
     * @return string|null
     */
    public function getBName()
    {
        return $this->BName;
    }
    /**
     * Set BName value
     *
     * @param string $_bName the BName
     *
     * @return string
     */
    public function setBName($_bName)
    {
        return ($this->BName = $_bName);
    }
    /**
     * Get BAddr value
     *
     * @return string|null
     */
    public function getBAddr()
    {
        return $this->BAddr;
    }
    /**
     * Set BAddr value
     *
     * @param string $_bAddr the BAddr
     *
     * @return string
     */
    public function setBAddr($_bAddr)
    {
        return ($this->BAddr = $_bAddr);
    }
    /**
     * Get BCity value
     *
     * @return string|null
     */
    public function getBCity()
    {
        return $this->BCity;
    }
    /**
     * Set BCity value
     *
     * @param string $_bCity the BCity
     *
     * @return string
     */
    public function setBCity($_bCity)
    {
        return ($this->BCity = $_bCity);
    }
    /**
     * Get BZip value
     *
     * @return string|null
     */
    public function getBZip()
    {
        return $this->BZip;
    }
    /**
     * Set BZip value
     *
     * @param string $_bZip the BZip
     *
     * @return string
     */
    public function setBZip($_bZip)
    {
        return ($this->BZip = $_bZip);
    }
    /**
     * Get BCPerson value
     *
     * @return string|null
     */
    public function getBCPerson()
    {
        return $this->BCPerson;
    }
    /**
     * Set BCPerson value
     *
     * @param string $_bCPerson the BCPerson
     *
     * @return string
     */
    public function setBCPerson($_bCPerson)
    {
        return ($this->BCPerson = $_bCPerson);
    }
    /**
     * Get BDanN value
     *
     * @return string|null
     */
    public function getBDanN()
    {
        return $this->BDanN;
    }
    /**
     * Set BDanN value
     *
     * @param string $_bDanN the BDanN
     *
     * @return string
     */
    public function setBDanN($_bDanN)
    {
        return ($this->BDanN = $_bDanN);
    }
    /**
     * Get BDanR value
     *
     * @return string|null
     */
    public function getBDanR()
    {
        return $this->BDanR;
    }
    /**
     * Set BDanR value
     *
     * @param string $_bDanR the BDanR
     *
     * @return string
     */
    public function setBDanR($_bDanR)
    {
        return ($this->BDanR = $_bDanR);
    }
    /**
     * Get BBulStat value
     *
     * @return string|null
     */
    public function getBBulStat()
    {
        return $this->BBulStat;
    }
    /**
     * Set BBulStat value
     *
     * @param string $_bBulStat the BBulStat
     *
     * @return string
     */
    public function setBBulStat($_bBulStat)
    {
        return ($this->BBulStat = $_bBulStat);
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
     * Get BGeoAbbr value
     *
     * @return string|null
     */
    public function getBGeoAbbr()
    {
        return $this->BGeoAbbr;
    }
    /**
     * Set BGeoAbbr value
     *
     * @param string $_bGeoAbbr the BGeoAbbr
     *
     * @return string
     */
    public function setBGeoAbbr($_bGeoAbbr)
    {
        return ($this->BGeoAbbr = $_bGeoAbbr);
    }
    /**
     * Get BGeoName value
     *
     * @return string|null
     */
    public function getBGeoName()
    {
        return $this->BGeoName;
    }
    /**
     * Set BGeoName value
     *
     * @param string $_bGeoName the BGeoName
     *
     * @return string
     */
    public function setBGeoName($_bGeoName)
    {
        return ($this->BGeoName = $_bGeoName);
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
     * @return ColibriERPStructBranchInfo
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
