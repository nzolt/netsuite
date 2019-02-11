<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * CategoryList
 */
class CategoryList {

    /**
     * @access public
     * @var RecordRef[]
     */
    public $category;

    static $paramtypesmap = array(
    	"category" => "RecordRef[]",
    );
}