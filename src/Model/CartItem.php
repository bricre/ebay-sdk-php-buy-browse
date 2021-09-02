<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the individual items in a cart.
 */
class CartItem extends AbstractModel
{
    /**
     * The identifier for the item being added to the cart. This is generated when the
     * item is added to the cart.
     *
     * @var string
     */
    public $cartItemId = null;

    /**
     * This is the subtotal of cost of a specific item in the cart. This does not
     * include taxes, shipping costs, discounts, etc. It is price * quantity.
     *
     * @var \Ebay\Buy\Browse\Model\Amount
     */
    public $cartItemSubtotal = null;

    /**
     * The primary image of the item. This is the image that appears on the eBay view
     * item page for this item.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $image = null;

    /**
     * The RESTful identifier of the item. This identifier is generated when the item
     * was listed. RESTful Item ID Format: v1|#|# For example: v1|2**********2|0
     * v1|1**********2|4**********2.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The URL of the eBay view item page for the item.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * The cost of the item.
     *
     * @var \Ebay\Buy\Browse\Model\Price
     */
    public $price = null;

    /**
     * The number of this item the buyer wants to purchase.
     *
     * @var int
     */
    public $quantity = null;
}
