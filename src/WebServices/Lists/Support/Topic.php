<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * Topic
 */
class Topic extends Record {

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var RecordRef
     */
    public $parentTopic;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $longDescription;

    /**
     * @access public
     * @var TopicSolutionList
     */
    protected $solutionList;

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
    	"title" => "string",
    	"parentTopic" => "RecordRef",
    	"description" => "string",
    	"isInactive" => "boolean",
    	"longDescription" => "string",
    	"solutionList" => "TopicSolutionList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set title
     *
     * @param string $title
     * @return Topic
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Topic
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Topic
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
     * Set longDescription
     *
     * @param string $longDescription
     * @return Topic
     */
    public function setLongDescription($longDescription) {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * Get longDescription
     *
     * @return string
     */
    public function getLongDescription() {
        return $this->longDescription;
    }


    /**
     * Set solutionList
     *
     * @param TopicSolutionList $solutionList
     * @return Topic
     */
    public function setSolutionList(TopicSolutionList $solutionList) {
        $this->solutionList = $solutionList;
        return $this;
    }

    /**
     * Get solutionList
     *
     * @return TopicSolutionList
     */
    public function getSolutionList() {
        return $this->solutionList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Topic
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
     * @return Topic
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