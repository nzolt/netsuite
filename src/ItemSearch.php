<?php

namespace Nzolt\NetSuite;

class ItemSearch extends SearchRecord
{

    /**
     * @var ItemSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var AssemblyItemBomSearchBasic $assemblyItemBillOfMaterialsJoin
     */
    protected $assemblyItemBillOfMaterialsJoin = null;

    /**
     * @var BinSearchBasic $binNumberJoin
     */
    protected $binNumberJoin = null;

    /**
     * @var ItemBinNumberSearchBasic $binOnHandJoin
     */
    protected $binOnHandJoin = null;

    /**
     * @var ItemSearchBasic $correlatedItemJoin
     */
    protected $correlatedItemJoin = null;

    /**
     * @var ItemRevisionSearchBasic $effectiveRevisionJoin
     */
    protected $effectiveRevisionJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var InventoryDetailSearchBasic $inventoryDetailJoin
     */
    protected $inventoryDetailJoin = null;

    /**
     * @var LocationSearchBasic $inventoryLocationJoin
     */
    protected $inventoryLocationJoin = null;

    /**
     * @var InventoryNumberSearchBasic $inventoryNumberJoin
     */
    protected $inventoryNumberJoin = null;

    /**
     * @var InventoryNumberBinSearchBasic $inventoryNumberBinOnHandJoin
     */
    protected $inventoryNumberBinOnHandJoin = null;

    /**
     * @var ItemSearchBasic $memberItemJoin
     */
    protected $memberItemJoin = null;

    /**
     * @var ItemRevisionSearchBasic $obsoleteRevisionJoin
     */
    protected $obsoleteRevisionJoin = null;

    /**
     * @var ItemSearchBasic $parentJoin
     */
    protected $parentJoin = null;

    /**
     * @var LocationSearchBasic $preferredLocationJoin
     */
    protected $preferredLocationJoin = null;

    /**
     * @var VendorSearchBasic $preferredVendorJoin
     */
    protected $preferredVendorJoin = null;

    /**
     * @var PricingSearchBasic $pricingJoin
     */
    protected $pricingJoin = null;

    /**
     * @var CustomerSearchBasic $shopperJoin
     */
    protected $shopperJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var VendorSearchBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ItemSearchBasic $basic
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AssemblyItemBomSearchBasic
     */
    public function getAssemblyItemBillOfMaterialsJoin()
    {
      return $this->assemblyItemBillOfMaterialsJoin;
    }

    /**
     * @param AssemblyItemBomSearchBasic $assemblyItemBillOfMaterialsJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setAssemblyItemBillOfMaterialsJoin($assemblyItemBillOfMaterialsJoin)
    {
      $this->assemblyItemBillOfMaterialsJoin = $assemblyItemBillOfMaterialsJoin;
      return $this;
    }

    /**
     * @return BinSearchBasic
     */
    public function getBinNumberJoin()
    {
      return $this->binNumberJoin;
    }

    /**
     * @param BinSearchBasic $binNumberJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setBinNumberJoin($binNumberJoin)
    {
      $this->binNumberJoin = $binNumberJoin;
      return $this;
    }

    /**
     * @return ItemBinNumberSearchBasic
     */
    public function getBinOnHandJoin()
    {
      return $this->binOnHandJoin;
    }

    /**
     * @param ItemBinNumberSearchBasic $binOnHandJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setBinOnHandJoin($binOnHandJoin)
    {
      $this->binOnHandJoin = $binOnHandJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getCorrelatedItemJoin()
    {
      return $this->correlatedItemJoin;
    }

    /**
     * @param ItemSearchBasic $correlatedItemJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setCorrelatedItemJoin($correlatedItemJoin)
    {
      $this->correlatedItemJoin = $correlatedItemJoin;
      return $this;
    }

    /**
     * @return ItemRevisionSearchBasic
     */
    public function getEffectiveRevisionJoin()
    {
      return $this->effectiveRevisionJoin;
    }

