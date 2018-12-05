<?php

namespace Nzolt\NetSuite;

class SupportCaseSolutionsList
{

    /**
     * @var SupportCaseSolutions[] $solutions
     */
    protected $solutions = null;

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
     * @return SupportCaseSolutions[]
     */
    public function getSolutions()
    {
      return $this->solutions;
    }

    /**
     * @param SupportCaseSolutions[] $solutions
     * @return \Nzolt\NetSuite\SupportCaseSolutionsList
     */
    public function setSolutions(array $solutions = null)
    {
      $this->solutions = $solutions;
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
     * @return \Nzolt\NetSuite\SupportCaseSolutionsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
