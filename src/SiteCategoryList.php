<?php

namespace Nzolt\NetSuite;

class SiteCategoryList
{

    /**
     * @var SiteCategory[] $siteCategory
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
     * @return SiteCategory[]
     */
    public function getSiteCategory()
    {
      return $this->siteCategory;
    }

    /**
     * @param SiteCategory[] $siteCategory
     * @return \Nzolt\NetSuite\SiteCategoryList
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
     * @return \Nzolt\NetSuite\SiteCategoryList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
