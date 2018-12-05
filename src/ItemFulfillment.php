<?php

namespace Nzolt\NetSuite;

class ItemFulfillment extends Record
{

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var RecordRef $requestedBy
     */
    protected $requestedBy = null;

    /**
     * @var int $createdFromShipGroup
     */
    protected $createdFromShipGroup = null;

    /**
     * @var RecordRef $partner
     */
    protected $partner = null;

    /**
     * @var Address $shippingAddress
     */
    protected $shippingAddress = null;

    /**
     * @var \DateTime $pickedDate
     */
    protected $pickedDate = null;

    /**
     * @var \DateTime $packedDate
     */
    protected $packedDate = null;

    /**
     * @var \DateTime $shippedDate
     */
    protected $shippedDate = null;

    /**
     * @var boolean $shipIsResidential
     */
    protected $shipIsResidential = null;

    /**
     * @var RecordRef $shipAddressList
     */
    protected $shipAddressList = null;

    /**
     * @var ItemFulfillmentShipStatus $shipStatus
     */
    protected $shipStatus = null;

    /**
     * @var boolean $saturdayDeliveryUps
     */
    protected $saturdayDeliveryUps = null;

    /**
     * @var boolean $sendShipNotifyEmailUps
     */
    protected $sendShipNotifyEmailUps = null;

    /**
     * @var boolean $sendBackupEmailUps
     */
    protected $sendBackupEmailUps = null;

    /**
     * @var string $shipNotifyEmailAddressUps
     */
    protected $shipNotifyEmailAddressUps = null;

    /**
     * @var string $shipNotifyEmailAddress2Ups
     */
    protected $shipNotifyEmailAddress2Ups = null;

    /**
     * @var string $backupEmailAddressUps
     */
    protected $backupEmailAddressUps = null;

    /**
     * @var string $shipNotifyEmailMessageUps
     */
    protected $shipNotifyEmailMessageUps = null;

    /**
     * @var string $thirdPartyAcctUps
     */
    protected $thirdPartyAcctUps = null;

    /**
     * @var string $thirdPartyZipcodeUps
     */
    protected $thirdPartyZipcodeUps = null;

    /**
     * @var Country $thirdPartyCountryUps
     */
    protected $thirdPartyCountryUps = null;

    /**
     * @var ItemFulfillmentThirdPartyTypeUps $thirdPartyTypeUps
     */
    protected $thirdPartyTypeUps = null;

    /**
     * @var boolean $partiesToTransactionUps
     */
    protected $partiesToTransactionUps = null;

    /**
     * @var ItemFulfillmentExportTypeUps $exportTypeUps
     */
    protected $exportTypeUps = null;

    /**
     * @var ItemFulfillmentMethodOfTransportUps $methodOfTransportUps
     */
    protected $methodOfTransportUps = null;

    /**
     * @var string $carrierIdUps
     */
    protected $carrierIdUps = null;

    /**
     * @var string $entryNumberUps
     */
    protected $entryNumberUps = null;

    /**
     * @var string $inbondCodeUps
     */
    protected $inbondCodeUps = null;

    /**
     * @var boolean $isRoutedExportTransactionUps
     */
    protected $isRoutedExportTransactionUps = null;

    /**
     * @var string $licenseNumberUps
     */
    protected $licenseNumberUps = null;

    /**
     * @var \DateTime $licenseDateUps
     */
    protected $licenseDateUps = null;

    /**
     * @var ItemFulfillmentLicenseExceptionUps $licenseExceptionUps
     */
    protected $licenseExceptionUps = null;

    /**
     * @var string $eccNumberUps
     */
    protected $eccNumberUps = null;

    /**
     * @var string $recipientTaxIdUps
     */
    protected $recipientTaxIdUps = null;

    /**
     * @var \DateTime $blanketStartDateUps
     */
    protected $blanketStartDateUps = null;

    /**
     * @var \DateTime $blanketEndDateUps
     */
    protected $blanketEndDateUps = null;

    /**
     * @var float $shipmentWeightUps
     */
    protected $shipmentWeightUps = null;

    /**
     * @var boolean $saturdayDeliveryFedEx
     */
    protected $saturdayDeliveryFedEx = null;

    /**
     * @var boolean $saturdayPickupFedex
     */
    protected $saturdayPickupFedex = null;

