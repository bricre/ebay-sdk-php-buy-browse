<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the details of a specific item.
 */
class ItemSummary extends AbstractModel
{
    /**
     * An array of containers with the URLs for the images that are in addition to the
     * primary image. The primary image is returned in the image.imageUrl field.
     *
     * @var \Ebay\Buy\Browse\Model\Image[]
     */
    public $additionalImages = null;

    /**
     * This indicates if the item is for adults only. For more information about
     * adult-only items on eBay, see Adult items policy for sellers and Adult-Only
     * items on eBay for buyers.
     *
     * @var bool
     */
    public $adultOnly = null;

    /**
     * This boolean attribute indicates if coupons are available for the item.
     *
     * @var bool
     */
    public $availableCoupons = null;

    /**
     * This integer value indicates the total number of bids that have been placed for
     * an auction item. This field is only returned for auction items.
     *
     * @var int
     */
    public $bidCount = null;

    /**
     * A comma separated list of all the purchase options available for the item.
     * Values Returned: FIXED_PRICE - Indicates the buyer can purchase the item for a
     * set price using the Buy It Now button. AUCTION - Indicates the buyer can place a
     * bid for the item. After the first bid is placed, this becomes a live auction
     * item and is the only buying option for this item. BEST_OFFER - Items where the
     * buyer can send the seller a price they're willing to pay for the item. The
     * seller can accept, reject, or send a counter offer. For details about Best
     * Offer, see Best Offer. Code so that your app gracefully handles any future
     * changes to this list.
     *
     * @var string[]
     */
    public $buyingOptions = null;

    /**
     * This container returns the primary category ID of the item (as well as the
     * secondary category if the item was listed in two categories).
     *
     * @var \Ebay\Buy\Browse\Model\Category[]
     */
    public $categories = null;

    /**
     * This indicates how well the item matches the compatibility_filter product
     * attributes. Valid Values: EXACT or POSSIBLE Code so that your app gracefully
     * handles any future changes to this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CompatibilityMatchEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $compatibilityMatch = null;

    /**
     * This container returns only the product attributes that are compatible with the
     * item. These attributes were specified in the compatibility_filter in the
     * request. This means that if you passed in 5 attributes and only 4 are
     * compatible, only those 4 are returned. If none of the attributes are compatible,
     * this container is not returned.
     *
     * @var \Ebay\Buy\Browse\Model\CompatibilityProperty[]
     */
    public $compatibilityProperties = null;

    /**
     * The text describing the condition of the item, such as New or Used. For a list
     * of condition names, see Item Condition IDs and Names. Code so that your app
     * gracefully handles any future changes to this list. Note: In all eBay
     * marketplaces, Condition ID 2000 now maps to an item condition of 'Certified
     * Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified
     * Refurbished', a seller must be pre-qualified by eBay for this feature.
     *
     * @var string
     */
    public $condition = null;

    /**
     * The identifier of the condition of the item. For example, 1000 is the identifier
     * for NEW. For a list of condition names and IDs, see Item Condition IDs and
     * Names. Code so that your app gracefully handles any future changes to this list.
     * Note: In all eBay marketplaces, Condition ID 2000 now maps to an item condition
     * of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item
     * as 'Certified Refurbished', a seller must be pre-qualified by eBay for this
     * feature.
     *
     * @var string
     */
    public $conditionId = null;

    /**
     * This container returns the current highest bid for an auction item. The value
     * field shows the dollar value of the current highest bid, and the currency field
     * (3-digit ISO code) denotes the currency associated with that bid value. This
     * field is only returned for auction items.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $currentBidPrice = null;

    /**
     * This container returns the distance away that the item is from the
     * pickupPostalCode value that was supplied in the method request. This container
     * is only returned if the 'local pickup' filter fields are used in the request.
     *
     * @var \Ebay\Buy\Browse\Model\TargetLocation
     */
    public $distanceFromPickupLocation = null;

