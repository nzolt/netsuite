<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTaskSearch extends SearchRecord
{

    /**
     * @var ManufacturingOperationTaskSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var ManufacturingOperationTaskSearchBasic $predecessorJoin
     */
    protected $predecessorJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var TransactionSearchBasic $workOrderJoin
     */
    protected $workOrderJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ManufacturingOperationTaskSearchBasic $basic
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getPredecessorJoin()
    {
      return $this->predecessorJoin;
    }

    /**
     * @param ManufacturingOperationTaskSearchBasic $predecessorJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearch
     */
    public function setPredecessorJoin($predecessorJoin)
    {
      $this->predecessorJoin = $predecessorJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getWorkOrderJoin()
    {
      return $this->workOrderJoin;
    }

    /**
     * @param TransactionSearchBasic $workOrderJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearch
     */
    public function setWorkOrderJoin($workOrderJoin)
    {
      $this->workOrderJoin = $workOrderJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
