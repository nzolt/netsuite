<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * MessageSearchRowBasic
 */
class MessageSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $author;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $authorEmail;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $bcc;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $cc;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $hasAttachment;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $internalOnly;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isEmailed;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isIncoming;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $message;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $messageDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $messageType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $recipient;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $recipientEmail;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $subject;

    static $paramtypesmap = array(
    	"author" => "SearchColumnSelectField[]",
    	"authorEmail" => "SearchColumnStringField[]",
    	"bcc" => "SearchColumnStringField[]",
    	"cc" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"hasAttachment" => "SearchColumnBooleanField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"internalOnly" => "SearchColumnBooleanField[]",
    	"isEmailed" => "SearchColumnBooleanField[]",
    	"isIncoming" => "SearchColumnBooleanField[]",
    	"message" => "SearchColumnStringField[]",
    	"messageDate" => "SearchColumnDateField[]",
    	"messageType" => "SearchColumnEnumSelectField[]",
    	"recipient" => "SearchColumnSelectField[]",
    	"recipientEmail" => "SearchColumnStringField[]",
    	"subject" => "SearchColumnStringField[]",
    );
}