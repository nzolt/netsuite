<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;

/**
 * AppPackageSearchBasic
 */
class AppPackageSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $appDefinition;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

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
     * @var SearchStringField
     */
    protected $version;

    static $paramtypesmap = array(
    	"appDefinition" => "SearchMultiSelectField",
    	"description" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"version" => "SearchStringField",
    );

    /**
     * Set appDefinition
     *
     * @param SearchMultiSelectField $appDefinition
     * @return AppPackageSearchBasic
     */
    public function setAppDefinition(SearchMultiSelectField $appDefinition) {
        $this->appDefinition = $appDefinition;
        return $this;
    }

    /**
     * Get appDefinition
     *
     * @return SearchMultiSelectField
     */
    public function getAppDefinition() {
        return $this->appDefinition;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return AppPackageSearchBasic
     */
    public function setDescription(SearchStringField $description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return SearchStringField
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return AppPackageSearchBasic
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
     * @return AppPackageSearchBasic
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
     * @return AppPackageSearchBasic
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
     * @return AppPackageSearchBasic
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
     * Set version
     *
     * @param SearchStringField $version
     * @return AppPackageSearchBasic
     */
    public function setVersion(SearchStringField $version) {
        $this->version = $version;
        return $this;
    }

    /**
     * Get version
     *
     * @return SearchStringField
     */
    public function getVersion() {
        return $this->version;
    }

}