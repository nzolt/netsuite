<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * InventoryNumberBinSearchRowBasic
 */
class InventoryNumberBinSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $binNumber;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $inventoryNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityAvailable;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityOnHand;

    static $paramtypesmap = array(
    	"binNumber" => "SearchColumnSelectField[]",
    	"inventoryNumber" => "SearchColumnStringField[]",
    	"location" => "SearchColumnSelectField[]",
    	"quantityAvailable" => "SearchColumnDoubleField[]",
    	"quantityOnHand" => "SearchColumnDoubleField[]",
    );
}