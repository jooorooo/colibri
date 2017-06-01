<?php
/**
 * File for the class which returns the class map definition
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
 * Class which returns the class map definition
 * by the static method ColibriERPClassMap::classMap()
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
class ColibriERPClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     *
     * @return array
     */
    final public static function classMap()
    {
        return array(
            'DOCTPL' => 'ColibriERPStructDOCTPL',
            'DocInfo' => 'ColibriERPStructDocInfo',
            'DocItem' => 'ColibriERPStructDocItem',
            'DocRec' => 'ColibriERPStructDocRec',
            'GeoRegionInfo' => 'ColibriERPStructGeoRegionInfo',
            'InvoiceFullInfo' => 'ColibriERPStructInvoiceFullInfo',
            'InvoiceInfo' => 'ColibriERPStructInvoiceInfo',
            'InvoiceItem' => 'ColibriERPStructInvoiceItem',
            'MatAttributeRec' => 'ColibriERPStructMatAttributeRec',
            'MatCategoryRec' => 'ColibriERPStructMatCategoryRec',
            'ShipmentInfo' => 'ColibriERPStructShipmentInfo',
            'VATDeclarationDef' => 'ColibriERPStructVATDeclarationDef',
            'VATDeclarationDefSet' => 'ColibriERPStructVATDeclarationDefSet',
            'VATRegisterBuy' => 'ColibriERPStructVATRegisterBuy',
            'VATRegisterSell' => 'ColibriERPStructVATRegisterSell',
            'acc' => 'ColibriERPStructAcc',
            'accBALPro' => 'ColibriERPStructAccBALPro',
            'accBALProDef' => 'ColibriERPStructAccBALProDef',
            'accBALProDefSet' => 'ColibriERPStructAccBALProDefSet',
            'accBALdatDef' => 'ColibriERPStructAccBALdatDef',
            'accBALdatDefSet' => 'ColibriERPStructAccBALdatDefSet',
            'accOPPdatDef' => 'ColibriERPStructAccOPPdatDef',
            'accOPPdatDefSet' => 'ColibriERPStructAccOPPdatDefSet',
            'accOPPro' => 'ColibriERPStructAccOPPro',
            'accOPProDef' => 'ColibriERPStructAccOPProDef',
            'accOPProDefSet' => 'ColibriERPStructAccOPProDefSet',
            'accOPRPro' => 'ColibriERPStructAccOPRPro',
            'accOPRProDef' => 'ColibriERPStructAccOPRProDef',
            'accOPRProDefSet' => 'ColibriERPStructAccOPRProDefSet',
            'accOPRdatDef' => 'ColibriERPStructAccOPRdatDef',
            'accOPRdatDefSet' => 'ColibriERPStructAccOPRdatDefSet',
            'accOV' => 'ColibriERPStructAccOV',
            'accdoc' => 'ColibriERPStructAccdoc',
            'accdocs' => 'ColibriERPStructAccdocs',
            'activeOperInfo' => 'ColibriERPStructActiveOperInfo',
            'attrValue' => 'ColibriERPStructAttrValue',
            'branchInfo' => 'ColibriERPStructBranchInfo',
            'bundleAttributeInfo' => 'ColibriERPStructBundleAttributeInfo',
            'bundleInfo' => 'ColibriERPStructBundleInfo',
            'bundleItemsInfo' => 'ColibriERPStructBundleItemsInfo',
            'erpFilterParams' => 'ColibriERPStructErpFilterParams',
            'erpFilterRule' => 'ColibriERPStructErpFilterRule',
            'erpInfo' => 'ColibriERPStructErpInfo',
            'erpOrderCInfo' => 'ColibriERPStructErpOrderCInfo',
            'erpOrderCItem' => 'ColibriERPStructErpOrderCItem',
            'erpOrderCItemNew' => 'ColibriERPStructErpOrderCItemNew',
            'erpOrderCNew' => 'ColibriERPStructErpOrderCNew',
            'erpOrderPDoc' => 'ColibriERPStructErpOrderPDoc',
            'erpOrderSDoc' => 'ColibriERPStructErpOrderSDoc',
            'erpOrderStatus' => 'ColibriERPStructErpOrderStatus',
            'erpPartnerInfo' => 'ColibriERPStructErpPartnerInfo',
            'erpPaymentMethod' => 'ColibriERPStructErpPaymentMethod',
            'erpSetParam' => 'ColibriERPStructErpSetParam',
            'erpShippingMethod' => 'ColibriERPStructErpShippingMethod',
            'erpSortRule' => 'ColibriERPStructErpSortRule',
            'limitRange' => 'ColibriERPStructLimitRange',
            'limitResult' => 'ColibriERPStructLimitResult',
            'mAttributeCategoryInfo' => 'ColibriERPStructMAttributeCategoryInfo',
            'mAttributeInfo' => 'ColibriERPStructMAttributeInfo',
            'mGroupInfo' => 'ColibriERPStructMGroupInfo',
            'matAttributeInfo' => 'ColibriERPStructMatAttributeInfo',
            'matInfo' => 'ColibriERPStructMatInfo',
            'matStoreInfo' => 'ColibriERPStructMatStoreInfo',
            'operationInfo' => 'ColibriERPStructOperationInfo',
            'pDocPay' => 'ColibriERPStructPDocPay',
            'pDocTran' => 'ColibriERPStructPDocTran',
            'pDocTranRec' => 'ColibriERPStructPDocTranRec',
            'pDocTrans' => 'ColibriERPStructPDocTrans',
            'partnerInfo' => 'ColibriERPStructPartnerInfo',
            'prodCompletedOperInfo' => 'ColibriERPStructProdCompletedOperInfo',
            'prodPersonalInfo' => 'ColibriERPStructProdPersonalInfo',
            'reservInfo' => 'ColibriERPStructReservInfo',
            'storeInfo' => 'ColibriERPStructStoreInfo',
            'storeMatInfo' => 'ColibriERPStructStoreMatInfo',
            'tagInfo' => 'ColibriERPStructTagInfo',
        );
    }
}
