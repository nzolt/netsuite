<?php

namespace Nzolt\NetSuite;

class ItemAvailabilityFilter
{

    /**
     * @var RecordRefList $item
     */
    protected $item = null;

    /**
     * @var \DateTime $lastQtyAvailableChange
     */
    protected $lastQtyAvailableChange = null;

    /**
     * @param RecordRefList $item
     */
    public function __construct($item)
    {
      $this->item = $item;
    }

    /**
     * @return RecordRefList
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRefList $item
     * @return \Nzolt\NetSuite\ItemAvailabilityFilter
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastQtyAvailableChange()
    {
      if ($this->lastQtyAvailableChange == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastQtyAvailableChange);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastQtyAvailableChange
     * @return \Nzolt\NetSuite\ItemAvailabilityFilter
     */
    public function setLastQtyAvailableChange(\DateTime $lastQtyAvailableChange = null)
    {
      if ($lastQtyAvailableChange == null) {
       $this->lastQtyAvailableChange = null;
      } else {
        $this->lastQtyAvailableChange = $lastQtyAvailableChange->format(\DateTime::ATOM);
      }
      return $this;
    }

}
