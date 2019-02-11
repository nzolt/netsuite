<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * OpportunityCompetitors
 */
class OpportunityCompetitors {

    /**
     * @access public
     * @var RecordRef
     */
    public $competitor;

    /**
     * @access public
     * @var string
     */
    protected $url;

    /**
     * @access public
     * @var string
     */
    protected $notes;

    /**
     * @access public
     * @var string
     */
    protected $strategy;

    /**
     * @access public
     * @var boolean
     */
    protected $winner;

    static $paramtypesmap = array(
    	"competitor" => "RecordRef",
    	"url" => "string",
    	"notes" => "string",
    	"strategy" => "string",
    	"winner" => "boolean",
    );

    /**
     * Set url
     *
     * @param string $url
     * @return OpportunityCompetitors
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set notes
     *
     * @param string $notes
     * @return OpportunityCompetitors
     */
    public function setNotes($notes) {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes() {
        return $this->notes;
    }


    /**
     * Set strategy
     *
     * @param string $strategy
     * @return OpportunityCompetitors
     */
    public function setStrategy($strategy) {
        $this->strategy = $strategy;
        return $this;
    }

    /**
     * Get strategy
     *
     * @return string
     */
    public function getStrategy() {
        return $this->strategy;
    }


    /**
     * Set winner
     *
     * @param boolean $winner
     * @return OpportunityCompetitors
     */
    public function setWinner($winner) {
        $this->winner = $winner;
        return $this;
    }

    /**
     * Get winner
     *
     * @return boolean
     */
    public function getWinner() {
        return $this->winner;
    }

}