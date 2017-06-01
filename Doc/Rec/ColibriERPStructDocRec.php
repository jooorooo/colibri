<?php
/**
 * File for class ColibriERPStructDocRec
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
 * This class stands for ColibriERPStructDocRec
 *  originally named DocRec
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
class ColibriERPStructDocRec extends ColibriERPWsdlClass
{
    /**
     * The idDoc
     *
     * @var string
     */
    public $idDoc;
    /**
     * The RecSer
     *
     * @var string
     */
    public $RecSer;
    /**
     * Constructor method for DocRec
     *
     * @see parent::__construct()
     *
     * @param string $_idDoc  expect string
     * @param string $_recSer expect string
     *
     * @return ColibriERPStructDocRec
     */
    public function __construct($_idDoc = null,$_recSer = null)
    {
        parent::__construct(array('idDoc'=>$_idDoc,'RecSer'=>$_recSer), false);
    }
    /**
     * Get idDoc value
     *
     * @return string|null
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }
    /**
     * Set idDoc value
     *
     * @param string $_idDoc the idDoc
     *
     * @return string
     */
    public function setIdDoc($_idDoc)
    {
        return ($this->idDoc = $_idDoc);
    }
    /**
     * Get RecSer value
     *
     * @return string|null
     */
    public function getRecSer()
    {
        return $this->RecSer;
    }
    /**
     * Set RecSer value
     *
     * @param string $_recSer the RecSer
     *
     * @return string
     */
    public function setRecSer($_recSer)
    {
        return ($this->RecSer = $_recSer);
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
     * @return ColibriERPStructDocRec
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
