<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * DeletedRecord
 */
class DeletedRecord {

    /**
     * @access public
     * @var dateTime
     */
    protected $deletedDate;

    /**
     * @access public
     * @var BaseRef
     */
    protected $record;

    static $paramtypesmap = array(
    	"deletedDate" => "dateTime",
    	"record" => "BaseRef",
    );

    /**
     * Set deletedDate
     *
     * @param \DateTime $deletedDate
     * @return DeletedRecord
     */
    public function setDeletedDate(\DateTime $deletedDate) {
        $this->deletedDate = $deletedDate->format('c');
        return $this;
    }

    /**
     * Get deletedDate
     *
     * @return \DateTime
     */
    public function getDeletedDate() {
        return new \DateTime($this->deletedDate);
    }


    /**
     * Set record
     *
     * @param BaseRef $record
     * @return DeletedRecord
     */
    public function setRecord(BaseRef $record) {
        $this->record = $record;
        return $this;
    }

    /**
     * Get record
     *
     * @return BaseRef
     */
    public function getRecord() {
        return $this->record;
    }

}