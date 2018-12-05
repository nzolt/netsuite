<?php

namespace Nzolt\NetSuite;

class ManufacturingCostDetailList
{

    /**
     * @var ManufacturingCostDetail[] $manufacturingCostDetail
     */
    protected $manufacturingCostDetail = null;

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
     * @return ManufacturingCostDetail[]
     */
    public function getManufacturingCostDetail()
    {
      return $this->manufacturingCostDetail;
    }

    /**
     * @param ManufacturingCostDetail[] $manufacturingCostDetail
     * @return \Nzolt\NetSuite\ManufacturingCostDetailList
     */
    public function setManufacturingCostDetail(array $manufacturingCostDetail = null)
    {
      $this->manufacturingCostDetail = $manufacturingCostDetail;
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
     * @return \Nzolt\NetSuite\ManufacturingCostDetailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
