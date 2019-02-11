<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

/**
 * CampaignResponseResponses
 */
class CampaignResponseResponses {

    /**
     * @access public
     * @var string
     */
    protected $response;

    /**
     * @access public
     * @var string
     */
    protected $responseDate;

    /**
     * @access public
     * @var string
     */
    protected $author;

    /**
     * @access public
     * @var string
     */
    protected $note;

    static $paramtypesmap = array(
    	"response" => "string",
    	"responseDate" => "string",
    	"author" => "string",
    	"note" => "string",
    );

    /**
     * Set response
     *
     * @param string $response
     * @return CampaignResponseResponses
     */
    public function setResponse($response) {
        $this->response = $response;
        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse() {
        return $this->response;
    }


    /**
     * Set responseDate
     *
     * @param string $responseDate
     * @return CampaignResponseResponses
     */
    public function setResponseDate($responseDate) {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * Get responseDate
     *
     * @return string
     */
    public function getResponseDate() {
        return $this->responseDate;
    }


    /**
     * Set author
     *
     * @param string $author
     * @return CampaignResponseResponses
     */
    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }


    /**
     * Set note
     *
     * @param string $note
     * @return CampaignResponseResponses
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

}