<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * MatrixOptionList
 */
class MatrixOptionList {

    /**
     * @access public
     * @var SelectCustomFieldRef[]
     */
    public $matrixOption;

    static $paramtypesmap = array(
    	"matrixOption" => "SelectCustomFieldRef[]",
    );
}