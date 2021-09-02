<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An array of name/value pairs that provide details regarding the error.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * This is the name of input field that caused an issue with the call request.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is the actual value that was passed in for the element specified in the
     * name field.
     *
     * @var string
     */
    public $value = null;
}
