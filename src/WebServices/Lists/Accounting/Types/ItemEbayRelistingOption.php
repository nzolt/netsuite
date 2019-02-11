<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting\Types;

/**
 * ItemEbayRelistingOption
 */
class ItemEbayRelistingOption {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _doNotRelist = "_doNotRelist";

    /**
     * @var string
     */
    const _relistWhenItemExpires = "_relistWhenItemExpires";

    /**
     * @var string
     */
    const _relistWhenItemIsSold = "_relistWhenItemIsSold";

    /**
     * @var string
     */
    const _relistWhenItemIsSoldExpires = "_relistWhenItemIsSoldExpires";
}