<?php
/**
 * File for class ColibriERPStructTagInfo
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
 * This class stands for ColibriERPStructTagInfo
 *  originally named tagInfo
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
class ColibriERPStructTagInfo extends ColibriERPWsdlClass
{
    /**
     * The domainCode
     *
     * @var string
     */
    public $domainCode;
    /**
     * The domain
     *
     * @var string
     */
    public $domain;
    /**
     * The tagCode
     *
     * @var string
     */
    public $tagCode;
    /**
     * The tag
     *
     * @var string
     */
    public $tag;
    /**
     * Constructor method for tagInfo
     *
     * @see parent::__construct()
     *
     * @param string $_domainCode expect string
     * @param string $_domain     expect string
     * @param string $_tagCode    expect string
     * @param string $_tag        expect string
     *
     * @return ColibriERPStructTagInfo
     */
    public function __construct($_domainCode = null,$_domain = null,$_tagCode = null,$_tag = null)
    {
        parent::__construct(array('domainCode'=>$_domainCode,'domain'=>$_domain,'tagCode'=>$_tagCode,'tag'=>$_tag), false);
    }
    /**
     * Get domainCode value
     *
     * @return string|null
     */
    public function getDomainCode()
    {
        return $this->domainCode;
    }
    /**
     * Set domainCode value
     *
     * @param string $_domainCode the domainCode
     *
     * @return string
     */
    public function setDomainCode($_domainCode)
    {
        return ($this->domainCode = $_domainCode);
    }
    /**
     * Get domain value
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     *
     * @param string $_domain the domain
     *
     * @return string
     */
    public function setDomain($_domain)
    {
        return ($this->domain = $_domain);
    }
    /**
     * Get tagCode value
     *
     * @return string|null
     */
    public function getTagCode()
    {
        return $this->tagCode;
    }
    /**
     * Set tagCode value
     *
     * @param string $_tagCode the tagCode
     *
     * @return string
     */
    public function setTagCode($_tagCode)
    {
        return ($this->tagCode = $_tagCode);
    }
    /**
     * Get tag value
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * Set tag value
     *
     * @param string $_tag the tag
     *
     * @return string
     */
    public function setTag($_tag)
    {
        return ($this->tag = $_tag);
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
     * @return ColibriERPStructTagInfo
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
