<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * AppPackage
 */
class AppPackage extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $appDefinition;

    /**
     * @access public
     * @var string
     */
    protected $version;

    /**
     * @access public
     * @var RecordRef
     */
    public $packageFile;

    /**
     * @access public
     * @var RecordRef
     */
    public $bundle;

    /**
     * @access public
     * @var string
     */
    protected $description;

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
    	"appDefinition" => "RecordRef",
    	"version" => "string",
    	"packageFile" => "RecordRef",
    	"bundle" => "RecordRef",
    	"description" => "string",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set version
     *
     * @param string $version
     * @return AppPackage
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion() {
        return $this->version;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return AppPackage
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return AppPackage
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
     * @return AppPackage
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