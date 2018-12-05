<?php

namespace Nzolt\NetSuite;

class ItemNumberCustomField extends CustomFieldType
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
     * @var RecordRef $insertBefore
     */
    protected $insertBefore = null;

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
     * @var CustomizationAccessLevel $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var CustomizationSearchLevel $searchLevel
     */
    protected $searchLevel = null;

    /**
     * @var ItemNumberCustomFieldFilterList $filterList
     */
    protected $filterList = null;

    /**
     * @var CustomFieldRoleAccessList $roleAccessList
     */
    protected $roleAccessList = null;

    /**
     * @var CustomFieldDepartmentAccessList $deptAccessList
     */
    protected $deptAccessList = null;

    /**
     * @var boolean $appliesToAllItems
     */
    protected $appliesToAllItems = null;

    /**
     * @var boolean $appliesToSerialized
     */
    protected $appliesToSerialized = null;

    /**
     * @var boolean $appliesToLots
     */
    protected $appliesToLots = null;

    /**
     * @var boolean $appliesToGiftCerts
     */
    protected $appliesToGiftCerts = null;

    /**
     * @var RecordRefList $itemsList
     */
    protected $itemsList = null;

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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setShowInList($showInList)
    {
      $this->showInList = $showInList;
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setInsertBefore($insertBefore)
    {
      $this->insertBefore = $insertBefore;
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setSourceFilterBy($sourceFilterBy)
    {
      $this->sourceFilterBy = $sourceFilterBy;
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setSearchLevel($searchLevel)
    {
      $this->searchLevel = $searchLevel;
      return $this;
    }

    /**
     * @return ItemNumberCustomFieldFilterList
     */
    public function getFilterList()
    {
      return $this->filterList;
    }

    /**
     * @param ItemNumberCustomFieldFilterList $filterList
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setFilterList($filterList)
    {
      $this->filterList = $filterList;
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setDeptAccessList($deptAccessList)
    {
      $this->deptAccessList = $deptAccessList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToAllItems()
    {
      return $this->appliesToAllItems;
    }

    /**
     * @param boolean $appliesToAllItems
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setAppliesToAllItems($appliesToAllItems)
    {
      $this->appliesToAllItems = $appliesToAllItems;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToSerialized()
    {
      return $this->appliesToSerialized;
    }

    /**
     * @param boolean $appliesToSerialized
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setAppliesToSerialized($appliesToSerialized)
    {
      $this->appliesToSerialized = $appliesToSerialized;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToLots()
    {
      return $this->appliesToLots;
    }

    /**
     * @param boolean $appliesToLots
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setAppliesToLots($appliesToLots)
    {
      $this->appliesToLots = $appliesToLots;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToGiftCerts()
    {
      return $this->appliesToGiftCerts;
    }

    /**
     * @param boolean $appliesToGiftCerts
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setAppliesToGiftCerts($appliesToGiftCerts)
    {
      $this->appliesToGiftCerts = $appliesToGiftCerts;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemsList()
    {
      return $this->itemsList;
    }

    /**
     * @param RecordRefList $itemsList
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setItemsList($itemsList)
    {
      $this->itemsList = $itemsList;
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
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
     * @return \Nzolt\NetSuite\ItemNumberCustomField
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