    /**
     * @var boolean $sendShipNotifyEmailFedEx
     */
    protected $sendShipNotifyEmailFedEx = null;

    /**
     * @var boolean $sendBackupEmailFedEx
     */
    protected $sendBackupEmailFedEx = null;

    /**
     * @var boolean $signatureHomeDeliveryFedEx
     */
    protected $signatureHomeDeliveryFedEx = null;

    /**
     * @var string $shipNotifyEmailAddressFedEx
     */
    protected $shipNotifyEmailAddressFedEx = null;

    /**
     * @var string $backupEmailAddressFedEx
     */
    protected $backupEmailAddressFedEx = null;

    /**
     * @var \DateTime $shipDateFedEx
     */
    protected $shipDateFedEx = null;

    /**
     * @var ItemFulfillmentHomeDeliveryTypeFedEx $homeDeliveryTypeFedEx
     */
    protected $homeDeliveryTypeFedEx = null;

    /**
     * @var \DateTime $homeDeliveryDateFedEx
     */
    protected $homeDeliveryDateFedEx = null;

    /**
     * @var string $bookingConfirmationNumFedEx
     */
    protected $bookingConfirmationNumFedEx = null;

    /**
     * @var string $intlExemptionNumFedEx
     */
    protected $intlExemptionNumFedEx = null;

    /**
     * @var ItemFulfillmentB13AFilingOptionFedEx $b13aFilingOptionFedEx
     */
    protected $b13aFilingOptionFedEx = null;

    /**
     * @var string $b13aStatementDataFedEx
     */
    protected $b13aStatementDataFedEx = null;

    /**
     * @var string $thirdPartyAcctFedEx
     */
    protected $thirdPartyAcctFedEx = null;

    /**
     * @var Country $thirdPartyCountryFedEx
     */
    protected $thirdPartyCountryFedEx = null;

    /**
     * @var ItemFulfillmentThirdPartyTypeFedEx $thirdPartyTypeFedEx
     */
    protected $thirdPartyTypeFedEx = null;

    /**
     * @var float $shipmentWeightFedEx
     */
    protected $shipmentWeightFedEx = null;

    /**
     * @var ItemFulfillmentTermsOfSaleFedEx $termsOfSaleFedEx
     */
    protected $termsOfSaleFedEx = null;

    /**
     * @var float $termsFreightChargeFedEx
     */
    protected $termsFreightChargeFedEx = null;

    /**
     * @var float $termsInsuranceChargeFedEx
     */
    protected $termsInsuranceChargeFedEx = null;

    /**
     * @var boolean $insideDeliveryFedEx
     */
    protected $insideDeliveryFedEx = null;

    /**
     * @var boolean $insidePickupFedEx
     */
    protected $insidePickupFedEx = null;

    /**
     * @var ItemFulfillmentAncillaryEndorsementFedEx $ancillaryEndorsementFedEx
     */
    protected $ancillaryEndorsementFedEx = null;

    /**
     * @var boolean $holdAtLocationFedEx
     */
    protected $holdAtLocationFedEx = null;

    /**
     * @var string $halPhoneFedEx
     */
    protected $halPhoneFedEx = null;

    /**
     * @var string $halAddr1FedEx
     */
    protected $halAddr1FedEx = null;

    /**
     * @var string $halAddr2FedEx
     */
    protected $halAddr2FedEx = null;

    /**
     * @var string $halAddr3FedEx
     */
    protected $halAddr3FedEx = null;

    /**
     * @var string $halCityFedEx
     */
    protected $halCityFedEx = null;

    /**
     * @var string $halZipFedEx
     */
    protected $halZipFedEx = null;

    /**
     * @var string $halStateFedEx
     */
    protected $halStateFedEx = null;

    /**
     * @var string $halCountryFedEx
     */
    protected $halCountryFedEx = null;

    /**
     * @var ItemFulfillmentHazmatTypeFedEx $hazmatTypeFedEx
     */
    protected $hazmatTypeFedEx = null;

    /**
     * @var ItemFulfillmentAccessibilityTypeFedEx $accessibilityTypeFedEx
     */
    protected $accessibilityTypeFedEx = null;

    /**
     * @var boolean $isCargoAircraftOnlyFedEx
     */
    protected $isCargoAircraftOnlyFedEx = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $shipMethod
     */
    protected $shipMethod = null;

