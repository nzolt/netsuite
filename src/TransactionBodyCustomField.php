<?php

namespace Nzolt\NetSuite;

class TransactionBodyCustomField extends CustomFieldType
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $selectRecordType
     */
    protected $selectRecordType = null;

    /**
     * @var boolean $storeValue
     */
    protected $storeValue = null;

    /**
     * @var boolean $showInList
     */
    protected $showInList = null;

    /**
     * @var boolean $globalSearch
     */
    protected $globalSearch = null;

    /**
     * @var boolean $isParent
     */
    protected $isParent = null;

    /**
     * @var RecordRef $insertBefore
     */
    protected $insertBefore = null;

    /**
     * @var RecordRef $subtab
     */
    protected $subtab = null;

    /**
     * @var boolean $availableToSso
     */
    protected $availableToSso = null;

    /**
     * @var CustomizationDisplayType $displayType
     */
    protected $displayType = null;

    /**
     * @var int $displayWidth
     */
    protected $displayWidth = null;

    /**
     * @var int $displayHeight
     */
    protected $displayHeight = null;

    /**
     * @var string $help
     */
    protected $help = null;

    /**
     * @var RecordRef $parentSubtab
     */
    protected $parentSubtab = null;

    /**
     * @var string $linkText
     */
    protected $linkText = null;

    /**
     * @var boolean $isMandatory
     */
    protected $isMandatory = null;

    /**
     * @var boolean $checkSpelling
     */
    protected $checkSpelling = null;

    /**
     * @var int $maxLength
     */
    protected $maxLength = null;

    /**
     * @var float $minValue
     */
    protected $minValue = null;

    /**
     * @var float $maxValue
     */
    protected $maxValue = null;

    /**
     * @var boolean $defaultChecked
     */
    protected $defaultChecked = null;

    /**
     * @var string $defaultValue
     */
    protected $defaultValue = null;

    /**
     * @var boolean $isFormula
     */
    protected $isFormula = null;

    /**
     * @var RecordRef $defaultSelection
     */
    protected $defaultSelection = null;

    /**
     * @var CustomizationDynamicDefault $dynamicDefault
     */
    protected $dynamicDefault = null;

    /**
     * @var RecordRef $searchDefault
     */
    protected $searchDefault = null;

    /**
     * @var RecordRef $searchCompareField
     */
    protected $searchCompareField = null;

    /**
     * @var RecordRef $sourceList
     */
    protected $sourceList = null;

    /**
     * @var RecordRef $sourceFrom
     */
    protected $sourceFrom = null;

    /**
     * @var RecordRef $sourceFilterBy
     */
    protected $sourceFilterBy = null;

    /**
     * @var boolean $bodyPurchase
     */
    protected $bodyPurchase = null;

    /**
     * @var boolean $bodySale
     */
    protected $bodySale = null;

    /**
     * @var boolean $bodyOpportunity
     */
    protected $bodyOpportunity = null;

    /**
     * @var boolean $bodyJournal
     */
    protected $bodyJournal = null;

    /**
     * @var boolean $bodyExpenseReport
     */
    protected $bodyExpenseReport = null;

    /**
     * @var boolean $bodyStore
     */
    protected $bodyStore = null;

    /**
     * @var boolean $bodyTransferOrder
     */
    protected $bodyTransferOrder = null;

    /**
     * @var boolean $bodyItemReceipt
     */
    protected $bodyItemReceipt = null;

    /**
     * @var boolean $bodyItemReceiptOrder
     */
    protected $bodyItemReceiptOrder = null;

    /**
     * @var boolean $bodyItemFulfillment
     */
    protected $bodyItemFulfillment = null;

    /**
     * @var boolean $bodyItemFulfillmentOrder
     */
    protected $bodyItemFulfillmentOrder = null;

    /**
     * @var boolean $bodyInventoryAdjustment
     */
    protected $bodyInventoryAdjustment = null;

    /**
     * @var boolean $bodyBTegata
     */
    protected $bodyBTegata = null;

    /**
     * @var boolean $bodyAssemblyBuild
     */
    protected $bodyAssemblyBuild = null;

    /**
     * @var boolean $bodyPrintFlag
     */
    protected $bodyPrintFlag = null;

    /**
     * @var boolean $bodyPickingTicket
     */
    protected $bodyPickingTicket = null;

    /**
     * @var boolean $bodyOtherTransaction
     */
    protected $bodyOtherTransaction = null;

    /**
     * @var boolean $bodyPrintPackingSlip
     */
    protected $bodyPrintPackingSlip = null;

    /**
     * @var boolean $bodyCustomerPayment
     */
    protected $bodyCustomerPayment = null;

    /**
     * @var boolean $bodyVendorPayment
     */
    protected $bodyVendorPayment = null;

    /**
     * @var boolean $bodyDeposit
     */
    protected $bodyDeposit = null;

    /**
     * @var boolean $bodyBom
     */
    protected $bodyBom = null;

    /**
     * @var boolean $bodyPrintStatement
     */
    protected $bodyPrintStatement = null;

    /**
     * @var TransactionBodyCustomFieldFilterList $filterList
     */
    protected $filterList = null;

    /**
     * @var CustomizationAccessLevel $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var CustomizationSearchLevel $searchLevel
     */
    protected $searchLevel = null;

    /**
     * @var CustomFieldRoleAccessList $roleAccessList
     */
    protected $roleAccessList = null;

    /**
     * @var CustomFieldDepartmentAccessList $deptAccessList
     */
    protected $deptAccessList = null;

    /**
     * @var CustomFieldSubAccessList $subAccessList
     */
    protected $subAccessList = null;

    /**
     * @var CustomFieldTranslationsList $translationsList
     */
    protected $translationsList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param RecordRef $owner
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSelectRecordType()
    {
      return $this->selectRecordType;
    }

    /**
     * @param RecordRef $selectRecordType
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSelectRecordType($selectRecordType)
    {
      $this->selectRecordType = $selectRecordType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStoreValue()
    {
      return $this->storeValue;
    }

    /**
     * @param boolean $storeValue
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setStoreValue($storeValue)
    {
      $this->storeValue = $storeValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowInList()
    {
      return $this->showInList;
    }

    /**
     * @param boolean $showInList
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setShowInList($showInList)
    {
      $this->showInList = $showInList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGlobalSearch()
    {
      return $this->globalSearch;
    }

    /**
     * @param boolean $globalSearch
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setGlobalSearch($globalSearch)
    {
      $this->globalSearch = $globalSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsParent()
    {
      return $this->isParent;
    }

    /**
     * @param boolean $isParent
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setIsParent($isParent)
    {
      $this->isParent = $isParent;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInsertBefore()
    {
      return $this->insertBefore;
    }

    /**
     * @param RecordRef $insertBefore
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setInsertBefore($insertBefore)
    {
      $this->insertBefore = $insertBefore;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubtab()
    {
      return $this->subtab;
    }

    /**
     * @param RecordRef $subtab
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSubtab($subtab)
    {
      $this->subtab = $subtab;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableToSso()
    {
      return $this->availableToSso;
    }

    /**
     * @param boolean $availableToSso
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setAvailableToSso($availableToSso)
    {
      $this->availableToSso = $availableToSso;
      return $this;
    }

    /**
     * @return CustomizationDisplayType
     */
    public function getDisplayType()
    {
      return $this->displayType;
    }

    /**
     * @param CustomizationDisplayType $displayType
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDisplayType($displayType)
    {
      $this->displayType = $displayType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayWidth()
    {
      return $this->displayWidth;
    }

    /**
     * @param int $displayWidth
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDisplayWidth($displayWidth)
    {
      $this->displayWidth = $displayWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayHeight()
    {
      return $this->displayHeight;
    }

    /**
     * @param int $displayHeight
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDisplayHeight($displayHeight)
    {
      $this->displayHeight = $displayHeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getHelp()
    {
      return $this->help;
    }

    /**
     * @param string $help
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setHelp($help)
    {
      $this->help = $help;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentSubtab()
    {
      return $this->parentSubtab;
    }

    /**
     * @param RecordRef $parentSubtab
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setParentSubtab($parentSubtab)
    {
      $this->parentSubtab = $parentSubtab;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkText()
    {
      return $this->linkText;
    }

    /**
     * @param string $linkText
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setLinkText($linkText)
    {
      $this->linkText = $linkText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMandatory()
    {
      return $this->isMandatory;
    }

    /**
     * @param boolean $isMandatory
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setIsMandatory($isMandatory)
    {
      $this->isMandatory = $isMandatory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckSpelling()
    {
      return $this->checkSpelling;
    }

    /**
     * @param boolean $checkSpelling
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setCheckSpelling($checkSpelling)
    {
      $this->checkSpelling = $checkSpelling;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
      return $this->maxLength;
    }

    /**
     * @param int $maxLength
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setMaxLength($maxLength)
    {
      $this->maxLength = $maxLength;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinValue()
    {
      return $this->minValue;
    }

    /**
     * @param float $minValue
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setMinValue($minValue)
    {
      $this->minValue = $minValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxValue()
    {
      return $this->maxValue;
    }

    /**
     * @param float $maxValue
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setMaxValue($maxValue)
    {
      $this->maxValue = $maxValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultChecked()
    {
      return $this->defaultChecked;
    }

    /**
     * @param boolean $defaultChecked
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDefaultChecked($defaultChecked)
    {
      $this->defaultChecked = $defaultChecked;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
      return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDefaultValue($defaultValue)
    {
      $this->defaultValue = $defaultValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFormula()
    {
      return $this->isFormula;
    }

    /**
     * @param boolean $isFormula
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setIsFormula($isFormula)
    {
      $this->isFormula = $isFormula;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultSelection()
    {
      return $this->defaultSelection;
    }

    /**
     * @param RecordRef $defaultSelection
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDefaultSelection($defaultSelection)
    {
      $this->defaultSelection = $defaultSelection;
      return $this;
    }

    /**
     * @return CustomizationDynamicDefault
     */
    public function getDynamicDefault()
    {
      return $this->dynamicDefault;
    }

    /**
     * @param CustomizationDynamicDefault $dynamicDefault
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDynamicDefault($dynamicDefault)
    {
      $this->dynamicDefault = $dynamicDefault;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchDefault()
    {
      return $this->searchDefault;
    }

    /**
     * @param RecordRef $searchDefault
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSearchDefault($searchDefault)
    {
      $this->searchDefault = $searchDefault;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchCompareField()
    {
      return $this->searchCompareField;
    }

    /**
     * @param RecordRef $searchCompareField
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSearchCompareField($searchCompareField)
    {
      $this->searchCompareField = $searchCompareField;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceList()
    {
      return $this->sourceList;
    }

    /**
     * @param RecordRef $sourceList
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSourceList($sourceList)
    {
      $this->sourceList = $sourceList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceFrom()
    {
      return $this->sourceFrom;
    }

    /**
     * @param RecordRef $sourceFrom
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSourceFrom($sourceFrom)
    {
      $this->sourceFrom = $sourceFrom;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceFilterBy()
    {
      return $this->sourceFilterBy;
    }

    /**
     * @param RecordRef $sourceFilterBy
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSourceFilterBy($sourceFilterBy)
    {
      $this->sourceFilterBy = $sourceFilterBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyPurchase()
    {
      return $this->bodyPurchase;
    }

    /**
     * @param boolean $bodyPurchase
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyPurchase($bodyPurchase)
    {
      $this->bodyPurchase = $bodyPurchase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodySale()
    {
      return $this->bodySale;
    }

    /**
     * @param boolean $bodySale
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodySale($bodySale)
    {
      $this->bodySale = $bodySale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyOpportunity()
    {
      return $this->bodyOpportunity;
    }

    /**
     * @param boolean $bodyOpportunity
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyOpportunity($bodyOpportunity)
    {
      $this->bodyOpportunity = $bodyOpportunity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyJournal()
    {
      return $this->bodyJournal;
    }

    /**
     * @param boolean $bodyJournal
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyJournal($bodyJournal)
    {
      $this->bodyJournal = $bodyJournal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyExpenseReport()
    {
      return $this->bodyExpenseReport;
    }

    /**
     * @param boolean $bodyExpenseReport
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyExpenseReport($bodyExpenseReport)
    {
      $this->bodyExpenseReport = $bodyExpenseReport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyStore()
    {
      return $this->bodyStore;
    }

    /**
     * @param boolean $bodyStore
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyStore($bodyStore)
    {
      $this->bodyStore = $bodyStore;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyTransferOrder()
    {
      return $this->bodyTransferOrder;
    }

    /**
     * @param boolean $bodyTransferOrder
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyTransferOrder($bodyTransferOrder)
    {
      $this->bodyTransferOrder = $bodyTransferOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyItemReceipt()
    {
      return $this->bodyItemReceipt;
    }

    /**
     * @param boolean $bodyItemReceipt
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyItemReceipt($bodyItemReceipt)
    {
      $this->bodyItemReceipt = $bodyItemReceipt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyItemReceiptOrder()
    {
      return $this->bodyItemReceiptOrder;
    }

    /**
     * @param boolean $bodyItemReceiptOrder
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyItemReceiptOrder($bodyItemReceiptOrder)
    {
      $this->bodyItemReceiptOrder = $bodyItemReceiptOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyItemFulfillment()
    {
      return $this->bodyItemFulfillment;
    }

    /**
     * @param boolean $bodyItemFulfillment
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyItemFulfillment($bodyItemFulfillment)
    {
      $this->bodyItemFulfillment = $bodyItemFulfillment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyItemFulfillmentOrder()
    {
      return $this->bodyItemFulfillmentOrder;
    }

    /**
     * @param boolean $bodyItemFulfillmentOrder
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyItemFulfillmentOrder($bodyItemFulfillmentOrder)
    {
      $this->bodyItemFulfillmentOrder = $bodyItemFulfillmentOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyInventoryAdjustment()
    {
      return $this->bodyInventoryAdjustment;
    }

    /**
     * @param boolean $bodyInventoryAdjustment
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyInventoryAdjustment($bodyInventoryAdjustment)
    {
      $this->bodyInventoryAdjustment = $bodyInventoryAdjustment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyBTegata()
    {
      return $this->bodyBTegata;
    }

    /**
     * @param boolean $bodyBTegata
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyBTegata($bodyBTegata)
    {
      $this->bodyBTegata = $bodyBTegata;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyAssemblyBuild()
    {
      return $this->bodyAssemblyBuild;
    }

    /**
     * @param boolean $bodyAssemblyBuild
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyAssemblyBuild($bodyAssemblyBuild)
    {
      $this->bodyAssemblyBuild = $bodyAssemblyBuild;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyPrintFlag()
    {
      return $this->bodyPrintFlag;
    }

    /**
     * @param boolean $bodyPrintFlag
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyPrintFlag($bodyPrintFlag)
    {
      $this->bodyPrintFlag = $bodyPrintFlag;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyPickingTicket()
    {
      return $this->bodyPickingTicket;
    }

    /**
     * @param boolean $bodyPickingTicket
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyPickingTicket($bodyPickingTicket)
    {
      $this->bodyPickingTicket = $bodyPickingTicket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyOtherTransaction()
    {
      return $this->bodyOtherTransaction;
    }

    /**
     * @param boolean $bodyOtherTransaction
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyOtherTransaction($bodyOtherTransaction)
    {
      $this->bodyOtherTransaction = $bodyOtherTransaction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyPrintPackingSlip()
    {
      return $this->bodyPrintPackingSlip;
    }

    /**
     * @param boolean $bodyPrintPackingSlip
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyPrintPackingSlip($bodyPrintPackingSlip)
    {
      $this->bodyPrintPackingSlip = $bodyPrintPackingSlip;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyCustomerPayment()
    {
      return $this->bodyCustomerPayment;
    }

    /**
     * @param boolean $bodyCustomerPayment
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyCustomerPayment($bodyCustomerPayment)
    {
      $this->bodyCustomerPayment = $bodyCustomerPayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyVendorPayment()
    {
      return $this->bodyVendorPayment;
    }

    /**
     * @param boolean $bodyVendorPayment
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyVendorPayment($bodyVendorPayment)
    {
      $this->bodyVendorPayment = $bodyVendorPayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyDeposit()
    {
      return $this->bodyDeposit;
    }

    /**
     * @param boolean $bodyDeposit
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyDeposit($bodyDeposit)
    {
      $this->bodyDeposit = $bodyDeposit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyBom()
    {
      return $this->bodyBom;
    }

    /**
     * @param boolean $bodyBom
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyBom($bodyBom)
    {
      $this->bodyBom = $bodyBom;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBodyPrintStatement()
    {
      return $this->bodyPrintStatement;
    }

    /**
     * @param boolean $bodyPrintStatement
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setBodyPrintStatement($bodyPrintStatement)
    {
      $this->bodyPrintStatement = $bodyPrintStatement;
      return $this;
    }

    /**
     * @return TransactionBodyCustomFieldFilterList
     */
    public function getFilterList()
    {
      return $this->filterList;
    }

    /**
     * @param TransactionBodyCustomFieldFilterList $filterList
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setFilterList($filterList)
    {
      $this->filterList = $filterList;
      return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel()
    {
      return $this->searchLevel;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSearchLevel($searchLevel)
    {
      $this->searchLevel = $searchLevel;
      return $this;
    }

    /**
     * @return CustomFieldRoleAccessList
     */
    public function getRoleAccessList()
    {
      return $this->roleAccessList;
    }

    /**
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setRoleAccessList($roleAccessList)
    {
      $this->roleAccessList = $roleAccessList;
      return $this;
    }

    /**
     * @return CustomFieldDepartmentAccessList
     */
    public function getDeptAccessList()
    {
      return $this->deptAccessList;
    }

    /**
     * @param CustomFieldDepartmentAccessList $deptAccessList
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setDeptAccessList($deptAccessList)
    {
      $this->deptAccessList = $deptAccessList;
      return $this;
    }

    /**
     * @return CustomFieldSubAccessList
     */
    public function getSubAccessList()
    {
      return $this->subAccessList;
    }

    /**
     * @param CustomFieldSubAccessList $subAccessList
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setSubAccessList($subAccessList)
    {
      $this->subAccessList = $subAccessList;
      return $this;
    }

    /**
     * @return CustomFieldTranslationsList
     */
    public function getTranslationsList()
    {
      return $this->translationsList;
    }

    /**
     * @param CustomFieldTranslationsList $translationsList
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
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
     * @return \Nzolt\NetSuite\TransactionBodyCustomField
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
