<?php

namespace Nzolt\NetSuite;

class DateCustomFieldRef extends CustomFieldRef
{

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param \DateTime $value
     */
    public function __construct($internalId, $scriptId, \DateTime $value)
    {
      parent::__construct($internalId, $scriptId);
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Nzolt\NetSuite\DateCustomFieldRef
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
