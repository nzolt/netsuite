<?php

namespace Nzolt\NetSuite;

class ItemCustomField extends CustomFieldType
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
     * @var boolean $itemMatrix
     */
    protected $itemMatrix = null;

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
     * @var boolean $appliesToInventory
     */
    protected $appliesToInventory = null;

    /**
     * @var boolean $appliesToNonInventory
     */
    protected $appliesToNonInventory = null;

    /**
     * @var boolean $appliesToService
     */
    protected $appliesToService = null;

    /**
     * @var boolean $appliesToOtherCharge
     */
    protected $appliesToOtherCharge = null;

    /**
     * @var boolean $appliesToGroup
     */
    protected $appliesToGroup = null;

    /**
     * @var boolean $appliesToKit
     */
    protected $appliesToKit = null;

    /**
     * @var boolean $appliesToItemAssembly
     */
    protected $appliesToItemAssembly = null;

    /**
     * @var boolean $availableToSso
     */
    protected $availableToSso = null;

    /**
     * @var ItemCustomFieldItemSubType $itemSubType
     */
    protected $itemSubType = null;

    /**
     * @var ItemCustomFieldFilterList $filterList
     */
    protected $filterList = null;

    /**
     * @var boolean $appliesToPriceList
     */
    protected $appliesToPriceList = null;

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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItemMatrix()
    {
      return $this->itemMatrix;
    }

    /**
     * @param boolean $itemMatrix
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setItemMatrix($itemMatrix)
    {
      $this->itemMatrix = $itemMatrix;
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setSubtab($subtab)
    {
      $this->subtab = $subtab;
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setSourceFilterBy($sourceFilterBy)
    {
      $this->sourceFilterBy = $sourceFilterBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToInventory()
    {
      return $this->appliesToInventory;
    }

    /**
     * @param boolean $appliesToInventory
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToInventory($appliesToInventory)
    {
      $this->appliesToInventory = $appliesToInventory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToNonInventory()
    {
      return $this->appliesToNonInventory;
    }

    /**
     * @param boolean $appliesToNonInventory
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToNonInventory($appliesToNonInventory)
    {
      $this->appliesToNonInventory = $appliesToNonInventory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToService()
    {
      return $this->appliesToService;
    }

    /**
     * @param boolean $appliesToService
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToService($appliesToService)
    {
      $this->appliesToService = $appliesToService;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToOtherCharge()
    {
      return $this->appliesToOtherCharge;
    }

    /**
     * @param boolean $appliesToOtherCharge
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToOtherCharge($appliesToOtherCharge)
    {
      $this->appliesToOtherCharge = $appliesToOtherCharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToGroup()
    {
      return $this->appliesToGroup;
    }

    /**
     * @param boolean $appliesToGroup
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToGroup($appliesToGroup)
    {
      $this->appliesToGroup = $appliesToGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToKit()
    {
      return $this->appliesToKit;
    }

    /**
     * @param boolean $appliesToKit
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToKit($appliesToKit)
    {
      $this->appliesToKit = $appliesToKit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToItemAssembly()
    {
      return $this->appliesToItemAssembly;
    }

    /**
     * @param boolean $appliesToItemAssembly
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToItemAssembly($appliesToItemAssembly)
    {
      $this->appliesToItemAssembly = $appliesToItemAssembly;
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
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAvailableToSso($availableToSso)
    {
      $this->availableToSso = $availableToSso;
      return $this;
    }

    /**
     * @return ItemCustomFieldItemSubType
     */
    public function getItemSubType()
    {
      return $this->itemSubType;
    }

    /**
     * @param ItemCustomFieldItemSubType $itemSubType
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setItemSubType($itemSubType)
    {
      $this->itemSubType = $itemSubType;
      return $this;
    }

    /**
     * @return ItemCustomFieldFilterList
     */
    public function getFilterList()
    {
      return $this->filterList;
    }

    /**
     * @param ItemCustomFieldFilterList $filterList
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setFilterList($filterList)
    {
      $this->filterList = $filterList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToPriceList()
    {
      return $this->appliesToPriceList;
    }

    /**
     * @param boolean $appliesToPriceList
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setAppliesToPriceList($appliesToPriceList)
    {
      $this->appliesToPriceList = $appliesToPriceList;
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
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
     * @return \Nzolt\NetSuite\ItemCustomField
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
