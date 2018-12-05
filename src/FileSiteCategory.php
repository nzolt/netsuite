<?php

namespace Nzolt\NetSuite;

class FileSiteCategory
{

    /**
     * @var boolean $isDefault
     */
    protected $isDefault = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var string $categoryDescription
     */
    protected $categoryDescription = null;

    /**
     * @var RecordRef $website
     */
    protected $website = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     * @return \Nzolt\NetSuite\FileSiteCategory
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef $category
     * @return \Nzolt\NetSuite\FileSiteCategory
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryDescription()
    {
      return $this->categoryDescription;
    }

    /**
     * @param string $categoryDescription
     * @return \Nzolt\NetSuite\FileSiteCategory
     */
    public function setCategoryDescription($categoryDescription)
    {
      $this->categoryDescription = $categoryDescription;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWebsite()
    {
      return $this->website;
    }

    /**
     * @param RecordRef $website
     * @return \Nzolt\NetSuite\FileSiteCategory
     */
    public function setWebsite($website)
    {
      $this->website = $website;
      return $this;
    }

}
