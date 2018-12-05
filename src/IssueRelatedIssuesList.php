<?php

namespace Nzolt\NetSuite;

class IssueRelatedIssuesList
{

    /**
     * @var IssueRelatedIssues[] $issueRelatedIssues
     */
    protected $issueRelatedIssues = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return IssueRelatedIssues[]
     */
    public function getIssueRelatedIssues()
    {
      return $this->issueRelatedIssues;
    }

    /**
     * @param IssueRelatedIssues[] $issueRelatedIssues
     * @return \Nzolt\NetSuite\IssueRelatedIssuesList
     */
    public function setIssueRelatedIssues(array $issueRelatedIssues = null)
    {
      $this->issueRelatedIssues = $issueRelatedIssues;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\IssueRelatedIssuesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
