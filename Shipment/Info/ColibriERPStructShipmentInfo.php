<?php
/**
 * File for class ColibriERPStructShipmentInfo
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
 * This class stands for ColibriERPStructShipmentInfo
 *  originally named ShipmentInfo
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
class ColibriERPStructShipmentInfo extends ColibriERPWsdlClass
{
    /**
     * The PNum
     *
     * @var string
     */
    public $PNum;
    /**
     * The PName
     *
     * @var string
     */
    public $PName;
    /**
     * The ShDate
     *
     * @var string
     */
    public $ShDate;
    /**
     * The ShPlace
     *
     * @var string
     */
    public $ShPlace;
    /**
     * The ShTrans
     *
     * @var string
     */
    public $ShTrans;
    /**
     * The ShMeans
     *
     * @var string
     */
    public $ShMeans;
    /**
     * The ShDest
     *
     * @var string
     */
    public $ShDest;
    /**
     * The CondDel
     *
     * @var string
     */
    public $CondDel;
    /**
     * The DocNum
     *
     * @var string
     */
    public $DocNum;
    /**
     * The DocInvNum
     *
     * @var string
     */
    public $DocInvNum;
    /**
     * Constructor method for ShipmentInfo
     *
     * @see parent::__construct()
     *
     * @param string $_pNum      expect string
     * @param string $_pName     expect string
     * @param string $_shDate    expect string
     * @param string $_shPlace   expect string
     * @param string $_shTrans   expect string
     * @param string $_shMeans   expect string
     * @param string $_shDest    expect string
     * @param string $_condDel   expect string
     * @param string $_docNum    expect string
     * @param string $_docInvNum expect string
     *
     * @return ColibriERPStructShipmentInfo
     */
    public function __construct($_pNum = null,$_pName = null,$_shDate = null,$_shPlace = null,$_shTrans = null,$_shMeans = null,$_shDest = null,$_condDel = null,$_docNum = null,$_docInvNum = null)
    {
        parent::__construct(array('PNum'=>$_pNum,'PName'=>$_pName,'ShDate'=>$_shDate,'ShPlace'=>$_shPlace,'ShTrans'=>$_shTrans,'ShMeans'=>$_shMeans,'ShDest'=>$_shDest,'CondDel'=>$_condDel,'DocNum'=>$_docNum,'DocInvNum'=>$_docInvNum), false);
    }
    /**
     * Get PNum value
     *
     * @return string|null
     */
    public function getPNum()
    {
        return $this->PNum;
    }
    /**
     * Set PNum value
     *
     * @param string $_pNum the PNum
     *
     * @return string
     */
    public function setPNum($_pNum)
    {
        return ($this->PNum = $_pNum);
    }
    /**
     * Get PName value
     *
     * @return string|null
     */
    public function getPName()
    {
        return $this->PName;
    }
    /**
     * Set PName value
     *
     * @param string $_pName the PName
     *
     * @return string
     */
    public function setPName($_pName)
    {
        return ($this->PName = $_pName);
    }
    /**
     * Get ShDate value
     *
     * @return string|null
     */
    public function getShDate()
    {
        return $this->ShDate;
    }
    /**
     * Set ShDate value
     *
     * @param string $_shDate the ShDate
     *
     * @return string
     */
    public function setShDate($_shDate)
    {
        return ($this->ShDate = $_shDate);
    }
    /**
     * Get ShPlace value
     *
     * @return string|null
     */
    public function getShPlace()
    {
        return $this->ShPlace;
    }
    /**
     * Set ShPlace value
     *
     * @param string $_shPlace the ShPlace
     *
     * @return string
     */
    public function setShPlace($_shPlace)
    {
        return ($this->ShPlace = $_shPlace);
    }
    /**
     * Get ShTrans value
     *
     * @return string|null
     */
    public function getShTrans()
    {
        return $this->ShTrans;
    }
    /**
     * Set ShTrans value
     *
     * @param string $_shTrans the ShTrans
     *
     * @return string
     */
    public function setShTrans($_shTrans)
    {
        return ($this->ShTrans = $_shTrans);
    }
    /**
     * Get ShMeans value
     *
     * @return string|null
     */
    public function getShMeans()
    {
        return $this->ShMeans;
    }
    /**
     * Set ShMeans value
     *
     * @param string $_shMeans the ShMeans
     *
     * @return string
     */
    public function setShMeans($_shMeans)
    {
        return ($this->ShMeans = $_shMeans);
    }
    /**
     * Get ShDest value
     *
     * @return string|null
     */
    public function getShDest()
    {
        return $this->ShDest;
    }
    /**
     * Set ShDest value
     *
     * @param string $_shDest the ShDest
     *
     * @return string
     */
    public function setShDest($_shDest)
    {
        return ($this->ShDest = $_shDest);
    }
    /**
     * Get CondDel value
     *
     * @return string|null
     */
    public function getCondDel()
    {
        return $this->CondDel;
    }
    /**
     * Set CondDel value
     *
     * @param string $_condDel the CondDel
     *
     * @return string
     */
    public function setCondDel($_condDel)
    {
        return ($this->CondDel = $_condDel);
    }
    /**
     * Get DocNum value
     *
     * @return string|null
     */
    public function getDocNum()
    {
        return $this->DocNum;
    }
    /**
     * Set DocNum value
     *
     * @param string $_docNum the DocNum
     *
     * @return string
     */
    public function setDocNum($_docNum)
    {
        return ($this->DocNum = $_docNum);
    }
    /**
     * Get DocInvNum value
     *
     * @return string|null
     */
    public function getDocInvNum()
    {
        return $this->DocInvNum;
    }
    /**
     * Set DocInvNum value
     *
     * @param string $_docInvNum the DocInvNum
     *
     * @return string
     */
    public function setDocInvNum($_docInvNum)
    {
        return ($this->DocInvNum = $_docInvNum);
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
     * @return ColibriERPStructShipmentInfo
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
