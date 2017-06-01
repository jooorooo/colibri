<?php
/**
 * File for class ColibriERPStructProdCompletedOperInfo
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
 * This class stands for ColibriERPStructProdCompletedOperInfo
 *  originally named prodCompletedOperInfo
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
class ColibriERPStructProdCompletedOperInfo extends ColibriERPWsdlClass
{
    /**
     * The idOperPersCard
     *
     * @var integer
     */
    public $idOperPersCard;
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
     * The RefNum
     *
     * @var string
     */
    public $RefNum;
    /**
     * The QuantityOk
     *
     * @var double
     */
    public $QuantityOk;
    /**
     * The QuantityWaste
     *
     * @var double
     */
    public $QuantityWaste;
    /**
     * The QuantityWasteSubj
     *
     * @var double
     */
    public $QuantityWasteSubj;
    /**
     * The CompleteTime
     *
     * @var string
     */
    public $CompleteTime;
    /**
     * Constructor method for prodCompletedOperInfo
     *
     * @see parent::__construct()
     *
     * @param integer $_idOperPersCard    expect integer
     * @param string  $_cNum              expect string
     * @param integer $_idOper            expect integer
     * @param integer $_idSector          expect integer
     * @param string  $_refNum            expect string
     * @param double  $_quantityOk        expect double
     * @param double  $_quantityWaste     expect double
     * @param double  $_quantityWasteSubj expect double
     * @param string  $_completeTime      expect string
     *
     * @return ColibriERPStructProdCompletedOperInfo
     */
    public function __construct($_idOperPersCard = null,$_cNum = null,$_idOper = null,$_idSector = null,$_refNum = null,$_quantityOk = null,$_quantityWaste = null,$_quantityWasteSubj = null,$_completeTime = null)
    {
        parent::__construct(array('idOperPersCard'=>$_idOperPersCard,'CNum'=>$_cNum,'idOper'=>$_idOper,'idSector'=>$_idSector,'RefNum'=>$_refNum,'QuantityOk'=>$_quantityOk,'QuantityWaste'=>$_quantityWaste,'QuantityWasteSubj'=>$_quantityWasteSubj,'CompleteTime'=>$_completeTime), false);
    }
    /**
     * Get idOperPersCard value
     *
     * @return integer|null
     */
    public function getIdOperPersCard()
    {
        return $this->idOperPersCard;
    }
    /**
     * Set idOperPersCard value
     *
     * @param integer $_idOperPersCard the idOperPersCard
     *
     * @return integer
     */
    public function setIdOperPersCard($_idOperPersCard)
    {
        return ($this->idOperPersCard = $_idOperPersCard);
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
     * Get QuantityOk value
     *
     * @return double|null
     */
    public function getQuantityOk()
    {
        return $this->QuantityOk;
    }
    /**
     * Set QuantityOk value
     *
     * @param double $_quantityOk the QuantityOk
     *
     * @return double
     */
    public function setQuantityOk($_quantityOk)
    {
        return ($this->QuantityOk = $_quantityOk);
    }
    /**
     * Get QuantityWaste value
     *
     * @return double|null
     */
    public function getQuantityWaste()
    {
        return $this->QuantityWaste;
    }
    /**
     * Set QuantityWaste value
     *
     * @param double $_quantityWaste the QuantityWaste
     *
     * @return double
     */
    public function setQuantityWaste($_quantityWaste)
    {
        return ($this->QuantityWaste = $_quantityWaste);
    }
    /**
     * Get QuantityWasteSubj value
     *
     * @return double|null
     */
    public function getQuantityWasteSubj()
    {
        return $this->QuantityWasteSubj;
    }
    /**
     * Set QuantityWasteSubj value
     *
     * @param double $_quantityWasteSubj the QuantityWasteSubj
     *
     * @return double
     */
    public function setQuantityWasteSubj($_quantityWasteSubj)
    {
        return ($this->QuantityWasteSubj = $_quantityWasteSubj);
    }
    /**
     * Get CompleteTime value
     *
     * @return string|null
     */
    public function getCompleteTime()
    {
        return $this->CompleteTime;
    }
    /**
     * Set CompleteTime value
     *
     * @param string $_completeTime the CompleteTime
     *
     * @return string
     */
    public function setCompleteTime($_completeTime)
    {
        return ($this->CompleteTime = $_completeTime);
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
     * @return ColibriERPStructProdCompletedOperInfo
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
