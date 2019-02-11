<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * BaseRef
 */
class BaseRef {

    /**
     * @access public
     * @var string
     */
    protected $name;

    static $paramtypesmap = array(
    	"name" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return BaseRef
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

}