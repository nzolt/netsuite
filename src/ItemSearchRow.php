<?php

namespace Nzolt\NetSuite;

class ItemSearchRow extends SearchRow
{

    /**
     * @var ItemSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var AssemblyItemBomSearchRowBasic $assemblyItemBillOfMaterialsJoin
     */
    protected $assemblyItemBillOfMaterialsJoin = null;

    /**
     * @var BinSearchRowBasic $binNumberJoin
     */
    protected $binNumberJoin = null;

    /**
     * @var ItemBinNumberSearchRowBasic $binOnHandJoin
     */
    protected $binOnHandJoin = null;

    /**
     * @var ItemSearchRowBasic $correlatedItemJoin
     */
    protected $correlatedItemJoin = null;

    /**
     * @var ItemRevisionSearchRowBasic $effectiveRevisionJoin
     */
    protected $effectiveRevisionJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var InventoryDetailSearchRowBasic $inventoryDetailJoin
     */
    protected $inventoryDetailJoin = null;

    /**
     * @var LocationSearchRowBasic $inventoryLocationJoin
     */
    protected $inventoryLocationJoin = null;

    /**
     * @var InventoryNumberSearchRowBasic $inventoryNumberJoin
     */
    protected $inventoryNumberJoin = null;

    /**
     * @var InventoryNumberBinSearchRowBasic $inventoryNumberBinOnHandJoin
     */
    protected $inventoryNumberBinOnHandJoin = null;

    /**
     * @var ItemSearchRowBasic $memberItemJoin
     */
    protected $memberItemJoin = null;

    /**
     * @var ItemRevisionSearchRowBasic $obsoleteRevisionJoin
     */
    protected $obsoleteRevisionJoin = null;

    /**
     * @var ItemSearchRowBasic $parentJoin
     */
    protected $parentJoin = null;

    /**
     * @var LocationSearchRowBasic $preferredLocationJoin
     */
    protected $preferredLocationJoin = null;

    /**
     * @var VendorSearchRowBasic $preferredVendorJoin
     */
    protected $preferredVendorJoin = null;

    /**
     * @var PricingSearchRowBasic $pricingJoin
     */
    protected $pricingJoin = null;

    /**
     * @var CustomerSearchRowBasic $shopperJoin
     */
    protected $shopperJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchRowBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var VendorSearchRowBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AssemblyItemBomSearchRowBasic
     */
    public function getAssemblyItemBillOfMaterialsJoin()
    {
      return $this->assemblyItemBillOfMaterialsJoin;
    }

    /**
     * @param AssemblyItemBomSearchRowBasic $assemblyItemBillOfMaterialsJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setAssemblyItemBillOfMaterialsJoin($assemblyItemBillOfMaterialsJoin)
    {
      $this->assemblyItemBillOfMaterialsJoin = $assemblyItemBillOfMaterialsJoin;
      return $this;
    }

    /**
     * @return BinSearchRowBasic
     */
    public function getBinNumberJoin()
    {
      return $this->binNumberJoin;
    }

    /**
     * @param BinSearchRowBasic $binNumberJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setBinNumberJoin($binNumberJoin)
    {
      $this->binNumberJoin = $binNumberJoin;
      return $this;
    }

    /**
     * @return ItemBinNumberSearchRowBasic
     */
    public function getBinOnHandJoin()
    {
      return $this->binOnHandJoin;
    }

    /**
     * @param ItemBinNumberSearchRowBasic $binOnHandJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setBinOnHandJoin($binOnHandJoin)
    {
      $this->binOnHandJoin = $binOnHandJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getCorrelatedItemJoin()
    {
      return $this->correlatedItemJoin;
    }

    /**
     * @param ItemSearchRowBasic $correlatedItemJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setCorrelatedItemJoin($correlatedItemJoin)
    {
      $this->correlatedItemJoin = $correlatedItemJoin;
      return $this;
    }

    /**
     * @return ItemRevisionSearchRowBasic
     */
    public function getEffectiveRevisionJoin()
    {
      return $this->effectiveRevisionJoin;
    }

