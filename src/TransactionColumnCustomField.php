<?php

namespace Nzolt\NetSuite;

class TransactionColumnCustomField extends CustomFieldType
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
     * @var RecordRef $insertBefore
     */
    protected $insertBefore = null;

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
     * @var string $linkText
     */
    protected $linkText = null;

    /**
     * @var boolean $isMandatory
     */
    protected $isMandatory = null;

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
     * @var boolean $colExpense
     */
    protected $colExpense = null;

    /**
     * @var boolean $colPurchase
     */
    protected $colPurchase = null;

    /**
     * @var boolean $colSale
     */
    protected $colSale = null;

    /**
     * @var boolean $colOpportunity
     */
    protected $colOpportunity = null;

    /**
     * @var boolean $colStore
     */
    protected $colStore = null;

    /**
     * @var boolean $colStoreHidden
     */
    protected $colStoreHidden = null;

    /**
     * @var boolean $colJournal
     */
    protected $colJournal = null;

    /**
     * @var boolean $colBuild
     */
    protected $colBuild = null;

    /**
     * @var boolean $colExpenseReport
     */
    protected $colExpenseReport = null;

    /**
     * @var boolean $colTime
     */
    protected $colTime = null;

    /**
     * @var boolean $colTransferOrder
     */
    protected $colTransferOrder = null;

    /**
     * @var boolean $colTimeGroup
     */
    protected $colTimeGroup = null;

    /**
     * @var boolean $colItemReceipt
     */
    protected $colItemReceipt = null;

    /**
     * @var boolean $colItemReceiptOrder
     */
    protected $colItemReceiptOrder = null;

    /**
     * @var boolean $colItemFulfillment
     */
    protected $colItemFulfillment = null;

    /**
     * @var boolean $colItemFulfillmentOrder
     */
    protected $colItemFulfillmentOrder = null;

    /**
     * @var boolean $colPrintFlag
     */
    protected $colPrintFlag = null;

    /**
     * @var boolean $colPickingTicket
     */
    protected $colPickingTicket = null;

    /**
     * @var boolean $colPackingSlip
     */
    protected $colPackingSlip = null;

    /**
     * @var boolean $colReturnForm
     */
    protected $colReturnForm = null;

    /**
     * @var boolean $colStoreWithGroups
     */
    protected $colStoreWithGroups = null;

    /**
     * @var boolean $colGroupOnInvoices
     */
    protected $colGroupOnInvoices = null;

    /**
     * @var boolean $colKitItem
     */
    protected $colKitItem = null;

    /**
     * @var TransactionColumnCustomFieldFilterList $filterList
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setStoreValue($storeValue)
    {
      $this->storeValue = $storeValue;
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setInsertBefore($insertBefore)
    {
      $this->insertBefore = $insertBefore;
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setHelp($help)
    {
      $this->help = $help;
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setIsMandatory($isMandatory)
    {
      $this->isMandatory = $isMandatory;
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setDynamicDefault($dynamicDefault)
    {
      $this->dynamicDefault = $dynamicDefault;
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setSourceFilterBy($sourceFilterBy)
    {
      $this->sourceFilterBy = $sourceFilterBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColExpense()
    {
      return $this->colExpense;
    }

    /**
     * @param boolean $colExpense
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColExpense($colExpense)
    {
      $this->colExpense = $colExpense;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColPurchase()
    {
      return $this->colPurchase;
    }

    /**
     * @param boolean $colPurchase
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColPurchase($colPurchase)
    {
      $this->colPurchase = $colPurchase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColSale()
    {
      return $this->colSale;
    }

    /**
     * @param boolean $colSale
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColSale($colSale)
    {
      $this->colSale = $colSale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColOpportunity()
    {
      return $this->colOpportunity;
    }

    /**
     * @param boolean $colOpportunity
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColOpportunity($colOpportunity)
    {
      $this->colOpportunity = $colOpportunity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColStore()
    {
      return $this->colStore;
    }

    /**
     * @param boolean $colStore
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColStore($colStore)
    {
      $this->colStore = $colStore;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColStoreHidden()
    {
      return $this->colStoreHidden;
    }

    /**
     * @param boolean $colStoreHidden
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColStoreHidden($colStoreHidden)
    {
      $this->colStoreHidden = $colStoreHidden;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColJournal()
    {
      return $this->colJournal;
    }

    /**
     * @param boolean $colJournal
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColJournal($colJournal)
    {
      $this->colJournal = $colJournal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColBuild()
    {
      return $this->colBuild;
    }

    /**
     * @param boolean $colBuild
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColBuild($colBuild)
    {
      $this->colBuild = $colBuild;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColExpenseReport()
    {
      return $this->colExpenseReport;
    }

    /**
     * @param boolean $colExpenseReport
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColExpenseReport($colExpenseReport)
    {
      $this->colExpenseReport = $colExpenseReport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColTime()
    {
      return $this->colTime;
    }

    /**
     * @param boolean $colTime
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColTime($colTime)
    {
      $this->colTime = $colTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColTransferOrder()
    {
      return $this->colTransferOrder;
    }

    /**
     * @param boolean $colTransferOrder
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColTransferOrder($colTransferOrder)
    {
      $this->colTransferOrder = $colTransferOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColTimeGroup()
    {
      return $this->colTimeGroup;
    }

    /**
     * @param boolean $colTimeGroup
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColTimeGroup($colTimeGroup)
    {
      $this->colTimeGroup = $colTimeGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColItemReceipt()
    {
      return $this->colItemReceipt;
    }

    /**
     * @param boolean $colItemReceipt
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColItemReceipt($colItemReceipt)
    {
      $this->colItemReceipt = $colItemReceipt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColItemReceiptOrder()
    {
      return $this->colItemReceiptOrder;
    }

    /**
     * @param boolean $colItemReceiptOrder
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColItemReceiptOrder($colItemReceiptOrder)
    {
      $this->colItemReceiptOrder = $colItemReceiptOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColItemFulfillment()
    {
      return $this->colItemFulfillment;
    }

    /**
     * @param boolean $colItemFulfillment
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColItemFulfillment($colItemFulfillment)
    {
      $this->colItemFulfillment = $colItemFulfillment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColItemFulfillmentOrder()
    {
      return $this->colItemFulfillmentOrder;
    }

    /**
     * @param boolean $colItemFulfillmentOrder
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColItemFulfillmentOrder($colItemFulfillmentOrder)
    {
      $this->colItemFulfillmentOrder = $colItemFulfillmentOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColPrintFlag()
    {
      return $this->colPrintFlag;
    }

    /**
     * @param boolean $colPrintFlag
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColPrintFlag($colPrintFlag)
    {
      $this->colPrintFlag = $colPrintFlag;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColPickingTicket()
    {
      return $this->colPickingTicket;
    }

    /**
     * @param boolean $colPickingTicket
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColPickingTicket($colPickingTicket)
    {
      $this->colPickingTicket = $colPickingTicket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColPackingSlip()
    {
      return $this->colPackingSlip;
    }

    /**
     * @param boolean $colPackingSlip
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColPackingSlip($colPackingSlip)
    {
      $this->colPackingSlip = $colPackingSlip;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColReturnForm()
    {
      return $this->colReturnForm;
    }

    /**
     * @param boolean $colReturnForm
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColReturnForm($colReturnForm)
    {
      $this->colReturnForm = $colReturnForm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColStoreWithGroups()
    {
      return $this->colStoreWithGroups;
    }

    /**
     * @param boolean $colStoreWithGroups
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColStoreWithGroups($colStoreWithGroups)
    {
      $this->colStoreWithGroups = $colStoreWithGroups;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColGroupOnInvoices()
    {
      return $this->colGroupOnInvoices;
    }

    /**
     * @param boolean $colGroupOnInvoices
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColGroupOnInvoices($colGroupOnInvoices)
    {
      $this->colGroupOnInvoices = $colGroupOnInvoices;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColKitItem()
    {
      return $this->colKitItem;
    }

    /**
     * @param boolean $colKitItem
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setColKitItem($colKitItem)
    {
      $this->colKitItem = $colKitItem;
      return $this;
    }

    /**
     * @return TransactionColumnCustomFieldFilterList
     */
    public function getFilterList()
    {
      return $this->filterList;
    }

    /**
     * @param TransactionColumnCustomFieldFilterList $filterList
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
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
     * @return \Nzolt\NetSuite\TransactionColumnCustomField
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
