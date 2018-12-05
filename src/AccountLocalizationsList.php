<?php

namespace Nzolt\NetSuite;

class AccountLocalizationsList
{

    /**
     * @var AccountLocalizations[] $accountLocalizations
     */
    protected $accountLocalizations = null;

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
     * @return AccountLocalizations[]
     */
    public function getAccountLocalizations()
    {
      return $this->accountLocalizations;
    }

    /**
     * @param AccountLocalizations[] $accountLocalizations
     * @return \Nzolt\NetSuite\AccountLocalizationsList
     */
    public function setAccountLocalizations(array $accountLocalizations = null)
    {
      $this->accountLocalizations = $accountLocalizations;
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
     * @return \Nzolt\NetSuite\AccountLocalizationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
