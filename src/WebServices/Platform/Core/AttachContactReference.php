<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * AttachContactReference
 */
class AttachContactReference extends AttachReference {

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    /**
     * @access public
     * @var RecordRef
     */
    public $contactRole;

    static $paramtypesmap = array(
    	"contact" => "RecordRef",
    	"contactRole" => "RecordRef",
    );
}