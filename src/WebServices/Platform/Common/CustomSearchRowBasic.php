<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomizationRef;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * CustomSearchRowBasic
 */
class CustomSearchRowBasic {

    /**
     * @access public
     * @var CustomizationRef
     */
    protected $customizationRef;

    /**
     * @access public
     * @var SearchRowBasic
     */
    protected $searchRowBasic;

    static $paramtypesmap = array(
    	"customizationRef" => "CustomizationRef",
    	"searchRowBasic" => "SearchRowBasic",
    );

    /**
     * Set customizationRef
     *
     * @param CustomizationRef $customizationRef
     * @return CustomSearchRowBasic
     */
    public function setCustomizationRef(CustomizationRef $customizationRef) {
        $this->customizationRef = $customizationRef;
        return $this;
    }

    /**
     * Get customizationRef
     *
     * @return CustomizationRef
     */
    public function getCustomizationRef() {
        return $this->customizationRef;
    }


    /**
     * Set searchRowBasic
     *
     * @param SearchRowBasic $searchRowBasic
     * @return CustomSearchRowBasic
     */
    public function setSearchRowBasic(SearchRowBasic $searchRowBasic) {
        $this->searchRowBasic = $searchRowBasic;
        return $this;
    }

    /**
     * Get searchRowBasic
     *
     * @return SearchRowBasic
     */
    public function getSearchRowBasic() {
        return $this->searchRowBasic;
    }

}