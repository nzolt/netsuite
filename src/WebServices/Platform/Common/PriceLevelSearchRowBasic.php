<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * PriceLevelSearchRowBasic
 */
class PriceLevelSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $discountPct;

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
    public $isOnline;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    static $paramtypesmap = array(
    	"discountPct" => "SearchColumnDoubleField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isOnline" => "SearchColumnBooleanField[]",
    	"name" => "SearchColumnStringField[]",
    );
}