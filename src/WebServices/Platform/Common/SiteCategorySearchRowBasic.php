<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * SiteCategorySearchRowBasic
 */
class SiteCategorySearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateViewed;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $excludeFromSitemap;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $fullName;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $hidden;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $hits;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $longDescription;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $pageTitle;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $sitemapPriority;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $urlComponent;

    static $paramtypesmap = array(
    	"dateViewed" => "SearchColumnDateField[]",
    	"description" => "SearchColumnStringField[]",
    	"excludeFromSitemap" => "SearchColumnBooleanField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"fullName" => "SearchColumnStringField[]",
    	"hidden" => "SearchColumnBooleanField[]",
    	"hits" => "SearchColumnLongField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"longDescription" => "SearchColumnStringField[]",
    	"name" => "SearchColumnStringField[]",
    	"pageTitle" => "SearchColumnStringField[]",
    	"sitemapPriority" => "SearchColumnEnumSelectField[]",
    	"urlComponent" => "SearchColumnStringField[]",
    );
}