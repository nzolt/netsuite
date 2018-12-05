<?php

namespace Nzolt\NetSuite;

class IssueVersionList
{

    /**
     * @var IssueVersion[] $issueVersion
     */
    protected $issueVersion = null;

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
     * @return IssueVersion[]
     */
    public function getIssueVersion()
    {
      return $this->issueVersion;
    }

    /**
     * @param IssueVersion[] $issueVersion
     * @return \Nzolt\NetSuite\IssueVersionList
     */
    public function setIssueVersion(array $issueVersion = null)
    {
      $this->issueVersion = $issueVersion;
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
     * @return \Nzolt\NetSuite\IssueVersionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
