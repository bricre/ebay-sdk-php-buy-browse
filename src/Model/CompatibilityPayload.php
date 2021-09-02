<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An array of attribute name/value pairs used to define a specific product. For
 * example: If you wanted to specify a specific car, one of the name/value pairs
 * would be &quot;name&quot; : &quot;Year&quot;, &quot;value&quot; :
 * &quot;2019&quot; For a list of the attributes required for cars and trucks and
 * motorcycles see Check compatibility in the Buy Integration Guide.
 */
class CompatibilityPayload extends AbstractModel
{
    /**
     * An array of attribute name/value pairs used to define a specific product. For
     * example: If you wanted to specify a specific car, one of the name/value pairs
     * would be &quot;name&quot; : &quot;Year&quot;, &quot;value&quot; :
     * &quot;2019&quot; For a list of the attributes required for cars and trucks and
     * motorcycles see Check compatibility in the Buy Integration Guide.
     *
     * @var \Ebay\Buy\Browse\Model\AttributeNameValue[]
     */
    public $compatibilityProperties = null;
}
