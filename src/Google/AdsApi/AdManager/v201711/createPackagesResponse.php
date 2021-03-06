<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createPackagesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201711\Package[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201711\Package[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\Package[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\Package[] $rval
     * @return \Google\AdsApi\AdManager\v201711\createPackagesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
