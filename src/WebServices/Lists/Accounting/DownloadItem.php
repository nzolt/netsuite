<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOverallQuantityPricingType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\SitemapPriority;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOutOfStockBehavior;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * DownloadItem
 */
class DownloadItem extends Record {

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
     * @var string
     */
    protected $salesDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $quantityPricingSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $deferredRevenueAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $onSpecial;

    /**
     * @access public
     * @var string
     */
    protected $itemId;

    /**
     * @access public
     * @var string
     */
    protected $upcCode;

    /**
     * @access public
     * @var string
     */
    protected $displayName;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var boolean
     */
    protected $isOnline;

    /**
     * @access public
     * @var boolean
     */
    protected $isGcoCompliant;

    /**
     * @access public
     * @var boolean
     */
    protected $offerSupport;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $availableToPartners;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $incomeAccount;

    /**
     * @access public
     * @var integer
     */
    protected $numOfAllowedDownloads;

    /**
     * @access public
     * @var integer
     */
    protected $daysBeforeExpiration;

    /**
     * @access public
     * @var boolean
     */
    protected $immediateDownload;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var ItemCostEstimateType
     */
    protected $costEstimateType;

    /**
     * @access public
     * @var float
     */
    protected $costEstimate;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $isFulfillable;

    /**
     * @access public
     * @var boolean
     */
    protected $useMarginalRates;

    /**
     * @access public
     * @var ItemOverallQuantityPricingType
     */
    protected $overallQuantityPricingType;

    /**
     * @access public
     * @var RecordRef
     */
    public $pricingGroup;

    /**
     * @access public
     * @var RecordRef
     */
    public $revRecSchedule;

    /**
     * @access public
     * @var float
     */
    protected $vsoePrice;

    /**
     * @access public
     * @var VsoeSopGroup
     */
    protected $vsoeSopGroup;

    /**
     * @access public
     * @var VsoeDeferral
     */
    protected $vsoeDeferral;

    /**
     * @access public
     * @var VsoePermitDiscount
     */
    protected $vsoePermitDiscount;

    /**
     * @access public
     * @var boolean
     */
    protected $vsoeDelivered;

    /**
     * @access public
     * @var boolean
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var string
     */
    protected $storeDisplayName;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeDisplayThumbnail;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeDisplayImage;

    /**
     * @access public
     * @var string
     */
    protected $featuredDescription;

    /**
     * @access public
     * @var string
     */
    protected $storeDescription;

    /**
     * @access public
     * @var string
     */
    protected $storeDetailedDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeItemTemplate;

    /**
     * @access public
     * @var string
     */
    protected $pageTitle;

    /**
     * @access public
     * @var string
     */
    protected $metaTagHtml;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeFromSitemap;

    /**
     * @access public
     * @var SitemapPriority
     */
    protected $sitemapPriority;

    /**
     * @access public
     * @var string
     */
    protected $searchKeywords;

    /**
     * @access public
     * @var boolean
     */
    protected $isDonationItem;

    /**
     * @access public
     * @var boolean
     */
    protected $showDefaultDonationAmount;

    /**
     * @access public
     * @var float
     */
    protected $maxDonationAmount;

    /**
     * @access public
     * @var boolean
     */
    protected $dontShowPrice;

    /**
     * @access public
     * @var string
     */
    protected $noPriceMessage;

    /**
     * @access public
     * @var string
     */
    protected $outOfStockMessage;

    /**
     * @access public
     * @var ItemOutOfStockBehavior
     */
    protected $outOfStockBehavior;

    /**
     * @access public
     * @var string
     */
    protected $relatedItemsDescription;

    /**
     * @access public
     * @var string
     */
    protected $specialsDescription;

    /**
     * @access public
     * @var PricingMatrix
     */
    protected $pricingMatrix;

    /**
     * @access public
     * @var ItemAccountingBookDetailList
     */
    protected $accountingBookDetailList;

    /**
     * @access public
     * @var SiteCategoryList
     */
    protected $siteCategoryList;

