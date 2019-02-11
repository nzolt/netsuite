<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * UnitsTypeSearchRowBasic
 */
class UnitsTypeSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $abbreviation;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $baseUnit;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $conversionRate;

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
    public $isInActive;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $pluralAbbreviation;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $pluralName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $unitName;

    static $paramtypesmap = array(
    	"abbreviation" => "SearchColumnStringField[]",
    	"baseUnit" => "SearchColumnBooleanField[]",
    	"conversionRate" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInActive" => "SearchColumnBooleanField[]",
    	"name" => "SearchColumnStringField[]",
    	"pluralAbbreviation" => "SearchColumnStringField[]",
    	"pluralName" => "SearchColumnStringField[]",
    	"unitName" => "SearchColumnStringField[]",
    );
}