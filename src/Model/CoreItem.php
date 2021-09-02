<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An array of containers with the details for all of the items returned.
 */
class CoreItem extends AbstractModel
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
     * (Primary Item Aspect) The age group for which the product is recommended. For
     * example, newborn, infant, toddler, kids, adult, etc. All the item aspects,
     * including this aspect, are returned in the localizedAspects container.
     *
     * @var string
     */
    public $ageGroup = null;

    /**
     * A container for information about whether an item is qualified for the
     * Authenticity Guarantee program. Under the Authenticity Guarantee program, the
     * seller ships a purchased item to a a third-party authenticator who inspects the
     * item and provides an authentication card for it before the item is shipped to
     * the buyer. If the buyer returns the item, the authenticator first verifies that
     * it is the same item in the same condition before returning it to the seller.
     * Note: Refer to the Authenticity Guarantee page for more information.
     *
     * @var \Ebay\Buy\Browse\Model\AuthenticityGuaranteeProgram
     */
    public $authenticityGuarantee = null;

    /**
     * A container for information about whether an item is from a verified seller.
     *
     * @var \Ebay\Buy\Browse\Model\AuthenticityVerificationProgram
     */
    public $authenticityVerification = null;

    /**
     * A list of available coupons for the item.
     *
     * @var \Ebay\Buy\Browse\Model\AvailableCoupon[]
     */
    public $availableCoupons = null;

    /**
     * This integer value indicates the total number of bids that have been placed
     * against an auction item. This field is returned only for auction items.
     *
     * @var int
     */
    public $bidCount = null;

    /**
     * (Primary Item Aspect) The name brand of the item, such as Nike, Apple, etc. All
     * the item aspects, including this aspect, are returned in the localizedAspects
     * container.
     *
     * @var string
     */
    public $brand = null;

    /**
     * A comma separated list of all the purchase options available for the item. The
     * values returned are: FIXED_PRICE - Indicates the buyer can purchase the item for
     * a set price using the Buy It Now button. AUCTION - Indicates the buyer can place
     * a bid for the item. After the first bid is placed, this becomes a live auction
     * item and is the only buying option for this item. BEST_OFFER - Indicates the
     * buyer can send the seller a price they're willing to pay for the item. The
     * seller can accept, reject, or send a counter offer. For more information on how
     * this works, see Making a Best Offer. Code so that your app gracefully handles
     * any future changes to this list.
     *
     * @var string[]
     */
    public $buyingOptions = null;

    /**
     * The ID of the leaf category for this item. A leaf category is the lowest level
     * in that category and has no children.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * Text that shows the category hierarchy of the item. For example:
     * Computers/Tablets &amp; Networking, Laptops &amp; Netbooks, PC Laptops &amp;
     * Netbooks.
     *
     * @var string
     */
    public $categoryPath = null;

    /**
     * (Primary Item Aspect) Text describing the color of the item. All the item
     * aspects, including this aspect, are returned in the localizedAspects container.
     *
     * @var string
     */
    public $color = null;

    /**
     * A short text description for the condition of the item, such as New or Used. For
     * a list of condition names, see Item Condition IDs and Names. Code so that your
     * app gracefully handles any future changes to this list. Note: In all eBay
     * marketplaces, Condition ID 2000 now maps to an item condition of 'Certified
     * Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified
     * Refurbished', a seller must be pre-qualified by eBay for this feature.
     *
     * @var string
     */
    public $condition = null;

    /**
     * A full text description for the condition of the item. This field elaborates on
     * the value specified in the condition field and provides full details for the
     * condition of the item. Note: In all eBay marketplaces, Condition ID 2000 now
     * maps to an item condition of 'Certified Refurbished', and not 'Manufacturer
     * Refurbished'. To list an item as 'Certified Refurbished', a seller must be
     * pre-qualified by eBay for this feature.
     *
     * @var string
     */
    public $conditionDescription = null;

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
     * The container that returns the current highest bid for an auction item. The
     * value (string) field shows the dollar value of the current highest bid, and the
     * currency (3-digit ISO code) field denotes the currency associated with that bid
     * value. This container will only be returned for auction items.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $currentBidPrice = null;

    /**
     * This field indicates if the item can be purchased using the Buy Order API. If
     * the value of this field is true, this indicates that the item can be purchased
     * using the Order API. If the value of this field is false, this indicates that
     * the item cannot be purchased using the Order API and must be purchased on the
     * eBay site.
     *
     * @var bool
     */
    public $eligibleForInlineCheckout = null;

    /**
     * This indicates if the item can be purchased using Guest Checkout in the Order
     * API. You can use this flag to exclude items from your inventory that are not
     * eligible for Guest Checkout, such as gift cards.
     *
     * @var bool
     */
    public $enabledForGuestCheckout = null;

    /**
     * This indicates the European energy efficiency rating (EEK) of the item. This
     * field is returned only if the seller specified the energy efficiency rating. The
     * rating is a set of energy efficiency classes from A to G, where 'A' is the most
     * energy efficient and 'G' is the least efficient. This rating helps buyers choose
     * between various models. When the manufacturer's specifications for this item are
     * available, the link to this information is returned in the productFicheWebUrl
     * field.
     *
     * @var string
     */
    public $energyEfficiencyClass = null;

    /**
     * An EPID is the eBay product identifier of a product from the eBay product
     * catalog. This indicates the product in which the item belongs.
     *
     * @var string
     */
    public $epid = null;

    /**
     * The estimated number of this item that are available for purchase. Because the
     * quantity of an item can change several times within a second, it is impossible
     * to return the exact quantity. So instead of returning quantity, the estimated
     * availability of the item is returned.
     *
     * @var \Ebay\Buy\Browse\Model\EstimatedAvailability[]
     */
    public $estimatedAvailabilities = null;

    /**
     * (Primary Item Aspect) The gender for the item. This is used for items that could
     * vary by gender, such as clothing. For example: male, female, or unisex. All the
     * item aspects, including this aspect, are returned in the localizedAspects
     * container.
     *
     * @var string
     */
    public $gender = null;

    /**
     * The unique Global Trade Item number of the item as defined by
     * https://www.gtin.info. This can be a UPC (Universal Product Code), EAN (European
     * Article Number), or an ISBN (International Standard Book Number) value.
     *
     * @var string
     */
    public $gtin = null;

    /**
     * The URL of the primary image of the item. The other images of the item are
     * returned in the additionalImages container.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $image = null;

    /**
     * The ePID (eBay Product ID of a product from the eBay product catalog) for the
     * item, which has been programmatically determined by eBay using the item's title,
     * aspects, and other data. If the seller provided an ePID for the item, the
     * seller's value is returned in the epid field. Note: This field is returned only
     * for authorized Partners.
     *
     * @var string
     */
    public $inferredEpid = null;

    /**
     * The URL of the View Item page of the item, which includes the affiliate tracking
     * ID. This field is only returned if the eBay partner enables affiliate tracking
     * for the item by including the X-EBAY-C-ENDUSERCTX request header in the method.
     * Note: eBay Partner Network, in order to be commissioned for your sales, you must
     * use this URL to forward your buyer to the ebay.com site.
     *
     * @var string
     */
    public $itemAffiliateWebUrl = null;

    /**
     * The date and time up to which the items can be purchased. This value is returned
     * in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local
     * time of the buyer. Note: This field is not returned for Good 'Til Cancelled
     * (GTC) listings.
     *
     * @var string
     */
    public $itemEndDate = null;

    /**
     * The unique RESTful identifier of the item.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The physical location of the item.
     *
     * @var \Ebay\Buy\Browse\Model\Address
     */
    public $itemLocation = null;

    /**
     * The URL of the View Item page of the item. This enables you to include a
     * &quot;Report Item on eBay&quot; link that takes the buyer to the View Item page
     * on eBay. From there they can report any issues regarding this item to eBay.
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
     * An array of containers that show the complete list of the aspect name/value
     * pairs that describe the variation of the item.
     *
     * @var \Ebay\Buy\Browse\Model\TypedNameValue[]
     */
    public $localizedAspects = null;

    /**
     * The number of items in a lot. In other words, a lot size is the number of items
     * that are being sold together. A lot is a set of two or more items included in a
     * single listing that must be purchased together in a single order line item. All
     * the items in the lot are the same but there can be multiple items in a single
     * lot, such as the package of batteries shown in the example below. Item Lot
     * Definition Lot Size A package of 24 AA batteries A box of 10 packages 10 A
     * P235/75-15 Goodyear tire 4 tires 4 Fashion Jewelry Rings Package of 100 assorted
     * rings 100 Note: Lots are not supported in all categories.
     *
     * @var int
     */
    public $lotSize = null;

    /**
     * The original price and the discount amount and percentage.
     *
     * @var \Ebay\Buy\Browse\Model\MarketingPrice
     */
    public $marketingPrice = null;

    /**
     * (Primary Item Aspect) Text describing what the item is made of. For example,
     * silk. All the item aspects, including this aspect, are returned in the
     * localizedAspects container.
     *
     * @var string
     */
    public $material = null;

    /**
     * The minimum price of the next bid, which means to place a bid it must to equal
     * to or greater than this amount. If the auction hasn't received any bids, the
     * minimum bid price is the same as the starting bid. Otherwise, the minimum bid
     * price is equal to the current bid plus the bid increment. For details about bid
     * increments, see Automatic bidding.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $minimumPriceToBid = null;

    /**
     * The manufacturer's part number, which is a unique number that identifies a
     * specific product. To identify the product, this is always used along with brand.
     *
     * @var string
     */
    public $mpn = null;

    /**
     * The payment methods for the item, including the payment method types, brands,
     * and instructions for the buyer.
     *
     * @var \Ebay\Buy\Browse\Model\PaymentMethod[]
     */
    public $paymentMethods = null;

    /**
     * The cost of just the item. This amount does not include any adjustments such as
     * discounts or shipping costs. Note: The price does include the value-added tax
     * (VAT) for applicable jurisdictions when requested from supported marketplaces.
     * In this case, users must pass the X-EBAY-C-MARKETPLACE-ID request header
     * specifying the supported marketplace (such as EBAY_GB) to see the VAT-inclusive
     * pricing. For more information on VAT, refer to VAT Obligations in the EU.
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
     * The container that returns details of a primary item group (parent ID of an item
     * group). An item group is an item that has various aspect differences, such as
     * color, size, storage capacity, etc. When an item group is created, one of the
     * item variations, such as the red shirt size L, is chosen as the
     * &quot;parent&quot;. All the other items in the group are the children, such as
     * the blue shirt size L, red shirt size M, etc. Note: This container is returned
     * if the item_id in the request is for an item group (items with variations, such
     * as color and size). This container is also returned on a request for
     * item_group_ids.
     *
     * @var \Ebay\Buy\Browse\Model\ItemGroupSummary
     */
    public $primaryItemGroup = null;

    /**
     * The container that returns the product rating details, such as review count,
     * rating histogram, and average rating.
     *
     * @var \Ebay\Buy\Browse\Model\ReviewRating
     */
    public $primaryProductReviewRating = null;

    /**
     * The container that returns the product information of the item.
     *
     * @var \Ebay\Buy\Browse\Model\Product
     */
    public $product = null;

    /**
     * The URL of a page containing the manufacturer's specification of this item,
     * which helps buyers make a purchasing decision. This information is available
     * only for items that include the European energy efficiency rating (EEK) but is
     * not available for all items with an EEK rating and is returned only if this
     * information is available. The EEK rating of the item is returned in the
     * energyEfficiencyClass field.
     *
     * @var string
     */
    public $productFicheWebUrl = null;

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
     * The maximum number for a specific item that one buyer can purchase.
     *
     * @var int
     */
    public $quantityLimitPerBuyer = null;

    /**
     * This indicates if the reserve price of the item has been met. A reserve price is
     * set by the seller and is the minimum amount the seller is willing to sell the
     * item for. If the highest bid is not equal to or higher than the reserve price
     * when the auction ends, the listing ends and the item is not sold. Note: This is
     * returned only for auctions that have a reserve price.
     *
     * @var bool
     */
    public $reservePriceMet = null;

    /**
     * The container that returns an overview of the seller's return policy.
     *
     * @var \Ebay\Buy\Browse\Model\ItemReturnTerms
     */
    public $returnTerms = null;

    /**
     * The container that returns basic and detailed about the seller of the item, such
     * as name, feedback score, and contact information.
     *
     * @var \Ebay\Buy\Browse\Model\SellerDetail
     */
    public $seller = null;

    /**
     * An identifier generated/incremented when a seller revises the item. There are
     * two types of item revisions: Seller changes, such as changing the title eBay
     * system changes, such as changing the quantity when an item is purchased This ID
     * is changed only when the seller makes a change to the item. This means you
     * cannot use this value to determine if the quantity has changed.
     *
     * @var string
     */
    public $sellerItemRevision = null;

    /**
     * An array of shipping options containers that have the details about cost,
     * carrier, etc. of one shipping option.
     *
     * @var \Ebay\Buy\Browse\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * The container that returns the geographic regions to be included and excluded
     * that define where the item can be shipped.
     *
     * @var \Ebay\Buy\Browse\Model\ShipToLocations
     */
    public $shipToLocations = null;

    /**
     * This text string is derived from the item condition and the item aspects (such
     * as size, color, capacity, model, brand, etc.).
     *
     * @var string
     */
    public $shortDescription = null;

    /**
     * (Primary Item Aspect) The size of the item. For example, '7' for a size 7 shoe.
     * All the item aspects, including this aspect, are returned in the
     * localizedAspects container.
     *
     * @var string
     */
    public $size = null;

    /**
     * (Primary Item Aspect) The sizing system of the country. All the item aspects,
     * including this aspect, are returned in the localizedAspects container. Valid
     * Values: AU (Australia), BR (Brazil), CN (China), DE (Germany), EU (European
     * Union), FR (France), IT (Italy), JP (Japan), MX (Mexico), US (USA), UK (United
     * Kingdom) Code so that your app gracefully handles any future changes to this
     * list.
     *
     * @var string
     */
    public $sizeSystem = null;

    /**
     * (Primary Item Aspect) Text describing a size group in which the item would be
     * included, such as regular, petite, plus, big-and-tall or maternity. All the item
     * aspects, including this aspect, are returned in the localizedAspects container.
     *
     * @var string
     */
    public $sizeType = null;

    /**
     * A subtitle is optional and allows the seller to provide more information about
     * the product, possibly including keywords that may assist with search results.
     *
     * @var string
     */
    public $subtitle = null;

    /**
     * The container for the tax information for the item.
     *
     * @var \Ebay\Buy\Browse\Model\Taxes[]
     */
    public $taxes = null;

    /**
     * This indicates if the item a top-rated plus item. There are three benefits of a
     * top-rated plus item; a minimum 30-day money-back return policy, shipping the
     * items in 1 business day with tracking provided, and the added comfort of knowing
     * this item is from experienced sellers with the highest buyer ratings. See the
     * Top Rated Plus Items and Becoming a Top Rated Seller and qualifying for Top
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
     * This integer value indicates the number of different eBay users who have placed
     * one or more bids on an auction item. This field is only applicable to auction
     * items.
     *
     * @var int
     */
    public $uniqueBidderCount = null;

    /**
     * This is the price per unit for the item. Some European countries require
     * listings for certain types of products to include the price per unit so buyers
     * can accurately compare prices. For example: &quot;unitPricingMeasure&quot;:
     * &quot;100g&quot;, &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;:
     * &quot;7.99&quot;, &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
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
