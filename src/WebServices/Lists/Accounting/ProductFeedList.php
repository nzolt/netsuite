<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * ProductFeedList
 */
class ProductFeedList {

    /**
     * @access public
     * @var ItemProductFeed[]
     */
    public $productFeed;

    static $paramtypesmap = array(
    	"productFeed" => "ItemProductFeed[]",
    );
}