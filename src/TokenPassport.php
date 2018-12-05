<?php

namespace Nzolt\NetSuite;

class TokenPassport
{

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @var string $consumerKey
     */
    protected $consumerKey = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $nonce
     */
    protected $nonce = null;

    /**
     * @var int $timestamp
     */
    protected $timestamp = null;

    /**
     * @var TokenPassportSignature $signature
     */
    protected $signature = null;

    /**
     * @param string $account
     * @param string $consumerKey
     * @param string $token
     * @param string $nonce
     * @param int $timestamp
     * @param TokenPassportSignature $signature
     */
    public function __construct($account, $consumerKey, $token, $nonce, $timestamp, $signature)
    {
      $this->account = $account;
      $this->consumerKey = $consumerKey;
      $this->token = $token;
      $this->nonce = $nonce;
      $this->timestamp = $timestamp;
      $this->signature = $signature;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param string $account
     * @return \Nzolt\NetSuite\TokenPassport
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsumerKey()
    {
      return $this->consumerKey;
    }

    /**
     * @param string $consumerKey
     * @return \Nzolt\NetSuite\TokenPassport
     */
    public function setConsumerKey($consumerKey)
    {
      $this->consumerKey = $consumerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Nzolt\NetSuite\TokenPassport
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return string
     */
    public function getNonce()
    {
      return $this->nonce;
    }

    /**
     * @param string $nonce
     * @return \Nzolt\NetSuite\TokenPassport
     */
    public function setNonce($nonce)
    {
      $this->nonce = $nonce;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
      return $this->timestamp;
    }

    /**
     * @param int $timestamp
     * @return \Nzolt\NetSuite\TokenPassport
     */
    public function setTimestamp($timestamp)
    {
      $this->timestamp = $timestamp;
      return $this;
    }

    /**
     * @return TokenPassportSignature
     */
    public function getSignature()
    {
      return $this->signature;
    }

    /**
     * @param TokenPassportSignature $signature
     * @return \Nzolt\NetSuite\TokenPassport
     */
    public function setSignature($signature)
    {
      $this->signature = $signature;
      return $this;
    }

}
