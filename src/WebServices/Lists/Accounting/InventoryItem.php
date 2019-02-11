<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemSubType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\InventoryItemFraudRisk;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemMatrixType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemWeightUnit;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCarrier;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ScheduleBCode;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemPreferenceCriterion;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOverallQuantityPricingType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemInvtClassification;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\SitemapPriority;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOutOfStockBehavior;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\HazmatPackingGroup;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCostingMethod;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\PeriodicLotSizeType;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * InventoryItem
 */
class InventoryItem extends Record {

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
     * @var string
     */
    protected $purchaseDescription;

    /**
     * @access public
     * @var boolean
     */
    protected $copyDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $expenseAccount;

    /**
     * @access public
     * @var dateTime
     */
    protected $dateConvertedToInv;

    /**
     * @access public
     * @var ItemType
     */
    protected $originalItemType;

    /**
     * @access public
     * @var ItemSubType
     */
    protected $originalItemSubtype;

    /**
     * @access public
     * @var RecordRef
     */
    public $cogsAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $intercoCogsAccount;

    /**
     * @access public
     * @var string
     */
    protected $salesDescription;

    /**
     * @access public
     * @var InventoryItemFraudRisk
     */
    protected $fraudRisk;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRef
     */
    public $incomeAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $intercoIncomeAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $dropshipExpenseAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var ItemMatrixType
     */
    protected $matrixType;

    /**
     * @access public
     * @var RecordRef
     */
    public $assetAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $matchBillToReceipt;

    /**
     * @access public
     * @var RecordRef
     */
    public $billQtyVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $billPriceVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $billExchRateVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $gainLossAccount;

    /**
     * @access public
     * @var float
     */
    protected $shippingCost;

    /**
     * @access public
     * @var string
     */
    protected $shippingCostUnits;

    /**
     * @access public
     * @var float
     */
    protected $handlingCost;

    /**
     * @access public
     * @var string
     */
    protected $handlingCostUnits;

    /**
     * @access public
     * @var float
     */
    protected $weight;

    /**
     * @access public
     * @var ItemWeightUnit
     */
    protected $weightUnit;

    /**
     * @access public
     * @var string
     */
    protected $weightUnits;

    /**
     * @access public
     * @var string
     */
    protected $costingMethodDisplay;

    /**
     * @access public
     * @var RecordRef
     */
    public $unitsType;

    /**
     * @access public
     * @var RecordRef
     */
    public $stockUnit;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseUnit;

    /**
     * @access public
     * @var RecordRef
     */
    public $saleUnit;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $trackLandedCost;

    /**
     * @access public
     * @var boolean
     */
    protected $isDropShipItem;

    /**
     * @access public
     * @var boolean
     */
    protected $isSpecialOrderItem;

    /**
     * @access public
     * @var string
     */
    protected $stockDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $deferredRevenueAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $producer;

    /**
     * @access public
     * @var string
     */
    protected $manufacturer;

    /**
     * @access public
     * @var RecordRef
     */
    public $revRecSchedule;

    /**
     * @access public
     * @var string
     */
    protected $mpn;

    /**
     * @access public
     * @var boolean
     */
    protected $multManufactureAddr;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerAddr1;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerCity;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerState;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerZip;

    /**
     * @access public
     * @var Country
     */
    protected $countryOfManufacture;

    /**
     * @access public
     * @var boolean
     */
    protected $roundUpAsComponent;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantity;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderAmount;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantity;

    /**
     * @access public
     * @var float
     */
    protected $receiptAmount;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantityDiff;

    /**
     * @access public
     * @var RecordRef
     */
    public $defaultItemShipMethod;

    /**
     * @access public
     * @var ItemCarrier
     */
    protected $itemCarrier;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $itemShipMethodList;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerTaxId;

    /**
     * @access public
     * @var string
     */
    protected $scheduleBNumber;

    /**
     * @access public
     * @var integer
     */
    protected $scheduleBQuantity;

    /**
     * @access public
     * @var ScheduleBCode
     */
    protected $scheduleBCode;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerTariff;

    /**
     * @access public
     * @var ItemPreferenceCriterion
     */
    protected $preferenceCriterion;

    /**
     * @access public
     * @var integer
     */
    protected $minimumQuantity;

    /**
     * @access public
     * @var boolean
     */
    protected $enforceMinQtyInternally;

    /**
     * @access public
     * @var string
     */
    protected $minimumQuantityUnits;

    /**
     * @access public
     * @var RecordRef
     */
    public $softDescriptor;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipPackage;

    /**
     * @access public
     * @var boolean
     */
    protected $shipIndividually;

    /**
     * @access public
     * @var RecordRef
     */
    public $costCategory;

    /**
     * @access public
     * @var boolean
     */
    protected $pricesIncludeTax;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchasePriceVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $quantityPricingSchedule;

    /**
     * @access public
     * @var string
     */
    protected $reorderPointUnits;

    /**
     * @access public
     * @var boolean
     */
    protected $useMarginalRates;

    /**
     * @access public
     * @var string
     */
    protected $preferredStockLevelUnits;

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
     * @var float
     */
    protected $transferPrice;

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
     * @var string
     */
    protected $costEstimateUnits;

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
     * @var RecordRef
     */
    public $preferredLocation;

    /**
     * @access public
     * @var integer
     */
    protected $reorderMultiple;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastInvtCountDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $nextInvtCountDate;

    /**
     * @access public
     * @var integer
     */
    protected $invtCountInterval;

    /**
     * @access public
     * @var ItemInvtClassification
     */
    protected $invtClassification;

    /**
     * @access public
     * @var string
     */
    protected $costUnits;

    /**
     * @access public
     * @var float
     */
    protected $totalValue;

    /**
     * @access public
     * @var float
     */
    protected $averageCost;

    /**
     * @access public
     * @var boolean
     */
    protected $useBins;

    /**
     * @access public
     * @var string
     */
    protected $quantityReorderUnits;

    /**
     * @access public
     * @var integer
     */
    protected $leadTime;

    /**
     * @access public
     * @var boolean
     */
    protected $autoLeadTime;

    /**
     * @access public
     * @var float
     */
    protected $lastPurchasePrice;

    /**
     * @access public
     * @var boolean
     */
    protected $autoPreferredStockLevel;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevelDays;

    /**
     * @access public
     * @var float
     */
    protected $safetyStockLevel;

    /**
     * @access public
     * @var integer
     */
    protected $safetyStockLevelDays;

    /**
     * @access public
     * @var integer
     */
    protected $backwardConsumptionDays;

    /**
     * @access public
     * @var boolean
     */
    protected $seasonalDemand;

    /**
     * @access public
     * @var string
     */
    protected $safetyStockLevelUnits;

    /**
     * @access public
     * @var float
     */
    protected $demandModifier;

    /**
     * @access public
     * @var RecordRef
     */
    public $distributionNetwork;

    /**
     * @access public
     * @var RecordRef
     */
    public $distributionCategory;

    /**
     * @access public
     * @var boolean
     */
    protected $autoReorderPoint;

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
     * @var boolean
     */
    protected $onSpecial;

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
     * @var string
     */
    protected $featuredDescription;

    /**
     * @access public
     * @var string
     */
    protected $shoppingDotComCategory;

    /**
     * @access public
     * @var integer
     */
    protected $shopzillaCategoryId;

    /**
     * @access public
     * @var string
     */
    protected $nexTagCategory;

    /**
     * @access public
     * @var string
     */
    protected $urlComponent;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

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
     * @var string
     */
    protected $vendorName;

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
    protected $isHazmatItem;

    /**
     * @access public
     * @var string
     */
    protected $hazmatId;

    /**
     * @access public
     * @var string
     */
    protected $hazmatShippingName;

    /**
     * @access public
     * @var string
     */
    protected $hazmatHazardClass;

    /**
     * @access public
     * @var HazmatPackingGroup
     */
    protected $hazmatPackingGroup;

    /**
     * @access public
     * @var string
     */
    protected $hazmatItemUnits;

