<?php

namespace Ebay\Buy\Browse\Api;

use Ebay\Buy\Browse\Model\SearchPagedCollection as SearchPagedCollection;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ItemSummary extends AbstractAPI
{
    /**
     * This method searches for eBay items by various query parameters and retrieves
     * summaries of the items. You can search by keyword, category, eBay product ID
     * (ePID), or GTIN, charity ID, or a combination of these. Note: Only FIXED_PRICE
     * (Buy It Now) items are returned by default. However, this method does return
     * items where both FIXED_PRICE and AUCTION are available as a buying option. After
     * a bid has been placed, items become active auction items and are no longer
     * returned by default, but they remain accessible by filtering for the AUCTION
     * buying option. This method also supports the following: Filtering by the value
     * of one or multiple fields, such as listing format, item condition, price range,
     * location, and more. For the fields supported by this method, see the filter
     * parameter. Retrieving the refinements (metadata) of an item , such as item
     * aspects (color, brand), condition, category, etc. using the fieldgroups
     * parameter. Filtering by item aspects and other refinements using the
     * aspect_filter parameter. Filtering for items that are compatible with a specific
     * product, using the compatibility_filter parameter. Creating aspects histograms,
     * which enables shoppers to drill down in each refinement narrowing the search
     * results. For details and examples of these capabilities, see Browse API in the
     * Buying Integration Guide. Pagination and sort controls There are pagination
     * controls (limit and offset fields) and sort query parameters that control/sort
     * the data that is returned. By default, the results are sorted by &quot;Best
     * Match&quot;. For more information about Best Match, see the eBay help page Best
     * Match. URLs for this method Production URL:
     * https://api.ebay.com/buy/browse/v1/item_summary/search? Sandbox URL:
     * https://api.sandbox.ebay.com/buy/browse/v1/item_summary/search? Request headers
     * This method uses the X-EBAY-C-ENDUSERCTX request header to support revenue
     * sharing for eBay Partner Networks and to improve the accuracy of shipping and
     * delivery time estimations. For details see, Request headers in the Buying
     * Integration Guide. Restrictions This method can return a maximum of 10,000
     * items. For a list of supported sites and other restrictions, see API
     * Restrictions. eBay Partner Network: In order to receive a commission for your
     * sales, you must use the URL returned in the itemAffiliateWebUrl field to forward
     * your buyer to the ebay.com site.
     *
     * @param array $queries options:
     *                       'aspect_filter'	string	This field lets you filter by item aspects. The aspect
     *                       name/value pairs and category, which is required, is used to limit the results
     *                       to specific aspects of the item. For example, in a clothing category one aspect
     *                       pair would be Color/Red. For example, the method below uses the category ID for
     *                       Women's Clothing. This will return only items for a woman's red shirt.
     *                       /buy/browse/v1/item_summary/search?q=shirt&amp;category_ids=15724&amp;aspect_filter=categoryId:15724,Color:{Red}
     *                       To get a list of the aspects pairs and the category, which is returned in the
     *                       dominantCategoryId field, set fieldgroups to ASPECT_REFINEMENTS.
     *                       /buy/browse/v1/item_summary/search?q=shirt&amp;fieldgroups=ASPECT_REFINEMENTS
     *                       Required: The category ID is required twice; once as a URI parameter and as part
     *                       of the aspect_filter. For implementation help, refer to eBay API documentation
     *                       at https://developer.ebay.com/api-docs/buy/browse/types/gct:AspectFilter
     *                       'auto_correct'	string	A query parameter that enables auto correction. Valid
     *                       Values: KEYWORD
     *                       'category_ids'	string	The category ID is used to limit the results. This field
     *                       can have one category ID or a comma separated list of IDs. For example:
     *                       /buy/browse/v1/item_summary/search?category_ids=29792 Note: Currently, you can
     *                       pass in only one category ID per request. You can also use any combination of
     *                       the category_Ids, epid, and q fields. This gives you additional control over the
     *                       result set. For example, let's say you are looking of a toy phone. If you search
     *                       for &quot;phone&quot;, the result set will be mobile phones because this is the
     *                       &quot;Best Match&quot; for this search. But if you also include the toy category
     *                       ID, the results will be what you wanted. For example:
     *                       /buy/browse/v1/item_summary/search?q=phone&amp;category_ids=220 The list of eBay
     *                       category IDs is not published and category IDs are not the same across all the
     *                       eBay marketplaces. You can use the following techniques to find a category by
     *                       site: Use the Category Changes page. Use the Taxonomy API. For details see Get
     *                       Categories for Buy APIs. Submit the following method to get the
     *                       dominantCategoryId for an item. /buy/browse/v1/item_summary/search?q=
     *                       keyword&amp;fieldgroups=ASPECT_REFINEMENTS Note: If a top-level (L1) category is
     *                       specified, you must also include the q query parameter. Required: The method
     *                       must have category_ids, epid, gtin, or q (or any combination of these)
     *                       'charity_ids'	string	The charity ID is used to limit the results to only items
     *                       associated with the specified charity. This field can have one charity ID or a
     *                       comma separated list of IDs. The method will return all the items associated
     *                       with the specified charities. For example:
     *                       /buy/browse/v1/item_summary/search?charity_ids=13-1788491,300108469 The charity
     *                       ID is the charity's registration ID, also known as the Employer Identification
     *                       Number (EIN). In GB, it is the Charity Registration Number (CRN), commonly
     *                       called &quot;Charity Number&quot;. To find the charities eBay supports, you can
     *                       search for a charity at Charity Search or go to Charity Shop. To find the
     *                       charity ID of a specific charity, click on a charity and use the EIN number. For
     *                       example, the charity ID for American Red Cross, is 530196605. You can also use
     *                       any combination of the category_Ids and q fields with a charity_Ids to filter
     *                       the result set. This gives you additional control over the result set.
     *                       Restriction: This is supported only on the US and GB marketplaces. Maximum: 20
     *                       IDs Required: One ID
     *                       'compatibility_filter'	string	This field specifies the attributes used to define
     *                       a specific product. The service searches for items matching the keyword or
     *                       matching the keyword and a product attribute value in the title of the item. For
     *                       example, if the keyword is brakes and compatibility-filter=Year:2018;Make:Honda,
     *                       the items returned are items with brakes, 2018, or Honda in the title. The
     *                       service uses the product attributes to determine if the item is compatible. The
     *                       service returns the attributes that are compatible and the
     *                       CompatibilityMatchEnum value that indicates how well the item matches the
     *                       attributes. For the best compatibility results, submit all the attributes used
     *                       to define the product. Best Practice: Submit all the product attributes for the
     *                       specific product. For more details, see Check compatibility in the Buy
     *                       Integration Guide. Note: The only products supported are cars, trucks, and
     *                       motorcycles. For an example, see the Samples section. Note: Testing in Sandbox
     *                       is only supported using mock data. See Testing search in the Sandbox for
     *                       details. Required: q (keyword) one fitment supported category ID (such as 33559
     *                       Brakes) a least one product attribute name/value pair For implementation help,
     *                       refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/browse/types/gct:CompatibilityFilter
     *                       'epid'	string	The ePID is the eBay product identifier of a product from the eBay
     *                       product catalog. This field limits the results to only items in the specified
     *                       ePID. The Marketing API getMerchandisedProducts method and the Browse API
     *                       getItem, getItemByLegacyId, and getItemsByItemGroup calls return the ePID of the
     *                       product. You can also use the product_summary/search method in the Catalog API
     *                       to search for the ePID of the product. For example:
     *                       /buy/browse/v1/item_summary/search?epid=15032 Maximum: 1 Required: The method
     *                       must have category_ids, epid, gtin, or q (or any combination of these)
     *                       'fieldgroups'	string	This field is a comma separated list of values that lets
     *                       you control what is returned in the response. The default is MATCHING_ITEMS,
     *                       which returns the items that match the keyword or category specified. The other
     *                       values return data that can be used to create histograms or provide additional
     *                       information. Valid Values: ASPECT_REFINEMENTS - This returns the
     *                       aspectDistributions container, which has the dominantCategoryId, matchCount, and
     *                       refinementHref for the various aspects of the items found. For example, if you
     *                       searched for 'Mustang', some of the aspect would be Model Year, Exterior Color,
     *                       Vehicle Mileage, etc. Note: ASPECT_REFINEMENTS are category specific.
     *                       BUYING_OPTION_REFINEMENTS - This returns the buyingOptionDistributions
     *                       container, which has the matchCount and refinementHref for AUCTION and
     *                       FIXED_PRICE (Buy It Now) items. Note: Classified items are not supported and
     *                       only &quot;Buy It Now&quot; (non-auction) items are returned.
     *                       CATEGORY_REFINEMENTS - This returns the categoryDistributions container, which
     *                       has the categories that the item is in. CONDITION_REFINEMENTS - This returns the
     *                       conditionDistributions container, such as NEW, USED, etc. Within these groups
     *                       are multiple states of the condition. For example, New can be New without tag,
     *                       New in box, New without box, etc. EXTENDED - This returns the shortDescription
     *                       field, which provides condition and item aspect information and the
     *                       itemLocation.city field. MATCHING_ITEMS - This is meant to be used with one or
     *                       more of the refinement values above. You use this to return the specified
     *                       refinements and all the matching items. FULL - This returns all the refinement
     *                       containers and all the matching items. Code so that your app gracefully handles
     *                       any future changes to this list. Default: MATCHING_ITEMS
     *                       'filter'	string	This field supports multiple field filters that can be used to
     *                       limit/customize the result set. For example:
     *                       /buy/browse/v1/item_summary/search?q=shirt&amp;filter=price:[10..50] You can
     *                       also combine filters.
     *                       /buy/browse/v1/item_summary/search?q=shirt&amp;filter=price:[10..50],sellers:{rpseller|bigSal}
     *                       The following are the supported filters. For details and examples for all the
     *                       filters, see Buy API Field Filters. bidCount buyingOptions charityOnly
     *                       conditionIds conditions deliveryCountry deliveryOptions deliveryPostalCode
     *                       excludeCategoryIds excludeSellers guaranteedDeliveryInDays itemEndDate
     *                       itemLocationCountry itemStartDate maxDeliveryCost paymentMethods pickupCountry
     *                       pickupPostalCode pickupRadius pickupRadiusUnit price priceCurrency
     *                       qualifiedPrograms returnsAccepted searchInDescription sellerAccountTypes sellers
     *                       For implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/browse/types/cos:FilterField
     *                       'gtin'	string	This field lets you search by the Global Trade Item Number of the
     *                       item as defined by https://www.gtin.info. You can search only by UPC (Universal
     *                       Product Code). If you have other formats of GTIN, you need to search by keyword.
     *                       For example: /buy/browse/v1/item_summary/search?gtin=099482432621 Maximum: 1
     *                       Required: The method must have category_ids, epid, gtin, or q (or any
     *                       combination of these)
     *                       'limit'	string	The number of items, from the result set, returned in a single
     *                       page. Default: 50 Maximum number of items per page (limit): 200 Maximum number
     *                       of items in a result set: 10,000
     *                       'offset'	string	Specifies the number of items to skip in the result set. This is
     *                       used with the limit field to control the pagination of the output. If offset is
     *                       0 and limit is 10, the method will retrieve items 1-10 from the list of items
     *                       returned, if offset is 10 and limit is 10, the method will retrieve items 11
     *                       thru 20 from the list of items returned. Valid Values: 0-10,000 (inclusive)
     *                       Default: 0 Maximum number of items returned: 10,000
     *                       'q'	string	A string consisting of one or more keywords that are used to search
     *                       for items on eBay. The keywords are handled as follows: If the keywords are
     *                       separated by a space, it is treated as an AND. In the following example, the
     *                       query returns items that have iphone AND ipad.
     *                       /buy/browse/v1/item_summary/search?q=iphone ipad If the keywords are input using
     *                       parentheses and separated by a comma, or if they are URL-encoded, it is treated
     *                       as an OR. In the following examples, the query returns items that have iphone OR
     *                       ipad. /buy/browse/v1/item_summary/search?q=(iphone, ipad)
     *                       /buy/browse/v1/item_summary/search?q=%28iphone%2c%20ipad%29 Restriction: The *
     *                       wildcard character is not allowed in this field. Required: The method must have
     *                       category_ids, epid, gtin, or q (or any combination of these).
     *                       'sort'	string	Specifies the order and the field name to use to sort the items.
     *                       You can sort items by price (in ascending or descending order) or by distance
     *                       (only applicable if the &quot;pickup&quot; filters are used, and only ascending
     *                       order is supported). You can also sort items by listing date, with the most
     *                       recently listed (newest) items appearing first. Note: To sort in descending
     *                       order, insert a hyphen (-) before the field name. If no sort parameter is
     *                       submitted, the result set is sorted by &quot;Best Match&quot;. The following are
     *                       examples of using the sort query parameter. Sort Result sort=price Sorts by
     *                       price in ascending order (lowest price first) sort=-price Sorts by price in
     *                       descending order (highest price first) sort=distance Sorts by distance in
     *                       ascending order (shortest distance first) sort=newlyListed Sorts by listing date
     *                       (most recently listed/newest items first) Default: Ascending For implementation
     *                       help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/browse/types/cos:SortField
     *
     * @return SearchPagedCollection
     */
    public function search(array $queries = []): SearchPagedCollection
    {
        return $this->client->request('search', 'GET', 'item_summary/search',
            [
                'query' => $queries,
            ]
        );
    }
}