    /**
     * @var boolean $generateIntegratedShipperLabel
     */
    protected $generateIntegratedShipperLabel = null;

    /**
     * @var float $shippingCost
     */
    protected $shippingCost = null;

    /**
     * @var float $handlingCost
     */
    protected $handlingCost = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $transferLocation
     */
    protected $transferLocation = null;

    /**
     * @var ItemFulfillmentPackageList $packageList
     */
    protected $packageList = null;

    /**
     * @var ItemFulfillmentPackageUpsList $packageUpsList
     */
    protected $packageUpsList = null;

    /**
     * @var ItemFulfillmentPackageUspsList $packageUspsList
     */
    protected $packageUspsList = null;

    /**
     * @var ItemFulfillmentPackageFedExList $packageFedExList
     */
    protected $packageFedExList = null;

    /**
     * @var ItemFulfillmentItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param RecordRef $createdFrom
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRequestedBy()
    {
      return $this->requestedBy;
    }

    /**
     * @param RecordRef $requestedBy
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setRequestedBy($requestedBy)
    {
      $this->requestedBy = $requestedBy;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreatedFromShipGroup()
    {
      return $this->createdFromShipGroup;
    }

    /**
     * @param int $createdFromShipGroup
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setCreatedFromShipGroup($createdFromShipGroup)
    {
      $this->createdFromShipGroup = $createdFromShipGroup;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param RecordRef $partner
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
      return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShippingAddress($shippingAddress)
    {
      $this->shippingAddress = $shippingAddress;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickedDate()
    {
      if ($this->pickedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->pickedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $pickedDate
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPickedDate(\DateTime $pickedDate = null)
    {
      if ($pickedDate == null) {
       $this->pickedDate = null;
      } else {
        $this->pickedDate = $pickedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPackedDate()
    {
      if ($this->packedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->packedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $packedDate
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPackedDate(\DateTime $packedDate = null)
    {
      if ($packedDate == null) {
       $this->packedDate = null;
      } else {
        $this->packedDate = $packedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippedDate()
    {
      if ($this->shippedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->shippedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $shippedDate
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShippedDate(\DateTime $shippedDate = null)
    {
      if ($shippedDate == null) {
       $this->shippedDate = null;
      } else {
        $this->shippedDate = $shippedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipIsResidential()
    {
      return $this->shipIsResidential;
    }

    /**
     * @param boolean $shipIsResidential
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipIsResidential($shipIsResidential)
    {
      $this->shipIsResidential = $shipIsResidential;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddressList()
    {
      return $this->shipAddressList;
    }

    /**
     * @param RecordRef $shipAddressList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipAddressList($shipAddressList)
    {
      $this->shipAddressList = $shipAddressList;
      return $this;
    }

    /**
     * @return ItemFulfillmentShipStatus
     */
    public function getShipStatus()
    {
      return $this->shipStatus;
    }

