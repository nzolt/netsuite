<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CustomizationRefList
 */
class CustomizationRefList {

    /**
     * @access public
     * @var CustomizationRef[]
     */
    public $customizationRef;

    static $paramtypesmap = array(
    	"customizationRef" => "CustomizationRef[]",
    );
}