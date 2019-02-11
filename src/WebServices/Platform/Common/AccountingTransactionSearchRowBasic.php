<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * AccountingTransactionSearchRowBasic
 */
class AccountingTransactionSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $account;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $accountType;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $altSalesAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $altSalesNetAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $amount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $baseCurrency;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $catchUpPeriod;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $creditAmount;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $debitAmount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $deferRevRec;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $exchangeRate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $grossAmount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $multiSubsidiary;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $netAmount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $posting;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityRevCommitted;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $recognizedRevenue;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $revCommitStatus;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $revenueStatus;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $revRecEndDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $revRecOnRevCommitment;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $revRecStartDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $tranIsVsoeBundle;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $vsoeAllocation;

    static $paramtypesmap = array(
    	"account" => "SearchColumnSelectField[]",
    	"accountingBook" => "SearchColumnSelectField[]",
    	"accountType" => "SearchColumnStringField[]",
    	"altSalesAmount" => "SearchColumnDoubleField[]",
    	"altSalesNetAmount" => "SearchColumnDoubleField[]",
    	"amount" => "SearchColumnDoubleField[]",
    	"baseCurrency" => "SearchColumnStringField[]",
    	"catchUpPeriod" => "SearchColumnStringField[]",
    	"creditAmount" => "SearchColumnDoubleField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"debitAmount" => "SearchColumnDoubleField[]",
    	"deferRevRec" => "SearchColumnBooleanField[]",
    	"exchangeRate" => "SearchColumnDoubleField[]",
    	"fxAmount" => "SearchColumnDoubleField[]",
    	"grossAmount" => "SearchColumnDoubleField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"multiSubsidiary" => "SearchColumnBooleanField[]",
    	"netAmount" => "SearchColumnDoubleField[]",
    	"posting" => "SearchColumnBooleanField[]",
    	"quantityRevCommitted" => "SearchColumnDoubleField[]",
    	"recognizedRevenue" => "SearchColumnDoubleField[]",
    	"revCommitStatus" => "SearchColumnEnumSelectField[]",
    	"revenueStatus" => "SearchColumnEnumSelectField[]",
    	"revRecEndDate" => "SearchColumnDateField[]",
    	"revRecOnRevCommitment" => "SearchColumnBooleanField[]",
    	"revRecStartDate" => "SearchColumnDateField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"tranIsVsoeBundle" => "SearchColumnBooleanField[]",
    	"vsoeAllocation" => "SearchColumnDoubleField[]",
    );
}