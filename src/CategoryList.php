<?php

namespace Nzolt\NetSuite;

class CategoryList
{

    /**
     * @var RecordRef[] $category
     */
    protected $category = null;

    /**
     * @param RecordRef[] $category
     */
    public function __construct(array $category)
    {
      $this->category = $category;
    }

    /**
     * @return RecordRef[]
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef[] $category
     * @return \Nzolt\NetSuite\CategoryList
     */
    public function setCategory(array $category)
    {
      $this->category = $category;
      return $this;
    }

}
