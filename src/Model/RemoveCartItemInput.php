<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the removeItem request.
 */
class RemoveCartItemInput extends AbstractModel
{
    /**
     * The identifier of the item in the cart to be removed. This ID is generated when
     * the item was added to the cart.
     *
     * @var string
     */
    public $cartItemId = null;
}
