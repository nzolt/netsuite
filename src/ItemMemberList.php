<?php

namespace Nzolt\NetSuite;

class ItemMemberList
{

    /**
     * @var ItemMember[] $itemMember
     */
    protected $itemMember = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return ItemMember[]
     */
    public function getItemMember()
    {
      return $this->itemMember;
    }

    /**
     * @param ItemMember[] $itemMember
     * @return \Nzolt\NetSuite\ItemMemberList
     */
    public function setItemMember(array $itemMember = null)
    {
      $this->itemMember = $itemMember;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\ItemMemberList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
