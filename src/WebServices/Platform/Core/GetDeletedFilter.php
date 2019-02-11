<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetDeletedFilter
 */
class GetDeletedFilter {

    /**
     * @access public
     * @var SearchDateField
     */
    protected $deletedDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $scriptId;

    static $paramtypesmap = array(
    	"deletedDate" => "SearchDateField",
    	"type" => "SearchEnumMultiSelectField",
    	"scriptId" => "SearchStringField",
    );

    /**
     * Set deletedDate
     *
     * @param SearchDateField $deletedDate
     * @return GetDeletedFilter
     */
    public function setDeletedDate(SearchDateField $deletedDate) {
        $this->deletedDate = $deletedDate;
        return $this;
    }

    /**
     * Get deletedDate
     *
     * @return SearchDateField
     */
    public function getDeletedDate() {
        return $this->deletedDate;
    }


    /**
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return GetDeletedFilter
     */
    public function setType(SearchEnumMultiSelectField $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return SearchEnumMultiSelectField
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set scriptId
     *
     * @param SearchStringField $scriptId
     * @return GetDeletedFilter
     */
    public function setScriptId(SearchStringField $scriptId) {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * Get scriptId
     *
     * @return SearchStringField
     */
    public function getScriptId() {
        return $this->scriptId;
    }

}