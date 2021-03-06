<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the response fields for checkCompatibility.
 */
class CompatibilityResponse extends AbstractModel
{
    /**
     * An enumeration value that tells you if the item is compatible with the product.
     * The values are: COMPATIBLE - Indicates the item is compatible with the product
     * specified in the request. NOT_COMPATIBLE - Indicates the item is not compatible
     * with the product specified in the request. Be sure to check all the value fields
     * to ensure they are correct as errors in the value can also cause this response.
     * UNDETERMINED - Indicates one or more attributes for the specified product are
     * missing so compatibility cannot be determined. The response returns the
     * attributes that are missing. Code so that your app gracefully handles any future
     * changes to this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CompatibilityStatus'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $compatibilityStatus = null;

    /**
     * An array of warning messages. These types of errors do not prevent the method
     * from executing but should be checked.
     *
     * @var \Ebay\Buy\Browse\Model\Error[]
     */
    public $warnings = null;
}
