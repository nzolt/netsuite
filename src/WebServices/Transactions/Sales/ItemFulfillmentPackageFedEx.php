<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExPackagingFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExAdmPackageTypeFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExPriorityAlertTypeFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExCodMethodFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExCodFreightTypeFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExDeliveryConfFedEx;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExSignatureOptionsFedEx;

/**
 * ItemFulfillmentPackageFedEx
 */
class ItemFulfillmentPackageFedEx {

    /**
     * @access public
     * @var float
     */
    protected $packageWeightFedEx;

    /**
     * @access public
     * @var float
     */
    protected $dryIceWeightFedEx;

    /**
     * @access public
     * @var string
     */
    protected $packageTrackingNumberFedEx;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExPackagingFedEx
     */
    protected $packagingFedEx;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExAdmPackageTypeFedEx
     */
    protected $admPackageTypeFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $isNonStandardContainerFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $isAlcoholFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $isNonHazLithiumFedEx;

    /**
     * @access public
     * @var float
     */
    protected $insuredValueFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $useInsuredValueFedEx;

    /**
     * @access public
     * @var string
     */
    protected $reference1FedEx;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
     */
    protected $priorityAlertTypeFedEx;

    /**
     * @access public
     * @var string
     */
    protected $priorityAlertContentFedEx;

    /**
     * @access public
     * @var integer
     */
    protected $packageLengthFedEx;

    /**
     * @access public
     * @var integer
     */
    protected $packageWidthFedEx;

    /**
     * @access public
     * @var integer
     */
    protected $packageHeightFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $useCodFedEx;

    /**
     * @access public
     * @var float
     */
    protected $codAmountFedEx;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExCodMethodFedEx
     */
    protected $codMethodFedEx;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExCodFreightTypeFedEx
     */
    protected $codFreightTypeFedEx;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExDeliveryConfFedEx
     */
    protected $deliveryConfFedEx;

    /**
     * @access public
     * @var ItemFulfillmentPackageFedExSignatureOptionsFedEx
     */
    protected $signatureOptionsFedEx;

    /**
     * @access public
     * @var string
     */
    protected $signatureReleaseFedEx;

    /**
     * @access public
     * @var string
     */
    protected $authorizationNumberFedEx;

    static $paramtypesmap = array(
    	"packageWeightFedEx" => "float",
    	"dryIceWeightFedEx" => "float",
    	"packageTrackingNumberFedEx" => "string",
    	"packagingFedEx" => "ItemFulfillmentPackageFedExPackagingFedEx",
    	"admPackageTypeFedEx" => "ItemFulfillmentPackageFedExAdmPackageTypeFedEx",
    	"isNonStandardContainerFedEx" => "boolean",
    	"isAlcoholFedEx" => "boolean",
    	"isNonHazLithiumFedEx" => "boolean",
    	"insuredValueFedEx" => "float",
    	"useInsuredValueFedEx" => "boolean",
    	"reference1FedEx" => "string",
    	"priorityAlertTypeFedEx" => "ItemFulfillmentPackageFedExPriorityAlertTypeFedEx",
    	"priorityAlertContentFedEx" => "string",
    	"packageLengthFedEx" => "integer",
    	"packageWidthFedEx" => "integer",
    	"packageHeightFedEx" => "integer",
    	"useCodFedEx" => "boolean",
    	"codAmountFedEx" => "float",
    	"codMethodFedEx" => "ItemFulfillmentPackageFedExCodMethodFedEx",
    	"codFreightTypeFedEx" => "ItemFulfillmentPackageFedExCodFreightTypeFedEx",
    	"deliveryConfFedEx" => "ItemFulfillmentPackageFedExDeliveryConfFedEx",
    	"signatureOptionsFedEx" => "ItemFulfillmentPackageFedExSignatureOptionsFedEx",
    	"signatureReleaseFedEx" => "string",
    	"authorizationNumberFedEx" => "string",
    );

    /**
     * Set packageWeightFedEx
     *
     * @param float $packageWeightFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageWeightFedEx($packageWeightFedEx) {
        $this->packageWeightFedEx = $packageWeightFedEx;
        return $this;
    }

    /**
     * Get packageWeightFedEx
     *
     * @return float
     */
    public function getPackageWeightFedEx() {
        return $this->packageWeightFedEx;
    }


    /**
     * Set dryIceWeightFedEx
     *
     * @param float $dryIceWeightFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setDryIceWeightFedEx($dryIceWeightFedEx) {
        $this->dryIceWeightFedEx = $dryIceWeightFedEx;
        return $this;
    }

    /**
     * Get dryIceWeightFedEx
     *
     * @return float
     */
    public function getDryIceWeightFedEx() {
        return $this->dryIceWeightFedEx;
    }


    /**
     * Set packageTrackingNumberFedEx
     *
     * @param string $packageTrackingNumberFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageTrackingNumberFedEx($packageTrackingNumberFedEx) {
        $this->packageTrackingNumberFedEx = $packageTrackingNumberFedEx;
        return $this;
    }

    /**
     * Get packageTrackingNumberFedEx
     *
     * @return string
     */
    public function getPackageTrackingNumberFedEx() {
        return $this->packageTrackingNumberFedEx;
    }


