<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingRoutingComponentList
{

    /**
     * @var ManufacturingRoutingRoutingComponent[] $manufacturingRoutingRoutingComponent
     */
    protected $manufacturingRoutingRoutingComponent = null;

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
     * @return ManufacturingRoutingRoutingComponent[]
     */
    public function getManufacturingRoutingRoutingComponent()
    {
      return $this->manufacturingRoutingRoutingComponent;
    }

    /**
     * @param ManufacturingRoutingRoutingComponent[] $manufacturingRoutingRoutingComponent
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponentList
     */
    public function setManufacturingRoutingRoutingComponent(array $manufacturingRoutingRoutingComponent = null)
    {
      $this->manufacturingRoutingRoutingComponent = $manufacturingRoutingRoutingComponent;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponentList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