    /**
     * @param ItemFulfillmentShipStatus $shipStatus
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipStatus($shipStatus)
    {
      $this->shipStatus = $shipStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturdayDeliveryUps()
    {
      return $this->saturdayDeliveryUps;
    }

    /**
     * @param boolean $saturdayDeliveryUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSaturdayDeliveryUps($saturdayDeliveryUps)
    {
      $this->saturdayDeliveryUps = $saturdayDeliveryUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendShipNotifyEmailUps()
    {
      return $this->sendShipNotifyEmailUps;
    }

    /**
     * @param boolean $sendShipNotifyEmailUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSendShipNotifyEmailUps($sendShipNotifyEmailUps)
    {
      $this->sendShipNotifyEmailUps = $sendShipNotifyEmailUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendBackupEmailUps()
    {
      return $this->sendBackupEmailUps;
    }

    /**
     * @param boolean $sendBackupEmailUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSendBackupEmailUps($sendBackupEmailUps)
    {
      $this->sendBackupEmailUps = $sendBackupEmailUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotifyEmailAddressUps()
    {
      return $this->shipNotifyEmailAddressUps;
    }

    /**
     * @param string $shipNotifyEmailAddressUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipNotifyEmailAddressUps($shipNotifyEmailAddressUps)
    {
      $this->shipNotifyEmailAddressUps = $shipNotifyEmailAddressUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotifyEmailAddress2Ups()
    {
      return $this->shipNotifyEmailAddress2Ups;
    }

    /**
     * @param string $shipNotifyEmailAddress2Ups
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipNotifyEmailAddress2Ups($shipNotifyEmailAddress2Ups)
    {
      $this->shipNotifyEmailAddress2Ups = $shipNotifyEmailAddress2Ups;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackupEmailAddressUps()
    {
      return $this->backupEmailAddressUps;
    }

    /**
     * @param string $backupEmailAddressUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setBackupEmailAddressUps($backupEmailAddressUps)
    {
      $this->backupEmailAddressUps = $backupEmailAddressUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotifyEmailMessageUps()
    {
      return $this->shipNotifyEmailMessageUps;
    }

    /**
     * @param string $shipNotifyEmailMessageUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipNotifyEmailMessageUps($shipNotifyEmailMessageUps)
    {
      $this->shipNotifyEmailMessageUps = $shipNotifyEmailMessageUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAcctUps()
    {
      return $this->thirdPartyAcctUps;
    }

    /**
     * @param string $thirdPartyAcctUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setThirdPartyAcctUps($thirdPartyAcctUps)
    {
      $this->thirdPartyAcctUps = $thirdPartyAcctUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyZipcodeUps()
    {
      return $this->thirdPartyZipcodeUps;
    }

    /**
     * @param string $thirdPartyZipcodeUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setThirdPartyZipcodeUps($thirdPartyZipcodeUps)
    {
      $this->thirdPartyZipcodeUps = $thirdPartyZipcodeUps;
      return $this;
    }

    /**
     * @return Country
     */
    public function getThirdPartyCountryUps()
    {
      return $this->thirdPartyCountryUps;
    }

    /**
     * @param Country $thirdPartyCountryUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setThirdPartyCountryUps($thirdPartyCountryUps)
    {
      $this->thirdPartyCountryUps = $thirdPartyCountryUps;
      return $this;
    }

    /**
     * @return ItemFulfillmentThirdPartyTypeUps
     */
    public function getThirdPartyTypeUps()
    {
      return $this->thirdPartyTypeUps;
    }

    /**
     * @param ItemFulfillmentThirdPartyTypeUps $thirdPartyTypeUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setThirdPartyTypeUps($thirdPartyTypeUps)
    {
      $this->thirdPartyTypeUps = $thirdPartyTypeUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPartiesToTransactionUps()
    {
      return $this->partiesToTransactionUps;
    }

    /**
     * @param boolean $partiesToTransactionUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPartiesToTransactionUps($partiesToTransactionUps)
    {
      $this->partiesToTransactionUps = $partiesToTransactionUps;
      return $this;
    }

    /**
     * @return ItemFulfillmentExportTypeUps
     */
    public function getExportTypeUps()
    {
      return $this->exportTypeUps;
    }

    /**
     * @param ItemFulfillmentExportTypeUps $exportTypeUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setExportTypeUps($exportTypeUps)
    {
      $this->exportTypeUps = $exportTypeUps;
      return $this;
    }

    /**
     * @return ItemFulfillmentMethodOfTransportUps
     */
    public function getMethodOfTransportUps()
    {
      return $this->methodOfTransportUps;
    }