    /**
     * Set packagingFedEx
     *
     * @param ItemFulfillmentPackageFedExPackagingFedEx $packagingFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackagingFedEx(ItemFulfillmentPackageFedExPackagingFedEx $packagingFedEx) {
        $this->packagingFedEx = $packagingFedEx;
        return $this;
    }

    /**
     * Get packagingFedEx
     *
     * @return ItemFulfillmentPackageFedExPackagingFedEx
     */
    public function getPackagingFedEx() {
        return $this->packagingFedEx;
    }


    /**
     * Set admPackageTypeFedEx
     *
     * @param ItemFulfillmentPackageFedExAdmPackageTypeFedEx $admPackageTypeFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setAdmPackageTypeFedEx(ItemFulfillmentPackageFedExAdmPackageTypeFedEx $admPackageTypeFedEx) {
        $this->admPackageTypeFedEx = $admPackageTypeFedEx;
        return $this;
    }

    /**
     * Get admPackageTypeFedEx
     *
     * @return ItemFulfillmentPackageFedExAdmPackageTypeFedEx
     */
    public function getAdmPackageTypeFedEx() {
        return $this->admPackageTypeFedEx;
    }


    /**
     * Set isNonStandardContainerFedEx
     *
     * @param boolean $isNonStandardContainerFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setIsNonStandardContainerFedEx($isNonStandardContainerFedEx) {
        $this->isNonStandardContainerFedEx = $isNonStandardContainerFedEx;
        return $this;
    }

    /**
     * Get isNonStandardContainerFedEx
     *
     * @return boolean
     */
    public function getIsNonStandardContainerFedEx() {
        return $this->isNonStandardContainerFedEx;
    }


    /**
     * Set isAlcoholFedEx
     *
     * @param boolean $isAlcoholFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setIsAlcoholFedEx($isAlcoholFedEx) {
        $this->isAlcoholFedEx = $isAlcoholFedEx;
        return $this;
    }

    /**
     * Get isAlcoholFedEx
     *
     * @return boolean
     */
    public function getIsAlcoholFedEx() {
        return $this->isAlcoholFedEx;
    }


    /**
     * Set isNonHazLithiumFedEx
     *
     * @param boolean $isNonHazLithiumFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setIsNonHazLithiumFedEx($isNonHazLithiumFedEx) {
        $this->isNonHazLithiumFedEx = $isNonHazLithiumFedEx;
        return $this;
    }

    /**
     * Get isNonHazLithiumFedEx
     *
     * @return boolean
     */
    public function getIsNonHazLithiumFedEx() {
        return $this->isNonHazLithiumFedEx;
    }


    /**
     * Set insuredValueFedEx
     *
     * @param float $insuredValueFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setInsuredValueFedEx($insuredValueFedEx) {
        $this->insuredValueFedEx = $insuredValueFedEx;
        return $this;
    }

    /**
     * Get insuredValueFedEx
     *
     * @return float
     */
    public function getInsuredValueFedEx() {
        return $this->insuredValueFedEx;
    }


    /**
     * Set useInsuredValueFedEx
     *
     * @param boolean $useInsuredValueFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setUseInsuredValueFedEx($useInsuredValueFedEx) {
        $this->useInsuredValueFedEx = $useInsuredValueFedEx;
        return $this;
    }

    /**
     * Get useInsuredValueFedEx
     *
     * @return boolean
     */
    public function getUseInsuredValueFedEx() {
        return $this->useInsuredValueFedEx;
    }


    /**
     * Set reference1FedEx
     *
     * @param string $reference1FedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setReference1FedEx($reference1FedEx) {
        $this->reference1FedEx = $reference1FedEx;
        return $this;
    }

    /**
     * Get reference1FedEx
     *
     * @return string
     */
    public function getReference1FedEx() {
        return $this->reference1FedEx;
    }


    /**
     * Set priorityAlertTypeFedEx
     *
     * @param ItemFulfillmentPackageFedExPriorityAlertTypeFedEx $priorityAlertTypeFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPriorityAlertTypeFedEx(ItemFulfillmentPackageFedExPriorityAlertTypeFedEx $priorityAlertTypeFedEx) {
        $this->priorityAlertTypeFedEx = $priorityAlertTypeFedEx;
        return $this;
    }

    /**
     * Get priorityAlertTypeFedEx
     *
     * @return ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
     */
    public function getPriorityAlertTypeFedEx() {
        return $this->priorityAlertTypeFedEx;
    }


    /**
     * Set priorityAlertContentFedEx
     *
     * @param string $priorityAlertContentFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPriorityAlertContentFedEx($priorityAlertContentFedEx) {
        $this->priorityAlertContentFedEx = $priorityAlertContentFedEx;
        return $this;
    }

    /**
     * Get priorityAlertContentFedEx
     *
     * @return string
     */
    public function getPriorityAlertContentFedEx() {
        return $this->priorityAlertContentFedEx;
    }


