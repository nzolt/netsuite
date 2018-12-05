<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackageUps
{

    /**
     * @var float $packageWeightUps
     */
    protected $packageWeightUps = null;

    /**
     * @var string $packageDescrUps
     */
    protected $packageDescrUps = null;

    /**
     * @var string $packageTrackingNumberUps
     */
    protected $packageTrackingNumberUps = null;

    /**
     * @var ItemFulfillmentPackageUpsPackagingUps $packagingUps
     */
    protected $packagingUps = null;

    /**
     * @var boolean $useInsuredValueUps
     */
    protected $useInsuredValueUps = null;

    /**
     * @var float $insuredValueUps
     */
    protected $insuredValueUps = null;

    /**
     * @var string $reference1Ups
     */
    protected $reference1Ups = null;

    /**
     * @var string $reference2Ups
     */
    protected $reference2Ups = null;

    /**
     * @var int $packageLengthUps
     */
    protected $packageLengthUps = null;

    /**
     * @var int $packageWidthUps
     */
    protected $packageWidthUps = null;

    /**
     * @var int $packageHeightUps
     */
    protected $packageHeightUps = null;

    /**
     * @var boolean $additionalHandlingUps
     */
    protected $additionalHandlingUps = null;

    /**
     * @var boolean $useCodUps
     */
    protected $useCodUps = null;

    /**
     * @var float $codAmountUps
     */
    protected $codAmountUps = null;

    /**
     * @var ItemFulfillmentPackageUpsCodMethodUps $codMethodUps
     */
    protected $codMethodUps = null;

    /**
     * @var ItemFulfillmentPackageUpsDeliveryConfUps $deliveryConfUps
     */
    protected $deliveryConfUps = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getPackageWeightUps()
    {
      return $this->packageWeightUps;
    }

    /**
     * @param float $packageWeightUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setPackageWeightUps($packageWeightUps)
    {
      $this->packageWeightUps = $packageWeightUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageDescrUps()
    {
      return $this->packageDescrUps;
    }

    /**
     * @param string $packageDescrUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setPackageDescrUps($packageDescrUps)
    {
      $this->packageDescrUps = $packageDescrUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumberUps()
    {
      return $this->packageTrackingNumberUps;
    }

    /**
     * @param string $packageTrackingNumberUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setPackageTrackingNumberUps($packageTrackingNumberUps)
    {
      $this->packageTrackingNumberUps = $packageTrackingNumberUps;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsPackagingUps
     */
    public function getPackagingUps()
    {
      return $this->packagingUps;
    }

    /**
     * @param ItemFulfillmentPackageUpsPackagingUps $packagingUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setPackagingUps($packagingUps)
    {
      $this->packagingUps = $packagingUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseInsuredValueUps()
    {
      return $this->useInsuredValueUps;
    }

    /**
     * @param boolean $useInsuredValueUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setUseInsuredValueUps($useInsuredValueUps)
    {
      $this->useInsuredValueUps = $useInsuredValueUps;
      return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValueUps()
    {
      return $this->insuredValueUps;
    }

    /**
     * @param float $insuredValueUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setInsuredValueUps($insuredValueUps)
    {
      $this->insuredValueUps = $insuredValueUps;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference1Ups()
    {
      return $this->reference1Ups;
    }

    /**
     * @param string $reference1Ups
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setReference1Ups($reference1Ups)
    {
      $this->reference1Ups = $reference1Ups;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference2Ups()
    {
      return $this->reference2Ups;
    }

    /**
     * @param string $reference2Ups
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setReference2Ups($reference2Ups)
    {
      $this->reference2Ups = $reference2Ups;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageLengthUps()
    {
      return $this->packageLengthUps;
    }

    /**
     * @param int $packageLengthUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setPackageLengthUps($packageLengthUps)
    {
      $this->packageLengthUps = $packageLengthUps;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageWidthUps()
    {
      return $this->packageWidthUps;
    }

    /**
     * @param int $packageWidthUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setPackageWidthUps($packageWidthUps)
    {
      $this->packageWidthUps = $packageWidthUps;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageHeightUps()
    {
      return $this->packageHeightUps;
    }

    /**
     * @param int $packageHeightUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setPackageHeightUps($packageHeightUps)
    {
      $this->packageHeightUps = $packageHeightUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalHandlingUps()
    {
      return $this->additionalHandlingUps;
    }

    /**
     * @param boolean $additionalHandlingUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setAdditionalHandlingUps($additionalHandlingUps)
    {
      $this->additionalHandlingUps = $additionalHandlingUps;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseCodUps()
    {
      return $this->useCodUps;
    }

    /**
     * @param boolean $useCodUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setUseCodUps($useCodUps)
    {
      $this->useCodUps = $useCodUps;
      return $this;
    }

    /**
     * @return float
     */
    public function getCodAmountUps()
    {
      return $this->codAmountUps;
    }

    /**
     * @param float $codAmountUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setCodAmountUps($codAmountUps)
    {
      $this->codAmountUps = $codAmountUps;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsCodMethodUps
     */
    public function getCodMethodUps()
    {
      return $this->codMethodUps;
    }

    /**
     * @param ItemFulfillmentPackageUpsCodMethodUps $codMethodUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setCodMethodUps($codMethodUps)
    {
      $this->codMethodUps = $codMethodUps;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsDeliveryConfUps
     */
    public function getDeliveryConfUps()
    {
      return $this->deliveryConfUps;
    }

    /**
     * @param ItemFulfillmentPackageUpsDeliveryConfUps $deliveryConfUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUps
     */
    public function setDeliveryConfUps($deliveryConfUps)
    {
      $this->deliveryConfUps = $deliveryConfUps;
      return $this;
    }

}