    /**
     * This indicates the European energy efficiency rating (EEK) of the item. Energy
     * efficiency ratings apply to products listed by commercial vendors in electronics
     * categories only. Currently, this field is only applicable for the Germany site,
     * and is only returned if the seller specified the energy efficiency rating
     * through item specifics at listing time. Rating values include A+++, A++, A+, A,
     * B, C, D, E, F, and G.
     *
     * @var string
     */
    public $energyEfficiencyClass = null;

    /**
     * An ePID is the eBay product identifier of a product from the eBay product
     * catalog. This indicates the product in which the item belongs.
     *
     * @var string
     */
    public $epid = null;

    /**
     * The URL to the primary image of the item.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $image = null;

    /**
     * The URL to the View Item page of the item, which includes the affiliate tracking
     * ID. This field is only returned if the seller enables affiliate tracking for the
     * item by including the X-EBAY-C-ENDUSERCTX request header in the method. Note:
     * eBay Partner Network, in order to receive a commission for your sales, you must
     * use this URL to forward your buyer to the ebay.com site.
     *
     * @var string
     */
    public $itemAffiliateWebUrl = null;

    /**
     * The date and time up to which the item can be purchased. This value is returned
     * in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local
     * time of the buyer. Note: This field is not returned for Good 'Til Cancelled
     * (GTC) listings.
     *
     * @var string
     */
    public $itemEndDate = null;

    /**
     * The HATEOAS reference of the parent page of the item group. An item group is an
     * item that has various aspect differences, such as color, size, storage capacity,
     * etc. Note: This field is returned only for item groups.
     *
     * @var string
     */
    public $itemGroupHref = null;

    /**
     * The indicates the item group type. An item group is an item that has various
     * aspect differences, such as color, size, storage capacity, etc. Currently only
     * the SELLER_DEFINED_VARIATIONS is supported and indicates this is an item group
     * created by the seller. Note: This field is returned only for item groups. Code
     * so that your app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $itemGroupType = null;

    /**
     * The URI for the Browse API getItem method, which can be used to retrieve more
     * details about items in the search results.
     *
     * @var string
     */
    public $itemHref = null;

    /**
     * The unique RESTful identifier of the item.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * This container returns the location of the item. This container consists of
     * fields you typically see for an address, including postal code, county,
     * state/province, street address, city, and country (2-digit ISO code).
     *
     * @var \Ebay\Buy\Browse\Model\ItemLocationImpl
     */
    public $itemLocation = null;

    /**
     * The URL to the View Item page of the item. This enables you to include a
     * &quot;Report Item on eBay&quot; hyperlink that takes the buyer to the View Item
     * page on eBay. From there they can report any issues regarding this item to eBay.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * The unique identifier of the eBay listing that contains the item. This is the
     * traditional/legacy ID that is often seen in the URL of the listing View Item
     * page.
     *
     * @var string
     */
    public $legacyItemId = null;

    /**
     * This container is returned if the item is eligible for a seller discount and
     * contains the item's original price, and the seller discount amount and
     * percentage.
     *
     * @var \Ebay\Buy\Browse\Model\MarketingPrice
     */
    public $marketingPrice = null;

    /**
     * This container returns the local pickup options available to the buyer. This
     * container is only returned if the user is searching for local pickup items and
     * set the local pickup filters in the method request.
     *
     * @var \Ebay\Buy\Browse\Model\PickupOptionSummary[]
     */
    public $pickupOptions = null;

