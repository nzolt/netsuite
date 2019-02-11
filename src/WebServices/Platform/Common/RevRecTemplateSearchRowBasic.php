<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * RevRecTemplateSearchRowBasic
 */
class RevRecTemplateSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $amorMethod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $amorPeriod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $amorStartOffset;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $amorTermSrc;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $amorType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $contraAccount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $deferralAccount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $periodOffset;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $targetAccount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $useForeignAmounts;

    static $paramtypesmap = array(
    	"amorMethod" => "SearchColumnStringField[]",
    	"amorPeriod" => "SearchColumnStringField[]",
    	"amorStartOffset" => "SearchColumnStringField[]",
    	"amorTermSrc" => "SearchColumnStringField[]",
    	"amorType" => "SearchColumnStringField[]",
    	"contraAccount" => "SearchColumnStringField[]",
    	"deferralAccount" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnLongField[]",
    	"isInactive" => "SearchColumnStringField[]",
    	"name" => "SearchColumnStringField[]",
    	"periodOffset" => "SearchColumnStringField[]",
    	"targetAccount" => "SearchColumnStringField[]",
    	"useForeignAmounts" => "SearchColumnBooleanField[]",
    );
}