    /**
     * @access public
     * @var float
     */
    protected $hazmatItemUnitsQty;

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
     * @var RecordRef
     */
    public $department;

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
     * @var ItemCostingMethod
     */
    protected $costingMethod;

    /**
     * @access public
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevel;

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
     * @var RecordRef
     */
    public $purchaseTaxCode;

    /**
     * @access public
     * @var float
     */
    protected $defaultReturnCost;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyReplenishmentMethod;

    /**
     * @access public
     * @var RecordRef
     */
    public $alternateDemandSourceItem;

    /**
     * @access public
     * @var float
     */
    protected $fixedLotSize;

    /**
     * @access public
     * @var PeriodicLotSizeType
     */
    protected $periodicLotSizeType;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyType;

    /**
     * @access public
     * @var integer
     */
    protected $demandTimeFence;

    /**
     * @access public
     * @var integer
     */
    protected $supplyTimeFence;

    /**
     * @access public
     * @var integer
     */
    protected $rescheduleInDays;

    /**
     * @access public
     * @var integer
     */
    protected $rescheduleOutDays;

    /**
     * @access public
     * @var integer
     */
    protected $periodicLotSizeDays;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyLotSizingMethod;

    /**
     * @access public
     * @var integer
     */
    protected $forwardConsumptionDays;

    /**
     * @access public
     * @var RecordRef
     */
    public $demandSource;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var float
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var float
     */
    protected $onHandValueMli;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var float
     */
    protected $reorderPoint;

    /**
     * @access public
     * @var string
     */
    protected $quantityCommittedUnits;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesTaxCode;

    /**
     * @access public
     * @var string
     */
    protected $quantityAvailableUnits;

    /**
     * @access public
     * @var string
     */
    protected $quantityOnHandUnits;

    /**
     * @access public
     * @var RecordRef
     */
    public $vendor;

    /**
     * @access public
     * @var string
     */
    protected $quantityOnOrderUnits;

    /**
     * @access public
     * @var ProductFeedList
     */
    protected $productFeedList;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var ItemOptionsList
     */
    protected $itemOptionsList;

    /**
     * @access public
     * @var ItemVendorList
     */
    protected $itemVendorList;

    /**
     * @access public
     * @var SiteCategoryList
     */
    protected $siteCategoryList;

    /**
     * @access public
     * @var TranslationList
     */
    protected $translationsList;

    /**
     * @access public
     * @var InventoryItemBinNumberList
     */
    protected $binNumberList;

    /**
     * @access public
     * @var InventoryItemLocationsList
     */
    protected $locationsList;

    /**
     * @access public
     * @var MatrixOptionList
     */
    protected $matrixOptionList;

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
    	"purchaseDescription" => "string",
    	"copyDescription" => "boolean",
    	"expenseAccount" => "RecordRef",
    	"dateConvertedToInv" => "dateTime",
    	"originalItemType" => "ItemType",
    	"originalItemSubtype" => "ItemSubType",
    	"cogsAccount" => "RecordRef",
    	"intercoCogsAccount" => "RecordRef",
    	"salesDescription" => "string",
    	"fraudRisk" => "InventoryItemFraudRisk",
    	"includeChildren" => "boolean",
    	"incomeAccount" => "RecordRef",
    	"intercoIncomeAccount" => "RecordRef",
    	"taxSchedule" => "RecordRef",
    	"dropshipExpenseAccount" => "RecordRef",
    	"deferRevRec" => "boolean",
    	"isTaxable" => "boolean",
    	"matrixType" => "ItemMatrixType",
    	"assetAccount" => "RecordRef",
    	"matchBillToReceipt" => "boolean",
    	"billQtyVarianceAcct" => "RecordRef",
    	"billPriceVarianceAcct" => "RecordRef",
    	"billExchRateVarianceAcct" => "RecordRef",
    	"gainLossAccount" => "RecordRef",
    	"shippingCost" => "float",
    	"shippingCostUnits" => "string",
    	"handlingCost" => "float",
    	"handlingCostUnits" => "string",
    	"weight" => "float",
    	"weightUnit" => "ItemWeightUnit",
    	"weightUnits" => "string",
    	"costingMethodDisplay" => "string",
    	"unitsType" => "RecordRef",
    	"stockUnit" => "RecordRef",
    	"purchaseUnit" => "RecordRef",
    	"saleUnit" => "RecordRef",
    	"issueProduct" => "RecordRef",
    	"billingSchedule" => "RecordRef",
    	"trackLandedCost" => "boolean",
    	"isDropShipItem" => "boolean",
    	"isSpecialOrderItem" => "boolean",
    	"stockDescription" => "string",
    	"deferredRevenueAccount" => "RecordRef",
    	"producer" => "boolean",
    	"manufacturer" => "string",
    	"revRecSchedule" => "RecordRef",
    	"mpn" => "string",
    	"multManufactureAddr" => "boolean",
    	"manufacturerAddr1" => "string",
    	"manufacturerCity" => "string",
    	"manufacturerState" => "string",
    	"manufacturerZip" => "string",
    	"countryOfManufacture" => "Country",
    	"roundUpAsComponent" => "boolean",
    	"purchaseOrderQuantity" => "float",
    	"purchaseOrderAmount" => "float",
    	"purchaseOrderQuantityDiff" => "float",
    	"receiptQuantity" => "float",
    	"receiptAmount" => "float",
    	"receiptQuantityDiff" => "float",
    	"defaultItemShipMethod" => "RecordRef",
    	"itemCarrier" => "ItemCarrier",
    	"itemShipMethodList" => "RecordRefList",
    	"manufacturerTaxId" => "string",
    	"scheduleBNumber" => "string",
    	"scheduleBQuantity" => "integer",
    	"scheduleBCode" => "ScheduleBCode",
    	"manufacturerTariff" => "string",
    	"preferenceCriterion" => "ItemPreferenceCriterion",
    	"minimumQuantity" => "integer",
    	"enforceMinQtyInternally" => "boolean",
    	"minimumQuantityUnits" => "string",
    	"softDescriptor" => "RecordRef",
    	"shipPackage" => "RecordRef",
    	"shipIndividually" => "boolean",
    	"costCategory" => "RecordRef",
    	"pricesIncludeTax" => "boolean",
    	"purchasePriceVarianceAcct" => "RecordRef",
    	"quantityPricingSchedule" => "RecordRef",
    	"reorderPointUnits" => "string",
    	"useMarginalRates" => "boolean",
    	"preferredStockLevelUnits" => "string",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"transferPrice" => "float",
    	"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
    	"pricingGroup" => "RecordRef",
    	"vsoePrice" => "float",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"costEstimateUnits" => "string",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"preferredLocation" => "RecordRef",
    	"reorderMultiple" => "integer",
    	"cost" => "float",
    	"lastInvtCountDate" => "dateTime",
    	"nextInvtCountDate" => "dateTime",
    	"invtCountInterval" => "integer",
    	"invtClassification" => "ItemInvtClassification",
    	"costUnits" => "string",
    	"totalValue" => "float",
    	"averageCost" => "float",
    	"useBins" => "boolean",
    	"quantityReorderUnits" => "string",
    	"leadTime" => "integer",
    	"autoLeadTime" => "boolean",
    	"lastPurchasePrice" => "float",
    	"autoPreferredStockLevel" => "boolean",
    	"preferredStockLevelDays" => "float",
    	"safetyStockLevel" => "float",
    	"safetyStockLevelDays" => "integer",
    	"backwardConsumptionDays" => "integer",
    	"seasonalDemand" => "boolean",
    	"safetyStockLevelUnits" => "string",
    	"demandModifier" => "float",
    	"distributionNetwork" => "RecordRef",
    	"distributionCategory" => "RecordRef",
    	"autoReorderPoint" => "boolean",
    	"storeDisplayName" => "string",
    	"storeDisplayThumbnail" => "RecordRef",
    	"storeDisplayImage" => "RecordRef",
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
    	"onSpecial" => "boolean",
    	"outOfStockBehavior" => "ItemOutOfStockBehavior",
    	"relatedItemsDescription" => "string",
    	"specialsDescription" => "string",
    	"featuredDescription" => "string",
    	"shoppingDotComCategory" => "string",
    	"shopzillaCategoryId" => "integer",
    	"nexTagCategory" => "string",
    	"urlComponent" => "string",
    	"customForm" => "RecordRef",
    	"itemId" => "string",
    	"upcCode" => "string",
    	"displayName" => "string",
    	"vendorName" => "string",
    	"parent" => "RecordRef",
    	"isOnline" => "boolean",
    	"isHazmatItem" => "boolean",
    	"hazmatId" => "string",
    	"hazmatShippingName" => "string",
    	"hazmatHazardClass" => "string",
    	"hazmatPackingGroup" => "HazmatPackingGroup",
    	"hazmatItemUnits" => "string",
    	"hazmatItemUnitsQty" => "float",
    	"isGcoCompliant" => "boolean",
    	"offerSupport" => "boolean",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"costingMethod" => "ItemCostingMethod",
    	"currency" => "string",
    	"preferredStockLevel" => "float",
    	"pricingMatrix" => "PricingMatrix",
    	"accountingBookDetailList" => "ItemAccountingBookDetailList",
    	"purchaseTaxCode" => "RecordRef",
    	"defaultReturnCost" => "float",
    	"supplyReplenishmentMethod" => "RecordRef",
    	"alternateDemandSourceItem" => "RecordRef",
    	"fixedLotSize" => "float",
    	"periodicLotSizeType" => "PeriodicLotSizeType",
    	"supplyType" => "RecordRef",
    	"demandTimeFence" => "integer",
    	"supplyTimeFence" => "integer",
    	"rescheduleInDays" => "integer",
    	"rescheduleOutDays" => "integer",
    	"periodicLotSizeDays" => "integer",
    	"supplyLotSizingMethod" => "RecordRef",
    	"forwardConsumptionDays" => "integer",
    	"demandSource" => "RecordRef",
    	"quantityBackOrdered" => "float",
    	"quantityCommitted" => "float",
    	"quantityAvailable" => "float",
    	"quantityOnHand" => "float",
    	"onHandValueMli" => "float",
    	"quantityOnOrder" => "float",
    	"rate" => "float",
    	"reorderPoint" => "float",
    	"quantityCommittedUnits" => "string",
    	"salesTaxCode" => "RecordRef",
    	"quantityAvailableUnits" => "string",
    	"quantityOnHandUnits" => "string",
    	"vendor" => "RecordRef",
    	"quantityOnOrderUnits" => "string",
    	"productFeedList" => "ProductFeedList",
    	"subsidiaryList" => "RecordRefList",
    	"itemOptionsList" => "ItemOptionsList",
    	"itemVendorList" => "ItemVendorList",
    	"siteCategoryList" => "SiteCategoryList",
    	"translationsList" => "TranslationList",
    	"binNumberList" => "InventoryItemBinNumberList",
    	"locationsList" => "InventoryItemLocationsList",
    	"matrixOptionList" => "MatrixOptionList",
    	"presentationItemList" => "PresentationItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set purchaseDescription
     *
     * @param string $purchaseDescription
     * @return InventoryItem
     */
    public function setPurchaseDescription($purchaseDescription) {
        $this->purchaseDescription = $purchaseDescription;
        return $this;
    }

