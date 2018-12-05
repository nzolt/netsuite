<?php

namespace Nzolt\NetSuite;

class ExpenseCategory extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $expenseAcct
     */
    protected $expenseAcct = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $rateRequired
     */
    protected $rateRequired = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var float $defaultRate
     */
    protected $defaultRate = null;

    /**
     * @var ExpenseCategoryRatesList $ratesList
     */
    protected $ratesList = null;

    /**
     * @var TranslationList $translationsList
     */
    protected $translationsList = null;

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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAcct()
    {
      return $this->expenseAcct;
    }

    /**
     * @param RecordRef $expenseAcct
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setExpenseAcct($expenseAcct)
    {
      $this->expenseAcct = $expenseAcct;
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
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRateRequired()
    {
      return $this->rateRequired;
    }

    /**
     * @param boolean $rateRequired
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setRateRequired($rateRequired)
    {
      $this->rateRequired = $rateRequired;
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
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultRate()
    {
      return $this->defaultRate;
    }

    /**
     * @param float $defaultRate
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setDefaultRate($defaultRate)
    {
      $this->defaultRate = $defaultRate;
      return $this;
    }

    /**
     * @return ExpenseCategoryRatesList
     */
    public function getRatesList()
    {
      return $this->ratesList;
    }

    /**
     * @param ExpenseCategoryRatesList $ratesList
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setRatesList($ratesList)
    {
      $this->ratesList = $ratesList;
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
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
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
     * @return \Nzolt\NetSuite\ExpenseCategory
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
     * @return \Nzolt\NetSuite\ExpenseCategory
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
     * @return \Nzolt\NetSuite\ExpenseCategory
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
