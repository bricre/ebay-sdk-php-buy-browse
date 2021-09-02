<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for a paginated result set. The response
 * consists of 0 or more sequenced pages where each page has 0 or more items.
 */
class SearchPagedCollection extends AbstractModel
{
    /**
     * The auto-corrected inputs.
     *
     * @var \Ebay\Buy\Browse\Model\AutoCorrections
     */
    public $autoCorrections = null;

    /**
     * The URI of the current page of results. The following example of the search
     * method returns items 1 thru 5 from the list of items found.
     * https://api.ebay.com/buy/v1/item_summary/search?q=shirt&amp;limit=5&amp;offset=0.
     *
     * @var string
     */
    public $href = null;

    /**
     * An array of the items on this page. The items are sorted according to the
     * sorting method specified in the request.
     *
     * @var \Ebay\Buy\Browse\Model\ItemSummary[]
     */
    public $itemSummaries = null;

    /**
     * The value of the limit parameter submitted in the request, which is the maximum
     * number of items to return on a page, from the result set. A result set is the
     * complete set of items returned by the method.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The URI for the next page of results. This value is returned if there is an
     * additional page of results to return from the result set. The following example
     * of the search method returns items 5 thru 10 from the list of items found.
     * https://api.ebay.com/buy/v1/item_summary/search?query=t-shirts&amp;limit=5&amp;offset=10.
     *
     * @var string
     */
    public $next = null;

    /**
     * This value indicates the offset used for current page of items being returned.
     * Assume the initial request used an offset of 0 and a limit of 3. Then in the
     * first page of results, this value would be 0, and items 1-3 are returned. For
     * the second page, this value is 3 and so on.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The URI for the previous page of results. This is returned if there is a
     * previous page of results from the result set. The following example of the
     * search method returns items 1 thru 5 from the list of items found, which would
     * be the first set of items returned.
     * https://api.ebay.com/buy/v1/item_summary/search?query=t-shirts&amp;limit=5&amp;offset=0.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The container for all the search refinements.
     *
     * @var \Ebay\Buy\Browse\Model\Refinement
     */
    public $refinement = null;

    /**
     * The total number of items that match the input criteria.
     *
     * @var int
     */
    public $total = null;

    /**
     * The container with all the warnings for the request.
     *
     * @var \Ebay\Buy\Browse\Model\Error[]
     */
    public $warnings = null;
}
