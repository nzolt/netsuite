<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetSelectFilterByFieldValueList
 */
class GetSelectFilterByFieldValueList {

    /**
     * @access public
     * @var GetSelectFilterByFieldValue[]
     */
    public $filterBy;

    static $paramtypesmap = array(
    	"filterBy" => "GetSelectFilterByFieldValue[]",
    );
}