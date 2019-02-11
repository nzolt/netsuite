<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * AppPackageSearchRowBasic
 */
class AppPackageSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $appDefinition;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $bundle;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $packageFile;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $version;

    static $paramtypesmap = array(
    	"appDefinition" => "SearchColumnSelectField[]",
    	"bundle" => "SearchColumnSelectField[]",
    	"description" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"packageFile" => "SearchColumnSelectField[]",
    	"version" => "SearchColumnStringField[]",
    );
}