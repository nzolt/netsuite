<?php

namespace Nzolt\NetSuite;

class InboundShipmentSearchRow extends SearchRow
{

    /**
     * @var InboundShipmentSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var TransactionSearchRowBasic $itemReceiptJoin
     */
    protected $itemReceiptJoin = null;

    /**
     * @var TransactionSearchRowBasic $purchaseOrderJoin
     */
    protected $purchaseOrderJoin = null;

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
     * @return InboundShipmentSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param InboundShipmentSearchRowBasic $basic
     * @return \Nzolt\NetSuite\InboundShipmentSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\InboundShipmentSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getItemReceiptJoin()
    {
      return $this->itemReceiptJoin;
    }

    /**
     * @param TransactionSearchRowBasic $itemReceiptJoin
     * @return \Nzolt\NetSuite\InboundShipmentSearchRow
     */
    public function setItemReceiptJoin($itemReceiptJoin)
    {
      $this->itemReceiptJoin = $itemReceiptJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getPurchaseOrderJoin()
    {
      return $this->purchaseOrderJoin;
    }

    /**
     * @param TransactionSearchRowBasic $purchaseOrderJoin
     * @return \Nzolt\NetSuite\InboundShipmentSearchRow
     */
    public function setPurchaseOrderJoin($purchaseOrderJoin)
    {
      $this->purchaseOrderJoin = $purchaseOrderJoin;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRow
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
