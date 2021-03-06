<?php namespace Mnel\Peach\Query\Request\Criteria;

/**
 * Contains information about the payment methods you want to retrieve.
 *
 * @package Mnel\Peach\Request\Criteria
 */
class PaymentMethod
{
    // TODO what are all of the codes??

    /** @var string */
    private $code;

    function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    public function __toString()
    {
        return $this->getCode();
    }
}
