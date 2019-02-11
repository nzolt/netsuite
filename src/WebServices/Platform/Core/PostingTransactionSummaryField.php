<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * PostingTransactionSummaryField
 */
class PostingTransactionSummaryField {

    /**
     * @access public
     * @var boolean
     */
    protected $period;

    /**
     * @access public
     * @var boolean
     */
    protected $account;

    /**
     * @access public
     * @var boolean
     */
    protected $parentItem;

    /**
     * @access public
     * @var boolean
     */
    protected $item;

    /**
     * @access public
     * @var boolean
     */
    protected $entity;

    /**
     * @access public
     * @var boolean
     */
    protected $department;

    /**
     * @access public
     * @var boolean
     */
    protected $class;

    /**
     * @access public
     * @var boolean
     */
    protected $location;

    /**
     * @access public
     * @var boolean
     */
    protected $subsidiary;

    /**
     * @access public
     * @var boolean
     */
    protected $book;

    static $paramtypesmap = array(
    	"period" => "boolean",
    	"account" => "boolean",
    	"parentItem" => "boolean",
    	"item" => "boolean",
    	"entity" => "boolean",
    	"department" => "boolean",
    	"class" => "boolean",
    	"location" => "boolean",
    	"subsidiary" => "boolean",
    	"book" => "boolean",
    );

    /**
     * Set period
     *
     * @param boolean $period
     * @return PostingTransactionSummaryField
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Get period
     *
     * @return boolean
     */
    public function getPeriod() {
        return $this->period;
    }


    /**
     * Set account
     *
     * @param boolean $account
     * @return PostingTransactionSummaryField
     */
    public function setAccount($account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return boolean
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set parentItem
     *
     * @param boolean $parentItem
     * @return PostingTransactionSummaryField
     */
    public function setParentItem($parentItem) {
        $this->parentItem = $parentItem;
        return $this;
    }

    /**
     * Get parentItem
     *
     * @return boolean
     */
    public function getParentItem() {
        return $this->parentItem;
    }


    /**
     * Set item
     *
     * @param boolean $item
     * @return PostingTransactionSummaryField
     */
    public function setItem($item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return boolean
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set entity
     *
     * @param boolean $entity
     * @return PostingTransactionSummaryField
     */
    public function setEntity($entity) {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Get entity
     *
     * @return boolean
     */
    public function getEntity() {
        return $this->entity;
    }


    /**
     * Set department
     *
     * @param boolean $department
     * @return PostingTransactionSummaryField
     */
    public function setDepartment($department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return boolean
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set class
     *
     * @param boolean $class
     * @return PostingTransactionSummaryField
     */
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set location
     *
     * @param boolean $location
     * @return PostingTransactionSummaryField
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return boolean
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set subsidiary
     *
     * @param boolean $subsidiary
     * @return PostingTransactionSummaryField
     */
    public function setSubsidiary($subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return boolean
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set book
     *
     * @param boolean $book
     * @return PostingTransactionSummaryField
     */
    public function setBook($book) {
        $this->book = $book;
        return $this;
    }

    /**
     * Get book
     *
     * @return boolean
     */
    public function getBook() {
        return $this->book;
    }

}