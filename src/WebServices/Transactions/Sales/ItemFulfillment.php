<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentShipStatus;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentThirdPartyTypeUps;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentExportTypeUps;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentMethodOfTransportUps;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentLicenseExceptionUps;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentHomeDeliveryTypeFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentB13AFilingOptionFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentThirdPartyTypeFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentTermsOfSaleFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentAncillaryEndorsementFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentHazmatTypeFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentAccessibilityTypeFedEx;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ItemFulfillment
 */
class ItemFulfillment extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var integer
     */
    protected $createdFromShipGroup;

    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

    /**
     * @access public
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @access public
     * @var dateTime
     */
    protected $pickedDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $packedDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $shippedDate;

    /**
     * @access public
     * @var boolean
     */
    protected $shipIsResidential;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipAddressList;

    /**
     * @access public
     * @var ItemFulfillmentShipStatus
     */
    protected $shipStatus;

    /**
     * @access public
     * @var boolean
     */
    protected $saturdayDeliveryUps;

    /**
     * @access public
     * @var boolean
     */
    protected $sendShipNotifyEmailUps;

    /**
     * @access public
     * @var boolean
     */
    protected $sendBackupEmailUps;

    /**
     * @access public
     * @var string
     */
    protected $shipNotifyEmailAddressUps;

    /**
     * @access public
     * @var string
     */
    protected $shipNotifyEmailAddress2Ups;

    /**
     * @access public
     * @var string
     */
    protected $backupEmailAddressUps;

    /**
     * @access public
     * @var string
     */
    protected $shipNotifyEmailMessageUps;

    /**
     * @access public
     * @var string
     */
    protected $thirdPartyAcctUps;

    /**
     * @access public
     * @var string
     */
    protected $thirdPartyZipcodeUps;

    /**
     * @access public
     * @var Country
     */
    protected $thirdPartyCountryUps;

    /**
     * @access public
     * @var ItemFulfillmentThirdPartyTypeUps
     */
    protected $thirdPartyTypeUps;

    /**
     * @access public
     * @var boolean
     */
    protected $partiesToTransactionUps;

    /**
     * @access public
     * @var ItemFulfillmentExportTypeUps
     */
    protected $exportTypeUps;

    /**
     * @access public
     * @var ItemFulfillmentMethodOfTransportUps
     */
    protected $methodOfTransportUps;

    /**
     * @access public
     * @var string
     */
    protected $carrierIdUps;

    /**
     * @access public
     * @var string
     */
    protected $entryNumberUps;

    /**
     * @access public
     * @var string
     */
    protected $inbondCodeUps;

    /**
     * @access public
     * @var boolean
     */
    protected $isRoutedExportTransactionUps;

    /**
     * @access public
     * @var string
     */
    protected $licenseNumberUps;

    /**
     * @access public
     * @var dateTime
     */
    protected $licenseDateUps;

    /**
     * @access public
     * @var ItemFulfillmentLicenseExceptionUps
     */
    protected $licenseExceptionUps;

    /**
     * @access public
     * @var string
     */
    protected $eccNumberUps;

    /**
     * @access public
     * @var string
     */
    protected $recipientTaxIdUps;

    /**
     * @access public
     * @var dateTime
     */
    protected $blanketStartDateUps;

    /**
     * @access public
     * @var dateTime
     */
    protected $blanketEndDateUps;

    /**
     * @access public
     * @var float
     */
    protected $shipmentWeightUps;

    /**
     * @access public
     * @var boolean
     */
    protected $saturdayDeliveryFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $saturdayPickupFedex;

    /**
     * @access public
     * @var boolean
     */
    protected $sendShipNotifyEmailFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $sendBackupEmailFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $signatureHomeDeliveryFedEx;

    /**
     * @access public
     * @var string
     */
    protected $shipNotifyEmailAddressFedEx;

    /**
     * @access public
     * @var string
     */
    protected $backupEmailAddressFedEx;

    /**
     * @access public
     * @var dateTime
     */
    protected $shipDateFedEx;

    /**
     * @access public
     * @var ItemFulfillmentHomeDeliveryTypeFedEx
     */
    protected $homeDeliveryTypeFedEx;

    /**
     * @access public
     * @var dateTime
     */
    protected $homeDeliveryDateFedEx;

    /**
     * @access public
     * @var string
     */
    protected $bookingConfirmationNumFedEx;

    /**
     * @access public
     * @var string
     */
    protected $intlExemptionNumFedEx;

    /**
     * @access public
     * @var ItemFulfillmentB13AFilingOptionFedEx
     */
    protected $b13aFilingOptionFedEx;

    /**
     * @access public
     * @var string
     */
    protected $b13aStatementDataFedEx;

    /**
     * @access public
     * @var string
     */
    protected $thirdPartyAcctFedEx;

    /**
     * @access public
     * @var Country
     */
    protected $thirdPartyCountryFedEx;

    /**
     * @access public
     * @var ItemFulfillmentThirdPartyTypeFedEx
     */
    protected $thirdPartyTypeFedEx;

    /**
     * @access public
     * @var float
     */
    protected $shipmentWeightFedEx;

    /**
     * @access public
     * @var ItemFulfillmentTermsOfSaleFedEx
     */
    protected $termsOfSaleFedEx;

    /**
     * @access public
     * @var float
     */
    protected $termsFreightChargeFedEx;

    /**
     * @access public
     * @var float
     */
    protected $termsInsuranceChargeFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $insideDeliveryFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $insidePickupFedEx;

    /**
     * @access public
     * @var ItemFulfillmentAncillaryEndorsementFedEx
     */
    protected $ancillaryEndorsementFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $holdAtLocationFedEx;

    /**
     * @access public
     * @var string
     */
    protected $halPhoneFedEx;

    /**
     * @access public
     * @var string
     */
    protected $halAddr1FedEx;

    /**
     * @access public
     * @var string
     */
    protected $halAddr2FedEx;

    /**
     * @access public
     * @var string
     */
    protected $halAddr3FedEx;

    /**
     * @access public
     * @var string
     */
    protected $halCityFedEx;

    /**
     * @access public
     * @var string
     */
    protected $halZipFedEx;

    /**
     * @access public
     * @var string
     */
    protected $halStateFedEx;

    /**
     * @access public
     * @var string
     */
    protected $halCountryFedEx;

    /**
     * @access public
     * @var ItemFulfillmentHazmatTypeFedEx
     */
    protected $hazmatTypeFedEx;

    /**
     * @access public
     * @var ItemFulfillmentAccessibilityTypeFedEx
     */
    protected $accessibilityTypeFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $isCargoAircraftOnlyFedEx;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipMethod;

    /**
     * @access public
     * @var boolean
     */
    protected $generateIntegratedShipperLabel;

    /**
     * @access public
     * @var float
     */
    protected $shippingCost;

    /**
     * @access public
     * @var float
     */
    protected $handlingCost;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $transferLocation;

    /**
     * @access public
     * @var ItemFulfillmentPackageList
     */
    protected $packageList;

    /**
     * @access public
     * @var ItemFulfillmentPackageUpsList
     */
    protected $packageUpsList;

    /**
     * @access public
     * @var ItemFulfillmentPackageUspsList
     */
    protected $packageUspsList;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExList
     */
    protected $packageFedExList;

    /**
     * @access public
     * @var ItemFulfillmentItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var ItemFulfillmentShipGroupList
     */
    protected $shipGroupList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"postingPeriod" => "RecordRef",
    	"entity" => "RecordRef",
    	"createdFrom" => "RecordRef",
    	"createdFromShipGroup" => "integer",
    	"partner" => "RecordRef",
    	"shippingAddress" => "Address",
    	"pickedDate" => "dateTime",
    	"packedDate" => "dateTime",
    	"shippedDate" => "dateTime",
    	"shipIsResidential" => "boolean",
    	"shipAddressList" => "RecordRef",
    	"shipStatus" => "ItemFulfillmentShipStatus",
    	"saturdayDeliveryUps" => "boolean",
    	"sendShipNotifyEmailUps" => "boolean",
    	"sendBackupEmailUps" => "boolean",
    	"shipNotifyEmailAddressUps" => "string",
    	"shipNotifyEmailAddress2Ups" => "string",
    	"backupEmailAddressUps" => "string",
    	"shipNotifyEmailMessageUps" => "string",
    	"thirdPartyAcctUps" => "string",
    	"thirdPartyZipcodeUps" => "string",
    	"thirdPartyCountryUps" => "Country",
    	"thirdPartyTypeUps" => "ItemFulfillmentThirdPartyTypeUps",
    	"partiesToTransactionUps" => "boolean",
    	"exportTypeUps" => "ItemFulfillmentExportTypeUps",
    	"methodOfTransportUps" => "ItemFulfillmentMethodOfTransportUps",
    	"carrierIdUps" => "string",
    	"entryNumberUps" => "string",
    	"inbondCodeUps" => "string",
    	"isRoutedExportTransactionUps" => "boolean",
    	"licenseNumberUps" => "string",
    	"licenseDateUps" => "dateTime",
    	"licenseExceptionUps" => "ItemFulfillmentLicenseExceptionUps",
    	"eccNumberUps" => "string",
    	"recipientTaxIdUps" => "string",
    	"blanketStartDateUps" => "dateTime",
    	"blanketEndDateUps" => "dateTime",
    	"shipmentWeightUps" => "float",
    	"saturdayDeliveryFedEx" => "boolean",
    	"saturdayPickupFedex" => "boolean",
    	"sendShipNotifyEmailFedEx" => "boolean",
    	"sendBackupEmailFedEx" => "boolean",
    	"signatureHomeDeliveryFedEx" => "boolean",
    	"shipNotifyEmailAddressFedEx" => "string",
    	"backupEmailAddressFedEx" => "string",
    	"shipDateFedEx" => "dateTime",
    	"homeDeliveryTypeFedEx" => "ItemFulfillmentHomeDeliveryTypeFedEx",
    	"homeDeliveryDateFedEx" => "dateTime",
    	"bookingConfirmationNumFedEx" => "string",
    	"intlExemptionNumFedEx" => "string",
    	"b13aFilingOptionFedEx" => "ItemFulfillmentB13AFilingOptionFedEx",
    	"b13aStatementDataFedEx" => "string",
    	"thirdPartyAcctFedEx" => "string",
    	"thirdPartyCountryFedEx" => "Country",
    	"thirdPartyTypeFedEx" => "ItemFulfillmentThirdPartyTypeFedEx",
    	"shipmentWeightFedEx" => "float",
    	"termsOfSaleFedEx" => "ItemFulfillmentTermsOfSaleFedEx",
    	"termsFreightChargeFedEx" => "float",
    	"termsInsuranceChargeFedEx" => "float",
    	"insideDeliveryFedEx" => "boolean",
    	"insidePickupFedEx" => "boolean",
    	"ancillaryEndorsementFedEx" => "ItemFulfillmentAncillaryEndorsementFedEx",
    	"holdAtLocationFedEx" => "boolean",
    	"halPhoneFedEx" => "string",
    	"halAddr1FedEx" => "string",
    	"halAddr2FedEx" => "string",
    	"halAddr3FedEx" => "string",
    	"halCityFedEx" => "string",
    	"halZipFedEx" => "string",
    	"halStateFedEx" => "string",
    	"halCountryFedEx" => "string",
    	"hazmatTypeFedEx" => "ItemFulfillmentHazmatTypeFedEx",
    	"accessibilityTypeFedEx" => "ItemFulfillmentAccessibilityTypeFedEx",
    	"isCargoAircraftOnlyFedEx" => "boolean",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"shipMethod" => "RecordRef",
    	"generateIntegratedShipperLabel" => "boolean",
    	"shippingCost" => "float",
    	"handlingCost" => "float",
    	"memo" => "string",
    	"transferLocation" => "RecordRef",
    	"packageList" => "ItemFulfillmentPackageList",
    	"packageUpsList" => "ItemFulfillmentPackageUpsList",
    	"packageUspsList" => "ItemFulfillmentPackageUspsList",
    	"packageFedExList" => "ItemFulfillmentPackageFedExList",
    	"itemList" => "ItemFulfillmentItemList",
    	"shipGroupList" => "ItemFulfillmentShipGroupList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return ItemFulfillment
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return ItemFulfillment
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set createdFromShipGroup
     *
     * @param integer $createdFromShipGroup
     * @return ItemFulfillment
     */
    public function setCreatedFromShipGroup($createdFromShipGroup) {
        $this->createdFromShipGroup = $createdFromShipGroup;
        return $this;
    }

    /**
     * Get createdFromShipGroup
     *
     * @return integer
     */
    public function getCreatedFromShipGroup() {
        return $this->createdFromShipGroup;
    }


    /**
     * Set shippingAddress
     *
     * @param Address $shippingAddress
     * @return ItemFulfillment
     */
    public function setShippingAddress(Address $shippingAddress) {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return Address
     */
    public function getShippingAddress() {
        return $this->shippingAddress;
    }


    /**
     * Set pickedDate
     *
     * @param \DateTime $pickedDate
     * @return ItemFulfillment
     */
    public function setPickedDate(\DateTime $pickedDate) {
        $this->pickedDate = $pickedDate->format('c');
        return $this;
    }

    /**
     * Get pickedDate
     *
     * @return \DateTime
     */
    public function getPickedDate() {
        return new \DateTime($this->pickedDate);
    }


    /**
     * Set packedDate
     *
     * @param \DateTime $packedDate
     * @return ItemFulfillment
     */
    public function setPackedDate(\DateTime $packedDate) {
        $this->packedDate = $packedDate->format('c');
        return $this;
    }

    /**
     * Get packedDate
     *
     * @return \DateTime
     */
    public function getPackedDate() {
        return new \DateTime($this->packedDate);
    }


    /**
     * Set shippedDate
     *
     * @param \DateTime $shippedDate
     * @return ItemFulfillment
     */
    public function setShippedDate(\DateTime $shippedDate) {
        $this->shippedDate = $shippedDate->format('c');
        return $this;
    }

    /**
     * Get shippedDate
     *
     * @return \DateTime
     */
    public function getShippedDate() {
        return new \DateTime($this->shippedDate);
    }


    /**
     * Set shipIsResidential
     *
     * @param boolean $shipIsResidential
     * @return ItemFulfillment
     */
    public function setShipIsResidential($shipIsResidential) {
        $this->shipIsResidential = $shipIsResidential;
        return $this;
    }

    /**
     * Get shipIsResidential
     *
     * @return boolean
     */
    public function getShipIsResidential() {
        return $this->shipIsResidential;
    }


    /**
     * Set shipStatus
     *
     * @param ItemFulfillmentShipStatus $shipStatus
     * @return ItemFulfillment
     */
    public function setShipStatus(ItemFulfillmentShipStatus $shipStatus) {
        $this->shipStatus = $shipStatus;
        return $this;
    }

    /**
     * Get shipStatus
     *
     * @return ItemFulfillmentShipStatus
     */
    public function getShipStatus() {
        return $this->shipStatus;
    }


    /**
     * Set saturdayDeliveryUps
     *
     * @param boolean $saturdayDeliveryUps
     * @return ItemFulfillment
     */
    public function setSaturdayDeliveryUps($saturdayDeliveryUps) {
        $this->saturdayDeliveryUps = $saturdayDeliveryUps;
        return $this;
    }

    /**
     * Get saturdayDeliveryUps
     *
     * @return boolean
     */
    public function getSaturdayDeliveryUps() {
        return $this->saturdayDeliveryUps;
    }


    /**
     * Set sendShipNotifyEmailUps
     *
     * @param boolean $sendShipNotifyEmailUps
     * @return ItemFulfillment
     */
    public function setSendShipNotifyEmailUps($sendShipNotifyEmailUps) {
        $this->sendShipNotifyEmailUps = $sendShipNotifyEmailUps;
        return $this;
    }

    /**
     * Get sendShipNotifyEmailUps
     *
     * @return boolean
     */
    public function getSendShipNotifyEmailUps() {
        return $this->sendShipNotifyEmailUps;
    }


    /**
     * Set sendBackupEmailUps
     *
     * @param boolean $sendBackupEmailUps
     * @return ItemFulfillment
     */
    public function setSendBackupEmailUps($sendBackupEmailUps) {
        $this->sendBackupEmailUps = $sendBackupEmailUps;
        return $this;
    }

    /**
     * Get sendBackupEmailUps
     *
     * @return boolean
     */
    public function getSendBackupEmailUps() {
        return $this->sendBackupEmailUps;
    }


    /**
     * Set shipNotifyEmailAddressUps
     *
     * @param string $shipNotifyEmailAddressUps
     * @return ItemFulfillment
     */
    public function setShipNotifyEmailAddressUps($shipNotifyEmailAddressUps) {
        $this->shipNotifyEmailAddressUps = $shipNotifyEmailAddressUps;
        return $this;
    }

    /**
     * Get shipNotifyEmailAddressUps
     *
     * @return string
     */
    public function getShipNotifyEmailAddressUps() {
        return $this->shipNotifyEmailAddressUps;
    }


    /**
     * Set shipNotifyEmailAddress2Ups
     *
     * @param string $shipNotifyEmailAddress2Ups
     * @return ItemFulfillment
     */
    public function setShipNotifyEmailAddress2Ups($shipNotifyEmailAddress2Ups) {
        $this->shipNotifyEmailAddress2Ups = $shipNotifyEmailAddress2Ups;
        return $this;
    }

    /**
     * Get shipNotifyEmailAddress2Ups
     *
     * @return string
     */
    public function getShipNotifyEmailAddress2Ups() {
        return $this->shipNotifyEmailAddress2Ups;
    }


    /**
     * Set backupEmailAddressUps
     *
     * @param string $backupEmailAddressUps
     * @return ItemFulfillment
     */
    public function setBackupEmailAddressUps($backupEmailAddressUps) {
        $this->backupEmailAddressUps = $backupEmailAddressUps;
        return $this;
    }

    /**
     * Get backupEmailAddressUps
     *
     * @return string
     */
    public function getBackupEmailAddressUps() {
        return $this->backupEmailAddressUps;
    }


    /**
     * Set shipNotifyEmailMessageUps
     *
     * @param string $shipNotifyEmailMessageUps
     * @return ItemFulfillment
     */
    public function setShipNotifyEmailMessageUps($shipNotifyEmailMessageUps) {
        $this->shipNotifyEmailMessageUps = $shipNotifyEmailMessageUps;
        return $this;
    }

    /**
     * Get shipNotifyEmailMessageUps
     *
     * @return string
     */
    public function getShipNotifyEmailMessageUps() {
        return $this->shipNotifyEmailMessageUps;
    }


    /**
     * Set thirdPartyAcctUps
     *
     * @param string $thirdPartyAcctUps
     * @return ItemFulfillment
     */
    public function setThirdPartyAcctUps($thirdPartyAcctUps) {
        $this->thirdPartyAcctUps = $thirdPartyAcctUps;
        return $this;
    }

    /**
     * Get thirdPartyAcctUps
     *
     * @return string
     */
    public function getThirdPartyAcctUps() {
        return $this->thirdPartyAcctUps;
    }


    /**
     * Set thirdPartyZipcodeUps
     *
     * @param string $thirdPartyZipcodeUps
     * @return ItemFulfillment
     */
    public function setThirdPartyZipcodeUps($thirdPartyZipcodeUps) {
        $this->thirdPartyZipcodeUps = $thirdPartyZipcodeUps;
        return $this;
    }

    /**
     * Get thirdPartyZipcodeUps
     *
     * @return string
     */
    public function getThirdPartyZipcodeUps() {
        return $this->thirdPartyZipcodeUps;
    }


    /**
     * Set thirdPartyCountryUps
     *
     * @param Country $thirdPartyCountryUps
     * @return ItemFulfillment
     */
    public function setThirdPartyCountryUps(Country $thirdPartyCountryUps) {
        $this->thirdPartyCountryUps = $thirdPartyCountryUps;
        return $this;
    }

    /**
     * Get thirdPartyCountryUps
     *
     * @return Country
     */
    public function getThirdPartyCountryUps() {
        return $this->thirdPartyCountryUps;
    }


    /**
     * Set thirdPartyTypeUps
     *
     * @param ItemFulfillmentThirdPartyTypeUps $thirdPartyTypeUps
     * @return ItemFulfillment
     */
    public function setThirdPartyTypeUps(ItemFulfillmentThirdPartyTypeUps $thirdPartyTypeUps) {
        $this->thirdPartyTypeUps = $thirdPartyTypeUps;
        return $this;
    }

    /**
     * Get thirdPartyTypeUps
     *
     * @return ItemFulfillmentThirdPartyTypeUps
     */
    public function getThirdPartyTypeUps() {
        return $this->thirdPartyTypeUps;
    }


    /**
     * Set partiesToTransactionUps
     *
     * @param boolean $partiesToTransactionUps
     * @return ItemFulfillment
     */
    public function setPartiesToTransactionUps($partiesToTransactionUps) {
        $this->partiesToTransactionUps = $partiesToTransactionUps;
        return $this;
    }

    /**
     * Get partiesToTransactionUps
     *
     * @return boolean
     */
    public function getPartiesToTransactionUps() {
        return $this->partiesToTransactionUps;
    }


    /**
     * Set exportTypeUps
     *
     * @param ItemFulfillmentExportTypeUps $exportTypeUps
     * @return ItemFulfillment
     */
    public function setExportTypeUps(ItemFulfillmentExportTypeUps $exportTypeUps) {
        $this->exportTypeUps = $exportTypeUps;
        return $this;
    }

    /**
     * Get exportTypeUps
     *
     * @return ItemFulfillmentExportTypeUps
     */
    public function getExportTypeUps() {
        return $this->exportTypeUps;
    }


    /**
     * Set methodOfTransportUps
     *
     * @param ItemFulfillmentMethodOfTransportUps $methodOfTransportUps
     * @return ItemFulfillment
     */
    public function setMethodOfTransportUps(ItemFulfillmentMethodOfTransportUps $methodOfTransportUps) {
        $this->methodOfTransportUps = $methodOfTransportUps;
        return $this;
    }

    /**
     * Get methodOfTransportUps
     *
     * @return ItemFulfillmentMethodOfTransportUps
     */
    public function getMethodOfTransportUps() {
        return $this->methodOfTransportUps;
    }


    /**
     * Set carrierIdUps
     *
     * @param string $carrierIdUps
     * @return ItemFulfillment
     */
    public function setCarrierIdUps($carrierIdUps) {
        $this->carrierIdUps = $carrierIdUps;
        return $this;
    }

    /**
     * Get carrierIdUps
     *
     * @return string
     */
    public function getCarrierIdUps() {
        return $this->carrierIdUps;
    }


    /**
     * Set entryNumberUps
     *
     * @param string $entryNumberUps
     * @return ItemFulfillment
     */
    public function setEntryNumberUps($entryNumberUps) {
        $this->entryNumberUps = $entryNumberUps;
        return $this;
    }

    /**
     * Get entryNumberUps
     *
     * @return string
     */
    public function getEntryNumberUps() {
        return $this->entryNumberUps;
    }


    /**
     * Set inbondCodeUps
     *
     * @param string $inbondCodeUps
     * @return ItemFulfillment
     */
    public function setInbondCodeUps($inbondCodeUps) {
        $this->inbondCodeUps = $inbondCodeUps;
        return $this;
    }

    /**
     * Get inbondCodeUps
     *
     * @return string
     */
    public function getInbondCodeUps() {
        return $this->inbondCodeUps;
    }


    /**
     * Set isRoutedExportTransactionUps
     *
     * @param boolean $isRoutedExportTransactionUps
     * @return ItemFulfillment
     */
    public function setIsRoutedExportTransactionUps($isRoutedExportTransactionUps) {
        $this->isRoutedExportTransactionUps = $isRoutedExportTransactionUps;
        return $this;
    }

    /**
     * Get isRoutedExportTransactionUps
     *
     * @return boolean
     */
    public function getIsRoutedExportTransactionUps() {
        return $this->isRoutedExportTransactionUps;
    }


    /**
     * Set licenseNumberUps
     *
     * @param string $licenseNumberUps
     * @return ItemFulfillment
     */
    public function setLicenseNumberUps($licenseNumberUps) {
        $this->licenseNumberUps = $licenseNumberUps;
        return $this;
    }

    /**
     * Get licenseNumberUps
     *
     * @return string
     */
    public function getLicenseNumberUps() {
        return $this->licenseNumberUps;
    }


    /**
     * Set licenseDateUps
     *
     * @param \DateTime $licenseDateUps
     * @return ItemFulfillment
     */
    public function setLicenseDateUps(\DateTime $licenseDateUps) {
        $this->licenseDateUps = $licenseDateUps->format('c');
        return $this;
    }

    /**
     * Get licenseDateUps
     *
     * @return \DateTime
     */
    public function getLicenseDateUps() {
        return new \DateTime($this->licenseDateUps);
    }


    /**
     * Set licenseExceptionUps
     *
     * @param ItemFulfillmentLicenseExceptionUps $licenseExceptionUps
     * @return ItemFulfillment
     */
    public function setLicenseExceptionUps(ItemFulfillmentLicenseExceptionUps $licenseExceptionUps) {
        $this->licenseExceptionUps = $licenseExceptionUps;
        return $this;
    }

    /**
     * Get licenseExceptionUps
     *
     * @return ItemFulfillmentLicenseExceptionUps
     */
    public function getLicenseExceptionUps() {
        return $this->licenseExceptionUps;
    }


    /**
     * Set eccNumberUps
     *
     * @param string $eccNumberUps
     * @return ItemFulfillment
     */
    public function setEccNumberUps($eccNumberUps) {
        $this->eccNumberUps = $eccNumberUps;
        return $this;
    }

    /**
     * Get eccNumberUps
     *
     * @return string
     */
    public function getEccNumberUps() {
        return $this->eccNumberUps;
    }


    /**
     * Set recipientTaxIdUps
     *
     * @param string $recipientTaxIdUps
     * @return ItemFulfillment
     */
    public function setRecipientTaxIdUps($recipientTaxIdUps) {
        $this->recipientTaxIdUps = $recipientTaxIdUps;
        return $this;
    }

    /**
     * Get recipientTaxIdUps
     *
     * @return string
     */
    public function getRecipientTaxIdUps() {
        return $this->recipientTaxIdUps;
    }


    /**
     * Set blanketStartDateUps
     *
     * @param \DateTime $blanketStartDateUps
     * @return ItemFulfillment
     */
    public function setBlanketStartDateUps(\DateTime $blanketStartDateUps) {
        $this->blanketStartDateUps = $blanketStartDateUps->format('c');
        return $this;
    }

    /**
     * Get blanketStartDateUps
     *
     * @return \DateTime
     */
    public function getBlanketStartDateUps() {
        return new \DateTime($this->blanketStartDateUps);
    }


    /**
     * Set blanketEndDateUps
     *
     * @param \DateTime $blanketEndDateUps
     * @return ItemFulfillment
     */
    public function setBlanketEndDateUps(\DateTime $blanketEndDateUps) {
        $this->blanketEndDateUps = $blanketEndDateUps->format('c');
        return $this;
    }

    /**
     * Get blanketEndDateUps
     *
     * @return \DateTime
     */
    public function getBlanketEndDateUps() {
        return new \DateTime($this->blanketEndDateUps);
    }


    /**
     * Set shipmentWeightUps
     *
     * @param float $shipmentWeightUps
     * @return ItemFulfillment
     */
    public function setShipmentWeightUps($shipmentWeightUps) {
        $this->shipmentWeightUps = $shipmentWeightUps;
        return $this;
    }

    /**
     * Get shipmentWeightUps
     *
     * @return float
     */
    public function getShipmentWeightUps() {
        return $this->shipmentWeightUps;
    }


    /**
     * Set saturdayDeliveryFedEx
     *
     * @param boolean $saturdayDeliveryFedEx
     * @return ItemFulfillment
     */
    public function setSaturdayDeliveryFedEx($saturdayDeliveryFedEx) {
        $this->saturdayDeliveryFedEx = $saturdayDeliveryFedEx;
        return $this;
    }

    /**
     * Get saturdayDeliveryFedEx
     *
     * @return boolean
     */
    public function getSaturdayDeliveryFedEx() {
        return $this->saturdayDeliveryFedEx;
    }


    /**
     * Set saturdayPickupFedex
     *
     * @param boolean $saturdayPickupFedex
     * @return ItemFulfillment
     */
    public function setSaturdayPickupFedex($saturdayPickupFedex) {
        $this->saturdayPickupFedex = $saturdayPickupFedex;
        return $this;
    }

    /**
     * Get saturdayPickupFedex
     *
     * @return boolean
     */
    public function getSaturdayPickupFedex() {
        return $this->saturdayPickupFedex;
    }


    /**
     * Set sendShipNotifyEmailFedEx
     *
     * @param boolean $sendShipNotifyEmailFedEx
     * @return ItemFulfillment
     */
    public function setSendShipNotifyEmailFedEx($sendShipNotifyEmailFedEx) {
        $this->sendShipNotifyEmailFedEx = $sendShipNotifyEmailFedEx;
        return $this;
    }

    /**
     * Get sendShipNotifyEmailFedEx
     *
     * @return boolean
     */
    public function getSendShipNotifyEmailFedEx() {
        return $this->sendShipNotifyEmailFedEx;
    }


    /**
     * Set sendBackupEmailFedEx
     *
     * @param boolean $sendBackupEmailFedEx
     * @return ItemFulfillment
     */
    public function setSendBackupEmailFedEx($sendBackupEmailFedEx) {
        $this->sendBackupEmailFedEx = $sendBackupEmailFedEx;
        return $this;
    }

    /**
     * Get sendBackupEmailFedEx
     *
     * @return boolean
     */
    public function getSendBackupEmailFedEx() {
        return $this->sendBackupEmailFedEx;
    }


    /**
     * Set signatureHomeDeliveryFedEx
     *
     * @param boolean $signatureHomeDeliveryFedEx
     * @return ItemFulfillment
     */
    public function setSignatureHomeDeliveryFedEx($signatureHomeDeliveryFedEx) {
        $this->signatureHomeDeliveryFedEx = $signatureHomeDeliveryFedEx;
        return $this;
    }

    /**
     * Get signatureHomeDeliveryFedEx
     *
     * @return boolean
     */
    public function getSignatureHomeDeliveryFedEx() {
        return $this->signatureHomeDeliveryFedEx;
    }


    /**
     * Set shipNotifyEmailAddressFedEx
     *
     * @param string $shipNotifyEmailAddressFedEx
     * @return ItemFulfillment
     */
    public function setShipNotifyEmailAddressFedEx($shipNotifyEmailAddressFedEx) {
        $this->shipNotifyEmailAddressFedEx = $shipNotifyEmailAddressFedEx;
        return $this;
    }

    /**
     * Get shipNotifyEmailAddressFedEx
     *
     * @return string
     */
    public function getShipNotifyEmailAddressFedEx() {
        return $this->shipNotifyEmailAddressFedEx;
    }


    /**
     * Set backupEmailAddressFedEx
     *
     * @param string $backupEmailAddressFedEx
     * @return ItemFulfillment
     */
    public function setBackupEmailAddressFedEx($backupEmailAddressFedEx) {
        $this->backupEmailAddressFedEx = $backupEmailAddressFedEx;
        return $this;
    }

    /**
     * Get backupEmailAddressFedEx
     *
     * @return string
     */
    public function getBackupEmailAddressFedEx() {
        return $this->backupEmailAddressFedEx;
    }


    /**
     * Set shipDateFedEx
     *
     * @param \DateTime $shipDateFedEx
     * @return ItemFulfillment
     */
    public function setShipDateFedEx(\DateTime $shipDateFedEx) {
        $this->shipDateFedEx = $shipDateFedEx->format('c');
        return $this;
    }

    /**
     * Get shipDateFedEx
     *
     * @return \DateTime
     */
    public function getShipDateFedEx() {
        return new \DateTime($this->shipDateFedEx);
    }


    /**
     * Set homeDeliveryTypeFedEx
     *
     * @param ItemFulfillmentHomeDeliveryTypeFedEx $homeDeliveryTypeFedEx
     * @return ItemFulfillment
     */
    public function setHomeDeliveryTypeFedEx(ItemFulfillmentHomeDeliveryTypeFedEx $homeDeliveryTypeFedEx) {
        $this->homeDeliveryTypeFedEx = $homeDeliveryTypeFedEx;
        return $this;
    }

    /**
     * Get homeDeliveryTypeFedEx
     *
     * @return ItemFulfillmentHomeDeliveryTypeFedEx
     */
    public function getHomeDeliveryTypeFedEx() {
        return $this->homeDeliveryTypeFedEx;
    }


    /**
     * Set homeDeliveryDateFedEx
     *
     * @param \DateTime $homeDeliveryDateFedEx
     * @return ItemFulfillment
     */
    public function setHomeDeliveryDateFedEx(\DateTime $homeDeliveryDateFedEx) {
        $this->homeDeliveryDateFedEx = $homeDeliveryDateFedEx->format('c');
        return $this;
    }

    /**
     * Get homeDeliveryDateFedEx
     *
     * @return \DateTime
     */
    public function getHomeDeliveryDateFedEx() {
        return new \DateTime($this->homeDeliveryDateFedEx);
    }


    /**
     * Set bookingConfirmationNumFedEx
     *
     * @param string $bookingConfirmationNumFedEx
     * @return ItemFulfillment
     */
    public function setBookingConfirmationNumFedEx($bookingConfirmationNumFedEx) {
        $this->bookingConfirmationNumFedEx = $bookingConfirmationNumFedEx;
        return $this;
    }

    /**
     * Get bookingConfirmationNumFedEx
     *
     * @return string
     */
    public function getBookingConfirmationNumFedEx() {
        return $this->bookingConfirmationNumFedEx;
    }


    /**
     * Set intlExemptionNumFedEx
     *
     * @param string $intlExemptionNumFedEx
     * @return ItemFulfillment
     */
    public function setIntlExemptionNumFedEx($intlExemptionNumFedEx) {
        $this->intlExemptionNumFedEx = $intlExemptionNumFedEx;
        return $this;
    }

    /**
     * Get intlExemptionNumFedEx
     *
     * @return string
     */
    public function getIntlExemptionNumFedEx() {
        return $this->intlExemptionNumFedEx;
    }


    /**
     * Set b13aFilingOptionFedEx
     *
     * @param ItemFulfillmentB13AFilingOptionFedEx $b13aFilingOptionFedEx
     * @return ItemFulfillment
     */
    public function setB13aFilingOptionFedEx(ItemFulfillmentB13AFilingOptionFedEx $b13aFilingOptionFedEx) {
        $this->b13aFilingOptionFedEx = $b13aFilingOptionFedEx;
        return $this;
    }

    /**
     * Get b13aFilingOptionFedEx
     *
     * @return ItemFulfillmentB13AFilingOptionFedEx
     */
    public function getB13aFilingOptionFedEx() {
        return $this->b13aFilingOptionFedEx;
    }


    /**
     * Set b13aStatementDataFedEx
     *
     * @param string $b13aStatementDataFedEx
     * @return ItemFulfillment
     */
    public function setB13aStatementDataFedEx($b13aStatementDataFedEx) {
        $this->b13aStatementDataFedEx = $b13aStatementDataFedEx;
        return $this;
    }

    /**
     * Get b13aStatementDataFedEx
     *
     * @return string
     */
    public function getB13aStatementDataFedEx() {
        return $this->b13aStatementDataFedEx;
    }


    /**
     * Set thirdPartyAcctFedEx
     *
     * @param string $thirdPartyAcctFedEx
     * @return ItemFulfillment
     */
    public function setThirdPartyAcctFedEx($thirdPartyAcctFedEx) {
        $this->thirdPartyAcctFedEx = $thirdPartyAcctFedEx;
        return $this;
    }

    /**
     * Get thirdPartyAcctFedEx
     *
     * @return string
     */
    public function getThirdPartyAcctFedEx() {
        return $this->thirdPartyAcctFedEx;
    }


    /**
     * Set thirdPartyCountryFedEx
     *
     * @param Country $thirdPartyCountryFedEx
     * @return ItemFulfillment
     */
    public function setThirdPartyCountryFedEx(Country $thirdPartyCountryFedEx) {
        $this->thirdPartyCountryFedEx = $thirdPartyCountryFedEx;
        return $this;
    }

    /**
     * Get thirdPartyCountryFedEx
     *
     * @return Country
     */
    public function getThirdPartyCountryFedEx() {
        return $this->thirdPartyCountryFedEx;
    }


    /**
     * Set thirdPartyTypeFedEx
     *
     * @param ItemFulfillmentThirdPartyTypeFedEx $thirdPartyTypeFedEx
     * @return ItemFulfillment
     */
    public function setThirdPartyTypeFedEx(ItemFulfillmentThirdPartyTypeFedEx $thirdPartyTypeFedEx) {
        $this->thirdPartyTypeFedEx = $thirdPartyTypeFedEx;
        return $this;
    }

    /**
     * Get thirdPartyTypeFedEx
     *
     * @return ItemFulfillmentThirdPartyTypeFedEx
     */
    public function getThirdPartyTypeFedEx() {
        return $this->thirdPartyTypeFedEx;
    }


    /**
     * Set shipmentWeightFedEx
     *
     * @param float $shipmentWeightFedEx
     * @return ItemFulfillment
     */
    public function setShipmentWeightFedEx($shipmentWeightFedEx) {
        $this->shipmentWeightFedEx = $shipmentWeightFedEx;
        return $this;
    }

    /**
     * Get shipmentWeightFedEx
     *
     * @return float
     */
    public function getShipmentWeightFedEx() {
        return $this->shipmentWeightFedEx;
    }


    /**
     * Set termsOfSaleFedEx
     *
     * @param ItemFulfillmentTermsOfSaleFedEx $termsOfSaleFedEx
     * @return ItemFulfillment
     */
    public function setTermsOfSaleFedEx(ItemFulfillmentTermsOfSaleFedEx $termsOfSaleFedEx) {
        $this->termsOfSaleFedEx = $termsOfSaleFedEx;
        return $this;
    }

    /**
     * Get termsOfSaleFedEx
     *
     * @return ItemFulfillmentTermsOfSaleFedEx
     */
    public function getTermsOfSaleFedEx() {
        return $this->termsOfSaleFedEx;
    }


    /**
     * Set termsFreightChargeFedEx
     *
     * @param float $termsFreightChargeFedEx
     * @return ItemFulfillment
     */
    public function setTermsFreightChargeFedEx($termsFreightChargeFedEx) {
        $this->termsFreightChargeFedEx = $termsFreightChargeFedEx;
        return $this;
    }

    /**
     * Get termsFreightChargeFedEx
     *
     * @return float
     */
    public function getTermsFreightChargeFedEx() {
        return $this->termsFreightChargeFedEx;
    }


    /**
     * Set termsInsuranceChargeFedEx
     *
     * @param float $termsInsuranceChargeFedEx
     * @return ItemFulfillment
     */
    public function setTermsInsuranceChargeFedEx($termsInsuranceChargeFedEx) {
        $this->termsInsuranceChargeFedEx = $termsInsuranceChargeFedEx;
        return $this;
    }

    /**
     * Get termsInsuranceChargeFedEx
     *
     * @return float
     */
    public function getTermsInsuranceChargeFedEx() {
        return $this->termsInsuranceChargeFedEx;
    }


    /**
     * Set insideDeliveryFedEx
     *
     * @param boolean $insideDeliveryFedEx
     * @return ItemFulfillment
     */
    public function setInsideDeliveryFedEx($insideDeliveryFedEx) {
        $this->insideDeliveryFedEx = $insideDeliveryFedEx;
        return $this;
    }

    /**
     * Get insideDeliveryFedEx
     *
     * @return boolean
     */
    public function getInsideDeliveryFedEx() {
        return $this->insideDeliveryFedEx;
    }


    /**
     * Set insidePickupFedEx
     *
     * @param boolean $insidePickupFedEx
     * @return ItemFulfillment
     */
    public function setInsidePickupFedEx($insidePickupFedEx) {
        $this->insidePickupFedEx = $insidePickupFedEx;
        return $this;
    }

    /**
     * Get insidePickupFedEx
     *
     * @return boolean
     */
    public function getInsidePickupFedEx() {
        return $this->insidePickupFedEx;
    }


    /**
     * Set ancillaryEndorsementFedEx
     *
     * @param ItemFulfillmentAncillaryEndorsementFedEx $ancillaryEndorsementFedEx
     * @return ItemFulfillment
     */
    public function setAncillaryEndorsementFedEx(ItemFulfillmentAncillaryEndorsementFedEx $ancillaryEndorsementFedEx) {
        $this->ancillaryEndorsementFedEx = $ancillaryEndorsementFedEx;
        return $this;
    }

    /**
     * Get ancillaryEndorsementFedEx
     *
     * @return ItemFulfillmentAncillaryEndorsementFedEx
     */
    public function getAncillaryEndorsementFedEx() {
        return $this->ancillaryEndorsementFedEx;
    }


    /**
     * Set holdAtLocationFedEx
     *
     * @param boolean $holdAtLocationFedEx
     * @return ItemFulfillment
     */
    public function setHoldAtLocationFedEx($holdAtLocationFedEx) {
        $this->holdAtLocationFedEx = $holdAtLocationFedEx;
        return $this;
    }

    /**
     * Get holdAtLocationFedEx
     *
     * @return boolean
     */
    public function getHoldAtLocationFedEx() {
        return $this->holdAtLocationFedEx;
    }


    /**
     * Set halPhoneFedEx
     *
     * @param string $halPhoneFedEx
     * @return ItemFulfillment
     */
    public function setHalPhoneFedEx($halPhoneFedEx) {
        $this->halPhoneFedEx = $halPhoneFedEx;
        return $this;
    }

    /**
     * Get halPhoneFedEx
     *
     * @return string
     */
    public function getHalPhoneFedEx() {
        return $this->halPhoneFedEx;
    }


    /**
     * Set halAddr1FedEx
     *
     * @param string $halAddr1FedEx
     * @return ItemFulfillment
     */
    public function setHalAddr1FedEx($halAddr1FedEx) {
        $this->halAddr1FedEx = $halAddr1FedEx;
        return $this;
    }

    /**
     * Get halAddr1FedEx
     *
     * @return string
     */
    public function getHalAddr1FedEx() {
        return $this->halAddr1FedEx;
    }


    /**
     * Set halAddr2FedEx
     *
     * @param string $halAddr2FedEx
     * @return ItemFulfillment
     */
    public function setHalAddr2FedEx($halAddr2FedEx) {
        $this->halAddr2FedEx = $halAddr2FedEx;
        return $this;
    }

    /**
     * Get halAddr2FedEx
     *
     * @return string
     */
    public function getHalAddr2FedEx() {
        return $this->halAddr2FedEx;
    }


    /**
     * Set halAddr3FedEx
     *
     * @param string $halAddr3FedEx
     * @return ItemFulfillment
     */
    public function setHalAddr3FedEx($halAddr3FedEx) {
        $this->halAddr3FedEx = $halAddr3FedEx;
        return $this;
    }

    /**
     * Get halAddr3FedEx
     *
     * @return string
     */
    public function getHalAddr3FedEx() {
        return $this->halAddr3FedEx;
    }


    /**
     * Set halCityFedEx
     *
     * @param string $halCityFedEx
     * @return ItemFulfillment
     */
    public function setHalCityFedEx($halCityFedEx) {
        $this->halCityFedEx = $halCityFedEx;
        return $this;
    }

    /**
     * Get halCityFedEx
     *
     * @return string
     */
    public function getHalCityFedEx() {
        return $this->halCityFedEx;
    }


    /**
     * Set halZipFedEx
     *
     * @param string $halZipFedEx
     * @return ItemFulfillment
     */
    public function setHalZipFedEx($halZipFedEx) {
        $this->halZipFedEx = $halZipFedEx;
        return $this;
    }

    /**
     * Get halZipFedEx
     *
     * @return string
     */
    public function getHalZipFedEx() {
        return $this->halZipFedEx;
    }


    /**
     * Set halStateFedEx
     *
     * @param string $halStateFedEx
     * @return ItemFulfillment
     */
    public function setHalStateFedEx($halStateFedEx) {
        $this->halStateFedEx = $halStateFedEx;
        return $this;
    }

    /**
     * Get halStateFedEx
     *
     * @return string
     */
    public function getHalStateFedEx() {
        return $this->halStateFedEx;
    }


    /**
     * Set halCountryFedEx
     *
     * @param string $halCountryFedEx
     * @return ItemFulfillment
     */
    public function setHalCountryFedEx($halCountryFedEx) {
        $this->halCountryFedEx = $halCountryFedEx;
        return $this;
    }

    /**
     * Get halCountryFedEx
     *
     * @return string
     */
    public function getHalCountryFedEx() {
        return $this->halCountryFedEx;
    }


    /**
     * Set hazmatTypeFedEx
     *
     * @param ItemFulfillmentHazmatTypeFedEx $hazmatTypeFedEx
     * @return ItemFulfillment
     */
    public function setHazmatTypeFedEx(ItemFulfillmentHazmatTypeFedEx $hazmatTypeFedEx) {
        $this->hazmatTypeFedEx = $hazmatTypeFedEx;
        return $this;
    }

    /**
     * Get hazmatTypeFedEx
     *
     * @return ItemFulfillmentHazmatTypeFedEx
     */
    public function getHazmatTypeFedEx() {
        return $this->hazmatTypeFedEx;
    }


    /**
     * Set accessibilityTypeFedEx
     *
     * @param ItemFulfillmentAccessibilityTypeFedEx $accessibilityTypeFedEx
     * @return ItemFulfillment
     */
    public function setAccessibilityTypeFedEx(ItemFulfillmentAccessibilityTypeFedEx $accessibilityTypeFedEx) {
        $this->accessibilityTypeFedEx = $accessibilityTypeFedEx;
        return $this;
    }

    /**
     * Get accessibilityTypeFedEx
     *
     * @return ItemFulfillmentAccessibilityTypeFedEx
     */
    public function getAccessibilityTypeFedEx() {
        return $this->accessibilityTypeFedEx;
    }


    /**
     * Set isCargoAircraftOnlyFedEx
     *
     * @param boolean $isCargoAircraftOnlyFedEx
     * @return ItemFulfillment
     */
    public function setIsCargoAircraftOnlyFedEx($isCargoAircraftOnlyFedEx) {
        $this->isCargoAircraftOnlyFedEx = $isCargoAircraftOnlyFedEx;
        return $this;
    }

    /**
     * Get isCargoAircraftOnlyFedEx
     *
     * @return boolean
     */
    public function getIsCargoAircraftOnlyFedEx() {
        return $this->isCargoAircraftOnlyFedEx;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return ItemFulfillment
     */
    public function setTranDate(\DateTime $tranDate) {
        $this->tranDate = $tranDate->format('c');
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return \DateTime
     */
    public function getTranDate() {
        return new \DateTime($this->tranDate);
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return ItemFulfillment
     */
    public function setTranId($tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return string
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set generateIntegratedShipperLabel
     *
     * @param boolean $generateIntegratedShipperLabel
     * @return ItemFulfillment
     */
    public function setGenerateIntegratedShipperLabel($generateIntegratedShipperLabel) {
        $this->generateIntegratedShipperLabel = $generateIntegratedShipperLabel;
        return $this;
    }

    /**
     * Get generateIntegratedShipperLabel
     *
     * @return boolean
     */
    public function getGenerateIntegratedShipperLabel() {
        return $this->generateIntegratedShipperLabel;
    }


    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return ItemFulfillment
     */
    public function setShippingCost($shippingCost) {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return float
     */
    public function getShippingCost() {
        return $this->shippingCost;
    }


    /**
     * Set handlingCost
     *
     * @param float $handlingCost
     * @return ItemFulfillment
     */
    public function setHandlingCost($handlingCost) {
        $this->handlingCost = $handlingCost;
        return $this;
    }

    /**
     * Get handlingCost
     *
     * @return float
     */
    public function getHandlingCost() {
        return $this->handlingCost;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return ItemFulfillment
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set packageList
     *
     * @param ItemFulfillmentPackageList $packageList
     * @return ItemFulfillment
     */
    public function setPackageList(ItemFulfillmentPackageList $packageList) {
        $this->packageList = $packageList;
        return $this;
    }

    /**
     * Get packageList
     *
     * @return ItemFulfillmentPackageList
     */
    public function getPackageList() {
        return $this->packageList;
    }


    /**
     * Set packageUpsList
     *
     * @param ItemFulfillmentPackageUpsList $packageUpsList
     * @return ItemFulfillment
     */
    public function setPackageUpsList(ItemFulfillmentPackageUpsList $packageUpsList) {
        $this->packageUpsList = $packageUpsList;
        return $this;
    }

    /**
     * Get packageUpsList
     *
     * @return ItemFulfillmentPackageUpsList
     */
    public function getPackageUpsList() {
        return $this->packageUpsList;
    }


    /**
     * Set packageUspsList
     *
     * @param ItemFulfillmentPackageUspsList $packageUspsList
     * @return ItemFulfillment
     */
    public function setPackageUspsList(ItemFulfillmentPackageUspsList $packageUspsList) {
        $this->packageUspsList = $packageUspsList;
        return $this;
    }

    /**
     * Get packageUspsList
     *
     * @return ItemFulfillmentPackageUspsList
     */
    public function getPackageUspsList() {
        return $this->packageUspsList;
    }


    /**
     * Set packageFedExList
     *
     * @param ItemFulfillmentPackageFedExList $packageFedExList
     * @return ItemFulfillment
     */
    public function setPackageFedExList(ItemFulfillmentPackageFedExList $packageFedExList) {
        $this->packageFedExList = $packageFedExList;
        return $this;
    }

    /**
     * Get packageFedExList
     *
     * @return ItemFulfillmentPackageFedExList
     */
    public function getPackageFedExList() {
        return $this->packageFedExList;
    }


    /**
     * Set itemList
     *
     * @param ItemFulfillmentItemList $itemList
     * @return ItemFulfillment
     */
    public function setItemList(ItemFulfillmentItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return ItemFulfillmentItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set shipGroupList
     *
     * @param ItemFulfillmentShipGroupList $shipGroupList
     * @return ItemFulfillment
     */
    public function setShipGroupList(ItemFulfillmentShipGroupList $shipGroupList) {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * Get shipGroupList
     *
     * @return ItemFulfillmentShipGroupList
     */
    public function getShipGroupList() {
        return $this->shipGroupList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ItemFulfillment
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return ItemFulfillment
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return ItemFulfillment
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}