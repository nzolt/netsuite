<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\SitemapPriority;
use Nzolt\NetSuite\WebServices\Lists\Website\SiteCategoryPresentationItemList;
use Nzolt\NetSuite\WebServices\Lists\Website\SiteCategoryTranslationList;

/**
 * SiteCategory
 */
class SiteCategory extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $website;

    /**
     * @access public
     * @var string
     */
    protected $itemId;

    /**
     * @access public
     * @var RecordRef
     */
    public $parentCategory;

    /**
     * @access public
     * @var RecordRef
     */
    public $categoryListLayout;

    /**
     * @access public
     * @var RecordRef
     */
    public $itemListLayout;

    /**
     * @access public
     * @var RecordRef
     */
    public $relatedItemsListLayout;

    /**
     * @access public
     * @var RecordRef
     */
    public $correlatedItemsListLayout;

    /**
     * @access public
     * @var boolean
     */
    protected $isOnline;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var string
     */
    protected $storeDetailedDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeDisplayThumbnail;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeDisplayImage;

    /**
     * @access public
     * @var string
     */
    protected $pageTitle;

    /**
     * @access public
     * @var string
     */
    protected $metaTagHtml;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeFromSitemap;

    /**
     * @access public
     * @var string
     */
    protected $urlComponent;

    /**
     * @access public
     * @var SitemapPriority
     */
    protected $sitemapPriority;

    /**
     * @access public
     * @var string
     */
    protected $searchKeywords;

    /**
     * @access public
     * @var SiteCategoryPresentationItemList
     */
    protected $presentationItemList;

    /**
     * @access public
     * @var SiteCategoryTranslationList
     */
    protected $translationsList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"website" => "RecordRef",
    	"itemId" => "string",
    	"parentCategory" => "RecordRef",
    	"categoryListLayout" => "RecordRef",
    	"itemListLayout" => "RecordRef",
    	"relatedItemsListLayout" => "RecordRef",
    	"correlatedItemsListLayout" => "RecordRef",
    	"isOnline" => "boolean",
    	"isInactive" => "boolean",
    	"description" => "string",
    	"storeDetailedDescription" => "string",
    	"storeDisplayThumbnail" => "RecordRef",
    	"storeDisplayImage" => "RecordRef",
    	"pageTitle" => "string",
    	"metaTagHtml" => "string",
    	"excludeFromSitemap" => "boolean",
    	"urlComponent" => "string",
    	"sitemapPriority" => "SitemapPriority",
    	"searchKeywords" => "string",
    	"presentationItemList" => "SiteCategoryPresentationItemList",
    	"translationsList" => "SiteCategoryTranslationList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set itemId
     *
     * @param string $itemId
     * @return SiteCategory
     */
    public function setItemId($itemId) {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId() {
        return $this->itemId;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return SiteCategory
     */
    public function setIsOnline($isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return SiteCategory
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return SiteCategory
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set storeDetailedDescription
     *
     * @param string $storeDetailedDescription
     * @return SiteCategory
     */
    public function setStoreDetailedDescription($storeDetailedDescription) {
        $this->storeDetailedDescription = $storeDetailedDescription;
        return $this;
    }

    /**
     * Get storeDetailedDescription
     *
     * @return string
     */
    public function getStoreDetailedDescription() {
        return $this->storeDetailedDescription;
    }


    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return SiteCategory
     */
    public function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->pageTitle;
    }


    /**
     * Set metaTagHtml
     *
     * @param string $metaTagHtml
     * @return SiteCategory
     */
    public function setMetaTagHtml($metaTagHtml) {
        $this->metaTagHtml = $metaTagHtml;
        return $this;
    }

    /**
     * Get metaTagHtml
     *
     * @return string
     */
    public function getMetaTagHtml() {
        return $this->metaTagHtml;
    }


    /**
     * Set excludeFromSitemap
     *
     * @param boolean $excludeFromSitemap
     * @return SiteCategory
     */
    public function setExcludeFromSitemap($excludeFromSitemap) {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * Get excludeFromSitemap
     *
     * @return boolean
     */
    public function getExcludeFromSitemap() {
        return $this->excludeFromSitemap;
    }


    /**
     * Set urlComponent
     *
     * @param string $urlComponent
     * @return SiteCategory
     */
    public function setUrlComponent($urlComponent) {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * Get urlComponent
     *
     * @return string
     */
    public function getUrlComponent() {
        return $this->urlComponent;
    }


    /**
     * Set sitemapPriority
     *
     * @param SitemapPriority $sitemapPriority
     * @return SiteCategory
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority) {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * Get sitemapPriority
     *
     * @return SitemapPriority
     */
    public function getSitemapPriority() {
        return $this->sitemapPriority;
    }


    /**
     * Set searchKeywords
     *
     * @param string $searchKeywords
     * @return SiteCategory
     */
    public function setSearchKeywords($searchKeywords) {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * Get searchKeywords
     *
     * @return string
     */
    public function getSearchKeywords() {
        return $this->searchKeywords;
    }


    /**
     * Set presentationItemList
     *
     * @param SiteCategoryPresentationItemList $presentationItemList
     * @return SiteCategory
     */
    public function setPresentationItemList(SiteCategoryPresentationItemList $presentationItemList) {
        $this->presentationItemList = $presentationItemList;
        return $this;
    }

    /**
     * Get presentationItemList
     *
     * @return SiteCategoryPresentationItemList
     */
    public function getPresentationItemList() {
        return $this->presentationItemList;
    }


    /**
     * Set translationsList
     *
     * @param SiteCategoryTranslationList $translationsList
     * @return SiteCategory
     */
    public function setTranslationsList(SiteCategoryTranslationList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return SiteCategoryTranslationList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return SiteCategory
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return SiteCategory
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}