    /**
     * @access public
     * @var PresentationItemList
     */
    protected $presentationItemList;

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
    	"salesDescription" => "string",
    	"quantityPricingSchedule" => "RecordRef",
    	"deferredRevenueAccount" => "RecordRef",
    	"onSpecial" => "boolean",
    	"itemId" => "string",
    	"upcCode" => "string",
    	"displayName" => "string",
    	"parent" => "RecordRef",
    	"isOnline" => "boolean",
    	"isGcoCompliant" => "boolean",
    	"offerSupport" => "boolean",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"subsidiaryList" => "RecordRefList",
    	"department" => "RecordRef",
    	"includeChildren" => "boolean",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"incomeAccount" => "RecordRef",
    	"numOfAllowedDownloads" => "integer",
    	"daysBeforeExpiration" => "integer",
    	"immediateDownload" => "boolean",
    	"isTaxable" => "boolean",
    	"issueProduct" => "RecordRef",
    	"taxSchedule" => "RecordRef",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"billingSchedule" => "RecordRef",
    	"isFulfillable" => "boolean",
    	"useMarginalRates" => "boolean",
    	"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
    	"pricingGroup" => "RecordRef",
    	"revRecSchedule" => "RecordRef",
    	"vsoePrice" => "float",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"deferRevRec" => "boolean",
    	"storeDisplayName" => "string",
    	"storeDisplayThumbnail" => "RecordRef",
    	"storeDisplayImage" => "RecordRef",
    	"featuredDescription" => "string",
    	"storeDescription" => "string",
    	"storeDetailedDescription" => "string",
    	"storeItemTemplate" => "RecordRef",
    	"pageTitle" => "string",
    	"metaTagHtml" => "string",
    	"excludeFromSitemap" => "boolean",
    	"sitemapPriority" => "SitemapPriority",
    	"searchKeywords" => "string",
    	"isDonationItem" => "boolean",
    	"showDefaultDonationAmount" => "boolean",
    	"maxDonationAmount" => "float",
    	"dontShowPrice" => "boolean",
    	"noPriceMessage" => "string",
    	"outOfStockMessage" => "string",
    	"outOfStockBehavior" => "ItemOutOfStockBehavior",
    	"relatedItemsDescription" => "string",
    	"specialsDescription" => "string",
    	"pricingMatrix" => "PricingMatrix",
    	"accountingBookDetailList" => "ItemAccountingBookDetailList",
    	"siteCategoryList" => "SiteCategoryList",
    	"presentationItemList" => "PresentationItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return DownloadItem
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
     * @return DownloadItem
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
     * Set salesDescription
     *
     * @param string $salesDescription
     * @return DownloadItem
     */
    public function setSalesDescription($salesDescription) {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * Get salesDescription
     *
     * @return string
     */
    public function getSalesDescription() {
        return $this->salesDescription;
    }


    /**
     * Set onSpecial
     *
     * @param boolean $onSpecial
     * @return DownloadItem
     */
    public function setOnSpecial($onSpecial) {
        $this->onSpecial = $onSpecial;
        return $this;
    }

    /**
     * Get onSpecial
     *
     * @return boolean
     */
    public function getOnSpecial() {
        return $this->onSpecial;
    }


    /**
     * Set itemId
     *
     * @param string $itemId
     * @return DownloadItem
     */
    public function setItemId($itemId) {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId() {
        return $this->itemId;
    }


    /**
     * Set upcCode
     *
     * @param string $upcCode
     * @return DownloadItem
     */
    public function setUpcCode($upcCode) {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * Get upcCode
     *
     * @return string
     */
    public function getUpcCode() {
        return $this->upcCode;
    }


    /**
     * Set displayName
     *
     * @param string $displayName
     * @return DownloadItem
     */
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName() {
        return $this->displayName;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return DownloadItem
     */
    public function setIsOnline($isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set isGcoCompliant
     *
     * @param boolean $isGcoCompliant
     * @return DownloadItem
     */
    public function setIsGcoCompliant($isGcoCompliant) {
        $this->isGcoCompliant = $isGcoCompliant;
        return $this;
    }

    /**
     * Get isGcoCompliant
     *
     * @return boolean
     */
    public function getIsGcoCompliant() {
        return $this->isGcoCompliant;
    }


    /**
     * Set offerSupport
     *
     * @param boolean $offerSupport
     * @return DownloadItem
     */
    public function setOfferSupport($offerSupport) {
        $this->offerSupport = $offerSupport;
        return $this;
    }

    /**
     * Get offerSupport
     *
     * @return boolean
     */
    public function getOfferSupport() {
        return $this->offerSupport;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return DownloadItem
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set availableToPartners
     *
     * @param boolean $availableToPartners
     * @return DownloadItem
     */
    public function setAvailableToPartners($availableToPartners) {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * Get availableToPartners
     *
     * @return boolean
     */
    public function getAvailableToPartners() {
        return $this->availableToPartners;
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return DownloadItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList) {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * Get subsidiaryList
     *
     * @return RecordRefList
     */
    public function getSubsidiaryList() {
        return $this->subsidiaryList;
    }


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return DownloadItem
     */
    public function setIncludeChildren($includeChildren) {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * Get includeChildren
     *
     * @return boolean
     */
    public function getIncludeChildren() {
        return $this->includeChildren;
    }


    /**
     * Set numOfAllowedDownloads
     *
     * @param integer $numOfAllowedDownloads
     * @return DownloadItem
     */
    public function setNumOfAllowedDownloads($numOfAllowedDownloads) {
        $this->numOfAllowedDownloads = $numOfAllowedDownloads;
        return $this;
    }

    /**
     * Get numOfAllowedDownloads
     *
     * @return integer
     */
    public function getNumOfAllowedDownloads() {
        return $this->numOfAllowedDownloads;
    }


    /**
     * Set daysBeforeExpiration
     *
     * @param integer $daysBeforeExpiration
     * @return DownloadItem
     */
    public function setDaysBeforeExpiration($daysBeforeExpiration) {
        $this->daysBeforeExpiration = $daysBeforeExpiration;
        return $this;
    }

    /**
     * Get daysBeforeExpiration
     *
     * @return integer
     */
    public function getDaysBeforeExpiration() {
        return $this->daysBeforeExpiration;
    }


    /**
     * Set immediateDownload
     *
     * @param boolean $immediateDownload
     * @return DownloadItem
     */
    public function setImmediateDownload($immediateDownload) {
        $this->immediateDownload = $immediateDownload;
        return $this;
    }

    /**
     * Get immediateDownload
     *
     * @return boolean
     */
    public function getImmediateDownload() {
        return $this->immediateDownload;
    }


    /**
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return DownloadItem
     */
    public function setIsTaxable($isTaxable) {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * Get isTaxable
     *
     * @return boolean
     */
    public function getIsTaxable() {
        return $this->isTaxable;
    }


    /**
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return DownloadItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType) {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * Get costEstimateType
     *
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType() {
        return $this->costEstimateType;
    }


    /**
     * Set costEstimate
     *
     * @param float $costEstimate
     * @return DownloadItem
     */
    public function setCostEstimate($costEstimate) {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * Get costEstimate
     *
     * @return float
     */
    public function getCostEstimate() {
        return $this->costEstimate;
    }


    /**
     * Set isFulfillable
     *
     * @param boolean $isFulfillable
     * @return DownloadItem
     */
    public function setIsFulfillable($isFulfillable) {
        $this->isFulfillable = $isFulfillable;
        return $this;
    }

    /**
     * Get isFulfillable
     *
     * @return boolean
     */
    public function getIsFulfillable() {
        return $this->isFulfillable;
    }


    /**
     * Set useMarginalRates
     *
     * @param boolean $useMarginalRates
     * @return DownloadItem
     */
    public function setUseMarginalRates($useMarginalRates) {
        $this->useMarginalRates = $useMarginalRates;
        return $this;
    }

    /**
     * Get useMarginalRates
     *
     * @return boolean
     */
    public function getUseMarginalRates() {
        return $this->useMarginalRates;
    }


    /**
     * Set overallQuantityPricingType
     *
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return DownloadItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType) {
        $this->overallQuantityPricingType = $overallQuantityPricingType;
        return $this;
    }

    /**
     * Get overallQuantityPricingType
     *
     * @return ItemOverallQuantityPricingType
     */
    public function getOverallQuantityPricingType() {
        return $this->overallQuantityPricingType;
    }


    /**
     * Set vsoePrice
     *
     * @param float $vsoePrice
     * @return DownloadItem
     */
    public function setVsoePrice($vsoePrice) {
        $this->vsoePrice = $vsoePrice;
        return $this;
    }

    /**
     * Get vsoePrice
     *
     * @return float
     */
    public function getVsoePrice() {
        return $this->vsoePrice;
    }


    /**
     * Set vsoeSopGroup
     *
     * @param VsoeSopGroup $vsoeSopGroup
     * @return DownloadItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup) {
        $this->vsoeSopGroup = $vsoeSopGroup;
        return $this;
    }

    /**
     * Get vsoeSopGroup
     *
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup() {
        return $this->vsoeSopGroup;
    }


    /**
     * Set vsoeDeferral
     *
     * @param VsoeDeferral $vsoeDeferral
     * @return DownloadItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral) {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * Get vsoeDeferral
     *
     * @return VsoeDeferral
     */
    public function getVsoeDeferral() {
        return $this->vsoeDeferral;
    }


    /**
     * Set vsoePermitDiscount
     *
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return DownloadItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount) {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * Get vsoePermitDiscount
     *
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount() {
        return $this->vsoePermitDiscount;
    }


    /**
     * Set vsoeDelivered
     *
     * @param boolean $vsoeDelivered
     * @return DownloadItem
     */
    public function setVsoeDelivered($vsoeDelivered) {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * Get vsoeDelivered
     *
     * @return boolean
     */
    public function getVsoeDelivered() {
        return $this->vsoeDelivered;
    }


    /**
     * Set deferRevRec
     *
     * @param boolean $deferRevRec
     * @return DownloadItem
     */
    public function setDeferRevRec($deferRevRec) {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * Get deferRevRec
     *
     * @return boolean
     */
    public function getDeferRevRec() {
        return $this->deferRevRec;
    }


    /**
     * Set storeDisplayName
     *
     * @param string $storeDisplayName
     * @return DownloadItem
     */
    public function setStoreDisplayName($storeDisplayName) {
        $this->storeDisplayName = $storeDisplayName;
        return $this;
    }

    /**
     * Get storeDisplayName
     *
     * @return string
     */
    public function getStoreDisplayName() {
        return $this->storeDisplayName;
    }


    /**
     * Set featuredDescription
     *
     * @param string $featuredDescription
     * @return DownloadItem
     */
    public function setFeaturedDescription($featuredDescription) {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * Get featuredDescription
     *
     * @return string
     */
    public function getFeaturedDescription() {
        return $this->featuredDescription;
    }


    /**
     * Set storeDescription
     *
     * @param string $storeDescription
     * @return DownloadItem
     */
    public function setStoreDescription($storeDescription) {
        $this->storeDescription = $storeDescription;
        return $this;
    }

    /**
     * Get storeDescription
     *
     * @return string
     */
    public function getStoreDescription() {
        return $this->storeDescription;
    }


    /**
     * Set storeDetailedDescription
     *
     * @param string $storeDetailedDescription
     * @return DownloadItem
     */
    public function setStoreDetailedDescription($storeDetailedDescription) {
        $this->storeDetailedDescription = $storeDetailedDescription;
        return $this;
    }

    /**
     * Get storeDetailedDescription
     *
     * @return string
     */
    public function getStoreDetailedDescription() {
        return $this->storeDetailedDescription;
    }


    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return DownloadItem
     */
    public function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->pageTitle;
    }


    /**
     * Set metaTagHtml
     *
     * @param string $metaTagHtml
     * @return DownloadItem
     */
    public function setMetaTagHtml($metaTagHtml) {
        $this->metaTagHtml = $metaTagHtml;
        return $this;
    }

    /**
     * Get metaTagHtml
     *
     * @return string
     */
    public function getMetaTagHtml() {
        return $this->metaTagHtml;
    }


    /**
     * Set excludeFromSitemap
     *
     * @param boolean $excludeFromSitemap
     * @return DownloadItem
     */
    public function setExcludeFromSitemap($excludeFromSitemap) {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * Get excludeFromSitemap
     *
     * @return boolean
     */
    public function getExcludeFromSitemap() {
        return $this->excludeFromSitemap;
    }


    /**
     * Set sitemapPriority
     *
     * @param SitemapPriority $sitemapPriority
     * @return DownloadItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority) {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * Get sitemapPriority
     *
     * @return SitemapPriority
     */
    public function getSitemapPriority() {
        return $this->sitemapPriority;
    }


    /**
     * Set searchKeywords
     *
     * @param string $searchKeywords
     * @return DownloadItem
     */
    public function setSearchKeywords($searchKeywords) {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * Get searchKeywords
     *
     * @return string
     */
    public function getSearchKeywords() {
        return $this->searchKeywords;
    }


    /**
     * Set isDonationItem
     *
     * @param boolean $isDonationItem
     * @return DownloadItem
     */
    public function setIsDonationItem($isDonationItem) {
        $this->isDonationItem = $isDonationItem;
        return $this;
    }

    /**
     * Get isDonationItem
     *
     * @return boolean
     */
    public function getIsDonationItem() {
        return $this->isDonationItem;
    }


    /**
     * Set showDefaultDonationAmount
     *
     * @param boolean $showDefaultDonationAmount
     * @return DownloadItem
     */
    public function setShowDefaultDonationAmount($showDefaultDonationAmount) {
        $this->showDefaultDonationAmount = $showDefaultDonationAmount;
        return $this;
    }

    /**
     * Get showDefaultDonationAmount
     *
     * @return boolean
     */
    public function getShowDefaultDonationAmount() {
        return $this->showDefaultDonationAmount;
    }


    /**
     * Set maxDonationAmount
     *
     * @param float $maxDonationAmount
     * @return DownloadItem
     */
    public function setMaxDonationAmount($maxDonationAmount) {
        $this->maxDonationAmount = $maxDonationAmount;
        return $this;
    }

    /**
     * Get maxDonationAmount
     *
     * @return float
     */
    public function getMaxDonationAmount() {
        return $this->maxDonationAmount;
    }


    /**
     * Set dontShowPrice
     *
     * @param boolean $dontShowPrice
     * @return DownloadItem
     */
    public function setDontShowPrice($dontShowPrice) {
        $this->dontShowPrice = $dontShowPrice;
        return $this;
    }

    /**
     * Get dontShowPrice
     *
     * @return boolean
     */
    public function getDontShowPrice() {
        return $this->dontShowPrice;
    }


    /**
     * Set noPriceMessage
     *
     * @param string $noPriceMessage
     * @return DownloadItem
     */
    public function setNoPriceMessage($noPriceMessage) {
        $this->noPriceMessage = $noPriceMessage;
        return $this;
    }

    /**
     * Get noPriceMessage
     *
     * @return string
     */
    public function getNoPriceMessage() {
        return $this->noPriceMessage;
    }


    /**
     * Set outOfStockMessage
     *
     * @param string $outOfStockMessage
     * @return DownloadItem
     */
    public function setOutOfStockMessage($outOfStockMessage) {
        $this->outOfStockMessage = $outOfStockMessage;
        return $this;
    }

    /**
     * Get outOfStockMessage
     *
     * @return string
     */
    public function getOutOfStockMessage() {
        return $this->outOfStockMessage;
    }


    /**
     * Set outOfStockBehavior
     *
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return DownloadItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior) {
        $this->outOfStockBehavior = $outOfStockBehavior;
        return $this;
    }

    /**
     * Get outOfStockBehavior
     *
     * @return ItemOutOfStockBehavior
     */
    public function getOutOfStockBehavior() {
        return $this->outOfStockBehavior;
    }


    /**
     * Set relatedItemsDescription
     *
     * @param string $relatedItemsDescription
     * @return DownloadItem
     */
    public function setRelatedItemsDescription($relatedItemsDescription) {
        $this->relatedItemsDescription = $relatedItemsDescription;
        return $this;
    }

    /**
     * Get relatedItemsDescription
     *
     * @return string
     */
    public function getRelatedItemsDescription() {
        return $this->relatedItemsDescription;
    }


    /**
     * Set specialsDescription
     *
     * @param string $specialsDescription
     * @return DownloadItem
     */
    public function setSpecialsDescription($specialsDescription) {
        $this->specialsDescription = $specialsDescription;
        return $this;
    }

    /**
     * Get specialsDescription
     *
     * @return string
     */
    public function getSpecialsDescription() {
        return $this->specialsDescription;
    }


    /**
     * Set pricingMatrix
     *
     * @param PricingMatrix $pricingMatrix
     * @return DownloadItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix) {
        $this->pricingMatrix = $pricingMatrix;
        return $this;
    }

    /**
     * Get pricingMatrix
     *
     * @return PricingMatrix
     */
    public function getPricingMatrix() {
        return $this->pricingMatrix;
    }


    /**
     * Set accountingBookDetailList
     *
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return DownloadItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList) {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * Get accountingBookDetailList
     *
     * @return ItemAccountingBookDetailList
     */
    public function getAccountingBookDetailList() {
        return $this->accountingBookDetailList;
    }


    /**
     * Set siteCategoryList
     *
     * @param SiteCategoryList $siteCategoryList
     * @return DownloadItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList) {
        $this->siteCategoryList = $siteCategoryList;
        return $this;
    }

    /**
     * Get siteCategoryList
     *
     * @return SiteCategoryList
     */
    public function getSiteCategoryList() {
        return $this->siteCategoryList;
    }


    /**
     * Set presentationItemList
     *
     * @param PresentationItemList $presentationItemList
     * @return DownloadItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList) {
        $this->presentationItemList = $presentationItemList;
        return $this;
    }

    /**
     * Get presentationItemList
     *
     * @return PresentationItemList
     */
    public function getPresentationItemList() {
        return $this->presentationItemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return DownloadItem
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
     * @return DownloadItem
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
     * @return DownloadItem
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