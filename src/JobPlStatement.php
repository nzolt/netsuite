<?php

namespace Nzolt\NetSuite;

class JobPlStatement
{

    /**
     * @var string $costCategory
     */
    protected $costCategory = null;

    /**
     * @var float $revenue
     */
    protected $revenue = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var float $profit
     */
    protected $profit = null;

    /**
     * @var float $margin
     */
    protected $margin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCostCategory()
    {
      return $this->costCategory;
    }

    /**
     * @param string $costCategory
     * @return \Nzolt\NetSuite\JobPlStatement
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

    /**
     * @return float
     */
    public function getRevenue()
    {
      return $this->revenue;
    }

    /**
     * @param float $revenue
     * @return \Nzolt\NetSuite\JobPlStatement
     */
    public function setRevenue($revenue)
    {
      $this->revenue = $revenue;
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
     * @return \Nzolt\NetSuite\JobPlStatement
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return float
     */
    public function getProfit()
    {
      return $this->profit;
    }

    /**
     * @param float $profit
     * @return \Nzolt\NetSuite\JobPlStatement
     */
    public function setProfit($profit)
    {
      $this->profit = $profit;
      return $this;
    }

    /**
     * @return float
     */
    public function getMargin()
    {
      return $this->margin;
    }

    /**
     * @param float $margin
     * @return \Nzolt\NetSuite\JobPlStatement
     */
    public function setMargin($margin)
    {
      $this->margin = $margin;
      return $this;
    }

}
