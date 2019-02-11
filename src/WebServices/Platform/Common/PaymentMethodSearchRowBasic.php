<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * PaymentMethodSearchRowBasic
 */
class PaymentMethodSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $account;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $creditCard;

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
    public $isDebitCard;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    static $paramtypesmap = array(
    	"account" => "SearchColumnSelectField[]",
    	"creditCard" => "SearchColumnBooleanField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isDebitCard" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"name" => "SearchColumnStringField[]",
    );
}