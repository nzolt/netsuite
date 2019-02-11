<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * JobPlStatement
 */
class JobPlStatement {

    /**
     * @access public
     * @var string
     */
    protected $costCategory;

    /**
     * @access public
     * @var float
     */
    protected $revenue;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var float
     */
    protected $profit;

    /**
     * @access public
     * @var float
     */
    protected $margin;

    static $paramtypesmap = array(
    	"costCategory" => "string",
    	"revenue" => "float",
    	"cost" => "float",
    	"profit" => "float",
    	"margin" => "float",
    );

    /**
     * Set costCategory
     *
     * @param string $costCategory
     * @return JobPlStatement
     */
    public function setCostCategory($costCategory) {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * Get costCategory
     *
     * @return string
     */
    public function getCostCategory() {
        return $this->costCategory;
    }


    /**
     * Set revenue
     *
     * @param float $revenue
     * @return JobPlStatement
     */
    public function setRevenue($revenue) {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * Get revenue
     *
     * @return float
     */
    public function getRevenue() {
        return $this->revenue;
    }


    /**
     * Set cost
     *
     * @param float $cost
     * @return JobPlStatement
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
     * Set profit
     *
     * @param float $profit
     * @return JobPlStatement
     */
    public function setProfit($profit) {
        $this->profit = $profit;
        return $this;
    }

    /**
     * Get profit
     *
     * @return float
     */
    public function getProfit() {
        return $this->profit;
    }


    /**
     * Set margin
     *
     * @param float $margin
     * @return JobPlStatement
     */
    public function setMargin($margin) {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Get margin
     *
     * @return float
     */
    public function getMargin() {
        return $this->margin;
    }

}