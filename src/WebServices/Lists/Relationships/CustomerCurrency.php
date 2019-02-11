<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\CurrencySymbolPlacement;

/**
 * CustomerCurrency
 */
class CustomerCurrency {

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var float
     */
    protected $consolBalance;

    /**
     * @access public
     * @var float
     */
    protected $depositBalance;

    /**
     * @access public
     * @var float
     */
    protected $consolDepositBalance;

    /**
     * @access public
     * @var float
     */
    protected $overdueBalance;

    /**
     * @access public
     * @var float
     */
    protected $consolOverdueBalance;

    /**
     * @access public
     * @var float
     */
    protected $unbilledOrders;

    /**
     * @access public
     * @var float
     */
    protected $consolUnbilledOrders;

    /**
     * @access public
     * @var boolean
     */
    protected $overrideCurrencyFormat;

    /**
     * @access public
     * @var string
     */
    protected $displaySymbol;

    /**
     * @access public
     * @var CurrencySymbolPlacement
     */
    protected $symbolPlacement;

    static $paramtypesmap = array(
    	"currency" => "RecordRef",
    	"balance" => "float",
    	"consolBalance" => "float",
    	"depositBalance" => "float",
    	"consolDepositBalance" => "float",
    	"overdueBalance" => "float",
    	"consolOverdueBalance" => "float",
    	"unbilledOrders" => "float",
    	"consolUnbilledOrders" => "float",
    	"overrideCurrencyFormat" => "boolean",
    	"displaySymbol" => "string",
    	"symbolPlacement" => "CurrencySymbolPlacement",
    );

    /**
     * Set balance
     *
     * @param float $balance
     * @return CustomerCurrency
     */
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set consolBalance
     *
     * @param float $consolBalance
     * @return CustomerCurrency
     */
    public function setConsolBalance($consolBalance) {
        $this->consolBalance = $consolBalance;
        return $this;
    }

    /**
     * Get consolBalance
     *
     * @return float
     */
    public function getConsolBalance() {
        return $this->consolBalance;
    }


    /**
     * Set depositBalance
     *
     * @param float $depositBalance
     * @return CustomerCurrency
     */
    public function setDepositBalance($depositBalance) {
        $this->depositBalance = $depositBalance;
        return $this;
    }

    /**
     * Get depositBalance
     *
     * @return float
     */
    public function getDepositBalance() {
        return $this->depositBalance;
    }


    /**
     * Set consolDepositBalance
     *
     * @param float $consolDepositBalance
     * @return CustomerCurrency
     */
    public function setConsolDepositBalance($consolDepositBalance) {
        $this->consolDepositBalance = $consolDepositBalance;
        return $this;
    }

    /**
     * Get consolDepositBalance
     *
     * @return float
     */
    public function getConsolDepositBalance() {
        return $this->consolDepositBalance;
    }


    /**
     * Set overdueBalance
     *
     * @param float $overdueBalance
     * @return CustomerCurrency
     */
    public function setOverdueBalance($overdueBalance) {
        $this->overdueBalance = $overdueBalance;
        return $this;
    }

    /**
     * Get overdueBalance
     *
     * @return float
     */
    public function getOverdueBalance() {
        return $this->overdueBalance;
    }


    /**
     * Set consolOverdueBalance
     *
     * @param float $consolOverdueBalance
     * @return CustomerCurrency
     */
    public function setConsolOverdueBalance($consolOverdueBalance) {
        $this->consolOverdueBalance = $consolOverdueBalance;
        return $this;
    }

    /**
     * Get consolOverdueBalance
     *
     * @return float
     */
    public function getConsolOverdueBalance() {
        return $this->consolOverdueBalance;
    }


    /**
     * Set unbilledOrders
     *
     * @param float $unbilledOrders
     * @return CustomerCurrency
     */
    public function setUnbilledOrders($unbilledOrders) {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * Get unbilledOrders
     *
     * @return float
     */
    public function getUnbilledOrders() {
        return $this->unbilledOrders;
    }


    /**
     * Set consolUnbilledOrders
     *
     * @param float $consolUnbilledOrders
     * @return CustomerCurrency
     */
    public function setConsolUnbilledOrders($consolUnbilledOrders) {
        $this->consolUnbilledOrders = $consolUnbilledOrders;
        return $this;
    }

    /**
     * Get consolUnbilledOrders
     *
     * @return float
     */
    public function getConsolUnbilledOrders() {
        return $this->consolUnbilledOrders;
    }


    /**
     * Set overrideCurrencyFormat
     *
     * @param boolean $overrideCurrencyFormat
     * @return CustomerCurrency
     */
    public function setOverrideCurrencyFormat($overrideCurrencyFormat) {
        $this->overrideCurrencyFormat = $overrideCurrencyFormat;
        return $this;
    }

    /**
     * Get overrideCurrencyFormat
     *
     * @return boolean
     */
    public function getOverrideCurrencyFormat() {
        return $this->overrideCurrencyFormat;
    }


    /**
     * Set displaySymbol
     *
     * @param string $displaySymbol
     * @return CustomerCurrency
     */
    public function setDisplaySymbol($displaySymbol) {
        $this->displaySymbol = $displaySymbol;
        return $this;
    }

    /**
     * Get displaySymbol
     *
     * @return string
     */
    public function getDisplaySymbol() {
        return $this->displaySymbol;
    }


    /**
     * Set symbolPlacement
     *
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return CustomerCurrency
     */
    public function setSymbolPlacement(CurrencySymbolPlacement $symbolPlacement) {
        $this->symbolPlacement = $symbolPlacement;
        return $this;
    }

    /**
     * Get symbolPlacement
     *
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement() {
        return $this->symbolPlacement;
    }

}