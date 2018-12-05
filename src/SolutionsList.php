<?php

namespace Nzolt\NetSuite;

class SolutionsList
{

    /**
     * @var Solutions[] $solutions
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
     * @return Solutions[]
     */
    public function getSolutions()
    {
      return $this->solutions;
    }

    /**
     * @param Solutions[] $solutions
     * @return \Nzolt\NetSuite\SolutionsList
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
     * @return \Nzolt\NetSuite\SolutionsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
