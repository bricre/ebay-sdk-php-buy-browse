<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the location of an item, such as
 * information typically used for an address, including postal code, county,
 * state/province, street address, city, and country (2-digit ISO code).
 */
class ItemLocationImpl extends AbstractModel
{
    /**
     * The first line of the street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. This field may contain such values as an
     * apartment or suite number.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city in which the item is located. Restriction: This field is populated in
     * the search method response only when fieldgroups = EXTENDED.
     *
     * @var string
     */
    public $city = null;

    /**
     * The two-letter ISO 3166 standard code that indicates the country in which the
     * item is located. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county in which the item is located.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal code (or zip code in US) where the item is located. Sellers set a
     * postal code (or zip code in US) for items when they are listed. The postal code
     * is used for calculating proximity searches. It is anonymized when returned in
     * itemLocation.postalCode via the API.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state or province in which the item is located.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
