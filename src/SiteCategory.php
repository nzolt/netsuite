<?php

namespace Nzolt\NetSuite;

class SiteCategory
{

    /**
     * @var RecordRef $website
     */
    protected $website = null;

    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var RecordRef $parentCategory
     */
    protected $parentCategory = null;

    /**
     * @var RecordRef $categoryListLayout
     */
    protected $categoryListLayout = null;

    /**
     * @var RecordRef $itemListLayout
     */
    protected $itemListLayout = null;

    /**
     * @var RecordRef $relatedItemsListLayout
     */
    protected $relatedItemsListLayout = null;

    /**
     * @var RecordRef $correlatedItemsListLayout
     */
    protected $correlatedItemsListLayout = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $storeDetailedDescription
     */
    protected $storeDetailedDescription = null;

    /**
     * @var RecordRef $storeDisplayThumbnail
     */
    protected $storeDisplayThumbnail = null;

    /**
     * @var RecordRef $storeDisplayImage
     */
    protected $storeDisplayImage = null;

    /**
     * @var string $pageTitle
     */
    protected $pageTitle = null;

    /**
     * @var string $metaTagHtml
     */
    protected $metaTagHtml = null;

    /**
     * @var boolean $excludeFromSitemap
     */
    protected $excludeFromSitemap = null;

    /**
     * @var string $urlComponent
     */
    protected $urlComponent = null;

    /**
     * @var SitemapPriority $sitemapPriority
     */
    protected $sitemapPriority = null;

    /**
     * @var string $searchKeywords
     */
    protected $searchKeywords = null;

    /**
     * @var SiteCategoryPresentationItemList $presentationItemList
     */
    protected $presentationItemList = null;

