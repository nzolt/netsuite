<?php

namespace Nzolt\NetSuite;

class PaymentMethodVisualsList
{

    /**
     * @var PaymentMethodVisuals[] $paymentMethodVisuals
     */
    protected $paymentMethodVisuals = null;

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
     * @return PaymentMethodVisuals[]
     */
    public function getPaymentMethodVisuals()
    {
      return $this->paymentMethodVisuals;
    }

    /**
     * @param PaymentMethodVisuals[] $paymentMethodVisuals
     * @return \Nzolt\NetSuite\PaymentMethodVisualsList
     */
    public function setPaymentMethodVisuals(array $paymentMethodVisuals = null)
    {
      $this->paymentMethodVisuals = $paymentMethodVisuals;
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
     * @return \Nzolt\NetSuite\PaymentMethodVisualsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
