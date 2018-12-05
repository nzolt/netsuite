<?php

namespace Nzolt\NetSuite;

class IssueRelatedIssues
{

    /**
     * @var IssueRelationship $relationship
     */
    protected $relationship = null;

    /**
     * @var RecordRef $issueNumber
     */
    protected $issueNumber = null;

    /**
     * @var string $relationshipComment
     */
    protected $relationshipComment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IssueRelationship
     */
    public function getRelationship()
    {
      return $this->relationship;
    }

    /**
     * @param IssueRelationship $relationship
     * @return \Nzolt\NetSuite\IssueRelatedIssues
     */
    public function setRelationship($relationship)
    {
      $this->relationship = $relationship;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueNumber()
    {
      return $this->issueNumber;
    }

    /**
     * @param RecordRef $issueNumber
     * @return \Nzolt\NetSuite\IssueRelatedIssues
     */
    public function setIssueNumber($issueNumber)
    {
      $this->issueNumber = $issueNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipComment()
    {
      return $this->relationshipComment;
    }

    /**
     * @param string $relationshipComment
     * @return \Nzolt\NetSuite\IssueRelatedIssues
     */
    public function setRelationshipComment($relationshipComment)
    {
      $this->relationshipComment = $relationshipComment;
      return $this;
    }

}
