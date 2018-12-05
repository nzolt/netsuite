<?php

namespace Nzolt\NetSuite;

class PaymentMethodSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $account
     */
    protected $account = null;

    /**
     * @var SearchColumnBooleanField[] $creditCard
     */
    protected $creditCard = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isDebitCard
     */
    protected $isDebitCard = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchColumnSelectField[] $account
     * @return \Nzolt\NetSuite\PaymentMethodSearchRowBasic
     */
    public function setAccount(array $account = null)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCreditCard()
    {
      return $this->creditCard;
    }

    /**
     * @param SearchColumnBooleanField[] $creditCard
     * @return \Nzolt\NetSuite\PaymentMethodSearchRowBasic
     */
    public function setCreditCard(array $creditCard = null)
    {
      $this->creditCard = $creditCard;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\PaymentMethodSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\PaymentMethodSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDebitCard()
    {
      return $this->isDebitCard;
    }

    /**
     * @param SearchColumnBooleanField[] $isDebitCard
     * @return \Nzolt\NetSuite\PaymentMethodSearchRowBasic
     */
    public function setIsDebitCard(array $isDebitCard = null)
    {
      $this->isDebitCard = $isDebitCard;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\PaymentMethodSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\PaymentMethodSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

}
