<?php

namespace Nzolt\NetSuite;

class TokenPassportSignature
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $algorithm
     */
    protected $algorithm = null;

    /**
     * @param string $_
     * @param string $algorithm
     */
    public function __construct($_, $algorithm)
    {
      $this->_ = $_;
      $this->algorithm = $algorithm;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \Nzolt\NetSuite\TokenPassportSignature
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlgorithm()
    {
      return $this->algorithm;
    }

    /**
     * @param string $algorithm
     * @return \Nzolt\NetSuite\TokenPassportSignature
     */
    public function setAlgorithm($algorithm)
    {
      $this->algorithm = $algorithm;
      return $this;
    }

}
