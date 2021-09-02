<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the addItems request.
 */
class AddCartItemInput extends AbstractModel
{
    /**
     * The eBay RESTful identifier of the item you want added to the cart. RESTful Item
     * ID Format: v1|#|# For example: v1|2**********2|0 v1|1**********2|4**********2
     * For more information about item ID for RESTful APIs, see the Legacy API
     * compatibility section of the Buy APIs Overview. Maximum number of items in a
     * cart: 100.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The number of this item the buyer wants to purchase. If this value is greater
     * than the number available, the service will change this value to the number
     * available. If this happens, a warning is returned. Maximum: number available.
     *
     * @var int
     */
    public $quantity = null;
}
