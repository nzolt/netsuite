<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * VendorCategorySearchRowBasic
 */
class VendorCategorySearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isTaxAgency;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    static $paramtypesmap = array(
    	"externalId" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isTaxAgency" => "SearchColumnBooleanField[]",
    	"name" => "SearchColumnStringField[]",
    );
}