    /**
     * The price of the item after it has been converted into another currency. The
     * price includes the value-added tax (VAT) for applicable jurisdictions when
     * requested from supported marketplaces. In this case, users must do one or more
     * of the following to see VAT-inclusive pricing: Pass the X-EBAY-C-MARKETPLACE-ID
     * request header specifying the supported marketplace (such as EBAY_GB) Pass the
     * contextualLocation values for the supported marketplace in the
     * X-EBAY-C-ENDUSERCTX request header Specify the supported marketplace using the
     * deliveryCountry filter URI parameter (such as filter=deliveryCountry:GB) Note:
     * For more information on VAT, refer to VAT Obligations in the EU.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $price = null;

    /**
     * Indicates when in the buying flow the item's price can appear for minimum
     * advertised price (MAP) items, which is the lowest price a retailer can
     * advertise/show for this item. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PriceDisplayConditionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priceDisplayCondition = null;

    /**
     * An array of the qualified programs available for the item, such as EBAY_PLUS,
     * AUTHENTICITY_GUARANTEE, and AUTHENTICITY_VERIFICATION. eBay Plus is a premium
     * account option for buyers, which provides benefits such as fast free domestic
     * shipping and free returns on selected items. Top-Rated eBay sellers must opt in
     * to eBay Plus to be able to offer the program on qualifying listings. Sellers
     * must commit to next-day delivery of those items. Note: eBay Plus is available
     * only to buyers in Germany, Austria, and Australia marketplaces. The eBay
     * Authenticity Guarantee program enables third-party authenticators to perform
     * authentication verification inspections on items such as watches and sneakers.
     *
     * @var string[]
     */
    public $qualifiedPrograms = null;

    /**
     * This container returns basic information about the seller of the item, such as
     * name, feedback score, etc.
     *
     * @var \Ebay\Buy\Browse\Model\Seller
     */
    public $seller = null;

    /**
     * This container returns the shipping options available to ship the item.
     *
     * @var \Ebay\Buy\Browse\Model\ShippingOptionSummary[]
     */
    public $shippingOptions = null;

    /**
     * This text string is derived from the item condition and the item aspects (such
     * as size, color, capacity, model, brand, etc.). Sometimes the title doesn't give
     * enough information but the description is too big. Surfacing the
     * shortDescription can often provide buyers with the additional information that
     * could help them make a buying decision. For example: &quot; title&quot;:
     * &quot;Petrel U42W FPV Drone RC Quadcopter w/HD Camera Live Video One Key Off /
     * Landing&quot;, &quot;shortDescription&quot;: &quot;1 U42W Quadcopter. Syma
     * X5SW-V3 Wifi FPV RC Drone Quadcopter 2.4Ghz 6-Axis Gyro with Headless Mode. Syma
     * X20 Pocket Drone 2.4Ghz Mini RC Quadcopter Headless Mode Altitude Hold. One Key
     * Take Off / Landing function: allow beginner to easy to fly the drone without any
     * skill.&quot;, Restriction: This field is returned by the search method only when
     * fieldgroups = EXTENDED.
     *
     * @var string
     */
    public $shortDescription = null;

    /**
     * An array of thumbnail images for the item.
     *
     * @var \Ebay\Buy\Browse\Model\Image[]
     */
    public $thumbnailImages = null;

    /**
     * This indicates if the item is a top-rated plus item. There are three benefits of
     * a top-rated plus item: a minimum 30-day money-back return policy, shipping the
     * item in 1 business day with tracking provided, and the added comfort of knowing
     * that this item is from an experienced seller with the highest buyer ratings. See
     * the Top Rated Plus Items and Becoming a Top Rated Seller and qualifying for Top
     * Rated Plus help topics for more information.
     *
     * @var bool
     */
    public $topRatedBuyingExperience = null;

    /**
     * The URL to the image that shows the information on the tyre label.
     *
     * @var string
     */
    public $tyreLabelImageUrl = null;

    /**
     * The price per unit for the item. Some European countries require listings for
     * certain types of products to include the price per unit so buyers can accurately
     * compare prices. For example: &quot;unitPricingMeasure&quot;: &quot;100g&quot;,
     * &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;: &quot;7.99&quot;,
     * &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $unitPrice = null;

    /**
     * The designation, such as size, weight, volume, count, etc., that was used to
     * specify the quantity of the item. This helps buyers compare prices. For example,
     * the following tells the buyer that the item is 7.99 per 100 grams.
     * &quot;unitPricingMeasure&quot;: &quot;100g&quot;, &quot;unitPrice&quot;: {
     * &nbsp;&nbsp;&quot;value&quot;: &quot;7.99&quot;,
     * &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
     *
     * @var string
     */
    public $unitPricingMeasure = null;
}
