<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * ItemRevisionSearchRowBasic
 */
class ItemRevisionSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $effectiveDate;

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
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $memo;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $obsoleteDate;

    static $paramtypesmap = array(
    	"effectiveDate" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"item" => "SearchColumnSelectField[]",
    	"memo" => "SearchColumnStringField[]",
    	"name" => "SearchColumnStringField[]",
    	"obsoleteDate" => "SearchColumnDateField[]",
    );
}