    /**
     * @param ItemFulfillmentMethodOfTransportUps $methodOfTransportUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setMethodOfTransportUps($methodOfTransportUps)
    {
      $this->methodOfTransportUps = $methodOfTransportUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierIdUps()
    {
      return $this->carrierIdUps;
    }

    /**
     * @param string $carrierIdUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setCarrierIdUps($carrierIdUps)
    {
      $this->carrierIdUps = $carrierIdUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntryNumberUps()
    {
      return $this->entryNumberUps;
    }

    /**
     * @param string $entryNumberUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setEntryNumberUps($entryNumberUps)
    {
      $this->entryNumberUps = $entryNumberUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getInbondCodeUps()
    {
      return $this->inbondCodeUps;
    }

    /**
     * @param string $inbondCodeUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setInbondCodeUps($inbondCodeUps)
    {
      $this->inbondCodeUps = $inbondCodeUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRoutedExportTransactionUps()
    {
      return $this->isRoutedExportTransactionUps;
    }

    /**
     * @param boolean $isRoutedExportTransactionUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setIsRoutedExportTransactionUps($isRoutedExportTransactionUps)
    {
      $this->isRoutedExportTransactionUps = $isRoutedExportTransactionUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseNumberUps()
    {
      return $this->licenseNumberUps;
    }

    /**
     * @param string $licenseNumberUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setLicenseNumberUps($licenseNumberUps)
    {
      $this->licenseNumberUps = $licenseNumberUps;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLicenseDateUps()
    {
      if ($this->licenseDateUps == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->licenseDateUps);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $licenseDateUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setLicenseDateUps(\DateTime $licenseDateUps = null)
    {
      if ($licenseDateUps == null) {
       $this->licenseDateUps = null;
      } else {
        $this->licenseDateUps = $licenseDateUps->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ItemFulfillmentLicenseExceptionUps
     */
    public function getLicenseExceptionUps()
    {
      return $this->licenseExceptionUps;
    }

    /**
     * @param ItemFulfillmentLicenseExceptionUps $licenseExceptionUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setLicenseExceptionUps($licenseExceptionUps)
    {
      $this->licenseExceptionUps = $licenseExceptionUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getEccNumberUps()
    {
      return $this->eccNumberUps;
    }

    /**
     * @param string $eccNumberUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setEccNumberUps($eccNumberUps)
    {
      $this->eccNumberUps = $eccNumberUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientTaxIdUps()
    {
      return $this->recipientTaxIdUps;
    }

    /**
     * @param string $recipientTaxIdUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setRecipientTaxIdUps($recipientTaxIdUps)
    {
      $this->recipientTaxIdUps = $recipientTaxIdUps;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBlanketStartDateUps()
    {
      if ($this->blanketStartDateUps == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->blanketStartDateUps);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $blanketStartDateUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setBlanketStartDateUps(\DateTime $blanketStartDateUps = null)
    {
      if ($blanketStartDateUps == null) {
       $this->blanketStartDateUps = null;
      } else {
        $this->blanketStartDateUps = $blanketStartDateUps->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBlanketEndDateUps()
    {
      if ($this->blanketEndDateUps == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->blanketEndDateUps);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $blanketEndDateUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setBlanketEndDateUps(\DateTime $blanketEndDateUps = null)
    {
      if ($blanketEndDateUps == null) {
       $this->blanketEndDateUps = null;
      } else {
        $this->blanketEndDateUps = $blanketEndDateUps->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getShipmentWeightUps()
    {
      return $this->shipmentWeightUps;
    }

    /**
     * @param float $shipmentWeightUps
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipmentWeightUps($shipmentWeightUps)
    {
      $this->shipmentWeightUps = $shipmentWeightUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturdayDeliveryFedEx()
    {
      return $this->saturdayDeliveryFedEx;
    }

    /**
     * @param boolean $saturdayDeliveryFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSaturdayDeliveryFedEx($saturdayDeliveryFedEx)
    {
      $this->saturdayDeliveryFedEx = $saturdayDeliveryFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturdayPickupFedex()
    {
      return $this->saturdayPickupFedex;
    }

    /**
     * @param boolean $saturdayPickupFedex
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSaturdayPickupFedex($saturdayPickupFedex)
    {
      $this->saturdayPickupFedex = $saturdayPickupFedex;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendShipNotifyEmailFedEx()
    {
      return $this->sendShipNotifyEmailFedEx;
    }

    /**
     * @param boolean $sendShipNotifyEmailFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSendShipNotifyEmailFedEx($sendShipNotifyEmailFedEx)
    {
      $this->sendShipNotifyEmailFedEx = $sendShipNotifyEmailFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendBackupEmailFedEx()
    {
      return $this->sendBackupEmailFedEx;
    }

    /**
     * @param boolean $sendBackupEmailFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSendBackupEmailFedEx($sendBackupEmailFedEx)
    {
      $this->sendBackupEmailFedEx = $sendBackupEmailFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSignatureHomeDeliveryFedEx()
    {
      return $this->signatureHomeDeliveryFedEx;
    }

    /**
     * @param boolean $signatureHomeDeliveryFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setSignatureHomeDeliveryFedEx($signatureHomeDeliveryFedEx)
    {
      $this->signatureHomeDeliveryFedEx = $signatureHomeDeliveryFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotifyEmailAddressFedEx()
    {
      return $this->shipNotifyEmailAddressFedEx;
    }

    /**
     * @param string $shipNotifyEmailAddressFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipNotifyEmailAddressFedEx($shipNotifyEmailAddressFedEx)
    {
      $this->shipNotifyEmailAddressFedEx = $shipNotifyEmailAddressFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackupEmailAddressFedEx()
    {
      return $this->backupEmailAddressFedEx;
    }

    /**
     * @param string $backupEmailAddressFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setBackupEmailAddressFedEx($backupEmailAddressFedEx)
    {
      $this->backupEmailAddressFedEx = $backupEmailAddressFedEx;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDateFedEx()
    {
      if ($this->shipDateFedEx == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->shipDateFedEx);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $shipDateFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipDateFedEx(\DateTime $shipDateFedEx = null)
    {
      if ($shipDateFedEx == null) {
       $this->shipDateFedEx = null;
      } else {
        $this->shipDateFedEx = $shipDateFedEx->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ItemFulfillmentHomeDeliveryTypeFedEx
     */
    public function getHomeDeliveryTypeFedEx()
    {
      return $this->homeDeliveryTypeFedEx;
    }