    /**
     * Get purchaseDescription
     *
     * @return string
     */
    public function getPurchaseDescription() {
        return $this->purchaseDescription;
    }


    /**
     * Set copyDescription
     *
     * @param boolean $copyDescription
     * @return InventoryItem
     */
    public function setCopyDescription($copyDescription) {
        $this->copyDescription = $copyDescription;
        return $this;
    }

    /**
     * Get copyDescription
     *
     * @return boolean
     */
    public function getCopyDescription() {
        return $this->copyDescription;
    }


    /**
     * Set dateConvertedToInv
     *
     * @param \DateTime $dateConvertedToInv
     * @return InventoryItem
     */
    public function setDateConvertedToInv(\DateTime $dateConvertedToInv) {
        $this->dateConvertedToInv = $dateConvertedToInv->format('c');
        return $this;
    }

    /**
     * Get dateConvertedToInv
     *
     * @return \DateTime
     */
    public function getDateConvertedToInv() {
        return new \DateTime($this->dateConvertedToInv);
    }


    /**
     * Set originalItemType
     *
     * @param ItemType $originalItemType
     * @return InventoryItem
     */
    public function setOriginalItemType(ItemType $originalItemType) {
        $this->originalItemType = $originalItemType;
        return $this;
    }

    /**
     * Get originalItemType
     *
     * @return ItemType
     */
    public function getOriginalItemType() {
        return $this->originalItemType;
    }


    /**
     * Set originalItemSubtype
     *
     * @param ItemSubType $originalItemSubtype
     * @return InventoryItem
     */
    public function setOriginalItemSubtype(ItemSubType $originalItemSubtype) {
        $this->originalItemSubtype = $originalItemSubtype;
        return $this;
    }

    /**
     * Get originalItemSubtype
     *
     * @return ItemSubType
     */
    public function getOriginalItemSubtype() {
        return $this->originalItemSubtype;
    }


    /**
     * Set salesDescription
     *
     * @param string $salesDescription
     * @return InventoryItem
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
     * Set fraudRisk
     *
     * @param InventoryItemFraudRisk $fraudRisk
     * @return InventoryItem
     */
    public function setFraudRisk(InventoryItemFraudRisk $fraudRisk) {
        $this->fraudRisk = $fraudRisk;
        return $this;
    }

    /**
     * Get fraudRisk
     *
     * @return InventoryItemFraudRisk
     */
    public function getFraudRisk() {
        return $this->fraudRisk;
    }


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return InventoryItem
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
     * Set deferRevRec
     *
     * @param boolean $deferRevRec
     * @return InventoryItem
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
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return InventoryItem
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
     * Set matrixType
     *
     * @param ItemMatrixType $matrixType
     * @return InventoryItem
     */
    public function setMatrixType(ItemMatrixType $matrixType) {
        $this->matrixType = $matrixType;
        return $this;
    }

    /**
     * Get matrixType
     *
     * @return ItemMatrixType
     */
    public function getMatrixType() {
        return $this->matrixType;
    }


    /**
     * Set matchBillToReceipt
     *
     * @param boolean $matchBillToReceipt
     * @return InventoryItem
     */
    public function setMatchBillToReceipt($matchBillToReceipt) {
        $this->matchBillToReceipt = $matchBillToReceipt;
        return $this;
    }

    /**
     * Get matchBillToReceipt
     *
     * @return boolean
     */
    public function getMatchBillToReceipt() {
        return $this->matchBillToReceipt;
    }


    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return InventoryItem
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
     * Set shippingCostUnits
     *
     * @param string $shippingCostUnits
     * @return InventoryItem
     */
    public function setShippingCostUnits($shippingCostUnits) {
        $this->shippingCostUnits = $shippingCostUnits;
        return $this;
    }

    /**
     * Get shippingCostUnits
     *
     * @return string
     */
    public function getShippingCostUnits() {
        return $this->shippingCostUnits;
    }


    /**
     * Set handlingCost
     *
     * @param float $handlingCost
     * @return InventoryItem
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
     * Set handlingCostUnits
     *
     * @param string $handlingCostUnits
     * @return InventoryItem
     */
    public function setHandlingCostUnits($handlingCostUnits) {
        $this->handlingCostUnits = $handlingCostUnits;
        return $this;
    }

    /**
     * Get handlingCostUnits
     *
     * @return string
     */
    public function getHandlingCostUnits() {
        return $this->handlingCostUnits;
    }


    /**
     * Set weight
     *
     * @param float $weight
     * @return InventoryItem
     */
    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight() {
        return $this->weight;
    }


    /**
     * Set weightUnit
     *
     * @param ItemWeightUnit $weightUnit
     * @return InventoryItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit) {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * Get weightUnit
     *
     * @return ItemWeightUnit
     */
    public function getWeightUnit() {
        return $this->weightUnit;
    }


