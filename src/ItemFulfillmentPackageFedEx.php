<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackageFedEx
{

    /**
     * @var float $packageWeightFedEx
     */
    protected $packageWeightFedEx = null;

    /**
     * @var float $dryIceWeightFedEx
     */
    protected $dryIceWeightFedEx = null;

    /**
     * @var string $packageTrackingNumberFedEx
     */
    protected $packageTrackingNumberFedEx = null;

    /**
     * @var ItemFulfillmentPackageFedExPackagingFedEx $packagingFedEx
     */
    protected $packagingFedEx = null;

    /**
     * @var ItemFulfillmentPackageFedExAdmPackageTypeFedEx $admPackageTypeFedEx
     */
    protected $admPackageTypeFedEx = null;

    /**
     * @var boolean $isNonStandardContainerFedEx
     */
    protected $isNonStandardContainerFedEx = null;

    /**
     * @var boolean $isAlcoholFedEx
     */
    protected $isAlcoholFedEx = null;

    /**
     * @var AlcoholRecipientType $alcoholRecipientTypeFedEx
     */
    protected $alcoholRecipientTypeFedEx = null;

    /**
     * @var boolean $isNonHazLithiumFedEx
     */
    protected $isNonHazLithiumFedEx = null;

    /**
     * @var float $insuredValueFedEx
     */
    protected $insuredValueFedEx = null;

    /**
     * @var boolean $useInsuredValueFedEx
     */
    protected $useInsuredValueFedEx = null;

    /**
     * @var string $reference1FedEx
     */
    protected $reference1FedEx = null;

    /**
     * @var ItemFulfillmentPackageFedExPriorityAlertTypeFedEx $priorityAlertTypeFedEx
     */
    protected $priorityAlertTypeFedEx = null;

    /**
     * @var string $priorityAlertContentFedEx
     */
    protected $priorityAlertContentFedEx = null;

    /**
     * @var int $packageLengthFedEx
     */
    protected $packageLengthFedEx = null;

    /**
     * @var int $packageWidthFedEx
     */
    protected $packageWidthFedEx = null;

    /**
     * @var int $packageHeightFedEx
     */
    protected $packageHeightFedEx = null;

    /**
     * @var boolean $useCodFedEx
     */
    protected $useCodFedEx = null;

    /**
     * @var float $codAmountFedEx
     */
    protected $codAmountFedEx = null;

    /**
     * @var ItemFulfillmentPackageFedExCodMethodFedEx $codMethodFedEx
     */
    protected $codMethodFedEx = null;

    /**
     * @var ItemFulfillmentPackageFedExCodFreightTypeFedEx $codFreightTypeFedEx
     */
    protected $codFreightTypeFedEx = null;

    /**
     * @var ItemFulfillmentPackageFedExDeliveryConfFedEx $deliveryConfFedEx
     */
    protected $deliveryConfFedEx = null;

    /**
     * @var ItemFulfillmentPackageFedExSignatureOptionsFedEx $signatureOptionsFedEx
     */
    protected $signatureOptionsFedEx = null;

    /**
     * @var string $signatureReleaseFedEx
     */
    protected $signatureReleaseFedEx = null;

    /**
     * @var string $authorizationNumberFedEx
     */
    protected $authorizationNumberFedEx = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getPackageWeightFedEx()
    {
      return $this->packageWeightFedEx;
    }

    /**
     * @param float $packageWeightFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPackageWeightFedEx($packageWeightFedEx)
    {
      $this->packageWeightFedEx = $packageWeightFedEx;
      return $this;
    }

    /**
     * @return float
     */
    public function getDryIceWeightFedEx()
    {
      return $this->dryIceWeightFedEx;
    }

    /**
     * @param float $dryIceWeightFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setDryIceWeightFedEx($dryIceWeightFedEx)
    {
      $this->dryIceWeightFedEx = $dryIceWeightFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumberFedEx()
    {
      return $this->packageTrackingNumberFedEx;
    }

    /**
     * @param string $packageTrackingNumberFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPackageTrackingNumberFedEx($packageTrackingNumberFedEx)
    {
      $this->packageTrackingNumberFedEx = $packageTrackingNumberFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExPackagingFedEx
     */
    public function getPackagingFedEx()
    {
      return $this->packagingFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExPackagingFedEx $packagingFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPackagingFedEx($packagingFedEx)
    {
      $this->packagingFedEx = $packagingFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExAdmPackageTypeFedEx
     */
    public function getAdmPackageTypeFedEx()
    {
      return $this->admPackageTypeFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExAdmPackageTypeFedEx $admPackageTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setAdmPackageTypeFedEx($admPackageTypeFedEx)
    {
      $this->admPackageTypeFedEx = $admPackageTypeFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNonStandardContainerFedEx()
    {
      return $this->isNonStandardContainerFedEx;
    }

    /**
     * @param boolean $isNonStandardContainerFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setIsNonStandardContainerFedEx($isNonStandardContainerFedEx)
    {
      $this->isNonStandardContainerFedEx = $isNonStandardContainerFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAlcoholFedEx()
    {
      return $this->isAlcoholFedEx;
    }

    /**
     * @param boolean $isAlcoholFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setIsAlcoholFedEx($isAlcoholFedEx)
    {
      $this->isAlcoholFedEx = $isAlcoholFedEx;
      return $this;
    }

    /**
     * @return AlcoholRecipientType
     */
    public function getAlcoholRecipientTypeFedEx()
    {
      return $this->alcoholRecipientTypeFedEx;
    }

    /**
     * @param AlcoholRecipientType $alcoholRecipientTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setAlcoholRecipientTypeFedEx($alcoholRecipientTypeFedEx)
    {
      $this->alcoholRecipientTypeFedEx = $alcoholRecipientTypeFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNonHazLithiumFedEx()
    {
      return $this->isNonHazLithiumFedEx;
    }

    /**
     * @param boolean $isNonHazLithiumFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setIsNonHazLithiumFedEx($isNonHazLithiumFedEx)
    {
      $this->isNonHazLithiumFedEx = $isNonHazLithiumFedEx;
      return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValueFedEx()
    {
      return $this->insuredValueFedEx;
    }

    /**
     * @param float $insuredValueFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setInsuredValueFedEx($insuredValueFedEx)
    {
      $this->insuredValueFedEx = $insuredValueFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseInsuredValueFedEx()
    {
      return $this->useInsuredValueFedEx;
    }

    /**
     * @param boolean $useInsuredValueFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setUseInsuredValueFedEx($useInsuredValueFedEx)
    {
      $this->useInsuredValueFedEx = $useInsuredValueFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference1FedEx()
    {
      return $this->reference1FedEx;
    }

    /**
     * @param string $reference1FedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setReference1FedEx($reference1FedEx)
    {
      $this->reference1FedEx = $reference1FedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
     */
    public function getPriorityAlertTypeFedEx()
    {
      return $this->priorityAlertTypeFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExPriorityAlertTypeFedEx $priorityAlertTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPriorityAlertTypeFedEx($priorityAlertTypeFedEx)
    {
      $this->priorityAlertTypeFedEx = $priorityAlertTypeFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriorityAlertContentFedEx()
    {
      return $this->priorityAlertContentFedEx;
    }

    /**
     * @param string $priorityAlertContentFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPriorityAlertContentFedEx($priorityAlertContentFedEx)
    {
      $this->priorityAlertContentFedEx = $priorityAlertContentFedEx;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageLengthFedEx()
    {
      return $this->packageLengthFedEx;
    }

    /**
     * @param int $packageLengthFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPackageLengthFedEx($packageLengthFedEx)
    {
      $this->packageLengthFedEx = $packageLengthFedEx;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageWidthFedEx()
    {
      return $this->packageWidthFedEx;
    }

    /**
     * @param int $packageWidthFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPackageWidthFedEx($packageWidthFedEx)
    {
      $this->packageWidthFedEx = $packageWidthFedEx;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageHeightFedEx()
    {
      return $this->packageHeightFedEx;
    }

    /**
     * @param int $packageHeightFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setPackageHeightFedEx($packageHeightFedEx)
    {
      $this->packageHeightFedEx = $packageHeightFedEx;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseCodFedEx()
    {
      return $this->useCodFedEx;
    }

    /**
     * @param boolean $useCodFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setUseCodFedEx($useCodFedEx)
    {
      $this->useCodFedEx = $useCodFedEx;
      return $this;
    }

    /**
     * @return float
     */
    public function getCodAmountFedEx()
    {
      return $this->codAmountFedEx;
    }

    /**
     * @param float $codAmountFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setCodAmountFedEx($codAmountFedEx)
    {
      $this->codAmountFedEx = $codAmountFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExCodMethodFedEx
     */
    public function getCodMethodFedEx()
    {
      return $this->codMethodFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExCodMethodFedEx $codMethodFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setCodMethodFedEx($codMethodFedEx)
    {
      $this->codMethodFedEx = $codMethodFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExCodFreightTypeFedEx
     */
    public function getCodFreightTypeFedEx()
    {
      return $this->codFreightTypeFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExCodFreightTypeFedEx $codFreightTypeFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setCodFreightTypeFedEx($codFreightTypeFedEx)
    {
      $this->codFreightTypeFedEx = $codFreightTypeFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExDeliveryConfFedEx
     */
    public function getDeliveryConfFedEx()
    {
      return $this->deliveryConfFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExDeliveryConfFedEx $deliveryConfFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setDeliveryConfFedEx($deliveryConfFedEx)
    {
      $this->deliveryConfFedEx = $deliveryConfFedEx;
      return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExSignatureOptionsFedEx
     */
    public function getSignatureOptionsFedEx()
    {
      return $this->signatureOptionsFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExSignatureOptionsFedEx $signatureOptionsFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setSignatureOptionsFedEx($signatureOptionsFedEx)
    {
      $this->signatureOptionsFedEx = $signatureOptionsFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatureReleaseFedEx()
    {
      return $this->signatureReleaseFedEx;
    }

    /**
     * @param string $signatureReleaseFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setSignatureReleaseFedEx($signatureReleaseFedEx)
    {
      $this->signatureReleaseFedEx = $signatureReleaseFedEx;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationNumberFedEx()
    {
      return $this->authorizationNumberFedEx;
    }

    /**
     * @param string $authorizationNumberFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedEx
     */
    public function setAuthorizationNumberFedEx($authorizationNumberFedEx)
    {
      $this->authorizationNumberFedEx = $authorizationNumberFedEx;
      return $this;
    }

}
