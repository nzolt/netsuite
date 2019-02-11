<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling\Types;

/**
 * ProjectTaskPredecessorPredecessorType
 */
class ProjectTaskPredecessorPredecessorType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _finishToFinish = "_finishToFinish";

    /**
     * @var string
     */
    const _finishToStart = "_finishToStart";

    /**
     * @var string
     */
    const _startToFinish = "_startToFinish";

    /**
     * @var string
     */
    const _startToStart = "_startToStart";
}