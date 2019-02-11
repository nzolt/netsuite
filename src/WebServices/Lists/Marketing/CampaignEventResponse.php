<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

/**
 * CampaignEventResponse
 */
class CampaignEventResponse {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var string
     */
    protected $type;

    /**
     * @access public
     * @var dateTime
     */
    protected $dateSent;

    /**
     * @access public
     * @var float
     */
    protected $sent;

    /**
     * @access public
     * @var float
     */
    protected $opened;

    /**
     * @access public
     * @var float
     */
    protected $openedRatio;

    /**
     * @access public
     * @var float
     */
    protected $clickedThru;

    /**
     * @access public
     * @var float
     */
    protected $clickedThruRatio;

    /**
     * @access public
     * @var integer
     */
    protected $responded;

    /**
     * @access public
     * @var float
     */
    protected $respondedRatio;

    /**
     * @access public
     * @var integer
     */
    protected $unsubscribed;

    /**
     * @access public
     * @var float
     */
    protected $unsubscribedRatio;

    /**
     * @access public
     * @var integer
     */
    protected $bounced;

    /**
     * @access public
     * @var float
     */
    protected $bouncedRatio;

    static $paramtypesmap = array(
    	"name" => "string",
    	"type" => "string",
    	"dateSent" => "dateTime",
    	"sent" => "float",
    	"opened" => "float",
    	"openedRatio" => "float",
    	"clickedThru" => "float",
    	"clickedThruRatio" => "float",
    	"responded" => "integer",
    	"respondedRatio" => "float",
    	"unsubscribed" => "integer",
    	"unsubscribedRatio" => "float",
    	"bounced" => "integer",
    	"bouncedRatio" => "float",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return CampaignEventResponse
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
     * Set type
     *
     * @param string $type
     * @return CampaignEventResponse
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set dateSent
     *
     * @param \DateTime $dateSent
     * @return CampaignEventResponse
     */
    public function setDateSent(\DateTime $dateSent) {
        $this->dateSent = $dateSent->format('c');
        return $this;
    }

    /**
     * Get dateSent
     *
     * @return \DateTime
     */
    public function getDateSent() {
        return new \DateTime($this->dateSent);
    }


    /**
     * Set sent
     *
     * @param float $sent
     * @return CampaignEventResponse
     */
    public function setSent($sent) {
        $this->sent = $sent;
        return $this;
    }

    /**
     * Get sent
     *
     * @return float
     */
    public function getSent() {
        return $this->sent;
    }


    /**
     * Set opened
     *
     * @param float $opened
     * @return CampaignEventResponse
     */
    public function setOpened($opened) {
        $this->opened = $opened;
        return $this;
    }

    /**
     * Get opened
     *
     * @return float
     */
    public function getOpened() {
        return $this->opened;
    }


    /**
     * Set openedRatio
     *
     * @param float $openedRatio
     * @return CampaignEventResponse
     */
    public function setOpenedRatio($openedRatio) {
        $this->openedRatio = $openedRatio;
        return $this;
    }

    /**
     * Get openedRatio
     *
     * @return float
     */
    public function getOpenedRatio() {
        return $this->openedRatio;
    }


    /**
     * Set clickedThru
     *
     * @param float $clickedThru
     * @return CampaignEventResponse
     */
    public function setClickedThru($clickedThru) {
        $this->clickedThru = $clickedThru;
        return $this;
    }

    /**
     * Get clickedThru
     *
     * @return float
     */
    public function getClickedThru() {
        return $this->clickedThru;
    }


    /**
     * Set clickedThruRatio
     *
     * @param float $clickedThruRatio
     * @return CampaignEventResponse
     */
    public function setClickedThruRatio($clickedThruRatio) {
        $this->clickedThruRatio = $clickedThruRatio;
        return $this;
    }

    /**
     * Get clickedThruRatio
     *
     * @return float
     */
    public function getClickedThruRatio() {
        return $this->clickedThruRatio;
    }


    /**
     * Set responded
     *
     * @param integer $responded
     * @return CampaignEventResponse
     */
    public function setResponded($responded) {
        $this->responded = $responded;
        return $this;
    }

    /**
     * Get responded
     *
     * @return integer
     */
    public function getResponded() {
        return $this->responded;
    }


    /**
     * Set respondedRatio
     *
     * @param float $respondedRatio
     * @return CampaignEventResponse
     */
    public function setRespondedRatio($respondedRatio) {
        $this->respondedRatio = $respondedRatio;
        return $this;
    }

    /**
     * Get respondedRatio
     *
     * @return float
     */
    public function getRespondedRatio() {
        return $this->respondedRatio;
    }


    /**
     * Set unsubscribed
     *
     * @param integer $unsubscribed
     * @return CampaignEventResponse
     */
    public function setUnsubscribed($unsubscribed) {
        $this->unsubscribed = $unsubscribed;
        return $this;
    }

    /**
     * Get unsubscribed
     *
     * @return integer
     */
    public function getUnsubscribed() {
        return $this->unsubscribed;
    }


    /**
     * Set unsubscribedRatio
     *
     * @param float $unsubscribedRatio
     * @return CampaignEventResponse
     */
    public function setUnsubscribedRatio($unsubscribedRatio) {
        $this->unsubscribedRatio = $unsubscribedRatio;
        return $this;
    }

    /**
     * Get unsubscribedRatio
     *
     * @return float
     */
    public function getUnsubscribedRatio() {
        return $this->unsubscribedRatio;
    }


    /**
     * Set bounced
     *
     * @param integer $bounced
     * @return CampaignEventResponse
     */
    public function setBounced($bounced) {
        $this->bounced = $bounced;
        return $this;
    }

    /**
     * Get bounced
     *
     * @return integer
     */
    public function getBounced() {
        return $this->bounced;
    }


    /**
     * Set bouncedRatio
     *
     * @param float $bouncedRatio
     * @return CampaignEventResponse
     */
    public function setBouncedRatio($bouncedRatio) {
        $this->bouncedRatio = $bouncedRatio;
        return $this;
    }

    /**
     * Get bouncedRatio
     *
     * @return float
     */
    public function getBouncedRatio() {
        return $this->bouncedRatio;
    }

}