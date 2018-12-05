<?php

namespace Nzolt\NetSuite;

class JobPlStatementList
{

    /**
     * @var JobPlStatement[] $jobPlStatement
     */
    protected $jobPlStatement = null;

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
     * @return JobPlStatement[]
     */
    public function getJobPlStatement()
    {
      return $this->jobPlStatement;
    }

    /**
     * @param JobPlStatement[] $jobPlStatement
     * @return \Nzolt\NetSuite\JobPlStatementList
     */
    public function setJobPlStatement(array $jobPlStatement = null)
    {
      $this->jobPlStatement = $jobPlStatement;
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
     * @return \Nzolt\NetSuite\JobPlStatementList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