    /**
     * @var SiteCategoryTranslationList $translationsList
     */
    protected $translationsList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $itemId
     * @param RecordRef $parentCategory
     * @param RecordRef $categoryListLayout
     * @param RecordRef $itemListLayout
     * @param RecordRef $relatedItemsListLayout
     * @param RecordRef $correlatedItemsListLayout
     * @param boolean $isOnline
     * @param boolean $isInactive
     * @param string $description
     * @param string $storeDetailedDescription
     * @param RecordRef $storeDisplayThumbnail
     * @param RecordRef $storeDisplayImage
     * @param string $pageTitle
     * @param string $metaTagHtml
     * @param boolean $excludeFromSitemap
     * @param string $urlComponent
     * @param SitemapPriority $sitemapPriority
     * @param string $searchKeywords
     * @param SiteCategoryPresentationItemList $presentationItemList
     * @param SiteCategoryTranslationList $translationsList
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($itemId, $parentCategory, $categoryListLayout, $itemListLayout, $relatedItemsListLayout, $correlatedItemsListLayout, $isOnline, $isInactive, $description, $storeDetailedDescription, $storeDisplayThumbnail, $storeDisplayImage, $pageTitle, $metaTagHtml, $excludeFromSitemap, $urlComponent, $sitemapPriority, $searchKeywords, $presentationItemList, $translationsList, $internalId, $externalId)
    {
      $this->itemId = $itemId;
      $this->parentCategory = $parentCategory;
      $this->categoryListLayout = $categoryListLayout;
      $this->itemListLayout = $itemListLayout;
      $this->relatedItemsListLayout = $relatedItemsListLayout;
      $this->correlatedItemsListLayout = $correlatedItemsListLayout;
      $this->isOnline = $isOnline;
      $this->isInactive = $isInactive;
      $this->description = $description;
      $this->storeDetailedDescription = $storeDetailedDescription;
      $this->storeDisplayThumbnail = $storeDisplayThumbnail;
      $this->storeDisplayImage = $storeDisplayImage;
      $this->pageTitle = $pageTitle;
      $this->metaTagHtml = $metaTagHtml;
      $this->excludeFromSitemap = $excludeFromSitemap;
      $this->urlComponent = $urlComponent;
      $this->sitemapPriority = $sitemapPriority;
      $this->searchKeywords = $searchKeywords;
      $this->presentationItemList = $presentationItemList;
      $this->translationsList = $translationsList;
      $this->internalId = $internalId;
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setWebsite($website)
    {
      $this->website = $website;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentCategory()
    {
      return $this->parentCategory;
    }

    /**
     * @param RecordRef $parentCategory
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setParentCategory($parentCategory)
    {
      $this->parentCategory = $parentCategory;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategoryListLayout()
    {
      return $this->categoryListLayout;
    }

    /**
     * @param RecordRef $categoryListLayout
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setCategoryListLayout($categoryListLayout)
    {
      $this->categoryListLayout = $categoryListLayout;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemListLayout()
    {
      return $this->itemListLayout;
    }

    /**
     * @param RecordRef $itemListLayout
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setItemListLayout($itemListLayout)
    {
      $this->itemListLayout = $itemListLayout;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRelatedItemsListLayout()
    {
      return $this->relatedItemsListLayout;
    }

    /**
     * @param RecordRef $relatedItemsListLayout
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setRelatedItemsListLayout($relatedItemsListLayout)
    {
      $this->relatedItemsListLayout = $relatedItemsListLayout;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCorrelatedItemsListLayout()
    {
      return $this->correlatedItemsListLayout;
    }

    /**
     * @param RecordRef $correlatedItemsListLayout
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setCorrelatedItemsListLayout($correlatedItemsListLayout)
    {
      $this->correlatedItemsListLayout = $correlatedItemsListLayout;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param boolean $isOnline
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDetailedDescription()
    {
      return $this->storeDetailedDescription;
    }

    /**
     * @param string $storeDetailedDescription
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setStoreDetailedDescription($storeDetailedDescription)
    {
      $this->storeDetailedDescription = $storeDetailedDescription;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayThumbnail()
    {
      return $this->storeDisplayThumbnail;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setStoreDisplayThumbnail($storeDisplayThumbnail)
    {
      $this->storeDisplayThumbnail = $storeDisplayThumbnail;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayImage()
    {
      return $this->storeDisplayImage;
    }

    /**
     * @param RecordRef $storeDisplayImage
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setStoreDisplayImage($storeDisplayImage)
    {
      $this->storeDisplayImage = $storeDisplayImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getPageTitle()
    {
      return $this->pageTitle;
    }

    /**
     * @param string $pageTitle
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setPageTitle($pageTitle)
    {
      $this->pageTitle = $pageTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getMetaTagHtml()
    {
      return $this->metaTagHtml;
    }

    /**
     * @param string $metaTagHtml
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setMetaTagHtml($metaTagHtml)
    {
      $this->metaTagHtml = $metaTagHtml;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeFromSitemap()
    {
      return $this->excludeFromSitemap;
    }

    /**
     * @param boolean $excludeFromSitemap
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setExcludeFromSitemap($excludeFromSitemap)
    {
      $this->excludeFromSitemap = $excludeFromSitemap;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlComponent()
    {
      return $this->urlComponent;
    }

    /**
     * @param string $urlComponent
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setUrlComponent($urlComponent)
    {
      $this->urlComponent = $urlComponent;
      return $this;
    }

    /**
     * @return SitemapPriority
     */
    public function getSitemapPriority()
    {
      return $this->sitemapPriority;
    }

    /**
     * @param SitemapPriority $sitemapPriority
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setSitemapPriority($sitemapPriority)
    {
      $this->sitemapPriority = $sitemapPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeywords()
    {
      return $this->searchKeywords;
    }

    /**
     * @param string $searchKeywords
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setSearchKeywords($searchKeywords)
    {
      $this->searchKeywords = $searchKeywords;
      return $this;
    }

    /**
     * @return SiteCategoryPresentationItemList
     */
    public function getPresentationItemList()
    {
      return $this->presentationItemList;
    }

    /**
     * @param SiteCategoryPresentationItemList $presentationItemList
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setPresentationItemList($presentationItemList)
    {
      $this->presentationItemList = $presentationItemList;
      return $this;
    }

    /**
     * @return SiteCategoryTranslationList
     */
    public function getTranslationsList()
    {
      return $this->translationsList;
    }

    /**
     * @param SiteCategoryTranslationList $translationsList
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\SiteCategory
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
