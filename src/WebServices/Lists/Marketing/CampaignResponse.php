<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignResponseResponse;

/**
 * CampaignResponse
 */
class CampaignResponse extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $leadSource;

    /**
     * @access public
     * @var RecordRef
     */
    public $campaignEvent;

    /**
     * @access public
     * @var dateTime
     */
    protected $campaignResponseDate;

    /**
     * @access public
     * @var string
     */
    protected $channel;

    /**
     * @access public
     * @var CampaignResponseResponse
     */
    protected $response;

    /**
     * @access public
     * @var string
     */
    protected $note;

    /**
     * @access public
     * @var CampaignResponseResponsesList
     */
    protected $responsesList;

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
    	"entity" => "RecordRef",
    	"leadSource" => "RecordRef",
    	"campaignEvent" => "RecordRef",
    	"campaignResponseDate" => "dateTime",
    	"channel" => "string",
    	"response" => "CampaignResponseResponse",
    	"note" => "string",
    	"responsesList" => "CampaignResponseResponsesList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set campaignResponseDate
     *
     * @param \DateTime $campaignResponseDate
     * @return CampaignResponse
     */
    public function setCampaignResponseDate(\DateTime $campaignResponseDate) {
        $this->campaignResponseDate = $campaignResponseDate->format('c');
        return $this;
    }

    /**
     * Get campaignResponseDate
     *
     * @return \DateTime
     */
    public function getCampaignResponseDate() {
        return new \DateTime($this->campaignResponseDate);
    }


    /**
     * Set channel
     *
     * @param string $channel
     * @return CampaignResponse
     */
    public function setChannel($channel) {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel() {
        return $this->channel;
    }


    /**
     * Set response
     *
     * @param CampaignResponseResponse $response
     * @return CampaignResponse
     */
    public function setResponse(CampaignResponseResponse $response) {
        $this->response = $response;
        return $this;
    }

    /**
     * Get response
     *
     * @return CampaignResponseResponse
     */
    public function getResponse() {
        return $this->response;
    }


    /**
     * Set note
     *
     * @param string $note
     * @return CampaignResponse
     */
    public function setNote($note) {
        $this->note = $note;
        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote() {
        return $this->note;
    }


    /**
     * Set responsesList
     *
     * @param CampaignResponseResponsesList $responsesList
     * @return CampaignResponse
     */
    public function setResponsesList(CampaignResponseResponsesList $responsesList) {
        $this->responsesList = $responsesList;
        return $this;
    }

    /**
     * Get responsesList
     *
     * @return CampaignResponseResponsesList
     */
    public function getResponsesList() {
        return $this->responsesList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CampaignResponse
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
     * @return CampaignResponse
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