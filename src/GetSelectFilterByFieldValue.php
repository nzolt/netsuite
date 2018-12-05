<?php

namespace Nzolt\NetSuite;

class GetSelectFilterByFieldValue
{

    /**
     * @var string $sublist
     */
    protected $sublist = null;

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $field
     * @param string $internalId
     */
    public function __construct($field, $internalId)
    {
      $this->field = $field;
      $this->internalId = $internalId;
    }

    /**
     * @return string
     */
    public function getSublist()
    {
      return $this->sublist;
    }

    /**
     * @param string $sublist
     * @return \Nzolt\NetSuite\GetSelectFilterByFieldValue
     */
    public function setSublist($sublist)
    {
      $this->sublist = $sublist;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \Nzolt\NetSuite\GetSelectFilterByFieldValue
     */
    public function setField($field)
    {
      $this->field = $field;
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
     * @return \Nzolt\NetSuite\GetSelectFilterByFieldValue
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
