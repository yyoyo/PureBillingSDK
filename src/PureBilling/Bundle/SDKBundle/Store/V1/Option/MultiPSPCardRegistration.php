<?php

namespace PureBilling\Bundle\SDKBundle\Store\V1\Option;

use Symfony\Component\Validator\Constraints as Assert;
use PureMachine\Bundle\SDKBundle\Store\Annotation as Store;

class MultiPSPCardRegistration extends OptionBase
{
    /**
     * @Store\Property(description="url to post")
     * @Assert\Type("array")
     * @Assert\NotBlank()
     */
    protected $PSPList = [];
}