    /**
     * @param ItemFulfillmentHomeDeliveryTypeFedEx $homeDeliveryTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHomeDeliveryTypeFedEx($homeDeliveryTypeFedEx)
    {
      $this->homeDeliveryTypeFedEx = $homeDeliveryTypeFedEx;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHomeDeliveryDateFedEx()
    {
      if ($this->homeDeliveryDateFedEx == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->homeDeliveryDateFedEx);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $homeDeliveryDateFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHomeDeliveryDateFedEx(\DateTime $homeDeliveryDateFedEx = null)
    {
      if ($homeDeliveryDateFedEx == null) {
       $this->homeDeliveryDateFedEx = null;
      } else {
        $this->homeDeliveryDateFedEx = $homeDeliveryDateFedEx->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingConfirmationNumFedEx()
    {
      return $this->bookingConfirmationNumFedEx;
    }

    /**
     * @param string $bookingConfirmationNumFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setBookingConfirmationNumFedEx($bookingConfirmationNumFedEx)
    {
      $this->bookingConfirmationNumFedEx = $bookingConfirmationNumFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntlExemptionNumFedEx()
    {
      return $this->intlExemptionNumFedEx;
    }

    /**
     * @param string $intlExemptionNumFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setIntlExemptionNumFedEx($intlExemptionNumFedEx)
    {
      $this->intlExemptionNumFedEx = $intlExemptionNumFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentB13AFilingOptionFedEx
     */
    public function getB13aFilingOptionFedEx()
    {
      return $this->b13aFilingOptionFedEx;
    }

    /**
     * @param ItemFulfillmentB13AFilingOptionFedEx $b13aFilingOptionFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setB13aFilingOptionFedEx($b13aFilingOptionFedEx)
    {
      $this->b13aFilingOptionFedEx = $b13aFilingOptionFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getB13aStatementDataFedEx()
    {
      return $this->b13aStatementDataFedEx;
    }

    /**
     * @param string $b13aStatementDataFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setB13aStatementDataFedEx($b13aStatementDataFedEx)
    {
      $this->b13aStatementDataFedEx = $b13aStatementDataFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAcctFedEx()
    {
      return $this->thirdPartyAcctFedEx;
    }

    /**
     * @param string $thirdPartyAcctFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setThirdPartyAcctFedEx($thirdPartyAcctFedEx)
    {
      $this->thirdPartyAcctFedEx = $thirdPartyAcctFedEx;
      return $this;
    }

    /**
     * @return Country
     */
    public function getThirdPartyCountryFedEx()
    {
      return $this->thirdPartyCountryFedEx;
    }

    /**
     * @param Country $thirdPartyCountryFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setThirdPartyCountryFedEx($thirdPartyCountryFedEx)
    {
      $this->thirdPartyCountryFedEx = $thirdPartyCountryFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentThirdPartyTypeFedEx
     */
    public function getThirdPartyTypeFedEx()
    {
      return $this->thirdPartyTypeFedEx;
    }