    /**
     * @param ItemRevisionSearchRowBasic $effectiveRevisionJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setEffectiveRevisionJoin($effectiveRevisionJoin)
    {
      $this->effectiveRevisionJoin = $effectiveRevisionJoin;
      return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getFileJoin()
    {
      return $this->fileJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return InventoryDetailSearchRowBasic
     */
    public function getInventoryDetailJoin()
    {
      return $this->inventoryDetailJoin;
    }

    /**
     * @param InventoryDetailSearchRowBasic $inventoryDetailJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setInventoryDetailJoin($inventoryDetailJoin)
    {
      $this->inventoryDetailJoin = $inventoryDetailJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getInventoryLocationJoin()
    {
      return $this->inventoryLocationJoin;
    }

    /**
     * @param LocationSearchRowBasic $inventoryLocationJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setInventoryLocationJoin($inventoryLocationJoin)
    {
      $this->inventoryLocationJoin = $inventoryLocationJoin;
      return $this;
    }

    /**
     * @return InventoryNumberSearchRowBasic
     */
    public function getInventoryNumberJoin()
    {
      return $this->inventoryNumberJoin;
    }

    /**
     * @param InventoryNumberSearchRowBasic $inventoryNumberJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setInventoryNumberJoin($inventoryNumberJoin)
    {
      $this->inventoryNumberJoin = $inventoryNumberJoin;
      return $this;
    }

    /**
     * @return InventoryNumberBinSearchRowBasic
     */
    public function getInventoryNumberBinOnHandJoin()
    {
      return $this->inventoryNumberBinOnHandJoin;
    }

    /**
     * @param InventoryNumberBinSearchRowBasic $inventoryNumberBinOnHandJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setInventoryNumberBinOnHandJoin($inventoryNumberBinOnHandJoin)
    {
      $this->inventoryNumberBinOnHandJoin = $inventoryNumberBinOnHandJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getMemberItemJoin()
    {
      return $this->memberItemJoin;
    }

    /**
     * @param ItemSearchRowBasic $memberItemJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setMemberItemJoin($memberItemJoin)
    {
      $this->memberItemJoin = $memberItemJoin;
      return $this;
    }

    /**
     * @return ItemRevisionSearchRowBasic
     */
    public function getObsoleteRevisionJoin()
    {
      return $this->obsoleteRevisionJoin;
    }

    /**
     * @param ItemRevisionSearchRowBasic $obsoleteRevisionJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setObsoleteRevisionJoin($obsoleteRevisionJoin)
    {
      $this->obsoleteRevisionJoin = $obsoleteRevisionJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getParentJoin()
    {
      return $this->parentJoin;
    }

    /**
     * @param ItemSearchRowBasic $parentJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setParentJoin($parentJoin)
    {
      $this->parentJoin = $parentJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getPreferredLocationJoin()
    {
      return $this->preferredLocationJoin;
    }

    /**
     * @param LocationSearchRowBasic $preferredLocationJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setPreferredLocationJoin($preferredLocationJoin)
    {
      $this->preferredLocationJoin = $preferredLocationJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getPreferredVendorJoin()
    {
      return $this->preferredVendorJoin;
    }

    /**
     * @param VendorSearchRowBasic $preferredVendorJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setPreferredVendorJoin($preferredVendorJoin)
    {
      $this->preferredVendorJoin = $preferredVendorJoin;
      return $this;
    }

    /**
     * @return PricingSearchRowBasic
     */
    public function getPricingJoin()
    {
      return $this->pricingJoin;
    }

    /**
     * @param PricingSearchRowBasic $pricingJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setPricingJoin($pricingJoin)
    {
      $this->pricingJoin = $pricingJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getShopperJoin()
    {
      return $this->shopperJoin;
    }

    /**
     * @param CustomerSearchRowBasic $shopperJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setShopperJoin($shopperJoin)
    {
      $this->shopperJoin = $shopperJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchRowBasic $userNotesJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\ItemSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
