<?php

namespace Nzolt\NetSuite;

class InboundShipment extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @var string $externalDocumentNumber
     */
    protected $externalDocumentNumber = null;

    /**
     * @var InboundShipmentShipmentStatus $shipmentStatus
     */
    protected $shipmentStatus = null;

    /**
     * @var \DateTime $expectedShippingDate
     */
    protected $expectedShippingDate = null;

    /**
     * @var \DateTime $actualShippingDate
     */
    protected $actualShippingDate = null;

    /**
     * @var \DateTime $expectedDeliveryDate
     */
    protected $expectedDeliveryDate = null;

    /**
     * @var \DateTime $actualDeliveryDate
     */
    protected $actualDeliveryDate = null;

    /**
     * @var string $shipmentMemo
     */
    protected $shipmentMemo = null;

    /**
     * @var string $vesselNumber
     */
    protected $vesselNumber = null;

    /**
     * @var string $billOfLading
     */
    protected $billOfLading = null;

    /**
     * @var InboundShipmentItemsList $itemsList
     */
    protected $itemsList = null;

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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
      return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDocumentNumber()
    {
      return $this->externalDocumentNumber;
    }

    /**
     * @param string $externalDocumentNumber
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setExternalDocumentNumber($externalDocumentNumber)
    {
      $this->externalDocumentNumber = $externalDocumentNumber;
      return $this;
    }

    /**
     * @return InboundShipmentShipmentStatus
     */
    public function getShipmentStatus()
    {
      return $this->shipmentStatus;
    }

    /**
     * @param InboundShipmentShipmentStatus $shipmentStatus
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setShipmentStatus($shipmentStatus)
    {
      $this->shipmentStatus = $shipmentStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedShippingDate()
    {
      if ($this->expectedShippingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedShippingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedShippingDate
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setExpectedShippingDate(\DateTime $expectedShippingDate = null)
    {
      if ($expectedShippingDate == null) {
       $this->expectedShippingDate = null;
      } else {
        $this->expectedShippingDate = $expectedShippingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualShippingDate()
    {
      if ($this->actualShippingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->actualShippingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $actualShippingDate
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setActualShippingDate(\DateTime $actualShippingDate = null)
    {
      if ($actualShippingDate == null) {
       $this->actualShippingDate = null;
      } else {
        $this->actualShippingDate = $actualShippingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
      if ($this->expectedDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedDeliveryDate
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate = null)
    {
      if ($expectedDeliveryDate == null) {
       $this->expectedDeliveryDate = null;
      } else {
        $this->expectedDeliveryDate = $expectedDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualDeliveryDate()
    {
      if ($this->actualDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->actualDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $actualDeliveryDate
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setActualDeliveryDate(\DateTime $actualDeliveryDate = null)
    {
      if ($actualDeliveryDate == null) {
       $this->actualDeliveryDate = null;
      } else {
        $this->actualDeliveryDate = $actualDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentMemo()
    {
      return $this->shipmentMemo;
    }

    /**
     * @param string $shipmentMemo
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setShipmentMemo($shipmentMemo)
    {
      $this->shipmentMemo = $shipmentMemo;
      return $this;
    }

    /**
     * @return string
     */
    public function getVesselNumber()
    {
      return $this->vesselNumber;
    }

    /**
     * @param string $vesselNumber
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setVesselNumber($vesselNumber)
    {
      $this->vesselNumber = $vesselNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillOfLading()
    {
      return $this->billOfLading;
    }

    /**
     * @param string $billOfLading
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setBillOfLading($billOfLading)
    {
      $this->billOfLading = $billOfLading;
      return $this;
    }

    /**
     * @return InboundShipmentItemsList
     */
    public function getItemsList()
    {
      return $this->itemsList;
    }

    /**
     * @param InboundShipmentItemsList $itemsList
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setItemsList($itemsList)
    {
      $this->itemsList = $itemsList;
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
     * @return \Nzolt\NetSuite\InboundShipment
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
     * @return \Nzolt\NetSuite\InboundShipment
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
     * @return \Nzolt\NetSuite\InboundShipment
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
