<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Lists\Support\Types\IssueRelationship;

/**
 * IssueRelatedIssues
 */
class IssueRelatedIssues {

    /**
     * @access public
     * @var IssueRelationship
     */
    protected $relationship;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueNumber;

    /**
     * @access public
     * @var string
     */
    protected $relationshipComment;

    static $paramtypesmap = array(
    	"relationship" => "IssueRelationship",
    	"issueNumber" => "RecordRef",
    	"relationshipComment" => "string",
    );

    /**
     * Set relationship
     *
     * @param IssueRelationship $relationship
     * @return IssueRelatedIssues
     */
    public function setRelationship(IssueRelationship $relationship) {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Get relationship
     *
     * @return IssueRelationship
     */
    public function getRelationship() {
        return $this->relationship;
    }


    /**
     * Set relationshipComment
     *
     * @param string $relationshipComment
     * @return IssueRelatedIssues
     */
    public function setRelationshipComment($relationshipComment) {
        $this->relationshipComment = $relationshipComment;
        return $this;
    }

    /**
     * Get relationshipComment
     *
     * @return string
     */
    public function getRelationshipComment() {
        return $this->relationshipComment;
    }

}