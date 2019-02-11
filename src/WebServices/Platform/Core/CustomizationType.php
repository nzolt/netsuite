<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\GetCustomizationType;

/**
 * CustomizationType
 */
class CustomizationType {

    /**
     * @access public
     * @var GetCustomizationType
     */
    protected $getCustomizationType;

    static $paramtypesmap = array(
    	"getCustomizationType" => "GetCustomizationType",
    );

    /**
     * Set getCustomizationType
     *
     * @param GetCustomizationType $getCustomizationType
     * @return CustomizationType
     */
    public function setGetCustomizationType(GetCustomizationType $getCustomizationType) {
        $this->getCustomizationType = $getCustomizationType;
        return $this;
    }

    /**
     * Get getCustomizationType
     *
     * @return GetCustomizationType
     */
    public function getGetCustomizationType() {
        return $this->getCustomizationType;
    }

}