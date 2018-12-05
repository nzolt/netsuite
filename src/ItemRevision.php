<?php

namespace Nzolt\NetSuite;

class ItemRevision extends Record
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \DateTime $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var \DateTime $obsoleteDate
     */
    protected $obsoleteDate = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $inactive
     */
    protected $inactive = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\ItemRevision
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\ItemRevision
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\ItemRevision
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
     * @return \Nzolt\NetSuite\ItemRevision
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
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\ItemRevision
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param boolean $inactive
     * @return \Nzolt\NetSuite\ItemRevision
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\ItemRevision
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\ItemRevision
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
