<?php

namespace Nzolt\NetSuite;

class PaymentMethod extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $creditCard
     */
    protected $creditCard = null;

    /**
     * @var boolean $undepFunds
     */
    protected $undepFunds = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

    /**
     * @var PaymentMethodVisualsList $visualsList
     */
    protected $visualsList = null;

    /**
     * @var boolean $isDebitCard
     */
    protected $isDebitCard = null;

    /**
     * @var RecordRefList $merchantAccountsList
     */
    protected $merchantAccountsList = null;

    /**
     * @var string $payPalEmailAddress
     */
    protected $payPalEmailAddress = null;

    /**
     * @var string $expressCheckoutArrangement
     */
    protected $expressCheckoutArrangement = null;

    /**
     * @var boolean $useExpressCheckout
     */
    protected $useExpressCheckout = null;

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
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreditCard()
    {
      return $this->creditCard;
    }

    /**
     * @param boolean $creditCard
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setCreditCard($creditCard)
    {
      $this->creditCard = $creditCard;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUndepFunds()
    {
      return $this->undepFunds;
    }

    /**
     * @param boolean $undepFunds
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setUndepFunds($undepFunds)
    {
      $this->undepFunds = $undepFunds;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param RecordRef $account
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param boolean $isOnline
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return PaymentMethodVisualsList
     */
    public function getVisualsList()
    {
      return $this->visualsList;
    }

    /**
     * @param PaymentMethodVisualsList $visualsList
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setVisualsList($visualsList)
    {
      $this->visualsList = $visualsList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDebitCard()
    {
      return $this->isDebitCard;
    }

    /**
     * @param boolean $isDebitCard
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setIsDebitCard($isDebitCard)
    {
      $this->isDebitCard = $isDebitCard;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getMerchantAccountsList()
    {
      return $this->merchantAccountsList;
    }

    /**
     * @param RecordRefList $merchantAccountsList
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setMerchantAccountsList($merchantAccountsList)
    {
      $this->merchantAccountsList = $merchantAccountsList;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalEmailAddress()
    {
      return $this->payPalEmailAddress;
    }

    /**
     * @param string $payPalEmailAddress
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setPayPalEmailAddress($payPalEmailAddress)
    {
      $this->payPalEmailAddress = $payPalEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpressCheckoutArrangement()
    {
      return $this->expressCheckoutArrangement;
    }

    /**
     * @param string $expressCheckoutArrangement
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setExpressCheckoutArrangement($expressCheckoutArrangement)
    {
      $this->expressCheckoutArrangement = $expressCheckoutArrangement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseExpressCheckout()
    {
      return $this->useExpressCheckout;
    }

    /**
     * @param boolean $useExpressCheckout
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setUseExpressCheckout($useExpressCheckout)
    {
      $this->useExpressCheckout = $useExpressCheckout;
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
     * @return \Nzolt\NetSuite\PaymentMethod
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
     * @return \Nzolt\NetSuite\PaymentMethod
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
