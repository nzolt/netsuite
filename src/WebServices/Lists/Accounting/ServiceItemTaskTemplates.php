<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Duration;

/**
 * ServiceItemTaskTemplates
 */
class ServiceItemTaskTemplates {

    /**
     * @access public
     * @var string
     */
    protected $taskName;

    /**
     * @access public
     * @var integer
     */
    protected $taskStartOffset;

    /**
     * @access public
     * @var Duration
     */
    protected $taskDuration;

    static $paramtypesmap = array(
    	"taskName" => "string",
    	"taskStartOffset" => "integer",
    	"taskDuration" => "Duration",
    );

    /**
     * Set taskName
     *
     * @param string $taskName
     * @return ServiceItemTaskTemplates
     */
    public function setTaskName($taskName) {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * Get taskName
     *
     * @return string
     */
    public function getTaskName() {
        return $this->taskName;
    }


    /**
     * Set taskStartOffset
     *
     * @param integer $taskStartOffset
     * @return ServiceItemTaskTemplates
     */
    public function setTaskStartOffset($taskStartOffset) {
        $this->taskStartOffset = $taskStartOffset;
        return $this;
    }

    /**
     * Get taskStartOffset
     *
     * @return integer
     */
    public function getTaskStartOffset() {
        return $this->taskStartOffset;
    }


    /**
     * Set taskDuration
     *
     * @param Duration $taskDuration
     * @return ServiceItemTaskTemplates
     */
    public function setTaskDuration(Duration $taskDuration) {
        $this->taskDuration = $taskDuration;
        return $this;
    }

    /**
     * Get taskDuration
     *
     * @return Duration
     */
    public function getTaskDuration() {
        return $this->taskDuration;
    }

}