    /**
     * Set weightUnits
     *
     * @param string $weightUnits
     * @return InventoryItem
     */
    public function setWeightUnits($weightUnits) {
        $this->weightUnits = $weightUnits;
        return $this;
    }

    /**
     * Get weightUnits
     *
     * @return string
     */
    public function getWeightUnits() {
        return $this->weightUnits;
    }


    /**
     * Set costingMethodDisplay
     *
     * @param string $costingMethodDisplay
     * @return InventoryItem
     */
    public function setCostingMethodDisplay($costingMethodDisplay) {
        $this->costingMethodDisplay = $costingMethodDisplay;
        return $this;
    }

    /**
     * Get costingMethodDisplay
     *
     * @return string
     */
    public function getCostingMethodDisplay() {
        return $this->costingMethodDisplay;
    }


    /**
     * Set trackLandedCost
     *
     * @param boolean $trackLandedCost
     * @return InventoryItem
     */
    public function setTrackLandedCost($trackLandedCost) {
        $this->trackLandedCost = $trackLandedCost;
        return $this;
    }

    /**
     * Get trackLandedCost
     *
     * @return boolean
     */
    public function getTrackLandedCost() {
        return $this->trackLandedCost;
    }


    /**
     * Set isDropShipItem
     *
     * @param boolean $isDropShipItem
     * @return InventoryItem
     */
    public function setIsDropShipItem($isDropShipItem) {
        $this->isDropShipItem = $isDropShipItem;
        return $this;
    }

    /**
     * Get isDropShipItem
     *
     * @return boolean
     */
    public function getIsDropShipItem() {
        return $this->isDropShipItem;
    }


    /**
     * Set isSpecialOrderItem
     *
     * @param boolean $isSpecialOrderItem
     * @return InventoryItem
     */
    public function setIsSpecialOrderItem($isSpecialOrderItem) {
        $this->isSpecialOrderItem = $isSpecialOrderItem;
        return $this;
    }

    /**
     * Get isSpecialOrderItem
     *
     * @return boolean
     */
    public function getIsSpecialOrderItem() {
        return $this->isSpecialOrderItem;
    }


    /**
     * Set stockDescription
     *
     * @param string $stockDescription
     * @return InventoryItem
     */
    public function setStockDescription($stockDescription) {
        $this->stockDescription = $stockDescription;
        return $this;
    }

    /**
     * Get stockDescription
     *
     * @return string
     */
    public function getStockDescription() {
        return $this->stockDescription;
    }


    /**
     * Set producer
     *
     * @param boolean $producer
     * @return InventoryItem
     */
    public function setProducer($producer) {
        $this->producer = $producer;
        return $this;
    }

    /**
     * Get producer
     *
     * @return boolean
     */
    public function getProducer() {
        return $this->producer;
    }


    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return InventoryItem
     */
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer() {
        return $this->manufacturer;
    }


