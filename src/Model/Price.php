<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the monetary value and currency of the
 * price of the item.
 */
class Price extends AbstractModel
{
    /**
     * The three-letter ISO 4217 code representing the currency of the amount in the
     * convertedFromValue field. This value is the pre-conversion currency. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $convertedFromCurrency = null;

    /**
     * The monetary amount before any conversion is performed, in the currency
     * specified by the convertedFromCurrency field. This value is the pre-conversion
     * amount. The value field contains the converted amount of this value, in the
     * currency specified by the currency field.
     *
     * @var string
     */
    public $convertedFromValue = null;

    /**
     * The three-letter ISO 4217 code representing the currency of the amount in the
     * value field. If currency conversion/localization was performed, this is the
     * post-conversion currency of the amount in the value field. Default: The currency
     * of the user's country. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The amount of the currency specified in the currency field. The value of
     * currency defaults to the standard currency used by the country of the eBay site
     * offering the item. If currency conversion/localization was performed, this is
     * the post-conversion amount. Default: The currency of the user's country.
     *
     * @var string
     */
    public $value = null;
}
