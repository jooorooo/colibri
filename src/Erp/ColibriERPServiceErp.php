<?php
/**
 * File for class ColibriERPServiceErp
 *
 * PHP Version 5
 *
 * @package    ColibriERP
 * @license    https://opensource.org/licenses/MIT MIT
 * @category   ColibriERP
 * @link       http://simexis.com
 * @subpackage Services
 * @author     Georgi Nachev <jooorooo@gmail.com>
 * @version    2015.04.29.01
 * @date       2017-05-19
 */

/**
 * This class stands for ColibriERPServiceErp
 *  originally named Erp
 *
 * PHP Version 5
 *
 * @package    ColibriERP
 * @license    https://opensource.org/licenses/MIT MIT
 * @category   ColibriERP
 * @link       http://simexis.com
 * @subpackage Services
 * @author     Georgi Nachev <jooorooo@gmail.com>
 * @version    2015.04.29.01
 * @date       2017-05-19
 */
class ColibriERPServiceErp extends ColibriERPWsdlClass
{
    /**
     * Method to call the operation originally named erpSOAPServer..Login
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_username expect string
     * @param string $_password expect string
     * @param string $_cnum     expect string
     * @param string $_db       expect string
     *
     * @return boolean
     */
    public function erpSOAPServer__Login($_username, $_password, $_cnum, $_db)
    {
        try {
            return (bool)self::getSoapClient()->__soapCall('erpSOAPServer..Login', array($_username, $_password, $_cnum, $_db));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPServer..Logout
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return boolean
     */
    public function erpSOAPServer__Logout()
    {
        try {
            return (bool)self::getSoapClient()->__soapCall('erpSOAPServer..Logout', array());
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPServer..CheckEncoding
     * Documentation : Check encoding between peers
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return string
     */
    public function erpSOAPServer__CheckEncoding($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPServer..CheckEncoding', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPServer..lastRowCount
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return float
     */
    public function erpSOAPServer__lastRowCount()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPServer..lastRowCount', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBase..Info
     * Documentation : Return system informattion
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return ColibriERPStructErpInfo
     */
    public function erpSOAPBase__Info()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBase..Info', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPStore..GetMatsAvP
     * Documentation : Returns list of mats filtered (from FromMNum to ToMNum) and (like MName) and belonging to MGroups with price for priceLevel or PNum partner in curCode currency and with quantities in Stores
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string                      $_fromMNum     expect string
     * @param string                      $_toMNum       expect string
     * @param string                      $_mName        expect string
     * @param string                      $_pNum         expect string
     * @param array                       $_stores       expect array
     * @param array                       $_mGroups      expect array
     * @param string                      $_priceLevel   expect string
     * @param string                      $_curCode      expect string
     * @param array                       $_attribCodes  expect array
     * @param array                       $_attribValues expect array
     * @param integer                     $_getTags      expect integer
     * @param integer                     $_onStockOnly  expect integer
     * @param integer                     $_active       expect integer
     * @param ColibriERPStructLimitResult $_limit        expect ColibriERPStructLimitResult
     *
     * @return ColibriERPStructMatInfo[]
     */
    public function erpSOAPStore__GetMatsAvP($_fromMNum, $_toMNum, $_mName, $_pNum, $_stores, $_mGroups, $_priceLevel, $_curCode, $_attribCodes, $_attribValues, $_getTags, $_onStockOnly, $_active, ColibriERPStructLimitResult $_limit)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPStore..GetMatsAvP', array($_fromMNum, $_toMNum, $_mName, $_pNum, $_stores, $_mGroups, $_priceLevel, $_curCode, $_attribCodes, $_attribValues, $_getTags, $_onStockOnly, $_active, $_limit));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPStore..GetStores
     * Documentation : Returns list of stores with SNum between FromSNum and ToSNum
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromSNum expect string
     * @param string $_toSNum   expect string
     *
     * @return ColibriERPStructStoreInfo[]
     */
    public function erpSOAPStore__GetStores($_fromSNum, $_toSNum)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPStore..GetStores', array($_fromSNum, $_toSNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPStore..GetAvQ
     * Documentation : Returns Quantity available of stock MNum in store SNumber
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_sNumber expect string
     * @param string $_mNum    expect string
     *
     * @return ColibriERPStructStoreMatInfo
     */
    public function erpSOAPStore__GetAvQ($_sNumber, $_mNum)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPStore..GetAvQ', array($_sNumber, $_mNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPStore..GetAvQA
     * Documentation : Returns Quantity available of list of stocks MNum in store SNumber
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_sNumber expect string
     * @param array  $_mNumA   expect array
     *
     * @return ColibriERPStructStoreMatInfo[]
     */
    public function erpSOAPStore__GetAvQA($_sNumber, array $_mNumA)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPStore..GetAvQA', array($_sNumber, $_mNumA));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPStore..GetReservations
     * Documentation : Returns reservations of stocks MNumA in store SNumber
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_sNumber expect string
     * @param array  $_mNumA   expect array
     *
     * @return ColibriERPStructReservInfo[]
     */
    public function erpSOAPStore__GetReservations($_sNumber, $_mNumA)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPStore..GetReservations', array($_sNumber, $_mNumA));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GetMAttributeCategory
     * Documentation : Returns list of categories (description, id) and attributes for each category - name, description and type
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_stringArray expect array
     *
     * @return ColibriERPStructMAttributeCategoryInfo[]
     */
    public function erpSOAPSell__GetMAttributeCategory($_stringArray)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GetMAttributeCategory', array($_stringArray));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GetClients
     * Documentation : Returns list of clients with numbers between FromPNum and ToPNum
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromPNum expect string
     * @param string $_toPNum   expect string
     *
     * @return ColibriERPStructPartnerInfo[]
     */
    public function erpSOAPSell__GetClients($_fromPNum = null, $_toPNum = null)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GetClients', array($_fromPNum, $_toPNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GetClientsCount
     * Documentation : Returns the count of all clients
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return float
     */
    public function erpSOAPSell__GetClientsCount()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GetClientsCount', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GetMGroups
     * Documentation : Returns list of mGroups
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return ColibriERPStructMGroupInfo[]
     */
    public function erpSOAPSell__GetMGroups($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GetMGroups', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GetMats
     * Documentation : Returns list of materials for GNum and between FromMNum and ToMNum
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string                      $_fromMNum           expect string
     * @param string                      $_toMNum             expect string
     * @param string                      $_gNum               expect string
     * @param array                       $_mAttributeCategory expect array
     * @param string                      $_priceLevel         expect string
     * @param string                      $_curCode            expect string
     * @param integer                     $_active             expect integer
     * @param ColibriERPStructLimitResult $_limit              expect ColibriERPStructLimitResult
     *
     * @return ColibriERPStructMatInfo[]
     */
    public function erpSOAPSell__GetMats($_fromMNum = null, $_toMNum = null, $_gNum = null, $_mAttributeCategory = null, $_priceLevel = null, $_curCode = null, $_active = null, ColibriERPStructLimitResult $_limit = null)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GetMats', array($_fromMNum, $_toMNum, $_gNum, $_mAttributeCategory, $_priceLevel, $_curCode, $_active, $_limit));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GetDocs
     * Documentation : Returns list of Docs between (FromD and ToD) or (FromNum and ToNum), or for the specified PNum. The dates are in SQL format.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromD   expect string
     * @param string $_toD     expect string
     * @param string $_fromNum expect string
     * @param string $_toNum   expect string
     * @param string $_pNum    expect string
     *
     * @return ColibriERPStructDocInfo[]
     */
    public function erpSOAPSell__GetDocs($_fromD = null, $_toD = null, $_fromNum = null, $_toNum = null, $_pNum = null)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GetDocs', array($_fromD, $_toD, $_fromNum, $_toNum, $_pNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GeoRegion
     * Documentation : Returns list of GeoRegions.
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return ColibriERPStructGeoRegionInfo[]
     */
    public function erpSOAPSell__GeoRegion()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GeoRegion', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPSell..GetBundles
     * Documentation : Returns list of bundles for GNum and between FromBundleNum and ToBundleNum or FromMNum and ToMNum
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromBundleNum expect string
     * @param string $_toBundleNum   expect string
     * @param string $_fromMNum      expect string
     * @param string $_toMNum        expect string
     * @param string $_gNum          expect string
     *
     * @return ColibriERPStructBundleInfo[]
     */
    public function erpSOAPSell__GetBundles($_fromBundleNum = null, $_toBundleNum = null, $_fromMNum = null, $_toMNum = null, $_gNum = null)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPSell..GetBundles', array($_fromBundleNum, $_toBundleNum, $_fromMNum, $_toMNum, $_gNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..oprGetProfileList
     * Documentation : Returns list of Profiles.
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return ColibriERPStructAccOPRPro[]
     */
    public function erpSOAPAcc__oprGetProfileList()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..oprGetProfileList', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..oprGetProfileSet
     * Documentation : Returns list of Profiles.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_stringArray expect array
     *
     * @return ColibriERPStructAccOPProDef[]
     */
    public function erpSOAPAcc__oprGetProfileSet($_stringArray)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..oprGetProfileSet', array($_stringArray));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..oppGetProfileList
     * Documentation : Returns list of Profiles.
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return ColibriERPStructAccOPPro[]
     */
    public function erpSOAPAcc__oppGetProfileList()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..oppGetProfileList', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..oppGetProfileSet
     * Documentation : Returns list of Profiles.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_stringArray expect array
     *
     * @return ColibriERPStructAccOPProDef[]
     */
    public function erpSOAPAcc__oppGetProfileSet($_stringArray)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..oppGetProfileSet', array($_stringArray));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..oprGetProfileData
     * Documentation : Returns list of Profiles.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array  $_iD expect array
     * @param string $_yM expect string
     *
     * @return ColibriERPStructAccOPRdatDef[]
     */
    public function erpSOAPAcc__oprGetProfileData($_iD, $_yM)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..oprGetProfileData', array($_iD, $_yM));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..oppGetProfileData
     * Documentation : Returns list of Profiles.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array  $_iD expect array
     * @param string $_yM expect string
     *
     * @return ColibriERPStructAccOPPdatDef[]
     */
    public function erpSOAPAcc__oppGetProfileData($_iD, $_yM)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..oppGetProfileData', array($_iD, $_yM));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..balGetProfileList
     * Documentation : Returns list of Profiles.
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return ColibriERPStructAccBALPro[]
     */
    public function erpSOAPAcc__balGetProfileList()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..balGetProfileList', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..balGetProfileData
     * Documentation : Returns list of Profiles.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array  $_iD expect array
     * @param string $_yM expect string
     *
     * @return ColibriERPStructAccBALdatDef[]
     */
    public function erpSOAPAcc__balGetProfileData($_iD, $_yM)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..balGetProfileData', array($_iD, $_yM));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..balGetProfileSet
     * Documentation : Returns list of Profiles.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_stringArray expect array
     *
     * @return ColibriERPStructAccBALProDef[]
     */
    public function erpSOAPAcc__balGetProfileSet($_stringArray)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..balGetProfileSet', array($_stringArray));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..ovGetData
     * Documentation : Returns list of accOV.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return ColibriERPStructAccOV[]
     */
    public function erpSOAPAcc__ovGetData($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..ovGetData', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..vatGetRegisterBuy
     * Documentation : Returns list of VATRegisterBuy.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromDate expect string
     * @param string $_toDate   expect string
     *
     * @return ColibriERPStructVATRegisterBuy[]
     */
    public function erpSOAPAcc__vatGetRegisterBuy($_fromDate, $_toDate)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..vatGetRegisterBuy', array($_fromDate, $_toDate));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..vatGetRegisterSell
     * Documentation : Returns list of VATRegisterSell.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromDate expect string
     * @param string $_toDate   expect string
     *
     * @return ColibriERPStructVATRegisterSell[]
     */
    public function erpSOAPAcc__vatGetRegisterSell($_fromDate, $_toDate)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..vatGetRegisterSell', array($_fromDate, $_toDate));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..vatGetDeclaration
     * Documentation : Returns list of VATDeclarationDefArray.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromDate expect string
     * @param string $_toDate   expect string
     *
     * @return ColibriERPStructVATDeclarationDef[]
     */
    public function erpSOAPAcc__vatGetDeclaration($_fromDate = null, $_toDate = null)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..vatGetDeclaration', array($_fromDate, $_toDate));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..getAccList
     * Documentation : Returns list of acc records.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromaNum expect string
     * @param string $_toaNum   expect string
     *
     * @return ColibriERPStructAcc[]
     */
    public function erpSOAPAcc__getAccList($_fromaNum = null, $_toaNum = null)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..getAccList', array($_fromaNum, $_toaNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..getAcc
     * Documentation : Returns acc record.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return ColibriERPStructAcc
     */
    public function erpSOAPAcc__getAcc($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..getAcc', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..getAccDocList
     * Documentation : Returns list of accounting documents records.<br /> FromDate, ToDate defines time period.<br /> FromDocNum, ToDocNum defines document number range.<br /> DocCode - specific document type (optional).
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromDate   expect string
     * @param string $_toDate     expect string
     * @param string $_fromDocNum expect string
     * @param string $_toDocNum   expect string
     * @param string $_docCode    expect string
     *
     * @return ColibriERPStructAccdoc[]
     */
    public function erpSOAPAcc__getAccDocList($_fromDate, $_toDate, $_fromDocNum, $_toDocNum, $_docCode)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..getAccDocList', array($_fromDate, $_toDate, $_fromDocNum, $_toDocNum, $_docCode));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPAcc..getAccDoc
     * Documentation : Returns accdoc record.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return ColibriERPStructAccdoc
     */
    public function erpSOAPAcc__getAccDoc($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPAcc..getAccDoc', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPXfer..getPDocList
     * Documentation : Returns list of pDocTran records.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_fromD   expect string
     * @param string $_toD     expect string
     * @param string $_fromNum expect string
     * @param string $_toNum   expect string
     * @param string $_pNum    expect string
     * @param string $_docType expect string
     *
     * @return ColibriERPStructPDocTranRec[]
     */
    public function erpSOAPXfer__getPDocList($_fromD, $_toD, $_fromNum, $_toNum, $_pNum, $_docType)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPXfer..getPDocList', array($_fromD, $_toD, $_fromNum, $_toNum, $_pNum, $_docType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPXfer..getPDoc
     * Documentation : Returns list of pDocTran.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_stringArray expect array
     *
     * @return ColibriERPStructPDocTran[]
     */
    public function erpSOAPXfer__getPDoc($_stringArray)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPXfer..getPDoc', array($_stringArray));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPXfer..getMatAttribs
     * Documentation : Returns list of categories and attributes.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_categoryTypes expect array
     * @param array $_categoryCodes expect array
     *
     * @return array
     */
    public function erpSOAPXfer__getMatAttribs($_categoryTypes, $_categoryCodes)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPXfer..getMatAttribs', array($_categoryTypes, $_categoryCodes));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPMatImpex..getMat
     * Documentation : Returns Mat.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return ColibriERPStructDocRec
     */
    public function erpSOAPMatImpex__getMat($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPMatImpex..getMat', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPMatImpex..getMatList
     * Documentation : Returns list of Mat records.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_requestSerialized expect string
     * @param string $_paramsSerialized  expect string
     *
     * @return ColibriERPStructDocRec[]
     */
    public function erpSOAPMatImpex__getMatList($_requestSerialized, $_paramsSerialized)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPMatImpex..getMatList', array($_requestSerialized, $_paramsSerialized));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPMatImpex..getBundle
     * Documentation : Returns Bundle.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return ColibriERPStructDocRec
     */
    public function erpSOAPMatImpex__getBundle($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPMatImpex..getBundle', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPMatImpex..getBundleList
     * Documentation : Returns list of Bundle records.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_requestSerialized expect string
     * @param string $_paramsSerialized  expect string
     *
     * @return ColibriERPStructDocRec[]
     */
    public function erpSOAPMatImpex__getBundleList($_requestSerialized, $_paramsSerialized)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPMatImpex..getBundleList', array($_requestSerialized, $_paramsSerialized));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBON..GetClients
     * Documentation : Returns info for client with PNum if set, or list of clients with LIMIT FromLimit,ToLimit (as in mysql)
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_pNum      expect string
     * @param string $_fromLimit expect string
     * @param string $_toLimit   expect string
     * @param string $_orderBy   expect string
     * @param string $_orderType expect string
     *
     * @return ColibriERPStructPartnerInfo[]
     */
    public function erpSOAPBON__GetClients($_pNum, $_fromLimit, $_toLimit, $_orderBy, $_orderType)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBON..GetClients', array($_pNum, $_fromLimit, $_toLimit, $_orderBy, $_orderType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBON..GetClientsCount
     * Documentation : Returns the count of all clients
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return float
     */
    public function erpSOAPBON__GetClientsCount()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBON..GetClientsCount', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBON..GetInvoices
     * Documentation : Returns list all invoices for client PNum, or for all clients, with LIMIT FromLimit,ToLimit (as in mysql)
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_pNum      expect string
     * @param string $_fromLimit expect string
     * @param string $_toLimit   expect string
     * @param string $_orderBy   expect string
     * @param string $_orderType expect string
     *
     * @return ColibriERPStructInvoiceInfo[]
     */
    public function erpSOAPBON__GetInvoices($_pNum, $_fromLimit, $_toLimit, $_orderBy, $_orderType)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBON..GetInvoices', array($_pNum, $_fromLimit, $_toLimit, $_orderBy, $_orderType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBON..GetInvoicesCount
     * Documentation : Returns count of all invoices for client PNum, or for all clients
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return float
     */
    public function erpSOAPBON__GetInvoicesCount($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBON..GetInvoicesCount', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBON..GetInvoiceFullInfo
     * Documentation : Returns detailed information about invoce with DocNum
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return ColibriERPStructInvoiceFullInfo
     */
    public function erpSOAPBON__GetInvoiceFullInfo($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBON..GetInvoiceFullInfo', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBON..GetShipments
     * Documentation : Returns list of shipment for client PNum, or for all clients, with LIMIT FromLimit,ToLimit (as in mysql)
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_pNum      expect string
     * @param string $_fromLimit expect string
     * @param string $_toLimit   expect string
     * @param string $_orderBy   expect string
     * @param string $_orderType expect string
     *
     * @return ColibriERPStructShipmentInfo[]
     */
    public function erpSOAPBON__GetShipments($_pNum, $_fromLimit, $_toLimit, $_orderBy, $_orderType)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBON..GetShipments', array($_pNum, $_fromLimit, $_toLimit, $_orderBy, $_orderType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPBON..GetShipmentsCount
     * Documentation : Returns count of all shipments for client PNum, or for all clients
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_string expect string
     *
     * @return float
     */
    public function erpSOAPBON__GetShipmentsCount($_string)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPBON..GetShipmentsCount', array($_string));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPProd..GetOperations
     * Documentation : Returns list of pairs operation - work center.
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return ColibriERPStructOperationInfo[]
     */
    public function erpSOAPProd__GetOperations()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPProd..GetOperations', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPProd..GetActiveOpers
     * Documentation : Returns list of active operations.
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return ColibriERPStructActiveOperInfo[]
     */
    public function erpSOAPProd__GetActiveOpers()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPProd..GetActiveOpers', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPProd..PutWorkman
     * Documentation : Receive list of working personal. Returns list of new and modified personal.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param ColibriERPStructProdPersonalInfo[] $_prodPersonalInfoArray
     *
     * @return ColibriERPStructProdPersonalInfo[]
     */
    public function erpSOAPProd__PutWorkman($_prodPersonalInfoArray)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPProd..PutWorkman', array($_prodPersonalInfoArray));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPProd..PutWork
     * Documentation : Receive a list from Completed operations and returns list of registered new operations.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param ColibriERPStructProdCompletedOperInfo[] $_prodCompletedOperInfoArray
     *
     * @return ColibriERPStructProdCompletedOperInfo[]
     */
    public function erpSOAPProd__PutWork($_prodCompletedOperInfoArray)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPProd..PutWork', array($_prodCompletedOperInfoArray));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPOrderC..GetOrder
     * Documentation : Returns ONE client order info for given filter. For filter rule field, use only keys from erpOrderCInfo simple type elements, like OrderNum, idOrderC, etc.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_filter expect array
     *
     * @return array
     */
    public function erpSOAPOrderC__GetOrder($_filter)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPOrderC..GetOrder', array($_filter));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPOrderC..GetLastOrder
     * Documentation : Returns last created from current (web services) user client order info.
     *
     * @uses   ColibriERPWsdlClass::getSoapClient()
     * @uses   ColibriERPWsdlClass::saveLastError()
     * @return array
     */
    public function erpSOAPOrderC__GetLastOrder()
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPOrderC..GetLastOrder', []);
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPOrderC..GetOrderList
     * Documentation : Returns list of Client Order Info according to given params.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param ColibriERPStructErpFilterParams $_params expect ColibriERPStructErpFilterParams
     *
     * @return array
     */
    public function erpSOAPOrderC__GetOrderList(ColibriERPStructErpFilterParams $_params)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPOrderC..GetOrderList', array($_params));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPOrderC..GetOrderStatus
     * Documentation : Returns client order retrieved and status info for given OrderNum.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_orderNum expect string
     *
     * @return array
     */
    public function erpSOAPOrderC__GetOrderStatus($_orderNum)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPOrderC..GetOrderStatus', array($_orderNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPOrderC..SetOrderStatus
     * Documentation : Set client order status info for given OrderNum.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_orderNum expect string
     * @param string $_oStatus  expect string
     *
     * @return array
     */
    public function erpSOAPOrderC__SetOrderStatus($_orderNum, $_oStatus)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPOrderC..SetOrderStatus', array($_orderNum, $_oStatus));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPOrderC..CancelOrder
     * Documentation : Set client order status to Canceled.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param string $_orderNum expect string
     *
     * @return array
     */
    public function erpSOAPOrderC__CancelOrder($_orderNum)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPOrderC..CancelOrder', array($_orderNum));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPOrderC..RegOrder
     * Documentation : Register Client Order and returns registered Client Order Info.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param ColibriERPStructErpOrderCNew $_order expect ColibriERPStructErpOrderCNew
     *
     * @return array
     */
    public function erpSOAPOrderC__RegOrder(ColibriERPStructErpOrderCNew $_order)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPOrderC..RegOrder', array($_order));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPPartner..RegCustomer
     * Documentation : Try to register a customer and returns registered customer short info.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param ColibriERPStructErpPartnerInfo $_customer expect ColibriERPStructErpPartnerInfo
     *
     * @return array
     */
    public function erpSOAPPartner__RegCustomer(ColibriERPStructErpPartnerInfo $_customer)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPPartner..RegCustomer', array($_customer));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPPartner..GetCustomerList
     * Documentation : Returns list of customers according to given params.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param ColibriERPStructErpFilterParams $_params expect ColibriERPStructErpFilterParams
     *
     * @return array
     */
    public function erpSOAPPartner__GetCustomerList(ColibriERPStructErpFilterParams $_params)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPPartner..GetCustomerList', array($_params));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPPartner..GetCustomer
     * Documentation : Returns ONE customer info for given filter. For filter rule field, use only keys from erpPartnerInfo simple type elements, like PNum, PPNum, etc.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_filter     expect array
     * @param array $_field_list expect array
     *
     * @return array
     */
    public function erpSOAPPartner__GetCustomer($_filter, $_field_list)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPPartner..GetCustomer', array($_filter, $_field_list));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPPartner..GetPaymentMethodList
     * Documentation : Returns list of registered payment methods.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_erpFilter expect array
     *
     * @return ColibriERPStructErpPaymentMethod[]
     */
    public function erpSOAPPartner__GetPaymentMethodList($_erpFilter)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPPartner..GetPaymentMethodList', array($_erpFilter));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named erpSOAPPartner..GetShippingMethodList
     * Documentation : Returns list of registered shipping methods.
     *
     * @uses  ColibriERPWsdlClass::getSoapClient()
     * @uses  ColibriERPWsdlClass::saveLastError()
     * @param array $_erpFilter expect array
     *
     * @return ColibriERPStructErpShippingMethod[]
     */
    public function erpSOAPPartner__GetShippingMethodList($_erpFilter)
    {
        try {
            return self::getSoapClient()->__soapCall('erpSOAPPartner..GetShippingMethodList', array($_erpFilter));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
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
