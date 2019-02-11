<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BinSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemBinNumberSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemRevisionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetailSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberBinSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PricingSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * ItemSearch
 */
class ItemSearch extends SearchRecord {

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var BinSearchBasic
     */
    protected $binNumberJoin;

    /**
     * @access public
     * @var ItemBinNumberSearchBasic
     */
    protected $binOnHandJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $correlatedItemJoin;

    /**
     * @access public
     * @var ItemRevisionSearchBasic
     */
    protected $effectiveRevisionJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var InventoryDetailSearchBasic
     */
    protected $inventoryDetailJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $inventoryLocationJoin;

    /**
     * @access public
     * @var InventoryNumberSearchBasic
     */
    protected $inventoryNumberJoin;

    /**
     * @access public
     * @var InventoryNumberBinSearchBasic
     */
    protected $inventoryNumberBinOnHandJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $memberItemJoin;

    /**
     * @access public
     * @var ItemRevisionSearchBasic
     */
    protected $obsoleteRevisionJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $parentJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $preferredLocationJoin;

    /**
     * @access public
     * @var VendorSearchBasic
     */
    protected $preferredVendorJoin;

    /**
     * @access public
     * @var PricingSearchBasic
     */
    protected $pricingJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $shopperJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var VendorSearchBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ItemSearchBasic",
    	"binNumberJoin" => "BinSearchBasic",
    	"binOnHandJoin" => "ItemBinNumberSearchBasic",
    	"correlatedItemJoin" => "ItemSearchBasic",
    	"effectiveRevisionJoin" => "ItemRevisionSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"inventoryDetailJoin" => "InventoryDetailSearchBasic",
    	"inventoryLocationJoin" => "LocationSearchBasic",
    	"inventoryNumberJoin" => "InventoryNumberSearchBasic",
    	"inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchBasic",
    	"memberItemJoin" => "ItemSearchBasic",
    	"obsoleteRevisionJoin" => "ItemRevisionSearchBasic",
    	"parentJoin" => "ItemSearchBasic",
    	"preferredLocationJoin" => "LocationSearchBasic",
    	"preferredVendorJoin" => "VendorSearchBasic",
    	"pricingJoin" => "PricingSearchBasic",
    	"shopperJoin" => "CustomerSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"vendorJoin" => "VendorSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ItemSearchBasic $basic
     * @return ItemSearch
     */
    public function setBasic(ItemSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set binNumberJoin
     *
     * @param BinSearchBasic $binNumberJoin
     * @return ItemSearch
     */
    public function setBinNumberJoin(BinSearchBasic $binNumberJoin) {
        $this->binNumberJoin = $binNumberJoin;
        return $this;
    }

    /**
     * Get binNumberJoin
     *
     * @return BinSearchBasic
     */
    public function getBinNumberJoin() {
        return $this->binNumberJoin;
    }


    /**
     * Set binOnHandJoin
     *
     * @param ItemBinNumberSearchBasic $binOnHandJoin
     * @return ItemSearch
     */
    public function setBinOnHandJoin(ItemBinNumberSearchBasic $binOnHandJoin) {
        $this->binOnHandJoin = $binOnHandJoin;
        return $this;
    }

    /**
     * Get binOnHandJoin
     *
     * @return ItemBinNumberSearchBasic
     */
    public function getBinOnHandJoin() {
        return $this->binOnHandJoin;
    }


    /**
     * Set correlatedItemJoin
     *
     * @param ItemSearchBasic $correlatedItemJoin
     * @return ItemSearch
     */
    public function setCorrelatedItemJoin(ItemSearchBasic $correlatedItemJoin) {
        $this->correlatedItemJoin = $correlatedItemJoin;
        return $this;
    }

    /**
     * Get correlatedItemJoin
     *
     * @return ItemSearchBasic
     */
    public function getCorrelatedItemJoin() {
        return $this->correlatedItemJoin;
    }


    /**
     * Set effectiveRevisionJoin
     *
     * @param ItemRevisionSearchBasic $effectiveRevisionJoin
     * @return ItemSearch
     */
    public function setEffectiveRevisionJoin(ItemRevisionSearchBasic $effectiveRevisionJoin) {
        $this->effectiveRevisionJoin = $effectiveRevisionJoin;
        return $this;
    }

    /**
     * Get effectiveRevisionJoin
     *
     * @return ItemRevisionSearchBasic
     */
    public function getEffectiveRevisionJoin() {
        return $this->effectiveRevisionJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return ItemSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin) {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * Get fileJoin
     *
     * @return FileSearchBasic
     */
    public function getFileJoin() {
        return $this->fileJoin;
    }


    /**
     * Set inventoryDetailJoin
     *
     * @param InventoryDetailSearchBasic $inventoryDetailJoin
     * @return ItemSearch
     */
    public function setInventoryDetailJoin(InventoryDetailSearchBasic $inventoryDetailJoin) {
        $this->inventoryDetailJoin = $inventoryDetailJoin;
        return $this;
    }

    /**
     * Get inventoryDetailJoin
     *
     * @return InventoryDetailSearchBasic
     */
    public function getInventoryDetailJoin() {
        return $this->inventoryDetailJoin;
    }


    /**
     * Set inventoryLocationJoin
     *
     * @param LocationSearchBasic $inventoryLocationJoin
     * @return ItemSearch
     */
    public function setInventoryLocationJoin(LocationSearchBasic $inventoryLocationJoin) {
        $this->inventoryLocationJoin = $inventoryLocationJoin;
        return $this;
    }

    /**
     * Get inventoryLocationJoin
     *
     * @return LocationSearchBasic
     */
    public function getInventoryLocationJoin() {
        return $this->inventoryLocationJoin;
    }


    /**
     * Set inventoryNumberJoin
     *
     * @param InventoryNumberSearchBasic $inventoryNumberJoin
     * @return ItemSearch
     */
    public function setInventoryNumberJoin(InventoryNumberSearchBasic $inventoryNumberJoin) {
        $this->inventoryNumberJoin = $inventoryNumberJoin;
        return $this;
    }

    /**
     * Get inventoryNumberJoin
     *
     * @return InventoryNumberSearchBasic
     */
    public function getInventoryNumberJoin() {
        return $this->inventoryNumberJoin;
    }


    /**
     * Set inventoryNumberBinOnHandJoin
     *
     * @param InventoryNumberBinSearchBasic $inventoryNumberBinOnHandJoin
     * @return ItemSearch
     */
    public function setInventoryNumberBinOnHandJoin(InventoryNumberBinSearchBasic $inventoryNumberBinOnHandJoin) {
        $this->inventoryNumberBinOnHandJoin = $inventoryNumberBinOnHandJoin;
        return $this;
    }

    /**
     * Get inventoryNumberBinOnHandJoin
     *
     * @return InventoryNumberBinSearchBasic
     */
    public function getInventoryNumberBinOnHandJoin() {
        return $this->inventoryNumberBinOnHandJoin;
    }


    /**
     * Set memberItemJoin
     *
     * @param ItemSearchBasic $memberItemJoin
     * @return ItemSearch
     */
    public function setMemberItemJoin(ItemSearchBasic $memberItemJoin) {
        $this->memberItemJoin = $memberItemJoin;
        return $this;
    }

    /**
     * Get memberItemJoin
     *
     * @return ItemSearchBasic
     */
    public function getMemberItemJoin() {
        return $this->memberItemJoin;
    }


    /**
     * Set obsoleteRevisionJoin
     *
     * @param ItemRevisionSearchBasic $obsoleteRevisionJoin
     * @return ItemSearch
     */
    public function setObsoleteRevisionJoin(ItemRevisionSearchBasic $obsoleteRevisionJoin) {
        $this->obsoleteRevisionJoin = $obsoleteRevisionJoin;
        return $this;
    }

    /**
     * Get obsoleteRevisionJoin
     *
     * @return ItemRevisionSearchBasic
     */
    public function getObsoleteRevisionJoin() {
        return $this->obsoleteRevisionJoin;
    }


    /**
     * Set parentJoin
     *
     * @param ItemSearchBasic $parentJoin
     * @return ItemSearch
     */
    public function setParentJoin(ItemSearchBasic $parentJoin) {
        $this->parentJoin = $parentJoin;
        return $this;
    }

    /**
     * Get parentJoin
     *
     * @return ItemSearchBasic
     */
    public function getParentJoin() {
        return $this->parentJoin;
    }


    /**
     * Set preferredLocationJoin
     *
     * @param LocationSearchBasic $preferredLocationJoin
     * @return ItemSearch
     */
    public function setPreferredLocationJoin(LocationSearchBasic $preferredLocationJoin) {
        $this->preferredLocationJoin = $preferredLocationJoin;
        return $this;
    }

    /**
     * Get preferredLocationJoin
     *
     * @return LocationSearchBasic
     */
    public function getPreferredLocationJoin() {
        return $this->preferredLocationJoin;
    }


    /**
     * Set preferredVendorJoin
     *
     * @param VendorSearchBasic $preferredVendorJoin
     * @return ItemSearch
     */
    public function setPreferredVendorJoin(VendorSearchBasic $preferredVendorJoin) {
        $this->preferredVendorJoin = $preferredVendorJoin;
        return $this;
    }

    /**
     * Get preferredVendorJoin
     *
     * @return VendorSearchBasic
     */
    public function getPreferredVendorJoin() {
        return $this->preferredVendorJoin;
    }


    /**
     * Set pricingJoin
     *
     * @param PricingSearchBasic $pricingJoin
     * @return ItemSearch
     */
    public function setPricingJoin(PricingSearchBasic $pricingJoin) {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * Get pricingJoin
     *
     * @return PricingSearchBasic
     */
    public function getPricingJoin() {
        return $this->pricingJoin;
    }


    /**
     * Set shopperJoin
     *
     * @param CustomerSearchBasic $shopperJoin
     * @return ItemSearch
     */
    public function setShopperJoin(CustomerSearchBasic $shopperJoin) {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * Get shopperJoin
     *
     * @return CustomerSearchBasic
     */
    public function getShopperJoin() {
        return $this->shopperJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return ItemSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ItemSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchBasic $userNotesJoin
     * @return ItemSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }


    /**
     * Set vendorJoin
     *
     * @param VendorSearchBasic $vendorJoin
     * @return ItemSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }

}