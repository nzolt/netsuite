<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetPostingTransactionSummaryResult;

/**
 * GetPostingTransactionSummaryResponse
 */
class GetPostingTransactionSummaryResponse {

    /**
     * @access public
     * @var GetPostingTransactionSummaryResult
     */
    protected $getPostingTransactionSummaryResult;

    static $paramtypesmap = array(
    	"getPostingTransactionSummaryResult" => "GetPostingTransactionSummaryResult",
    );

    /**
     * Set getPostingTransactionSummaryResult
     *
     * @param GetPostingTransactionSummaryResult $getPostingTransactionSummaryResult
     * @return GetPostingTransactionSummaryResponse
     */
    public function setGetPostingTransactionSummaryResult(GetPostingTransactionSummaryResult $getPostingTransactionSummaryResult) {
        $this->getPostingTransactionSummaryResult = $getPostingTransactionSummaryResult;
        return $this;
    }

    /**
     * Get getPostingTransactionSummaryResult
     *
     * @return GetPostingTransactionSummaryResult
     */
    public function getGetPostingTransactionSummaryResult() {
        return $this->getPostingTransactionSummaryResult;
    }

}