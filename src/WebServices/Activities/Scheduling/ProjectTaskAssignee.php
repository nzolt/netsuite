<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

/**
 * ProjectTaskAssignee
 */
class ProjectTaskAssignee {

    /**
     * @access public
     * @var RecordRef
     */
    public $resource;

    /**
     * @access public
     * @var float
     */
    protected $units;

    /**
     * @access public
     * @var RecordRef
     */
    public $serviceItem;

    /**
     * @access public
     * @var float
     */
    protected $estimatedWork;

    /**
     * @access public
     * @var float
     */
    protected $unitCost;

    /**
     * @access public
     * @var float
     */
    protected $unitPrice;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var float
     */
    protected $price;

    static $paramtypesmap = array(
    	"resource" => "RecordRef",
    	"units" => "float",
    	"serviceItem" => "RecordRef",
    	"estimatedWork" => "float",
    	"unitCost" => "float",
    	"unitPrice" => "float",
    	"cost" => "float",
    	"price" => "float",
    );

    /**
     * Set units
     *
     * @param float $units
     * @return ProjectTaskAssignee
     */
    public function setUnits($units) {
        $this->units = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return float
     */
    public function getUnits() {
        return $this->units;
    }


    /**
     * Set estimatedWork
     *
     * @param float $estimatedWork
     * @return ProjectTaskAssignee
     */
    public function setEstimatedWork($estimatedWork) {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * Get estimatedWork
     *
     * @return float
     */
    public function getEstimatedWork() {
        return $this->estimatedWork;
    }


    /**
     * Set unitCost
     *
     * @param float $unitCost
     * @return ProjectTaskAssignee
     */
    public function setUnitCost($unitCost) {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * Get unitCost
     *
     * @return float
     */
    public function getUnitCost() {
        return $this->unitCost;
    }


    /**
     * Set unitPrice
     *
     * @param float $unitPrice
     * @return ProjectTaskAssignee
     */
    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return float
     */
    public function getUnitPrice() {
        return $this->unitPrice;
    }


    /**
     * Set cost
     *
     * @param float $cost
     * @return ProjectTaskAssignee
     */
    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set price
     *
     * @param float $price
     * @return ProjectTaskAssignee
     */
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

}