<?php

namespace Nzolt\NetSuite;

class GiftCertificateItemAuthCodesList
{

    /**
     * @var GiftCertificateItemAuthCodes[] $authCodes
     */
    protected $authCodes = null;

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
     * @return GiftCertificateItemAuthCodes[]
     */
    public function getAuthCodes()
    {
      return $this->authCodes;
    }

    /**
     * @param GiftCertificateItemAuthCodes[] $authCodes
     * @return \Nzolt\NetSuite\GiftCertificateItemAuthCodesList
     */
    public function setAuthCodes(array $authCodes = null)
    {
      $this->authCodes = $authCodes;
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
     * @return \Nzolt\NetSuite\GiftCertificateItemAuthCodesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
