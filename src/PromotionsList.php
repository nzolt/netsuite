<?php

namespace Nzolt\NetSuite;

class PromotionsList
{

    /**
     * @var Promotions[] $promotions
     */
    protected $promotions = null;

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
     * @return Promotions[]
     */
    public function getPromotions()
    {
      return $this->promotions;
    }

    /**
     * @param Promotions[] $promotions
     * @return \Nzolt\NetSuite\PromotionsList
     */
    public function setPromotions(array $promotions = null)
    {
      $this->promotions = $promotions;
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
     * @return \Nzolt\NetSuite\PromotionsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
