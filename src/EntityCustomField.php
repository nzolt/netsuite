<?php

namespace Nzolt\NetSuite;

class EntityCustomField extends CustomFieldType
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
     * @var boolean $availableToSso
     */
    protected $availableToSso = null;

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
     * @var boolean $appliesToCustomer
     */
    protected $appliesToCustomer = null;

    /**
     * @var boolean $appliesToProject
     */
    protected $appliesToProject = null;

    /**
     * @var boolean $appliesToVendor
     */
    protected $appliesToVendor = null;

    /**
     * @var boolean $appliesToEmployee
     */
    protected $appliesToEmployee = null;

    /**
     * @var boolean $appliesToOtherName
     */
    protected $appliesToOtherName = null;

    /**
     * @var boolean $appliesToContact
     */
    protected $appliesToContact = null;

    /**
     * @var boolean $appliesToPartner
     */
    protected $appliesToPartner = null;

    /**
     * @var boolean $appliesToWebSite
     */
    protected $appliesToWebSite = null;

    /**
     * @var boolean $appliesToGroup
     */
    protected $appliesToGroup = null;

    /**
     * @var boolean $availableExternally
     */
    protected $availableExternally = null;

    /**
     * @var EntityCustomFieldFilterList $filterList
     */
    protected $filterList = null;

    /**
     * @var CustomizationAccessLevel $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var boolean $appliesToStatement
     */
    protected $appliesToStatement = null;

    /**
     * @var CustomizationSearchLevel $searchLevel
     */
    protected $searchLevel = null;

    /**
     * @var boolean $appliesToPriceList
     */
    protected $appliesToPriceList = null;

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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAvailableToSso($availableToSso)
    {
      $this->availableToSso = $availableToSso;
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setSourceFilterBy($sourceFilterBy)
    {
      $this->sourceFilterBy = $sourceFilterBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToCustomer()
    {
      return $this->appliesToCustomer;
    }

    /**
     * @param boolean $appliesToCustomer
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToCustomer($appliesToCustomer)
    {
      $this->appliesToCustomer = $appliesToCustomer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToProject()
    {
      return $this->appliesToProject;
    }

    /**
     * @param boolean $appliesToProject
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToProject($appliesToProject)
    {
      $this->appliesToProject = $appliesToProject;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToVendor()
    {
      return $this->appliesToVendor;
    }

    /**
     * @param boolean $appliesToVendor
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToVendor($appliesToVendor)
    {
      $this->appliesToVendor = $appliesToVendor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToEmployee()
    {
      return $this->appliesToEmployee;
    }

    /**
     * @param boolean $appliesToEmployee
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToEmployee($appliesToEmployee)
    {
      $this->appliesToEmployee = $appliesToEmployee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToOtherName()
    {
      return $this->appliesToOtherName;
    }

    /**
     * @param boolean $appliesToOtherName
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToOtherName($appliesToOtherName)
    {
      $this->appliesToOtherName = $appliesToOtherName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToContact()
    {
      return $this->appliesToContact;
    }

    /**
     * @param boolean $appliesToContact
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToContact($appliesToContact)
    {
      $this->appliesToContact = $appliesToContact;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToPartner()
    {
      return $this->appliesToPartner;
    }

    /**
     * @param boolean $appliesToPartner
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToPartner($appliesToPartner)
    {
      $this->appliesToPartner = $appliesToPartner;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToWebSite()
    {
      return $this->appliesToWebSite;
    }

    /**
     * @param boolean $appliesToWebSite
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToWebSite($appliesToWebSite)
    {
      $this->appliesToWebSite = $appliesToWebSite;
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
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToGroup($appliesToGroup)
    {
      $this->appliesToGroup = $appliesToGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableExternally()
    {
      return $this->availableExternally;
    }

    /**
     * @param boolean $availableExternally
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAvailableExternally($availableExternally)
    {
      $this->availableExternally = $availableExternally;
      return $this;
    }

    /**
     * @return EntityCustomFieldFilterList
     */
    public function getFilterList()
    {
      return $this->filterList;
    }

    /**
     * @param EntityCustomFieldFilterList $filterList
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToStatement()
    {
      return $this->appliesToStatement;
    }

    /**
     * @param boolean $appliesToStatement
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToStatement($appliesToStatement)
    {
      $this->appliesToStatement = $appliesToStatement;
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
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setSearchLevel($searchLevel)
    {
      $this->searchLevel = $searchLevel;
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
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setAppliesToPriceList($appliesToPriceList)
    {
      $this->appliesToPriceList = $appliesToPriceList;
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
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
     * @return \Nzolt\NetSuite\EntityCustomField
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
