<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

/**
 * TimeSheetTimeGrid
 */
class TimeSheetTimeGrid {

    /**
     * @access public
     * @var TimeEntry
     */
    protected $sunday;

    /**
     * @access public
     * @var TimeEntry
     */
    protected $monday;

    /**
     * @access public
     * @var TimeEntry
     */
    protected $tuesday;

    /**
     * @access public
     * @var TimeEntry
     */
    protected $wednesday;

    /**
     * @access public
     * @var TimeEntry
     */
    protected $thursday;

    /**
     * @access public
     * @var TimeEntry
     */
    protected $friday;

    /**
     * @access public
     * @var TimeEntry
     */
    protected $saturday;

    static $paramtypesmap = array(
    	"sunday" => "TimeEntry",
    	"monday" => "TimeEntry",
    	"tuesday" => "TimeEntry",
    	"wednesday" => "TimeEntry",
    	"thursday" => "TimeEntry",
    	"friday" => "TimeEntry",
    	"saturday" => "TimeEntry",
    );

    /**
     * Set sunday
     *
     * @param TimeEntry $sunday
     * @return TimeSheetTimeGrid
     */
    public function setSunday(TimeEntry $sunday) {
        $this->sunday = $sunday;
        return $this;
    }

    /**
     * Get sunday
     *
     * @return TimeEntry
     */
    public function getSunday() {
        return $this->sunday;
    }


    /**
     * Set monday
     *
     * @param TimeEntry $monday
     * @return TimeSheetTimeGrid
     */
    public function setMonday(TimeEntry $monday) {
        $this->monday = $monday;
        return $this;
    }

    /**
     * Get monday
     *
     * @return TimeEntry
     */
    public function getMonday() {
        return $this->monday;
    }


    /**
     * Set tuesday
     *
     * @param TimeEntry $tuesday
     * @return TimeSheetTimeGrid
     */
    public function setTuesday(TimeEntry $tuesday) {
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * Get tuesday
     *
     * @return TimeEntry
     */
    public function getTuesday() {
        return $this->tuesday;
    }


    /**
     * Set wednesday
     *
     * @param TimeEntry $wednesday
     * @return TimeSheetTimeGrid
     */
    public function setWednesday(TimeEntry $wednesday) {
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * Get wednesday
     *
     * @return TimeEntry
     */
    public function getWednesday() {
        return $this->wednesday;
    }


    /**
     * Set thursday
     *
     * @param TimeEntry $thursday
     * @return TimeSheetTimeGrid
     */
    public function setThursday(TimeEntry $thursday) {
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * Get thursday
     *
     * @return TimeEntry
     */
    public function getThursday() {
        return $this->thursday;
    }


    /**
     * Set friday
     *
     * @param TimeEntry $friday
     * @return TimeSheetTimeGrid
     */
    public function setFriday(TimeEntry $friday) {
        $this->friday = $friday;
        return $this;
    }

    /**
     * Get friday
     *
     * @return TimeEntry
     */
    public function getFriday() {
        return $this->friday;
    }


    /**
     * Set saturday
     *
     * @param TimeEntry $saturday
     * @return TimeSheetTimeGrid
     */
    public function setSaturday(TimeEntry $saturday) {
        $this->saturday = $saturday;
        return $this;
    }

    /**
     * Get saturday
     *
     * @return TimeEntry
     */
    public function getSaturday() {
        return $this->saturday;
    }

}