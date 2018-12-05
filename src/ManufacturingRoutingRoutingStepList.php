<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingRoutingStepList
{

    /**
     * @var ManufacturingRoutingRoutingStep[] $manufacturingRoutingRoutingStep
     */
    protected $manufacturingRoutingRoutingStep = null;

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
     * @return ManufacturingRoutingRoutingStep[]
     */
    public function getManufacturingRoutingRoutingStep()
    {
      return $this->manufacturingRoutingRoutingStep;
    }

    /**
     * @param ManufacturingRoutingRoutingStep[] $manufacturingRoutingRoutingStep
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStepList
     */
    public function setManufacturingRoutingRoutingStep(array $manufacturingRoutingRoutingStep = null)
    {
      $this->manufacturingRoutingRoutingStep = $manufacturingRoutingRoutingStep;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStepList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
