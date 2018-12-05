<?php

namespace Nzolt\NetSuite;

class ServiceResaleItem extends Record
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
     * @var string $purchaseDescription
     */
    protected $purchaseDescription = null;

    /**
     * @var boolean $manufacturingChargeItem
     */
    protected $manufacturingChargeItem = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var string $costUnits
     */
    protected $costUnits = null;

    /**
     * @var RecordRef $expenseAccount
     */
    protected $expenseAccount = null;

    /**
     * @var RecordRef $intercoExpenseAccount
     */
    protected $intercoExpenseAccount = null;

    /**
     * @var string $salesDescription
     */
    protected $salesDescription = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var RecordRef $incomeAccount
     */
    protected $incomeAccount = null;

    /**
     * @var RecordRef $intercoIncomeAccount
     */
    protected $intercoIncomeAccount = null;

    /**
     * @var RecordRef $taxSchedule
     */
    protected $taxSchedule = null;

    /**
     * @var ItemMatrixType $matrixType
     */
    protected $matrixType = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var RecordRef $unitsType
     */
    protected $unitsType = null;

    /**
     * @var RecordRef $purchaseUnit
     */
    protected $purchaseUnit = null;

    /**
     * @var RecordRef $saleUnit
     */
    protected $saleUnit = null;

    /**
     * @var string $costEstimateUnits
     */
    protected $costEstimateUnits = null;

    /**
     * @var RecordRef $issueProduct
     */
    protected $issueProduct = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var RecordRef $deferredRevenueAccount
     */
    protected $deferredRevenueAccount = null;

    /**
     * @var RecordRef $intercoDefRevAccount
     */
    protected $intercoDefRevAccount = null;

    /**
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var RecordRef $deferralAccount
     */
    protected $deferralAccount = null;

    /**
     * @var RecordRef $amortizationTemplate
     */
    protected $amortizationTemplate = null;

    /**
     * @var string $residual
     */
    protected $residual = null;

    /**
     * @var boolean $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var RecordRef $revenueRecognitionRule
     */
    protected $revenueRecognitionRule = null;

    /**
     * @var RecordRef $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var RecordRef $revenueAllocationGroup
     */
    protected $revenueAllocationGroup = null;

    /**
     * @var RecordRef $createRevenuePlansOn
     */
    protected $createRevenuePlansOn = null;

    /**
     * @var boolean $directRevenuePosting
     */
    protected $directRevenuePosting = null;

    /**
     * @var boolean $contingentRevenueHandling
     */
    protected $contingentRevenueHandling = null;

    /**
     * @var RecordRef $revReclassFXAccount
     */
    protected $revReclassFXAccount = null;

    /**
     * @var int $amortizationPeriod
     */
    protected $amortizationPeriod = null;

    /**
     * @var int $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var boolean $enforceMinQtyInternally
     */
    protected $enforceMinQtyInternally = null;

    /**
     * @var string $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var boolean $pricesIncludeTax
     */
    protected $pricesIncludeTax = null;

    /**
     * @var RecordRef $quantityPricingSchedule
     */
    protected $quantityPricingSchedule = null;

    /**
     * @var boolean $useMarginalRates
     */
    protected $useMarginalRates = null;

    /**
     * @var ItemOverallQuantityPricingType $overallQuantityPricingType
     */
    protected $overallQuantityPricingType = null;

    /**
     * @var boolean $isFulfillable
     */
    protected $isFulfillable = null;

    /**
     * @var boolean $generateAccruals
     */
    protected $generateAccruals = null;

    /**
     * @var RecordRef $costCategory
     */
    protected $costCategory = null;

    /**
     * @var float $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var float $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var float $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var float $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var float $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var float $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var RecordRef $pricingGroup
     */
    protected $pricingGroup = null;

    /**
     * @var string $minimumQuantityUnits
     */
    protected $minimumQuantityUnits = null;

    /**
     * @var float $vsoePrice
     */
    protected $vsoePrice = null;

    /**
     * @var VsoeSopGroup $vsoeSopGroup
     */
    protected $vsoeSopGroup = null;

    /**
     * @var VsoeDeferral $vsoeDeferral
     */
    protected $vsoeDeferral = null;

    /**
     * @var VsoePermitDiscount $vsoePermitDiscount
     */
    protected $vsoePermitDiscount = null;

    /**
     * @var boolean $vsoeDelivered
     */
    protected $vsoeDelivered = null;

    /**
     * @var RecordRef $itemRevenueCategory
     */
    protected $itemRevenueCategory = null;

    /**
     * @var boolean $createJob
     */
    protected $createJob = null;

    /**
     * @var string $matrixItemNameTemplate
     */
    protected $matrixItemNameTemplate = null;

    /**
     * @var string $storeDisplayName
     */
    protected $storeDisplayName = null;

    /**
     * @var RecordRef $storeDisplayThumbnail
     */
    protected $storeDisplayThumbnail = null;

    /**
     * @var RecordRef $storeDisplayImage
     */
    protected $storeDisplayImage = null;

    /**
     * @var string $storeDescription
     */
    protected $storeDescription = null;

    /**
     * @var string $storeDetailedDescription
     */
    protected $storeDetailedDescription = null;

    /**
     * @var RecordRef $storeItemTemplate
     */
    protected $storeItemTemplate = null;

    /**
     * @var string $pageTitle
     */
    protected $pageTitle = null;

    /**
     * @var string $urlComponent
     */
    protected $urlComponent = null;

    /**
     * @var string $metaTagHtml
     */
    protected $metaTagHtml = null;

    /**
     * @var boolean $excludeFromSitemap
     */
    protected $excludeFromSitemap = null;

    /**
     * @var SitemapPriority $sitemapPriority
     */
    protected $sitemapPriority = null;

    /**
     * @var string $searchKeywords
     */
    protected $searchKeywords = null;

    /**
     * @var boolean $isDonationItem
     */
    protected $isDonationItem = null;

    /**
     * @var boolean $showDefaultDonationAmount
     */
    protected $showDefaultDonationAmount = null;

    /**
     * @var float $maxDonationAmount
     */
    protected $maxDonationAmount = null;

    /**
     * @var boolean $dontShowPrice
     */
    protected $dontShowPrice = null;

    /**
     * @var string $noPriceMessage
     */
    protected $noPriceMessage = null;

    /**
     * @var string $outOfStockMessage
     */
    protected $outOfStockMessage = null;

    /**
     * @var boolean $onSpecial
     */
    protected $onSpecial = null;

    /**
     * @var ItemOutOfStockBehavior $outOfStockBehavior
     */
    protected $outOfStockBehavior = null;

    /**
     * @var string $relatedItemsDescription
     */
    protected $relatedItemsDescription = null;

    /**
     * @var string $specialsDescription
     */
    protected $specialsDescription = null;

    /**
     * @var ServiceItemTaskTemplatesList $itemTaskTemplatesList
     */
    protected $itemTaskTemplatesList = null;

    /**
     * @var string $featuredDescription
     */
    protected $featuredDescription = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var string $upcCode
     */
    protected $upcCode = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $vendorName
     */
    protected $vendorName = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

    /**
     * @var boolean $isGcoCompliant
     */
    protected $isGcoCompliant = null;

    /**
     * @var boolean $offerSupport
     */
    protected $offerSupport = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $availableToPartners
     */
    protected $availableToPartners = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var BillingRatesMatrix $billingRatesMatrix
     */
    protected $billingRatesMatrix = null;

    /**
     * @var ItemAccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var ItemOptionsList $itemOptionsList
     */
    protected $itemOptionsList = null;

    /**
     * @var MatrixOptionList $matrixOptionList
     */
    protected $matrixOptionList = null;

    /**
     * @var ItemVendorList $itemVendorList
     */
    protected $itemVendorList = null;

    /**
     * @var PricingMatrix $pricingMatrix
     */
    protected $pricingMatrix = null;

    /**
     * @var RecordRef $purchaseTaxCode
     */
    protected $purchaseTaxCode = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var RecordRef $salesTaxCode
     */
    protected $salesTaxCode = null;

    /**
     * @var SiteCategoryList $siteCategoryList
     */
    protected $siteCategoryList = null;

    /**
     * @var TranslationList $translationsList
     */
    protected $translationsList = null;

    /**
     * @var RecordRef $vendor
     */
    protected $vendor = null;

    /**
     * @var PresentationItemList $presentationItemList
     */
    protected $presentationItemList = null;

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
     * @return \Nzolt\NetSuite\ServiceResaleItem
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
     * @return \Nzolt\NetSuite\ServiceResaleItem
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
     * @return string
     */
    public function getPurchaseDescription()
    {
      return $this->purchaseDescription;
    }

    /**
     * @param string $purchaseDescription
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPurchaseDescription($purchaseDescription)
    {
      $this->purchaseDescription = $purchaseDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getManufacturingChargeItem()
    {
      return $this->manufacturingChargeItem;
    }

    /**
     * @param boolean $manufacturingChargeItem
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setManufacturingChargeItem($manufacturingChargeItem)
    {
      $this->manufacturingChargeItem = $manufacturingChargeItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostUnits()
    {
      return $this->costUnits;
    }

    /**
     * @param string $costUnits
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCostUnits($costUnits)
    {
      $this->costUnits = $costUnits;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param RecordRef $expenseAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setExpenseAccount($expenseAccount)
    {
      $this->expenseAccount = $expenseAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoExpenseAccount()
    {
      return $this->intercoExpenseAccount;
    }

    /**
     * @param RecordRef $intercoExpenseAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIntercoExpenseAccount($intercoExpenseAccount)
    {
      $this->intercoExpenseAccount = $intercoExpenseAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesDescription()
    {
      return $this->salesDescription;
    }

    /**
     * @param string $salesDescription
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSalesDescription($salesDescription)
    {
      $this->salesDescription = $salesDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param boolean $includeChildren
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncomeAccount()
    {
      return $this->incomeAccount;
    }

    /**
     * @param RecordRef $incomeAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIncomeAccount($incomeAccount)
    {
      $this->incomeAccount = $incomeAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoIncomeAccount()
    {
      return $this->intercoIncomeAccount;
    }

    /**
     * @param RecordRef $intercoIncomeAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIntercoIncomeAccount($intercoIncomeAccount)
    {
      $this->intercoIncomeAccount = $intercoIncomeAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxSchedule()
    {
      return $this->taxSchedule;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setTaxSchedule($taxSchedule)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return ItemMatrixType
     */
    public function getMatrixType()
    {
      return $this->matrixType;
    }

    /**
     * @param ItemMatrixType $matrixType
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setMatrixType($matrixType)
    {
      $this->matrixType = $matrixType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxable()
    {
      return $this->isTaxable;
    }

    /**
     * @param boolean $isTaxable
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
      return $this;
    }

    /**
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType()
    {
      return $this->costEstimateType;
    }

    /**
     * @param ItemCostEstimateType $costEstimateType
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCostEstimateType($costEstimateType)
    {
      $this->costEstimateType = $costEstimateType;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostEstimate()
    {
      return $this->costEstimate;
    }

    /**
     * @param float $costEstimate
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param RecordRef $unitsType
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseUnit()
    {
      return $this->purchaseUnit;
    }

    /**
     * @param RecordRef $purchaseUnit
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPurchaseUnit($purchaseUnit)
    {
      $this->purchaseUnit = $purchaseUnit;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSaleUnit()
    {
      return $this->saleUnit;
    }

    /**
     * @param RecordRef $saleUnit
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSaleUnit($saleUnit)
    {
      $this->saleUnit = $saleUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostEstimateUnits()
    {
      return $this->costEstimateUnits;
    }

    /**
     * @param string $costEstimateUnits
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCostEstimateUnits($costEstimateUnits)
    {
      $this->costEstimateUnits = $costEstimateUnits;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueProduct()
    {
      return $this->issueProduct;
    }

    /**
     * @param RecordRef $issueProduct
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIssueProduct($issueProduct)
    {
      $this->issueProduct = $issueProduct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferredRevenueAccount()
    {
      return $this->deferredRevenueAccount;
    }

    /**
     * @param RecordRef $deferredRevenueAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setDeferredRevenueAccount($deferredRevenueAccount)
    {
      $this->deferredRevenueAccount = $deferredRevenueAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoDefRevAccount()
    {
      return $this->intercoDefRevAccount;
    }

    /**
     * @param RecordRef $intercoDefRevAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIntercoDefRevAccount($intercoDefRevAccount)
    {
      $this->intercoDefRevAccount = $intercoDefRevAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule()
    {
      return $this->revRecSchedule;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferralAccount()
    {
      return $this->deferralAccount;
    }

    /**
     * @param RecordRef $deferralAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setDeferralAccount($deferralAccount)
    {
      $this->deferralAccount = $deferralAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationTemplate()
    {
      return $this->amortizationTemplate;
    }

    /**
     * @param RecordRef $amortizationTemplate
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setAmortizationTemplate($amortizationTemplate)
    {
      $this->amortizationTemplate = $amortizationTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getResidual()
    {
      return $this->residual;
    }

    /**
     * @param string $residual
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setResidual($residual)
    {
      $this->residual = $residual;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeferRevRec()
    {
      return $this->deferRevRec;
    }

    /**
     * @param boolean $deferRevRec
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setDeferRevRec($deferRevRec)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueRecognitionRule()
    {
      return $this->revenueRecognitionRule;
    }

    /**
     * @param RecordRef $revenueRecognitionRule
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setRevenueRecognitionRule($revenueRecognitionRule)
    {
      $this->revenueRecognitionRule = $revenueRecognitionRule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param RecordRef $revRecForecastRule
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setRevRecForecastRule($revRecForecastRule)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueAllocationGroup()
    {
      return $this->revenueAllocationGroup;
    }

    /**
     * @param RecordRef $revenueAllocationGroup
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setRevenueAllocationGroup($revenueAllocationGroup)
    {
      $this->revenueAllocationGroup = $revenueAllocationGroup;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreateRevenuePlansOn()
    {
      return $this->createRevenuePlansOn;
    }

    /**
     * @param RecordRef $createRevenuePlansOn
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCreateRevenuePlansOn($createRevenuePlansOn)
    {
      $this->createRevenuePlansOn = $createRevenuePlansOn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectRevenuePosting()
    {
      return $this->directRevenuePosting;
    }

    /**
     * @param boolean $directRevenuePosting
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setDirectRevenuePosting($directRevenuePosting)
    {
      $this->directRevenuePosting = $directRevenuePosting;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContingentRevenueHandling()
    {
      return $this->contingentRevenueHandling;
    }

    /**
     * @param boolean $contingentRevenueHandling
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setContingentRevenueHandling($contingentRevenueHandling)
    {
      $this->contingentRevenueHandling = $contingentRevenueHandling;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevReclassFXAccount()
    {
      return $this->revReclassFXAccount;
    }

    /**
     * @param RecordRef $revReclassFXAccount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setRevReclassFXAccount($revReclassFXAccount)
    {
      $this->revReclassFXAccount = $revReclassFXAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmortizationPeriod()
    {
      return $this->amortizationPeriod;
    }

    /**
     * @param int $amortizationPeriod
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setAmortizationPeriod($amortizationPeriod)
    {
      $this->amortizationPeriod = $amortizationPeriod;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumQuantity()
    {
      return $this->minimumQuantity;
    }

    /**
     * @param int $minimumQuantity
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setMinimumQuantity($minimumQuantity)
    {
      $this->minimumQuantity = $minimumQuantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnforceMinQtyInternally()
    {
      return $this->enforceMinQtyInternally;
    }

    /**
     * @param boolean $enforceMinQtyInternally
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setEnforceMinQtyInternally($enforceMinQtyInternally)
    {
      $this->enforceMinQtyInternally = $enforceMinQtyInternally;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptor()
    {
      return $this->softDescriptor;
    }

    /**
     * @param string $softDescriptor
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSoftDescriptor($softDescriptor)
    {
      $this->softDescriptor = $softDescriptor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPricesIncludeTax()
    {
      return $this->pricesIncludeTax;
    }

    /**
     * @param boolean $pricesIncludeTax
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPricesIncludeTax($pricesIncludeTax)
    {
      $this->pricesIncludeTax = $pricesIncludeTax;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getQuantityPricingSchedule()
    {
      return $this->quantityPricingSchedule;
    }

    /**
     * @param RecordRef $quantityPricingSchedule
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setQuantityPricingSchedule($quantityPricingSchedule)
    {
      $this->quantityPricingSchedule = $quantityPricingSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseMarginalRates()
    {
      return $this->useMarginalRates;
    }

    /**
     * @param boolean $useMarginalRates
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setUseMarginalRates($useMarginalRates)
    {
      $this->useMarginalRates = $useMarginalRates;
      return $this;
    }

    /**
     * @return ItemOverallQuantityPricingType
     */
    public function getOverallQuantityPricingType()
    {
      return $this->overallQuantityPricingType;
    }

    /**
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setOverallQuantityPricingType($overallQuantityPricingType)
    {
      $this->overallQuantityPricingType = $overallQuantityPricingType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFulfillable()
    {
      return $this->isFulfillable;
    }

    /**
     * @param boolean $isFulfillable
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIsFulfillable($isFulfillable)
    {
      $this->isFulfillable = $isFulfillable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenerateAccruals()
    {
      return $this->generateAccruals;
    }

    /**
     * @param boolean $generateAccruals
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setGenerateAccruals($generateAccruals)
    {
      $this->generateAccruals = $generateAccruals;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCostCategory()
    {
      return $this->costCategory;
    }

    /**
     * @param RecordRef $costCategory
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param float $purchaseOrderAmount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param float $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param float $receiptQuantity
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setReceiptQuantity($receiptQuantity)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param float $receiptAmount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setReceiptAmount($receiptAmount)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param float $receiptQuantityDiff
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPricingGroup()
    {
      return $this->pricingGroup;
    }

    /**
     * @param RecordRef $pricingGroup
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPricingGroup($pricingGroup)
    {
      $this->pricingGroup = $pricingGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimumQuantityUnits()
    {
      return $this->minimumQuantityUnits;
    }

    /**
     * @param string $minimumQuantityUnits
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setMinimumQuantityUnits($minimumQuantityUnits)
    {
      $this->minimumQuantityUnits = $minimumQuantityUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getVsoePrice()
    {
      return $this->vsoePrice;
    }

    /**
     * @param float $vsoePrice
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setVsoePrice($vsoePrice)
    {
      $this->vsoePrice = $vsoePrice;
      return $this;
    }

    /**
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup()
    {
      return $this->vsoeSopGroup;
    }

    /**
     * @param VsoeSopGroup $vsoeSopGroup
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setVsoeSopGroup($vsoeSopGroup)
    {
      $this->vsoeSopGroup = $vsoeSopGroup;
      return $this;
    }

    /**
     * @return VsoeDeferral
     */
    public function getVsoeDeferral()
    {
      return $this->vsoeDeferral;
    }

    /**
     * @param VsoeDeferral $vsoeDeferral
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setVsoeDeferral($vsoeDeferral)
    {
      $this->vsoeDeferral = $vsoeDeferral;
      return $this;
    }

    /**
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount()
    {
      return $this->vsoePermitDiscount;
    }

    /**
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setVsoePermitDiscount($vsoePermitDiscount)
    {
      $this->vsoePermitDiscount = $vsoePermitDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVsoeDelivered()
    {
      return $this->vsoeDelivered;
    }

    /**
     * @param boolean $vsoeDelivered
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setVsoeDelivered($vsoeDelivered)
    {
      $this->vsoeDelivered = $vsoeDelivered;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemRevenueCategory()
    {
      return $this->itemRevenueCategory;
    }

    /**
     * @param RecordRef $itemRevenueCategory
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setItemRevenueCategory($itemRevenueCategory)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreateJob()
    {
      return $this->createJob;
    }

    /**
     * @param boolean $createJob
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCreateJob($createJob)
    {
      $this->createJob = $createJob;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatrixItemNameTemplate()
    {
      return $this->matrixItemNameTemplate;
    }

    /**
     * @param string $matrixItemNameTemplate
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setMatrixItemNameTemplate($matrixItemNameTemplate)
    {
      $this->matrixItemNameTemplate = $matrixItemNameTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDisplayName()
    {
      return $this->storeDisplayName;
    }

    /**
     * @param string $storeDisplayName
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setStoreDisplayName($storeDisplayName)
    {
      $this->storeDisplayName = $storeDisplayName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayThumbnail()
    {
      return $this->storeDisplayThumbnail;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setStoreDisplayThumbnail($storeDisplayThumbnail)
    {
      $this->storeDisplayThumbnail = $storeDisplayThumbnail;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayImage()
    {
      return $this->storeDisplayImage;
    }

    /**
     * @param RecordRef $storeDisplayImage
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setStoreDisplayImage($storeDisplayImage)
    {
      $this->storeDisplayImage = $storeDisplayImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDescription()
    {
      return $this->storeDescription;
    }

    /**
     * @param string $storeDescription
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setStoreDescription($storeDescription)
    {
      $this->storeDescription = $storeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDetailedDescription()
    {
      return $this->storeDetailedDescription;
    }

    /**
     * @param string $storeDetailedDescription
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setStoreDetailedDescription($storeDetailedDescription)
    {
      $this->storeDetailedDescription = $storeDetailedDescription;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreItemTemplate()
    {
      return $this->storeItemTemplate;
    }

    /**
     * @param RecordRef $storeItemTemplate
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setStoreItemTemplate($storeItemTemplate)
    {
      $this->storeItemTemplate = $storeItemTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPageTitle()
    {
      return $this->pageTitle;
    }

    /**
     * @param string $pageTitle
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPageTitle($pageTitle)
    {
      $this->pageTitle = $pageTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlComponent()
    {
      return $this->urlComponent;
    }

    /**
     * @param string $urlComponent
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setUrlComponent($urlComponent)
    {
      $this->urlComponent = $urlComponent;
      return $this;
    }

    /**
     * @return string
     */
    public function getMetaTagHtml()
    {
      return $this->metaTagHtml;
    }

    /**
     * @param string $metaTagHtml
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setMetaTagHtml($metaTagHtml)
    {
      $this->metaTagHtml = $metaTagHtml;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeFromSitemap()
    {
      return $this->excludeFromSitemap;
    }

    /**
     * @param boolean $excludeFromSitemap
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setExcludeFromSitemap($excludeFromSitemap)
    {
      $this->excludeFromSitemap = $excludeFromSitemap;
      return $this;
    }

    /**
     * @return SitemapPriority
     */
    public function getSitemapPriority()
    {
      return $this->sitemapPriority;
    }

    /**
     * @param SitemapPriority $sitemapPriority
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSitemapPriority($sitemapPriority)
    {
      $this->sitemapPriority = $sitemapPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeywords()
    {
      return $this->searchKeywords;
    }

    /**
     * @param string $searchKeywords
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSearchKeywords($searchKeywords)
    {
      $this->searchKeywords = $searchKeywords;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDonationItem()
    {
      return $this->isDonationItem;
    }

    /**
     * @param boolean $isDonationItem
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIsDonationItem($isDonationItem)
    {
      $this->isDonationItem = $isDonationItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowDefaultDonationAmount()
    {
      return $this->showDefaultDonationAmount;
    }

    /**
     * @param boolean $showDefaultDonationAmount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setShowDefaultDonationAmount($showDefaultDonationAmount)
    {
      $this->showDefaultDonationAmount = $showDefaultDonationAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxDonationAmount()
    {
      return $this->maxDonationAmount;
    }

    /**
     * @param float $maxDonationAmount
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setMaxDonationAmount($maxDonationAmount)
    {
      $this->maxDonationAmount = $maxDonationAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDontShowPrice()
    {
      return $this->dontShowPrice;
    }

    /**
     * @param boolean $dontShowPrice
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setDontShowPrice($dontShowPrice)
    {
      $this->dontShowPrice = $dontShowPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoPriceMessage()
    {
      return $this->noPriceMessage;
    }

    /**
     * @param string $noPriceMessage
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setNoPriceMessage($noPriceMessage)
    {
      $this->noPriceMessage = $noPriceMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutOfStockMessage()
    {
      return $this->outOfStockMessage;
    }

    /**
     * @param string $outOfStockMessage
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setOutOfStockMessage($outOfStockMessage)
    {
      $this->outOfStockMessage = $outOfStockMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnSpecial()
    {
      return $this->onSpecial;
    }

    /**
     * @param boolean $onSpecial
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setOnSpecial($onSpecial)
    {
      $this->onSpecial = $onSpecial;
      return $this;
    }

    /**
     * @return ItemOutOfStockBehavior
     */
    public function getOutOfStockBehavior()
    {
      return $this->outOfStockBehavior;
    }

    /**
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setOutOfStockBehavior($outOfStockBehavior)
    {
      $this->outOfStockBehavior = $outOfStockBehavior;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelatedItemsDescription()
    {
      return $this->relatedItemsDescription;
    }

    /**
     * @param string $relatedItemsDescription
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setRelatedItemsDescription($relatedItemsDescription)
    {
      $this->relatedItemsDescription = $relatedItemsDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialsDescription()
    {
      return $this->specialsDescription;
    }

    /**
     * @param string $specialsDescription
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSpecialsDescription($specialsDescription)
    {
      $this->specialsDescription = $specialsDescription;
      return $this;
    }

    /**
     * @return ServiceItemTaskTemplatesList
     */
    public function getItemTaskTemplatesList()
    {
      return $this->itemTaskTemplatesList;
    }

    /**
     * @param ServiceItemTaskTemplatesList $itemTaskTemplatesList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setItemTaskTemplatesList($itemTaskTemplatesList)
    {
      $this->itemTaskTemplatesList = $itemTaskTemplatesList;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedDescription()
    {
      return $this->featuredDescription;
    }

    /**
     * @param string $featuredDescription
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setFeaturedDescription($featuredDescription)
    {
      $this->featuredDescription = $featuredDescription;
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
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpcCode()
    {
      return $this->upcCode;
    }

    /**
     * @param string $upcCode
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setUpcCode($upcCode)
    {
      $this->upcCode = $upcCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
      return $this->vendorName;
    }

    /**
     * @param string $vendorName
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setVendorName($vendorName)
    {
      $this->vendorName = $vendorName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param boolean $isOnline
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGcoCompliant()
    {
      return $this->isGcoCompliant;
    }

    /**
     * @param boolean $isGcoCompliant
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIsGcoCompliant($isGcoCompliant)
    {
      $this->isGcoCompliant = $isGcoCompliant;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOfferSupport()
    {
      return $this->offerSupport;
    }

    /**
     * @param boolean $offerSupport
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setOfferSupport($offerSupport)
    {
      $this->offerSupport = $offerSupport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableToPartners()
    {
      return $this->availableToPartners;
    }

    /**
     * @param boolean $availableToPartners
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setAvailableToPartners($availableToPartners)
    {
      $this->availableToPartners = $availableToPartners;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList()
    {
      return $this->subsidiaryList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return BillingRatesMatrix
     */
    public function getBillingRatesMatrix()
    {
      return $this->billingRatesMatrix;
    }

    /**
     * @param BillingRatesMatrix $billingRatesMatrix
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setBillingRatesMatrix($billingRatesMatrix)
    {
      $this->billingRatesMatrix = $billingRatesMatrix;
      return $this;
    }

    /**
     * @return ItemAccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return ItemOptionsList
     */
    public function getItemOptionsList()
    {
      return $this->itemOptionsList;
    }

    /**
     * @param ItemOptionsList $itemOptionsList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setItemOptionsList($itemOptionsList)
    {
      $this->itemOptionsList = $itemOptionsList;
      return $this;
    }

    /**
     * @return MatrixOptionList
     */
    public function getMatrixOptionList()
    {
      return $this->matrixOptionList;
    }

    /**
     * @param MatrixOptionList $matrixOptionList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setMatrixOptionList($matrixOptionList)
    {
      $this->matrixOptionList = $matrixOptionList;
      return $this;
    }

    /**
     * @return ItemVendorList
     */
    public function getItemVendorList()
    {
      return $this->itemVendorList;
    }

    /**
     * @param ItemVendorList $itemVendorList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setItemVendorList($itemVendorList)
    {
      $this->itemVendorList = $itemVendorList;
      return $this;
    }

    /**
     * @return PricingMatrix
     */
    public function getPricingMatrix()
    {
      return $this->pricingMatrix;
    }

    /**
     * @param PricingMatrix $pricingMatrix
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPricingMatrix($pricingMatrix)
    {
      $this->pricingMatrix = $pricingMatrix;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseTaxCode()
    {
      return $this->purchaseTaxCode;
    }

    /**
     * @param RecordRef $purchaseTaxCode
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPurchaseTaxCode($purchaseTaxCode)
    {
      $this->purchaseTaxCode = $purchaseTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param float $rate
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesTaxCode()
    {
      return $this->salesTaxCode;
    }

    /**
     * @param RecordRef $salesTaxCode
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSalesTaxCode($salesTaxCode)
    {
      $this->salesTaxCode = $salesTaxCode;
      return $this;
    }

    /**
     * @return SiteCategoryList
     */
    public function getSiteCategoryList()
    {
      return $this->siteCategoryList;
    }

    /**
     * @param SiteCategoryList $siteCategoryList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setSiteCategoryList($siteCategoryList)
    {
      $this->siteCategoryList = $siteCategoryList;
      return $this;
    }

    /**
     * @return TranslationList
     */
    public function getTranslationsList()
    {
      return $this->translationsList;
    }

    /**
     * @param TranslationList $translationsList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param RecordRef $vendor
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return PresentationItemList
     */
    public function getPresentationItemList()
    {
      return $this->presentationItemList;
    }

    /**
     * @param PresentationItemList $presentationItemList
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setPresentationItemList($presentationItemList)
    {
      $this->presentationItemList = $presentationItemList;
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
     * @return \Nzolt\NetSuite\ServiceResaleItem
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
     * @return \Nzolt\NetSuite\ServiceResaleItem
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
     * @return \Nzolt\NetSuite\ServiceResaleItem
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
