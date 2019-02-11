<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomizationType;

/**
 * GetCustomizationIdRequest
 */
class GetCustomizationIdRequest {

    /**
     * @access public
     * @var CustomizationType
     */
    protected $customizationType;

    /**
     * @access public
     * @var boolean
     */
    protected $includeInactives;

    static $paramtypesmap = array(
    	"customizationType" => "CustomizationType",
    	"includeInactives" => "boolean",
    );

    /**
     * Set customizationType
     *
     * @param CustomizationType $customizationType
     * @return GetCustomizationIdRequest
     */
    public function setCustomizationType(CustomizationType $customizationType) {
        $this->customizationType = $customizationType;
        return $this;
    }

    /**
     * Get customizationType
     *
     * @return CustomizationType
     */
    public function getCustomizationType() {
        return $this->customizationType;
    }


    /**
     * Set includeInactives
     *
     * @param boolean $includeInactives
     * @return GetCustomizationIdRequest
     */
    public function setIncludeInactives($includeInactives) {
        $this->includeInactives = $includeInactives;
        return $this;
    }

    /**
     * Get includeInactives
     *
     * @return boolean
     */
    public function getIncludeInactives() {
        return $this->includeInactives;
    }

}