<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * CampaignSubscription
 */
class CampaignSubscription extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var boolean
     */
    protected $subscribedByDefault;

    /**
     * @access public
     * @var boolean
     */
    protected $unsubscribed;

    /**
     * @access public
     * @var string
     */
    protected $externalName;

    /**
     * @access public
     * @var string
     */
    protected $externalDescription;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

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
    	"name" => "string",
    	"description" => "string",
    	"subscribedByDefault" => "boolean",
    	"unsubscribed" => "boolean",
    	"externalName" => "string",
    	"externalDescription" => "string",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return CampaignSubscription
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return CampaignSubscription
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
     * Set subscribedByDefault
     *
     * @param boolean $subscribedByDefault
     * @return CampaignSubscription
     */
    public function setSubscribedByDefault($subscribedByDefault) {
        $this->subscribedByDefault = $subscribedByDefault;
        return $this;
    }

    /**
     * Get subscribedByDefault
     *
     * @return boolean
     */
    public function getSubscribedByDefault() {
        return $this->subscribedByDefault;
    }


    /**
     * Set unsubscribed
     *
     * @param boolean $unsubscribed
     * @return CampaignSubscription
     */
    public function setUnsubscribed($unsubscribed) {
        $this->unsubscribed = $unsubscribed;
        return $this;
    }

    /**
     * Get unsubscribed
     *
     * @return boolean
     */
    public function getUnsubscribed() {
        return $this->unsubscribed;
    }


    /**
     * Set externalName
     *
     * @param string $externalName
     * @return CampaignSubscription
     */
    public function setExternalName($externalName) {
        $this->externalName = $externalName;
        return $this;
    }

    /**
     * Get externalName
     *
     * @return string
     */
    public function getExternalName() {
        return $this->externalName;
    }


    /**
     * Set externalDescription
     *
     * @param string $externalDescription
     * @return CampaignSubscription
     */
    public function setExternalDescription($externalDescription) {
        $this->externalDescription = $externalDescription;
        return $this;
    }

    /**
     * Get externalDescription
     *
     * @return string
     */
    public function getExternalDescription() {
        return $this->externalDescription;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return CampaignSubscription
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CampaignSubscription
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
     * @return CampaignSubscription
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