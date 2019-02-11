<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignCampaignDirectMailStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CampaignDirectMail
 */
class CampaignDirectMail {

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var RecordRef
     */
    public $campaignGroup;

    /**
     * @access public
     * @var RecordRef
     */
    public $template;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $subscription;

    /**
     * @access public
     * @var RecordRef
     */
    public $channel;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var CampaignCampaignDirectMailStatus
     */
    protected $status;

    /**
     * @access public
     * @var dateTime
     */
    protected $dateScheduled;

    /**
     * @access public
     * @var RecordRef
     */
    public $promoCode;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"campaignGroup" => "RecordRef",
    	"template" => "RecordRef",
    	"description" => "string",
    	"subscription" => "RecordRef",
    	"channel" => "RecordRef",
    	"cost" => "float",
    	"status" => "CampaignCampaignDirectMailStatus",
    	"dateScheduled" => "dateTime",
    	"promoCode" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CampaignDirectMail
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
     * Set description
     *
     * @param string $description
     * @return CampaignDirectMail
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
     * Set cost
     *
     * @param float $cost
     * @return CampaignDirectMail
     */
    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set status
     *
     * @param CampaignCampaignDirectMailStatus $status
     * @return CampaignDirectMail
     */
    public function setStatus(CampaignCampaignDirectMailStatus $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return CampaignCampaignDirectMailStatus
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set dateScheduled
     *
     * @param \DateTime $dateScheduled
     * @return CampaignDirectMail
     */
    public function setDateScheduled(\DateTime $dateScheduled) {
        $this->dateScheduled = $dateScheduled->format('c');
        return $this;
    }

    /**
     * Get dateScheduled
     *
     * @return \DateTime
     */
    public function getDateScheduled() {
        return new \DateTime($this->dateScheduled);
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CampaignDirectMail
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}