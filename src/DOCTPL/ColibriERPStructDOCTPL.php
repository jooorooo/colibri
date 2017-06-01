<?php
/**
 * File for class ColibriERPStructDOCTPL
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
 * This class stands for ColibriERPStructDOCTPL
 *  originally named DOCTPL
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
class ColibriERPStructDOCTPL extends ColibriERPWsdlClass
{
    /**
     * The TemplateName
     *
     * @var string
     */
    public $TemplateName;
    /**
     * The DocumentText
     *
     * @var string
     */
    public $DocumentText;
    /**
     * The DocumentData
     *
     * @var string
     */
    public $DocumentData;
    /**
     * Constructor method for DOCTPL
     *
     * @see parent::__construct()
     *
     * @param string $_templateName expect string
     * @param string $_documentText expect string
     * @param string $_documentData expect string
     *
     * @return ColibriERPStructDOCTPL
     */
    public function __construct($_templateName = null,$_documentText = null,$_documentData = null)
    {
        parent::__construct(array('TemplateName'=>$_templateName,'DocumentText'=>$_documentText,'DocumentData'=>$_documentData), false);
    }
    /**
     * Get TemplateName value
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }
    /**
     * Set TemplateName value
     *
     * @param string $_templateName the TemplateName
     *
     * @return string
     */
    public function setTemplateName($_templateName)
    {
        return ($this->TemplateName = $_templateName);
    }
    /**
     * Get DocumentText value
     *
     * @return string|null
     */
    public function getDocumentText()
    {
        return $this->DocumentText;
    }
    /**
     * Set DocumentText value
     *
     * @param string $_documentText the DocumentText
     *
     * @return string
     */
    public function setDocumentText($_documentText)
    {
        return ($this->DocumentText = $_documentText);
    }
    /**
     * Get DocumentData value
     *
     * @return string|null
     */
    public function getDocumentData()
    {
        return $this->DocumentData;
    }
    /**
     * Set DocumentData value
     *
     * @param string $_documentData the DocumentData
     *
     * @return string
     */
    public function setDocumentData($_documentData)
    {
        return ($this->DocumentData = $_documentData);
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
     * @return ColibriERPStructDOCTPL
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
