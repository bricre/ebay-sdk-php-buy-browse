<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that identifies whether the item is from a verified seller.
 */
class AuthenticityVerificationProgram extends AbstractModel
{
    /**
     * The URL to the Authenticity Verification program terms of use.
     *
     * @var string
     */
    public $termsWebUrl = null;
}