    /**
     * @param ItemRevisionSearchBasic $effectiveRevisionJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setEffectiveRevisionJoin($effectiveRevisionJoin)
    {
      $this->effectiveRevisionJoin = $effectiveRevisionJoin;
      return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getFileJoin()
    {
      return $this->fileJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return InventoryDetailSearchBasic
     */
    public function getInventoryDetailJoin()
    {
      return $this->inventoryDetailJoin;
    }

    /**
     * @param InventoryDetailSearchBasic $inventoryDetailJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setInventoryDetailJoin($inventoryDetailJoin)
    {
      $this->inventoryDetailJoin = $inventoryDetailJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getInventoryLocationJoin()
    {
      return $this->inventoryLocationJoin;
    }

    /**
     * @param LocationSearchBasic $inventoryLocationJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setInventoryLocationJoin($inventoryLocationJoin)
    {
      $this->inventoryLocationJoin = $inventoryLocationJoin;
      return $this;
    }

    /**
     * @return InventoryNumberSearchBasic
     */
    public function getInventoryNumberJoin()
    {
      return $this->inventoryNumberJoin;
    }

    /**
     * @param InventoryNumberSearchBasic $inventoryNumberJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setInventoryNumberJoin($inventoryNumberJoin)
    {
      $this->inventoryNumberJoin = $inventoryNumberJoin;
      return $this;
    }

    /**
     * @return InventoryNumberBinSearchBasic
     */
    public function getInventoryNumberBinOnHandJoin()
    {
      return $this->inventoryNumberBinOnHandJoin;
    }

    /**
     * @param InventoryNumberBinSearchBasic $inventoryNumberBinOnHandJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setInventoryNumberBinOnHandJoin($inventoryNumberBinOnHandJoin)
    {
      $this->inventoryNumberBinOnHandJoin = $inventoryNumberBinOnHandJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getMemberItemJoin()
    {
      return $this->memberItemJoin;
    }

    /**
     * @param ItemSearchBasic $memberItemJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setMemberItemJoin($memberItemJoin)
    {
      $this->memberItemJoin = $memberItemJoin;
      return $this;
    }

    /**
     * @return ItemRevisionSearchBasic
     */
    public function getObsoleteRevisionJoin()
    {
      return $this->obsoleteRevisionJoin;
    }

    /**
     * @param ItemRevisionSearchBasic $obsoleteRevisionJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setObsoleteRevisionJoin($obsoleteRevisionJoin)
    {
      $this->obsoleteRevisionJoin = $obsoleteRevisionJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getParentJoin()
    {
      return $this->parentJoin;
    }

    /**
     * @param ItemSearchBasic $parentJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setParentJoin($parentJoin)
    {
      $this->parentJoin = $parentJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getPreferredLocationJoin()
    {
      return $this->preferredLocationJoin;
    }

    /**
     * @param LocationSearchBasic $preferredLocationJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setPreferredLocationJoin($preferredLocationJoin)
    {
      $this->preferredLocationJoin = $preferredLocationJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getPreferredVendorJoin()
    {
      return $this->preferredVendorJoin;
    }

    /**
     * @param VendorSearchBasic $preferredVendorJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setPreferredVendorJoin($preferredVendorJoin)
    {
      $this->preferredVendorJoin = $preferredVendorJoin;
      return $this;
    }

    /**
     * @return PricingSearchBasic
     */
    public function getPricingJoin()
    {
      return $this->pricingJoin;
    }

    /**
     * @param PricingSearchBasic $pricingJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setPricingJoin($pricingJoin)
    {
      $this->pricingJoin = $pricingJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getShopperJoin()
    {
      return $this->shopperJoin;
    }

    /**
     * @param CustomerSearchBasic $shopperJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setShopperJoin($shopperJoin)
    {
      $this->shopperJoin = $shopperJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchBasic $userNotesJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchBasic $vendorJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\ItemSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