    /**
     * @param ItemFulfillmentThirdPartyTypeFedEx $thirdPartyTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setThirdPartyTypeFedEx($thirdPartyTypeFedEx)
    {
      $this->thirdPartyTypeFedEx = $thirdPartyTypeFedEx;
      return $this;
    }

    /**
     * @return float
     */
    public function getShipmentWeightFedEx()
    {
      return $this->shipmentWeightFedEx;
    }

    /**
     * @param float $shipmentWeightFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipmentWeightFedEx($shipmentWeightFedEx)
    {
      $this->shipmentWeightFedEx = $shipmentWeightFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentTermsOfSaleFedEx
     */
    public function getTermsOfSaleFedEx()
    {
      return $this->termsOfSaleFedEx;
    }

    /**
     * @param ItemFulfillmentTermsOfSaleFedEx $termsOfSaleFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setTermsOfSaleFedEx($termsOfSaleFedEx)
    {
      $this->termsOfSaleFedEx = $termsOfSaleFedEx;
      return $this;
    }

    /**
     * @return float
     */
    public function getTermsFreightChargeFedEx()
    {
      return $this->termsFreightChargeFedEx;
    }

    /**
     * @param float $termsFreightChargeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setTermsFreightChargeFedEx($termsFreightChargeFedEx)
    {
      $this->termsFreightChargeFedEx = $termsFreightChargeFedEx;
      return $this;
    }

    /**
     * @return float
     */
    public function getTermsInsuranceChargeFedEx()
    {
      return $this->termsInsuranceChargeFedEx;
    }

    /**
     * @param float $termsInsuranceChargeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setTermsInsuranceChargeFedEx($termsInsuranceChargeFedEx)
    {
      $this->termsInsuranceChargeFedEx = $termsInsuranceChargeFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInsideDeliveryFedEx()
    {
      return $this->insideDeliveryFedEx;
    }

    /**
     * @param boolean $insideDeliveryFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setInsideDeliveryFedEx($insideDeliveryFedEx)
    {
      $this->insideDeliveryFedEx = $insideDeliveryFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInsidePickupFedEx()
    {
      return $this->insidePickupFedEx;
    }

    /**
     * @param boolean $insidePickupFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setInsidePickupFedEx($insidePickupFedEx)
    {
      $this->insidePickupFedEx = $insidePickupFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentAncillaryEndorsementFedEx
     */
    public function getAncillaryEndorsementFedEx()
    {
      return $this->ancillaryEndorsementFedEx;
    }

    /**
     * @param ItemFulfillmentAncillaryEndorsementFedEx $ancillaryEndorsementFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setAncillaryEndorsementFedEx($ancillaryEndorsementFedEx)
    {
      $this->ancillaryEndorsementFedEx = $ancillaryEndorsementFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHoldAtLocationFedEx()
    {
      return $this->holdAtLocationFedEx;
    }

    /**
     * @param boolean $holdAtLocationFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHoldAtLocationFedEx($holdAtLocationFedEx)
    {
      $this->holdAtLocationFedEx = $holdAtLocationFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalPhoneFedEx()
    {
      return $this->halPhoneFedEx;
    }

    /**
     * @param string $halPhoneFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalPhoneFedEx($halPhoneFedEx)
    {
      $this->halPhoneFedEx = $halPhoneFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalAddr1FedEx()
    {
      return $this->halAddr1FedEx;
    }

    /**
     * @param string $halAddr1FedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalAddr1FedEx($halAddr1FedEx)
    {
      $this->halAddr1FedEx = $halAddr1FedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalAddr2FedEx()
    {
      return $this->halAddr2FedEx;
    }

    /**
     * @param string $halAddr2FedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalAddr2FedEx($halAddr2FedEx)
    {
      $this->halAddr2FedEx = $halAddr2FedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalAddr3FedEx()
    {
      return $this->halAddr3FedEx;
    }

    /**
     * @param string $halAddr3FedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalAddr3FedEx($halAddr3FedEx)
    {
      $this->halAddr3FedEx = $halAddr3FedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalCityFedEx()
    {
      return $this->halCityFedEx;
    }

    /**
     * @param string $halCityFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalCityFedEx($halCityFedEx)
    {
      $this->halCityFedEx = $halCityFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalZipFedEx()
    {
      return $this->halZipFedEx;
    }

    /**
     * @param string $halZipFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalZipFedEx($halZipFedEx)
    {
      $this->halZipFedEx = $halZipFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalStateFedEx()
    {
      return $this->halStateFedEx;
    }

    /**
     * @param string $halStateFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalStateFedEx($halStateFedEx)
    {
      $this->halStateFedEx = $halStateFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalCountryFedEx()
    {
      return $this->halCountryFedEx;
    }

    /**
     * @param string $halCountryFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHalCountryFedEx($halCountryFedEx)
    {
      $this->halCountryFedEx = $halCountryFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentHazmatTypeFedEx
     */
    public function getHazmatTypeFedEx()
    {
      return $this->hazmatTypeFedEx;
    }

