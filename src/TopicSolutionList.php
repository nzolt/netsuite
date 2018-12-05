<?php

namespace Nzolt\NetSuite;

class TopicSolutionList
{

    /**
     * @var TopicSolution[] $solution
     */
    protected $solution = null;

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
     * @return TopicSolution[]
     */
    public function getSolution()
    {
      return $this->solution;
    }

    /**
     * @param TopicSolution[] $solution
     * @return \Nzolt\NetSuite\TopicSolutionList
     */
    public function setSolution(array $solution = null)
    {
      $this->solution = $solution;
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
     * @return \Nzolt\NetSuite\TopicSolutionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
