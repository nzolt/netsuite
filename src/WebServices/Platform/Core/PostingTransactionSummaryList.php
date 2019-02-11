<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * PostingTransactionSummaryList
 */
class PostingTransactionSummaryList {

    /**
     * @access public
     * @var PostingTransactionSummary[]
     */
    public $postingTransactionSummary;

    static $paramtypesmap = array(
    	"postingTransactionSummary" => "PostingTransactionSummary[]",
    );
}