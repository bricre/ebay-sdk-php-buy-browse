<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for an address.
 */
class Address extends AbstractModel
{
    /**
     * The first line of the street address. Note: This is conditionally returned in
     * the itemLocation field.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. This field is not always used, but can be
     * used for 'Suite Number' or 'Apt Number'.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city of the address.
     *
     * @var string
     */
    public $city = null;

    /**
     * The two-letter ISO 3166 standard of the country of the address. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county of the address.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal code (or zip code in US) code of the address. Sellers set a postal
     * code (or zip code in US) for items when they are listed. The postal code is used
     * for calculating proximity searches. It is anonymized when returned in
     * itemLocation.postalCode via the API.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state or province of the address. Note: This is conditionally returned in
     * the itemLocation field.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
