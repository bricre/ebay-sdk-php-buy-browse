<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to provide region details for a tax jurisdiction.
 */
class Region extends AbstractModel
{
    /**
     * A localized text string that indicates the name of the region. Taxes are
     * generally charged at the state/province level or at the country level in the
     * case of VAT tax.
     *
     * @var string
     */
    public $regionName = null;

    /**
     * An enumeration value that indicates the type of region for the tax jurisdiction.
     * Valid Values: STATE_OR_PROVINCE - Indicates the region is a state or province
     * within a country, such as California or New York in the US, or Ontario or
     * Alberta in Canada. COUNTRY - Indicates the region is a single country. Code so
     * that your app gracefully handles any future changes to this list. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:RegionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $regionType = null;
}
