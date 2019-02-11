<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * PostingTransactionSummaryFilter
 */
class PostingTransactionSummaryFilter {

    /**
     * @access public
     * @var RecordRefList
     */
    protected $period;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $account;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $parentItem;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $item;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $entity;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $department;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $class;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $location;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiary;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $book;

    static $paramtypesmap = array(
    	"period" => "RecordRefList",
    	"account" => "RecordRefList",
    	"parentItem" => "RecordRefList",
    	"item" => "RecordRefList",
    	"entity" => "RecordRefList",
    	"department" => "RecordRefList",
    	"class" => "RecordRefList",
    	"location" => "RecordRefList",
    	"subsidiary" => "RecordRefList",
    	"book" => "RecordRefList",
    );

    /**
     * Set period
     *
     * @param RecordRefList $period
     * @return PostingTransactionSummaryFilter
     */
    public function setPeriod(RecordRefList $period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Get period
     *
     * @return RecordRefList
     */
    public function getPeriod() {
        return $this->period;
    }


    /**
     * Set account
     *
     * @param RecordRefList $account
     * @return PostingTransactionSummaryFilter
     */
    public function setAccount(RecordRefList $account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return RecordRefList
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set parentItem
     *
     * @param RecordRefList $parentItem
     * @return PostingTransactionSummaryFilter
     */
    public function setParentItem(RecordRefList $parentItem) {
        $this->parentItem = $parentItem;
        return $this;
    }

    /**
     * Get parentItem
     *
     * @return RecordRefList
     */
    public function getParentItem() {
        return $this->parentItem;
    }


    /**
     * Set item
     *
     * @param RecordRefList $item
     * @return PostingTransactionSummaryFilter
     */
    public function setItem(RecordRefList $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return RecordRefList
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set entity
     *
     * @param RecordRefList $entity
     * @return PostingTransactionSummaryFilter
     */
    public function setEntity(RecordRefList $entity) {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Get entity
     *
     * @return RecordRefList
     */
    public function getEntity() {
        return $this->entity;
    }


    /**
     * Set department
     *
     * @param RecordRefList $department
     * @return PostingTransactionSummaryFilter
     */
    public function setDepartment(RecordRefList $department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return RecordRefList
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set class
     *
     * @param RecordRefList $class
     * @return PostingTransactionSummaryFilter
     */
    public function setClass(RecordRefList $class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return RecordRefList
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set location
     *
     * @param RecordRefList $location
     * @return PostingTransactionSummaryFilter
     */
    public function setLocation(RecordRefList $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return RecordRefList
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set subsidiary
     *
     * @param RecordRefList $subsidiary
     * @return PostingTransactionSummaryFilter
     */
    public function setSubsidiary(RecordRefList $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return RecordRefList
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set book
     *
     * @param RecordRefList $book
     * @return PostingTransactionSummaryFilter
     */
    public function setBook(RecordRefList $book) {
        $this->book = $book;
        return $this;
    }

    /**
     * Get book
     *
     * @return RecordRefList
     */
    public function getBook() {
        return $this->book;
    }

}