<?php

namespace PureBilling\Bundle\SDKBundle\Store\V3\Charge\Action;

use PureBilling\Bundle\SDKBundle\Store\V3\Base\BaseStoreV3;
use Symfony\Component\Validator\Constraints as Assert;
use PureMachine\Bundle\SDKBundle\Store\Annotation as Store;
use PureBilling\Bundle\SDKBundle\Constraints as PBAssert;

/**
 * Class Get
 *
 * @method setId(string $billing_transaction_id)
 * @method setPropertyToExpand(array $propertiesToExpand)
 */
class Collect extends BaseStoreV3
{
    /**
     * @Store\Property(description="Previously authorized billingTransaction to collect")
     * @PBAssert\Type(type="id", idPrefixes={"billing"})
     * @Assert\NotNull()
     */

    protected $billingTransaction;

    /**
     * @Store\Property(description="amount to bill if different from the authorization amount")
     * @Assert\Type("numeric")
     * @Assert\GreaterThan(0)
     * @Assert\NotNull()
     */
    protected $amount;
}