    /**
     * @param ItemFulfillmentHazmatTypeFedEx $hazmatTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHazmatTypeFedEx($hazmatTypeFedEx)
    {
      $this->hazmatTypeFedEx = $hazmatTypeFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentAccessibilityTypeFedEx
     */
    public function getAccessibilityTypeFedEx()
    {
      return $this->accessibilityTypeFedEx;
    }

    /**
     * @param ItemFulfillmentAccessibilityTypeFedEx $accessibilityTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setAccessibilityTypeFedEx($accessibilityTypeFedEx)
    {
      $this->accessibilityTypeFedEx = $accessibilityTypeFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCargoAircraftOnlyFedEx()
    {
      return $this->isCargoAircraftOnlyFedEx;
    }

    /**
     * @param boolean $isCargoAircraftOnlyFedEx
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setIsCargoAircraftOnlyFedEx($isCargoAircraftOnlyFedEx)
    {
      $this->isCargoAircraftOnlyFedEx = $isCargoAircraftOnlyFedEx;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTranDate()
    {
      if ($this->tranDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->tranDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $tranDate
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setTranDate(\DateTime $tranDate = null)
    {
      if ($tranDate == null) {
       $this->tranDate = null;
      } else {
        $this->tranDate = $tranDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod()
    {
      return $this->shipMethod;
    }

    /**
     * @param RecordRef $shipMethod
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShipMethod($shipMethod)
    {
      $this->shipMethod = $shipMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenerateIntegratedShipperLabel()
    {
      return $this->generateIntegratedShipperLabel;
    }

    /**
     * @param boolean $generateIntegratedShipperLabel
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setGenerateIntegratedShipperLabel($generateIntegratedShipperLabel)
    {
      $this->generateIntegratedShipperLabel = $generateIntegratedShipperLabel;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
      return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setShippingCost($shippingCost)
    {
      $this->shippingCost = $shippingCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingCost()
    {
      return $this->handlingCost;
    }

    /**
     * @param float $handlingCost
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setHandlingCost($handlingCost)
    {
      $this->handlingCost = $handlingCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransferLocation()
    {
      return $this->transferLocation;
    }

    /**
     * @param RecordRef $transferLocation
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setTransferLocation($transferLocation)
    {
      $this->transferLocation = $transferLocation;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageList
     */
    public function getPackageList()
    {
      return $this->packageList;
    }

    /**
     * @param ItemFulfillmentPackageList $packageList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPackageList($packageList)
    {
      $this->packageList = $packageList;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsList
     */
    public function getPackageUpsList()
    {
      return $this->packageUpsList;
    }

    /**
     * @param ItemFulfillmentPackageUpsList $packageUpsList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPackageUpsList($packageUpsList)
    {
      $this->packageUpsList = $packageUpsList;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageUspsList
     */
    public function getPackageUspsList()
    {
      return $this->packageUspsList;
    }

    /**
     * @param ItemFulfillmentPackageUspsList $packageUspsList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPackageUspsList($packageUspsList)
    {
      $this->packageUspsList = $packageUspsList;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExList
     */
    public function getPackageFedExList()
    {
      return $this->packageFedExList;
    }

    /**
     * @param ItemFulfillmentPackageFedExList $packageFedExList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setPackageFedExList($packageFedExList)
    {
      $this->packageFedExList = $packageFedExList;
      return $this;
    }

    /**
     * @return ItemFulfillmentItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param ItemFulfillmentItemList $itemList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\ItemFulfillment
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
