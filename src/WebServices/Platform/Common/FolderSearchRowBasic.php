<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * FolderSearchRowBasic
 */
class FolderSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $folderSize;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $group;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $numFiles;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $owner;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $parent;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    static $paramtypesmap = array(
    	"class" => "SearchColumnSelectField[]",
    	"department" => "SearchColumnSelectField[]",
    	"description" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"folderSize" => "SearchColumnLongField[]",
    	"group" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"location" => "SearchColumnSelectField[]",
    	"name" => "SearchColumnStringField[]",
    	"numFiles" => "SearchColumnLongField[]",
    	"owner" => "SearchColumnSelectField[]",
    	"parent" => "SearchColumnSelectField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    );
}