    /**
     * Set packageLengthFedEx
     *
     * @param integer $packageLengthFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageLengthFedEx($packageLengthFedEx) {
        $this->packageLengthFedEx = $packageLengthFedEx;
        return $this;
    }

    /**
     * Get packageLengthFedEx
     *
     * @return integer
     */
    public function getPackageLengthFedEx() {
        return $this->packageLengthFedEx;
    }


    /**
     * Set packageWidthFedEx
     *
     * @param integer $packageWidthFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageWidthFedEx($packageWidthFedEx) {
        $this->packageWidthFedEx = $packageWidthFedEx;
        return $this;
    }

    /**
     * Get packageWidthFedEx
     *
     * @return integer
     */
    public function getPackageWidthFedEx() {
        return $this->packageWidthFedEx;
    }


    /**
     * Set packageHeightFedEx
     *
     * @param integer $packageHeightFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageHeightFedEx($packageHeightFedEx) {
        $this->packageHeightFedEx = $packageHeightFedEx;
        return $this;
    }

    /**
     * Get packageHeightFedEx
     *
     * @return integer
     */
    public function getPackageHeightFedEx() {
        return $this->packageHeightFedEx;
    }


    /**
     * Set useCodFedEx
     *
     * @param boolean $useCodFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setUseCodFedEx($useCodFedEx) {
        $this->useCodFedEx = $useCodFedEx;
        return $this;
    }

    /**
     * Get useCodFedEx
     *
     * @return boolean
     */
    public function getUseCodFedEx() {
        return $this->useCodFedEx;
    }


    /**
     * Set codAmountFedEx
     *
     * @param float $codAmountFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setCodAmountFedEx($codAmountFedEx) {
        $this->codAmountFedEx = $codAmountFedEx;
        return $this;
    }

    /**
     * Get codAmountFedEx
     *
     * @return float
     */
    public function getCodAmountFedEx() {
        return $this->codAmountFedEx;
    }


    /**
     * Set codMethodFedEx
     *
     * @param ItemFulfillmentPackageFedExCodMethodFedEx $codMethodFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setCodMethodFedEx(ItemFulfillmentPackageFedExCodMethodFedEx $codMethodFedEx) {
        $this->codMethodFedEx = $codMethodFedEx;
        return $this;
    }

    /**
     * Get codMethodFedEx
     *
     * @return ItemFulfillmentPackageFedExCodMethodFedEx
     */
    public function getCodMethodFedEx() {
        return $this->codMethodFedEx;
    }


    /**
     * Set codFreightTypeFedEx
     *
     * @param ItemFulfillmentPackageFedExCodFreightTypeFedEx $codFreightTypeFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setCodFreightTypeFedEx(ItemFulfillmentPackageFedExCodFreightTypeFedEx $codFreightTypeFedEx) {
        $this->codFreightTypeFedEx = $codFreightTypeFedEx;
        return $this;
    }

    /**
     * Get codFreightTypeFedEx
     *
     * @return ItemFulfillmentPackageFedExCodFreightTypeFedEx
     */
    public function getCodFreightTypeFedEx() {
        return $this->codFreightTypeFedEx;
    }


    /**
     * Set deliveryConfFedEx
     *
     * @param ItemFulfillmentPackageFedExDeliveryConfFedEx $deliveryConfFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setDeliveryConfFedEx(ItemFulfillmentPackageFedExDeliveryConfFedEx $deliveryConfFedEx) {
        $this->deliveryConfFedEx = $deliveryConfFedEx;
        return $this;
    }

    /**
     * Get deliveryConfFedEx
     *
     * @return ItemFulfillmentPackageFedExDeliveryConfFedEx
     */
    public function getDeliveryConfFedEx() {
        return $this->deliveryConfFedEx;
    }


    /**
     * Set signatureOptionsFedEx
     *
     * @param ItemFulfillmentPackageFedExSignatureOptionsFedEx $signatureOptionsFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setSignatureOptionsFedEx(ItemFulfillmentPackageFedExSignatureOptionsFedEx $signatureOptionsFedEx) {
        $this->signatureOptionsFedEx = $signatureOptionsFedEx;
        return $this;
    }

    /**
     * Get signatureOptionsFedEx
     *
     * @return ItemFulfillmentPackageFedExSignatureOptionsFedEx
     */
    public function getSignatureOptionsFedEx() {
        return $this->signatureOptionsFedEx;
    }


    /**
     * Set signatureReleaseFedEx
     *
     * @param string $signatureReleaseFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setSignatureReleaseFedEx($signatureReleaseFedEx) {
        $this->signatureReleaseFedEx = $signatureReleaseFedEx;
        return $this;
    }

    /**
     * Get signatureReleaseFedEx
     *
     * @return string
     */
    public function getSignatureReleaseFedEx() {
        return $this->signatureReleaseFedEx;
    }


    /**
     * Set authorizationNumberFedEx
     *
     * @param string $authorizationNumberFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setAuthorizationNumberFedEx($authorizationNumberFedEx) {
        $this->authorizationNumberFedEx = $authorizationNumberFedEx;
        return $this;
    }

    /**
     * Get authorizationNumberFedEx
     *
     * @return string
     */
    public function getAuthorizationNumberFedEx() {
        return $this->authorizationNumberFedEx;
    }

}