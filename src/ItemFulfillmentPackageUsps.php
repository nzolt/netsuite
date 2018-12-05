<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackageUsps
{

    /**
     * @var float $packageWeightUsps
     */
    protected $packageWeightUsps = null;

    /**
     * @var string $packageDescrUsps
     */
    protected $packageDescrUsps = null;

    /**
     * @var string $packageTrackingNumberUsps
     */
    protected $packageTrackingNumberUsps = null;

    /**
     * @var ItemFulfillmentPackageUspsPackagingUsps $packagingUsps
     */
    protected $packagingUsps = null;

    /**
     * @var boolean $useInsuredValueUsps
     */
    protected $useInsuredValueUsps = null;

    /**
     * @var float $insuredValueUsps
     */
    protected $insuredValueUsps = null;

    /**
     * @var string $reference1Usps
     */
    protected $reference1Usps = null;

    /**
     * @var string $reference2Usps
     */
    protected $reference2Usps = null;

    /**
     * @var int $packageLengthUsps
     */
    protected $packageLengthUsps = null;

    /**
     * @var int $packageWidthUsps
     */
    protected $packageWidthUsps = null;

    /**
     * @var int $packageHeightUsps
     */
    protected $packageHeightUsps = null;

    /**
     * @var ItemFulfillmentPackageUspsDeliveryConfUsps $deliveryConfUsps
     */
    protected $deliveryConfUsps = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getPackageWeightUsps()
    {
      return $this->packageWeightUsps;
    }

    /**
     * @param float $packageWeightUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setPackageWeightUsps($packageWeightUsps)
    {
      $this->packageWeightUsps = $packageWeightUsps;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageDescrUsps()
    {
      return $this->packageDescrUsps;
    }

    /**
     * @param string $packageDescrUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setPackageDescrUsps($packageDescrUsps)
    {
      $this->packageDescrUsps = $packageDescrUsps;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumberUsps()
    {
      return $this->packageTrackingNumberUsps;
    }

    /**
     * @param string $packageTrackingNumberUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setPackageTrackingNumberUsps($packageTrackingNumberUsps)
    {
      $this->packageTrackingNumberUsps = $packageTrackingNumberUsps;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageUspsPackagingUsps
     */
    public function getPackagingUsps()
    {
      return $this->packagingUsps;
    }

    /**
     * @param ItemFulfillmentPackageUspsPackagingUsps $packagingUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setPackagingUsps($packagingUsps)
    {
      $this->packagingUsps = $packagingUsps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseInsuredValueUsps()
    {
      return $this->useInsuredValueUsps;
    }

    /**
     * @param boolean $useInsuredValueUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setUseInsuredValueUsps($useInsuredValueUsps)
    {
      $this->useInsuredValueUsps = $useInsuredValueUsps;
      return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValueUsps()
    {
      return $this->insuredValueUsps;
    }

    /**
     * @param float $insuredValueUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setInsuredValueUsps($insuredValueUsps)
    {
      $this->insuredValueUsps = $insuredValueUsps;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference1Usps()
    {
      return $this->reference1Usps;
    }

    /**
     * @param string $reference1Usps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setReference1Usps($reference1Usps)
    {
      $this->reference1Usps = $reference1Usps;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference2Usps()
    {
      return $this->reference2Usps;
    }

    /**
     * @param string $reference2Usps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setReference2Usps($reference2Usps)
    {
      $this->reference2Usps = $reference2Usps;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageLengthUsps()
    {
      return $this->packageLengthUsps;
    }

    /**
     * @param int $packageLengthUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setPackageLengthUsps($packageLengthUsps)
    {
      $this->packageLengthUsps = $packageLengthUsps;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageWidthUsps()
    {
      return $this->packageWidthUsps;
    }

    /**
     * @param int $packageWidthUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setPackageWidthUsps($packageWidthUsps)
    {
      $this->packageWidthUsps = $packageWidthUsps;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageHeightUsps()
    {
      return $this->packageHeightUsps;
    }

    /**
     * @param int $packageHeightUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setPackageHeightUsps($packageHeightUsps)
    {
      $this->packageHeightUsps = $packageHeightUsps;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageUspsDeliveryConfUsps
     */
    public function getDeliveryConfUsps()
    {
      return $this->deliveryConfUsps;
    }

    /**
     * @param ItemFulfillmentPackageUspsDeliveryConfUsps $deliveryConfUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUsps
     */
    public function setDeliveryConfUsps($deliveryConfUsps)
    {
      $this->deliveryConfUsps = $deliveryConfUsps;
      return $this;
    }

}
