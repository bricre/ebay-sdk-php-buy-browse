<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the name/value pairs for item aspects.
 */
class TypedNameValue extends AbstractModel
{
    /**
     * The text representing the name of the aspect for the name/value pair, such as
     * Color.
     *
     * @var string
     */
    public $name = null;

    /**
     * The value of the aspect for the name/value pair, such as Red.
     *
     * @var string
     */
    public $value = null;
}