    /**
     * Set mpn
     *
     * @param string $mpn
     * @return InventoryItem
     */
    public function setMpn($mpn) {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * Get mpn
     *
     * @return string
     */
    public function getMpn() {
        return $this->mpn;
    }


    /**
     * Set multManufactureAddr
     *
     * @param boolean $multManufactureAddr
     * @return InventoryItem
     */
    public function setMultManufactureAddr($multManufactureAddr) {
        $this->multManufactureAddr = $multManufactureAddr;
        return $this;
    }

    /**
     * Get multManufactureAddr
     *
     * @return boolean
     */
    public function getMultManufactureAddr() {
        return $this->multManufactureAddr;
    }


    /**
     * Set manufacturerAddr1
     *
     * @param string $manufacturerAddr1
     * @return InventoryItem
     */
    public function setManufacturerAddr1($manufacturerAddr1) {
        $this->manufacturerAddr1 = $manufacturerAddr1;
        return $this;
    }

    /**
     * Get manufacturerAddr1
     *
     * @return string
     */
    public function getManufacturerAddr1() {
        return $this->manufacturerAddr1;
    }


    /**
     * Set manufacturerCity
     *
     * @param string $manufacturerCity
     * @return InventoryItem
     */
    public function setManufacturerCity($manufacturerCity) {
        $this->manufacturerCity = $manufacturerCity;
        return $this;
    }

    /**
     * Get manufacturerCity
     *
     * @return string
     */
    public function getManufacturerCity() {
        return $this->manufacturerCity;
    }


    /**
     * Set manufacturerState
     *
     * @param string $manufacturerState
     * @return InventoryItem
     */
    public function setManufacturerState($manufacturerState) {
        $this->manufacturerState = $manufacturerState;
        return $this;
    }

    /**
     * Get manufacturerState
     *
     * @return string
     */
    public function getManufacturerState() {
        return $this->manufacturerState;
    }


    /**
     * Set manufacturerZip
     *
     * @param string $manufacturerZip
     * @return InventoryItem
     */
    public function setManufacturerZip($manufacturerZip) {
        $this->manufacturerZip = $manufacturerZip;
        return $this;
    }

    /**
     * Get manufacturerZip
     *
     * @return string
     */
    public function getManufacturerZip() {
        return $this->manufacturerZip;
    }


    /**
     * Set countryOfManufacture
     *
     * @param Country $countryOfManufacture
     * @return InventoryItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture) {
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }

    /**
     * Get countryOfManufacture
     *
     * @return Country
     */
    public function getCountryOfManufacture() {
        return $this->countryOfManufacture;
    }


    /**
     * Set roundUpAsComponent
     *
     * @param boolean $roundUpAsComponent
     * @return InventoryItem
     */
    public function setRoundUpAsComponent($roundUpAsComponent) {
        $this->roundUpAsComponent = $roundUpAsComponent;
        return $this;
    }

    /**
     * Get roundUpAsComponent
     *
     * @return boolean
     */
    public function getRoundUpAsComponent() {
        return $this->roundUpAsComponent;
    }


    /**
     * Set purchaseOrderQuantity
     *
     * @param float $purchaseOrderQuantity
     * @return InventoryItem
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity) {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * Get purchaseOrderQuantity
     *
     * @return float
     */
    public function getPurchaseOrderQuantity() {
        return $this->purchaseOrderQuantity;
    }


    /**
     * Set purchaseOrderAmount
     *
     * @param float $purchaseOrderAmount
     * @return InventoryItem
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount) {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * Get purchaseOrderAmount
     *
     * @return float
     */
    public function getPurchaseOrderAmount() {
        return $this->purchaseOrderAmount;
    }


    /**
     * Set purchaseOrderQuantityDiff
     *
     * @param float $purchaseOrderQuantityDiff
     * @return InventoryItem
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff) {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * Get purchaseOrderQuantityDiff
     *
     * @return float
     */
    public function getPurchaseOrderQuantityDiff() {
        return $this->purchaseOrderQuantityDiff;
    }


    /**
     * Set receiptQuantity
     *
     * @param float $receiptQuantity
     * @return InventoryItem
     */
    public function setReceiptQuantity($receiptQuantity) {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * Get receiptQuantity
     *
     * @return float
     */
    public function getReceiptQuantity() {
        return $this->receiptQuantity;
    }


    /**
     * Set receiptAmount
     *
     * @param float $receiptAmount
     * @return InventoryItem
     */
    public function setReceiptAmount($receiptAmount) {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return float
     */
    public function getReceiptAmount() {
        return $this->receiptAmount;
    }


    /**
     * Set receiptQuantityDiff
     *
     * @param float $receiptQuantityDiff
     * @return InventoryItem
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff) {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * Get receiptQuantityDiff
     *
     * @return float
     */
    public function getReceiptQuantityDiff() {
        return $this->receiptQuantityDiff;
    }


    /**
     * Set itemCarrier
     *
     * @param ItemCarrier $itemCarrier
     * @return InventoryItem
     */
    public function setItemCarrier(ItemCarrier $itemCarrier) {
        $this->itemCarrier = $itemCarrier;
        return $this;
    }

    /**
     * Get itemCarrier
     *
     * @return ItemCarrier
     */
    public function getItemCarrier() {
        return $this->itemCarrier;
    }


    /**
     * Set itemShipMethodList
     *
     * @param RecordRefList $itemShipMethodList
     * @return InventoryItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList) {
        $this->itemShipMethodList = $itemShipMethodList;
        return $this;
    }

    /**
     * Get itemShipMethodList
     *
     * @return RecordRefList
     */
    public function getItemShipMethodList() {
        return $this->itemShipMethodList;
    }


    /**
     * Set manufacturerTaxId
     *
     * @param string $manufacturerTaxId
     * @return InventoryItem
     */
    public function setManufacturerTaxId($manufacturerTaxId) {
        $this->manufacturerTaxId = $manufacturerTaxId;
        return $this;
    }

    /**
     * Get manufacturerTaxId
     *
     * @return string
     */
    public function getManufacturerTaxId() {
        return $this->manufacturerTaxId;
    }


    /**
     * Set scheduleBNumber
     *
     * @param string $scheduleBNumber
     * @return InventoryItem
     */
    public function setScheduleBNumber($scheduleBNumber) {
        $this->scheduleBNumber = $scheduleBNumber;
        return $this;
    }

    /**
     * Get scheduleBNumber
     *
     * @return string
     */
    public function getScheduleBNumber() {
        return $this->scheduleBNumber;
    }


    /**
     * Set scheduleBQuantity
     *
     * @param integer $scheduleBQuantity
     * @return InventoryItem
     */
    public function setScheduleBQuantity($scheduleBQuantity) {
        $this->scheduleBQuantity = $scheduleBQuantity;
        return $this;
    }

    /**
     * Get scheduleBQuantity
     *
     * @return integer
     */
    public function getScheduleBQuantity() {
        return $this->scheduleBQuantity;
    }


    /**
     * Set scheduleBCode
     *
     * @param ScheduleBCode $scheduleBCode
     * @return InventoryItem
     */
    public function setScheduleBCode(ScheduleBCode $scheduleBCode) {
        $this->scheduleBCode = $scheduleBCode;
        return $this;
    }

    /**
     * Get scheduleBCode
     *
     * @return ScheduleBCode
     */
    public function getScheduleBCode() {
        return $this->scheduleBCode;
    }


    /**
     * Set manufacturerTariff
     *
     * @param string $manufacturerTariff
     * @return InventoryItem
     */
    public function setManufacturerTariff($manufacturerTariff) {
        $this->manufacturerTariff = $manufacturerTariff;
        return $this;
    }

    /**
     * Get manufacturerTariff
     *
     * @return string
     */
    public function getManufacturerTariff() {
        return $this->manufacturerTariff;
    }


    /**
     * Set preferenceCriterion
     *
     * @param ItemPreferenceCriterion $preferenceCriterion
     * @return InventoryItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion) {
        $this->preferenceCriterion = $preferenceCriterion;
        return $this;
    }

    /**
     * Get preferenceCriterion
     *
     * @return ItemPreferenceCriterion
     */
    public function getPreferenceCriterion() {
        return $this->preferenceCriterion;
    }


    /**
     * Set minimumQuantity
     *
     * @param integer $minimumQuantity
     * @return InventoryItem
     */
    public function setMinimumQuantity($minimumQuantity) {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Get minimumQuantity
     *
     * @return integer
     */
    public function getMinimumQuantity() {
        return $this->minimumQuantity;
    }


    /**
     * Set enforceMinQtyInternally
     *
     * @param boolean $enforceMinQtyInternally
     * @return InventoryItem
     */
    public function setEnforceMinQtyInternally($enforceMinQtyInternally) {
        $this->enforceMinQtyInternally = $enforceMinQtyInternally;
        return $this;
    }

    /**
     * Get enforceMinQtyInternally
     *
     * @return boolean
     */
    public function getEnforceMinQtyInternally() {
        return $this->enforceMinQtyInternally;
    }


    /**
     * Set minimumQuantityUnits
     *
     * @param string $minimumQuantityUnits
     * @return InventoryItem
     */
    public function setMinimumQuantityUnits($minimumQuantityUnits) {
        $this->minimumQuantityUnits = $minimumQuantityUnits;
        return $this;
    }

    /**
     * Get minimumQuantityUnits
     *
     * @return string
     */
    public function getMinimumQuantityUnits() {
        return $this->minimumQuantityUnits;
    }


    /**
     * Set shipIndividually
     *
     * @param boolean $shipIndividually
     * @return InventoryItem
     */
    public function setShipIndividually($shipIndividually) {
        $this->shipIndividually = $shipIndividually;
        return $this;
    }

    /**
     * Get shipIndividually
     *
     * @return boolean
     */
    public function getShipIndividually() {
        return $this->shipIndividually;
    }


    /**
     * Set pricesIncludeTax
     *
     * @param boolean $pricesIncludeTax
     * @return InventoryItem
     */
    public function setPricesIncludeTax($pricesIncludeTax) {
        $this->pricesIncludeTax = $pricesIncludeTax;
        return $this;
    }

    /**
     * Get pricesIncludeTax
     *
     * @return boolean
     */
    public function getPricesIncludeTax() {
        return $this->pricesIncludeTax;
    }


    /**
     * Set reorderPointUnits
     *
     * @param string $reorderPointUnits
     * @return InventoryItem
     */
    public function setReorderPointUnits($reorderPointUnits) {
        $this->reorderPointUnits = $reorderPointUnits;
        return $this;
    }

    /**
     * Get reorderPointUnits
     *
     * @return string
     */
    public function getReorderPointUnits() {
        return $this->reorderPointUnits;
    }


    /**
     * Set useMarginalRates
     *
     * @param boolean $useMarginalRates
     * @return InventoryItem
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
     * Set preferredStockLevelUnits
     *
     * @param string $preferredStockLevelUnits
     * @return InventoryItem
     */
    public function setPreferredStockLevelUnits($preferredStockLevelUnits) {
        $this->preferredStockLevelUnits = $preferredStockLevelUnits;
        return $this;
    }

    /**
     * Get preferredStockLevelUnits
     *
     * @return string
     */
    public function getPreferredStockLevelUnits() {
        return $this->preferredStockLevelUnits;
    }


    /**
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set transferPrice
     *
     * @param float $transferPrice
     * @return InventoryItem
     */
    public function setTransferPrice($transferPrice) {
        $this->transferPrice = $transferPrice;
        return $this;
    }

    /**
     * Get transferPrice
     *
     * @return float
     */
    public function getTransferPrice() {
        return $this->transferPrice;
    }


    /**
     * Set overallQuantityPricingType
     *
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set costEstimateUnits
     *
     * @param string $costEstimateUnits
     * @return InventoryItem
     */
    public function setCostEstimateUnits($costEstimateUnits) {
        $this->costEstimateUnits = $costEstimateUnits;
        return $this;
    }

    /**
     * Get costEstimateUnits
     *
     * @return string
     */
    public function getCostEstimateUnits() {
        return $this->costEstimateUnits;
    }


    /**
     * Set vsoeDeferral
     *
     * @param VsoeDeferral $vsoeDeferral
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set reorderMultiple
     *
     * @param integer $reorderMultiple
     * @return InventoryItem
     */
    public function setReorderMultiple($reorderMultiple) {
        $this->reorderMultiple = $reorderMultiple;
        return $this;
    }

    /**
     * Get reorderMultiple
     *
     * @return integer
     */
    public function getReorderMultiple() {
        return $this->reorderMultiple;
    }


    /**
     * Set cost
     *
     * @param float $cost
     * @return InventoryItem
     */
    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set lastInvtCountDate
     *
     * @param \DateTime $lastInvtCountDate
     * @return InventoryItem
     */
    public function setLastInvtCountDate(\DateTime $lastInvtCountDate) {
        $this->lastInvtCountDate = $lastInvtCountDate->format('c');
        return $this;
    }

    /**
     * Get lastInvtCountDate
     *
     * @return \DateTime
     */
    public function getLastInvtCountDate() {
        return new \DateTime($this->lastInvtCountDate);
    }


    /**
     * Set nextInvtCountDate
     *
     * @param \DateTime $nextInvtCountDate
     * @return InventoryItem
     */
    public function setNextInvtCountDate(\DateTime $nextInvtCountDate) {
        $this->nextInvtCountDate = $nextInvtCountDate->format('c');
        return $this;
    }

    /**
     * Get nextInvtCountDate
     *
     * @return \DateTime
     */
    public function getNextInvtCountDate() {
        return new \DateTime($this->nextInvtCountDate);
    }


    /**
     * Set invtCountInterval
     *
     * @param integer $invtCountInterval
     * @return InventoryItem
     */
    public function setInvtCountInterval($invtCountInterval) {
        $this->invtCountInterval = $invtCountInterval;
        return $this;
    }

    /**
     * Get invtCountInterval
     *
     * @return integer
     */
    public function getInvtCountInterval() {
        return $this->invtCountInterval;
    }


    /**
     * Set invtClassification
     *
     * @param ItemInvtClassification $invtClassification
     * @return InventoryItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification) {
        $this->invtClassification = $invtClassification;
        return $this;
    }

    /**
     * Get invtClassification
     *
     * @return ItemInvtClassification
     */
    public function getInvtClassification() {
        return $this->invtClassification;
    }


    /**
     * Set costUnits
     *
     * @param string $costUnits
     * @return InventoryItem
     */
    public function setCostUnits($costUnits) {
        $this->costUnits = $costUnits;
        return $this;
    }

    /**
     * Get costUnits
     *
     * @return string
     */
    public function getCostUnits() {
        return $this->costUnits;
    }


    /**
     * Set totalValue
     *
     * @param float $totalValue
     * @return InventoryItem
     */
    public function setTotalValue($totalValue) {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * Get totalValue
     *
     * @return float
     */
    public function getTotalValue() {
        return $this->totalValue;
    }


    /**
     * Set averageCost
     *
     * @param float $averageCost
     * @return InventoryItem
     */
    public function setAverageCost($averageCost) {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * Get averageCost
     *
     * @return float
     */
    public function getAverageCost() {
        return $this->averageCost;
    }


    /**
     * Set useBins
     *
     * @param boolean $useBins
     * @return InventoryItem
     */
    public function setUseBins($useBins) {
        $this->useBins = $useBins;
        return $this;
    }

    /**
     * Get useBins
     *
     * @return boolean
     */
    public function getUseBins() {
        return $this->useBins;
    }


    /**
     * Set quantityReorderUnits
     *
     * @param string $quantityReorderUnits
     * @return InventoryItem
     */
    public function setQuantityReorderUnits($quantityReorderUnits) {
        $this->quantityReorderUnits = $quantityReorderUnits;
        return $this;
    }

    /**
     * Get quantityReorderUnits
     *
     * @return string
     */
    public function getQuantityReorderUnits() {
        return $this->quantityReorderUnits;
    }


    /**
     * Set leadTime
     *
     * @param integer $leadTime
     * @return InventoryItem
     */
    public function setLeadTime($leadTime) {
        $this->leadTime = $leadTime;
        return $this;
    }

    /**
     * Get leadTime
     *
     * @return integer
     */
    public function getLeadTime() {
        return $this->leadTime;
    }


    /**
     * Set autoLeadTime
     *
     * @param boolean $autoLeadTime
     * @return InventoryItem
     */
    public function setAutoLeadTime($autoLeadTime) {
        $this->autoLeadTime = $autoLeadTime;
        return $this;
    }

    /**
     * Get autoLeadTime
     *
     * @return boolean
     */
    public function getAutoLeadTime() {
        return $this->autoLeadTime;
    }


    /**
     * Set lastPurchasePrice
     *
     * @param float $lastPurchasePrice
     * @return InventoryItem
     */
    public function setLastPurchasePrice($lastPurchasePrice) {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * Get lastPurchasePrice
     *
     * @return float
     */
    public function getLastPurchasePrice() {
        return $this->lastPurchasePrice;
    }


    /**
     * Set autoPreferredStockLevel
     *
     * @param boolean $autoPreferredStockLevel
     * @return InventoryItem
     */
    public function setAutoPreferredStockLevel($autoPreferredStockLevel) {
        $this->autoPreferredStockLevel = $autoPreferredStockLevel;
        return $this;
    }

    /**
     * Get autoPreferredStockLevel
     *
     * @return boolean
     */
    public function getAutoPreferredStockLevel() {
        return $this->autoPreferredStockLevel;
    }


    /**
     * Set preferredStockLevelDays
     *
     * @param float $preferredStockLevelDays
     * @return InventoryItem
     */
    public function setPreferredStockLevelDays($preferredStockLevelDays) {
        $this->preferredStockLevelDays = $preferredStockLevelDays;
        return $this;
    }

    /**
     * Get preferredStockLevelDays
     *
     * @return float
     */
    public function getPreferredStockLevelDays() {
        return $this->preferredStockLevelDays;
    }


    /**
     * Set safetyStockLevel
     *
     * @param float $safetyStockLevel
     * @return InventoryItem
     */
    public function setSafetyStockLevel($safetyStockLevel) {
        $this->safetyStockLevel = $safetyStockLevel;
        return $this;
    }

    /**
     * Get safetyStockLevel
     *
     * @return float
     */
    public function getSafetyStockLevel() {
        return $this->safetyStockLevel;
    }


    /**
     * Set safetyStockLevelDays
     *
     * @param integer $safetyStockLevelDays
     * @return InventoryItem
     */
    public function setSafetyStockLevelDays($safetyStockLevelDays) {
        $this->safetyStockLevelDays = $safetyStockLevelDays;
        return $this;
    }

    /**
     * Get safetyStockLevelDays
     *
     * @return integer
     */
    public function getSafetyStockLevelDays() {
        return $this->safetyStockLevelDays;
    }


    /**
     * Set backwardConsumptionDays
     *
     * @param integer $backwardConsumptionDays
     * @return InventoryItem
     */
    public function setBackwardConsumptionDays($backwardConsumptionDays) {
        $this->backwardConsumptionDays = $backwardConsumptionDays;
        return $this;
    }

    /**
     * Get backwardConsumptionDays
     *
     * @return integer
     */
    public function getBackwardConsumptionDays() {
        return $this->backwardConsumptionDays;
    }


    /**
     * Set seasonalDemand
     *
     * @param boolean $seasonalDemand
     * @return InventoryItem
     */
    public function setSeasonalDemand($seasonalDemand) {
        $this->seasonalDemand = $seasonalDemand;
        return $this;
    }

    /**
     * Get seasonalDemand
     *
     * @return boolean
     */
    public function getSeasonalDemand() {
        return $this->seasonalDemand;
    }


    /**
     * Set safetyStockLevelUnits
     *
     * @param string $safetyStockLevelUnits
     * @return InventoryItem
     */
    public function setSafetyStockLevelUnits($safetyStockLevelUnits) {
        $this->safetyStockLevelUnits = $safetyStockLevelUnits;
        return $this;
    }

    /**
     * Get safetyStockLevelUnits
     *
     * @return string
     */
    public function getSafetyStockLevelUnits() {
        return $this->safetyStockLevelUnits;
    }


    /**
     * Set demandModifier
     *
     * @param float $demandModifier
     * @return InventoryItem
     */
    public function setDemandModifier($demandModifier) {
        $this->demandModifier = $demandModifier;
        return $this;
    }

    /**
     * Get demandModifier
     *
     * @return float
     */
    public function getDemandModifier() {
        return $this->demandModifier;
    }


    /**
     * Set autoReorderPoint
     *
     * @param boolean $autoReorderPoint
     * @return InventoryItem
     */
    public function setAutoReorderPoint($autoReorderPoint) {
        $this->autoReorderPoint = $autoReorderPoint;
        return $this;
    }

    /**
     * Get autoReorderPoint
     *
     * @return boolean
     */
    public function getAutoReorderPoint() {
        return $this->autoReorderPoint;
    }


    /**
     * Set storeDisplayName
     *
     * @param string $storeDisplayName
     * @return InventoryItem
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
     * Set storeDescription
     *
     * @param string $storeDescription
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set onSpecial
     *
     * @param boolean $onSpecial
     * @return InventoryItem
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
     * Set outOfStockBehavior
     *
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set featuredDescription
     *
     * @param string $featuredDescription
     * @return InventoryItem
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
     * Set shoppingDotComCategory
     *
     * @param string $shoppingDotComCategory
     * @return InventoryItem
     */
    public function setShoppingDotComCategory($shoppingDotComCategory) {
        $this->shoppingDotComCategory = $shoppingDotComCategory;
        return $this;
    }

    /**
     * Get shoppingDotComCategory
     *
     * @return string
     */
    public function getShoppingDotComCategory() {
        return $this->shoppingDotComCategory;
    }


    /**
     * Set shopzillaCategoryId
     *
     * @param integer $shopzillaCategoryId
     * @return InventoryItem
     */
    public function setShopzillaCategoryId($shopzillaCategoryId) {
        $this->shopzillaCategoryId = $shopzillaCategoryId;
        return $this;
    }

    /**
     * Get shopzillaCategoryId
     *
     * @return integer
     */
    public function getShopzillaCategoryId() {
        return $this->shopzillaCategoryId;
    }


    /**
     * Set nexTagCategory
     *
     * @param string $nexTagCategory
     * @return InventoryItem
     */
    public function setNexTagCategory($nexTagCategory) {
        $this->nexTagCategory = $nexTagCategory;
        return $this;
    }

    /**
     * Get nexTagCategory
     *
     * @return string
     */
    public function getNexTagCategory() {
        return $this->nexTagCategory;
    }


    /**
     * Set urlComponent
     *
     * @param string $urlComponent
     * @return InventoryItem
     */
    public function setUrlComponent($urlComponent) {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * Get urlComponent
     *
     * @return string
     */
    public function getUrlComponent() {
        return $this->urlComponent;
    }


    /**
     * Set itemId
     *
     * @param string $itemId
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set vendorName
     *
     * @param string $vendorName
     * @return InventoryItem
     */
    public function setVendorName($vendorName) {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * Get vendorName
     *
     * @return string
     */
    public function getVendorName() {
        return $this->vendorName;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return InventoryItem
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
     * Set isHazmatItem
     *
     * @param boolean $isHazmatItem
     * @return InventoryItem
     */
    public function setIsHazmatItem($isHazmatItem) {
        $this->isHazmatItem = $isHazmatItem;
        return $this;
    }

    /**
     * Get isHazmatItem
     *
     * @return boolean
     */
    public function getIsHazmatItem() {
        return $this->isHazmatItem;
    }


    /**
     * Set hazmatId
     *
     * @param string $hazmatId
     * @return InventoryItem
     */
    public function setHazmatId($hazmatId) {
        $this->hazmatId = $hazmatId;
        return $this;
    }

    /**
     * Get hazmatId
     *
     * @return string
     */
    public function getHazmatId() {
        return $this->hazmatId;
    }


    /**
     * Set hazmatShippingName
     *
     * @param string $hazmatShippingName
     * @return InventoryItem
     */
    public function setHazmatShippingName($hazmatShippingName) {
        $this->hazmatShippingName = $hazmatShippingName;
        return $this;
    }

    /**
     * Get hazmatShippingName
     *
     * @return string
     */
    public function getHazmatShippingName() {
        return $this->hazmatShippingName;
    }


    /**
     * Set hazmatHazardClass
     *
     * @param string $hazmatHazardClass
     * @return InventoryItem
     */
    public function setHazmatHazardClass($hazmatHazardClass) {
        $this->hazmatHazardClass = $hazmatHazardClass;
        return $this;
    }

    /**
     * Get hazmatHazardClass
     *
     * @return string
     */
    public function getHazmatHazardClass() {
        return $this->hazmatHazardClass;
    }


    /**
     * Set hazmatPackingGroup
     *
     * @param HazmatPackingGroup $hazmatPackingGroup
     * @return InventoryItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup) {
        $this->hazmatPackingGroup = $hazmatPackingGroup;
        return $this;
    }

    /**
     * Get hazmatPackingGroup
     *
     * @return HazmatPackingGroup
     */
    public function getHazmatPackingGroup() {
        return $this->hazmatPackingGroup;
    }


    /**
     * Set hazmatItemUnits
     *
     * @param string $hazmatItemUnits
     * @return InventoryItem
     */
    public function setHazmatItemUnits($hazmatItemUnits) {
        $this->hazmatItemUnits = $hazmatItemUnits;
        return $this;
    }

    /**
     * Get hazmatItemUnits
     *
     * @return string
     */
    public function getHazmatItemUnits() {
        return $this->hazmatItemUnits;
    }


    /**
     * Set hazmatItemUnitsQty
     *
     * @param float $hazmatItemUnitsQty
     * @return InventoryItem
     */
    public function setHazmatItemUnitsQty($hazmatItemUnitsQty) {
        $this->hazmatItemUnitsQty = $hazmatItemUnitsQty;
        return $this;
    }

    /**
     * Get hazmatItemUnitsQty
     *
     * @return float
     */
    public function getHazmatItemUnitsQty() {
        return $this->hazmatItemUnitsQty;
    }


    /**
     * Set isGcoCompliant
     *
     * @param boolean $isGcoCompliant
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set costingMethod
     *
     * @param ItemCostingMethod $costingMethod
     * @return InventoryItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod) {
        $this->costingMethod = $costingMethod;
        return $this;
    }

    /**
     * Get costingMethod
     *
     * @return ItemCostingMethod
     */
    public function getCostingMethod() {
        return $this->costingMethod;
    }


    /**
     * Set currency
     *
     * @param string $currency
     * @return InventoryItem
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set preferredStockLevel
     *
     * @param float $preferredStockLevel
     * @return InventoryItem
     */
    public function setPreferredStockLevel($preferredStockLevel) {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * Get preferredStockLevel
     *
     * @return float
     */
    public function getPreferredStockLevel() {
        return $this->preferredStockLevel;
    }


    /**
     * Set pricingMatrix
     *
     * @param PricingMatrix $pricingMatrix
     * @return InventoryItem
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
     * @return InventoryItem
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
     * Set defaultReturnCost
     *
     * @param float $defaultReturnCost
     * @return InventoryItem
     */
    public function setDefaultReturnCost($defaultReturnCost) {
        $this->defaultReturnCost = $defaultReturnCost;
        return $this;
    }

    /**
     * Get defaultReturnCost
     *
     * @return float
     */
    public function getDefaultReturnCost() {
        return $this->defaultReturnCost;
    }


    /**
     * Set fixedLotSize
     *
     * @param float $fixedLotSize
     * @return InventoryItem
     */
    public function setFixedLotSize($fixedLotSize) {
        $this->fixedLotSize = $fixedLotSize;
        return $this;
    }

    /**
     * Get fixedLotSize
     *
     * @return float
     */
    public function getFixedLotSize() {
        return $this->fixedLotSize;
    }


    /**
     * Set periodicLotSizeType
     *
     * @param PeriodicLotSizeType $periodicLotSizeType
     * @return InventoryItem
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType) {
        $this->periodicLotSizeType = $periodicLotSizeType;
        return $this;
    }

    /**
     * Get periodicLotSizeType
     *
     * @return PeriodicLotSizeType
     */
    public function getPeriodicLotSizeType() {
        return $this->periodicLotSizeType;
    }


    /**
     * Set demandTimeFence
     *
     * @param integer $demandTimeFence
     * @return InventoryItem
     */
    public function setDemandTimeFence($demandTimeFence) {
        $this->demandTimeFence = $demandTimeFence;
        return $this;
    }

    /**
     * Get demandTimeFence
     *
     * @return integer
     */
    public function getDemandTimeFence() {
        return $this->demandTimeFence;
    }


    /**
     * Set supplyTimeFence
     *
     * @param integer $supplyTimeFence
     * @return InventoryItem
     */
    public function setSupplyTimeFence($supplyTimeFence) {
        $this->supplyTimeFence = $supplyTimeFence;
        return $this;
    }

    /**
     * Get supplyTimeFence
     *
     * @return integer
     */
    public function getSupplyTimeFence() {
        return $this->supplyTimeFence;
    }


    /**
     * Set rescheduleInDays
     *
     * @param integer $rescheduleInDays
     * @return InventoryItem
     */
    public function setRescheduleInDays($rescheduleInDays) {
        $this->rescheduleInDays = $rescheduleInDays;
        return $this;
    }

    /**
     * Get rescheduleInDays
     *
     * @return integer
     */
    public function getRescheduleInDays() {
        return $this->rescheduleInDays;
    }


    /**
     * Set rescheduleOutDays
     *
     * @param integer $rescheduleOutDays
     * @return InventoryItem
     */
    public function setRescheduleOutDays($rescheduleOutDays) {
        $this->rescheduleOutDays = $rescheduleOutDays;
        return $this;
    }

    /**
     * Get rescheduleOutDays
     *
     * @return integer
     */
    public function getRescheduleOutDays() {
        return $this->rescheduleOutDays;
    }


    /**
     * Set periodicLotSizeDays
     *
     * @param integer $periodicLotSizeDays
     * @return InventoryItem
     */
    public function setPeriodicLotSizeDays($periodicLotSizeDays) {
        $this->periodicLotSizeDays = $periodicLotSizeDays;
        return $this;
    }

    /**
     * Get periodicLotSizeDays
     *
     * @return integer
     */
    public function getPeriodicLotSizeDays() {
        return $this->periodicLotSizeDays;
    }


    /**
     * Set forwardConsumptionDays
     *
     * @param integer $forwardConsumptionDays
     * @return InventoryItem
     */
    public function setForwardConsumptionDays($forwardConsumptionDays) {
        $this->forwardConsumptionDays = $forwardConsumptionDays;
        return $this;
    }

    /**
     * Get forwardConsumptionDays
     *
     * @return integer
     */
    public function getForwardConsumptionDays() {
        return $this->forwardConsumptionDays;
    }


    /**
     * Set quantityBackOrdered
     *
     * @param float $quantityBackOrdered
     * @return InventoryItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered) {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * Get quantityBackOrdered
     *
     * @return float
     */
    public function getQuantityBackOrdered() {
        return $this->quantityBackOrdered;
    }


    /**
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return InventoryItem
     */
    public function setQuantityCommitted($quantityCommitted) {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * Get quantityCommitted
     *
     * @return float
     */
    public function getQuantityCommitted() {
        return $this->quantityCommitted;
    }


    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return InventoryItem
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return float
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return InventoryItem
     */
    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return float
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set onHandValueMli
     *
     * @param float $onHandValueMli
     * @return InventoryItem
     */
    public function setOnHandValueMli($onHandValueMli) {
        $this->onHandValueMli = $onHandValueMli;
        return $this;
    }

    /**
     * Get onHandValueMli
     *
     * @return float
     */
    public function getOnHandValueMli() {
        return $this->onHandValueMli;
    }


    /**
     * Set quantityOnOrder
     *
     * @param float $quantityOnOrder
     * @return InventoryItem
     */
    public function setQuantityOnOrder($quantityOnOrder) {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * Get quantityOnOrder
     *
     * @return float
     */
    public function getQuantityOnOrder() {
        return $this->quantityOnOrder;
    }


    /**
     * Set rate
     *
     * @param float $rate
     * @return InventoryItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set reorderPoint
     *
     * @param float $reorderPoint
     * @return InventoryItem
     */
    public function setReorderPoint($reorderPoint) {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * Get reorderPoint
     *
     * @return float
     */
    public function getReorderPoint() {
        return $this->reorderPoint;
    }


    /**
     * Set quantityCommittedUnits
     *
     * @param string $quantityCommittedUnits
     * @return InventoryItem
     */
    public function setQuantityCommittedUnits($quantityCommittedUnits) {
        $this->quantityCommittedUnits = $quantityCommittedUnits;
        return $this;
    }

    /**
     * Get quantityCommittedUnits
     *
     * @return string
     */
    public function getQuantityCommittedUnits() {
        return $this->quantityCommittedUnits;
    }


    /**
     * Set quantityAvailableUnits
     *
     * @param string $quantityAvailableUnits
     * @return InventoryItem
     */
    public function setQuantityAvailableUnits($quantityAvailableUnits) {
        $this->quantityAvailableUnits = $quantityAvailableUnits;
        return $this;
    }

    /**
     * Get quantityAvailableUnits
     *
     * @return string
     */
    public function getQuantityAvailableUnits() {
        return $this->quantityAvailableUnits;
    }


    /**
     * Set quantityOnHandUnits
     *
     * @param string $quantityOnHandUnits
     * @return InventoryItem
     */
    public function setQuantityOnHandUnits($quantityOnHandUnits) {
        $this->quantityOnHandUnits = $quantityOnHandUnits;
        return $this;
    }

    /**
     * Get quantityOnHandUnits
     *
     * @return string
     */
    public function getQuantityOnHandUnits() {
        return $this->quantityOnHandUnits;
    }


    /**
     * Set quantityOnOrderUnits
     *
     * @param string $quantityOnOrderUnits
     * @return InventoryItem
     */
    public function setQuantityOnOrderUnits($quantityOnOrderUnits) {
        $this->quantityOnOrderUnits = $quantityOnOrderUnits;
        return $this;
    }

    /**
     * Get quantityOnOrderUnits
     *
     * @return string
     */
    public function getQuantityOnOrderUnits() {
        return $this->quantityOnOrderUnits;
    }


    /**
     * Set productFeedList
     *
     * @param ProductFeedList $productFeedList
     * @return InventoryItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList) {
        $this->productFeedList = $productFeedList;
        return $this;
    }

    /**
     * Get productFeedList
     *
     * @return ProductFeedList
     */
    public function getProductFeedList() {
        return $this->productFeedList;
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return InventoryItem
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
     * Set itemOptionsList
     *
     * @param ItemOptionsList $itemOptionsList
     * @return InventoryItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList) {
        $this->itemOptionsList = $itemOptionsList;
        return $this;
    }

    /**
     * Get itemOptionsList
     *
     * @return ItemOptionsList
     */
    public function getItemOptionsList() {
        return $this->itemOptionsList;
    }


    /**
     * Set itemVendorList
     *
     * @param ItemVendorList $itemVendorList
     * @return InventoryItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList) {
        $this->itemVendorList = $itemVendorList;
        return $this;
    }

    /**
     * Get itemVendorList
     *
     * @return ItemVendorList
     */
    public function getItemVendorList() {
        return $this->itemVendorList;
    }


    /**
     * Set siteCategoryList
     *
     * @param SiteCategoryList $siteCategoryList
     * @return InventoryItem
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
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return InventoryItem
     */
    public function setTranslationsList(TranslationList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return TranslationList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set binNumberList
     *
     * @param InventoryItemBinNumberList $binNumberList
     * @return InventoryItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList) {
        $this->binNumberList = $binNumberList;
        return $this;
    }

    /**
     * Get binNumberList
     *
     * @return InventoryItemBinNumberList
     */
    public function getBinNumberList() {
        return $this->binNumberList;
    }


    /**
     * Set locationsList
     *
     * @param InventoryItemLocationsList $locationsList
     * @return InventoryItem
     */
    public function setLocationsList(InventoryItemLocationsList $locationsList) {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * Get locationsList
     *
     * @return InventoryItemLocationsList
     */
    public function getLocationsList() {
        return $this->locationsList;
    }


    /**
     * Set matrixOptionList
     *
     * @param MatrixOptionList $matrixOptionList
     * @return InventoryItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList) {
        $this->matrixOptionList = $matrixOptionList;
        return $this;
    }

    /**
     * Get matrixOptionList
     *
     * @return MatrixOptionList
     */
    public function getMatrixOptionList() {
        return $this->matrixOptionList;
    }


    /**
     * Set presentationItemList
     *
     * @param PresentationItemList $presentationItemList
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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
     * @return InventoryItem
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