<?php

namespace Nzolt\NetSuite;

class ProjectTaskAssignee
{

    /**
     * @var RecordRef $resource
     */
    protected $resource = null;

    /**
     * @var float $units
     */
    protected $units = null;

    /**
     * @var RecordRef $serviceItem
     */
    protected $serviceItem = null;

    /**
     * @var float $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var float $unitCost
     */
    protected $unitCost = null;

    /**
     * @var float $unitPrice
     */
    protected $unitPrice = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var float $price
     */
    protected $price = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param RecordRef $resource
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setResource($resource)
    {
      $this->resource = $resource;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param float $units
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getServiceItem()
    {
      return $this->serviceItem;
    }

    /**
     * @param RecordRef $serviceItem
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setServiceItem($serviceItem)
    {
      $this->serviceItem = $serviceItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWork()
    {
      return $this->estimatedWork;
    }

    /**
     * @param float $estimatedWork
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setEstimatedWork($estimatedWork)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitCost()
    {
      return $this->unitCost;
    }

    /**
     * @param float $unitCost
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setUnitCost($unitCost)
    {
      $this->unitCost = $unitCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
      return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setUnitPrice($unitPrice)
    {
      $this->unitPrice = $unitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \Nzolt\NetSuite\ProjectTaskAssignee
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

}
