<?php

namespace Nzolt\NetSuite;

class AssemblyComponentList
{

    /**
     * @var AssemblyComponent[] $component
     */
    protected $component = null;

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
     * @return AssemblyComponent[]
     */
    public function getComponent()
    {
      return $this->component;
    }

    /**
     * @param AssemblyComponent[] $component
     * @return \Nzolt\NetSuite\AssemblyComponentList
     */
    public function setComponent(array $component = null)
    {
      $this->component = $component;
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
     * @return \Nzolt\NetSuite\AssemblyComponentList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
