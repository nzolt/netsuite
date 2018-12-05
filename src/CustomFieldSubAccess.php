<?php

namespace Nzolt\NetSuite;

class CustomFieldSubAccess
{

    /**
     * @var RecordRef $sub
     */
    protected $sub = null;

    /**
     * @var CustomizationAccessLevel $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var CustomizationSearchLevel $searchLevel
     */
    protected $searchLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getSub()
    {
      return $this->sub;
    }

    /**
     * @param RecordRef $sub
     * @return \Nzolt\NetSuite\CustomFieldSubAccess
     */
    public function setSub($sub)
    {
      $this->sub = $sub;
      return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return \Nzolt\NetSuite\CustomFieldSubAccess
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel()
    {
      return $this->searchLevel;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return \Nzolt\NetSuite\CustomFieldSubAccess
     */
    public function setSearchLevel($searchLevel)
    {
      $this->searchLevel = $searchLevel;
      return $this;
    }

}
