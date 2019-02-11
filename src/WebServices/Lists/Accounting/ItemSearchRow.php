<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BinSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemBinNumberSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemRevisionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetailSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberBinSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PricingSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * ItemSearchRow
 */
class ItemSearchRow extends SearchRow {

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var BinSearchRowBasic
     */
    protected $binNumberJoin;

    /**
     * @access public
     * @var ItemBinNumberSearchRowBasic
     */
    protected $binOnHandJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $correlatedItemJoin;

    /**
     * @access public
     * @var ItemRevisionSearchRowBasic
     */
    protected $effectiveRevisionJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var InventoryDetailSearchRowBasic
     */
    protected $inventoryDetailJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $inventoryLocationJoin;

    /**
     * @access public
     * @var InventoryNumberSearchRowBasic
     */
    protected $inventoryNumberJoin;

    /**
     * @access public
     * @var InventoryNumberBinSearchRowBasic
     */
    protected $inventoryNumberBinOnHandJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $memberItemJoin;

    /**
     * @access public
     * @var ItemRevisionSearchRowBasic
     */
    protected $obsoleteRevisionJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $parentJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $preferredLocationJoin;

    /**
     * @access public
     * @var VendorSearchRowBasic
     */
    protected $preferredVendorJoin;

    /**
     * @access public
     * @var PricingSearchRowBasic
     */
    protected $pricingJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $shopperJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchRowBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var VendorSearchRowBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ItemSearchRowBasic",
    	"binNumberJoin" => "BinSearchRowBasic",
    	"binOnHandJoin" => "ItemBinNumberSearchRowBasic",
    	"correlatedItemJoin" => "ItemSearchRowBasic",
    	"effectiveRevisionJoin" => "ItemRevisionSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
    	"inventoryLocationJoin" => "LocationSearchRowBasic",
    	"inventoryNumberJoin" => "InventoryNumberSearchRowBasic",
    	"inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchRowBasic",
    	"memberItemJoin" => "ItemSearchRowBasic",
    	"obsoleteRevisionJoin" => "ItemRevisionSearchRowBasic",
    	"parentJoin" => "ItemSearchRowBasic",
    	"preferredLocationJoin" => "LocationSearchRowBasic",
    	"preferredVendorJoin" => "VendorSearchRowBasic",
    	"pricingJoin" => "PricingSearchRowBasic",
    	"shopperJoin" => "CustomerSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"vendorJoin" => "VendorSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ItemSearchRowBasic $basic
     * @return ItemSearchRow
     */
    public function setBasic(ItemSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set binNumberJoin
     *
     * @param BinSearchRowBasic $binNumberJoin
     * @return ItemSearchRow
     */
    public function setBinNumberJoin(BinSearchRowBasic $binNumberJoin) {
        $this->binNumberJoin = $binNumberJoin;
        return $this;
    }

    /**
     * Get binNumberJoin
     *
     * @return BinSearchRowBasic
     */
    public function getBinNumberJoin() {
        return $this->binNumberJoin;
    }


    /**
     * Set binOnHandJoin
     *
     * @param ItemBinNumberSearchRowBasic $binOnHandJoin
     * @return ItemSearchRow
     */
    public function setBinOnHandJoin(ItemBinNumberSearchRowBasic $binOnHandJoin) {
        $this->binOnHandJoin = $binOnHandJoin;
        return $this;
    }

    /**
     * Get binOnHandJoin
     *
     * @return ItemBinNumberSearchRowBasic
     */
    public function getBinOnHandJoin() {
        return $this->binOnHandJoin;
    }


    /**
     * Set correlatedItemJoin
     *
     * @param ItemSearchRowBasic $correlatedItemJoin
     * @return ItemSearchRow
     */
    public function setCorrelatedItemJoin(ItemSearchRowBasic $correlatedItemJoin) {
        $this->correlatedItemJoin = $correlatedItemJoin;
        return $this;
    }

    /**
     * Get correlatedItemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getCorrelatedItemJoin() {
        return $this->correlatedItemJoin;
    }


    /**
     * Set effectiveRevisionJoin
     *
     * @param ItemRevisionSearchRowBasic $effectiveRevisionJoin
     * @return ItemSearchRow
     */
    public function setEffectiveRevisionJoin(ItemRevisionSearchRowBasic $effectiveRevisionJoin) {
        $this->effectiveRevisionJoin = $effectiveRevisionJoin;
        return $this;
    }

    /**
     * Get effectiveRevisionJoin
     *
     * @return ItemRevisionSearchRowBasic
     */
    public function getEffectiveRevisionJoin() {
        return $this->effectiveRevisionJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return ItemSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin) {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * Get fileJoin
     *
     * @return FileSearchRowBasic
     */
    public function getFileJoin() {
        return $this->fileJoin;
    }


    /**
     * Set inventoryDetailJoin
     *
     * @param InventoryDetailSearchRowBasic $inventoryDetailJoin
     * @return ItemSearchRow
     */
    public function setInventoryDetailJoin(InventoryDetailSearchRowBasic $inventoryDetailJoin) {
        $this->inventoryDetailJoin = $inventoryDetailJoin;
        return $this;
    }

    /**
     * Get inventoryDetailJoin
     *
     * @return InventoryDetailSearchRowBasic
     */
    public function getInventoryDetailJoin() {
        return $this->inventoryDetailJoin;
    }


    /**
     * Set inventoryLocationJoin
     *
     * @param LocationSearchRowBasic $inventoryLocationJoin
     * @return ItemSearchRow
     */
    public function setInventoryLocationJoin(LocationSearchRowBasic $inventoryLocationJoin) {
        $this->inventoryLocationJoin = $inventoryLocationJoin;
        return $this;
    }

    /**
     * Get inventoryLocationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getInventoryLocationJoin() {
        return $this->inventoryLocationJoin;
    }


    /**
     * Set inventoryNumberJoin
     *
     * @param InventoryNumberSearchRowBasic $inventoryNumberJoin
     * @return ItemSearchRow
     */
    public function setInventoryNumberJoin(InventoryNumberSearchRowBasic $inventoryNumberJoin) {
        $this->inventoryNumberJoin = $inventoryNumberJoin;
        return $this;
    }

    /**
     * Get inventoryNumberJoin
     *
     * @return InventoryNumberSearchRowBasic
     */
    public function getInventoryNumberJoin() {
        return $this->inventoryNumberJoin;
    }


    /**
     * Set inventoryNumberBinOnHandJoin
     *
     * @param InventoryNumberBinSearchRowBasic $inventoryNumberBinOnHandJoin
     * @return ItemSearchRow
     */
    public function setInventoryNumberBinOnHandJoin(InventoryNumberBinSearchRowBasic $inventoryNumberBinOnHandJoin) {
        $this->inventoryNumberBinOnHandJoin = $inventoryNumberBinOnHandJoin;
        return $this;
    }

    /**
     * Get inventoryNumberBinOnHandJoin
     *
     * @return InventoryNumberBinSearchRowBasic
     */
    public function getInventoryNumberBinOnHandJoin() {
        return $this->inventoryNumberBinOnHandJoin;
    }


    /**
     * Set memberItemJoin
     *
     * @param ItemSearchRowBasic $memberItemJoin
     * @return ItemSearchRow
     */
    public function setMemberItemJoin(ItemSearchRowBasic $memberItemJoin) {
        $this->memberItemJoin = $memberItemJoin;
        return $this;
    }

    /**
     * Get memberItemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getMemberItemJoin() {
        return $this->memberItemJoin;
    }


    /**
     * Set obsoleteRevisionJoin
     *
     * @param ItemRevisionSearchRowBasic $obsoleteRevisionJoin
     * @return ItemSearchRow
     */
    public function setObsoleteRevisionJoin(ItemRevisionSearchRowBasic $obsoleteRevisionJoin) {
        $this->obsoleteRevisionJoin = $obsoleteRevisionJoin;
        return $this;
    }

    /**
     * Get obsoleteRevisionJoin
     *
     * @return ItemRevisionSearchRowBasic
     */
    public function getObsoleteRevisionJoin() {
        return $this->obsoleteRevisionJoin;
    }


    /**
     * Set parentJoin
     *
     * @param ItemSearchRowBasic $parentJoin
     * @return ItemSearchRow
     */
    public function setParentJoin(ItemSearchRowBasic $parentJoin) {
        $this->parentJoin = $parentJoin;
        return $this;
    }

    /**
     * Get parentJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getParentJoin() {
        return $this->parentJoin;
    }


    /**
     * Set preferredLocationJoin
     *
     * @param LocationSearchRowBasic $preferredLocationJoin
     * @return ItemSearchRow
     */
    public function setPreferredLocationJoin(LocationSearchRowBasic $preferredLocationJoin) {
        $this->preferredLocationJoin = $preferredLocationJoin;
        return $this;
    }

    /**
     * Get preferredLocationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getPreferredLocationJoin() {
        return $this->preferredLocationJoin;
    }


    /**
     * Set preferredVendorJoin
     *
     * @param VendorSearchRowBasic $preferredVendorJoin
     * @return ItemSearchRow
     */
    public function setPreferredVendorJoin(VendorSearchRowBasic $preferredVendorJoin) {
        $this->preferredVendorJoin = $preferredVendorJoin;
        return $this;
    }

    /**
     * Get preferredVendorJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getPreferredVendorJoin() {
        return $this->preferredVendorJoin;
    }


    /**
     * Set pricingJoin
     *
     * @param PricingSearchRowBasic $pricingJoin
     * @return ItemSearchRow
     */
    public function setPricingJoin(PricingSearchRowBasic $pricingJoin) {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * Get pricingJoin
     *
     * @return PricingSearchRowBasic
     */
    public function getPricingJoin() {
        return $this->pricingJoin;
    }


    /**
     * Set shopperJoin
     *
     * @param CustomerSearchRowBasic $shopperJoin
     * @return ItemSearchRow
     */
    public function setShopperJoin(CustomerSearchRowBasic $shopperJoin) {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * Get shopperJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getShopperJoin() {
        return $this->shopperJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return ItemSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ItemSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchRowBasic $userNotesJoin
     * @return ItemSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }


    /**
     * Set vendorJoin
     *
     * @param VendorSearchRowBasic $vendorJoin
     * @return ItemSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }

}