<?php

namespace Nzolt\NetSuite;

class InboundShipmentSearch extends SearchRecord
{

    /**
     * @var InboundShipmentSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var TransactionSearchBasic $itemReceiptJoin
     */
    protected $itemReceiptJoin = null;

    /**
     * @var TransactionSearchBasic $purchaseOrderJoin
     */
    protected $purchaseOrderJoin = null;

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
     * @return InboundShipmentSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param InboundShipmentSearchBasic $basic
     * @return \Nzolt\NetSuite\InboundShipmentSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\InboundShipmentSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getItemReceiptJoin()
    {
      return $this->itemReceiptJoin;
    }

    /**
     * @param TransactionSearchBasic $itemReceiptJoin
     * @return \Nzolt\NetSuite\InboundShipmentSearch
     */
    public function setItemReceiptJoin($itemReceiptJoin)
    {
      $this->itemReceiptJoin = $itemReceiptJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getPurchaseOrderJoin()
    {
      return $this->purchaseOrderJoin;
    }

    /**
     * @param TransactionSearchBasic $purchaseOrderJoin
     * @return \Nzolt\NetSuite\InboundShipmentSearch
     */
    public function setPurchaseOrderJoin($purchaseOrderJoin)
    {
      $this->purchaseOrderJoin = $purchaseOrderJoin;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearch
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
     * @return \Nzolt\NetSuite\InboundShipmentSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
