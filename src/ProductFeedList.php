<?php

namespace Nzolt\NetSuite;

class ProductFeedList
{

    /**
     * @var ItemProductFeed[] $productFeed
     */
    protected $productFeed = null;

    /**
     * @param ItemProductFeed[] $productFeed
     */
    public function __construct(array $productFeed)
    {
      $this->productFeed = $productFeed;
    }

    /**
     * @return ItemProductFeed[]
     */
    public function getProductFeed()
    {
      return $this->productFeed;
    }

    /**
     * @param ItemProductFeed[] $productFeed
     * @return \Nzolt\NetSuite\ProductFeedList
     */
    public function setProductFeed(array $productFeed)
    {
      $this->productFeed = $productFeed;
      return $this;
    }

}
