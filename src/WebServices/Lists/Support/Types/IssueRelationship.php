<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support\Types;

/**
 * IssueRelationship
 */
class IssueRelationship {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _blocks = "_blocks";

    /**
     * @var string
     */
    const _dependsOn = "_dependsOn";

    /**
     * @var string
     */
    const _duplicatedBy = "_duplicatedBy";

    /**
     * @var string
     */
    const _duplicates = "_duplicates";

    /**
     * @var string
     */
    const _followedUpBy = "_followedUpBy";

    /**
     * @var string
     */
    const _followUpFor = "_followUpFor";

    /**
     * @var string
     */
    const _injectedBy = "_injectedBy";

    /**
     * @var string
     */
    const _injects = "_injects";

    /**
     * @var string
     */
    const _isBlockedBy = "_isBlockedBy";

    /**
     * @var string
     */
    const _isRequiredFor = "_isRequiredFor";

    /**
     * @var string
     */
    const _relatedTo = "_relatedTo";
}