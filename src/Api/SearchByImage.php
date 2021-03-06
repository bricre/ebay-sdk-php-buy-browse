<?php

namespace Ebay\Buy\Browse\Api;

use Ebay\Buy\Browse\Model\SearchByImageRequest as SearchByImageRequest;
use Ebay\Buy\Browse\Model\SearchPagedCollection as SearchPagedCollection;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class SearchByImage extends AbstractAPI
{
    /**
     * This is an Experimental method. This method searches for eBay items based on a
     * image and retrieves summaries of the items. You pass in a Base64 image in the
     * request payload and can refine the search by category, or eBay product ID
     * (ePID), or a combination of these using URI parameters. To get the Base64 image
     * string, you can use sites such as
     * https://codebeautify.org/image-to-base64-converter. This method also supports
     * the following: Filtering by the value of one or multiple fields, such as listing
     * format, item condition, price range, location, and more. For the fields
     * supported by this method, see the filter parameter. Filtering by item aspects
     * using the aspect_filter parameter. For details and examples of these
     * capabilities, see Browse API in the Buying Integration Guide. Pagination and
     * sort controls There are pagination controls (limit and offset fields) and sort
     * query parameters that control/sort the data that is returned. By default, the
     * results are sorted by &quot;Best Match&quot;. For more information about Best
     * Match, see the eBay help page Best Match. URLs for this method Production URL:
     * https://api.ebay.com/buy/browse/v1/item_summary/search_by_image? Sandbox URL:
     * Due to the data available, this method is not supported in the eBay Sandbox. To
     * test your integration, use the Production URL. Request headers This method uses
     * the X-EBAY-C-ENDUSERCTX request header to support revenue sharing for eBay
     * Partner Networks and to improve the accuracy of shipping and delivery time
     * estimations. For details see, Request headers in the Buying Integration Guide.
     * URL Encoding for Parameters Query parameter values need to be URL encoded. For
     * details, see URL encoding query parameter values. For readability, code examples
     * in this document have not been URL encoded. Restrictions This method can return
     * a maximum of 10,000 items. For a list of supported sites and other restrictions,
     * see API Restrictions. eBay Partner Network: In order to receive a commission for
     * your sales, you must use the URL returned in the itemAffiliateWebUrl field to
     * forward your buyer to the ebay.com site.
     *
     * @param SearchByImageRequest $Model   the container for the image information
     *                                      fields
     * @param array                $queries options:
     *                                      'aspect_filter'	string	This field lets you filter by item aspects. The aspect
     *                                      name/value pairs and category, which is required, is used to limit the results
     *                                      to specific aspects of the item. For example, in a clothing category one aspect
     *                                      pair would be Color/Red. For example, the method below uses the category ID for
     *                                      Women's Clothing. This will return only items for a woman's red shirt.
     *                                      category_ids=15724&amp;aspect_filter=categoryId:15724,Color:{Red} Required: The
     *                                      category ID is required twice; once as a URI parameter and as part of the
     *                                      aspect_filter. For implementation help, refer to eBay API documentation at
     *                                      https://developer.ebay.com/api-docs/buy/browse/types/gct:AspectFilter
     *                                      'category_ids'	string	The category ID is used to limit the results. This field
     *                                      can have one category ID or a comma separated list of IDs. Note: Currently, you
     *                                      can pass in only one category ID per request. You can also use any combination
     *                                      of the category_Ids and epid fields. This gives you additional control over the
     *                                      result set. The list of eBay category IDs is not published and category IDs are
     *                                      not the same across all the eBay marketplaces. You can use the following
     *                                      techniques to find a category by site: Use the Category Changes page. Use the
     *                                      Taxonomy API. For details see Get Categories for Buy APIs. Submit the following
     *                                      method to get the dominantCategoryId for an item.
     *                                      /buy/browse/v1/item_summary/search?q= keyword&amp;fieldgroups=ASPECT_REFINEMENTS
     *                                      Required: The method must have category_ids or epid (or any combination of
     *                                      these)
     *                                      'charity_ids'	string	The charity ID is used to limit the results to only items
     *                                      associated with the specified charity. This field can have one charity ID or a
     *                                      comma separated list of IDs. The method will return all the items associated
     *                                      with the specified charities. For example:
     *                                      /buy/browse/v1/item_summary/search?charity_ids=13-1788491,300108469 The charity
     *                                      ID is the charity's registration ID, also known as the Employer Identification
     *                                      Number (EIN). In GB, it is the Charity Registration Number (CRN), commonly
     *                                      called &quot;Charity Number&quot;. To find the charities eBay supports, you can
     *                                      search for a charity at Charity Search or go to Charity Shop. To find the
     *                                      charity ID of a specific charity, click on a charity and use the EIN number. For
     *                                      example, the charity ID for American Red Cross, is 530196605. You can also use
     *                                      any combination of the category_Ids and q fields with a charity_Ids to filter
     *                                      the result set. This gives you additional control over the result set.
     *                                      Restriction: This is supported only on the US and GB marketplaces. Maximum: 20
     *                                      IDs Required: One ID
     *                                      'fieldgroups'	string	This field is a comma separated list of values that lets
     *                                      you control what is returned in the response. The default is MATCHING_ITEMS,
     *                                      which returns the items that match the keyword or category specified. The other
     *                                      values return data that can be used to create histograms or provide additional
     *                                      information. Valid Values: ASPECT_REFINEMENTS - This returns the
     *                                      aspectDistributions container, which has the dominantCategoryId, matchCount, and
     *                                      refinementHref for the various aspects of the items found. For example, if you
     *                                      searched for 'Mustang', some of the aspect would be Model Year, Exterior Color,
     *                                      Vehicle Mileage, etc. Note: ASPECT_REFINEMENTS are category specific.
     *                                      BUYING_OPTION_REFINEMENTS - This returns the buyingOptionDistributions
     *                                      container, which has the matchCount and refinementHref for AUCTION and
     *                                      FIXED_PRICE (Buy It Now) items. Note: Classified items are not supported and
     *                                      only &quot;Buy It Now&quot; (non-auction) items are returned.
     *                                      CATEGORY_REFINEMENTS - This returns the categoryDistributions container, which
     *                                      has the categories that the item is in. CONDITION_REFINEMENTS - This returns the
     *                                      conditionDistributions container, such as NEW, USED, etc. Within these groups
     *                                      are multiple states of the condition. For example, New can be New without tag,
     *                                      New in box, New without box, etc. EXTENDED - This returns the shortDescription
     *                                      field, which provides condition and item aspect information and the
     *                                      itemLocation.city field. MATCHING_ITEMS - This is meant to be used with one or
     *                                      more of the refinement values above. You use this to return the specified
     *                                      refinements and all the matching items. FULL - This returns all the refinement
     *                                      containers and all the matching items. Code so that your app gracefully handles
     *                                      any future changes to this list. Default: MATCHING_ITEMS
     *                                      'filter'	string	This field supports multiple field filters that can be used to
     *                                      limit/customize the result set. For example:
     *                                      /buy/browse/v1/item_summary/search?q=shirt&amp;filter=price:[10..50] You can
     *                                      also combine filters.
     *                                      /buy/browse/v1/item_summary/search?q=shirt&amp;filter=price:[10..50],sellers:{rpseller|bigSal}
     *                                      The following are the supported filters. For details and examples for all the
     *                                      filters, see Buy API Field Filters. bidCount buyingOptions charityOnly
     *                                      conditionIds conditions deliveryCountry deliveryOptions deliveryPostalCode
     *                                      excludeCategoryIds excludeSellers guaranteedDeliveryInDays itemEndDate
     *                                      itemLocationCountry itemStartDate maxDeliveryCost paymentMethods pickupCountry
     *                                      pickupPostalCode pickupRadius pickupRadiusUnit price priceCurrency
     *                                      qualifiedPrograms returnsAccepted sellerAccountTypes sellers For implementation
     *                                      help, refer to eBay API documentation at
     *                                      https://developer.ebay.com/api-docs/buy/browse/types/cos:FilterField
     *                                      'limit'	string	The number of items, from the result set, returned in a single
     *                                      page. Default: 50 Maximum number of items per page (limit): 200 Maximum number
     *                                      of items in a result set: 10,000
     *                                      'offset'	string	The number of items to skip in the result set. This is used with
     *                                      the limit field to control the pagination of the output. If offset is 0 and
     *                                      limit is 10, the method will retrieve items 1-10 from the list of items
     *                                      returned, if offset is 10 and limit is 10, the method will retrieve items 11
     *                                      thru 20 from the list of items returned. Valid Values: 0-10,000 (inclusive)
     *                                      Default: 0 Maximum number of items returned: 10,000
     *                                      'sort'	string	Specifies the order and the field name to use to sort the items.
     *                                      You can sort items by price (in ascending or descending order) or by distance
     *                                      (only applicable if the &quot;pickup&quot; filters are used, and only ascending
     *                                      order is supported). You can also sort items by listing date, with the most
     *                                      recently listed (newest) items appearing first. Note: To sort in descending
     *                                      order, insert a hyphen (-) before the field name. If no sort parameter is
     *                                      submitted, the result set is sorted by &quot;Best Match&quot;. The following are
     *                                      examples of using the sort query parameter. Sort Result sort=price Sorts by
     *                                      price in ascending order (lowest price first) sort=-price Sorts by price in
     *                                      descending order (highest price first) sort=distance Sorts by distance in
     *                                      ascending order (shortest distance first) sort=newlyListed Sorts by listing date
     *                                      (most recently listed/newest items first) Default: Ascending For implementation
     *                                      help, refer to eBay API documentation at
     *                                      https://developer.ebay.com/api-docs/buy/browse/types/cos:SortField
     *
     * @return SearchPagedCollection
     */
    public function searchByImage(SearchByImageRequest $Model, array $queries = []): SearchPagedCollection
    {
        return $this->client->request('searchByImage', 'POST', 'item_summary/search_by_image',
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }
}
