<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the shipping information.
 */
class ShippingOptionSummary extends AbstractModel
{
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
     * The end date of the delivery window (latest projected delivery date). This value
     * is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into
     * the local time of the buyer. Note: For the best accuracy, always include the
     * contextualLocation values in the X-EBAY-C-ENDUSERCTX request header.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * The start date of the delivery window (earliest projected delivery date). This
     * value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can
     * convert into the local time of the buyer. Note: For the best accuracy, always
     * include the contextualLocation values in the X-EBAY-C-ENDUSERCTX request header.
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * This is the estimated price to ship the item. The price includes the value-added
     * tax (VAT) for applicable jurisdictions when requested from supported
     * marketplaces. In this case, users must do one or more of the following to see
     * VAT-inclusive pricing: Pass the X-EBAY-C-MARKETPLACE-ID request header
     * specifying the supported marketplace (such as EBAY_GB) Pass the
     * contextualLocation values for the supported marketplace in the
     * X-EBAY-C-ENDUSERCTX request header Specify the supported marketplace using the
     * deliveryCountry filter URI parameter (such as filter=deliveryCountry:GB) Note:
     * For more information on VAT, refer to VAT Obligations in the EU.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $shippingCost = null;

    /**
     * Indicates the type of shipping used to ship the item. Possible values are FIXED
     * (flat-rate shipping) and CALCULATED (shipping cost calculated based on item and
     * buyer location).
     *
     * @var string
     */
    public $shippingCostType = null;
}
