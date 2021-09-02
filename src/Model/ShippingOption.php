<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the details of a shipping provider.
 */
class ShippingOption extends AbstractModel
{
    /**
     * Any per item additional shipping costs for a multi-item purchase. For example,
     * let's say the shipping cost for a power cord is $3. But for an additional cord,
     * the shipping cost is only $1. So if you bought 3 cords, the shippingCost would
     * be $3 and this value would be $2 ($1 for each additional item).
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $additionalShippingCostPerUnit = null;

    /**
     * The deadline date that the item must be purchased by in order to be received by
     * the buyer within the delivery window ( maxEstimatedDeliveryDate and
     * minEstimatedDeliveryDate fields). This field is returned only for items that are
     * eligible for 'Same Day Handling'. For these items, the value of this field is
     * what is displayed in the Delivery line on the View Item page. This value is
     * returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into
     * the local time of the buyer.
     *
     * @var string
     */
    public $cutOffDateUsedForEstimate = null;

    /**
     * If the item is being shipped by eBay's Global Shipping Program, this field
     * returns GLOBAL_SHIPPING. Otherwise this field is null. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:FulfilledThroughEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $fulfilledThrough = null;

    /**
     * Indicates if the seller has committed to shipping the item with eBay Guaranteed
     * Delivery. With eBay Guaranteed Delivery, the seller is committed to getting the
     * line item to the buyer within 4 business days or less. See the Buying items with
     * eBay Guaranteed Delivery help topic for more details about eBay Guaranteed
     * Delivery.
     *
     * @var bool
     */
    public $guaranteedDelivery = null;

    /**
     * The Global Shipping Program import charges for this item.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $importCharges = null;

    /**
     * The end date of the delivery window (latest projected delivery date). This value
     * is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into
     * the local time of the buyer. Note: For the best accuracy, always include the
     * location of where the item is be shipped in the contextualLocation values of the
     * X-EBAY-C-ENDUSERCTX request header.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * The start date of the delivery window (earliest projected delivery date). This
     * value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can
     * convert into the local time of the buyer. Note: For the best accuracy, always
     * include the location of where the item is be shipped in the contextualLocation
     * values of the X-EBAY-C-ENDUSERCTX request header.
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * The number of items used when calculating the estimation information.
     *
     * @var int
     */
    public $quantityUsedForEstimate = null;

    /**
     * The name of the shipping provider, such as FedEx, or USPS.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The final shipping cost for all the items after all discounts are applied. Note:
     * The cost does include the value-added tax (VAT) for applicable jurisdictions
     * when requested from supported marketplaces. In this case, users must pass the
     * X-EBAY-C-MARKETPLACE-ID request header specifying the supported marketplace
     * (such as EBAY_GB) to see the VAT-inclusive cost. For more information on VAT,
     * refer to VAT Obligations in the EU.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $shippingCost = null;

    /**
     * Indicates the class of the shipping cost. Valid Values: FIXED or CALCULATED Code
     * so that your app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $shippingCostType = null;

    /**
     * The type of shipping service. For example, USPS First Class.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * The container that returns the country and postal code of where the item is to
     * be shipped. These values come from the contextualLocation values in the
     * X-EBAY-C-ENDUSERCTX request header. If the header is not submitted, marketplace
     * is used.
     *
     * @var \Ebay\Buy\Browse\Model\ShipToLocation
     */
    public $shipToLocationUsedForEstimate = null;

    /**
     * Any trademark symbol, such as &trade; or &reg;, that needs to be shown in
     * superscript next to the shipping service name.
     *
     * @var string
     */
    public $trademarkSymbol = null;
}
