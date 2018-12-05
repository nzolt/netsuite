<?php

namespace Nzolt\NetSuite;

class FileSiteCategoryList
{

    /**
     * @var FileSiteCategory[] $siteCategory
     */
    protected $siteCategory = null;

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
     * @return FileSiteCategory[]
     */
    public function getSiteCategory()
    {
      return $this->siteCategory;
    }

    /**
     * @param FileSiteCategory[] $siteCategory
     * @return \Nzolt\NetSuite\FileSiteCategoryList
     */
    public function setSiteCategory(array $siteCategory = null)
    {
      $this->siteCategory = $siteCategory;
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
     * @return \Nzolt\NetSuite\FileSiteCategoryList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
