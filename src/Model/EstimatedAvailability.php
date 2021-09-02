<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the estimated item availability
 * information.
 */
class EstimatedAvailability extends AbstractModel
{
    /**
     * This field is return only when the seller sets their 'display item quantity'
     * preference to Display &quot;More than 10 available&quot; in your listing (if
     * applicable). The value of this field will be &quot;10&quot;, which is the
     * threshold value. Code so that your app gracefully handles any future changes to
     * this value.
     *
     * @var int
     */
    public $availabilityThreshold = null;

    /**
     * This field is return only when the seller sets their Display Item Quantity
     * preference to Display &quot;More than 10 available&quot; in your listing (if
     * applicable). The value of this field will be MORE_THAN. This indicates that the
     * seller has more than the 'quantity display preference', which is 10, in stock
     * for this item. The following are the display item quantity preferences the
     * seller can set. Display &quot;More than 10 available&quot; in your listing (if
     * applicable) If the seller enables this preference, this field is returned as
     * long as there are more than 10 of this item in inventory. If the quantity is
     * equal to 10 or drops below 10, this field is not returned and the estimated
     * quantity of the item is returned in the estimatedAvailableQuantity field.
     * Display the exact quantity in your items If the seller enables this preference,
     * the availabilityThresholdType and availabilityThreshold fields are not returned
     * and the estimated quantity of the item is returned in the
     * estimatedAvailableQuantity field. Note: Because the quantity of an item can
     * change several times within a second, it is impossible to return the exact
     * quantity. Code so that your app gracefully handles any future changes to these
     * preferences. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityThresholdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $availabilityThresholdType = null;

    /**
     * An array of available delivery options. Valid Values: SHIP_TO_HOME,
     * SELLER_ARRANGED_LOCAL_PICKUP, IN_STORE_PICKUP, PICKUP_DROP_OFF, or
     * DIGITAL_DELIVERY Code so that your app gracefully handles any future changes to
     * this list.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/buy/browse/types/gct:DeliveryOptionsEnum'>eBay
     *                   API documentation</a>[]
     */
    public $deliveryOptions = null;

    /**
     * An enumeration value representing the inventory status of this item. Note: Be
     * sure to review the itemEndDate field to determine whether the item is available
     * for purchase. Valid Values: IN_STOCK, LIMITED_STOCK, or OUT_OF_STOCK Code so
     * that your app gracefully handles any future changes to this list. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $estimatedAvailabilityStatus = null;

    /**
     * The estimated number of this item that are available for purchase. Because the
     * quantity of an item can change several times within a second, it is impossible
     * to return the exact quantity. So instead of returning quantity, the estimated
     * availability of the item is returned.
     *
     * @var int
     */
    public $estimatedAvailableQuantity = null;

    /**
     * The estimated number of this item that have been sold.
     *
     * @var int
     */
    public $estimatedSoldQuantity = null;
}
