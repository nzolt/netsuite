<?php

namespace Nzolt\NetSuite;

class ItemMember
{

    /**
     * @var string $memberDescr
     */
    protected $memberDescr = null;

    /**
     * @var float $componentYield
     */
    protected $componentYield = null;

    /**
     * @var float $bomQuantity
     */
    protected $bomQuantity = null;

    /**
     * @var ItemSource $itemSource
     */
    protected $itemSource = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $memberUnit
     */
    protected $memberUnit = null;

    /**
     * @var VsoeDeferral $vsoeDeferral
     */
    protected $vsoeDeferral = null;

    /**
     * @var VsoePermitDiscount $vsoePermitDiscount
     */
    protected $vsoePermitDiscount = null;

    /**
     * @var boolean $vsoeDelivered
     */
    protected $vsoeDelivered = null;

    /**
     * @var RecordRef $taxSchedule
     */
    protected $taxSchedule = null;

    /**
     * @var string $taxcode
     */
    protected $taxcode = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var float $taxrate
     */
    protected $taxrate = null;

    /**
     * @var \DateTime $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var \DateTime $obsoleteDate
     */
    protected $obsoleteDate = null;

    /**
     * @var RecordRef $effectiveRevision
     */
    protected $effectiveRevision = null;

    /**
     * @var RecordRef $obsoleteRevision
     */
    protected $obsoleteRevision = null;

    /**
     * @var int $lineNumber
     */
    protected $lineNumber = null;

    /**
     * @var string $memberKey
     */
    protected $memberKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMemberDescr()
    {
      return $this->memberDescr;
    }

    /**
     * @param string $memberDescr
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setMemberDescr($memberDescr)
    {
      $this->memberDescr = $memberDescr;
      return $this;
    }

    /**
     * @return float
     */
    public function getComponentYield()
    {
      return $this->componentYield;
    }

    /**
     * @param float $componentYield
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setComponentYield($componentYield)
    {
      $this->componentYield = $componentYield;
      return $this;
    }

    /**
     * @return float
     */
    public function getBomQuantity()
    {
      return $this->bomQuantity;
    }

    /**
     * @param float $bomQuantity
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setBomQuantity($bomQuantity)
    {
      $this->bomQuantity = $bomQuantity;
      return $this;
    }

    /**
     * @return ItemSource
     */
    public function getItemSource()
    {
      return $this->itemSource;
    }

    /**
     * @param ItemSource $itemSource
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setItemSource($itemSource)
    {
      $this->itemSource = $itemSource;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemberUnit()
    {
      return $this->memberUnit;
    }

    /**
     * @param string $memberUnit
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setMemberUnit($memberUnit)
    {
      $this->memberUnit = $memberUnit;
      return $this;
    }

    /**
     * @return VsoeDeferral
     */
    public function getVsoeDeferral()
    {
      return $this->vsoeDeferral;
    }

    /**
     * @param VsoeDeferral $vsoeDeferral
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setVsoeDeferral($vsoeDeferral)
    {
      $this->vsoeDeferral = $vsoeDeferral;
      return $this;
    }

    /**
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount()
    {
      return $this->vsoePermitDiscount;
    }

    /**
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setVsoePermitDiscount($vsoePermitDiscount)
    {
      $this->vsoePermitDiscount = $vsoePermitDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVsoeDelivered()
    {
      return $this->vsoeDelivered;
    }

    /**
     * @param boolean $vsoeDelivered
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setVsoeDelivered($vsoeDelivered)
    {
      $this->vsoeDelivered = $vsoeDelivered;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxSchedule()
    {
      return $this->taxSchedule;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setTaxSchedule($taxSchedule)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxcode()
    {
      return $this->taxcode;
    }

    /**
     * @param string $taxcode
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setTaxcode($taxcode)
    {
      $this->taxcode = $taxcode;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxrate()
    {
      return $this->taxrate;
    }

    /**
     * @param float $taxrate
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setTaxrate($taxrate)
    {
      $this->taxrate = $taxrate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
      if ($this->effectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveDate
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
      if ($effectiveDate == null) {
       $this->effectiveDate = null;
      } else {
        $this->effectiveDate = $effectiveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getObsoleteDate()
    {
      if ($this->obsoleteDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->obsoleteDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $obsoleteDate
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setObsoleteDate(\DateTime $obsoleteDate = null)
    {
      if ($obsoleteDate == null) {
       $this->obsoleteDate = null;
      } else {
        $this->obsoleteDate = $obsoleteDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEffectiveRevision()
    {
      return $this->effectiveRevision;
    }

    /**
     * @param RecordRef $effectiveRevision
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setEffectiveRevision($effectiveRevision)
    {
      $this->effectiveRevision = $effectiveRevision;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getObsoleteRevision()
    {
      return $this->obsoleteRevision;
    }

    /**
     * @param RecordRef $obsoleteRevision
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setObsoleteRevision($obsoleteRevision)
    {
      $this->obsoleteRevision = $obsoleteRevision;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
      return $this->lineNumber;
    }

    /**
     * @param int $lineNumber
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setLineNumber($lineNumber)
    {
      $this->lineNumber = $lineNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemberKey()
    {
      return $this->memberKey;
    }

    /**
     * @param string $memberKey
     * @return \Nzolt\NetSuite\ItemMember
     */
    public function setMemberKey($memberKey)
    {
      $this->memberKey = $memberKey;
      return $this;
    }

}
