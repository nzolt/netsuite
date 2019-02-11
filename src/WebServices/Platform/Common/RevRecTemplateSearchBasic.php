<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;

/**
 * RevRecTemplateSearchBasic
 */
class RevRecTemplateSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $amorMethod;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $amorPeriod;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $amorStartOffset;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $amorTermSrc;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $amorType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $contraAccount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $deferralAccount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $periodOffset;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $targetAccount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $useForeignAmounts;

    static $paramtypesmap = array(
    	"amorMethod" => "SearchEnumMultiSelectField",
    	"amorPeriod" => "SearchLongField",
    	"amorStartOffset" => "SearchLongField",
    	"amorTermSrc" => "SearchEnumMultiSelectField",
    	"amorType" => "SearchEnumMultiSelectField",
    	"contraAccount" => "SearchMultiSelectField",
    	"deferralAccount" => "SearchMultiSelectField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"periodOffset" => "SearchLongField",
    	"targetAccount" => "SearchMultiSelectField",
    	"useForeignAmounts" => "SearchBooleanField",
    );

    /**
     * Set amorMethod
     *
     * @param SearchEnumMultiSelectField $amorMethod
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorMethod(SearchEnumMultiSelectField $amorMethod) {
        $this->amorMethod = $amorMethod;
        return $this;
    }

    /**
     * Get amorMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAmorMethod() {
        return $this->amorMethod;
    }


    /**
     * Set amorPeriod
     *
     * @param SearchLongField $amorPeriod
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorPeriod(SearchLongField $amorPeriod) {
        $this->amorPeriod = $amorPeriod;
        return $this;
    }

    /**
     * Get amorPeriod
     *
     * @return SearchLongField
     */
    public function getAmorPeriod() {
        return $this->amorPeriod;
    }


    /**
     * Set amorStartOffset
     *
     * @param SearchLongField $amorStartOffset
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorStartOffset(SearchLongField $amorStartOffset) {
        $this->amorStartOffset = $amorStartOffset;
        return $this;
    }

    /**
     * Get amorStartOffset
     *
     * @return SearchLongField
     */
    public function getAmorStartOffset() {
        return $this->amorStartOffset;
    }


    /**
     * Set amorTermSrc
     *
     * @param SearchEnumMultiSelectField $amorTermSrc
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorTermSrc(SearchEnumMultiSelectField $amorTermSrc) {
        $this->amorTermSrc = $amorTermSrc;
        return $this;
    }

    /**
     * Get amorTermSrc
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAmorTermSrc() {
        return $this->amorTermSrc;
    }


    /**
     * Set amorType
     *
     * @param SearchEnumMultiSelectField $amorType
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorType(SearchEnumMultiSelectField $amorType) {
        $this->amorType = $amorType;
        return $this;
    }

    /**
     * Get amorType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAmorType() {
        return $this->amorType;
    }


    /**
     * Set contraAccount
     *
     * @param SearchMultiSelectField $contraAccount
     * @return RevRecTemplateSearchBasic
     */
    public function setContraAccount(SearchMultiSelectField $contraAccount) {
        $this->contraAccount = $contraAccount;
        return $this;
    }

    /**
     * Get contraAccount
     *
     * @return SearchMultiSelectField
     */
    public function getContraAccount() {
        return $this->contraAccount;
    }


    /**
     * Set deferralAccount
     *
     * @param SearchMultiSelectField $deferralAccount
     * @return RevRecTemplateSearchBasic
     */
    public function setDeferralAccount(SearchMultiSelectField $deferralAccount) {
        $this->deferralAccount = $deferralAccount;
        return $this;
    }

    /**
     * Get deferralAccount
     *
     * @return SearchMultiSelectField
     */
    public function getDeferralAccount() {
        return $this->deferralAccount;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return RevRecTemplateSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return RevRecTemplateSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return RevRecTemplateSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return RevRecTemplateSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return RevRecTemplateSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return RevRecTemplateSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set periodOffset
     *
     * @param SearchLongField $periodOffset
     * @return RevRecTemplateSearchBasic
     */
    public function setPeriodOffset(SearchLongField $periodOffset) {
        $this->periodOffset = $periodOffset;
        return $this;
    }

    /**
     * Get periodOffset
     *
     * @return SearchLongField
     */
    public function getPeriodOffset() {
        return $this->periodOffset;
    }


    /**
     * Set targetAccount
     *
     * @param SearchMultiSelectField $targetAccount
     * @return RevRecTemplateSearchBasic
     */
    public function setTargetAccount(SearchMultiSelectField $targetAccount) {
        $this->targetAccount = $targetAccount;
        return $this;
    }

    /**
     * Get targetAccount
     *
     * @return SearchMultiSelectField
     */
    public function getTargetAccount() {
        return $this->targetAccount;
    }


    /**
     * Set useForeignAmounts
     *
     * @param SearchBooleanField $useForeignAmounts
     * @return RevRecTemplateSearchBasic
     */
    public function setUseForeignAmounts(SearchBooleanField $useForeignAmounts) {
        $this->useForeignAmounts = $useForeignAmounts;
        return $this;
    }

    /**
     * Get useForeignAmounts
     *
     * @return SearchBooleanField
     */
    public function getUseForeignAmounts() {
        return $this->useForeignAmounts;
    }

}